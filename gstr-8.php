<?php 
session_start();
include('includes/dbConfig.php');
$current_page_name = "GSTR-8 – TCS Return for E-commerce Operators";
$current_service_category = "gstr8";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>GSTR-8 | TCS Return for E-commerce Operators – K-Seva</title>
    <meta name="description" content="File GSTR-8 monthly return for Tax Collected at Source (TCS) on e-commerce transactions. Ensure compliance, avoid penalties, and help sellers claim TCS credit.">
    <meta name="keywords" content="GSTR-8, TCS Return, E-commerce GST, Tax Collected at Source, Online Marketplace GST, K-Seva">
    <link rel="canonical" href="https://k-seva.com/gstr-8">

    <!-- Open Graph -->
    <meta property="og:title" content="GSTR-8 Filing – TCS Return for E-commerce – K-Seva">
    <meta property="og:description" content="Monthly TCS return for e-commerce operators. File GSTR-8 on time and stay GST compliant.">
    <meta property="og:image" content="https://k-seva.com/assets/images/og-gstr8.jpg">
    <meta property="og:url" content="https://k-seva.com/gstr-8">
    <meta property="og:type" content="website">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GSTR-8 Filing Service | K-Seva">
    <meta name="twitter:description" content="Simplify TCS compliance for your e-commerce business. File GSTR-8 accurately.">
    <meta name="twitter:image" content="https://k-seva.com/assets/images/og-gstr8.jpg">

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
            <div class="mt-badge"><span class="badge-dot"></span><i class="fas fa-file-invoice"></i>&nbsp; GSTR-8 – TCS Return</div>
            <h1 class="hero-title">File GSTR-8 <span class="hero-gradient-text">On Time</span></h1>
            <p class="hero-sub">Monthly return for e‑commerce operators required to collect Tax Collected at Source (TCS). Maintain transparency, help sellers claim credit, and avoid penalties.</p>
            <div class="mt-hero-btns">
                <a href="#enquire" class="btn-primary-glow"><span class="btn-shimmer"></span><i class="fas fa-paper-plane"></i><span>Enquire Now</span></a>
                <a href="#how-it-works" class="btn-glass"><i class="fas fa-play-circle"></i><span>How It Works</span></a>
            </div>
            <div class="hero-trust">
                <div class="trust-badge"><i class="fas fa-chart-line"></i> TCS Compliance</div>
                <div class="trust-badge"><i class="fas fa-hand-holding-usd"></i> Seller Credit</div>
                <div class="trust-badge"><i class="fas fa-calendar-alt"></i> Monthly Filing</div>
            </div>
        </div>
        <div class="mt-hero-card" data-reveal data-delay="200">
            <div class="card-glow-ring"></div>
            <div class="hc-header">
                <div class="hc-pulse-dot"></div>
                <span class="hc-title">GSTR-8 Overview</span>
                <span class="hc-live-badge">MONTHLY</span>
            </div>
            <div class="mt-stat-row">
                <div class="mt-stat"><div class="mt-stat-num c-blue">TCS</div><div class="mt-stat-lbl">Tax Collected at Source</div></div>
                <div class="mt-stat"><div class="mt-stat-num c-green">Due Date</div><div class="mt-stat-lbl">10th of Next Month</div></div>
                <div class="mt-stat"><div class="mt-stat-num c-gold">E‑commerce</div><div class="mt-stat-lbl">Operators</div></div>
                <div class="mt-stat"><div class="mt-stat-num c-white">Sellers</div><div class="mt-stat-lbl">Claim TCS Credit</div></div>
            </div>
            <div class="mt-transfer-demo">
                <div class="td-node td-from"><div class="td-icon"><i class="fas fa-store"></i></div><div class="td-label">E‑commerce Operator</div><div class="td-val">Collects TCS from Sellers</div></div>
                <div class="td-flow"><div class="flow-line"><div class="flow-particle p1"></div><div class="flow-particle p2"></div><div class="flow-particle p3"></div></div><div class="flow-arrow"><i class="fas fa-arrow-right"></i></div><div class="flow-label">File GSTR-8</div></div>
                <div class="td-node td-to"><div class="td-icon"><i class="fas fa-check-circle"></i></div><div class="td-label">Seller's Ledger</div><div class="td-val">TCS Credit Reflected</div></div>
            </div>
            <div class="card-shimmer"></div>
        </div>
    </div>
</section>

<!-- BREADCRUMB -->
<nav class="mt-breadcrumb" aria-label="Breadcrumb"><div class="bc-inner"><a href="home"><i class="fas fa-home"></i> Home</a><i class="fas fa-chevron-right bc-sep"></i><span>Services</span><i class="fas fa-chevron-right bc-sep"></i><span>GST</span><i class="fas fa-chevron-right bc-sep"></i><span class="bc-active">GSTR-8 (TCS)</span></div></nav>

<!-- INTRO + ENQUIRY FORM -->
<section class="mt-intro" id="enquire">
    <div class="intro-deco deco-1"></div>
    <div class="intro-deco deco-2"></div>
    <div class="mt-container">
        <div class="mt-intro-text" data-reveal>
            <div class="sec-tag"><i class="fas fa-info-circle"></i> About GSTR-8</div>
            <h2 class="sec-title" style="color: #00335a">GSTR-8 – <span>TCS Return</span></h2>
            <div class="sec-divider"><span></span><i class="fas fa-file-invoice"></i><span></span></div>
            <p>GSTR-8 is a monthly GST return that must be filed by e-commerce operators who are required to collect Tax Collected at Source (TCS) under the GST system. This return contains details of supplies made through the e-commerce platform, the amount collected from sellers, and the TCS deducted during the reporting period.</p>
            <p>E-commerce businesses registered under GST are required to submit GSTR-8 electronically through the GST portal within the prescribed due date. The information provided in this return helps the government track online transactions and maintain transparency in tax collection from digital marketplaces.</p>
            <p>Filing GSTR-8 accurately and on time is important for both e-commerce operators and sellers, as the TCS details reflected in the return help sellers claim the collected tax amount in their electronic cash ledger.</p>
            <div class="intro-pills">
                <span class="pill pill-blue"><i class="fas fa-calendar-alt"></i> Due by 10th</span>
                <span class="pill pill-green"><i class="fas fa-hand-holding-usd"></i> Seller Credit</span>
                <span class="pill pill-gold"><i class="fas fa-chart-line"></i> Transparency</span>
                <span class="pill pill-navy"><i class="fas fa-rupee-sign"></i> Avoid Penalties</span>
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
            <h2 class="sec-title light">Why K-Seva for <span>GSTR-8 Filing</span></h2>
            <p class="sec-sub light">Expert assistance to file your monthly TCS return accurately and on time</p>
        </div>
        <div class="mt-why-grid">
            <div class="mt-why-card" data-reveal data-delay="0"><div class="wc-glow glow-blue"></div><div class="wc-icon-wrap icon-blue"><div class="wc-icon-ring"></div><i class="fas fa-file-alt"></i></div><h3>Accurate Data Compilation</h3><p>We compile details of all supplies, TCS collected, and seller-wise breakups.</p><div class="wc-shine"></div></div>
            <div class="mt-why-card" data-reveal data-delay="80"><div class="wc-glow glow-green"></div><div class="wc-icon-wrap icon-green"><div class="wc-icon-ring"></div><i class="fas fa-calendar-alt"></i></div><h3>Timely Filing</h3><p>We never miss the 10th of the month deadline – avoid late fees and interest.</p><div class="wc-shine"></div></div>
            <div class="mt-why-card" data-reveal data-delay="160"><div class="wc-glow glow-gold"></div><div class="wc-icon-wrap icon-gold"><div class="wc-icon-ring"></div><i class="fas fa-chart-line"></i></div><h3>TCS Reconciliation</h3><p>Match TCS collected with seller-wise payments to ensure correct reporting.</p><div class="wc-shine"></div></div>
            <div class="mt-why-card" data-reveal data-delay="240"><div class="wc-glow glow-navy"></div><div class="wc-icon-wrap icon-navy"><div class="wc-icon-ring"></div><i class="fas fa-hand-holding-usd"></i></div><h3>Seller Credit Support</h3><p>Ensure that TCS details are correctly reflected in sellers' electronic ledgers.</p><div class="wc-shine"></div></div>
            <div class="mt-why-card" data-reveal data-delay="320"><div class="wc-glow glow-teal"></div><div class="wc-icon-wrap icon-teal"><div class="wc-icon-ring"></div><i class="fas fa-file-pdf"></i></div><h3>Filed Return Copies</h3><p>We maintain copies of all filed GSTR-8 returns for your records.</p><div class="wc-shine"></div></div>
            <div class="mt-why-card" data-reveal data-delay="400"><div class="wc-glow glow-red"></div><div class="wc-icon-wrap icon-red"><div class="wc-icon-ring"></div><i class="fas fa-headset"></i></div><h3>Dedicated Support</h3><p>Get reminders, updates, and expert help for any TCS‑related query.</p><div class="wc-shine"></div></div>
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
            <div class="sh-tag sh-tag-light"><i class="fas fa-chart-bar"></i> Why GSTR-8 Matters</div>
            <h2 class="sec-title light">Benefits of <span>TCS Return Filing</span></h2>
            <p class="sec-sub light">Stay compliant and help sellers claim their rightful TCS credit</p>
        </div>
        <div class="mt-stats-grid">
            <div class="mt-stat-card" data-reveal data-delay="0"><div class="sc-orb"></div><div class="sc-icon-wrap" style="--ic:#23adeb"><i class="fas fa-gavel"></i></div><div class="sc-num" style="--nc:#23adeb">100%</div><div class="sc-lbl">GST compliance for e‑commerce</div><div class="sc-bar"><div class="sc-bar-fill" style="--bc:#23adeb;width:100%"></div></div></div>
            <div class="mt-stat-card" data-reveal data-delay="100"><div class="sc-orb"></div><div class="sc-icon-wrap" style="--ic:#64ba4d"><i class="fas fa-calendar-alt"></i></div><div class="sc-num" style="--nc:#64ba4d">10th</div><div class="sc-lbl">Due date of every month</div><div class="sc-bar"><div class="sc-bar-fill" style="--bc:#64ba4d;width:90%"></div></div></div>
            <div class="mt-stat-card" data-reveal data-delay="200"><div class="sc-orb"></div><div class="sc-icon-wrap" style="--ic:#fed109"><i class="fas fa-hand-holding-usd"></i></div><div class="sc-num" style="--nc:#fed109">TCS</div><div class="sc-lbl">Collected and reported correctly</div><div class="sc-bar"><div class="sc-bar-fill" style="--bc:#fed109;width:95%"></div></div></div>
            <div class="mt-stat-card" data-reveal data-delay="300"><div class="sc-orb"></div><div class="sc-icon-wrap" style="--ic:#fff"><i class="fas fa-chart-line"></i></div><div class="sc-num" style="--nc:#fff">Transparency</div><div class="sc-lbl">For digital marketplace transactions</div><div class="sc-bar"><div class="sc-bar-fill" style="--bc:#fff;width:100%"></div></div></div>
        </div>
    </div>
</section>

<!-- WHO CAN USE SECTION -->
<section class="mt-who">
    <div class="who-deco-1"></div>
    <div class="who-deco-2"></div>
    <div class="mt-container">
        <div class="mt-sec-head" data-reveal>
            <div class="sh-tag sh-tag-green"><i class="fas fa-user-check"></i> Who Must File GSTR-8</div>
            <h2 class="sec-title" style="color: #00335a;">E‑commerce <span>Operators</span></h2>
            <p class="sec-sub">All e‑commerce platforms registered under GST and required to collect TCS</p>
        </div>
        <div class="mt-who-grid">
            <div class="mt-who-card" data-reveal data-delay="0"><div class="who-glow"></div><div class="wh-icon"><i class="fas fa-store"></i></div><h4>Online Marketplaces</h4><div class="who-line"></div></div>
            <div class="mt-who-card" data-reveal data-delay="80"><div class="who-glow"></div><div class="wh-icon"><i class="fas fa-chart-line"></i></div><h4>E‑commerce Platforms</h4><div class="who-line"></div></div>
            <div class="mt-who-card" data-reveal data-delay="160"><div class="who-glow"></div><div class="wh-icon"><i class="fas fa-hand-holding-usd"></i></div><h4>Aggregators</h4><div class="who-line"></div></div>
            <div class="mt-who-card" data-reveal data-delay="240"><div class="who-glow"></div><div class="wh-icon"><i class="fas fa-mobile-alt"></i></div><h4>App‑Based Sellers</h4><div class="who-line"></div></div>
            <div class="mt-who-card" data-reveal data-delay="320"><div class="who-glow"></div><div class="wh-icon"><i class="fas fa-globe-asia"></i></div><h4>Digital Marketplaces</h4><div class="who-line"></div></div>
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
            <h2 class="sec-title light" style="color: #00335a;">How GSTR-8 <span>Filing Works</span></h2>
            <p class="sec-sub light">We handle the entire TCS return filing process for your e‑commerce business</p>
        </div>
        <div class="mt-steps">
            <div class="mt-step" data-reveal data-delay="0"><div class="step-connector left-connector"></div><div class="step-num">01</div><div class="step-circle"><div class="sc-ring"></div><i class="fas fa-upload"></i></div><h4>Share Transaction Data</h4><p>Provide monthly sales report, TCS collected, and seller-wise details.</p><div class="step-connector right-connector"></div></div>
            <div class="mt-step" data-reveal data-delay="120"><div class="step-connector left-connector"></div><div class="step-num">02</div><div class="step-circle"><div class="sc-ring"></div><i class="fas fa-chart-line"></i></div><h4>Data Validation</h4><p>We verify TCS amounts and seller details against your records.</p><div class="step-connector right-connector"></div></div>
            <div class="mt-step" data-reveal data-delay="240"><div class="step-connector left-connector"></div><div class="step-num">03</div><div class="step-circle"><div class="sc-ring"></div><i class="fas fa-file-upload"></i></div><h4>File GSTR-8</h4><p>We prepare and submit the return on the GST portal.</p><div class="step-connector right-connector"></div></div>
            <div class="mt-step" data-reveal data-delay="360"><div class="step-connector left-connector"></div><div class="step-num">04</div><div class="step-circle"><div class="sc-ring"></div><i class="fas fa-check-double"></i></div><h4>Acknowledgment & Update</h4><p>We share ARN and confirm that TCS credit reflects in sellers' ledgers.</p><div class="step-connector right-connector"></div></div>
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
            <p class="sec-sub">Complete GSTR-8 filing service with TCS reconciliation support</p>
        </div>
        <div class="feat-columns">
            <!-- Key Features -->
            <div class="feat-col" data-reveal>
                <div class="feat-col-header"><div class="feat-col-icon"><i class="fas fa-cogs"></i></div><h3>Key Features</h3></div>
                <div class="mt-feat-item"><div class="fi-icon fi-blue"><i class="fas fa-chart-line"></i></div><div class="fi-text"><h4>Seller‑wise Breakup</h4><p>We prepare details of supplies and TCS for each seller on your platform.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-green"><i class="fas fa-calculator"></i></div><div class="fi-text"><h4>TCS Calculation</h4><p>Verify TCS rates (0.5% CGST + 0.5% SGST or 1% IGST) for each transaction.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-gold"><i class="fas fa-file-invoice"></i></div><div class="fi-text"><h4>Annexure Preparation</h4><p>We prepare the detailed annexure required for GSTR-8 filing.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-navy"><i class="fas fa-bell"></i></div><div class="fi-text"><h4>Due Date Alerts</h4><p>Monthly reminders before the 10th of each month.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-blue"><i class="fas fa-file-pdf"></i></div><div class="fi-text"><h4>Filed Return Copies</h4><p>We maintain all filed GSTR-8 returns for audit and reference.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-green"><i class="fas fa-chart-pie"></i></div><div class="fi-text"><h4>Seller Credit Tracking</h4><p>We help confirm that TCS credit is available to sellers in their ledgers.</p></div></div>
            </div>
            <!-- Key Benefits -->
            <div class="feat-col" data-reveal data-delay="150">
                <div class="feat-col-header"><div class="feat-col-icon feat-col-icon-gold"><i class="fas fa-gift"></i></div><h3>Key Benefits</h3></div>
                <div class="mt-feat-item"><div class="fi-icon fi-gold"><i class="fas fa-rupee-sign"></i></div><div class="fi-text"><h4>Avoid Penalties</h4><p>Late filing attracts ₹50 per day (₹25 CGST + ₹25 SGST) – we file on time.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-blue"><i class="fas fa-hand-holding-usd"></i></div><div class="fi-text"><h4>Seller Satisfaction</h4><p>Ensure your sellers get TCS credit without delay – improves platform trust.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-green"><i class="fas fa-shield-alt"></i></div><div class="fi-text"><h4>Regulatory Compliance</h4><p>Stay compliant with GST rules for e‑commerce operators.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-navy"><i class="fas fa-clock"></i></div><div class="fi-text"><h4>Save Time</h4><p>Outsource monthly return filing – focus on growing your marketplace.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-gold"><i class="fas fa-headset"></i></div><div class="fi-text"><h4>Expert Guidance</h4><p>Get answers to complex TCS scenarios and notifications from GST authorities.</p></div></div>
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
        <h2 class="cta-title">File Your <span>GSTR-8</span> On Time</h2>
        <p class="cta-sub">Let K-Seva handle your monthly TCS return – accurate, on‑time, and hassle‑free.</p>
        <div class="mt-cta-btns">
            <a href="#enquire" class="btn-primary-glow btn-lg"><span class="btn-shimmer"></span><i class="fas fa-paper-plane"></i><span>Start Filing Now</span></a>
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