<?php
require_once __DIR__ . '/includes/functions.php';
session_start();
header('Content-Type: application/json; charset=UTF-8');

function respond($ok, $payload = []) {
    echo json_encode(array_merge(['success' => $ok], $payload), JSON_UNESCAPED_UNICODE);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    respond(false, ['error' => 'Method not allowed.']);
}

// Honeypot - real users never fill this hidden field, bots usually do.
if (!empty($_POST['website'])) {
    respond(true, ['review' => null]); // pretend success, don't tip off bots
}

// Basic rate limit: one submission per 20 seconds per session.
if (!empty($_SESSION['last_review_at']) && (time() - $_SESSION['last_review_at']) < 20) {
    respond(false, ['error' => 'Thoda ruk kar dobara try karein.']);
}

$slug = trim($_POST['slug'] ?? '');
$name = trim(strip_tags($_POST['name'] ?? ''));
$rating = filter_var($_POST['rating'] ?? '', FILTER_VALIDATE_INT);
$comment = trim(strip_tags($_POST['comment'] ?? ''));

if (!get_story_by_slug($slug)) {
    respond(false, ['error' => 'Invalid story.']);
}
if ($name === '' || mb_strlen($name) > 60) {
    respond(false, ['error' => 'Naam 1-60 characters ka hona chahiye.']);
}
if ($rating === false || $rating < 1 || $rating > 5) {
    respond(false, ['error' => 'Please ek star rating select karein.']);
}
if ($comment === '' || mb_strlen($comment) > 1000) {
    respond(false, ['error' => 'Comment 1-1000 characters ka hona chahiye.']);
}

$review = add_review($slug, $name, $rating, $comment);
if (!$review) {
    respond(false, ['error' => 'Kuch galat ho gaya. Dobara try karein.']);
}

$_SESSION['last_review_at'] = time();

$stats = get_rating_stats($slug);
respond(true, [
    'review' => [
        'name' => e($review['name']),
        'rating' => $review['rating'],
        'comment' => e($review['comment']),
        'date' => 'Abhi abhi',
    ],
    'stats' => $stats,
]);
