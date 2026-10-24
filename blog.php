<?php 
session_start();
include('includes/dbConfig.php');

// Fetch user data for header (optional)
$userId = $_SESSION['user_id'] ?? null;
$userName = $_SESSION['user_name'] ?? 'Guest';
$userEmail = $_SESSION['user_email'] ?? '';

if ($userId) {
    $stmt = $conn->prepare("SELECT firstName, lastName, mobile, email_id, avatar, status FROM tbl_retail_user WHERE id = ?");
    if ($stmt) {
        $stmt->bind_param("i", $userId);
        $stmt->execute();
        $userData = $stmt->get_result()->fetch_assoc();
        $stmt->close();
        
        $firstName = $userData['firstName'] ?? $userName;
        $lastName  = $userData['lastName']  ?? '';
        $fullName  = trim($firstName . ' ' . $lastName) ?: $userName;
        $email     = $userData['email_id']  ?? $userEmail;
        
        $firstLetter = !empty($firstName) ? strtoupper(substr($firstName, 0, 1)) : '';
        $initials = !empty($firstLetter) ? $firstLetter : (isset($userName) ? strtoupper(substr($userName, 0, 1)) : "U");
    } else {
        $firstName = $userName;
        $fullName = $userName;
        $email = $userEmail;
        $initials = 'U';
    }
} else {
    $firstName = 'Guest';
    $fullName = 'Guest User';
    $email = 'guest@kseva.com';
    $initials = 'G';
}

// Fetch blog data
$total_q = mysqli_query($conn, "SELECT COUNT(*) AS c FROM tbl_website_blog WHERE status='1'");
$total_c = $total_q ? (int)mysqli_fetch_assoc($total_q)['c'] : 0;

$blogs_q = mysqli_query($conn, "SELECT id,blog_title,slug,blog_category,blog_content,featured_image,meta_description,author_name,publish_date,views_count,is_featured FROM tbl_website_blog WHERE status='1' ORDER BY is_featured DESC,publish_date DESC");
$all_blogs = [];
if ($blogs_q) {
    while ($r = mysqli_fetch_assoc($blogs_q)) $all_blogs[] = $r;
}

$featured = null;
$others = [];
foreach ($all_blogs as $b) {
    if ($b['is_featured'] == 1 && $featured === null) $featured = $b;
    else $others[] = $b;
}

$cats_q = mysqli_query($conn, "SELECT blog_category,COUNT(*) AS c FROM tbl_website_blog WHERE status='1' GROUP BY blog_category ORDER BY c DESC");
$cat_counts = [];
if ($cats_q) {
    while ($r = mysqli_fetch_assoc($cats_q)) $cat_counts[$r['blog_category']] = $r['c'];
}

function exc($h, $l = 100) {
    $t = strip_tags($h);
    return mb_strlen($t) > $l ? mb_substr($t, 0, $l) . '…' : $t;
}

function burl($sl, $id) {
    return 'blog-details?slug=' . ($sl ?: $id);
}

$cmeta = [
    'blog' => ['l' => 'Blog', 'd' => '#1fa8db'],
    'press_release' => ['l' => 'Press Release', 'd' => '#e84a4a'],
    'announcement' => ['l' => 'Announcement', 'd' => '#f5c518'],
    'event' => ['l' => 'Event', 'd' => '#3aad1e'],
    'update' => ['l' => 'Update', 'd' => '#14b8a6']
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes, viewport-fit=cover">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#003b66">
    <title>Blog | K-Seva – Insights, Updates & Announcements</title>
    <meta name="description" content="Stay updated with the latest news, press releases, announcements and blog posts from K-Seva.">
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
            z-index: 10;
            transition: all 0.2s;
        }

        .back-btn:active {
            transform: scale(0.95);
            background: #e8ecf1;
        }

        .back-btn i {
            font-size: 1.2rem;
            color: #1a1a2e;
        }

        .logo-area {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .logo-area img {
            height: 35px;
            width: auto;
        }

        /* Hero Section */
        .blog-hero {
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
            font-size: 1.5rem;
            font-weight: 800;
            color: white;
            margin-bottom: 8px;
        }

        .hero-sub {
            font-size: 0.8rem;
            color: rgba(255,255,255,0.8);
            line-height: 1.5;
            margin-bottom: 20px;
        }

        .hero-stats {
            display: flex;
            justify-content: center;
            gap: 24px;
            margin-top: 20px;
        }

        .hstat {
            text-align: center;
        }

        .hstat-n {
            display: block;
            font-size: 1.5rem;
            font-weight: 800;
            color: white;
        }

        .hstat-l {
            font-size: 0.65rem;
            color: rgba(255,255,255,0.7);
        }

        /* Breadcrumb */
        .breadcrumb {
            background: #ffffff;
            padding: 12px 16px;
            border-bottom: 1px solid #e8ecf1;
        }

        .breadcrumb-inner {
            max-width: 500px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 0.75rem;
        }

        .breadcrumb-inner a {
            color: #00b4d8;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .breadcrumb-inner span {
            color: #6c757d;
        }

        /* Search Bar */
        .search-section {
            padding: 16px;
            background: #ffffff;
            border-bottom: 1px solid #e8ecf1;
        }

        .search-wrap {
            position: relative;
        }

        .search-wrap i {
            position: absolute;
            left: 14px;
            top: 50%;
            transform: translateY(-50%);
            color: #a0aec0;
            font-size: 0.9rem;
        }

        .search-wrap input {
            width: 100%;
            padding: 12px 40px 12px 40px;
            border: 1px solid #e8ecf1;
            border-radius: 30px;
            font-size: 0.85rem;
            font-family: 'Inter', sans-serif;
            background: #f8f9fa;
        }

        .search-wrap input:focus {
            outline: none;
            border-color: #00b4d8;
            background: white;
        }

        .search-clear {
            position: absolute;
            right: 14px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            cursor: pointer;
            color: #a0aec0;
            display: none;
        }

        /* Categories */
        .categories-section {
            padding: 16px;
            background: #ffffff;
            border-bottom: 1px solid #e8ecf1;
        }

        .section-header {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 12px;
        }

        .section-header i {
            font-size: 1rem;
            color: #00b4d8;
        }

        .section-header h3 {
            font-size: 0.9rem;
            font-weight: 700;
            color: #1a1a2e;
        }

        .categories-wrap {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .cat-chip {
            background: #f0f2f5;
            padding: 6px 14px;
            border-radius: 30px;
            font-size: 0.7rem;
            font-weight: 500;
            color: #4a5568;
            border: none;
            cursor: pointer;
        }

        .cat-chip.active {
            background: #00b4d8;
            color: white;
        }

        /* Tags */
        .tags-wrap {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .tag-chip {
            background: #f0f2f5;
            padding: 5px 12px;
            border-radius: 30px;
            font-size: 0.65rem;
            color: #4a5568;
            border: none;
            cursor: pointer;
        }

        /* Featured Post */
        .featured-section {
            padding: 16px;
            background: #ffffff;
            border-bottom: 1px solid #e8ecf1;
        }

        .featured-card {
            background: linear-gradient(135deg, #003b66, #001e3c);
            border-radius: 20px;
            overflow: hidden;
            text-decoration: none;
            display: block;
        }

        .featured-img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            background: #1a1a2e;
        }

        .featured-content {
            padding: 16px;
        }

        .featured-badge {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            background: rgba(255,255,255,0.2);
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 0.6rem;
            color: #fed109;
            margin-bottom: 10px;
        }

        .featured-title {
            font-size: 1.1rem;
            font-weight: 700;
            color: white;
            margin-bottom: 8px;
            line-height: 1.4;
        }

        .featured-excerpt {
            font-size: 0.75rem;
            color: rgba(255,255,255,0.7);
            line-height: 1.5;
            margin-bottom: 12px;
        }

        .featured-meta {
            display: flex;
            gap: 12px;
            font-size: 0.65rem;
            color: rgba(255,255,255,0.5);
            margin-bottom: 12px;
        }

        .featured-cta {
            color: #fed109;
            font-size: 0.75rem;
            font-weight: 600;
        }

        /* Blog Posts Grid */
        .posts-section {
            padding: 16px;
            padding-bottom: 40px;
        }

        .section-title {
            font-size: 1rem;
            font-weight: 700;
            color: #1a1a2e;
            margin-bottom: 16px;
            padding-left: 10px;
            border-left: 3px solid #00b4d8;
        }

        .posts-grid {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .blog-card {
            background: #ffffff;
            border-radius: 16px;
            overflow: hidden;
            border: 1px solid #e8ecf1;
            text-decoration: none;
            display: block;
            transition: all 0.2s;
        }

        .blog-card:active {
            transform: scale(0.98);
        }

        .blog-img {
            width: 100%;
            height: 160px;
            object-fit: cover;
            background: #e8ecf1;
        }

        .blog-content {
            padding: 14px;
        }

        .blog-category {
            display: inline-block;
            padding: 3px 10px;
            border-radius: 20px;
            font-size: 0.6rem;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .cat-blog { background: rgba(31,168,219,0.15); color: #1fa8db; }
        .cat-press_release { background: rgba(232,74,74,0.15); color: #e84a4a; }
        .cat-announcement { background: rgba(245,197,24,0.15); color: #f5c518; }
        .cat-event { background: rgba(58,173,30,0.15); color: #3aad1e; }
        .cat-update { background: rgba(20,184,166,0.15); color: #14b8a6; }

        .blog-title {
            font-size: 0.9rem;
            font-weight: 700;
            color: #1a1a2e;
            margin-bottom: 6px;
            line-height: 1.4;
        }

        .blog-excerpt {
            font-size: 0.75rem;
            color: #6c757d;
            line-height: 1.5;
            margin-bottom: 10px;
        }

        .blog-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.65rem;
            color: #a0aec0;
        }

        /* No Results */
        .no-results {
            text-align: center;
            padding: 40px 20px;
        }

        .no-results i {
            font-size: 3rem;
            color: #a0aec0;
            margin-bottom: 16px;
        }

        .no-results h3 {
            font-size: 1rem;
            color: #4a5568;
            margin-bottom: 8px;
        }

        .no-results p {
            font-size: 0.8rem;
            color: #a0aec0;
        }
    </style>
</head>
<body>

    <!-- Header with Back Button -->
    <div class="mobile-header">
        <div class="header-content">
            <button class="back-btn" onclick="goToDashboard()"><i class="fas fa-arrow-left"></i></button>
            <div class="logo-area">
                <img src="assets/logo/kashpe.png" alt="K-Seva" onerror="this.style.display='none'">
            </div>
            <div style="width: 40px;"></div>
        </div>
    </div>

    <!-- Main Mobile Container -->
    <div class="mobile-container">
        
        <!-- Hero Section -->
        <div class="blog-hero">
            <div class="hero-badge">
                <i class="fas fa-newspaper"></i> INSIGHTS & UPDATES
            </div>
            <h1 class="hero-title">Our Blog</h1>
            <p class="hero-sub">Stories, insights and announcements from K-Seva</p>
            <div class="hero-stats">
                <div class="hstat">
                    <span class="hstat-n"><?= $total_c ?></span>
                    <span class="hstat-l">Total Posts</span>
                </div>
                <div class="hstat">
                    <span class="hstat-n"><?= count($cat_counts) ?></span>
                    <span class="hstat-l">Categories</span>
                </div>
            </div>
        </div>

        <!-- Breadcrumb -->
        <div class="breadcrumb">
            <div class="breadcrumb-inner">
                <a href="retailer-dashboard"><i class="fas fa-home"></i> Home</a>
                <i class="fas fa-chevron-right" style="font-size: 0.6rem; color: #a0aec0;"></i>
                <span>Blog</span>
            </div>
        </div>

        <!-- Search -->
        <div class="search-section">
            <div class="search-wrap">
                <i class="fas fa-search"></i>
                <input type="text" id="searchInput" placeholder="Search articles..." autocomplete="off">
                <button class="search-clear" id="clearSearch" style="display:none"><i class="fas fa-times"></i></button>
            </div>
        </div>

        <!-- Categories -->
        <div class="categories-section">
            <div class="section-header">
                <i class="fas fa-layer-group"></i>
                <h3>Categories</h3>
            </div>
            <div class="categories-wrap" id="categoriesWrap">
                <button class="cat-chip active" data-cat="all">All</button>
                <?php foreach($cat_counts as $cat => $cnt): if(!isset($cmeta[$cat])) continue; ?>
                <button class="cat-chip" data-cat="<?= $cat ?>"><?= $cmeta[$cat]['l'] ?> (<?= $cnt ?>)</button>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Popular Tags -->
        <div class="categories-section">
            <div class="section-header">
                <i class="fas fa-tags"></i>
                <h3>Popular Tags</h3>
            </div>
            <div class="tags-wrap" id="tagsWrap">
                <button class="tag-chip" data-tag="digital india">#DigitalIndia</button>
                <button class="tag-chip" data-tag="g2c services">#G2CServices</button>
                <button class="tag-chip" data-tag="government">#Government</button>
                <button class="tag-chip" data-tag="csc">#CSC</button>
                <button class="tag-chip" data-tag="pan card">#PANCard</button>
                <button class="tag-chip" data-tag="aadhaar">#Aadhaar</button>
                <button class="tag-chip" data-tag="insurance">#Insurance</button>
            </div>
        </div>

        <!-- Featured Post -->
        <?php if($featured): ?>
        <div class="featured-section">
            <a href="<?= burl($featured['slug'], $featured['id']) ?>" class="featured-card">
                <?php if(!empty($featured['featured_image'])): ?>
                <img class="featured-img" src="https://crm.k-seva.com/backPanel/uploads/website_blog/<?= htmlspecialchars($featured['featured_image']) ?>" alt="<?= htmlspecialchars($featured['blog_title']) ?>">
                <?php endif; ?>
                <div class="featured-content">
                    <div class="featured-badge"><i class="fas fa-crown"></i> Featured</div>
                    <h2 class="featured-title"><?= htmlspecialchars($featured['blog_title']) ?></h2>
                    <p class="featured-excerpt"><?= htmlspecialchars(!empty($featured['meta_description']) ? $featured['meta_description'] : exc($featured['blog_content'], 100)) ?></p>
                    <div class="featured-meta">
                        <span><i class="fas fa-calendar"></i> <?= date('d M Y', strtotime($featured['publish_date'])) ?></span>
                        <span><i class="fas fa-eye"></i> <?= number_format($featured['views_count']) ?> views</span>
                    </div>
                    <div class="featured-cta">Read Full Story <i class="fas fa-arrow-right"></i></div>
                </div>
            </a>
        </div>
        <?php endif; ?>

        <!-- All Posts -->
        <div class="posts-section">
            <div class="section-title">All Articles</div>
            <div class="posts-grid" id="postsGrid">
                <?php foreach($others as $p): ?>
                <a href="<?= burl($p['slug'], $p['id']) ?>" class="blog-card" data-cat="<?= $p['blog_category'] ?>" data-title="<?= strtolower(htmlspecialchars($p['blog_title'])) ?>">
                    <?php if(!empty($p['featured_image'])): ?>
                    <img class="blog-img" src="https://crm.k-seva.com/backPanel/uploads/website_blog/<?= htmlspecialchars($p['featured_image']) ?>" alt="<?= htmlspecialchars($p['blog_title']) ?>">
                    <?php endif; ?>
                    <div class="blog-content">
                        <span class="blog-category cat-<?= str_replace('_', '', $p['blog_category']) ?>"><?= $cmeta[$p['blog_category']]['l'] ?? $p['blog_category'] ?></span>
                        <h3 class="blog-title"><?= htmlspecialchars($p['blog_title']) ?></h3>
                        <p class="blog-excerpt"><?= htmlspecialchars(!empty($p['meta_description']) ? $p['meta_description'] : exc($p['blog_content'], 80)) ?></p>
                        <div class="blog-footer">
                            <span><i class="fas fa-calendar"></i> <?= date('d M Y', strtotime($p['publish_date'])) ?></span>
                            <span><i class="fas fa-eye"></i> <?= number_format($p['views_count']) ?></span>
                        </div>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>

            <!-- No Results -->
            <div class="no-results" id="noResults" style="display:none">
                <i class="fas fa-search"></i>
                <h3>No results found</h3>
                <p>Try a different search term or category</p>
            </div>
        </div>

    </div>
<?php include('includes/bottom-nav.php'); ?>
    <script>
        // Go to Dashboard function
        function goToDashboard() {
            window.location.href = 'retailer-dashboard';
        }

        // Filter functionality
        let currentCategory = 'all';
        let currentSearch = '';

        const posts = document.querySelectorAll('.blog-card');
        const noResults = document.getElementById('noResults');
        const searchInput = document.getElementById('searchInput');
        const clearSearch = document.getElementById('clearSearch');
        const categoryBtns = document.querySelectorAll('.cat-chip');
        const tagBtns = document.querySelectorAll('.tag-chip');

        function applyFilters() {
            let visibleCount = 0;
            
            posts.forEach(post => {
                const postCat = post.getAttribute('data-cat');
                const postTitle = post.getAttribute('data-title') || '';
                const categoryMatch = currentCategory === 'all' || postCat === currentCategory;
                const searchMatch = currentSearch === '' || postTitle.includes(currentSearch);
                
                if (categoryMatch && searchMatch) {
                    post.style.display = 'block';
                    visibleCount++;
                } else {
                    post.style.display = 'none';
                }
            });
            
            noResults.style.display = visibleCount === 0 ? 'block' : 'none';
        }

        function setCategory(cat, btn) {
            currentCategory = cat;
            categoryBtns.forEach(btn => btn.classList.remove('active'));
            btn.classList.add('active');
            applyFilters();
        }

        function setSearch(value) {
            currentSearch = value.toLowerCase();
            clearSearch.style.display = value ? 'flex' : 'none';
            applyFilters();
        }

        function searchTag(tag) {
            searchInput.value = tag;
            setSearch(tag);
        }

        // Category click
        categoryBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                setCategory(btn.getAttribute('data-cat'), btn);
            });
        });

        // Tag click
        tagBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                searchTag(btn.getAttribute('data-tag'));
            });
        });

        // Search input
        searchInput.addEventListener('input', (e) => {
            setSearch(e.target.value);
        });

        // Clear search
        clearSearch.addEventListener('click', () => {
            searchInput.value = '';
            setSearch('');
        });
    </script>
</body>
</html>