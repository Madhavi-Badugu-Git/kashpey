<?php 
session_start();
include('includes/dbConfig.php');

// YouTube thumbnail base URL
define('YOUTUBE_THUMB', 'https://img.youtube.com/vi/');

// Fetch all active videos
$sql = "SELECT id, video_name, video_category, video_image, video, created_at 
        FROM tbl_gallery_videos 
        WHERE status = 1 
        ORDER BY FIELD(video_category,'educational','interview','news_media','events_seminars','testimonial','motivational'), created_at DESC";

$videos_query = mysqli_query($conn, $sql);

$videos     = [];
$categories = [];

if ($videos_query && mysqli_num_rows($videos_query) > 0) {
    while ($row = mysqli_fetch_assoc($videos_query)) {
        $videos[] = $row;
        $cat = $row['video_category'];
        $categories[$cat] = ($categories[$cat] ?? 0) + 1;
    }
}
$total = count($videos);

// Category meta
$cat_meta = [
    'educational'     => ['label'=>'Educational',     'icon'=>'fas fa-graduation-cap', 'color'=>'#06b6d4', 'bg'=>'rgba(6,182,212,.12)'],
    'interview'       => ['label'=>'Interview',       'icon'=>'fas fa-microphone-alt','color'=>'#8b5cf6', 'bg'=>'rgba(139,92,246,.12)'],
    'news_media'      => ['label'=>'News & Media',    'icon'=>'fas fa-newspaper',      'color'=>'#ef4444', 'bg'=>'rgba(239,68,68,.12)'],
    'events_seminars' => ['label'=>'Events & Seminars','icon'=>'fas fa-calendar-check','color'=>'#f59e0b', 'bg'=>'rgba(245,158,11,.12)'],
    'testimonial'     => ['label'=>'Testimonial',     'icon'=>'fas fa-comment-dots',   'color'=>'#22c55e', 'bg'=>'rgba(34,197,94,.12)'],
    'motivational'    => ['label'=>'Motivational',    'icon'=>'fas fa-bolt',           'color'=>'#ec4899', 'bg'=>'rgba(236,72,153,.12)'],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Video Gallery | K-Seva</title>
<meta name="description" content="Watch our videos – educational content, interviews, news coverage, events, testimonials and motivational talks.">
<?php include('includes/header_1.php'); ?>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,300;0,9..144,700;0,9..144,900;1,9..144,700&family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500;9..40,600;9..40,700&family=JetBrains+Mono:wght@400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
    /* ================================================================
       COMBINED STYLES (same as downloads page – reuse your CSS block)
       ================================================================ */
    /* PASTE YOUR FULL CSS FROM downloads.php HERE (including :root, hero, grid, card, lightbox, etc.) */
    /* For brevity, I'm not repeating it, but you MUST keep your existing style block */
    :root {
        --navy:      #071220;
        --navy-mid:  #0f2445;
        --sky:       #1fa8db;
        --sky-l:     #e8f7fe;
        --sky-d:     #0d7aa8;
        --green:     #64ba4d;
        --gold:      #f5c518;
        --white:     #ffffff;
        --off:       #f4f7fb;
        --text:      #0a1f3c;
        --text-m:    #2e4a6a;
        --muted:     #6b84a0;
        --border:    #dce8f0;
        --r-sm:  10px;
        --r-md:  18px;
        --r-lg:  26px;
        --r-xl:  36px;
        --sh-sm: 0 2px 14px rgba(14,34,64,.07);
        --sh-md: 0 8px 32px rgba(14,34,64,.11);
        --sh-lg: 0 20px 60px rgba(14,34,64,.14);
    }
    /* ... your full CSS from downloads.php ... */
    /* Make sure .dl-grid, .dl-card, .card-actions, etc. are included */
    /* Also the hero, breadcrumb, canvas, lightbox, toast – everything */
    
    /* ═══════════════════════════════════════════════
    ROOT & RESET
    ═══════════════════════════════════════════════ */
    :root {
        --navy:      #071220;
        --navy-mid:  #0f2445;
        --sky:       #1fa8db;
        --sky-l:     #e8f7fe;
        --sky-d:     #0d7aa8;
        --green:     #64ba4d;
        --gold:      #f5c518;
        --white:     #ffffff;
        --off:       #f4f7fb;
        --text:      #0a1f3c;
        --text-m:    #2e4a6a;
        --muted:     #6b84a0;
        --border:    #dce8f0;
        --r-sm:  10px;
        --r-md:  18px;
        --r-lg:  26px;
        --r-xl:  36px;
        --sh-sm: 0 2px 14px rgba(14,34,64,.07);
        --sh-md: 0 8px 32px rgba(14,34,64,.11);
        --sh-lg: 0 20px 60px rgba(14,34,64,.14);
    }
    *,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
    html{scroll-behavior:smooth}
    body{
        font-family:'DM Sans',sans-serif;
        background:var(--off);color:var(--text);
        overflow-x:hidden;margin-bottom:50px;
    }
    a{text-decoration:none;color:inherit}

    /* ═══ GLITTER CANVAS ═══ */
    #ks-canvas{
        position:fixed;inset:0;
        pointer-events:none;z-index:0;opacity:0.38;
    }

    /* ═══════════════════════════════════════════════
    HERO
    ═══════════════════════════════════════════════ */
    .dl-hero{
        position:relative;
        background:linear-gradient(160deg,#071220 0%,#0f2445 55%,#071a30 100%);
        padding:100px 28px 80px;
        text-align:center;
        overflow:hidden;
        z-index:1;
    }
    .dl-hero::before{
        content:'';position:absolute;inset:0;
        background:
            radial-gradient(ellipse at 15% 60%,rgba(31,168,219,.18) 0%,transparent 55%),
            radial-gradient(ellipse at 85% 20%,rgba(100,186,77,.10) 0%,transparent 55%),
            radial-gradient(ellipse at 55% 90%,rgba(245,197,24,.08) 0%,transparent 50%);
        pointer-events:none;
    }
    .hero-pattern{
        position:absolute;inset:0;
        background:repeating-linear-gradient(
            45deg,
            rgba(31,168,219,.02) 0,rgba(31,168,219,.02) 1px,
            transparent 1px,transparent 8px
        );
        pointer-events:none;
    }

    /* Orbiting rings (same as blog hero) */
    .hero-rings{
        position:absolute;top:50%;left:50%;
        transform:translate(-50%,-50%);
        pointer-events:none;width:1px;height:1px;
    }
    .ring{position:absolute;border-radius:50%;border:1px solid;top:50%;left:50%;transform:translate(-50%,-50%)}
    .ring-1{width:640px;height:640px;border-color:rgba(31,168,219,.07);animation:ringRot 45s linear infinite}
    .ring-2{width:460px;height:460px;border-color:rgba(100,186,77,.06);border-style:dashed;animation:ringRot 30s linear infinite reverse}
    .ring-3{width:280px;height:280px;border-color:rgba(245,197,24,.05);animation:ringRot 20s linear infinite}
    @keyframes ringRot{from{transform:translate(-50%,-50%) rotate(0)}to{transform:translate(-50%,-50%) rotate(360deg)}}

    .hero-inner{position:relative;z-index:2;max-width:820px;margin:0 auto}

    .hero-badge{
        display:inline-flex;align-items:center;gap:8px;
        background:rgba(255,255,255,.07);backdrop-filter:blur(8px);
        padding:7px 22px;border-radius:100px;
        font-size:.78rem;font-weight:600;letter-spacing:1.5px;text-transform:uppercase;
        color:var(--sky);border:1px solid rgba(31,168,219,.35);
        margin-bottom:22px;
        opacity:0;transform:translateY(-14px);
        animation:fadeDown .7s .1s ease forwards;
    }
    .dl-hero h1{
        font-family:'Fraunces',serif;
        font-size:clamp(38px,7vw,66px);
        font-weight:900;color:#fff;
        line-height:1.06;margin-bottom:16px;
        opacity:0;transform:translateY(-14px);
        animation:fadeDown .8s .2s ease forwards;
    }
    .dl-hero h1 .hl{
        background:linear-gradient(135deg,#1fa8db,#64ba4d,#f5c518);
        -webkit-background-clip:text;background-clip:text;color:transparent;
    }
    .hero-rule{
        display:flex;align-items:center;justify-content:center;gap:14px;
        margin:16px auto 18px;width:fit-content;
        opacity:0;transform:translateY(-10px);
        animation:fadeDown .7s .3s ease forwards;
    }
    .hr-line{width:55px;height:1px;background:linear-gradient(90deg,transparent,#1fa8db,transparent)}
    .hr-gem{
        width:9px;height:9px;background:#1fa8db;
        transform:rotate(45deg);
        box-shadow:0 0 14px #1fa8db;
        animation:gemPulse 2.2s ease infinite;
    }
    @keyframes gemPulse{
        0%,100%{opacity:.6;transform:rotate(45deg) scale(1)}
        50%{opacity:1;transform:rotate(45deg) scale(1.28)}
    }
    .hero-sub{
        font-size:1.05rem;color:rgba(255,255,255,.68);
        max-width:560px;margin:0 auto 30px;
        opacity:0;transform:translateY(-10px);
        animation:fadeDown .7s .38s ease forwards;
    }
    .hero-stats{
        display:flex;align-items:center;justify-content:center;gap:32px;
        opacity:0;transform:translateY(-10px);
        animation:fadeDown .7s .5s ease forwards;
    }
    .h-stat{text-align:center}
    .h-stat-num{
        font-family:'Fraunces',serif;
        font-size:2.1rem;font-weight:700;color:#fff;line-height:1;
    }
    .h-stat-num span{color:var(--sky)}
    .h-stat-lbl{font-size:.72rem;color:rgba(255,255,255,.48);letter-spacing:1px;text-transform:uppercase;margin-top:3px}
    .h-sep{width:1px;height:44px;background:rgba(255,255,255,.14)}
    .hero-wave{
        position:absolute;bottom:-1px;left:0;width:100%;line-height:0;z-index:3;
    }
    .hero-wave svg{display:block;width:100%}

    @keyframes fadeDown{
        from{opacity:0;transform:translateY(-16px)}
        to{opacity:1;transform:translateY(0)}
    }

    /* ═══ BREADCRUMB ═══ */
    .breadcrumb-bar{
        background:#fff;border-bottom:1px solid var(--border);
        padding:11px 0;position:relative;z-index:2;
    }
    .breadcrumb-inner{
        max-width:1340px;margin:0 auto;padding:0 28px;
        display:flex;align-items:center;gap:8px;
        font-size:.78rem;color:var(--muted);
        font-family:'JetBrains Mono',monospace;
    }
    .breadcrumb-inner a{color:var(--sky);text-decoration:none}
    .breadcrumb-inner a:hover{text-decoration:underline}
    .breadcrumb-inner i{font-size:.7rem}

    /* ═══════════════════════════════════════════════
    MAIN SECTION
    ═══════════════════════════════════════════════ */
    .dl-section{
        max-width:1340px;margin:0 auto;
        padding:56px 28px 80px;
        position:relative;z-index:2;
    }

    /* ── CATEGORY PILLS ── */
    .cat-filters{
        display:flex;flex-wrap:wrap;gap:10px;
        justify-content:center;margin-bottom:48px;
    }
    .cat-pill{
        display:inline-flex;align-items:center;gap:8px;
        padding:9px 22px;border-radius:100px;
        font-size:.84rem;font-weight:600;cursor:pointer;
        border:2px solid transparent;
        background:#fff;
        box-shadow:var(--sh-sm);
        transition:all .25s cubic-bezier(.34,1.2,.64,1);
        color:var(--muted);
        user-select:none;
    }
    .cat-pill i{font-size:.95rem}
    .cat-pill .pill-count{
        display:inline-flex;align-items:center;justify-content:center;
        width:22px;height:22px;border-radius:50%;
        font-size:.68rem;font-weight:800;
        background:var(--off);color:var(--muted);
        transition:all .25s;
    }
    .cat-pill:hover{
        transform:translateY(-3px);
        box-shadow:var(--sh-md);
        color:var(--text);
    }
    .cat-pill.active{
        color:#fff;
        background: linear-gradient(135deg,#1fa8db,#0d7aa8);
        transform:translateY(-3px);
        box-shadow:0 8px 24px rgba(0,0,0,.18);
    }
    .cat-pill.active .pill-count{background:rgba(255,255,255,.25);color:#fff}
    /* per-category active colours */
    .cat-pill[data-cat="all"].active          {background:linear-gradient(135deg,#1fa8db,#0d7aa8)}
    .cat-pill[data-cat="checklist"].active    {background:linear-gradient(135deg,#1fa8db,#0d7aa8)}
    .cat-pill[data-cat="offers"].active       {background:linear-gradient(135deg,#f5c518,#d4a510);color:#0a1f3c !important}
    .cat-pill[data-cat="offers"].active .pill-count{color:#0a1f3c !important}
    .cat-pill[data-cat="brochures"].active    {background:linear-gradient(135deg,#64ba4d,#4a9038)}
    .cat-pill[data-cat="posters"].active      {background:linear-gradient(135deg,#e84a4a,#c03030)}
    .cat-pill[data-cat="motivation"].active   {background:linear-gradient(135deg,#f97316,#d45c0a)}
    .cat-pill[data-cat="policies"].active     {background:linear-gradient(135deg,#8b5cf6,#6d3fd0)}
    .cat-pill[data-cat="presentations"].active{background:linear-gradient(135deg,#14b8a6,#0a8f80)}
    .cat-pill[data-cat="wishes"].active       {background:linear-gradient(135deg,#ec4899,#be185d)}

    /* ── TOOLBAR ── */
    .dl-toolbar{
        display:flex;align-items:center;justify-content:space-between;
        margin-bottom:28px;gap:16px;flex-wrap:wrap;
    }
    .dl-results{
        font-size:.85rem;color:var(--muted);font-weight:500;
    }
    .dl-results strong{color:var(--text)}

    .search-wrap{position:relative;width:260px}
    .search-inp{
        width:100%;padding:9px 16px 9px 40px;
        border-radius:100px;
        border:1.5px solid var(--border);
        background:#fff;color:var(--text);
        font-family:'DM Sans',sans-serif;font-size:.87rem;
        outline:none;
        transition:border-color .25s,box-shadow .25s;
    }
    .search-inp::placeholder{color:var(--muted)}
    .search-inp:focus{
        border-color:var(--sky);
        box-shadow:0 0 0 3px rgba(31,168,219,.1);
    }
    .search-ico{
        position:absolute;left:14px;top:50%;transform:translateY(-50%);
        color:var(--sky);font-size:.85rem;pointer-events:none;
    }

    .view-toggle{display:flex;gap:6px}
    .vt-btn{
        width:36px;height:36px;border-radius:10px;
        border:1.5px solid var(--border);background:#fff;
        display:flex;align-items:center;justify-content:center;
        cursor:pointer;color:var(--muted);font-size:.95rem;
        transition:all .2s;
    }
    .vt-btn:hover,.vt-btn.active{background:var(--sky);color:#fff;border-color:var(--sky)}

    /* ══════════════════════════════════════
    CARD GRID (default masonry-style 4 col)
    ══════════════════════════════════════ */
    .dl-grid{
        display:grid;
        grid-template-columns:repeat(auto-fill,minmax(280px,1fr));
        gap:22px;
        transition:opacity .3s;
    }
    .dl-grid.fade-out{opacity:0}

    /* LIST VIEW */
    .dl-grid.list-view{
        grid-template-columns:1fr;
        gap:16px;
    }

    /* ─── DOWNLOAD CARD ─── */
    .dl-card{
        background:#fff;
        border-radius:var(--r-lg);
        border:1px solid var(--border);
        box-shadow:var(--sh-sm);
        overflow:hidden;
        display:flex;flex-direction:column;
        transition:transform .32s cubic-bezier(.34,1.2,.64,1),
                box-shadow .32s ease,
                border-color .25s;
        animation:cardReveal .55s ease both;
    }
    .dl-card.hidden{display:none}
    .dl-card:hover{
        transform:translateY(-8px) scale(1.012);
        box-shadow:0 20px 44px rgba(14,34,64,.14);
        border-color:rgba(31,168,219,.3);
    }
    @keyframes cardReveal{
        from{opacity:0;transform:translateY(22px) scale(.97)}
        to{opacity:1;transform:translateY(0) scale(1)}
    }

    /* Card top accent stripe */
    .card-stripe{
        height:4px;flex-shrink:0;
        background:linear-gradient(90deg,var(--sky),var(--green));
    }

    /* Thumbnail / file icon area */
    .card-thumb{
        position:relative;
        height:200px;
        background:var(--off);
        overflow:hidden;
        display:flex;align-items:center;justify-content:center;
    }
    .card-thumb img{
        width:100%;height:100%;
        object-fit:cover;
        transition:transform .5s ease;
    }
    .dl-card:hover .card-thumb img{transform:scale(1.07)}

    .card-thumb-ph{
        display:flex;flex-direction:column;align-items:center;
        justify-content:center;gap:14px;
        width:100%;height:100%;
    }
    .ct-icon-wrap{
        width:88px;height:88px;border-radius:var(--r-md);
        display:flex;align-items:center;justify-content:center;
        font-size:2.8rem;
        box-shadow:0 8px 24px rgba(0,0,0,.1);
        transition:transform .3s,box-shadow .3s;
    }
    .dl-card:hover .ct-icon-wrap{
        transform:scale(1.1) translateY(-4px);
        box-shadow:0 14px 34px rgba(0,0,0,.14);
    }
    .ct-ext-badge{
        font-family:'JetBrains Mono',monospace;
        font-size:.7rem;font-weight:700;
        letter-spacing:.12em;text-transform:uppercase;
        padding:4px 12px;border-radius:100px;
        background:rgba(255,255,255,.9);
        border:1px solid rgba(0,0,0,.08);
        color:var(--text-m);
    }

    /* Category badge (top-left of thumb) */
    .card-cat-badge{
        position:absolute;top:12px;left:12px;
        padding:4px 12px;border-radius:100px;
        font-size:.68rem;font-weight:700;
        backdrop-filter:blur(8px);
        display:flex;align-items:center;gap:5px;
        text-transform:uppercase;letter-spacing:.8px;
        background:rgba(255,255,255,.9);
        border:1px solid rgba(255,255,255,.6);
        transition:opacity .3s;
        z-index:2;
    }

    /* File size badge (top-right) */
    .card-size-badge{
        position:absolute;top:12px;right:12px;
        padding:4px 10px;border-radius:100px;
        font-family:'JetBrains Mono',monospace;
        font-size:.67rem;font-weight:600;
        background:rgba(10,31,60,.65);
        color:rgba(255,255,255,.85);
        backdrop-filter:blur(6px);
        z-index:2;
    }

    /* Card body */
    .card-body{
        padding:20px 22px 22px;
        flex:1;display:flex;flex-direction:column;gap:10px;
    }
    .card-title{
        font-family:'Fraunces',serif;
        font-size:1.05rem;font-weight:700;
        color:var(--text);line-height:1.3;
        transition:color .2s;
        display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden;
    }
    .dl-card:hover .card-title{color:var(--sky-d)}

    .card-desc{
        font-size:.8rem;color:var(--muted);line-height:1.55;
        display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden;
    }
    .card-date{
        display:flex;align-items:center;gap:6px;
        font-family:'JetBrains Mono',monospace;
        font-size:.7rem;color:var(--muted);
        margin-top:auto;
    }
    .card-date i{color:var(--sky);font-size:.75rem}

    /* Action buttons */
    .card-actions{
        display:grid;grid-template-columns:1fr 1fr;gap:10px;
        padding:0 22px 20px;
    }
    .btn-view,.btn-dl{
        display:flex;align-items:center;justify-content:center;gap:7px;
        padding:10px 14px;border-radius:var(--r-sm);
        font-size:.8rem;font-weight:700;
        cursor:pointer;border:none;
        transition:all .25s cubic-bezier(.34,1.2,.64,1);
        text-decoration:none;
    }
    .btn-view{
        background:var(--off);
        color:var(--sky-d);
        border:1.5px solid rgba(31,168,219,.25);
    }
    .btn-view:hover{
        background:var(--sky-l);
        border-color:var(--sky);
        transform:translateY(-2px);
        box-shadow:0 6px 16px rgba(31,168,219,.14);
    }
    .btn-dl{
        background:linear-gradient(135deg,var(--sky),var(--sky-d));
        color:#fff;
        box-shadow:0 4px 14px rgba(31,168,219,.28);
    }
    .btn-dl:hover{
        background:linear-gradient(135deg,#29bff0,var(--sky));
        box-shadow:0 8px 24px rgba(31,168,219,.42);
        transform:translateY(-2px);
    }
    /* Download animation on click */
    .btn-dl.downloading{
        animation:dlPulse .6s ease;
    }
    @keyframes dlPulse{
        0%{transform:scale(1)}
        50%{transform:scale(.95)}
        100%{transform:scale(1)}
    }

    /* ══════════════════════════════════════
    LIST VIEW CARD
    ══════════════════════════════════════ */
    .dl-grid.list-view .dl-card{
        flex-direction:row;
        align-items:stretch;
        border-radius:var(--r-md);
    }
    .dl-grid.list-view .card-stripe{
        width:4px;height:auto;flex-shrink:0;
        background:linear-gradient(to bottom,var(--sky),var(--green));
        border-radius:var(--r-md) 0 0 var(--r-md);
    }
    .dl-grid.list-view .card-thumb{
        width:140px;flex-shrink:0;height:auto;
        border-radius:0;
        border-right:1px solid var(--border);
    }
    .dl-grid.list-view .card-body{
        flex:1;padding:18px 20px;justify-content:center;
    }
    .dl-grid.list-view .card-actions{
        grid-template-columns:1fr;
        padding:0 16px 0 0;
        justify-content:center;align-items:center;
        display:flex;flex-direction:column;gap:8px;min-width:120px;
    }
    .dl-grid.list-view .btn-view,
    .dl-grid.list-view .btn-dl{
        width:110px;padding:9px 10px;
    }
    .dl-grid.list-view .card-cat-badge{display:none}

    /* ══════════════════════════════════════
    EMPTY STATE
    ══════════════════════════════════════ */
    .empty-state{
        text-align:center;padding:90px 40px;
        grid-column:1/-1;
        display:none;
    }
    .empty-state.show{display:block}
    .empty-state i{font-size:3.5rem;color:var(--muted);margin-bottom:16px;display:block;opacity:.4}
    .empty-state h3{font-family:'Fraunces',serif;font-size:1.5rem;color:var(--muted);margin-bottom:8px}
    .empty-state p{color:var(--muted);font-size:.9rem;opacity:.7}

    /* ══════════════════════════════════════
    NO DOWNLOADS AT ALL
    ══════════════════════════════════════ */
    .no-downloads{
        text-align:center;padding:90px 40px;
        background:#fff;border-radius:var(--r-lg);
        border:1px solid var(--border);
    }
    .no-downloads i{font-size:3.5rem;color:var(--muted);margin-bottom:16px;display:block;opacity:.35}

    /* ══════════════════════════════════════
    PREVIEW LIGHTBOX (for images)
    ══════════════════════════════════════ */
    .lb{
        position:fixed;inset:0;z-index:9999;
        background:rgba(7,18,32,.96);
        backdrop-filter:blur(18px);
        display:flex;align-items:center;justify-content:center;
        padding:24px;
        opacity:0;visibility:hidden;
        transition:all .35s ease;
    }
    .lb.open{opacity:1;visibility:visible}
    .lb-inner{
        position:relative;
        max-width:900px;width:100%;
        animation:lbIn .4s cubic-bezier(.34,1.2,.64,1) both;
    }
    @keyframes lbIn{
        from{transform:scale(.88) translateY(18px);opacity:0}
        to{transform:scale(1) translateY(0);opacity:1}
    }
    .lb-img-wrap{
        border-radius:var(--r-lg);overflow:hidden;
        background:#111;
        box-shadow:0 40px 80px rgba(0,0,0,.6);
    }
    .lb-img-wrap img{
        width:100%;max-height:80vh;
        object-fit:contain;display:block;
    }
    .lb-caption{
        margin-top:18px;text-align:center;color:#fff;
    }
    .lb-caption h3{
        font-family:'Fraunces',serif;font-size:1.25rem;margin-bottom:6px;
    }
    .lb-caption p{font-size:.82rem;color:rgba(255,255,255,.55)}

    .lb-close{
        position:absolute;top:-16px;right:-16px;
        width:44px;height:44px;border-radius:50%;
        background:#fff;color:var(--text);
        border:none;cursor:pointer;font-size:1.1rem;
        display:flex;align-items:center;justify-content:center;
        box-shadow:0 4px 16px rgba(0,0,0,.3);
        transition:all .2s;z-index:2;
    }
    .lb-close:hover{transform:scale(1.1) rotate(90deg);background:var(--sky);color:#fff}

    /* Non-image file preview modal */
    .file-lb{
        position:fixed;inset:0;z-index:9999;
        background:rgba(7,18,32,.96);
        backdrop-filter:blur(18px);
        display:flex;align-items:center;justify-content:center;
        padding:24px;
        opacity:0;visibility:hidden;
        transition:all .35s ease;
    }
    .file-lb.open{opacity:1;visibility:visible}
    .file-lb-card{
        background:#fff;border-radius:var(--r-xl);
        padding:48px 52px;
        max-width:480px;width:100%;
        text-align:center;
        position:relative;
        box-shadow:0 40px 80px rgba(0,0,0,.4);
        animation:lbIn .4s cubic-bezier(.34,1.2,.64,1) both;
    }
    .flb-icon{
        width:100px;height:100px;border-radius:24px;
        display:flex;align-items:center;justify-content:center;
        font-size:3.2rem;
        margin:0 auto 24px;
    }
    .flb-title{
        font-family:'Fraunces',serif;
        font-size:1.35rem;font-weight:700;
        color:var(--text);margin-bottom:8px;
    }
    .flb-cat{
        display:inline-flex;align-items:center;gap:6px;
        padding:4px 14px;border-radius:100px;
        font-size:.72rem;font-weight:700;
        text-transform:uppercase;letter-spacing:.8px;
        margin-bottom:14px;
    }
    .flb-meta{
        display:flex;justify-content:center;gap:20px;
        font-size:.8rem;color:var(--muted);margin-bottom:28px;
    }
    .flb-meta span{display:flex;align-items:center;gap:5px}
    .flb-meta i{color:var(--sky);font-size:.8rem}

    .flb-desc{
        font-size:.88rem;color:var(--muted);
        line-height:1.6;margin-bottom:28px;
        padding:14px 18px;
        background:var(--off);border-radius:var(--r-sm);
        border:1px solid var(--border);
        text-align:left;
    }
    .flb-actions{display:grid;grid-template-columns:1fr 1fr;gap:12px}
    .flb-btn{
        display:flex;align-items:center;justify-content:center;gap:8px;
        padding:12px 20px;border-radius:var(--r-sm);
        font-size:.88rem;font-weight:700;
        cursor:pointer;border:none;
        transition:all .25s;text-decoration:none;
    }
    .flb-btn-view{
        background:var(--off);color:var(--sky-d);
        border:1.5px solid rgba(31,168,219,.3);
    }
    .flb-btn-view:hover{background:var(--sky-l);border-color:var(--sky)}
    .flb-btn-dl{
        background:linear-gradient(135deg,var(--sky),var(--sky-d));
        color:#fff;
        box-shadow:0 4px 16px rgba(31,168,219,.3);
    }
    .flb-btn-dl:hover{
        box-shadow:0 8px 26px rgba(31,168,219,.45);
        transform:translateY(-2px);
    }
    .flb-close{
        position:absolute;top:16px;right:16px;
        width:36px;height:36px;border-radius:50%;
        background:var(--off);color:var(--text);
        border:none;cursor:pointer;font-size:.95rem;
        display:flex;align-items:center;justify-content:center;
        transition:all .2s;
    }
    .flb-close:hover{background:var(--sky);color:#fff;transform:rotate(90deg)}

    /* Toast */
    .dl-toast{
        position:fixed;bottom:28px;right:28px;z-index:10000;
        display:flex;align-items:center;gap:12px;
        padding:14px 22px;border-radius:100px;
        background:var(--text);color:#fff;
        font-size:.85rem;font-weight:600;
        box-shadow:0 8px 28px rgba(0,0,0,.3);
        animation:toastIn .4s cubic-bezier(.34,1.2,.64,1) both;
        pointer-events:none;
    }
    @keyframes toastIn{
        from{opacity:0;transform:translateY(16px) scale(.92)}
        to{opacity:1;transform:translateY(0) scale(1)}
    }
    .dl-toast i{color:var(--green);font-size:1.1rem}

    /* Fade-up reveal */
    .fade-up{opacity:0;transform:translateY(24px);transition:opacity .65s ease,transform .65s ease}
    .fade-up.visible{opacity:1;transform:translateY(0)}

    /* ═══ RESPONSIVE ═══ */
    @media(max-width:1100px){.dl-grid{grid-template-columns:repeat(auto-fill,minmax(260px,1fr))}}
    @media(max-width:860px){.dl-grid{grid-template-columns:repeat(auto-fill,minmax(220px,1fr))}}
    @media(max-width:640px){
        .dl-grid{grid-template-columns:1fr}
        .dl-section{padding:36px 16px 60px}
        .cat-pill{padding:7px 14px;font-size:.78rem}
        .hero-stats{gap:20px}
        .flb-actions{grid-template-columns:1fr}
        .file-lb-card{padding:32px 24px}
        .search-wrap{width:100%;max-width:none}
    }

</style>
</head>
<body class="mt-body">

<canvas id="ks-canvas" aria-hidden="true"></canvas>
<div class="over-menu"></div>
<?php include('includes/navbar_1.php'); ?>

<!-- Hero Section -->
<section class="dl-hero">
    <div class="hero-pattern"></div>
    <div class="hero-rings" aria-hidden="true">
        <div class="ring ring-1"></div>
        <div class="ring ring-2"></div>
        <div class="ring ring-3"></div>
    </div>
    <div class="hero-inner">
        <div class="hero-badge"><i class="fas fa-video"></i> Watch & Learn</div>
        <h1>K-Seva <span class="hl">Video Gallery</span></h1>
        <div class="hero-rule">
            <span class="hr-line"></span>
            <span class="hr-gem"></span>
            <span class="hr-line"></span>
        </div>
        <p class="hero-sub">Inspiring talks, educational sessions, media coverage, and success stories – all in one place.</p>
        <div class="hero-stats">
            <div class="h-stat">
                <div class="h-stat-num"><?= $total ?><span>+</span></div>
                <div class="h-stat-lbl">Videos</div>
            </div>
            <div class="h-sep"></div>
            <div class="h-stat">
                <div class="h-stat-num"><?= count($categories) ?></div>
                <div class="h-stat-lbl">Categories</div>
            </div>
            <div class="h-sep"></div>
            <div class="h-stat">
                <div class="h-stat-num">24<span>/7</span></div>
                <div class="h-stat-lbl">Watch Anytime</div>
            </div>
        </div>
    </div>
    <div class="hero-wave">
        <svg viewBox="0 0 1440 60" preserveAspectRatio="none">
            <path d="M0,30 C240,60 480,0 720,30 C960,60 1200,0 1440,30 L1440,60 L0,60 Z" fill="#f4f7fb"/>
        </svg>
    </div>
</section>

<!-- Breadcrumb -->
<div class="breadcrumb-bar">
    <div class="breadcrumb-inner">
        <a href="home"><i class="fas fa-home"></i></a>
        <i class="fas fa-chevron-right"></i>
        <span>Video Gallery</span>
    </div>
</div>

<div class="dl-section">
    <?php if (empty($videos)): ?>
    <div class="no-downloads fade-up">
        <i class="fas fa-video-slash"></i>
        <h3>No Videos Yet</h3>
        <p>Video content will appear here once published. Please check back soon.</p>
    </div>
    <?php else: ?>
    <!-- Category Pills -->
    <div class="cat-filters fade-up">
        <button class="cat-pill active" data-cat="all">
            <i class="fas fa-border-all"></i> All
            <span class="pill-count"><?= $total ?></span>
        </button>
        <?php foreach($cat_meta as $slug => $m):
            if(!isset($categories[$slug])) continue; ?>
        <button class="cat-pill" data-cat="<?= $slug ?>">
            <i class="<?= $m['icon'] ?>"></i>
            <?= $m['label'] ?>
            <span class="pill-count"><?= $categories[$slug] ?></span>
        </button>
        <?php endforeach; ?>
    </div>

    <!-- Toolbar -->
    <div class="dl-toolbar fade-up">
        <p class="dl-results">Showing <strong id="showCount"><?= $total ?></strong> videos</p>
        <div style="display:flex;align-items:center;gap:10px;flex-wrap:wrap">
            <div class="search-wrap">
                <i class="fas fa-search search-ico"></i>
                <input type="text" id="vidSearch" class="search-inp" placeholder="Search videos…" autocomplete="off">
            </div>
            <div class="view-toggle">
                <button class="vt-btn active" id="gridViewBtn" title="Grid view"><i class="fas fa-th-large"></i></button>
                <button class="vt-btn" id="listViewBtn" title="List view"><i class="fas fa-list"></i></button>
            </div>
        </div>
    </div>

    <!-- Videos Grid -->
    <div class="dl-grid" id="vidGrid">
        <?php foreach($videos as $idx => $item):
            $catSlug   = $item['video_category'];
            $m         = $cat_meta[$catSlug] ?? ['label'=>ucwords(str_replace('_',' ',$catSlug)),'icon'=>'fas fa-video','color'=>'#1fa8db','bg'=>'rgba(31,168,219,.1)'];
            $videoId   = $item['video'];
            $thumbUrl  = (filter_var($item['video_image'], FILTER_VALIDATE_URL)) 
                        ? $item['video_image'] 
                        : '../uploads/gallery_videos/' . $item['video_image'];
            $youtubeUrl = 'https://www.youtube.com/watch?v=' . $videoId;
            $embedUrl   = 'https://www.youtube.com/embed/' . $videoId . '?autoplay=1';
            $delay     = min($idx * 50, 600);
        ?>
        <div class="dl-card"
             data-cat="<?= $catSlug ?>"
             data-title="<?= strtolower(htmlspecialchars($item['video_name'])) ?>"
             data-videoid="<?= $videoId ?>"
             data-embedurl="<?= $embedUrl ?>"
             data-name="<?= htmlspecialchars($item['video_name']) ?>"
             data-catlabel="<?= $m['label'] ?>"
             data-catcolor="<?= $m['color'] ?>"
             data-catbg="<?= $m['bg'] ?>"
             data-caticon="<?= $m['icon'] ?>"
             data-thumb="<?= htmlspecialchars($thumbUrl) ?>"
             style="animation-delay:<?= $delay ?>ms">

            <div class="card-stripe" style="background:linear-gradient(90deg,<?= $m['color'] ?>,<?= $m['color'] ?>99)"></div>
            <div class="card-thumb" style="cursor:pointer" onclick="playVideo(this.closest('.dl-card'))">
                <img class="card-img" src="<?= htmlspecialchars($thumbUrl) ?>" 
                     alt="<?= htmlspecialchars($item['video_name']) ?>" 
                     loading="lazy"
                     onerror="this.src='<?= YOUTUBE_THUMB . $videoId . '/mqdefault.jpg' ?>'">
                <div class="play-overlay">
                    <i class="fas fa-play-circle"></i>
                </div>
                <div class="card-cat-badge" style="color:<?= $m['color'] ?>">
                    <i class="<?= $m['icon'] ?>" style="font-size:.72rem"></i>
                    <?= $m['label'] ?>
                </div>
            </div>
            <div class="card-body">
                <div class="card-title"><?= htmlspecialchars($item['video_name']) ?></div>
                <div class="card-date">
                    <i class="fas fa-calendar-alt"></i>
                    <?= date('d M Y', strtotime($item['created_at'])) ?>
                </div>
            </div>
            <div class="card-actions">
                <button class="btn-view" onclick="playVideo(this.closest('.dl-card'))">
                    <i class="fas fa-play"></i> Play
                </button>
                <a class="btn-dl" href="<?= $youtubeUrl ?>" target="_blank" rel="noopener" onclick="showToast('Opening in YouTube — <?= addslashes(htmlspecialchars($item['video_name'])) ?>')">
                    <i class="fab fa-youtube"></i> YouTube
                </a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <div class="empty-state" id="emptyState">
        <i class="fas fa-search"></i>
        <h3>No Results Found</h3>
        <p>Try a different search term or select another category.</p>
    </div>
    <?php endif; ?>
</div>

<!-- Video Lightbox (YouTube embed) -->
<div class="video-lightbox" id="videoLb" role="dialog" aria-modal="true">
    <div class="vl-inner">
        <button class="vl-close" onclick="closeVideoLb()" aria-label="Close"><i class="fas fa-times"></i></button>
        <div class="vl-container">
            <iframe id="videoFrame" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="vl-caption" id="vlCaption"></div>
    </div>
</div>

<?php include('includes/footer_1.php'); ?>
<?php include('includes/whats-app.php'); ?>
<?php include('includes/sticky-footer.php'); ?>

<style>
/* Video lightbox specific */
.video-lightbox {
    position: fixed; inset: 0; z-index: 9999;
    background: rgba(7,18,32,.96);
    backdrop-filter: blur(18px);
    display: flex; align-items: center; justify-content: center;
    padding: 24px;
    opacity: 0; visibility: hidden;
    transition: all .35s ease;
}
.video-lightbox.open { opacity: 1; visibility: visible; }
.vl-inner {
    position: relative;
    max-width: 1000px; width: 100%;
    animation: lbIn .4s cubic-bezier(.34,1.2,.64,1) both;
}
.vl-container {
    position: relative;
    width: 100%;
    padding-bottom: 56.25%; /* 16:9 */
    background: #000;
    border-radius: var(--r-lg);
    overflow: hidden;
    box-shadow: 0 40px 80px rgba(0,0,0,.6);
}
.vl-container iframe {
    position: absolute; top: 0; left: 0;
    width: 100%; height: 100%;
}
.vl-close {
    position: absolute; top: -16px; right: -16px;
    width: 44px; height: 44px; border-radius: 50%;
    background: #fff; color: var(--text);
    border: none; cursor: pointer; font-size: 1.1rem;
    display: flex; align-items: center; justify-content: center;
    box-shadow: 0 4px 16px rgba(0,0,0,.3);
    transition: all .2s; z-index: 2;
}
.vl-close:hover { transform: scale(1.1) rotate(90deg); background: var(--sky); color: #fff; }
.vl-caption {
    margin-top: 18px; text-align: center; color: #fff;
    font-family: 'Fraunces', serif;
    font-size: 1.1rem;
}
.play-overlay {
    position: absolute;
    top: 50%; left: 50%;
    transform: translate(-50%, -50%);
    width: 60px; height: 60px;
    background: rgba(0,0,0,.7);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity .3s, transform .3s;
    pointer-events: none;
}
.play-overlay i {
    font-size: 2.5rem;
    color: white;
    margin-left: 5px;
}
.dl-card:hover .play-overlay {
    opacity: 1;
    transform: translate(-50%, -50%) scale(1.05);
}
.card-thumb {
    cursor: pointer;
}
@keyframes lbIn {
    from { transform: scale(.88) translateY(18px); opacity: 0; }
    to { transform: scale(1) translateY(0); opacity: 1; }
}
</style>

<script>
// Wait for DOM
document.addEventListener('DOMContentLoaded', function() {
    // Filter & search logic (same as downloads)
    let activeCat = 'all';
    let activeSearch = '';
    const cards = document.querySelectorAll('.dl-card');
    const grid = document.getElementById('vidGrid');
    const emptyState = document.getElementById('emptyState');
    const showCountSpan = document.getElementById('showCount');

    function applyFilters() {
        if (!grid) return;
        grid.classList.add('fade-out');
        setTimeout(() => {
            let visible = 0;
            cards.forEach(card => {
                const cat = card.dataset.cat;
                const title = (card.dataset.title || '').toLowerCase();
                const show = (activeCat === 'all' || cat === activeCat) &&
                             (activeSearch === '' || title.includes(activeSearch));
                card.classList.toggle('hidden', !show);
                if (show) visible++;
            });
            if (showCountSpan) showCountSpan.textContent = visible;
            if (emptyState) emptyState.classList.toggle('show', visible === 0);
            grid.classList.remove('fade-out');
        }, 200);
    }

    document.querySelectorAll('.cat-pill').forEach(btn => {
        btn.addEventListener('click', () => {
            document.querySelectorAll('.cat-pill').forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            activeCat = btn.dataset.cat;
            applyFilters();
        });
    });

    const searchInput = document.getElementById('vidSearch');
    if (searchInput) {
        searchInput.addEventListener('input', function() {
            activeSearch = this.value.trim().toLowerCase();
            applyFilters();
        });
    }

    // View toggle
    const gridBtn = document.getElementById('gridViewBtn');
    const listBtn = document.getElementById('listViewBtn');
    if (gridBtn && listBtn) {
        gridBtn.addEventListener('click', () => {
            grid.classList.remove('list-view');
            gridBtn.classList.add('active');
            listBtn.classList.remove('active');
        });
        listBtn.addEventListener('click', () => {
            grid.classList.add('list-view');
            listBtn.classList.add('active');
            gridBtn.classList.remove('active');
        });
    }

    // Image error fallback
    document.querySelectorAll('.card-img').forEach(img => {
        img.addEventListener('error', function() {
            const card = this.closest('.dl-card');
            const videoId = card.dataset.videoid;
            if (videoId) {
                this.src = 'https://img.youtube.com/vi/' + videoId + '/mqdefault.jpg';
            }
        });
    });
});

// Play video in lightbox
function playVideo(card) {
    const embedUrl = card.dataset.embedurl;
    const videoName = card.dataset.name;
    if (!embedUrl) return;
    
    const iframe = document.getElementById('videoFrame');
    iframe.src = embedUrl;
    
    const caption = document.getElementById('vlCaption');
    caption.textContent = videoName;
    
    document.getElementById('videoLb').classList.add('open');
    document.body.style.overflow = 'hidden';
}

function closeVideoLb() {
    const iframe = document.getElementById('videoFrame');
    iframe.src = '';
    document.getElementById('videoLb').classList.remove('open');
    document.body.style.overflow = '';
}

// Close on backdrop click
document.getElementById('videoLb')?.addEventListener('click', function(e) {
    if (e.target === this) closeVideoLb();
});

// Escape key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') closeVideoLb();
});

function showToast(msg) {
    let old = document.querySelector('.dl-toast');
    if (old) old.remove();
    let t = document.createElement('div');
    t.className = 'dl-toast';
    t.innerHTML = `<i class="fas fa-check-circle"></i> ${msg}`;
    document.body.appendChild(t);
    setTimeout(() => {
        t.style.animation = 'none';
        t.style.opacity = '0';
        t.style.transform = 'translateY(10px)';
        t.style.transition = 'all .4s ease';
        setTimeout(() => t.remove(), 400);
    }, 3000);
}

// Fade-up on scroll (same as before)
const io = new IntersectionObserver(entries => {
    entries.forEach(e => {
        if (e.isIntersecting) { e.target.classList.add('visible'); io.unobserve(e.target); }
    });
}, { threshold: 0.07 });
document.querySelectorAll('.fade-up').forEach(el => io.observe(el));

// Glitter canvas (copy from downloads page – same function)
(function() {
    const c = document.getElementById('ks-canvas');
    if (!c) return;
    const ctx = c.getContext('2d');
    let W, H;
    const COLS = ['#1fa8db','#4ec8f0','#64ba4d','#6ed44f','#f5c518','#ffffff','#0d7aa8','#f97316','#8b5cf6','#14b8a6'];
    const N = 80;
    let pts = [];
    function resize() { W = c.width = innerWidth; H = c.height = innerHeight; }
    resize(); addEventListener('resize', resize);
    const rnd = (a,b) => a + Math.random()*(b-a);
    const SH = ['star','circle','diamond'];
    class P {
        constructor(){ this.init(true) }
        init(f){
            this.x=rnd(0,W); this.y=f?rnd(0,H):H+8;
            this.r=rnd(.5,2.2); this.a=0; this.ma=rnd(.1,.5);
            this.s=rnd(.003,.011); this.d=1;
            this.c=COLS[0|Math.random()*COLS.length];
            this.vx=rnd(-.1,.1); this.vy=rnd(-.28,-.05);
            this.ph=rnd(0,Math.PI*2); this.ang=rnd(0,Math.PI*2);
            this.sp=rnd(-.04,.04); this.sh=SH[0|Math.random()*SH.length];
        }
        draw(t){
            const f=.5+.5*Math.sin(t*.004+this.ph);
            ctx.save(); ctx.globalAlpha=this.a*f;
            ctx.fillStyle=this.c; ctx.shadowBlur=this.r*9; ctx.shadowColor=this.c;
            ctx.translate(this.x,this.y); ctx.rotate(this.ang);
            ctx.beginPath();
            if(this.sh==='star'){
                for(let i=0;i<8;i++){const a=i*Math.PI/4,l=i%2===0?this.r*3.4:this.r*1.1;i===0?ctx.moveTo(Math.cos(a)*l,Math.sin(a)*l):ctx.lineTo(Math.cos(a)*l,Math.sin(a)*l);}
            } else if(this.sh==='diamond'){
                ctx.moveTo(0,-this.r*2.8);ctx.lineTo(this.r*1.5,0);ctx.lineTo(0,this.r*2.8);ctx.lineTo(-this.r*1.5,0);
            } else { ctx.arc(0,0,this.r,0,Math.PI*2); }
            ctx.closePath(); ctx.fill(); ctx.restore();
        }
        update(){
            this.a+=this.s*this.d; this.ang+=this.sp;
            if(this.a>=this.ma)this.d=-1;
            if(this.a<=0){this.init(false);return}
            this.x+=this.vx; this.y+=this.vy;
            if(this.x<-8)this.x=W+8; if(this.x>W+8)this.x=-8;
            if(this.y<-8)this.init(false);
        }
    }
    for(let i=0;i<N;i++) pts.push(new P());
    let t=0;
    (function loop(){ ctx.clearRect(0,0,W,H); t++; pts.forEach(p=>{p.update();p.draw(t)}); requestAnimationFrame(loop); })();
})();
</script>
</body>
</html>