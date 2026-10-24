<?php 
session_start();
include('includes/dbConfig.php');
$current_page_name = "GST Annual Return - GSTR-9 / GSTR-9A";
$current_service_category = "gst_annual_return";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>GST Annual Return | GSTR-9 / GSTR-9A Filing – K-Seva</title>
    <meta name="description" content="File your GST annual return (GSTR-9 / GSTR-9A) on time. Complete summary of annual supplies, ITC, and tax paid. Avoid penalties and stay compliant with K-Seva.">
    <meta name="keywords" content="GSTR-9, GSTR-9A, GST Annual Return, Annual GST Filing, GST Compliance, K-Seva">
    <link rel="canonical" href="https://k-seva.com/gst-annual-return">

    <!-- Open Graph -->
    <meta property="og:title" content="GST Annual Return – GSTR-9 / GSTR-9A – K-Seva">
    <meta property="og:description" content="File your annual GST return with expert assistance. Complete summary of the year's GST transactions.">
    <meta property="og:image" content="https://k-seva.com/assets/images/og-gst-annual.jpg">
    <meta property="og:url" content="https://k-seva.com/gst-annual-return">
    <meta property="og:type" content="website">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GST Annual Return Filing | K-Seva">
    <meta name="twitter:description" content="Reconcile your annual GST data and file GSTR-9 / GSTR-9A on time.">
    <meta name="twitter:image" content="https://k-seva.com/assets/images/og-gst-annual.jpg">

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
            <div class="mt-badge"><span class="badge-dot"></span><i class="fas fa-file-invoice"></i>&nbsp; GST Annual Return</div>
            <h1 class="hero-title">File <span class="hero-gradient-text">GSTR-9 / GSTR-9A</span></h1>
            <p class="hero-sub">Annual return consolidating all monthly/quarterly GST returns. Mandatory for registered taxpayers – complete summary of supplies, ITC, and taxes paid.</p>
            <div class="mt-hero-btns">
                <a href="#enquire" class="btn-primary-glow"><span class="btn-shimmer"></span><i class="fas fa-paper-plane"></i><span>Enquire Now</span></a>
                <a href="#how-it-works" class="btn-glass"><i class="fas fa-play-circle"></i><span>How It Works</span></a>
            </div>
            <div class="hero-trust">
                <div class="trust-badge"><i class="fas fa-calendar-alt"></i> Annual Compliance</div>
                <div class="trust-badge"><i class="fas fa-check-double"></i> Audit Ready</div>
                <div class="trust-badge"><i class="fas fa-rupee-sign"></i> Avoid Penalties</div>
            </div>
        </div>
        <div class="mt-hero-card" data-reveal data-delay="200">
            <div class="card-glow-ring"></div>
            <div class="hc-header">
                <div class="hc-pulse-dot"></div>
                <span class="hc-title">Annual Return Types</span>
                <span class="hc-live-badge">MANDATORY</span>
            </div>
            <div class="mt-stat-row">
                <div class="mt-stat"><div class="mt-stat-num c-blue">GSTR-9</div><div class="mt-stat-lbl">Regular Taxpayers</div></div>
                <div class="mt-stat"><div class="mt-stat-num c-green">GSTR-9A</div><div class="mt-stat-lbl">Composition Scheme</div></div>
                <div class="mt-stat"><div class="mt-stat-num c-gold">Due Date</div><div class="mt-stat-lbl">31st December</div></div>
                <div class="mt-stat"><div class="mt-stat-num c-white">ITC Summary</div><div class="mt-stat-lbl">Annual Reconciliation</div></div>
            </div>
            <div class="mt-transfer-demo">
                <div class="td-node td-from"><div class="td-icon"><i class="fas fa-chart-line"></i></div><div class="td-label">Monthly/Quarterly Returns</div><div class="td-val">GSTR-1, GSTR-3B</div></div>
                <div class="td-flow"><div class="flow-line"><div class="flow-particle p1"></div><div class="flow-particle p2"></div><div class="flow-particle p3"></div></div><div class="flow-arrow"><i class="fas fa-arrow-right"></i></div><div class="flow-label">Consolidate</div></div>
                <div class="td-node td-to"><div class="td-icon"><i class="fas fa-file-invoice"></i></div><div class="td-label">GSTR-9 / 9A</div><div class="td-val">Annual Return</div></div>
            </div>
            <div class="card-shimmer"></div>
        </div>
    </div>
</section>

<!-- BREADCRUMB -->
<nav class="mt-breadcrumb" aria-label="Breadcrumb"><div class="bc-inner"><a href="home"><i class="fas fa-home"></i> Home</a><i class="fas fa-chevron-right bc-sep"></i><span>Services</span><i class="fas fa-chevron-right bc-sep"></i><span>GST</span><i class="fas fa-chevron-right bc-sep"></i><span class="bc-active">Annual Return (GSTR-9/9A)</span></div></nav>

<!-- INTRO + ENQUIRY FORM -->
<section class="mt-intro" id="enquire">
    <div class="intro-deco deco-1"></div>
    <div class="intro-deco deco-2"></div>
    <div class="mt-container">
        <div class="mt-intro-text" data-reveal>
            <div class="sec-tag"><i class="fas fa-info-circle"></i> About GST Annual Return</div>
            <h2 class="sec-title" style="color: #00335a">GSTR-9 & <span>GSTR-9A</span></h2>
            <div class="sec-divider"><span></span><i class="fas fa-file-invoice"></i><span></span></div>
            <p>GSTR-9 and GSTR-9A are annual GST returns that registered taxpayers must file for every financial year as per GST regulations. These returns provide a complete summary of outward supplies, inward supplies, taxes paid, input tax credit claimed, and other GST-related transactions reported during the year.</p>
            <p>The annual return helps the GST department verify the accuracy of monthly and quarterly returns filed by taxpayers throughout the financial year. Businesses are required to submit these returns electronically through the GST portal within the prescribed due dates.</p>
            <p>Taxpayers whose annual turnover exceeds the limit specified under GST rules may also be required to maintain audited financial records and submit reconciliation statements certified by a Chartered Accountant or Cost Accountant. The reconciliation statement helps match the details filed in GST returns with the audited financial statements of the business.</p>
            <div class="intro-pills">
                <span class="pill pill-blue"><i class="fas fa-chart-line"></i> Annual Summary</span>
                <span class="pill pill-green"><i class="fas fa-check-double"></i> ITC Reconciliation</span>
                <span class="pill pill-gold"><i class="fas fa-calendar-alt"></i> Due by 31st Dec</span>
                <span class="pill pill-navy"><i class="fas fa-audit"></i> Audit Ready</span>
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
            <h2 class="sec-title light">Why K-Seva for <span>Annual Return Filing</span></h2>
            <p class="sec-sub light">Expert assistance to file your annual GST returns accurately and on time</p>
        </div>
        <div class="mt-why-grid">
            <div class="mt-why-card" data-reveal data-delay="0"><div class="wc-glow glow-blue"></div><div class="wc-icon-wrap icon-blue"><div class="wc-icon-ring"></div><i class="fas fa-chart-line"></i></div><h3>Annual Consolidation</h3><p>We compile data from all monthly/quarterly returns into GSTR-9/9A.</p><div class="wc-shine"></div></div>
            <div class="mt-why-card" data-reveal data-delay="80"><div class="wc-glow glow-green"></div><div class="wc-icon-wrap icon-green"><div class="wc-icon-ring"></div><i class="fas fa-check-double"></i></div><h3>ITC Reconciliation</h3><p>Match GSTR-2B with books to ensure correct ITC reporting.</p><div class="wc-shine"></div></div>
            <div class="mt-why-card" data-reveal data-delay="160"><div class="wc-glow glow-gold"></div><div class="wc-icon-wrap icon-gold"><div class="wc-icon-ring"></div><i class="fas fa-calendar-alt"></i></div><h3>Deadline Tracking</h3><p>We remind you of the due date (typically 31st December) and file on time.</p><div class="wc-shine"></div></div>
            <div class="mt-why-card" data-reveal data-delay="240"><div class="wc-glow glow-navy"></div><div class="wc-icon-wrap icon-navy"><div class="wc-icon-ring"></div><i class="fas fa-audit"></i></div><h3>Audit Support</h3><p>If turnover exceeds threshold, we help with GSTR-9C and CA certification.</p><div class="wc-shine"></div></div>
            <div class="mt-why-card" data-reveal data-delay="320"><div class="wc-glow glow-teal"></div><div class="wc-icon-wrap icon-teal"><div class="wc-icon-ring"></div><i class="fas fa-rupee-sign"></i></div><h3>Avoid Penalties</h3><p>Late fee for annual return is up to ₹200/day – we ensure timely filing.</p><div class="wc-shine"></div></div>
            <div class="mt-why-card" data-reveal data-delay="400"><div class="wc-glow glow-red"></div><div class="wc-icon-wrap icon-red"><div class="wc-icon-ring"></div><i class="fas fa-headset"></i></div><h3>Expert Guidance</h3><p>Our GST professionals handle complex reconciliations and follow‑ups.</p><div class="wc-shine"></div></div>
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
            <div class="sh-tag sh-tag-light"><i class="fas fa-chart-bar"></i> Why Annual Return Matters</div>
            <h2 class="sec-title light">Benefits of <span>Filing GSTR-9/9A</span></h2>
            <p class="sec-sub light">Year‑end compliance that ensures transparency and accuracy</p>
        </div>
        <div class="mt-stats-grid">
            <div class="mt-stat-card" data-reveal data-delay="0"><div class="sc-orb"></div><div class="sc-icon-wrap" style="--ic:#23adeb"><i class="fas fa-check-circle"></i></div><div class="sc-num" style="--nc:#23adeb">100%</div><div class="sc-lbl">Annual compliance achieved</div><div class="sc-bar"><div class="sc-bar-fill" style="--bc:#23adeb;width:100%"></div></div></div>
            <div class="mt-stat-card" data-reveal data-delay="100"><div class="sc-orb"></div><div class="sc-icon-wrap" style="--ic:#64ba4d"><i class="fas fa-chart-line"></i></div><div class="sc-num" style="--nc:#64ba4d">12 Months</div><div class="sc-lbl">Data consolidated into one return</div><div class="sc-bar"><div class="sc-bar-fill" style="--bc:#64ba4d;width:95%"></div></div></div>
            <div class="mt-stat-card" data-reveal data-delay="200"><div class="sc-orb"></div><div class="sc-icon-wrap" style="--ic:#fed109"><i class="fas fa-rupee-sign"></i></div><div class="sc-num" style="--nc:#fed109">₹200/day</div><div class="sc-lbl">Late fee saved by timely filing</div><div class="sc-bar"><div class="sc-bar-fill" style="--bc:#fed109;width:85%"></div></div></div>
            <div class="mt-stat-card" data-reveal data-delay="300"><div class="sc-orb"></div><div class="sc-icon-wrap" style="--ic:#fff"><i class="fas fa-audit"></i></div><div class="sc-num" style="--nc:#fff">Audit</div><div class="sc-lbl">Ready for reconciliation with books</div><div class="sc-bar"><div class="sc-bar-fill" style="--bc:#fff;width:90%"></div></div></div>
        </div>
    </div>
</section>

<!-- WHO CAN USE SECTION -->
<section class="mt-who">
    <div class="who-deco-1"></div>
    <div class="who-deco-2"></div>
    <div class="mt-container">
        <div class="mt-sec-head" data-reveal>
            <div class="sh-tag sh-tag-green"><i class="fas fa-user-check"></i> Who Must File</div>
            <h2 class="sec-title" style="color: #00335a;">Who Needs <span>Annual Return</span></h2>
            <p class="sec-sub">All registered GST taxpayers (except certain exempt categories)</p>
        </div>
        <div class="mt-who-grid">
            <div class="mt-who-card" data-reveal data-delay="0"><div class="who-glow"></div><div class="wh-icon"><i class="fas fa-store"></i></div><h4>Regular Taxpayers</h4><div class="who-line"></div></div>
            <div class="mt-who-card" data-reveal data-delay="80"><div class="who-glow"></div><div class="wh-icon"><i class="fas fa-chart-line"></i></div><h4>Composition Dealers</h4><div class="who-line"></div></div>
            <div class="mt-who-card" data-reveal data-delay="160"><div class="who-glow"></div><div class="wh-icon"><i class="fas fa-truck"></i></div><h4>Manufacturers & Traders</h4><div class="who-line"></div></div>
            <div class="mt-who-card" data-reveal data-delay="240"><div class="who-glow"></div><div class="wh-icon"><i class="fas fa-industry"></i></div><h4>Service Providers</h4><div class="who-line"></div></div>
            <div class="mt-who-card" data-reveal data-delay="320"><div class="who-glow"></div><div class="wh-icon"><i class="fas fa-hand-holding-usd"></i></div><h4>Any GST Registered Entity</h4><div class="who-line"></div></div>
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
            <h2 class="sec-title light" style="color: #00335a;">How Annual Return <span>Filing Works</span></h2>
            <p class="sec-sub light">We prepare, reconcile, and file your GSTR-9 / GSTR-9A seamlessly</p>
        </div>
        <div class="mt-steps">
            <div class="mt-step" data-reveal data-delay="0"><div class="step-connector left-connector"></div><div class="step-num">01</div><div class="step-circle"><div class="sc-ring"></div><i class="fas fa-upload"></i></div><h4>Share Annual Data</h4><p>Provide monthly returns, purchase register, and audited financials (if applicable).</p><div class="step-connector right-connector"></div></div>
            <div class="mt-step" data-reveal data-delay="120"><div class="step-connector left-connector"></div><div class="step-num">02</div><div class="step-circle"><div class="sc-ring"></div><i class="fas fa-chart-line"></i></div><h4>Reconciliation & ITC Check</h4><p>We match GSTR-1, GSTR-3B, and GSTR-2B with your books.</p><div class="step-connector right-connector"></div></div>
            <div class="mt-step" data-reveal data-delay="240"><div class="step-connector left-connector"></div><div class="step-num">03</div><div class="step-circle"><div class="sc-ring"></div><i class="fas fa-file-upload"></i></div><h4>Prepare GSTR-9 / 9A</h4><p>We populate all tables and share a draft for your review.</p><div class="step-connector right-connector"></div></div>
            <div class="mt-step" data-reveal data-delay="360"><div class="step-connector left-connector"></div><div class="step-num">04</div><div class="step-circle"><div class="sc-ring"></div><i class="fas fa-check-double"></i></div><h4>File & Acknowledge</h4><p>After your approval, we submit the return and provide acknowledgement.</p><div class="step-connector right-connector"></div></div>
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
            <p class="sec-sub">Complete annual return filing service with audit support</p>
        </div>
        <div class="feat-columns">
            <!-- Key Features -->
            <div class="feat-col" data-reveal>
                <div class="feat-col-header"><div class="feat-col-icon"><i class="fas fa-cogs"></i></div><h3>Key Features</h3></div>
                <div class="mt-feat-item"><div class="fi-icon fi-blue"><i class="fas fa-chart-line"></i></div><div class="fi-text"><h4>GSTR-9 Filing</h4><p>Annual return for regular taxpayers – full year summary.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-green"><i class="fas fa-chart-pie"></i></div><div class="fi-text"><h4>GSTR-9A Filing</h4><p>Annual return for composition scheme taxpayers.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-gold"><i class="fas fa-check-double"></i></div><div class="fi-text"><h4>ITC Reconciliation</h4><p>Ensure ITC claimed matches GSTR-2B and books.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-navy"><i class="fas fa-audit"></i></div><div class="fi-text"><h4>GSTR-9C Assistance</h4><p>If turnover > ₹5 Cr, we help with reconciliation statement and CA certification.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-blue"><i class="fas fa-bell"></i></div><div class="fi-text"><h4>Due Date Reminders</h4><p>Timely alerts for 31st December deadline.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-green"><i class="fas fa-file-pdf"></i></div><div class="fi-text"><h4>Filed Return Copy</h4><p>We provide the final filed return and ARN acknowledgement.</p></div></div>
            </div>
            <!-- Key Benefits -->
            <div class="feat-col" data-reveal data-delay="150">
                <div class="feat-col-header"><div class="feat-col-icon feat-col-icon-gold"><i class="fas fa-gift"></i></div><h3>Key Benefits</h3></div>
                <div class="mt-feat-item"><div class="fi-icon fi-gold"><i class="fas fa-rupee-sign"></i></div><div class="fi-text"><h4>Avoid Late Fees</h4><p>₹200 per day late fee avoided with timely filing.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-blue"><i class="fas fa-chart-line"></i></div><div class="fi-text"><h4>Audit Ready</h4><p>Reconciled books and returns simplify statutory audits.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-green"><i class="fas fa-globe-asia"></i></div><div class="fi-text"><h4>Reduce Notices</h4><p>Accurate annual return minimises departmental queries.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-navy"><i class="fas fa-clock"></i></div><div class="fi-text"><h4>Save Time</h4><p>Experts handle the complex consolidation – you focus on business.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-gold"><i class="fas fa-shield-alt"></i></div><div class="fi-text"><h4>Peace of Mind</h4><p>Complete annual compliance without stress.</p></div></div>
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
        <h2 class="cta-title">File Your <span>GST Annual Return</span> On Time</h2>
        <p class="cta-sub">Let K-Seva handle GSTR-9 / GSTR-9A filing – accurate, affordable, and audit‑ready.</p>
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