<?php 
session_start();
include('includes/dbConfig.php');

// Image base path — adjust to match your server setup
define('IMG_PATH', 'https://crm.k-seva.com/backPanel/uploads/gallery_images/');

// Fetch all active images, ordered by category then date
$gallery_query = mysqli_query($conn, "
    SELECT id, image_name, description, image_category, image_file, created_at 
    FROM tbl_gallery_images 
    WHERE status = '1' 
    ORDER BY FIELD(image_category,'events','success_story','our_team','clients','awards'), created_at DESC
");

$gallery_items = [];
$categories    = [];

$sql = "SELECT id, image_name, description, image_category, image_file, created_at 
        FROM tbl_gallery_images 
        WHERE status = 1 
        ORDER BY FIELD(image_category,'events','success_story','our_team','clients','awards'), created_at DESC";

$gallery_query = mysqli_query($conn, $sql);

if ($gallery_query && mysqli_num_rows($gallery_query) > 0) {
    while ($row = mysqli_fetch_assoc($gallery_query)) {
        $gallery_items[] = $row;
        $cat = $row['image_category'];
        $categories[$cat] = ($categories[$cat] ?? 0) + 1;
    }
}
$total = count($gallery_items);


// Category meta — label, icon, accent colour
$cat_meta = [
    'events'        => ['label' => 'Events',        'icon' => 'fas fa-calendar', 'color' => '#1fa8db'],
    'success_story' => ['label' => 'Success Story', 'icon' => 'fas fa-trophy',        'color' => '#f5c518'],
    'our_team'      => ['label' => 'Our Team',      'icon' => 'fas fa-users',         'color' => '#64ba4d'],
    'clients'       => ['label' => 'Clients',       'icon' => 'fas fa-handshake',     'color' => '#e84a4a'],
    'awards'        => ['label' => 'Awards',        'icon' => 'fas fa-medal',         'color' => '#f97316'],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Gallery | K-Seva</title>
<meta name="description" content="Explore K-Seva's gallery — events, team moments, client milestones and award celebrations.">
<?php include('includes/header_1.php'); ?>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,300;0,9..144,700;0,9..144,900;1,9..144,700&family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
    /* ═══════════════════════════════════════════════
    CSS VARIABLES & RESET
    ═══════════════════════════════════════════════ */
    :root {
        --navy:        #071220;
        --navy-mid:    #0f2445;
        --sky:         #1fa8db;
        --sky-light:   #e8f7fe;
        --green:       #64ba4d;
        --gold:        #f5c518;
        --orange:      #f97316;
        --red:         #e84a4a;
        --white:       #ffffff;
        --off:         #f4f7fb;
        --text:        #0a1f3c;
        --muted:       #6b84a0;
        --border:      #dce8f0;
        --r-sm:        10px;
        --r-md:        18px;
        --r-lg:        28px;
    }
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
    body {
        font-family: 'DM Sans', sans-serif;
        background: var(--off);
        color: var(--text);
        overflow-x: hidden;
        margin-bottom: 50px;
    }

    /* ═══════════════════════════════════════════════
    GLITTER CANVAS
    ═══════════════════════════════════════════════ */
    #ks-canvas {
        position: fixed; inset: 0;
        pointer-events: none; z-index: 0; opacity: 0.4;
    }
    .over-menu {
        position: fixed; inset: 0;
        background: rgba(0,0,0,.5); z-index: 999;
        opacity: 0; visibility: hidden; transition: all .3s;
    }
    .over-menu.active { opacity:1; visibility:visible; }

    /* ═══════════════════════════════════════════════
    HERO
    ═══════════════════════════════════════════════ */
    .gallery-hero {
        position: relative;
        background: linear-gradient(160deg, #071220 0%, #0f2445 55%, #071a30 100%);
        padding: 90px 28px 72px;
        text-align: center;
        overflow: hidden;
    }
    .gallery-hero::before {
        content: '';
        position: absolute; inset: 0;
        background:
            radial-gradient(ellipse at 20% 60%, rgba(31,168,219,.15) 0%, transparent 55%),
            radial-gradient(ellipse at 80% 20%, rgba(100,186,77,.1)  0%, transparent 55%),
            radial-gradient(ellipse at 60% 90%, rgba(245,197,24,.08)  0%, transparent 50%);
        pointer-events: none;
    }
    .hero-pattern {
        position: absolute; inset: 0;
        background: repeating-linear-gradient(
            45deg,
            rgba(31,168,219,.025) 0, rgba(31,168,219,.025) 1px,
            transparent 1px, transparent 8px
        );
        pointer-events: none;
    }
    .hero-inner { position: relative; z-index: 2; max-width: 860px; margin: 0 auto; }
    .hero-badge {
        display: inline-flex; align-items: center; gap: 8px;
        background: rgba(255,255,255,.07); backdrop-filter: blur(8px);
        padding: 6px 20px; border-radius: 100px;
        font-size: .78rem; font-weight: 600; letter-spacing: 1.5px; text-transform: uppercase;
        color: var(--sky); border: 1px solid rgba(31,168,219,.35);
        margin-bottom: 22px; animation: fadeDown .7s ease both;
    }
    .hero-badge i { font-size: .85rem; }
    .gallery-hero h1 {
        font-family: 'Fraunces', serif;
        font-size: clamp(38px, 7vw, 62px);
        font-weight: 900; color: #fff;
        line-height: 1.08; margin-bottom: 18px;
        animation: fadeDown .8s .1s ease both;
    }
    .gallery-hero h1 .hl {
        background: linear-gradient(135deg, #1fa8db, #64ba4d, #f5c518);
        -webkit-background-clip: text; background-clip: text; color: transparent;
    }
    .hero-rule {
        display: flex; align-items: center; justify-content: center; gap: 14px;
        margin: 18px auto 20px; width: fit-content;
        animation: fadeDown .8s .15s ease both;
    }
    .hr-line  { width: 55px; height: 1px; background: linear-gradient(90deg, transparent, #1fa8db, transparent); }
    .hr-gem   {
        width: 9px; height: 9px; background: #1fa8db;
        transform: rotate(45deg);
        box-shadow: 0 0 14px #1fa8db;
        animation: gemPulse 2s ease infinite;
    }
    @keyframes gemPulse {
        0%,100%{opacity:.6;transform:rotate(45deg) scale(1)}
        50%    {opacity:1; transform:rotate(45deg) scale(1.25)}
    }
    .hero-sub {
        font-size: 1.05rem; color: rgba(255,255,255,.7);
        max-width: 560px; margin: 0 auto 28px;
        animation: fadeDown .8s .2s ease both;
    }
    .hero-stats {
        display: flex; align-items: center; justify-content: center; gap: 32px;
        animation: fadeDown .8s .28s ease both;
    }
    .h-stat { text-align: center; }
    .h-stat-num {
        font-family: 'Fraunces', serif;
        font-size: 2rem; font-weight: 700; color: #fff;
        line-height: 1;
    }
    .h-stat-num span { color: var(--sky); }
    .h-stat-lbl { font-size: .72rem; color: rgba(255,255,255,.5); letter-spacing: 1px; text-transform: uppercase; margin-top: 3px; }
    .h-sep { width: 1px; height: 44px; background: rgba(255,255,255,.15); }
    .hero-wave {
        position: absolute; bottom: -1px; left: 0; width: 100%; line-height: 0;
    }
    .hero-wave svg { display: block; width: 100%; }

    /* ═══════════════════════════════════════════════
    BREADCRUMB
    ═══════════════════════════════════════════════ */
    .breadcrumb-bar {
        background: #fff; border-bottom: 1px solid var(--border); padding: 11px 0;
        position: relative; z-index: 2;
    }
    .breadcrumb-inner {
        max-width: 1300px; margin: 0 auto; padding: 0 28px;
        display: flex; align-items: center; gap: 8px;
        font-size: .78rem; color: var(--muted);
        font-family: 'JetBrains Mono', monospace, 'DM Sans', sans-serif;
    }
    .breadcrumb-inner a { color: var(--sky); text-decoration: none; }
    .breadcrumb-inner a:hover { text-decoration: underline; }
    .breadcrumb-inner i { font-size: .7rem; }

    /* ═══════════════════════════════════════════════
    GALLERY SECTION WRAPPER
    ═══════════════════════════════════════════════ */
    .gallery-section {
        max-width: 1340px; margin: 0 auto;
        padding: 56px 28px 80px; position: relative; z-index: 2;
    }

    /* ── CATEGORY PILLS ── */
    .cat-filters {
        display: flex; flex-wrap: wrap; gap: 10px;
        justify-content: center; margin-bottom: 48px;
    }
    .cat-pill {
        display: inline-flex; align-items: center; gap: 8px;
        padding: 9px 22px; border-radius: 100px;
        font-size: .84rem; font-weight: 600; cursor: pointer;
        border: 2px solid transparent;
        background: #fff;
        box-shadow: 0 2px 10px rgba(0,0,0,.06);
        transition: all .25s cubic-bezier(.34,1.2,.64,1);
        user-select: none;
        color: var(--muted);
    }
    .cat-pill i { font-size: .95rem; }
    .cat-pill .pill-count {
        display: inline-flex; align-items: center; justify-content: center;
        width: 22px; height: 22px; border-radius: 50%;
        font-size: .68rem; font-weight: 800;
        background: var(--off); color: var(--muted);
        transition: all .25s;
    }
    .cat-pill:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(0,0,0,.1);
        color: var(--text);
    }
    .cat-pill.active {
        color: #fff; border-color: transparent;
        transform: translateY(-3px);
        box-shadow: 0 8px 24px rgba(0,0,0,.18);
    }
    .cat-pill.active .pill-count {
        background: rgba(255,255,255,.25); color: #fff;
    }

    /* all pill */
    .cat-pill[data-cat="all"] { --pill-color: #1fa8db; }
    .cat-pill[data-cat="all"].active { background: linear-gradient(135deg,#1fa8db,#0d7aa8); }
    .cat-pill[data-cat="events"].active        { background: linear-gradient(135deg,#1fa8db,#0a6fa6); }
    .cat-pill[data-cat="success_story"].active { background: linear-gradient(135deg,#f5c518,#d4a510); color:#0a1f3c !important; }
    .cat-pill[data-cat="success_story"].active .pill-count { color:#0a1f3c !important; }
    .cat-pill[data-cat="our_team"].active      { background: linear-gradient(135deg,#64ba4d,#4a9038); }
    .cat-pill[data-cat="clients"].active       { background: linear-gradient(135deg,#e84a4a,#c03030); }
    .cat-pill[data-cat="awards"].active        { background: linear-gradient(135deg,#f97316,#d45c0a); }

    /* ── RESULTS BAR ── */
    .results-bar {
        display: flex; align-items: center; justify-content: space-between;
        margin-bottom: 28px; gap: 16px; flex-wrap: wrap;
    }
    .results-text {
        font-size: .85rem; color: var(--muted);
        font-weight: 500;
    }
    .results-text strong { color: var(--text); }
    .view-toggle { display: flex; gap: 6px; }
    .vt-btn {
        width: 36px; height: 36px; border-radius: 10px;
        border: 1.5px solid var(--border); background: #fff;
        display: flex; align-items: center; justify-content: center;
        cursor: pointer; color: var(--muted);
        font-size: 1rem; transition: all .2s;
    }
    .vt-btn:hover, .vt-btn.active {
        background: var(--sky); color: #fff; border-color: var(--sky);
    }

    /* ── MASONRY / GRID ── */
    .gallery-grid {
        columns: 4; column-gap: 20px;
        transition: opacity .35s ease;
    }
    .gallery-grid.fade-out { opacity: 0; }
    .gallery-grid.list-view { columns: 1; }

    .gallery-item {
        break-inside: avoid;
        margin-bottom: 20px;
        border-radius: var(--r-lg);
        overflow: hidden;
        background: #fff;
        box-shadow: 0 4px 16px rgba(0,0,0,.06);
        border: 1px solid var(--border);
        cursor: pointer;
        transition: transform .35s cubic-bezier(.34,1.2,.64,1),
                    box-shadow .35s ease,
                    opacity .4s ease;
        animation: itemReveal .6s ease both;
    }
    .gallery-item.hidden {
        display: none;
    }
    .gallery-item:hover {
        transform: translateY(-8px) scale(1.012);
        box-shadow: 0 20px 40px rgba(0,0,0,.14);
    }

    @keyframes itemReveal {
        from { opacity:0; transform:translateY(22px) scale(.97); }
        to   { opacity:1; transform:translateY(0)   scale(1);   }
    }

    /* Image wrapper */
    .gi-img-wrap {
        position: relative; overflow: hidden;
        background: #e8f0f5;
    }
    .gi-img-wrap img {
        width: 100%; display: block;
        object-fit: cover;
        transition: transform .55s cubic-bezier(.25,.46,.45,.94);
        aspect-ratio: auto;
    }
    .gallery-item:hover .gi-img-wrap img { transform: scale(1.07); }

    /* Overlay */
    .gi-overlay {
        position: absolute; inset: 0;
        background: linear-gradient(to top, rgba(7,18,32,.82) 0%, transparent 55%);
        opacity: 0; transition: opacity .35s;
        display: flex; align-items: flex-end; padding: 18px;
    }
    .gallery-item:hover .gi-overlay { opacity: 1; }
    .gi-overlay-inner { color: #fff; }
    .gi-overlay-title { font-weight: 700; font-size: .92rem; margin-bottom: 4px; }
    .gi-overlay-cat   { font-size: .72rem; opacity: .8; display: flex; align-items: center; gap: 5px; }

    /* Category badge on image */
    .gi-cat-badge {
        position: absolute; top: 12px; left: 12px;
        padding: 4px 12px; border-radius: 100px;
        font-size: .68rem; font-weight: 700;
        backdrop-filter: blur(8px);
        background: rgba(255,255,255,.85);
        border: 1px solid rgba(255,255,255,.6);
        display: flex; align-items: center; gap: 5px;
        text-transform: uppercase; letter-spacing: .8px;
        transition: opacity .3s;
    }

    /* Expand icon */
    .gi-expand {
        position: absolute; top: 12px; right: 12px;
        width: 32px; height: 32px; border-radius: 50%;
        background: rgba(255,255,255,.85); backdrop-filter: blur(8px);
        display: flex; align-items: center; justify-content: center;
        color: var(--text); font-size: .9rem;
        opacity: 0; transform: scale(.8);
        transition: all .3s;
    }
    .gallery-item:hover .gi-expand { opacity: 1; transform: scale(1); }

    /* Info below image */
    .gi-info {
        padding: 14px 16px 16px;
    }
    .gi-title {
        font-weight: 700; font-size: .9rem; color: var(--text);
        margin-bottom: 5px;
        white-space: nowrap; overflow: hidden; text-overflow: ellipsis;
    }
    .gi-desc {
        font-size: .78rem; color: var(--muted);
        line-height: 1.45;
        display: -webkit-box; -webkit-line-clamp: 2;
        -webkit-box-orient: vertical; overflow: hidden;
    }
    .gi-date {
        font-size: .7rem; color: var(--muted);
        margin-top: 8px; display: flex; align-items: center; gap: 5px;
    }
    .gi-date i { color: var(--sky); }

    /* ── LIST VIEW ADJUSTMENTS ── */
    .gallery-grid.list-view .gallery-item {
        display: flex; gap: 0; border-radius: var(--r-md);
    }
    .gallery-grid.list-view .gi-img-wrap {
        width: 180px; flex-shrink: 0; border-radius: var(--r-md) 0 0 var(--r-md);
    }
    .gallery-grid.list-view .gi-img-wrap img { height: 100%; object-fit: cover; }
    .gallery-grid.list-view .gi-info {
        flex: 1; display: flex; flex-direction: column; justify-content: center;
        padding: 20px 24px;
    }
    .gallery-grid.list-view .gi-title { font-size: 1rem; white-space: normal; }
    .gallery-grid.list-view .gi-overlay { display: none; }

    /* ── EMPTY STATE ── */
    .empty-state {
        text-align: center; padding: 80px 40px;
        display: none;
    }
    .empty-state.show { display: block; }
    .empty-state i { font-size: 3rem; color: var(--muted); margin-bottom: 16px; display: block; }
    .empty-state p  { color: var(--muted); font-size: 1rem; }

    /* ── NO IMAGES AT ALL ── */
    .no-gallery {
        text-align: center; padding: 80px 40px;
        background: #fff; border-radius: var(--r-lg);
        border: 1px solid var(--border);
    }
    .no-gallery i { font-size: 3.5rem; color: black; margin-bottom: 16px; display: block; }

    /* ═══════════════════════════════════════════════
    LIGHTBOX
    ═══════════════════════════════════════════════ */
    .lightbox {
        position: fixed; inset: 0; z-index: 9999;
        background: rgba(7,18,32,.96);
        backdrop-filter: blur(16px);
        display: flex; align-items: center; justify-content: center;
        opacity: 0; visibility: hidden;
        transition: all .35s ease;
        padding: 20px;
    }
    .lightbox.open { opacity: 1; visibility: visible; }
    .lb-inner {
        position: relative;
        max-width: 900px; width: 100%;
        animation: lbIn .4s cubic-bezier(.34,1.2,.64,1) both;
    }
    @keyframes lbIn {
        from { transform: scale(.88) translateY(20px); opacity: 0; }
        to   { transform: scale(1) translateY(0);       opacity: 1; }
    }
    .lb-img-wrap {
        border-radius: var(--r-lg);
        overflow: hidden;
        background: #111;
        box-shadow: 0 40px 80px rgba(0,0,0,.6);
    }
    .lb-img-wrap img {
        width: 100%; max-height: 75vh;
        object-fit: contain; display: block;
    }
    .lb-caption {
        margin-top: 18px; text-align: center; color: #fff;
    }
    .lb-caption h3 { font-family: 'Fraunces',serif; font-size: 1.3rem; margin-bottom: 5px; }
    .lb-caption p  { font-size: .85rem; color: rgba(255,255,255,.6); }
    .lb-cat-chip {
        display: inline-flex; align-items: center; gap: 6px;
        padding: 4px 14px; border-radius: 100px; font-size: .72rem;
        font-weight: 700; margin-bottom: 10px; text-transform: uppercase;
        letter-spacing: .8px;
    }
    .lb-close {
        position: absolute; top: -16px; right: -16px;
        width: 42px; height: 42px; border-radius: 50%;
        background: #fff; color: var(--text);
        border: none; cursor: pointer; font-size: 1.1rem;
        display: flex; align-items: center; justify-content: center;
        box-shadow: 0 4px 14px rgba(0,0,0,.3);
        transition: all .2s; z-index: 1;
    }
    .lb-close:hover { transform: scale(1.1) rotate(90deg); background: var(--sky); color: #fff; }
    .lb-nav {
        position: absolute; top: 50%; transform: translateY(-50%);
        width: 44px; height: 44px; border-radius: 50%;
        background: rgba(255,255,255,.12); backdrop-filter: blur(8px);
        border: 1px solid rgba(255,255,255,.2);
        color: #fff; font-size: 1.1rem; cursor: pointer;
        display: flex; align-items: center; justify-content: center;
        transition: all .25s; z-index: 1;
    }
    .lb-nav:hover { background: var(--sky); border-color: var(--sky); transform: translateY(-50%) scale(1.1); }
    .lb-prev { left: -60px; }
    .lb-next { right: -60px; }
    .lb-counter {
        position: absolute; bottom: -44px; left: 50%; transform: translateX(-50%);
        color: rgba(255,255,255,.5); font-size: .78rem; letter-spacing: 1px;
    }

    /* ═══════════════════════════════════════════════
    FADE-UP ANIMATION
    ═══════════════════════════════════════════════ */
    .fade-up { opacity:0; transform:translateY(28px); transition: opacity .7s ease, transform .7s ease; }
    .fade-up.visible { opacity:1; transform:translateY(0); }

    @keyframes fadeDown {
        from { opacity:0; transform:translateY(-16px); }
        to   { opacity:1; transform:translateY(0); }
    }

    /* ═══════════════════════════════════════════════
    RESPONSIVE
    ═══════════════════════════════════════════════ */
    @media (max-width:1200px) { .gallery-grid { columns: 3; } }
    @media (max-width:860px)  { .gallery-grid { columns: 2; } .lb-prev{left:-14px} .lb-next{right:-14px} }
    @media (max-width:540px)  {
        .gallery-grid { columns: 1; }
        .gallery-section { padding: 36px 16px 60px; }
        .cat-filters { gap: 8px; }
        .cat-pill { padding: 7px 14px; font-size: .78rem; }
        .hero-stats { gap: 20px; }
    }
</style>
</head>
<body class="mt-body">

<canvas id="ks-canvas" aria-hidden="true"></canvas>
<div class="over-menu"></div>
<?php include('includes/navbar_1.php'); ?>

<!-- ═══════ HERO ═══════ -->
<section class="gallery-hero">
    <div class="hero-pattern"></div>
    <div class="hero-inner">
        <div class="hero-badge"><i class="fas fa-images"></i> Visual Stories</div>
        <h1>Our <span class="hl">Gallery</span></h1>
        <div class="hero-rule">
            <span class="hr-line"></span>
            <span class="hr-gem"></span>
            <span class="hr-line"></span>
        </div>
        <p class="hero-sub">Moments that define us — from milestone events and team stories to client triumphs and national awards.</p>
        <div class="hero-stats">
            <div class="h-stat">
                <div class="h-stat-num"><?= $total ?><span>+</span></div>
                <div class="h-stat-lbl">Photos</div>
            </div>
            <div class="h-sep"></div>
            <div class="h-stat">
                <div class="h-stat-num"><?= count($categories) ?></div>
                <div class="h-stat-lbl">Categories</div>
            </div>
            <div class="h-sep"></div>
            <div class="h-stat">
                <div class="h-stat-num">100<span>%</span></div>
                <div class="h-stat-lbl">Real Moments</div>
            </div>
        </div>
    </div>
    <div class="hero-wave">
        <svg viewBox="0 0 1440 60" preserveAspectRatio="none">
            <path d="M0,30 C240,60 480,0 720,30 C960,60 1200,0 1440,30 L1440,60 L0,60 Z" fill="#f4f7fb"/>
        </svg>
    </div>
</section>

<!-- ═══════ BREADCRUMB ═══════ -->
<div class="breadcrumb-bar">
    <div class="breadcrumb-inner">
        <a href="home"><i class="fas fa-home"></i></a>
        <i class="fas fa-chevron-right"></i>
        <span>Gallery</span>
    </div>
</div>

<!-- ═══════ GALLERY ═══════ -->
<div class="gallery-section">

    <?php if (empty($gallery_items)): ?>
    <div class="no-gallery fade-up" style="display:block !important; opacity:1 !important;">
        <i class="fas fa-image"></i>
        <h3 style="font-family:'Fraunces',serif;font-size:1.6rem;margin-bottom:10px;">No Images Found</h3>
        <p style="color:var(--muted)">There are no images in the gallery yet. Please check back later.</p>
    </div>
    
    <?php else: ?>

    <!-- Category Filter Pills -->
    <div class="cat-filters fade-up">
        <button class="cat-pill active" data-cat="all">
            <i class="fas fa-border-all"></i> All
            <span class="pill-count"><?= $total ?></span>
        </button>
        <?php foreach ($cat_meta as $slug => $meta): ?>
            <?php if (isset($categories[$slug])): ?>
            <button class="cat-pill" data-cat="<?= $slug ?>"
                style="--pill-c:<?= $meta['color'] ?>">
                <i class="<?= $meta['icon'] ?>"></i>
                <?= $meta['label'] ?>
                <span class="pill-count"><?= $categories[$slug] ?></span>
            </button>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>

    <!-- Results Bar -->
    <div class="results-bar fade-up">
        <p class="results-text">Showing <strong id="showCount"><?= $total ?></strong> photos</p>
        <div class="view-toggle">
            <button class="vt-btn active" id="gridViewBtn" title="Grid view"><i class="fas fa-th"></i></button>
            <button class="vt-btn" id="listViewBtn" title="List view"><i class="fas fa-list"></i></button>
        </div>
    </div>

    <!-- Grid -->
    <div class="gallery-grid" id="galleryGrid">
        <?php foreach ($gallery_items as $idx => $item):
            $cat      = $item['image_category'];
            $meta     = $cat_meta[$cat] ?? ['label'=>ucwords(str_replace('_',' ',$cat)),'icon'=>'fas fa-image','color'=>'#1fa8db'];
            $imgSrc   = IMG_PATH . htmlspecialchars($item['image_file']);
            $title    = htmlspecialchars($item['image_name']);
            $desc     = htmlspecialchars($item['description'] ?? '');
            $dateStr  = date('d M Y', strtotime($item['created_at']));
            $delay    = min($idx * 50, 500);
        ?>
        <div class="gallery-item fade-up"
             data-cat="<?= $cat ?>"
             data-idx="<?= $idx ?>"
             style="animation-delay:<?= $delay ?>ms"
             onclick="openLightbox(<?= $idx ?>)">

            <div class="gi-img-wrap">
                <img src="<?= $imgSrc ?>"
                     alt="<?= $title ?>"
                     loading="lazy"
                     onerror="this.src='assets/images/placeholder.png'">

                <!-- Category badge -->
                <div class="gi-cat-badge" style="color:<?= $meta['color'] ?>">
                    <i class="<?= $meta['icon'] ?>" style="font-size:.75rem"></i>
                    <?= $meta['label'] ?>
                </div>

                <!-- Expand icon -->
                <div class="gi-expand"><i class="fas fa-expand-alt"></i></div>

                <!-- Hover overlay -->
                <div class="gi-overlay">
                    <div class="gi-overlay-inner">
                        <div class="gi-overlay-title"><?= $title ?></div>
                        <div class="gi-overlay-cat">
                            <i class="<?= $meta['icon'] ?>"></i> <?= $meta['label'] ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="gi-info">
                <div class="gi-title"><?= $title ?></div>
                <?php if ($desc): ?>
                <div class="gi-desc"><?= $desc ?></div>
                <?php endif; ?>
                <div class="gi-date"><i class="fas fa-calendar-alt"></i> <?= $dateStr ?></div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>


    <?php endif; ?>
</div><!-- /gallery-section -->

<!-- ═══════ LIGHTBOX ═══════ -->
<div class="lightbox" id="lightbox" role="dialog" aria-modal="true">
    <div class="lb-inner">
        <button class="lb-close" onclick="closeLightbox()" aria-label="Close"><i class="fas fa-times"></i></button>
        <button class="lb-nav lb-prev" onclick="lbNav(-1)" aria-label="Previous"><i class="fas fa-chevron-left"></i></button>
        <button class="lb-nav lb-next" onclick="lbNav(1)"  aria-label="Next"><i class="fas fa-chevron-right"></i></button>
        <div class="lb-img-wrap">
            <img id="lbImg" src="" alt="">
        </div>
        <div class="lb-caption">
            <div class="lb-cat-chip" id="lbCatChip"></div>
            <h3 id="lbTitle"></h3>
            <p  id="lbDesc"></p>
        </div>
        <div class="lb-counter" id="lbCounter"></div>
    </div>
</div>

<?php include('includes/footer_1.php'); ?>
<?php include('includes/whats-app.php'); ?>
<?php include('includes/sticky-footer.php'); ?>

<script>
/* ═══════════════════════════════════════
   GALLERY DATA from PHP
═══════════════════════════════════════ */
const ITEMS = <?= json_encode(array_map(function($i) {
    return [
        'src'   => IMG_PATH . $i['image_file'],
        'title' => $i['image_name'],
        'desc'  => $i['description'] ?? '',
        'cat'   => $i['image_category'],
        'date'  => date('d M Y', strtotime($i['created_at'])),
    ];
}, $gallery_items)); ?>;

const CAT_META = <?= json_encode($cat_meta); ?>;

/* ═══════════════════════════════════════
   CATEGORY FILTER
═══════════════════════════════════════ */
let activeCat   = 'all';
let filteredIdx = ITEMS.map((_,i)=>i); // indices of currently visible items

document.querySelectorAll('.cat-pill').forEach(pill => {
    pill.addEventListener('click', () => {
        document.querySelectorAll('.cat-pill').forEach(p => p.classList.remove('active'));
        pill.classList.add('active');
        activeCat = pill.dataset.cat;
        filterGallery(activeCat);
    });
});

function filterGallery(cat) {
    const grid = document.getElementById('galleryGrid');
    const items = document.querySelectorAll('.gallery-item');
    const empty = document.getElementById('emptyState');

    // fade out
    grid.classList.add('fade-out');

    setTimeout(() => {
        let visible = 0;
        filteredIdx = [];
        items.forEach((el, i) => {
            const elCat = el.dataset.cat;
            const show  = (cat === 'all' || elCat === cat);
            el.classList.toggle('hidden', !show);
            if (show) { filteredIdx.push(i); visible++; }
        });

        document.getElementById('showCount').textContent = visible;
        empty && empty.classList.toggle('show', visible === 0);

        grid.classList.remove('fade-out');
    }, 250);
}

/* ═══════════════════════════════════════
   VIEW TOGGLE (grid / list)
═══════════════════════════════════════ */
document.getElementById('gridViewBtn').addEventListener('click', function() {
    document.getElementById('galleryGrid').classList.remove('list-view');
    this.classList.add('active');
    document.getElementById('listViewBtn').classList.remove('active');
});
document.getElementById('listViewBtn').addEventListener('click', function() {
    document.getElementById('galleryGrid').classList.add('list-view');
    this.classList.add('active');
    document.getElementById('gridViewBtn').classList.remove('active');
});

/* ═══════════════════════════════════════
   LIGHTBOX
═══════════════════════════════════════ */
let lbCurrent = 0;

function openLightbox(dataIdx) {
    // find position in filteredIdx
    const posInFiltered = filteredIdx.indexOf(dataIdx);
    lbCurrent = posInFiltered >= 0 ? posInFiltered : 0;
    renderLb();
    document.getElementById('lightbox').classList.add('open');
    document.body.style.overflow = 'hidden';
}

function closeLightbox() {
    document.getElementById('lightbox').classList.remove('open');
    document.body.style.overflow = '';
}

function lbNav(dir) {
    lbCurrent = (lbCurrent + dir + filteredIdx.length) % filteredIdx.length;
    renderLb();
}

function renderLb() {
    const realIdx = filteredIdx[lbCurrent];
    const item = ITEMS[realIdx];
    if (!item) return;

    document.getElementById('lbImg').src   = item.src;
    document.getElementById('lbImg').alt   = item.title;
    document.getElementById('lbTitle').textContent = item.title;
    document.getElementById('lbDesc').textContent  = item.desc;
    document.getElementById('lbCounter').textContent = (lbCurrent + 1) + ' / ' + filteredIdx.length;

    // category chip
    const meta = CAT_META[item.cat] || {label: item.cat, color:'#1fa8db'};
    const chip = document.getElementById('lbCatChip');
    chip.textContent = meta.label;
    chip.style.background = meta.color + '22';
    chip.style.color      = meta.color;
    chip.style.border     = '1px solid ' + meta.color + '55';
}

// Keyboard nav
document.addEventListener('keydown', e => {
    const lb = document.getElementById('lightbox');
    if (!lb.classList.contains('open')) return;
    if (e.key === 'ArrowRight') lbNav(1);
    if (e.key === 'ArrowLeft')  lbNav(-1);
    if (e.key === 'Escape')     closeLightbox();
});

// Click backdrop to close
document.getElementById('lightbox').addEventListener('click', function(e) {
    if (e.target === this) closeLightbox();
});

/* ═══════════════════════════════════════
   FADE-UP ON SCROLL
═══════════════════════════════════════ */
const io = new IntersectionObserver(entries => {
    entries.forEach(e => {
        if (e.isIntersecting) { e.target.classList.add('visible'); io.unobserve(e.target); }
    });
}, { threshold: 0.08 });
document.querySelectorAll('.fade-up').forEach(el => io.observe(el));

/* ═══════════════════════════════════════
   GLITTER CANVAS (same as contact page)
═══════════════════════════════════════ */
(function() {
    const c = document.getElementById('ks-canvas');
    if (!c) return;
    const ctx = c.getContext('2d');
    let W, H;
    const COLS = ['#1fa8db','#4ec8f0','#64ba4d','#6ed44f','#f5c518','#ffffff','#0d7aa8','#f97316'];
    const N = 70;
    let pts = [];
    function resize() { W = c.width = innerWidth; H = c.height = innerHeight; }
    resize(); addEventListener('resize', resize);
    const rnd = (a,b) => a + Math.random()*(b-a);
    const SH = ['star','circle','diamond'];
    class P {
        constructor(){ this.init(true); }
        init(f){
            this.x=rnd(0,W); this.y=f?rnd(0,H):H+8;
            this.r=rnd(.5,2); this.a=0; this.ma=rnd(.1,.45);
            this.s=rnd(.003,.01); this.d=1;
            this.c=COLS[0|Math.random()*COLS.length];
            this.vx=rnd(-.1,.1); this.vy=rnd(-.25,-.05);
            this.ph=rnd(0,Math.PI*2); this.ang=rnd(0,Math.PI*2);
            this.sp=rnd(-.04,.04); this.sh=SH[0|Math.random()*SH.length];
        }
        draw(t){
            const f=.5+.5*Math.sin(t*.004+this.ph);
            ctx.save(); ctx.globalAlpha=this.a*f;
            ctx.fillStyle=this.c; ctx.shadowBlur=this.r*8; ctx.shadowColor=this.c;
            ctx.translate(this.x,this.y); ctx.rotate(this.ang);
            ctx.beginPath();
            if(this.sh==='star'){
                for(let i=0;i<8;i++){const a=i*Math.PI/4,l=i%2===0?this.r*3.2:this.r*1.1;i===0?ctx.moveTo(Math.cos(a)*l,Math.sin(a)*l):ctx.lineTo(Math.cos(a)*l,Math.sin(a)*l);}
            }else if(this.sh==='diamond'){
                ctx.moveTo(0,-this.r*2.5);ctx.lineTo(this.r*1.4,0);ctx.lineTo(0,this.r*2.5);ctx.lineTo(-this.r*1.4,0);
            }else{ctx.arc(0,0,this.r,0,Math.PI*2);}
            ctx.closePath();ctx.fill();ctx.restore();
        }
        update(){
            this.a+=this.s*this.d; this.ang+=this.sp;
            if(this.a>=this.ma)this.d=-1;
            if(this.a<=0){this.init(false);return;}
            this.x+=this.vx;this.y+=this.vy;
            if(this.x<-8)this.x=W+8;if(this.x>W+8)this.x=-8;
            if(this.y<-8)this.init(false);
        }
    }
    for(let i=0;i<N;i++)pts.push(new P());
    let t=0;
    (function loop(){ctx.clearRect(0,0,W,H);t++;pts.forEach(p=>{p.update();p.draw(t);});requestAnimationFrame(loop);})();
})();
</script>
</body>
</html>