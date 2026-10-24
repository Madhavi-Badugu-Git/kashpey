<?php include('includes/dbConfig.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>News | K-Seva – Stay Updated</title>
    <meta name="description"
        content="Latest news, press releases, announcements and events from K-Seva – India's trusted G2C digital service platform.">
    <link rel="canonical" href="https://k-seva.com/news">
    <?php include('includes/header_1.php'); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,300;0,9..144,700;0,9..144,900;1,9..144,300;1,9..144,700&family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500;9..40,600&family=JetBrains+Mono:wght@400;600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/news.css">
    <link rel="stylesheet" href="assets/css/about_us.css">
</head>

<body class="mt-body">

    <canvas id="ks-canvas" aria-hidden="true"></canvas>
    <div class="over-menu"></div>
    <?php include('includes/navbar_1.php'); ?>

    <!-- ═══════════ HERO ═══════════ -->
    <section class="news-hero">
        <div class="hero-bg-layer"></div>
        <div class="hero-inner">
            <div class="hero-logo-wrap">
                <img src="assets/logo/logo.png" alt="K-Seva" class="hero-logo-img">
                <div class="hlw-ring hlw-ring-1"></div>
                <div class="hlw-ring hlw-ring-2"></div>
            </div>
            <div class="hero-eyebrow">
                <span class="eb-line"></span>K-Seva Newsroom<span class="eb-line"></span>
            </div>
            <h1 class="hero-title">
                <span class="ht-main">News & Updates</span>
                <span class="ht-sub">Latest from K-Seva</span>
            </h1>
            <div class="hero-rule">
                <span class="hr-line"></span>
                <span class="hr-diamond"></span>
                <span class="hr-line hr-line-r"></span>
            </div>
            <p class="hero-sub">Stay informed with the latest news, press releases, announcements and events from India's leading G2C digital service platform.</p>
            <?php
            $total_q = mysqli_query($conn, "SELECT COUNT(*) AS c FROM tbl_website_news WHERE status='1'");
            $total_c = $total_q ? (int)mysqli_fetch_assoc($total_q)['c'] : 0;
            $stat_q = mysqli_query($conn, "SELECT news_category, COUNT(*) AS c FROM tbl_website_news WHERE status='1' GROUP BY news_category ORDER BY c DESC LIMIT 2");
            $stat_rows = [];
            if ($stat_q) while ($r = mysqli_fetch_assoc($stat_q)) $stat_rows[] = $r;
            $stat_map = ['news' => 'News', 'press_release' => 'Press Releases', 'announcement' => 'Announcements', 'event' => 'Events'];
            $stat_clr = ['#1fa8db', '#e84a4a', '#f5c518', '#3aad1e'];
            ?>
            <div class="hero-stats">
                <div class="hstat">
                    <div class="hstat-dot" style="background:#1fa8db;box-shadow:0 0 8px #1fa8db80"></div>
                    <span class="hstat-n"><?= $total_c ?></span><span class="hstat-l">Total News</span>
                </div>
                <?php foreach ($stat_rows as $i => $sr): ?>
                <div class="hstat">
                    <div class="hstat-dot" style="background:<?= $stat_clr[$i] ?>;box-shadow:0 0 8px <?= $stat_clr[$i] ?>80"></div>
                    <span class="hstat-n"><?= $sr['c'] ?></span>
                    <span class="hstat-l"><?= $stat_map[$sr['news_category']] ?? ucwords(str_replace('_', ' ', $sr['news_category'])) ?></span>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="hero-wave">
            <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0,30 C240,60 480,0 720,30 C960,60 1200,0 1440,30 L1440,60 L0,60 Z" fill="#f4f7fb" />
            </svg>
        </div>
    </section>

    <!-- Breadcrumb -->
    <div class="breadcrumb-bar">
        <div class="breadcrumb-inner">
            <a href="home"><i class="fas fa-home"></i></a>
            <i class="fas fa-chevron-right" style="font-size:9px;color:#c2d8e8"></i>
            <span>News</span>
        </div>
    </div>

    <?php
    /* ═══ FETCH DATA ═══ */
    $news_q = mysqli_query($conn, "SELECT id, news_title, slug, news_category, news_content, featured_image, meta_description, author_name, publish_date, views_count, is_featured FROM tbl_website_news WHERE status='1' ORDER BY is_featured DESC, publish_date DESC");
    $all_news = [];
    if ($news_q) while ($r = mysqli_fetch_assoc($news_q)) $all_news[] = $r;

    $featured = null;
    $others = [];
    foreach ($all_news as $n) {
        if ($n['is_featured'] == 1 && $featured === null) $featured = $n;
        else $others[] = $n;
    }

    $cats_q = mysqli_query($conn, "SELECT news_category, COUNT(*) AS c FROM tbl_website_news WHERE status='1' GROUP BY news_category ORDER BY c DESC");
    $cat_counts = [];
    if ($cats_q) while ($r = mysqli_fetch_assoc($cats_q)) $cat_counts[$r['news_category']] = $r['c'];

    /* ═══ HELPERS ═══ */
    function exc($h, $l = 150) {
        $t = strip_tags($h);
        return mb_strlen($t) > $l ? mb_substr($t, 0, $l) . '…' : $t;
    }
    function nurl($s, $id) { return 'news-details?slug=' . ($s ?: $id); }
    function clbl($c) {
        static $m = ['news' => '📰 News', 'press_release' => '📢 Press Release', 'announcement' => '🔔 Announcement', 'event' => '🎉 Event'];
        return $m[$c] ?? ucwords(str_replace('_', ' ', $c));
    }
    function cbadge($c) {
        static $m = ['news' => 'cb-news', 'press_release' => 'cb-press', 'announcement' => 'cb-ann', 'event' => 'cb-event'];
        return $m[$c] ?? 'cb-news';
    }
    function cstripe($c) {
        static $m = ['press_release' => 's-press', 'announcement' => 's-ann', 'event' => 's-event'];
        return $m[$c] ?? '';
    }
    function cph($c) {
        static $m = ['news' => 'ph-news', 'press_release' => 'ph-press', 'announcement' => 'ph-ann', 'event' => 'ph-event'];
        return $m[$c] ?? 'ph-news';
    }
    function cdot($c) {
        static $m = ['news' => '#1fa8db', 'press_release' => '#e84a4a', 'announcement' => '#f5c518', 'event' => '#3aad1e'];
        return $m[$c] ?? '#1fa8db';
    }
    function ctag($c) {
        static $m = [
            'news' => 'color:#0d7aa8;border-color:rgba(31,168,219,.4)',
            'press_release' => 'color:#c0241a;border-color:rgba(232,74,74,.4)',
            'announcement' => 'color:#8a6700;border-color:rgba(245,197,24,.5)',
            'event' => 'color:#237010;border-color:rgba(58,173,30,.4)'
        ];
        return $m[$c] ?? $m['news'];
    }
    $cmeta = [
        'news' => ['l' => 'News', 'd' => '#1fa8db'],
        'press_release' => ['l' => 'Press Release', 'd' => '#e84a4a'],
        'announcement' => ['l' => 'Announcement', 'd' => '#f5c518'],
        'event' => ['l' => 'Event', 'd' => '#3aad1e']
    ];
    ?>

    <!-- ═══════════ PAGE BODY ═══════════ -->
    <div class="page-body">

        <!-- ════ SIDEBAR ════ -->
        <aside class="sidebar">
            <div class="sidebar-card sc-reveal" style="--d:0s">
                <div class="sc-head">
                    <div class="sc-icon ic-sky"><i class="fas fa-search"></i></div>
                    <span class="sc-title">Search News</span>
                </div>
                <div class="sc-body">
                    <div class="sw-wrap"><i class="fas fa-search sw-ico"></i><input type="text" id="newsSearch" class="sw-inp" placeholder="Search news…" autocomplete="off"><button class="sw-clr" id="srchClr" style="display:none"><i class="fas fa-times"></i></button></div>
                </div>
            </div>

            <div class="sidebar-card sc-reveal" style="--d:0.08s">
                <div class="sc-head">
                    <div class="sc-icon ic-green"><i class="fas fa-layer-group"></i></div>
                    <span class="sc-title">Categories</span>
                </div>
                <div class="sc-body" style="padding:10px 16px 14px">
                    <div id="catList">
                        <button class="cat-item active" data-cat="all" onclick="setCat('all',this)">
                            <div class="ci-l"><span class="ci-dot" style="background:#1fa8db"></span><span class="ci-name">All News</span></div>
                            <span class="ci-cnt"><?= $total_c ?></span>
                        </button>
                        <?php foreach ($cat_counts as $cat => $cnt):
                            if (!isset($cmeta[$cat])) continue;
                            $m = $cmeta[$cat];
                        ?>
                        <button class="cat-item" data-cat="<?= $cat ?>" onclick="setCat('<?= $cat ?>',this)">
                            <div class="ci-l"><span class="ci-dot" style="background:<?= $m['d'] ?>"></span><span class="ci-name"><?= $m['l'] ?></span></div>
                            <span class="ci-cnt"><?= $cnt ?></span>
                        </button>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="sidebar-card sc-reveal" style="--d:0.16s">
                <div class="sc-head">
                    <div class="sc-icon ic-yellow"><i class="fas fa-tags"></i></div>
                    <span class="sc-title">Popular Tags</span>
                </div>
                <div class="sc-body">
                    <div class="tags-wrap">
                        <?php foreach (['K-Seva', 'Digital India', 'G2C Services', 'Government', 'E-Services', 'Updates', 'Announcement', 'Event'] as $tag): ?>
                        <button class="tag-pill" onclick="searchTag('<?= strtolower($tag) ?>')"><?= $tag ?></button>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="sidebar-card sc-reveal sidebar-stats" style="--d:0.22s">
                <div class="ss-row">
                    <div class="ss-cell"><span class="ss-num"><?= $total_c ?></span><span class="ss-lbl">Articles</span></div>
                    <div class="ss-cell"><span class="ss-num"><?= count($cat_counts) ?></span><span class="ss-lbl">Topics</span></div>
                </div>
            </div>
        </aside>

        <!-- ════ NEWS AREA ════ -->
        <div class="news-area">
            <div class="results-bar">
                <div class="results-text" id="resText">Showing <strong>all news</strong> &nbsp;(<strong><?= count($all_news) ?></strong>)</div>
                <div class="view-btns">
                    <button class="vb active" id="vbGrid" onclick="setView('grid')" title="Grid"><i class="fas fa-th-large"></i></button>
                    <button class="vb" id="vbList" onclick="setView('list')" title="List"><i class="fas fa-list"></i></button>
                </div>
            </div>

            <!-- FEATURED -->
            <?php if ($featured): ?>
            <div class="feat-section" id="featSec">
                <div class="sec-label">
                    <div class="sl-diam"></div><span class="sl-txt">Featured Story</span>
                    <div class="sl-line"></div>
                </div>
                <a href="<?= nurl($featured['slug'], $featured['id']) ?>" class="feat-card" id="featPost" data-cat="<?= $featured['news_category'] ?>">
                    <div class="fc-left">
                        <?php if (!empty($featured['featured_image'])): ?>
                        <img class="fc-img" src="https://crm.k-seva.com/backPanel/uploads/website_news/<?= htmlspecialchars($featured['featured_image']) ?>" alt="<?= htmlspecialchars($featured['news_title']) ?>" loading="lazy">
                        <?php else: ?><div class="fc-ph"></div><?php endif; ?>
                        <div class="fc-overlay"></div>
                        <div class="fc-shimmer"></div>
                    </div>
                    <div class="fc-right">
                        <div class="fc-pills"><span class="fc-badge"><i class="fas fa-crown"></i> Featured</span><span class="fc-ctag" style="<?= ctag($featured['news_category']) ?>"><?= clbl($featured['news_category']) ?></span></div>
                        <h2 class="fc-title" id="featTitle"><?= htmlspecialchars($featured['news_title']) ?></h2>
                        <p class="fc-exc"><?= htmlspecialchars(!empty($featured['meta_description']) ? $featured['meta_description'] : exc($featured['news_content'], 200)) ?></p>
                        <div class="fc-meta">
                            <span><i class="fas fa-calendar-alt"></i><?= date('d M Y', strtotime($featured['publish_date'])) ?></span>
                            <span><i class="fas fa-eye"></i><?= number_format($featured['views_count']) ?> views</span>
                        </div>
                        <div class="fc-cta">Read Full Story <i class="fas fa-arrow-right"></i></div>
                    </div>
                </a>
            </div>
            <?php endif; ?>

            <!-- ALL ARTICLES -->
            <div class="sec-label" style="margin-top:<?= $featured ? '8px' : '0' ?>">
                <div class="sl-diam" style="background:linear-gradient(135deg,#3aad1e,#1fa8db)"></div>
                <span class="sl-txt" style="color:#217a10">All News</span>
                <div class="sl-line"></div>
            </div>

            <?php if (count($others) > 0): ?>
            <div class="posts-grid" id="postsGrid">
                <?php foreach ($others as $i => $p): $delay = ($i % 3) * 70; ?>
                <a href="<?= nurl($p['slug'], $p['id']) ?>" class="news-card" data-cat="<?= htmlspecialchars($p['news_category']) ?>" data-title="<?= strtolower(htmlspecialchars($p['news_title'])) ?>" data-reveal data-delay="<?= $delay ?>">
                    <div class="bc-stripe <?= cstripe($p['news_category']) ?>"></div>
                    <div class="bc-img-wrap">
                        <?php if (!empty($p['featured_image'])): ?>
                        <img class="bc-img" src="https://crm.k-seva.com/backPanel/uploads/website_news/<?= htmlspecialchars($p['featured_image']) ?>" alt="<?= htmlspecialchars($p['news_title']) ?>" loading="lazy">
                        <?php else: ?><div class="bc-ph <?= cph($p['news_category']) ?>"></div><?php endif; ?>
                        <span class="bc-badge <?= cbadge($p['news_category']) ?>"><?= clbl($p['news_category']) ?></span>
                        <?php if ($p['is_featured'] == 1): ?><div class="bc-star"><i class="fas fa-star"></i></div><?php endif; ?>
                    </div>
                    <div class="bc-body">
                        <h3 class="bc-title"><?= htmlspecialchars($p['news_title']) ?></h3>
                        <p class="bc-exc"><?= htmlspecialchars(!empty($p['meta_description']) ? $p['meta_description'] : exc($p['news_content'])) ?></p>
                        <span class="bc-cta">Read Article <i class="fas fa-arrow-right"></i></span>
                        <div class="bc-foot">
                            <div class="bc-date"><i class="fas fa-calendar"></i><?= date('d M Y', strtotime($p['publish_date'])) ?></div>
                            <div class="bc-views"><i class="fas fa-eye"></i><?= number_format($p['views_count']) ?></div>
                        </div>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
            <?php elseif ($featured): ?>
            <div class="empty-state">
                <div class="es-ico"><i class="fas fa-newspaper"></i></div>
                <h3>No other news yet</h3>
                <p>Check back soon for fresh updates.</p>
            </div>
            <?php else: ?>
            <div class="empty-state">
                <div class="es-ico"><i class="fas fa-newspaper"></i></div>
                <h3>No news published yet</h3>
                <p>Stay tuned for exciting content.</p>
            </div>
            <?php endif; ?>

            <div id="noRes" class="no-results" style="display:none">
                <div>🔍</div>
                <h3>No results found</h3>
                <p>Try a different search term or category.</p>
            </div>
        </div>
    </div>

    <?php include('includes/footer_1.php'); ?>
    <?php include('includes/whats-app.php'); ?>
    <?php include('includes/sticky-footer.php'); ?>

    <script>
    /* PARTICLE CANVAS (same as blog) */
    (function() {
        const c = document.getElementById('ks-canvas');
        if (!c) return;
        const ctx = c.getContext('2d');
        let W, H;
        const COLS = ['#1fa8db', '#4ec8f0', '#3aad1e', '#6ed44f', '#f5c518', '#fff', '#0d7aa8', '#22d3c5', '#f97316', '#c9a84c', '#e84a4a'];
        const N = 110;
        let pts = [];
        function resize() { W = c.width = innerWidth; H = c.height = innerHeight; }
        resize(); addEventListener('resize', resize);
        const rnd = (a, b) => a + Math.random() * (b - a);
        const SH = ['star', 'circle', 'diamond'];
        class P {
            constructor() { this.init(true); }
            init(f) {
                this.x = rnd(0, W); this.y = f ? rnd(0, H) : H + 8;
                this.r = rnd(0.5, 2.5); this.a = 0; this.ma = rnd(.15, .65);
                this.s = rnd(.003, .013); this.d = 1;
                this.c = COLS[0 | Math.random() * COLS.length];
                this.vx = rnd(-.13, .13); this.vy = rnd(-.36, -.05);
                this.ph = rnd(0, Math.PI * 2); this.ang = rnd(0, Math.PI * 2);
                this.sp = rnd(-.05, .05); this.sh = SH[0 | Math.random() * SH.length];
            }
            draw(t) {
                const f = .5 + .5 * Math.sin(t * .004 + this.ph);
                ctx.save();
                ctx.globalAlpha = this.a * f;
                ctx.fillStyle = this.c;
                ctx.shadowBlur = this.r * 10;
                ctx.shadowColor = this.c;
                ctx.translate(this.x, this.y);
                ctx.rotate(this.ang);
                ctx.beginPath();
                if (this.sh === 'star') {
                    for (let i = 0; i < 8; i++) {
                        const a = i * Math.PI / 4, l = i % 2 === 0 ? this.r * 3.8 : this.r * 1.3;
                        i === 0 ? ctx.moveTo(Math.cos(a) * l, Math.sin(a) * l) : ctx.lineTo(Math.cos(a) * l, Math.sin(a) * l);
                    }
                } else if (this.sh === 'diamond') {
                    ctx.moveTo(0, -this.r * 3); ctx.lineTo(this.r * 1.6, 0); ctx.lineTo(0, this.r * 3); ctx.lineTo(-this.r * 1.6, 0);
                } else {
                    ctx.arc(0, 0, this.r, 0, Math.PI * 2);
                }
                ctx.closePath(); ctx.fill(); ctx.restore();
            }
            update() {
                this.a += this.s * this.d; this.ang += this.sp;
                if (this.a >= this.ma) this.d = -1;
                if (this.a <= 0) { this.init(false); return; }
                this.x += this.vx; this.y += this.vy;
                if (this.x < -8) this.x = W + 8;
                if (this.x > W + 8) this.x = -8;
                if (this.y < -8) this.init(false);
            }
        }
        for (let i = 0; i < N; i++) pts.push(new P());
        let t = 0;
        (function loop() {
            ctx.clearRect(0, 0, W, H);
            t++;
            pts.forEach(p => { p.update(); p.draw(t); });
            requestAnimationFrame(loop);
        })();
    })();

    /* SCROLL REVEAL */
    (function() {
        const obs = new IntersectionObserver(entries => {
            entries.forEach(e => {
                if (e.isIntersecting) {
                    const el = e.target, d = parseInt(el.getAttribute('data-delay') || 0);
                    setTimeout(() => el.classList.add('revealed'), d);
                    obs.unobserve(el);
                }
            });
        }, { threshold: .07, rootMargin: '0px 0px -24px 0px' });
        document.querySelectorAll('[data-reveal]').forEach(el => obs.observe(el));
    })();

    /* SIDEBAR REVEAL */
    (function() {
        const obs = new IntersectionObserver(entries => {
            entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('sc-visible'); obs.unobserve(e.target); } });
        }, { threshold: .1 });
        document.querySelectorAll('.sc-reveal').forEach(el => obs.observe(el));
    })();

    /* FILTER */
    let curCat = 'all', curSearch = '';
    const allCards = document.querySelectorAll('.news-card');
    const featPost = document.getElementById('featPost');
    const featSec = document.getElementById('featSec');
    const noRes = document.getElementById('noRes');
    const resText = document.getElementById('resText');

    function applyFilters() {
        let vis = 0;
        if (featPost && featSec) {
            const fc = featPost.getAttribute('data-cat');
            const ft = (document.getElementById('featTitle')?.textContent || '').toLowerCase();
            const fok = (curCat === 'all' || fc === curCat) && (curSearch === '' || ft.includes(curSearch));
            featSec.style.display = fok ? '' : 'none';
        }
        allCards.forEach(c => {
            const cat = c.getAttribute('data-cat'), title = c.getAttribute('data-title') || '';
            const ok = (curCat === 'all' || cat === curCat) && (curSearch === '' || title.includes(curSearch));
            c.style.display = ok ? '' : 'none';
            if (ok) vis++;
        });
        if (noRes) noRes.style.display = vis === 0 ? 'block' : 'none';
        const lbl = curCat === 'all' ? 'all news' : (curCat.replace(/_/g, ' ') + ' news');
        if (resText) resText.innerHTML = `Showing <strong>${lbl}</strong> &nbsp;(<strong>${vis}</strong>)`;
    }

    function setCat(cat, el) {
        curCat = cat;
        document.querySelectorAll('.cat-item').forEach(i => i.classList.remove('active'));
        el.classList.add('active');
        applyFilters();
    }

    const inp = document.getElementById('newsSearch'), clr = document.getElementById('srchClr');
    inp.addEventListener('input', function() {
        curSearch = this.value.trim().toLowerCase();
        clr.style.display = this.value ? 'flex' : 'none';
        applyFilters();
    });
    inp.addEventListener('keydown', e => {
        if (e.key === 'Escape') {
            inp.value = ''; curSearch = ''; clr.style.display = 'none'; applyFilters();
        }
    });
    clr.addEventListener('click', () => {
        inp.value = ''; curSearch = ''; clr.style.display = 'none'; applyFilters();
    });

    function searchTag(tag) {
        inp.value = tag; curSearch = tag; clr.style.display = 'flex'; applyFilters();
    }

    /* VIEW TOGGLE */
    function setView(v) {
        const g = document.getElementById('postsGrid');
        if (!g) return;
        const bg = document.getElementById('vbGrid'), bl = document.getElementById('vbList');
        if (v === 'list') {
            g.classList.add('list-view');
            bl.classList.add('active'); bg.classList.remove('active');
        } else {
            g.classList.remove('list-view');
            bg.classList.add('active'); bl.classList.remove('active');
        }
    }
    </script>
</body>
</html>