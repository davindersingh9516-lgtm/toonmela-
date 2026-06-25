/* ToonMela - Main JS */

/* ---------- Header Components (Inject into pages) ---------- */
function getHeader(activePage) {
    return `
    <header class="header">
        <div class="container header-inner">
            <a href="/" class="logo">Toon<span>Mela</span><small>Kahaniyon Ka Mela</small></a>
            <button class="mobile-toggle" aria-label="Menu" onclick="document.querySelector('.nav').classList.toggle('active')">
                <span></span><span></span><span></span>
            </button>
            <nav class="nav">
                <a href="/"${activePage==='home'?' class="active"':''}>Home</a>
                <a href="/stories.html"${activePage==='stories'?' class="active"':''}>Stories</a>
                <a href="/age/nanhe-readers.html">Nanhe Readers</a>
                <a href="/age/junior-readers.html">Junior Readers</a>
                <a href="/age/teen-readers.html">Teen Readers</a>
                <a href="/age/sabke-liye.html">Sabke Liye</a>
                <a href="/about.html"${activePage==='about'?' class="active"':''}>About</a>
                <a href="/contact.html"${activePage==='contact'?' class="active"':''}>Contact</a>
                <button class="nav-search" onclick="document.querySelector('.search-overlay').classList.add('active')" aria-label="Search">&#128269;</button>
            </nav>
        </div>
    </header>
    <div class="search-overlay" onclick="if(event.target===this)this.classList.remove('active')">
        <div class="search-box">
            <form onsubmit="searchStories(event)">
                <input type="text" id="searchInput" placeholder="Kahani dhundein..." required>
                <button type="submit">Search</button>
            </form>
        </div>
    </div>`;
}

function getFooter() {
    return `
    <footer class="footer">
        <div class="container footer-grid">
            <div class="footer-brand">
                <a href="/" class="logo">Toon<span>Mela</span></a>
                <p class="footer-about">ToonMela - Kahaniyon Ka Mela. Moral stories jo har umar ke readers ke liye likhi gayi hain. Panchtantra se lekar modern life lessons tak.</p>
                <div class="footer-social">
                    <a href="https://facebook.com/toonmela" target="_blank" rel="noopener" aria-label="Facebook">f</a>
                    <a href="https://instagram.com/toonmelatv" target="_blank" rel="noopener" aria-label="Instagram">ig</a>
                    <a href="https://x.com/toonmelatv" target="_blank" rel="noopener" aria-label="Twitter">x</a>
                    <a href="https://youtube.com/@toonmela" target="_blank" rel="noopener" aria-label="YouTube">yt</a>
                </div>
            </div>
            <div class="footer-col">
                <h4>Age Groups</h4>
                <a href="/age/nanhe-readers.html">Nanhe Readers (3-6)</a>
                <a href="/age/junior-readers.html">Junior Readers (7-12)</a>
                <a href="/age/teen-readers.html">Teen Readers (13-17)</a>
                <a href="/age/sabke-liye.html">Sabke Liye (18+)</a>
            </div>
            <div class="footer-col">
                <h4>Categories</h4>
                <a href="/stories.html?cat=Panchtantra">Panchtantra</a>
                <a href="/stories.html?cat=Fairy Tales">Fairy Tales</a>
                <a href="/stories.html?cat=Life Lessons">Life Lessons</a>
                <a href="/stories.html?cat=Bedtime Stories">Bedtime Stories</a>
                <a href="/stories.html?cat=Friendship">Friendship Stories</a>
            </div>
            <div class="footer-col">
                <h4>Quick Links</h4>
                <a href="/">Home</a>
                <a href="/about.html">About Us</a>
                <a href="/contact.html">Contact Us</a>
                <a href="/privacy-policy.html">Privacy Policy</a>
            </div>
        </div>
        <div class="footer-bottom">
            &copy; ${new Date().getFullYear()} ToonMela. All Rights Reserved. Kahaniyon Ka Mela.
        </div>
    </footer>`;
}

/* ---------- Story Card HTML ---------- */
function storyCard(s) {
    return `<article class="card">
        <a href="/stories/${s.slug}.html" class="card-img">
            <img src="${s.image}" alt="${s.title}" loading="lazy">
            <span class="card-age">${s.ageLabel}</span>
        </a>
        <div class="card-body">
            <span class="card-cat">${s.category}</span>
            <h3><a href="/stories/${s.slug}.html">${s.title}</a></h3>
            <p class="card-excerpt">${s.excerpt}</p>
            <div class="card-foot">
                <span>${formatDate(s.date)}</span>
                <span>${s.readTime} min read</span>
            </div>
        </div>
    </article>`;
}

/* ---------- Utilities ---------- */
function formatDate(d) {
    var months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
    var dt = new Date(d);
    return dt.getDate() + ' ' + months[dt.getMonth()] + ' ' + dt.getFullYear();
}

var storiesCache = null;

function loadStories() {
    if (storiesCache) return Promise.resolve(storiesCache);
    return fetch('/data/stories.json')
        .then(function(r) { return r.json(); })
        .then(function(data) { storiesCache = data; return data; });
}

/* ---------- Search ---------- */
function searchStories(e) {
    e.preventDefault();
    var query = document.getElementById('searchInput').value.toLowerCase().trim();
    if (!query) return;
    window.location.href = '/stories.html?search=' + encodeURIComponent(query);
}

/* ---------- Homepage: render stories by age filter ---------- */
function renderHomeStories(age) {
    var container = document.getElementById('storiesContainer');
    if (!container) return;
    container.innerHTML = '<div class="loading"><div class="spinner"></div></div>';

    loadStories().then(function(stories) {
        var filtered = age === 'all' ? stories : stories.filter(function(s) { return s.age === age; });
        if (filtered.length === 0) {
            container.innerHTML = '<div class="no-stories"><p>Is age group mein abhi koi kahani nahi hai.</p></div>';
            return;
        }
        container.innerHTML = filtered.map(storyCard).join('');
    });
}

/* ---------- Stories listing page ---------- */
function renderStoriesPage() {
    var container = document.getElementById('allStoriesContainer');
    if (!container) return;

    var params = new URLSearchParams(window.location.search);
    var search = (params.get('search') || '').toLowerCase();
    var cat = params.get('cat') || '';
    var age = params.get('age') || '';

    loadStories().then(function(stories) {
        var filtered = stories;

        if (search) {
            filtered = filtered.filter(function(s) {
                return s.title.toLowerCase().includes(search) ||
                       s.excerpt.toLowerCase().includes(search) ||
                       s.category.toLowerCase().includes(search);
            });
            var heading = document.getElementById('storiesHeading');
            if (heading) heading.textContent = 'Search: "' + params.get('search') + '"';
        }

        if (cat) {
            filtered = filtered.filter(function(s) { return s.category === cat; });
        }

        if (age) {
            filtered = filtered.filter(function(s) { return s.age === age; });
        }

        if (filtered.length === 0) {
            container.innerHTML = '<div class="no-stories"><p>Koi kahani nahi mili. Kuch aur try karein.</p></div>';
            return;
        }

        container.innerHTML = filtered.map(storyCard).join('');
    });
}

/* ---------- Age page ---------- */
function renderAgePage(ageSlug) {
    var container = document.getElementById('ageStoriesContainer');
    if (!container) return;

    loadStories().then(function(stories) {
        var filtered = stories.filter(function(s) { return s.age === ageSlug; });
        if (filtered.length === 0) {
            container.innerHTML = '<div class="no-stories"><p>Is age group mein abhi koi kahani nahi hai. Jaldi aayengi!</p></div>';
            return;
        }
        container.innerHTML = filtered.map(storyCard).join('');
    });
}

/* ---------- Sidebar: latest stories ---------- */
function renderSidebar() {
    var container = document.getElementById('sidebarStories');
    if (!container) return;

    loadStories().then(function(stories) {
        var latest = stories.slice(0, 5);
        container.innerHTML = latest.map(function(s) {
            return `<div class="sb-story">
                <div class="sb-story-img"><a href="/stories/${s.slug}.html"><img src="${s.image}" alt="${s.title}" loading="lazy"></a></div>
                <div>
                    <div class="sb-story-title"><a href="/stories/${s.slug}.html">${s.title}</a></div>
                    <div class="sb-story-date">${formatDate(s.date)}</div>
                </div>
            </div>`;
        }).join('');
    });
}

/* ---------- Related stories ---------- */
function renderRelated(currentSlug, currentAge) {
    var container = document.getElementById('relatedStories');
    if (!container) return;

    loadStories().then(function(stories) {
        var related = stories.filter(function(s) { return s.slug !== currentSlug; });
        if (currentAge) {
            var sameAge = related.filter(function(s) { return s.age === currentAge; });
            if (sameAge.length >= 3) related = sameAge;
        }
        related = related.slice(0, 3);
        if (related.length === 0) { container.style.display = 'none'; return; }
        container.innerHTML = '<h2>Aur Padhein</h2><div class="stories-grid">' + related.map(storyCard).join('') + '</div>';
    });
}

/* ---------- Keyboard shortcuts ---------- */
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        var overlay = document.querySelector('.search-overlay');
        if (overlay) overlay.classList.remove('active');
    }
});

/* ---------- Mobile nav close on link click ---------- */
document.addEventListener('click', function(e) {
    if (e.target.matches('.nav a')) {
        var nav = document.querySelector('.nav');
        if (nav) nav.classList.remove('active');
    }
});
