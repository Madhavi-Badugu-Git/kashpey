<?php include('includes/dbConfig.php'); ?>
<?php
/* ═══ FETCH NEWS POST ═══ */
$slug = isset($_GET['slug']) ? mysqli_real_escape_string($conn, trim($_GET['slug'])) : '';

if (empty($slug)) {
    header('Location: news'); exit;
}

// Try by slug first, fallback by id
$post_q = mysqli_query($conn, "SELECT * FROM tbl_website_news WHERE (slug='$slug' OR id='$slug') AND status='1' LIMIT 1");
if (!$post_q || mysqli_num_rows($post_q) === 0) {
    header('Location: news'); exit;
}
$post = mysqli_fetch_assoc($post_q);
$news_id = (int)$post['id'];

// Increment view count
mysqli_query($conn, "UPDATE tbl_website_news SET views_count = views_count + 1 WHERE id='$news_id'");

// Gallery
$gallery = !empty($post['gallery_images']) ? json_decode($post['gallery_images'], true) : [];

// Reviews (approved for this news)
$reviews_q = mysqli_query($conn, "SELECT reviewer_name, rating, review_text, created_at FROM tbl_news_reviews WHERE news_id=$news_id AND status=1 ORDER BY created_at DESC");
$reviews = [];
while ($rv = mysqli_fetch_assoc($reviews_q)) $reviews[] = $rv;

// Average rating
$avg_q = mysqli_query($conn, "SELECT AVG(rating) as avg_r, COUNT(*) as total FROM tbl_news_reviews WHERE news_id=$news_id AND status=1");
$avg_d = mysqli_fetch_assoc($avg_q);
$avg_rating = round((float)($avg_d['avg_r'] ?? 0), 1);
$total_ratings = (int)($avg_d['total'] ?? 0);

// Related news (same category, exclude current)
$related = [];
$related_ids = [$news_id];
$rel_q = mysqli_query($conn, "SELECT id, news_title, slug, featured_image, meta_description, publish_date, news_category FROM tbl_website_news WHERE news_category='{$post['news_category']}' AND id!=$news_id AND status=1 ORDER BY publish_date DESC LIMIT 3");
while ($r = mysqli_fetch_assoc($rel_q)) {
    $related[] = $r;
    $related_ids[] = (int)$r['id'];
}
if (count($related) < 3) {
    $need = 3 - count($related);
    $excl = implode(',', $related_ids);
    $fill_q = mysqli_query($conn, "SELECT id, news_title, slug, featured_image, meta_description, publish_date, news_category FROM tbl_website_news WHERE id NOT IN($excl) AND status=1 ORDER BY publish_date DESC LIMIT $need");
    while ($r = mysqli_fetch_assoc($fill_q)) $related[] = $r;
}

// Latest news for sidebar
$latest_q = mysqli_query($conn, "SELECT id, news_title, slug, featured_image, publish_date, news_category FROM tbl_website_news WHERE status='1' AND id != $news_id ORDER BY publish_date DESC LIMIT 5");
$latest = [];
while ($r = mysqli_fetch_assoc($latest_q)) $latest[] = $r;

// Category counts for sidebar
$cats_q = mysqli_query($conn, "SELECT news_category, COUNT(*) AS c FROM tbl_website_news WHERE status='1' GROUP BY news_category ORDER BY c DESC");
$cat_counts = [];
while ($r = mysqli_fetch_assoc($cats_q)) $cat_counts[$r['news_category']] = $r['c'];

/* ═══ Helpers ═══ */
function burl($s, $id) { return 'news-details?slug=' . ($s ?: $id); }
function clbl($c) {
    $map = ['news' => '📰 News', 'press_release' => '📢 Press Release', 'announcement' => '🔔 Announcement', 'event' => '🎉 Event'];
    return $map[$c] ?? ucwords(str_replace('_', ' ', $c));
}
function cbadge($c) {
    $map = ['news' => 'cb-news', 'press_release' => 'cb-press', 'announcement' => 'cb-ann', 'event' => 'cb-event'];
    return $map[$c] ?? 'cb-news';
}
function cdot($c) {
    $map = ['news' => '#1fa8db', 'press_release' => '#e84a4a', 'announcement' => '#f5c518', 'event' => '#3aad1e'];
    return $map[$c] ?? '#1fa8db';
}
function exc($h, $l = 120) {
    $t = strip_tags($h);
    return mb_strlen($t) > $l ? mb_substr($t, 0, $l) . '…' : $t;
}
$read_time = max(1, ceil(str_word_count(strip_tags($post['news_content'])) / 200));

function starHtml($rating) {
    $out = '';
    for ($i = 1; $i <= 5; $i++) {
        if ($i <= $rating) $out .= '<i class="fas fa-star"></i>';
        elseif ($i - 0.5 <= $rating) $out .= '<i class="fas fa-star-half-alt"></i>';
        else $out .= '<i class="far fa-star"></i>';
    }
    return $out;
}
// Helper functions for image URLs – use your exact local path
function img_url($path) {
    // Hardcoded base URL for local development
    $base = 'https://crm.k-seva.com/backPanel/';
    return $base . 'uploads/website_news/' . ltrim($path, '/');
}

function gallery_url($path) {
    $base = 'https://crm.k-seva.com/backPanel/';
    return $base . 'uploads/website_news/gallery/' . ltrim($path, '/');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title><?= htmlspecialchars($post['news_title']) ?> | K-Seva News</title>
    <meta name="description" content="<?= htmlspecialchars(!empty($post['meta_description']) ? $post['meta_description'] : exc($post['news_content'], 160)) ?>">
    <link rel="canonical" href="https://k-seva.com/news-details?slug=<?= urlencode($post['slug'] ?: $post['id']) ?>">
    <?php include('includes/header_1.php'); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,300;0,9..144,700;0,9..144,900;1,9..144,300;1,9..144,700&family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500;9..40,600&family=JetBrains+Mono:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css">
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <link rel="stylesheet" href="assets/css/news-details.css">
    <link rel="stylesheet" href="assets/css/about_us.css">
    <style>
        /* Additional image fix – ensure images are visible */
        .lp-img, .rc-img, .dh-cover-img, .gallery-item img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .lp-img-wrap, .rc-img-wrap, .gallery-item {
            background: #eef2f7;
        }
    </style>
</head>
<body class="mt-body">

<canvas id="ks-canvas" aria-hidden="true"></canvas>
<div class="read-progress-wrap"><div class="read-progress-bar" id="readBar"></div></div>
<div class="over-menu"></div>
<?php include('includes/navbar_1.php'); ?>

<!-- Hero Section -->
<section class="detail-hero" id="detailHero">
    <div class="dh-bg-layer"></div>
    <?php if (!empty($post['featured_image'])): ?>
    <div class="dh-cover-wrap">
        <img class="dh-cover-img" src="<?= img_url($post['featured_image']) ?>" alt="<?= htmlspecialchars($post['news_title']) ?>">
        <div class="dh-cover-overlay"></div>
    </div>
    <?php else: ?>
    <div class="dh-cover-ph"></div>
    <?php endif; ?>
    <div class="dh-grid-lines"></div>
    <div class="dh-rings" aria-hidden="true">
        <div class="dhr dhr-1"></div><div class="dhr dhr-2"></div><div class="dhr dhr-3"></div>
        <div class="dhr-dot dhr-dot-1"></div><div class="dhr-dot dhr-dot-2"></div><div class="dhr-dot dhr-dot-3"></div>
    </div>
    <div class="dh-inner">
        <div class="dh-pills">
            <span class="dh-cat-pill <?= cbadge($post['news_category']) ?>"><?= clbl($post['news_category']) ?></span>
            <?php if ($post['is_featured'] == 1): ?>
            <span class="dh-feat-pill"><i class="fas fa-crown"></i> Featured</span>
            <?php endif; ?>
        </div>
        <h1 class="dh-title"><?= htmlspecialchars($post['news_title']) ?></h1>
        <div class="dh-rule">
            <span class="dhr-line"></span><span class="dhr-gem"></span><span class="dhr-line dhr-r"></span>
        </div>
        <div class="dh-meta">
            <div class="dh-meta-divider"></div>
            <span class="dh-meta-item"><i class="fas fa-calendar-alt"></i><?= date('d M Y', strtotime($post['publish_date'])) ?></span>
            <span class="dh-meta-item"><i class="fas fa-clock"></i><?= $read_time ?> min read</span>
            <span class="dh-meta-item"><i class="fas fa-eye"></i><?= number_format($post['views_count']) ?> views</span>
            <?php if ($total_ratings > 0): ?>
            <span class="dh-meta-item"><i class="fas fa-star" style="color:#f5c518"></i><?= $avg_rating ?> / 5 (<?= $total_ratings ?> ratings)</span>
            <?php endif; ?>
        </div>
    </div>
    <div class="dh-wave">
        <svg viewBox="0 0 1440 70" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><path d="M0,35 C200,70 400,0 600,35 C800,70 1000,0 1200,35 C1300,52 1380,28 1440,35 L1440,70 L0,70 Z" fill="#f4f7fb"/></svg>
    </div>
</section>

<!-- Breadcrumb -->
<div class="breadcrumb-bar">
    <div class="breadcrumb-inner">
        <a href="home"><i class="fas fa-home"></i></a>
        <i class="fas fa-chevron-right"></i>
        <a href="news">News</a>
        <i class="fas fa-chevron-right"></i>
        <span><?= htmlspecialchars(mb_substr($post['news_title'], 0, 48)) . (mb_strlen($post['news_title']) > 48 ? '…' : '') ?></span>
    </div>
</div>

<!-- Main Body -->
<div class="detail-body">
    <article class="article-col" id="articleCol">
        <div class="article-card">
            <?php if (!empty($post['meta_description'])): ?>
            <p class="article-lead"><?= htmlspecialchars($post['meta_description']) ?></p>
            <?php endif; ?>
            <div class="article-content" id="articleContent">
                <?= $post['news_content'] ?>
            </div>
            <?php if (!empty($gallery)): ?>
            <div class="gallery-section">
                <h3 class="gallery-title"><i class="fas fa-images"></i> Image Gallery</h3>
                <div class="gallery-grid">
                    <?php foreach ($gallery as $img): ?>
                    <a href="<?= gallery_url($img) ?>" data-fancybox="gallery" class="gallery-item">
                        <img src="<?= gallery_url($img) ?>" alt="Gallery image">
                        <div class="gallery-item-overlay"><i class="fas fa-expand-arrows-alt"></i></div>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif; ?>
            <div class="article-tags">
                <span class="at-label"><i class="fas fa-hashtag"></i> Tags:</span>
                <?php $tags = ['K-Seva', 'News', 'Updates', 'Announcements']; foreach ($tags as $tag): ?>
                <a href="news?q=<?= urlencode(strtolower($tag)) ?>" class="at-tag"><?= $tag ?></a>
                <?php endforeach; ?>
            </div>
            <div class="article-share">
                <span class="as-label">Share this news:</span>
                <div class="as-btns">
                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?= urlencode('https://k-seva.com/news-details?slug=' . ($post['slug'] ?: $post['id'])) ?>" target="_blank" class="share-btn share-fb"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://twitter.com/intent/tweet?url=<?= urlencode('https://k-seva.com/news-details?slug=' . ($post['slug'] ?: $post['id'])) ?>&text=<?= urlencode($post['news_title']) ?>" target="_blank" class="share-btn share-tw"><i class="fab fa-x-twitter"></i></a>
                    <a href="https://wa.me/?text=<?= urlencode($post['news_title'] . ' - https://k-seva.com/news-details?slug=' . ($post['slug'] ?: $post['id'])) ?>" target="_blank" class="share-btn share-wa"><i class="fab fa-whatsapp"></i></a>
                    <button class="share-btn share-copy" onclick="copyLink()"><i class="fas fa-link"></i></button>
                </div>
            </div>
        </div>

        <!-- Review Section -->
        <div class="reviews-wrapper">
            <?php if ($total_ratings > 0): ?>
            <div class="rating-overview">
                <div class="ro-score">
                    <div class="ro-number"><?= $avg_rating ?></div>
                    <div class="ro-stars"><?= starHtml($avg_rating) ?></div>
                    <div class="ro-count"><?= $total_ratings ?> rating<?= $total_ratings != 1 ? 's' : '' ?></div>
                </div>
                <div class="ro-bars">
                    <?php
                    $star_counts = [5 => 0, 4 => 0, 3 => 0, 2 => 0, 1 => 0];
                    foreach ($reviews as $rv) { $r = (int)round($rv['rating']); if (isset($star_counts[$r])) $star_counts[$r]++; }
                    for ($s = 5; $s >= 1; $s--):
                        $pct = $total_ratings > 0 ? round($star_counts[$s] / $total_ratings * 100) : 0;
                    ?>
                    <div class="ro-bar-row">
                        <span class="ro-bar-lbl"><?= $s ?>★</span>
                        <div class="ro-bar-track"><div class="ro-bar-fill" style="width:<?= $pct ?>%; background:<?= $s >= 4 ? '#3aad1e' : ($s >= 3 ? '#f5c518' : '#e84a4a') ?>"></div></div>
                        <span class="ro-bar-pct"><?= $pct ?>%</span>
                    </div>
                    <?php endfor; ?>
                </div>
            </div>
            <?php endif; ?>

            <div class="review-form-card">
                <h3 class="rfc-title"><i class="fas fa-pen-nib"></i> Leave a Review</h3>
                <form id="reviewForm" novalidate>
                    <input type="hidden" name="action" value="submit_review">
                    <input type="hidden" name="news_id" value="<?= $news_id ?>">
                    <div class="rf-row2">
                        <div class="rf-group">
                            <label class="rf-label">Your Name <span class="req">*</span></label>
                            <input type="text" name="reviewer_name" class="rf-input" placeholder="e.g. John Doe" required>
                        </div>
                        <div class="rf-group">
                            <label class="rf-label">Email (optional)</label>
                            <input type="email" name="reviewer_email" class="rf-input" placeholder="you@example.com">
                        </div>
                    </div>
                    <div class="rf-group">
                        <label class="rf-label">Your Rating <span class="req">*</span></label>
                        <div class="star-rating">
                            <input type="radio" name="rating" id="s5" value="5"><label for="s5">★</label>
                            <input type="radio" name="rating" id="s4" value="4"><label for="s4">★</label>
                            <input type="radio" name="rating" id="s3" value="3"><label for="s3">★</label>
                            <input type="radio" name="rating" id="s2" value="2"><label for="s2">★</label>
                            <input type="radio" name="rating" id="s1" value="1"><label for="s1">★</label>
                        </div>
                        <div class="star-hint" id="starHint">Click a star to rate</div>
                    </div>
                    <div class="rf-group">
                        <label class="rf-label">Your Review <span class="req">*</span></label>
                        <textarea name="review_text" class="rf-input rf-textarea" rows="4" placeholder="Share your feedback…" required></textarea>
                    </div>
                    <button type="submit" class="btn-review" id="reviewBtn"><i class="fas fa-paper-plane"></i> Submit Review</button>
                    <p class="rf-note"><i class="fas fa-info-circle"></i> Reviews are moderated and appear after approval.</p>
                </form>
            </div>

            <?php if (!empty($reviews)): ?>
            <div class="reviews-list">
                <h3 class="rl-title"><i class="fas fa-comments"></i> Reader Reviews <span class="rl-count"><?= count($reviews) ?></span></h3>
                <?php foreach ($reviews as $rv): ?>
                <div class="review-card">
                    <div class="rc-top">
                        <div class="rc-av"><?= strtoupper(substr(trim($rv['reviewer_name']), 0, 1)) ?></div>
                        <div class="rc-info">
                            <div class="rc-name"><?= htmlspecialchars($rv['reviewer_name']) ?></div>
                            <div class="rc-stars"><?= starHtml($rv['rating']) ?></div>
                        </div>
                        <div class="rc-date"><?= date('d M Y', strtotime($rv['created_at'])) ?></div>
                    </div>
                    <p class="rc-text"><?= htmlspecialchars($rv['review_text']) ?></p>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>

        <!-- Related News (SINGLE BLOCK, using $related array) -->
        <?php if (!empty($related)): ?>
        <div class="related-section">
            <div class="sec-label">
                <div class="sl-diam"></div><span class="sl-txt">Related News</span>
                <div class="sl-line"></div>
            </div>
            <div class="related-grid">
                <?php foreach ($related as $i => $rp): ?>
                <a href="<?= burl($rp['slug'], $rp['id']) ?>" class="rel-card" data-reveal data-delay="<?= $i*80 ?>">
                    <div class="rc-img-wrap">
                        <?php if (!empty($rp['featured_image'])): ?>
                        <img class="rc-img" src="<?= img_url($rp['featured_image']) ?>" alt="<?= htmlspecialchars($rp['news_title']) ?>" loading="lazy">
                        <?php else: ?>
                        <div class="rc-ph" style="background:linear-gradient(135deg,<?= cdot($rp['news_category']) ?>22,<?= cdot($rp['news_category']) ?>44)"></div>
                        <?php endif; ?>
                        <span class="rc-badge <?= cbadge($rp['news_category']) ?>"><?= clbl($rp['news_category']) ?></span>
                    </div>
                    <div class="rc-body">
                        <h4 class="rc-title"><?= htmlspecialchars($rp['news_title']) ?></h4>
                        <p class="rc-exc"><?= htmlspecialchars(!empty($rp['meta_description']) ? $rp['meta_description'] : exc($rp['news_content'] ?? '', 100)) ?></p>
                        <div class="rc-foot">
                            <span class="rc-date"><i class="fas fa-calendar"></i><?= date('d M Y', strtotime($rp['publish_date'])) ?></span>
                            <span class="rc-cta">Read <i class="fas fa-arrow-right"></i></span>
                        </div>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>

        <div class="back-row"><a href="news" class="back-btn"><i class="fas fa-arrow-left"></i> Back to News</a></div>
    </article>

    <!-- Sidebar -->
    <aside class="detail-sidebar">
        <!-- Table of Contents Card -->
        <div class="sidebar-card sc-reveal" style="--d:0s">
            <div class="sc-head"><div class="sc-icon ic-sky"><i class="fas fa-list-ul"></i></div><span class="sc-title">Contents</span></div>
            <div class="sc-body" style="padding:12px 16px"><nav class="toc-nav" id="tocNav"><p class="toc-empty">Loading…</p></nav></div>
        </div>
        <!-- Article Info Card -->
        <div class="sidebar-card sc-reveal" style="--d:0.06s">
            <div class="sc-head"><div class="sc-icon ic-green"><i class="fas fa-chart-bar"></i></div><span class="sc-title">Article Info</span></div>
            <div class="sc-body" style="padding:0">
                <div class="ainfo-grid">
                    <div class="ai-cell"><i class="fas fa-eye ai-ico" style="color:var(--sky)"></i><span class="ai-n"><?= number_format($post['views_count']) ?></span><span class="ai-l">Views</span></div>
                    <div class="ai-cell"><i class="fas fa-clock ai-ico" style="color:var(--green)"></i><span class="ai-n"><?= $read_time ?> min</span><span class="ai-l">Read Time</span></div>
                    <div class="ai-cell"><i class="fas fa-calendar-alt ai-ico" style="color:var(--yellow)"></i><span class="ai-n"><?= date('d M', strtotime($post['publish_date'])) ?></span><span class="ai-l"><?= date('Y', strtotime($post['publish_date'])) ?></span></div>
                    <div class="ai-cell"><i class="fas fa-align-left ai-ico" style="color:#e84a4a"></i><span class="ai-n"><?= number_format(str_word_count(strip_tags($post['news_content']))) ?></span><span class="ai-l">Words</span></div>
                </div>
            </div>
        </div>
        <!-- Latest News Card -->
        <?php if (!empty($latest)): ?>
        <div class="sidebar-card sc-reveal" style="--d:0.12s">
            <div class="sc-head"><div class="sc-icon ic-sky"><i class="fas fa-newspaper"></i></div><span class="sc-title">Latest News</span></div>
            <div class="sc-body" style="padding:8px 0 12px">
                <?php foreach ($latest as $lp): ?>
                <a href="<?= burl($lp['slug'], $lp['id']) ?>" class="lp-item">
                    <div class="lp-img-wrap">
                        <?php if (!empty($lp['featured_image'])): ?>
                        <img class="lp-img" src="<?= img_url($lp['featured_image']) ?>" alt="<?= htmlspecialchars($lp['news_title']) ?>">
                        <?php else: ?>
                        <div class="lp-ph" style="background:linear-gradient(135deg,<?= cdot($lp['news_category']) ?>22,<?= cdot($lp['news_category']) ?>55)"><i class="fas fa-newspaper"></i></div>
                        <?php endif; ?>
                    </div>
                    <div class="lp-body">
                        <h5 class="lp-title"><?= htmlspecialchars(mb_substr($lp['news_title'], 0, 55)) . (mb_strlen($lp['news_title']) > 55 ? '…' : '') ?></h5>
                        <span class="lp-date"><i class="fas fa-calendar"></i><?= date('d M Y', strtotime($lp['publish_date'])) ?></span>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>
        <!-- Categories Card -->
        <div class="sidebar-card sc-reveal" style="--d:0.18s">
            <div class="sc-head"><div class="sc-icon ic-green"><i class="fas fa-layer-group"></i></div><span class="sc-title">Categories</span></div>
            <div class="sc-body" style="padding:10px 16px 14px">
                <?php $cmeta = ['news' => ['l' => 'News', 'd' => '#1fa8db'], 'press_release' => ['l' => 'Press Release', 'd' => '#e84a4a'], 'announcement' => ['l' => 'Announcement', 'd' => '#f5c518'], 'event' => ['l' => 'Event', 'd' => '#3aad1e']];
                foreach ($cat_counts as $cat => $cnt):
                    if (!isset($cmeta[$cat])) continue; $m = $cmeta[$cat]; ?>
                <a href="news?category=<?= $cat ?>" class="sb-cat-row">
                    <div class="scr-l"><span class="scr-dot" style="background:<?= $m['d'] ?>"></span><span class="scr-name"><?= $m['l'] ?></span></div>
                    <span class="scr-cnt"><?= $cnt ?></span>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
        <!-- Share Card -->
        <div class="sidebar-card sc-reveal share-sticky" style="--d:0.24s;background:linear-gradient(135deg,#e8f6fd,#eaf7e6)">
            <div class="sc-head" style="background:transparent;border-bottom-color:rgba(31,168,219,.2)">
                <div class="sc-icon" style="background:rgba(31,168,219,.15);color:var(--sky-d)"><i class="fas fa-share-alt"></i></div>
                <span class="sc-title">Share News</span>
            </div>
            <div class="sc-body">
                <div class="sidebar-share-btns">
                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?= urlencode('https://k-seva.com/news-details?slug=' . ($post['slug'] ?: $post['id'])) ?>" target="_blank" class="ssb ssb-fb"><i class="fab fa-facebook-f"></i> Facebook</a>
                    <a href="https://twitter.com/intent/tweet?url=<?= urlencode('https://k-seva.com/news-details?slug=' . ($post['slug'] ?: $post['id'])) ?>&text=<?= urlencode($post['news_title']) ?>" target="_blank" class="ssb ssb-tw"><i class="fab fa-x-twitter"></i> Twitter</a>
                    <a href="https://wa.me/?text=<?= urlencode($post['news_title'] . ' - https://k-seva.com/news-details?slug=' . ($post['slug'] ?: $post['id'])) ?>" target="_blank" class="ssb ssb-wa"><i class="fab fa-whatsapp"></i> WhatsApp</a>
                    <a href="#" onclick="copyLink()" class="ssb" style="background:var(--sky);"><i class="fas fa-link"></i> Copy Link</a>
                </div>
            </div>
        </div>
    </aside>
</div>

<?php include('includes/footer_1.php'); ?>
<?php include('includes/whats-app.php'); ?>
<?php include('includes/sticky-footer.php'); ?>

<!-- Toast element -->
<div id="toastMsg" class="toast-msg"></div>

<script>
/* Glitter particles (same as blog) */
(function(){ const c=document.getElementById('ks-canvas'); if(!c)return; const ctx=c.getContext('2d'); let W,H; const COLS=['#1fa8db','#4ec8f0','#3aad1e','#6ed44f','#f5c518','#ffffff','#0d7aa8','#22d3c5','#f97316','#e84a4a']; const N=90; let pts=[]; function resize(){W=c.width=innerWidth;H=c.height=innerHeight} resize(); addEventListener('resize',resize); const rnd=(a,b)=>a+Math.random()*(b-a); const SH=['star','circle','diamond']; class P{ constructor(){this.init(true)} init(f){ this.x=rnd(0,W);this.y=f?rnd(0,H):H+8; this.r=rnd(0.5,2.2);this.a=0;this.ma=rnd(.1,.5); this.s=rnd(.003,.011);this.d=1; this.c=COLS[0|Math.random()*COLS.length]; this.vx=rnd(-.1,.1);this.vy=rnd(-.3,-.05); this.ph=rnd(0,Math.PI*2);this.ang=rnd(0,Math.PI*2); this.sp=rnd(-.04,.04);this.sh=SH[0|Math.random()*SH.length]; } draw(t){ const f=.5+.5*Math.sin(t*.004+this.ph); ctx.save();ctx.globalAlpha=this.a*f; ctx.fillStyle=this.c;ctx.shadowBlur=this.r*9;ctx.shadowColor=this.c; ctx.translate(this.x,this.y);ctx.rotate(this.ang); ctx.beginPath(); if(this.sh==='star'){for(let i=0;i<8;i++){const a=i*Math.PI/4,l=i%2===0?this.r*3.5:this.r*1.2;i===0?ctx.moveTo(Math.cos(a)*l,Math.sin(a)*l):ctx.lineTo(Math.cos(a)*l,Math.sin(a)*l)}} else if(this.sh==='diamond'){ctx.moveTo(0,-this.r*2.8);ctx.lineTo(this.r*1.5,0);ctx.lineTo(0,this.r*2.8);ctx.lineTo(-this.r*1.5,0)} else{ctx.arc(0,0,this.r,0,Math.PI*2)} ctx.closePath();ctx.fill();ctx.restore(); } update(){ this.a+=this.s*this.d;this.ang+=this.sp; if(this.a>=this.ma)this.d=-1; if(this.a<=0){this.init(false);return} this.x+=this.vx;this.y+=this.vy; if(this.x<-8)this.x=W+8;if(this.x>W+8)this.x=-8; if(this.y<-8)this.init(false); } } for(let i=0;i<N;i++)pts.push(new P()); let t=0; (function loop(){ctx.clearRect(0,0,W,H);t++;pts.forEach(p=>{p.update();p.draw(t)});requestAnimationFrame(loop)})(); })();

/* Reading progress */
(function(){ const bar=document.getElementById('readBar'); const art=document.getElementById('articleContent'); if(!bar||!art)return; function update(){ const rect=art.getBoundingClientRect(); const total=art.offsetHeight; const scrolled=Math.max(0,-rect.top); const pct=Math.min(100,(scrolled/total)*100); bar.style.width=pct+'%'; } window.addEventListener('scroll',update,{passive:true}); })();

/* Scroll reveal */
(function(){ const obs=new IntersectionObserver(entries=>{ entries.forEach(e=>{ if(e.isIntersecting){ const el=e.target,d=parseInt(el.getAttribute('data-delay')||0); setTimeout(()=>el.classList.add('revealed'),d); obs.unobserve(el); } }); },{threshold:.07,rootMargin:'0px 0px -24px 0px'}); document.querySelectorAll('[data-reveal]').forEach(el=>obs.observe(el)); })();

/* Sidebar reveal */
(function(){ const obs=new IntersectionObserver(entries=>{ entries.forEach(e=>{if(e.isIntersecting){e.target.classList.add('sc-visible');obs.unobserve(e.target);}}); },{threshold:.1}); document.querySelectorAll('.sc-reveal').forEach(el=>obs.observe(el)); })();

/* Table of Contents */
(function(){ const content=document.getElementById('articleContent'); const nav=document.getElementById('tocNav'); if(!content||!nav)return; const headings=content.querySelectorAll('h2,h3'); if(headings.length===0){nav.innerHTML='<p class="toc-empty">No sections found.</p>';return;} let html='<ul class="toc-list">'; headings.forEach((h,i)=>{ const id='section-'+i;h.id=id; const isH3=h.tagName==='H3'; html+=`<li class="toc-item ${isH3?'toc-sub':''}"><a href="#${id}" class="toc-link">${h.textContent}</a></li>`; }); html+='</ul>'; nav.innerHTML=html; const links=nav.querySelectorAll('.toc-link'); const obs=new IntersectionObserver(entries=>{ entries.forEach(e=>{ const id=e.target.getAttribute('id'); const link=nav.querySelector(`[href="#${id}"]`); if(link){ if(e.isIntersecting){links.forEach(l=>l.classList.remove('active'));link.classList.add('active');} } }); },{rootMargin:'-20% 0% -70% 0%'}); headings.forEach(h=>obs.observe(h)); links.forEach(a=>{ a.addEventListener('click',e=>{ e.preventDefault(); document.querySelector(a.getAttribute('href'))?.scrollIntoView({behavior:'smooth',block:'start'}); }); }); })();

/* Copy link */
function copyLink(){ navigator.clipboard.writeText(window.location.href).then(()=>{ showToast('Link copied to clipboard!','success'); }); }

/* Hero parallax */
(function(){ const cover=document.querySelector('.dh-cover-img'); if(!cover)return; window.addEventListener('scroll',()=>{ const y=window.scrollY; cover.style.transform=`scale(1.08) translateY(${y*0.18}px)`; },{passive:true}); })();

/* Gallery Fancybox initialization */
if (typeof Fancybox !== 'undefined') { Fancybox.bind('[data-fancybox="gallery"]', {}); }

/* Star rating hints */
const hints=['','Terrible','Poor','Average','Good','Excellent'];
document.querySelectorAll('.star-rating label').forEach(lbl=>{
    lbl.addEventListener('mouseenter',function(){ const v=this.getAttribute('for').replace('s',''); document.getElementById('starHint').textContent=hints[v]||''; });
    lbl.addEventListener('mouseleave',()=>{ const chk=document.querySelector('.star-rating input:checked'); document.getElementById('starHint').textContent=chk?hints[chk.value]:'Click a star to rate'; });
});
document.querySelectorAll('.star-rating input').forEach(inp=>{ inp.addEventListener('change',function(){ document.getElementById('starHint').textContent=hints[this.value]||''; }); });

/* Review Form Submission */
const reviewForm = document.getElementById('reviewForm');
if (reviewForm) {
    let isSubmitting = false;
    reviewForm.addEventListener('submit', function(e) {
        e.preventDefault();
        if (isSubmitting) return;
        const btn = document.getElementById('reviewBtn');
        const name = this.querySelector('[name="reviewer_name"]').value.trim();
        const rating = this.querySelector('[name="rating"]:checked');
        const text = this.querySelector('[name="review_text"]').value.trim();
        if (!name || !rating || !text) {
            showToast('Please fill all required fields and select a rating.', 'error');
            return;
        }
        isSubmitting = true;
        btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Submitting…';
        btn.disabled = true;
        fetch('submit-news-review.php', {
            method: 'POST',
            body: new FormData(this)
        })
        .then(r => r.json())
        .then(d => {
            if (d.success) {
                showToast('Thank you! Your review will appear after approval.', 'success');
                reviewForm.reset();
                const starHint = document.getElementById('starHint');
                if (starHint) starHint.textContent = 'Click a star to rate';
            } else {
                showToast(d.message || 'Something went wrong. Please try again.', 'error');
            }
        })
        .catch(() => showToast('Network error. Please try again.', 'error'))
        .finally(() => {
            btn.innerHTML = '<i class="fas fa-paper-plane"></i> Submit Review';
            btn.disabled = false;
            isSubmitting = false;
        });
    });
}

/* Toast function */
function showToast(message, type = 'success') {
    let toast = document.getElementById('toastMsg');
    if (!toast) {
        toast = document.createElement('div');
        toast.id = 'toastMsg';
        toast.className = 'toast-msg';
        document.body.appendChild(toast);
    }
    toast.innerHTML = `<i class="fas ${type === 'success' ? 'fa-check-circle' : 'fa-exclamation-triangle'}"></i><span>${message}</span>`;
    toast.classList.remove('success', 'error');
    toast.classList.add(type);
    toast.classList.add('show');
    setTimeout(() => toast.classList.remove('show'), 4000);
}
</script>
</body>
</html>