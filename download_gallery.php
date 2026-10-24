<?php 
session_start();
include('includes/dbConfig.php');

// Use local filesystem path for file_exists()
define('DOWNLOAD_PATH', 'https://crm.k-seva.com/backPanel/uploads/downloads/');
define('DOWNLOAD_PATH_SERVER', $_SERVER['DOCUMENT_ROOT'] . 'https://crm.k-seva.com/backPanel/uploads/downloads/');

// Fetch all active downloads
$sql = "SELECT id, image_name, image_category, image_file, image_description, created_at 
        FROM tbl_downloads 
        WHERE status = 1 
        ORDER BY FIELD(image_category,'checklist','offers','brochures','posters','motivation','policies','presentations','wishes'), created_at DESC";

$dl_query = mysqli_query($conn, $sql);

$downloads  = [];
$categories = [];

if ($dl_query && mysqli_num_rows($dl_query) > 0) {
    while ($row = mysqli_fetch_assoc($dl_query)) {
        $downloads[] = $row;
        $cat = $row['image_category'];
        $categories[$cat] = ($categories[$cat] ?? 0) + 1;
    }
}
$total = count($downloads);

// Handle file download request
if (isset($_GET['download']) && !empty($_GET['download'])) {
    $file_id = intval($_GET['download']);
    $fq = mysqli_query($conn, "SELECT image_file, image_name FROM tbl_downloads WHERE id=$file_id AND status=1");
    if ($fq && $row = mysqli_fetch_assoc($fq)) {
        $fp = DOWNLOAD_PATH_SERVER . $row['image_file'];
        if (file_exists($fp)) {
            $ext  = strtolower(pathinfo($row['image_file'], PATHINFO_EXTENSION));
            $mime = [
                'pdf'=>'application/pdf','doc'=>'application/msword',
                'docx'=>'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
                'xls'=>'application/vnd.ms-excel',
                'xlsx'=>'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                'ppt'=>'application/vnd.ms-powerpoint',
                'pptx'=>'application/vnd.openxmlformats-officedocument.presentationml.presentation',
                'zip'=>'application/zip','txt'=>'text/plain',
                'jpg'=>'image/jpeg','jpeg'=>'image/jpeg','png'=>'image/png',
                'gif'=>'image/gif','webp'=>'image/webp',
            ];
            header('Content-Type: '.($mime[$ext] ?? 'application/octet-stream'));
            header('Content-Disposition: attachment; filename="'.basename($row['image_file']).'"');
            header('Content-Length: '.filesize($fp));
            readfile($fp); exit;
        }
    }
}

// Category meta
$cat_meta = [
    'checklist'     => ['label'=>'Check List',    'icon'=>'fas fa-clipboard-check', 'color'=>'#1fa8db', 'bg'=>'rgba(31,168,219,.12)'],
    'offers'        => ['label'=>'Offers',         'icon'=>'fas fa-tags',            'color'=>'#f5c518', 'bg'=>'rgba(245,197,24,.12)'],
    'brochures'     => ['label'=>'Brochures',      'icon'=>'fas fa-book-open',       'color'=>'#64ba4d', 'bg'=>'rgba(100,186,77,.12)'],
    'posters'       => ['label'=>'Posters',        'icon'=>'fas fa-image',           'color'=>'#e84a4a', 'bg'=>'rgba(232,74,74,.12)'],
    'motivation'    => ['label'=>'Motivation',     'icon'=>'fas fa-bolt',            'color'=>'#f97316', 'bg'=>'rgba(249,115,22,.12)'],
    'policies'      => ['label'=>'Policies',       'icon'=>'fas fa-gavel',           'color'=>'#8b5cf6', 'bg'=>'rgba(139,92,246,.12)'],
    'presentations' => ['label'=>'Presentations',  'icon'=>'fas fa-desktop',         'color'=>'#14b8a6', 'bg'=>'rgba(20,184,166,.12)'],
    'wishes'        => ['label'=>'Wishes',         'icon'=>'fas fa-star',            'color'=>'#ec4899', 'bg'=>'rgba(236,72,153,.12)'],
];

// File type helpers
function getFileExt($file){ return strtolower(pathinfo($file, PATHINFO_EXTENSION)); }
function isImage($ext){ return in_array($ext,['jpg','jpeg','png','gif','webp']); }
function getFileIcon($ext){
    $icons = [
        'pdf'=>['fas fa-file-pdf','#e84a4a'],
        'doc'=>['fas fa-file-word','#1fa8db'],'docx'=>['fas fa-file-word','#1fa8db'],
        'xls'=>['fas fa-file-excel','#64ba4d'],'xlsx'=>['fas fa-file-excel','#64ba4d'],
        'ppt'=>['fas fa-file-powerpoint','#f97316'],'pptx'=>['fas fa-file-powerpoint','#f97316'],
        'zip'=>['fas fa-file-zipper','#8b5cf6'],
        'txt'=>['fas fa-file-lines','#6b84a0'],
        'jpg'=>['fas fa-file-image','#14b8a6'],'jpeg'=>['fas fa-file-image','#14b8a6'],
        'png'=>['fas fa-file-image','#14b8a6'],'gif'=>['fas fa-file-image','#14b8a6'],
        'webp'=>['fas fa-file-image','#14b8a6'],
    ];
    return $icons[$ext] ?? ['fas fa-file','#6b84a0'];
}
function formatFileSize($path){
    if(!file_exists($path)) return '';
    $bytes = filesize($path);
    if($bytes < 1024) return $bytes.' B';
    if($bytes < 1048576) return round($bytes/1024,1).' KB';
    return round($bytes/1048576,1).' MB';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Downloads | K-Seva</title>
<meta name="description" content="Download brochures, offer documents, policies, checklists and more from K-Seva — India's trusted G2C digital service platform.">
<?php include('includes/header_1.php'); ?>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,300;0,9..144,700;0,9..144,900;1,9..144,700&family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500;9..40,600;9..40,700&family=JetBrains+Mono:wght@400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
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
</head>
<body class="mt-body">

<canvas id="ks-canvas" aria-hidden="true"></canvas>
<div class="over-menu"></div>
<?php include('includes/navbar_1.php'); ?>

<!-- ═══════ HERO ═══════ -->
<section class="dl-hero">
    <div class="hero-pattern"></div>
    <div class="hero-rings" aria-hidden="true">
        <div class="ring ring-1"></div>
        <div class="ring ring-2"></div>
        <div class="ring ring-3"></div>
    </div>
    <div class="hero-inner">
        <div class="hero-badge"><i class="fas fa-download"></i> Resource Centre</div>
        <h1>K-Seva <span class="hl">Downloads</span></h1>
        <div class="hero-rule">
            <span class="hr-line"></span>
            <span class="hr-gem"></span>
            <span class="hr-line"></span>
        </div>
        <p class="hero-sub">Access brochures, offer documents, policies, checklists and more — all in one place.</p>
        <div class="hero-stats">
            <div class="h-stat">
                <div class="h-stat-num"><?= $total ?><span>+</span></div>
                <div class="h-stat-lbl">Resources</div>
            </div>
            <div class="h-sep"></div>
            <div class="h-stat">
                <div class="h-stat-num"><?= count($categories) ?></div>
                <div class="h-stat-lbl">Categories</div>
            </div>
            <div class="h-sep"></div>
            <div class="h-stat">
                <div class="h-stat-num">100<span>%</span></div>
                <div class="h-stat-lbl">Free Access</div>
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
        <span>Downloads</span>
    </div>
</div>

<div class="dl-section">
    <?php if (empty($downloads)): ?>
    <div class="no-downloads fade-up">
        <i class="fas fa-folder-open"></i>
        <h3>No Downloads Yet</h3>
        <p>Resources will appear here once they are published. Please check back soon.</p>
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
        <p class="dl-results">Showing <strong id="showCount"><?= $total ?></strong> resources</p>
        <div style="display:flex;align-items:center;gap:10px;flex-wrap:wrap">
            <div class="search-wrap">
                <i class="fas fa-search search-ico"></i>
                <input type="text" id="dlSearch" class="search-inp" placeholder="Search resources…" autocomplete="off">
            </div>
            <div class="view-toggle">
                <button class="vt-btn active" id="gridViewBtn" title="Grid view"><i class="fas fa-th-large"></i></button>
                <button class="vt-btn" id="listViewBtn" title="List view"><i class="fas fa-list"></i></button>
            </div>
        </div>
    </div>

    <!-- Grid -->
    <div class="dl-grid" id="dlGrid">
        <?php foreach($downloads as $idx => $item):
            $ext       = getFileExt($item['image_file']);
            $isImg     = isImage($ext);
            [$ficn,$fcl] = getFileIcon($ext);
            $catSlug   = $item['image_category'];
            $m         = $cat_meta[$catSlug] ?? ['label'=>ucwords(str_replace('_',' ',$catSlug)),'icon'=>'fas fa-file','color'=>'#1fa8db','bg'=>'rgba(31,168,219,.1)'];
            $filePath  = DOWNLOAD_PATH_SERVER . $item['image_file'];
            $fileSize  = formatFileSize($filePath);
            $fileUrl   = DOWNLOAD_PATH . $item['image_file'];
            $dlUrl     = '?download='.$item['id'];
            $delay     = min($idx * 50, 600);
        ?>
        <div class="dl-card"
             data-cat="<?= $catSlug ?>"
             data-title="<?= strtolower(htmlspecialchars($item['image_name'])) ?>"
             data-name="<?= htmlspecialchars($item['image_name']) ?>"
             data-catslug="<?= $catSlug ?>"
             data-catlabel="<?= $m['label'] ?>"
             data-catcolor="<?= $m['color'] ?>"
             data-catbg="<?= $m['bg'] ?>"
             data-caticon="<?= $m['icon'] ?>"
             data-fileicon="<?= $ficn ?>"
             data-filecolor="<?= $fcl ?>"
             data-type="<?= $isImg ? 'image' : 'file' ?>"
             data-fileurl="<?= htmlspecialchars($fileUrl) ?>"
             data-dlurl="<?= $dlUrl ?>"
             data-filesize="<?= $fileSize ?>"
             data-fileext="<?= strtoupper($ext) ?>"
             data-desc="<?= htmlspecialchars($item['image_description'] ?? '') ?>"
             style="animation-delay:<?= $delay ?>ms">

            <div class="card-stripe" style="background:linear-gradient(90deg,<?= $m['color'] ?>,<?= $m['color'] ?>99)"></div>
            <div class="card-thumb">
                <?php if($isImg): ?>
                <img class="card-img" src="<?= htmlspecialchars($fileUrl) ?>" alt="<?= htmlspecialchars($item['image_name']) ?>" loading="lazy">
                <?php else: ?>
                <div class="card-thumb-ph" style="background:<?= $m['bg'] ?>">
                    <div class="ct-icon-wrap" style="background:rgba(255,255,255,.9);border:1px solid <?= $m['color'] ?>22">
                        <i class="<?= $ficn ?>" style="color:<?= $fcl ?>"></i>
                    </div>
                    <span class="ct-ext-badge" style="color:<?= $m['color'] ?>;border-color:<?= $m['color'] ?>44">
                        <?= strtoupper($ext) ?>
                    </span>
                </div>
                <?php endif; ?>
                <div class="card-cat-badge" style="color:<?= $m['color'] ?>">
                    <i class="<?= $m['icon'] ?>" style="font-size:.72rem"></i>
                    <?= $m['label'] ?>
                </div>
                <?php if($fileSize): ?>
                <div class="card-size-badge"><?= $fileSize ?></div>
                <?php endif; ?>
            </div>
            <div class="card-body">
                <div class="card-title"><?= htmlspecialchars($item['image_name']) ?></div>
                <?php if(!empty($item['image_description'])): ?>
                <div class="card-desc"><?= htmlspecialchars($item['image_description']) ?></div>
                <?php endif; ?>
                <div class="card-date">
                    <i class="fas fa-calendar-alt"></i>
                    <?= date('d M Y', strtotime($item['created_at'])) ?>
                </div>
            </div>
            <div class="card-actions">
                <button class="btn-view" onclick="previewItem(this.closest('.dl-card'))">
                    <i class="fas fa-eye"></i> View
                </button>
                <a class="btn-dl" href="<?= $dlUrl ?>" onclick="triggerDownloadAnim(this)">
                    <i class="fas fa-download"></i> Download
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

<!-- Image Lightbox -->
<div class="lb" id="imgLb" role="dialog" aria-modal="true">
    <div class="lb-inner">
        <button class="lb-close" onclick="closeImgLb()" aria-label="Close"><i class="fas fa-times"></i></button>
        <div class="lb-img-wrap">
            <img id="lbImg" src="" alt="">
        </div>
        <div class="lb-caption">
            <h3 id="lbTitle"></h3>
            <p id="lbSub"></p>
        </div>
    </div>
</div>

<!-- File Preview Modal -->
<div class="file-lb" id="fileLb" role="dialog" aria-modal="true">
    <div class="file-lb-card">
        <button class="flb-close" onclick="closeFileLb()"><i class="fas fa-times"></i></button>
        <div class="flb-icon" id="flbIcon"></div>
        <div class="flb-cat" id="flbCat"></div>
        <div class="flb-title" id="flbTitle"></div>
        <div class="flb-meta" id="flbMeta"></div>
        <div class="flb-desc" id="flbDesc"></div>
        <div class="flb-actions" id="flbActions"></div>
    </div>
</div>

<?php include('includes/footer_1.php'); ?>
<?php include('includes/whats-app.php'); ?>
<?php include('includes/sticky-footer.php'); ?>

<script>
 // Wait for DOM to be fully loaded
document.addEventListener('DOMContentLoaded', function() {
    // ========== FILTER & SEARCH ==========
    let activeCat = 'all';
    let activeSearch = '';
    const cards = document.querySelectorAll('.dl-card');
    const grid = document.getElementById('dlGrid');
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

    // Category pills
    document.querySelectorAll('.cat-pill').forEach(btn => {
        btn.addEventListener('click', () => {
            document.querySelectorAll('.cat-pill').forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            activeCat = btn.dataset.cat;
            applyFilters();
        });
    });

    // Search input
    const searchInput = document.getElementById('dlSearch');
    if (searchInput) {
        searchInput.addEventListener('input', function() {
            activeSearch = this.value.trim().toLowerCase();
            applyFilters();
        });
    }

    // View toggle (fixed typo)
    const gridBtn = document.getElementById('gridViewBtn');
    const listBtn = document.getElementById('listViewBtn'); // ✅ fixed
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

    // ========== IMAGE ERROR FALLBACK ==========
    document.querySelectorAll('.card-img').forEach(img => {
        img.addEventListener('error', function() {
            const card = this.closest('.dl-card');
            const cat = card.dataset.catslug;
            const catMeta = <?= json_encode($cat_meta) ?>;
            const m = catMeta[cat] || { icon: 'fas fa-file', bg: 'rgba(31,168,219,.1)', color: '#1fa8db' };
            const fileIcon = card.dataset.fileicon || 'fas fa-file';
            const fileColor = card.dataset.filecolor || '#6b84a0';
            const fallbackHtml = `
                <div class="card-thumb-ph" style="background:${m.bg}">
                    <div class="ct-icon-wrap" style="background:rgba(255,255,255,.9);border:1px solid ${m.color}22">
                        <i class="${fileIcon}" style="color:${fileColor}"></i>
                    </div>
                    <span class="ct-ext-badge" style="color:${m.color};border-color:${m.color}44">${card.dataset.fileext || 'FILE'}</span>
                </div>
            `;
            this.parentElement.innerHTML = fallbackHtml;
        });
    });
});

// ========== PREVIEW FUNCTION ==========
function previewItem(card) {
    const type = card.dataset.type;
    const name = card.dataset.name;
    const catLabel = card.dataset.catlabel;
    const fileSize = card.dataset.filesize;
    const fileUrl = card.dataset.fileurl;
    const dlUrl = card.dataset.dlurl;
    const fileExt = card.dataset.fileext;
    const desc = card.dataset.desc;
    const catIcon = card.dataset.caticon;
    const catColor = card.dataset.catcolor;
    const catBg = card.dataset.catbg;
    const fileIcon = card.dataset.fileicon;
    const fileColor = card.dataset.filecolor;

    if (type === 'image') {
        // Open image lightbox
        const lbImg = document.getElementById('lbImg');
        const lbTitle = document.getElementById('lbTitle');
        const lbSub = document.getElementById('lbSub');
        if (lbImg) lbImg.src = fileUrl;
        if (lbTitle) lbTitle.textContent = name;
        if (lbSub) lbSub.textContent = catLabel + (fileSize ? ' · ' + fileSize : '');
        const imgLb = document.getElementById('imgLb');
        if (imgLb) {
            imgLb.classList.add('open');
            document.body.style.overflow = 'hidden';
        }
    } else {
        // Open file preview modal
        const flbIcon = document.getElementById('flbIcon');
        const flbCat = document.getElementById('flbCat');
        const flbTitle = document.getElementById('flbTitle');
        const flbMeta = document.getElementById('flbMeta');
        const flbDesc = document.getElementById('flbDesc');
        const flbActions = document.getElementById('flbActions');

        if (flbIcon) {
            flbIcon.innerHTML = `<i class="${fileIcon}" style="color:${fileColor}"></i>`;
            flbIcon.style.background = catBg;
        }
        if (flbCat) {
            flbCat.innerHTML = `<i class="${catIcon}"></i> ${catLabel}`;
            flbCat.style.cssText = `background:${catBg};color:${catColor};border:1px solid ${catColor}44`;
        }
        if (flbTitle) flbTitle.textContent = name;
        if (flbMeta) {
            flbMeta.innerHTML = `
                <span><i class="fas fa-file"></i> ${fileExt}</span>
                ${fileSize ? `<span><i class="fas fa-weight-hanging"></i> ${fileSize}</span>` : ''}
            `;
        }
        if (flbDesc) {
            if (desc && desc.trim()) {
                flbDesc.textContent = desc;
                flbDesc.style.display = 'block';
            } else {
                flbDesc.style.display = 'none';
            }
        }
        if (flbActions) {
            flbActions.innerHTML = `
                <a class="flb-btn flb-btn-view" href="${fileUrl}" target="_blank" rel="noopener">
                    <i class="fas fa-eye"></i> Open File
                </a>
                <a class="flb-btn flb-btn-dl" href="${dlUrl}" onclick="showToast('Downloading — ${name.replace(/'/g, "\\'")}')">
                    <i class="fas fa-download"></i> Download
                </a>
            `;
        }
        const fileLb = document.getElementById('fileLb');
        if (fileLb) {
            fileLb.classList.add('open');
            document.body.style.overflow = 'hidden';
        }
    }
}

function closeImgLb() {
    const imgLb = document.getElementById('imgLb');
    if (imgLb) imgLb.classList.remove('open');
    document.body.style.overflow = '';
}

function closeFileLb() {
    const fileLb = document.getElementById('fileLb');
    if (fileLb) fileLb.classList.remove('open');
    document.body.style.overflow = '';
}

// Close lightboxes when clicking backdrop
document.getElementById('imgLb')?.addEventListener('click', function(e) {
    if (e.target === this) closeImgLb();
});
document.getElementById('fileLb')?.addEventListener('click', function(e) {
    if (e.target === this) closeFileLb();
});

// Keyboard escape
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeImgLb();
        closeFileLb();
    }
});

function triggerDownloadAnim(el) {
    el.classList.add('downloading');
    const card = el.closest('.dl-card');
    const name = card ? card.querySelector('.card-title').textContent.trim() : 'file';
    showToast('Downloading — ' + name);
    setTimeout(() => el.classList.remove('downloading'), 700);
}

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

// Fade-up on scroll
const io = new IntersectionObserver(entries => {
    entries.forEach(e => {
        if (e.isIntersecting) {
            e.target.classList.add('visible');
            io.unobserve(e.target);
        }
    });
}, { threshold: 0.07 });
document.querySelectorAll('.fade-up').forEach(el => io.observe(el));

// Glitter canvas (unchanged)
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