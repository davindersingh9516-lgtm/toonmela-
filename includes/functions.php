<?php

define('SITE_NAME', 'ToonMela');
define('SITE_TAGLINE', 'Kahaniyon Ka Mela');
$_host = $_SERVER['HTTP_HOST'] ?? 'localhost';
define('SITE_URL', (str_contains($_host, 'localhost') || str_contains($_host, '127.0.0.1')) ? '/' : 'https://toonmela.com/');
define('SITE_CANONICAL', 'https://toonmela.com/');
define('SITE_DESC', 'Moral stories for all ages in Hindi & English. Panchtantra, Fairy Tales, Life Lessons aur bahut kuch.');

function get_stories() {
    static $stories = null;
    if ($stories !== null) return $stories;

    $file = __DIR__ . '/../data/stories.json';
    if (!file_exists($file)) return [];
    $stories = json_decode(file_get_contents($file), true) ?: [];
    usort($stories, function($a, $b) { return strcmp($b['date'], $a['date']); });
    return $stories;
}

function get_story_by_slug($slug) {
    $stories = get_stories();
    foreach ($stories as $s) {
        if ($s['slug'] === $slug) return $s;
    }
    return null;
}

function get_stories_by_age($age, $limit = 0) {
    $stories = get_stories();
    $filtered = array_filter($stories, function($s) use ($age) { return $s['age'] === $age; });
    if ($limit > 0) $filtered = array_slice($filtered, 0, $limit);
    return array_values($filtered);
}

function get_stories_by_category($cat, $limit = 0) {
    $stories = get_stories();
    $filtered = array_filter($stories, function($s) use ($cat) { return $s['category'] === $cat; });
    if ($limit > 0) $filtered = array_slice($filtered, 0, $limit);
    return array_values($filtered);
}

function track_click($slug) {
    $file = __DIR__ . '/../data/clicks.json';
    $fp = @fopen($file, 'c+');
    if (!$fp) return;
    flock($fp, LOCK_EX);
    $content = '';
    while (!feof($fp)) $content .= fread($fp, 8192);
    $clicks = json_decode($content, true) ?: [];
    $clicks[$slug] = ($clicks[$slug] ?? 0) + 1;
    ftruncate($fp, 0);
    rewind($fp);
    fwrite($fp, json_encode($clicks));
    flock($fp, LOCK_UN);
    fclose($fp);
}

function get_reviews($slug) {
    $file = __DIR__ . '/../data/reviews.json';
    if (!file_exists($file)) return [];
    $all = json_decode(file_get_contents($file), true) ?: [];
    $reviews = $all[$slug] ?? [];
    usort($reviews, function ($a, $b) { return strtotime($b['date']) - strtotime($a['date']); });
    return $reviews;
}

function get_rating_stats($slug) {
    $reviews = get_reviews($slug);
    $count = count($reviews);
    if ($count === 0) return ['average' => 0, 'count' => 0];
    $sum = array_sum(array_column($reviews, 'rating'));
    return ['average' => round($sum / $count, 1), 'count' => $count];
}

function add_review($slug, $name, $rating, $comment) {
    $file = __DIR__ . '/../data/reviews.json';
    $fp = @fopen($file, 'c+');
    if (!$fp) return false;
    flock($fp, LOCK_EX);
    $content = '';
    while (!feof($fp)) $content .= fread($fp, 8192);
    $all = json_decode($content, true) ?: [];
    if (!isset($all[$slug])) $all[$slug] = [];
    $review = [
        'name' => $name,
        'rating' => $rating,
        'comment' => $comment,
        'date' => date('Y-m-d H:i:s'),
    ];
    array_unshift($all[$slug], $review);
    ftruncate($fp, 0);
    rewind($fp);
    fwrite($fp, json_encode($all, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
    flock($fp, LOCK_UN);
    fclose($fp);
    return $review;
}

function time_ago($datetime) {
    $diff = time() - strtotime($datetime);
    if ($diff < 60) return 'Abhi abhi';
    if ($diff < 3600) return floor($diff / 60) . ' minute pehle';
    if ($diff < 86400) return floor($diff / 3600) . ' ghante pehle';
    if ($diff < 2592000) return floor($diff / 86400) . ' din pehle';
    return format_date($datetime);
}

function get_featured_story() {
    $stories = get_stories();
    if (empty($stories)) return null;

    $file = __DIR__ . '/../data/clicks.json';
    if (file_exists($file)) {
        $clicks = json_decode(file_get_contents($file), true) ?: [];
        if (!empty($clicks)) {
            arsort($clicks);
            foreach (array_keys($clicks) as $top_slug) {
                $story = get_story_by_slug($top_slug);
                if ($story) return $story;
            }
        }
    }

    foreach ($stories as $s) {
        if (!empty($s['featured'])) return $s;
    }
    return $stories[0];
}

function get_related_stories($current_slug, $age, $limit = 3) {
    $stories = get_stories();
    $related = array_filter($stories, function($s) use ($current_slug, $age) {
        return $s['slug'] !== $current_slug && $s['age'] === $age;
    });
    if (count($related) < $limit) {
        $related = array_filter($stories, function($s) use ($current_slug) {
            return $s['slug'] !== $current_slug;
        });
    }
    return array_values(array_slice($related, 0, $limit));
}

function search_stories($query) {
    $stories = get_stories();
    $q = mb_strtolower(trim($query));
    return array_values(array_filter($stories, function($s) use ($q) {
        return mb_strpos(mb_strtolower($s['title']), $q) !== false
            || mb_strpos(mb_strtolower($s['excerpt']), $q) !== false
            || mb_strpos(mb_strtolower($s['category']), $q) !== false;
    }));
}

function format_date($date) {
    $months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
    $t = strtotime($date);
    return date('j', $t) . ' ' . $months[(int)date('n', $t) - 1] . ' ' . date('Y', $t);
}

function get_age_groups() {
    return [
        'nanhe-readers'  => ['label' => 'Nanhe Readers', 'range' => '3-6 Years', 'desc' => 'Chhote bachcho ke liye simple moral stories'],
        'junior-readers' => ['label' => 'Junior Readers', 'range' => '7-12 Years', 'desc' => 'Panchtantra aur adventure moral stories'],
        'teen-readers'   => ['label' => 'Teen Readers', 'range' => '13-17 Years', 'desc' => 'Life lessons aur character building stories'],
        'sabke-liye'     => ['label' => 'Sabke Liye', 'range' => '18+', 'desc' => 'Deep moral tales aur philosophical stories'],
    ];
}

function get_age_count($age_slug) {
    return count(get_stories_by_age($age_slug));
}

function e($str) {
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

function story_url($slug) {
    return SITE_URL . 'stories/' . $slug . '.php';
}

function age_url($slug) {
    return SITE_URL . 'age/' . $slug . '.php';
}
