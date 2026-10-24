<?php include('includes/dbConfig.php'); ?>
<?php
/* ═══ FETCH BLOG POST ═══ */
$slug = isset($_GET['slug']) ? mysqli_real_escape_string($conn, trim($_GET['slug'])) : '';

if(empty($slug)){
    header('Location: blog'); exit;
}

// Try by slug first, fallback by id
$post_q = mysqli_query($conn, "SELECT * FROM tbl_website_blog WHERE (slug='$slug' OR id='$slug') AND status='1' LIMIT 1");
if(!$post_q || mysqli_num_rows($post_q) === 0){
    header('Location: blog'); exit;
}
$post = mysqli_fetch_assoc($post_q);
$blog_id = (int)$post['id'];

// Increment view count
mysqli_query($conn, "UPDATE tbl_website_blog SET views_count = views_count + 1 WHERE id='".(int)$post['id']."'");

// Gallery
$gallery = !empty($post['gallery_images']) ? json_decode($post['gallery_images'], true) : [];

// Related posts
$rel_q = mysqli_query($conn, "
    SELECT id,blog_title,slug,blog_category,featured_image,author_name,publish_date,views_count,meta_description
    FROM tbl_website_blog
    WHERE status='1' AND blog_category='".mysqli_real_escape_string($conn,$post['blog_category'])."'
      AND id != '".(int)$post['id']."'
    ORDER BY publish_date DESC LIMIT 3
");
$related = [];
if($rel_q) while($r = mysqli_fetch_assoc($rel_q)) $related[] = $r;

// Latest posts
$latest_q = mysqli_query($conn,"
    SELECT id,blog_title,slug,blog_category,featured_image,publish_date
    FROM tbl_website_blog WHERE status='1' AND id != '".(int)$post['id']."'
    ORDER BY publish_date DESC LIMIT 5
");
$latest = [];
if($latest_q) while($r = mysqli_fetch_assoc($latest_q)) $latest[] = $r;

// Category counts
$cats_q = mysqli_query($conn,"SELECT blog_category,COUNT(*) AS c FROM tbl_website_blog WHERE status='1' GROUP BY blog_category ORDER BY c DESC");
$cat_counts=[];
if($cats_q) while($r=mysqli_fetch_assoc($cats_q)) $cat_counts[$r['blog_category']]=$r['c'];

/* ═══ HELPERS ═══ */
function burl($s,$id){return'blog-details?slug='.($s?:$id);}
function clbl($c){static $m=['blog'=>'📰 Blog','press_release'=>'📢 Press Release','announcement'=>'🔔 Announcement','event'=>'🎉 Event','update'=>'🔄 Update'];return $m[$c]??ucwords(str_replace('_',' ',$c));}
function cbadge($c){static $m=['blog'=>'cb-blog','press_release'=>'cb-press','announcement'=>'cb-ann','event'=>'cb-event','update'=>'cb-update'];return $m[$c]??'cb-blog';}
function cdot($c){static $m=['blog'=>'#1fa8db','press_release'=>'#e84a4a','announcement'=>'#f5c518','event'=>'#3aad1e','update'=>'#14b8a6'];return $m[$c]??'#1fa8db';}
function exc($h,$l=120){$t=strip_tags($h);return mb_strlen($t)>$l?mb_substr($t,0,$l).'…':$t;}

// Helper for images
function img_url($path) {
    return 'https://crm.k-seva.com/backPanel/uploads/website_blog/' . ltrim($path, '/');
}
function gallery_url($path) {
    return 'https://crm.k-seva.com/backPanel/uploads/website_blog/gallery/' . ltrim($path, '/');
}

$read_time = max(1, (int)ceil(str_word_count(strip_tags($post['blog_content'])) / 200));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes, viewport-fit=cover">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#003b66">
    <title><?= htmlspecialchars($post['blog_title']) ?> | K-Seva Blog</title>
    <meta name="description" content="<?= htmlspecialchars(!empty($post['meta_description']) ? $post['meta_description'] : exc($post['blog_content'],160)) ?>">
    <link rel="canonical" href="https://k-seva.com/blog-details?slug=<?= urlencode($post['slug']?:$post['id']) ?>">
    <link rel="shortcut icon" href="assets/logo/favicon.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            -webkit-tap-highlight-color: transparent;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #f5f7fa;
            color: #1a1a2e;
            overflow-x: hidden;
            padding-bottom: 30px;
        }

        /* Mobile Container */
        .mobile-container {
            max-width: 500px;
            margin: 0 auto;
            background: #ffffff;
            min-height: 100vh;
            position: relative;
        }

        /* Header */
        .mobile-header {
            background: #ffffff;
            position: sticky;
            top: 0;
            z-index: 100;
            padding: 12px 16px;
            border-bottom: 1px solid #e8ecf1;
            box-shadow: 0 2px 8px rgba(0,0,0,0.02);
        }

        .header-content {
            max-width: 500px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
        }

        .back-btn {
            background: #f0f2f5;
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            text-decoration: none;
            color: #1a1a2e;
        }

        .back-btn:active {
            background: #e8ecf1;
            transform: scale(0.95);
        }

        .back-btn i {
            font-size: 1.2rem;
        }

        .logo-area {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
        }

        .logo-area img {
            height: 35px;
            width: auto;
        }

        /* Reading Progress Bar */
        .read-progress-wrap {
            position: sticky;
            top: 0;
            z-index: 101;
            height: 3px;
            background: #e8ecf1;
        }
        .read-progress-bar {
            width: 0%;
            height: 3px;
            background: linear-gradient(90deg, #00b4d8, #023e8a);
            transition: width 0.2s;
        }

        /* Hero Section */
        .blog-hero {
            position: relative;
            background: linear-gradient(135deg, #003b66, #001e3c);
            padding: 40px 20px;
            text-align: center;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(255,255,255,0.15);
            backdrop-filter: blur(10px);
            padding: 6px 16px;
            border-radius: 50px;
            font-size: 0.7rem;
            font-weight: 600;
            color: #fed109;
            margin-bottom: 16px;
        }

        .hero-title {
            font-size: 1.6rem;
            font-weight: 800;
            color: white;
            margin-bottom: 12px;
            line-height: 1.3;
        }

        .hero-meta {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 16px;
            margin-top: 16px;
        }

        .hero-meta span {
            font-size: 0.7rem;
            color: rgba(255,255,255,0.7);
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        .hero-meta i {
            color: #fed109;
        }

        /* Breadcrumb */
        .breadcrumb {
            background: #ffffff;
            padding: 12px 16px;
            border-bottom: 1px solid #e8ecf1;
        }

        .breadcrumb-inner {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 0.75rem;
            flex-wrap: wrap;
        }

        .breadcrumb-inner a {
            color: #00b4d8;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 5px;
        }

        .breadcrumb-inner span {
            color: #6c757d;
        }

        /* Content */
        .blog-content {
            padding: 24px 16px;
        }

        .blog-content p {
            font-size: 0.95rem;
            line-height: 1.7;
            color: #4a5568;
            margin-bottom: 16px;
        }

        .blog-content h2 {
            font-size: 1.3rem;
            font-weight: 700;
            color: #003b66;
            margin: 24px 0 12px;
        }

        .blog-content h3 {
            font-size: 1.1rem;
            font-weight: 700;
            color: #003b66;
            margin: 20px 0 10px;
        }

        .blog-content ul, .blog-content ol {
            margin: 10px 0 10px 20px;
        }

        .blog-content li {
            font-size: 0.9rem;
            line-height: 1.6;
            color: #4a5568;
            margin-bottom: 6px;
        }

        .blog-content img {
            max-width: 100%;
            height: auto;
            border-radius: 16px;
            margin: 16px 0;
        }

        /* Gallery Section */
        .gallery-section {
            margin: 24px 0;
        }

        .gallery-title {
            font-size: 1rem;
            font-weight: 700;
            color: #003b66;
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
        }

        .gallery-item {
            position: relative;
            border-radius: 12px;
            overflow: hidden;
            aspect-ratio: 1/1;
            cursor: pointer;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .gallery-item-overlay {
            position: absolute;
            inset: 0;
            background: rgba(0,0,0,0.4);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: 0.2s;
        }

        .gallery-item-overlay i {
            color: white;
            font-size: 1.2rem;
        }

        .gallery-item:active .gallery-item-overlay {
            opacity: 1;
        }

        /* Tags */
        .article-tags {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 10px;
            margin: 20px 0;
            padding-top: 16px;
            border-top: 1px solid #e8ecf1;
        }

        .at-label {
            font-size: 0.75rem;
            font-weight: 600;
            color: #4a5568;
        }

        .at-tag {
            background: #f0f2f5;
            padding: 5px 12px;
            border-radius: 30px;
            font-size: 0.7rem;
            color: #00b4d8;
            text-decoration: none;
        }

        .at-tag:active {
            background: #e4e7eb;
        }

        /* Share Section */
        .article-share {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            margin: 16px 0;
            padding: 16px 0;
            border-top: 1px solid #e8ecf1;
            border-bottom: 1px solid #e8ecf1;
        }

        .as-label {
            font-size: 0.75rem;
            font-weight: 600;
            color: #4a5568;
        }

        .as-btns {
            display: flex;
            gap: 12px;
        }

        .share-btn {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            color: white;
            transition: 0.2s;
            cursor: pointer;
            border: none;
        }

        .share-btn:active {
            transform: scale(0.92);
        }

        .share-fb { background: #1877f2; }
        .share-tw { background: #000000; }
        .share-li { background: #0077b5; }
        .share-wa { background: #25d366; }
        .share-copy { background: #6c757d; color: white; }

        /* Related Posts */
        .related-section {
            margin: 24px 0;
        }

        .related-title {
            font-size: 1rem;
            font-weight: 700;
            color: #003b66;
            margin-bottom: 16px;
            padding-left: 10px;
            border-left: 3px solid #00b4d8;
        }

        .related-grid {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .rel-card {
            background: #ffffff;
            border-radius: 16px;
            border: 1px solid #e8ecf1;
            overflow: hidden;
            text-decoration: none;
            display: flex;
            gap: 12px;
            padding: 12px;
        }

        .rel-card:active {
            transform: scale(0.98);
            background: #f8f9fa;
        }

        .rc-img-wrap {
            width: 80px;
            height: 80px;
            border-radius: 12px;
            overflow: hidden;
            flex-shrink: 0;
        }

        .rc-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .rc-body {
            flex: 1;
        }

        .rc-title {
            font-size: 0.8rem;
            font-weight: 700;
            color: #1a1a2e;
            margin-bottom: 4px;
            line-height: 1.4;
        }

        .rc-date {
            font-size: 0.6rem;
            color: #a0aec0;
            display: inline-flex;
            align-items: center;
            gap: 4px;
        }

        /* Review Form */
        .review-form-card {
            background: #ffffff;
            border-radius: 20px;
            border: 1px solid #e8ecf1;
            padding: 20px;
            margin: 24px 0;
        }

        .rfc-title {
            font-size: 1rem;
            font-weight: 700;
            color: #003b66;
            margin-bottom: 16px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .rf-group {
            margin-bottom: 16px;
        }

        .rf-label {
            display: block;
            font-size: 0.7rem;
            font-weight: 600;
            color: #4a5568;
            margin-bottom: 6px;
        }

        .req {
            color: #ff6b6b;
        }

        .rf-input {
            width: 100%;
            padding: 12px;
            background: #f8f9fa;
            border: 1px solid #e8ecf1;
            border-radius: 12px;
            font-size: 0.85rem;
            font-family: 'Inter', sans-serif;
        }

        .rf-input:focus {
            outline: none;
            border-color: #00b4d8;
        }

        .rf-textarea {
            resize: none;
        }

        .star-rating {
            display: flex;
            flex-direction: row-reverse;
            justify-content: flex-end;
            gap: 8px;
        }

        .star-rating input {
            display: none;
        }

        .star-rating label {
            font-size: 1.8rem;
            color: #ddd;
            cursor: pointer;
            transition: 0.2s;
        }

        .star-rating input:checked ~ label,
        .star-rating label:hover,
        .star-rating label:hover ~ label {
            color: #fed109;
        }

        .star-hint {
            font-size: 0.65rem;
            color: #a0aec0;
            margin-top: 6px;
        }

        .btn-review {
            width: 100%;
            padding: 14px;
            background: linear-gradient(135deg, #00b4d8, #023e8a);
            border: none;
            border-radius: 28px;
            color: white;
            font-weight: 700;
            font-size: 0.9rem;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .btn-review:active {
            transform: scale(0.97);
        }

        .rf-note {
            font-size: 0.65rem;
            color: #a0aec0;
            margin-top: 12px;
            text-align: center;
        }

        /* Back to Blog Button */
        .back-row {
            text-align: center;
            margin: 24px 0;
        }

        .back-blog-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: #f0f2f5;
            padding: 12px 24px;
            border-radius: 40px;
            text-decoration: none;
            color: #1a1a2e;
            font-size: 0.85rem;
            font-weight: 500;
        }

        .back-blog-btn:active {
            background: #e4e7eb;
            transform: scale(0.97);
        }

        /* Bottom Navigation */
        .bottom-nav {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(255,255,255,0.98);
            border-top: 1px solid #e8ecf1;
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 8px 16px 20px;
            z-index: 100;
            max-width: 500px;
            margin: 0 auto;
        }

        .nav-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 4px;
            background: transparent;
            border: none;
            cursor: pointer;
            padding: 6px 12px;
            border-radius: 30px;
            font-family: 'Inter', sans-serif;
            flex: 1;
            max-width: 80px;
            text-decoration: none;
        }

        .nav-item i {
            font-size: 1.3rem;
            color: #a0aec0;
        }

        .nav-item span {
            font-size: 0.65rem;
            font-weight: 600;
            color: #a0aec0;
        }

        .nav-item.active i,
        .nav-item.active span {
            color: #00b4d8;
        }

        /* Toast Message */
        .toast-msg {
            position: fixed;
            bottom: 80px;
            left: 16px;
            right: 16px;
            background: #1a1a2e;
            padding: 12px 16px;
            border-radius: 12px;
            text-align: center;
            font-weight: 500;
            color: white;
            z-index: 2000;
            max-width: 500px;
            margin: 0 auto;
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.3s ease;
            pointer-events: none;
            display: flex;
            align-items: center;
            gap: 8px;
            justify-content: center;
        }

        .toast-msg.show {
            opacity: 1;
            transform: translateY(0);
        }

        .toast-msg.success {
            background: #2eb84b;
        }

        .toast-msg.error {
            background: #ff6b6b;
        }
    </style>
</head>
<body>

<!-- Mobile Header -->
<div class="mobile-header">
    <div class="header-content">
        <a href="blog" class="back-btn">
            <i class="fas fa-arrow-left"></i>
        </a>
        <div class="logo-area">
            <img src="assets/logo/kashpe.png" alt="K-Seva" onerror="this.style.display='none'">
        </div>
        <div style="width: 40px;"></div>
    </div>
</div>

<!-- Reading Progress Bar -->
<div class="read-progress-wrap">
    <div class="read-progress-bar" id="readBar"></div>
</div>

<!-- Main Mobile Container -->
<div class="mobile-container">
    
    <!-- Hero Section -->
    <div class="blog-hero">
        <div class="hero-badge">
            <i class="fas fa-newspaper"></i> <?= clbl($post['blog_category']) ?>
            <?php if($post['is_featured'] == 1): ?>
            • <i class="fas fa-crown"></i> Featured
            <?php endif; ?>
        </div>
        <h1 class="hero-title"><?= htmlspecialchars($post['blog_title']) ?></h1>
        <div class="hero-meta">
            <span><i class="fas fa-calendar-alt"></i> <?= date('d M Y', strtotime($post['publish_date'])) ?></span>
            <span><i class="fas fa-clock"></i> <?= $read_time ?> min read</span>
            <span><i class="fas fa-eye"></i> <?= number_format($post['views_count']) ?> views</span>
        </div>
    </div>

    <!-- Breadcrumb -->
    <div class="breadcrumb">
        <div class="breadcrumb-inner">
            <a href="home"><i class="fas fa-home"></i> Home</a>
            <i class="fas fa-chevron-right" style="font-size: 0.6rem; color: #a0aec0;"></i>
            <a href="blog">Blog</a>
            <i class="fas fa-chevron-right" style="font-size: 0.6rem; color: #a0aec0;"></i>
            <span><?= htmlspecialchars(mb_substr($post['blog_title'],0,40)).(mb_strlen($post['blog_title'])>40?'…':'') ?></span>
        </div>
    </div>

    <!-- Blog Content -->
    <div class="blog-content" id="articleContent">
        <?= $post['blog_content'] ?>
    </div>

    <!-- Gallery Section -->
    <?php if (!empty($gallery)): ?>
    <div class="gallery-section">
        <h3 class="gallery-title"><i class="fas fa-images"></i> Image Gallery</h3>
        <div class="gallery-grid">
            <?php foreach ($gallery as $img): ?>
            <div class="gallery-item" onclick="openGalleryImage('<?= gallery_url($img) ?>')">
                <img src="<?= gallery_url($img) ?>" alt="Gallery image" loading="lazy">
                <div class="gallery-item-overlay"><i class="fas fa-expand-arrows-alt"></i></div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?php endif; ?>

    <!-- Tags -->
    <div class="article-tags">
        <span class="at-label"><i class="fas fa-hashtag"></i> Tags:</span>
        <?php $tags = ['Digital India','G2C Services','K-Seva','Online Portal','e-Services'];
        foreach($tags as $tag): ?>
        <a href="blog?q=<?= urlencode(strtolower($tag)) ?>" class="at-tag">#<?= $tag ?></a>
        <?php endforeach; ?>
    </div>

    <!-- Share Section -->
    <div class="article-share">
        <span class="as-label"><i class="fas fa-share-alt"></i> Share this article:</span>
        <div class="as-btns">
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?= urlencode('https://k-seva.com/blog-details?slug='.($post['slug']?:$post['id'])) ?>" target="_blank" class="share-btn share-fb"><i class="fab fa-facebook-f"></i></a>
            <a href="https://twitter.com/intent/tweet?url=<?= urlencode('https://k-seva.com/blog-details?slug='.($post['slug']?:$post['id'])) ?>&text=<?= urlencode($post['blog_title']) ?>" target="_blank" class="share-btn share-tw"><i class="fab fa-x-twitter"></i></a>
            <a href="https://wa.me/?text=<?= urlencode($post['blog_title'].' https://k-seva.com/blog-details?slug='.($post['slug']?:$post['id'])) ?>" target="_blank" class="share-btn share-wa"><i class="fab fa-whatsapp"></i></a>
            <button class="share-btn share-copy" onclick="copyLink()"><i class="fas fa-link"></i></button>
        </div>
    </div>

    <!-- Related Posts -->
    <?php if(count($related) > 0): ?>
    <div class="related-section">
        <h3 class="related-title"><i class="fas fa-layer-group"></i> Related Articles</h3>
        <div class="related-grid">
            <?php foreach($related as $rp): ?>
            <a href="<?= burl($rp['slug'],$rp['id']) ?>" class="rel-card">
                <div class="rc-img-wrap">
                    <?php if(!empty($rp['featured_image'])): ?>
                    <img class="rc-img" src="https://crm.k-seva.com/backPanel/uploads/website_blog/<?= htmlspecialchars($rp['featured_image']) ?>" alt="<?= htmlspecialchars($rp['blog_title']) ?>" loading="lazy">
                    <?php else: ?>
                    <div class="rc-img" style="background:linear-gradient(135deg,<?= cdot($rp['blog_category']) ?>22,<?= cdot($rp['blog_category']) ?>44); display:flex; align-items:center; justify-content:center;">
                        <i class="fas fa-newspaper" style="color:<?= cdot($rp['blog_category']) ?>"></i>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="rc-body">
                    <h4 class="rc-title"><?= htmlspecialchars($rp['blog_title']) ?></h4>
                    <span class="rc-date"><i class="fas fa-calendar"></i> <?= date('d M Y',strtotime($rp['publish_date'])) ?></span>
                </div>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
    <?php endif; ?>

    <!-- Review Form -->
    <div class="review-form-card">
        <h3 class="rfc-title"><i class="fas fa-pen-nib"></i> Leave a Review</h3>
        <form id="reviewForm" novalidate>
            <input type="hidden" name="action" value="submit_review">
            <input type="hidden" name="blog_id" value="<?= $blog_id ?>">
            <div class="rf-group">
                <label class="rf-label">Your Name <span class="req">*</span></label>
                <input type="text" name="reviewer_name" class="rf-input" placeholder="Enter your name" required>
            </div>
            <div class="rf-group">
                <label class="rf-label">Email (optional)</label>
                <input type="email" name="reviewer_email" class="rf-input" placeholder="you@example.com">
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
                <textarea name="review_text" class="rf-input rf-textarea" rows="4" placeholder="Share your honest feedback..." required></textarea>
            </div>
            <button type="submit" class="btn-review" id="reviewBtn"><i class="fas fa-paper-plane"></i> Submit Review</button>
            <p class="rf-note"><i class="fas fa-info-circle"></i> Reviews are moderated and appear after approval.</p>
        </form>
    </div>

    <!-- Back to Blog -->
    <div class="back-row">
        <a href="blog" class="back-blog-btn"><i class="fas fa-arrow-left"></i> Back to Blog</a>
    </div>
</div>

<!-- Bottom Navigation -->
<div class="bottom-nav">
    <a href="home" class="nav-item"><i class="fas fa-home"></i><span>Home</span></a>
    <a href="blog" class="nav-item active"><i class="fas fa-newspaper"></i><span>Blog</span></a>
    <a href="contact" class="nav-item"><i class="fas fa-headset"></i><span>Support</span></a>
</div>

<script>
    // Reading Progress
    (function() {
        const bar = document.getElementById('readBar');
        const content = document.getElementById('articleContent');
        if (!bar || !content) return;
        function update() {
            const rect = content.getBoundingClientRect();
            const total = content.offsetHeight;
            const scrolled = Math.max(0, -rect.top);
            const pct = Math.min(100, (scrolled / total) * 100);
            bar.style.width = pct + '%';
        }
        window.addEventListener('scroll', update, { passive: true });
    })();

    // Copy Link
    function copyLink() {
        navigator.clipboard.writeText(window.location.href).then(() => {
            showToast('Link copied to clipboard!', 'success');
        });
    }

    // Gallery Image Viewer
    function openGalleryImage(url) {
        const modal = document.createElement('div');
        modal.style.cssText = 'position:fixed;top:0;left:0;right:0;bottom:0;background:rgba(0,0,0,0.9);z-index:2000;display:flex;align-items:center;justify-content:center;cursor:pointer;';
        modal.onclick = () => modal.remove();
        const img = document.createElement('img');
        img.src = url;
        img.style.cssText = 'max-width:90%;max-height:90%;border-radius:12px;';
        modal.appendChild(img);
        document.body.appendChild(modal);
    }

    // Star Rating Hint
    const stars = document.querySelectorAll('.star-rating input');
    const starHint = document.getElementById('starHint');
    stars.forEach(star => {
        star.addEventListener('change', function() {
            const val = this.value;
            const messages = {5: 'Excellent!', 4: 'Good!', 3: 'Average', 2: 'Poor', 1: 'Terrible'};
            starHint.textContent = messages[val] || 'Click a star to rate';
        });
    });

    // Review Form Submission
    const reviewForm = document.getElementById('reviewForm');
    if (reviewForm) {
        let isSubmitting = false;
        reviewForm.addEventListener('submit', function(e) {
            e.preventDefault();
            if (isSubmitting) return;

            const name = this.querySelector('[name="reviewer_name"]').value.trim();
            const rating = this.querySelector('[name="rating"]:checked');
            const text = this.querySelector('[name="review_text"]').value.trim();

            if (!name || !rating || !text) {
                showToast('Please fill all required fields and select a rating.', 'error');
                return;
            }

            isSubmitting = true;
            const btn = document.getElementById('reviewBtn');
            btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Submitting…';
            btn.disabled = true;

            fetch('submit-blog-review.php', {
                method: 'POST',
                body: new FormData(this)
            })
            .then(r => r.json())
            .then(d => {
                if (d.success) {
                    showToast('Thank you! Your review will appear after approval.', 'success');
                    reviewForm.reset();
                    starHint.textContent = 'Click a star to rate';
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

    // Toast Function
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