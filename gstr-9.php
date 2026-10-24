<?php 
session_start();
include('includes/dbConfig.php');
$current_page_name = "GSTR-9 Annual Return";
$current_service_category = "gstr9";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>GSTR-9 | Annual GST Return Filing – K-Seva</title>
    <meta name="description" content="File your GSTR-9 annual GST return with K-Seva. Annual consolidation of all monthly/quarterly returns – avoid penalties and stay compliant.">
    <meta name="keywords" content="GSTR-9, Annual GST Return, GST Annual Filing, GSTR-9 Filing, GST Compliance, K-Seva">
    <link rel="canonical" href="https://k-seva.com/gstr-9">

    <!-- Open Graph -->
    <meta property="og:title" content="GSTR-9 Annual Return Filing – K-Seva">
    <meta property="og:description" content="Expert assistance for GSTR-9 annual return. Consolidate your GST returns for the financial year.">
    <meta property="og:image" content="https://k-seva.com/assets/images/og-gstr9.jpg">
    <meta property="og:url" content="https://k-seva.com/gstr-9">
    <meta property="og:type" content="website">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GSTR-9 Filing | K-Seva">
    <meta name="twitter:description" content="File your annual GST return on time. Avoid late fees and maintain compliance.">
    <meta name="twitter:image" content="https://k-seva.com/assets/images/og-gstr9.jpg">

    <?php include('includes/header_1.php'); ?>
    
    <!-- Fonts & Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800;900&family=Playfair+Display:ital,wght@0,700;0,900;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/gst-10.css">
</head>
<body class="mt-body">

<canvas id="mt-particles" aria-hidden="true"></canvas>
<div class="over-menu"></div>
<?php include('includes/navbar_1.php'); ?>

<main class="mt-page">

<!-- HERO SECTION -->
<section class="mt-hero">
    <div class="hero-orb orb-1"></div>
    <div class="hero-orb orb-2"></div>
    <div class="hero-orb orb-3"></div>
    <div class="hero-mesh"></div>
    <div class="hero-sweep"></div>
    <div class="mt-hero-inner">
        <div class="mt-hero-text" data-reveal>
            <div class="mt-badge"><span class="badge-dot"></span><i class="fas fa-file-invoice"></i>&nbsp; Annual GST Return</div>
            <h1 class="hero-title">File <span class="hero-gradient-text">GSTR-9</span></h1>
            <p class="hero-sub">Annual consolidation of all monthly/quarterly GST returns filed during the financial year. Mandatory for regular taxpayers – avoid late fees and show complete financial transparency.</p>
            <div class="mt-hero-btns">
                <a href="#enquire" class="btn-primary-glow"><span class="btn-shimmer"></span><i class="fas fa-paper-plane"></i><span>Enquire Now</span></a>
                <a href="#how-it-works" class="btn-glass"><i class="fas fa-play-circle"></i><span>How It Works</span></a>
            </div>
            <div class="hero-trust">
                <div class="trust-badge"><i class="fas fa-calendar-alt"></i> Annual Filing</div>
                <div class="trust-badge"><i class="fas fa-rupee-sign"></i> Avoid Late Fees</div>
                <div class="trust-badge"><i class="fas fa-check-double"></i> Audit Ready</div>
            </div>
        </div>
        <div class="mt-hero-card" data-reveal data-delay="200">
            <div class="card-glow-ring"></div>
            <div class="hc-header">
                <div class="hc-pulse-dot"></div>
                <span class="hc-title">GSTR-9 Overview</span>
                <span class="hc-live-badge">ANNUAL</span>
            </div>
            <div class="mt-stat-row">
                <div class="mt-stat"><div class="mt-stat-num c-blue">31st Dec</div><div class="mt-stat-lbl">Typical Due Date</div></div>
                <div class="mt-stat"><div class="mt-stat-num c-green">GSTR-1 & 3B</div><div class="mt-stat-lbl">Data Consolidated</div></div>
                <div class="mt-stat"><div class="mt-stat-num c-gold">ITC Summary</div><div class="mt-stat-lbl">Reconciliation</div></div>
                <div class="mt-stat"><div class="mt-stat-num c-white">₹200/day</div><div class="mt-stat-lbl">Late Fee (CGST+SGST)</div></div>
            </div>
            <div class="mt-transfer-demo">
                <div class="td-node td-from"><div class="td-icon"><i class="fas fa-chart-line"></i></div><div class="td-label">Monthly Returns</div><div class="td-val">GSTR-1, GSTR-3B</div></div>
                <div class="td-flow"><div class="flow-line"><div class="flow-particle p1"></div><div class="flow-particle p2"></div><div class="flow-particle p3"></div></div><div class="flow-arrow"><i class="fas fa-arrow-right"></i></div><div class="flow-label">Consolidate</div></div>
                <div class="td-node td-to"><div class="td-icon"><i class="fas fa-file-invoice"></i></div><div class="td-label">GSTR-9</div><div class="td-val">Annual Return</div></div>
            </div>
            <div class="card-shimmer"></div>
        </div>
    </div>
</section>

<!-- BREADCRUMB -->
<nav class="mt-breadcrumb" aria-label="Breadcrumb"><div class="bc-inner"><a href="home"><i class="fas fa-home"></i> Home</a><i class="fas fa-chevron-right bc-sep"></i><span>Services</span><i class="fas fa-chevron-right bc-sep"></i><span>GST</span><i class="fas fa-chevron-right bc-sep"></i><span class="bc-active">GSTR-9 Annual Return</span></div></nav>

<!-- INTRO + ENQUIRY FORM -->
<section class="mt-intro" id="enquire">
    <div class="intro-deco deco-1"></div>
    <div class="intro-deco deco-2"></div>
    <div class="mt-container">
        <div class="mt-intro-text" data-reveal>
            <div class="sec-tag"><i class="fas fa-info-circle"></i> About GSTR-9</div>
            <h2 class="sec-title" style="color: #00335a">Annual <span>GST Return</span></h2>
            <div class="sec-divider"><span></span><i class="fas fa-file-invoice"></i><span></span></div>
            <p>GSTR-9 is an annual return that consolidates all monthly/quarterly GST returns (GSTR-1, GSTR-3B) filed during a financial year. It provides a complete picture of outward supplies, inward supplies, input tax credit claimed, and total tax paid for the year.</p>
            <p>All regular taxpayers with GST registration are required to file GSTR-9 annually, except those under the composition scheme (who file GSTR-4) or certain other exempt categories. The return summarises the entire year's GST activity and ensures that reported data across periods is consistent and accurate.</p>
            <p>Filing GSTR-9 on time helps businesses maintain a clean compliance record, avoid late fees, and provides a ready reference for audits. Reconciliation of GSTR-9 with your annual financial statements also helps identify discrepancies before they become compliance issues.</p>
            <div class="intro-pills">
                <span class="pill pill-blue"><i class="fas fa-calendar-alt"></i> Due 31st December</span>
                <span class="pill pill-green"><i class="fas fa-chart-line"></i> Annual Consolidation</span>
                <span class="pill pill-gold"><i class="fas fa-file-invoice"></i> Audit Ready</span>
                <span class="pill pill-navy"><i class="fas fa-rupee-sign"></i> Late Fee ₹200/day</span>
            </div>
        </div>
        <?php include('includes/enquiry_form.php'); ?>
    </div>
</section>

<!-- WHY CHOOSE SECTION -->
<section class="mt-why">
    <div class="why-bg-mesh"></div>
    <div class="why-sweep"></div>
    <div class="mt-container">
        <div class="mt-sec-head" data-reveal>
            <div class="sh-tag"><i class="fas fa-star"></i> Why Choose K-Seva</div>
            <h2 class="sec-title light">Why K-Seva for <span>GSTR-9 Filing</span></h2>
            <p class="sec-sub light">Expert assistance to file your annual return accurately and on time</p>
        </div>
        <div class="mt-why-grid">
            <div class="mt-why-card" data-reveal data-delay="0"><div class="wc-glow glow-blue"></div><div class="wc-icon-wrap icon-blue"><div class="wc-icon-ring"></div><i class="fas fa-chart-line"></i></div><h3>Data Consolidation</h3><p>We compile data from all your monthly/quarterly returns into one annual statement.</p><div class="wc-shine"></div></div>
            <div class="mt-why-card" data-reveal data-delay="80"><div class="wc-glow glow-green"></div><div class="wc-icon-wrap icon-green"><div class="wc-icon-ring"></div><i class="fas fa-check-double"></i></div><h3>Reconciliation</h3><p>We match GSTR-9 with your books and GSTR-2B to ensure accuracy.</p><div class="wc-shine"></div></div>
            <div class="mt-why-card" data-reveal data-delay="160"><div class="wc-glow glow-gold"></div><div class="wc-icon-wrap icon-gold"><div class="wc-icon-ring"></div><i class="fas fa-calendar-alt"></i></div><h3>Deadline Tracking</h3><p>We remind you well before the due date – no last‑minute rush.</p><div class="wc-shine"></div></div>
            <div class="mt-why-card" data-reveal data-delay="240"><div class="wc-glow glow-navy"></div><div class="wc-icon-wrap icon-navy"><div class="wc-icon-ring"></div><i class="fas fa-rupee-sign"></i></div><h3>Avoid Penalties</h3><p>Late fee for GSTR-9 is ₹200/day (CGST+SGST) – we help you file on time.</p><div class="wc-shine"></div></div>
            <div class="mt-why-card" data-reveal data-delay="320"><div class="wc-glow glow-teal"></div><div class="wc-icon-wrap icon-teal"><div class="wc-icon-ring"></div><i class="fas fa-file-pdf"></i></div><h3>Audit Support</h3><p>We provide reconciliation statements and supporting documents for audit.</p><div class="wc-shine"></div></div>
            <div class="mt-why-card" data-reveal data-delay="400"><div class="wc-glow glow-red"></div><div class="wc-icon-wrap icon-red"><div class="wc-icon-ring"></div><i class="fas fa-headset"></i></div><h3>Expert Review</h3><p>Our GST professionals review each entry to prevent errors.</p><div class="wc-shine"></div></div>
        </div>
    </div>
</section>

<!-- STATS SECTION -->
<section class="mt-stats">
    <div class="stats-orb stats-orb-1"></div>
    <div class="stats-orb stats-orb-2"></div>
    <div class="stats-mesh"></div>
    <div class="mt-container">
        <div class="mt-sec-head" data-reveal>
            <div class="sh-tag sh-tag-light"><i class="fas fa-chart-bar"></i> Why GSTR-9 Matters</div>
            <h2 class="sec-title light">Impact of <span>Annual Filing</span></h2>
            <p class="sec-sub light">Complete the annual compliance cycle with accurate GSTR-9</p>
        </div>
        <div class="mt-stats-grid">
            <div class="mt-stat-card" data-reveal data-delay="0"><div class="sc-orb"></div><div class="sc-icon-wrap" style="--ic:#23adeb"><i class="fas fa-chart-line"></i></div><div class="sc-num" style="--nc:#23adeb">12 Months</div><div class="sc-lbl">Data consolidated</div><div class="sc-bar"><div class="sc-bar-fill" style="--bc:#23adeb;width:100%"></div></div></div>
            <div class="mt-stat-card" data-reveal data-delay="100"><div class="sc-orb"></div><div class="sc-icon-wrap" style="--ic:#64ba4d"><i class="fas fa-rupee-sign"></i></div><div class="sc-num" style="--nc:#64ba4d">₹200/day</div><div class="sc-lbl">Late fee (CGST+SGST)</div><div class="sc-bar"><div class="sc-bar-fill" style="--bc:#64ba4d;width:85%"></div></div></div>
            <div class="mt-stat-card" data-reveal data-delay="200"><div class="sc-orb"></div><div class="sc-icon-wrap" style="--ic:#fed109"><i class="fas fa-file-invoice"></i></div><div class="sc-num" style="--nc:#fed109">GSTR-9C</div><div class="sc-lbl">Audit report for turnover > ₹5 Cr</div><div class="sc-bar"><div class="sc-bar-fill" style="--bc:#fed109;width:70%"></div></div></div>
            <div class="mt-stat-card" data-reveal data-delay="300"><div class="sc-orb"></div><div class="sc-icon-wrap" style="--ic:#fff"><i class="fas fa-check-circle"></i></div><div class="sc-num" style="--nc:#fff">100%</div><div class="sc-lbl">Compliance closure for the year</div><div class="sc-bar"><div class="sc-bar-fill" style="--bc:#fff;width:95%"></div></div></div>
        </div>
    </div>
</section>

<!-- WHO CAN USE SECTION -->
<section class="mt-who">
    <div class="who-deco-1"></div>
    <div class="who-deco-2"></div>
    <div class="mt-container">
        <div class="mt-sec-head" data-reveal>
            <div class="sh-tag sh-tag-green"><i class="fas fa-user-check"></i> Who Must File GSTR-9</div>
            <h2 class="sec-title" style="color: #00335a;">Who <span>Needs GSTR-9</span></h2>
            <p class="sec-sub">All regular GST taxpayers (except composition dealers, ISD, TDS/TCS deductors)</p>
        </div>
        <div class="mt-who-grid">
            <div class="mt-who-card" data-reveal data-delay="0"><div class="who-glow"></div><div class="wh-icon"><i class="fas fa-store"></i></div><h4>Regular Taxpayers</h4><div class="who-line"></div></div>
            <div class="mt-who-card" data-reveal data-delay="80"><div class="who-glow"></div><div class="wh-icon"><i class="fas fa-chart-line"></i></div><h4>Manufacturers</h4><div class="who-line"></div></div>
            <div class="mt-who-card" data-reveal data-delay="160"><div class="who-glow"></div><div class="wh-icon"><i class="fas fa-truck"></i></div><h4>Traders & Distributors</h4><div class="who-line"></div></div>
            <div class="mt-who-card" data-reveal data-delay="240"><div class="who-glow"></div><div class="wh-icon"><i class="fas fa-industry"></i></div><h4>Service Providers</h4><div class="who-line"></div></div>
            <div class="mt-who-card" data-reveal data-delay="320"><div class="who-glow"></div><div class="wh-icon"><i class="fas fa-hand-holding-usd"></i></div><h4>Any Registered Business</h4><div class="who-line"></div></div>
        </div>
    </div>
</section>

<!-- HOW IT WORKS SECTION -->
<section class="mt-how" id="how-it-works">
    <div class="how-bg"></div>
    <div class="how-sweep"></div>
    <div class="mt-container">
        <div class="mt-sec-head" data-reveal>
            <div class="sh-tag"><i class="fas fa-list-ol"></i> Simple Process</div>
            <h2 class="sec-title light" style="color: #00335a;">How GSTR-9 <span>Filing Works</span></h2>
            <p class="sec-sub light">We prepare, verify, and file your annual return in a few steps</p>
        </div>
        <div class="mt-steps">
            <div class="mt-step" data-reveal data-delay="0"><div class="step-connector left-connector"></div><div class="step-num">01</div><div class="step-circle"><div class="sc-ring"></div><i class="fas fa-upload"></i></div><h4>Share Annual Data</h4><p>Provide monthly GSTR-1, GSTR-3B, purchase register, and financial statements.</p><div class="step-connector right-connector"></div></div>
            <div class="mt-step" data-reveal data-delay="120"><div class="step-connector left-connector"></div><div class="step-num">02</div><div class="step-circle"><div class="sc-ring"></div><i class="fas fa-chart-line"></i></div><h4>Data Verification</h4><p>We reconcile your returns with books and identify mismatches.</p><div class="step-connector right-connector"></div></div>
            <div class="mt-step" data-reveal data-delay="240"><div class="step-connector left-connector"></div><div class="step-num">03</div><div class="step-circle"><div class="sc-ring"></div><i class="fas fa-file-upload"></i></div><h4>Prepare GSTR-9</h4><p>We populate tables in GSTR-9 and share a draft for your review.</p><div class="step-connector right-connector"></div></div>
            <div class="mt-step" data-reveal data-delay="360"><div class="step-connector left-connector"></div><div class="step-num">04</div><div class="step-circle"><div class="sc-ring"></div><i class="fas fa-check-double"></i></div><h4>File on Portal</h4><p>After your approval, we submit GSTR-9 and share acknowledgement.</p><div class="step-connector right-connector"></div></div>
        </div>
    </div>
</section>

<!-- FEATURES & BENEFITS SECTION -->
<section class="mt-features">
    <div class="feat-deco-1"></div>
    <div class="feat-deco-2"></div>
    <div class="mt-container">
        <div class="mt-sec-head" data-reveal>
            <div class="sh-tag sh-tag-blue"><i class="fas fa-star"></i> Features & Benefits</div>
            <h2 class="sec-title" style="color: #00335a;">What You <span>Get</span></h2>
            <p class="sec-sub">Complete GSTR-9 filing solution with expert validation</p>
        </div>
        <div class="feat-columns">
            <!-- Key Features -->
            <div class="feat-col" data-reveal>
                <div class="feat-col-header"><div class="feat-col-icon"><i class="fas fa-cogs"></i></div><h3>Key Features</h3></div>
                <div class="mt-feat-item"><div class="fi-icon fi-blue"><i class="fas fa-chart-line"></i></div><div class="fi-text"><h4>12 Months Consolidation</h4><p>We compile all monthly/quarterly returns into one annual statement.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-green"><i class="fas fa-check-double"></i></div><div class="fi-text"><h4>ITC Reconciliation</h4><p>Match GSTR-2B with books to ensure correct ITC reported.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-gold"><i class="fas fa-file-invoice"></i></div><div class="fi-text"><h4>Table-wise Preparation</h4><p>All 19 tables of GSTR-9 filled accurately as per rules.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-navy"><i class="fas fa-chart-pie"></i></div><div class="fi-text"><h4>Tax Liability Summary</h4><p>Clear view of total tax paid and interest/penalty if any.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-blue"><i class="fas fa-bell"></i></div><div class="fi-text"><h4>Due Date Alerts</h4><p>Regular reminders for 31st December (or extended due dates).</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-green"><i class="fas fa-file-pdf"></i></div><div class="fi-text"><h4>Filed Return Copy</h4><p>We share the final filed GSTR-9 and acknowledgement.</p></div></div>
            </div>
            <!-- Key Benefits -->
            <div class="feat-col" data-reveal data-delay="150">
                <div class="feat-col-header"><div class="feat-col-icon feat-col-icon-gold"><i class="fas fa-gift"></i></div><h3>Key Benefits</h3></div>
                <div class="mt-feat-item"><div class="fi-icon fi-gold"><i class="fas fa-rupee-sign"></i></div><div class="fi-text"><h4>Avoid Late Fees</h4><p>Late fee of ₹200 per day (₹100 CGST + ₹100 SGST) saved by timely filing.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-blue"><i class="fas fa-chart-line"></i></div><div class="fi-text"><h4>Audit Ready</h4><p>GSTR-9 is the starting point for any departmental audit or scrutiny.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-green"><i class="fas fa-hand-holding-usd"></i></div><div class="fi-text"><h4>Identify Mismatches</h4><p>Catch differences between returns and books before they become notices.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-navy"><i class="fas fa-clock"></i></div><div class="fi-text"><h4>Save Time & Effort</h4><p>We handle the tedious consolidation – you focus on business.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-gold"><i class="fas fa-shield-alt"></i></div><div class="fi-text"><h4>Peace of Mind</h4><p>Complete annual compliance without stress or last‑minute rush.</p></div></div>
            </div>
        </div>
    </div>
</section>

<!-- CTA SECTION -->
<section class="mt-cta">
    <div class="cta-orb cta-orb-1"></div>
    <div class="cta-orb cta-orb-2"></div>
    <div class="cta-mesh"></div>
    <div class="cta-sweep"></div>
    <div class="cta-inner">
        <div class="cta-icon-wrap"><div class="cta-icon-ring"></div><i class="fas fa-file-invoice-dollar"></i></div>
        <h2 class="cta-title">File Your <span>GSTR-9</span> On Time</h2>
        <p class="cta-sub">Let K-Seva handle your annual return – accurate, affordable, and audit‑ready.</p>
        <div class="mt-cta-btns">
            <a href="#enquire" class="btn-primary-glow btn-lg"><span class="btn-shimmer"></span><i class="fas fa-paper-plane"></i><span>File Annual Return</span></a>
            <a href="tel:<?php echo $comp_mobile; ?>" class="btn-glass btn-lg"><i class="fas fa-phone-alt"></i><span>Call Now</span></a>
        </div>
        <div class="cta-trust">
            <div class="cta-chip"><i class="fas fa-check-circle"></i> No Hidden Fees</div>
            <div class="cta-chip"><i class="fas fa-calendar-alt"></i> On‑Time Filing</div>
            <div class="cta-chip"><i class="fas fa-headset"></i> Expert Support</div>
        </div>
    </div>
</section>

</main>

<?php include('includes/footer_1.php'); ?>
<?php include('includes/whats-app.php'); ?>
<?php include('includes/sticky-footer.php'); ?>

<script>
/* ========== PARTICLE CANVAS + SCROLL REVEAL (identical to previous pages) ========== */
(function() {
    const canvas = document.getElementById('mt-particles');
    if (!canvas) return;
    const ctx = canvas.getContext('2d');
    let W, H;
    const COLORS = ['#23adeb','#fed109','#64ba4d','#ffffff','#003b66','#87ceeb'];
    const COUNT = 65;
    const particles = [];
    function resize() { W = canvas.width = window.innerWidth; H = canvas.height = window.innerHeight; }
    resize();
    window.addEventListener('resize', resize, { passive: true });
    function rand(a, b) { return a + Math.random() * (b - a); }
    class Particle {
        constructor() { this.reset(true); }
        reset(init) {
            this.x = rand(0, W);
            this.y = init ? rand(0, H) : H + 10;
            this.r = rand(0.6, 2.8);
            this.alpha = 0;
            this.maxA = rand(0.3, 0.85);
            this.speed = rand(0.003, 0.01);
            this.dir = 1;
            this.color = COLORS[Math.floor(Math.random() * COLORS.length)];
            this.vx = rand(-0.12, 0.12);
            this.vy = rand(-0.3, -0.08);
            this.phase = rand(0, Math.PI * 2);
            this.type = Math.random() > 0.5 ? 'star' : 'circle';
        }
        draw(t) {
            const flicker = 0.5 + 0.5 * Math.sin(t * 0.003 + this.phase);
            ctx.save();
            ctx.globalAlpha = this.alpha * flicker;
            ctx.fillStyle = this.color;
            ctx.shadowBlur = this.r * 10;
            ctx.shadowColor = this.color;
            if (this.type === 'star') {
                const r = this.r;
                ctx.beginPath();
                for (let i = 0; i < 8; i++) {
                    const ang = (i * Math.PI) / 4;
                    const len = i % 2 === 0 ? r * 3 : r;
                    const px = this.x + Math.cos(ang) * len;
                    const py = this.y + Math.sin(ang) * len;
                    i === 0 ? ctx.moveTo(px, py) : ctx.lineTo(px, py);
                }
                ctx.closePath();
                ctx.fill();
            } else {
                ctx.beginPath();
                ctx.arc(this.x, this.y, this.r, 0, Math.PI * 2);
                ctx.fill();
            }
            ctx.restore();
        }
        update() {
            this.alpha += this.speed * this.dir;
            if (this.alpha >= this.maxA) this.dir = -1;
            if (this.alpha <= 0) { this.reset(false); return; }
            this.x += this.vx;
            this.y += this.vy;
            if (this.x < -10) this.x = W + 10;
            if (this.x > W + 10) this.x = -10;
            if (this.y < -10) this.reset(false);
        }
    }
    for (let i = 0; i < COUNT; i++) particles.push(new Particle());
    let t = 0;
    function loop() {
        ctx.clearRect(0, 0, W, H);
        t++;
        particles.forEach(p => { p.update(); p.draw(t); });
        requestAnimationFrame(loop);
    }
    loop();
})();

// Scroll reveal
(function() {
    const els = document.querySelectorAll('[data-reveal]');
    const obs = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const el = entry.target;
                const delay = parseInt(el.getAttribute('data-delay') || 0);
                setTimeout(() => el.classList.add('revealed'), delay);
                obs.unobserve(el);
            }
        });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
    els.forEach(el => obs.observe(el));
})();

// Animated counters
(function() {
    function animateNum(el, target, suffix) {
        let cur = 0;
        const step = target / 55;
        const tick = () => {
            cur += step;
            if (cur < target) {
                el.textContent = Math.floor(cur) + suffix;
                requestAnimationFrame(tick);
            } else {
                el.textContent = target + suffix;
            }
        };
        tick();
    }
    const statNums = document.querySelectorAll('.sc-num');
    const obs = new IntersectionObserver(entries => {
        entries.forEach(e => {
            if (e.isIntersecting) {
                const el = e.target;
                const raw = el.textContent.trim();
                const match = raw.match(/^([\d.]+)(.*)/);
                if (match) {
                    const num = parseFloat(match[1]);
                    const suffix = match[2];
                    el.textContent = '0' + suffix;
                    animateNum(el, num, suffix);
                }
                obs.unobserve(el);
            }
        });
    }, { threshold: 0.5 });
    statNums.forEach(el => obs.observe(el));
})();

// Progress bars
(function() {
    const bars = document.querySelectorAll('.sc-bar-fill');
    const obs = new IntersectionObserver(entries => {
        entries.forEach(e => {
            if (e.isIntersecting) {
                e.target.style.transform = 'scaleX(1)';
                obs.unobserve(e.target);
            }
        });
    }, { threshold: 0.5 });
    bars.forEach(b => { b.style.transform = 'scaleX(0)'; b.style.transformOrigin = 'left'; obs.observe(b); });
})();

// Step animation
(function() {
    const steps = document.querySelectorAll('.mt-step');
    steps.forEach((step, i) => step.style.setProperty('--step-i', i));
})();
</script>
</body>
</html>