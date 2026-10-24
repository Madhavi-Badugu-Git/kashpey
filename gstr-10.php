<?php 
session_start();
include('includes/dbConfig.php');
$current_page_name = "GSTR-10 – Final Return";
$current_service_category = "gstr10";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>GSTR-10 | Final Return After GST Cancellation – K-Seva</title>
    <meta name="description" content="File your GSTR-10 final GST return after registration cancellation or surrender. Avoid penalties, stay compliant, and close your GST account properly with K-Seva.">
    <meta name="keywords" content="GSTR-10, Final GST Return, GST Cancellation, GST Surrender, GST Compliance, Late Fee Waiver, K-Seva GST Services">
    <link rel="canonical" href="https://k-seva.com/gst-10">

    <!-- Open Graph -->
    <meta property="og:title" content="GSTR-10 Filing | Final GST Return Service – K-Seva">
    <meta property="og:description" content="Close your GST registration correctly with GSTR-10. File final return with expert help. Avoid notices and penalties.">
    <meta property="og:image" content="https://k-seva.com/assets/images/og-gstr10.jpg">
    <meta property="og:url" content="https://k-seva.com/gst-10">
    <meta property="og:type" content="website">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GSTR-10 Filing | K-Seva">
    <meta name="twitter:description" content="Final GST return after cancellation – easy, fast and compliant.">
    <meta name="twitter:image" content="https://k-seva.com/assets/images/og-gstr10.jpg">

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
            <div class="mt-badge"><span class="badge-dot"></span><i class="fas fa-file-invoice"></i>&nbsp; GST Final Return</div>
            <h1 class="hero-title">File GSTR-10<br><span class="hero-gradient-text">Final GST Return</span></h1>
            <p class="hero-sub">Mandatory return after GST registration cancellation or surrender. Close your GST account properly, avoid penalties, and stay compliant with K-Seva.</p>
            <div class="mt-hero-btns">
                <a href="#enquire" class="btn-primary-glow"><span class="btn-shimmer"></span><i class="fas fa-paper-plane"></i><span>Enquire Now</span></a>
                <a href="#how-it-works" class="btn-glass"><i class="fas fa-play-circle"></i><span>How It Works</span></a>
            </div>
            <div class="hero-trust">
                <div class="trust-badge"><i class="fas fa-shield-alt"></i> 100% Compliant</div>
                <div class="trust-badge"><i class="fas fa-clock"></i> 3 Months Deadline</div>
                <div class="trust-badge"><i class="fas fa-rupee-sign"></i> Reduced Late Fee</div>
            </div>
        </div>
        <div class="mt-hero-card" data-reveal data-delay="200">
            <div class="card-glow-ring"></div>
            <div class="hc-header">
                <div class="hc-pulse-dot"></div>
                <span class="hc-title">GSTR-10 Overview</span>
                <span class="hc-live-badge">IMPORTANT</span>
            </div>
            <div class="mt-stat-row">
                <div class="mt-stat"><div class="mt-stat-num c-blue">3 Months</div><div class="mt-stat-lbl">Deadline to File</div></div>
                <div class="mt-stat"><div class="mt-stat-num c-green">₹500</div><div class="mt-stat-lbl">Reduced Late Fee</div></div>
                <div class="mt-stat"><div class="mt-stat-num c-gold">Mandatory</div><div class="mt-stat-lbl">After Cancellation</div></div>
                <div class="mt-stat"><div class="mt-stat-num c-white">100%</div><div class="mt-stat-lbl">Compliance</div></div>
            </div>
            <div class="mt-transfer-demo">
                <div class="td-node td-from"><div class="td-icon"><i class="fas fa-building"></i></div><div class="td-label">You</div><div class="td-val">Cancelled GST</div></div>
                <div class="td-flow"><div class="flow-line"><div class="flow-particle p1"></div><div class="flow-particle p2"></div><div class="flow-particle p3"></div></div><div class="flow-arrow"><i class="fas fa-arrow-right"></i></div><div class="flow-label">File Final Return</div></div>
                <div class="td-node td-to"><div class="td-icon"><i class="fas fa-check-circle"></i></div><div class="td-label">Outcome</div><div class="td-val">Proper Closure</div></div>
            </div>
            <div class="card-shimmer"></div>
        </div>
    </div>
</section>

<!-- BREADCRUMB -->
<nav class="mt-breadcrumb" aria-label="Breadcrumb"><div class="bc-inner"><a href="home"><i class="fas fa-home"></i> Home</a><i class="fas fa-chevron-right bc-sep"></i><span>Services</span><i class="fas fa-chevron-right bc-sep"></i><span>GST</span><i class="fas fa-chevron-right bc-sep"></i><span class="bc-active">GSTR-10</span></div></nav>

<!-- INTRO + ENQUIRY FORM SECTION -->
<section class="mt-intro" id="enquire">
    <div class="intro-deco deco-1"></div>
    <div class="intro-deco deco-2"></div>
    <div class="mt-container">
        <div class="mt-intro-text" data-reveal>
            <div class="sec-tag"><i class="fas fa-file-alt"></i> About GSTR-10</div>
            <h2 class="sec-title" style="color: #00335a">Final Return <span>After Cancellation</span></h2>
            <div class="sec-divider"><span></span><i class="fas fa-file-invoice"></i><span></span></div>
            <p>GSTR-10 is a final GST return that must be submitted by taxpayers whose GST registration has been cancelled or surrendered. This return provides details of stock held, tax liabilities, and other important information up to the date of cancellation.</p>
            <p>According to GST regulations, the final return should generally be filed within <strong>three months</strong> from the date of cancellation or the cancellation order, whichever is later. Non‑filing can lead to penalties and legal notices.</p>
            <p>To encourage compliance, the government introduced a <strong>reduced late fee of ₹500</strong> for delayed GSTR-10 filings. Taxpayers with pending final returns were allowed to complete the filing process before the specified deadline announced by the GST authorities.</p>
            <div class="intro-pills">
                <span class="pill pill-blue"><i class="fas fa-calendar-alt"></i> 3 Months Deadline</span>
                <span class="pill pill-green"><i class="fas fa-rupee-sign"></i> ₹500 Late Fee</span>
                <span class="pill pill-gold"><i class="fas fa-check-circle"></i> Mandatory</span>
                <span class="pill pill-navy"><i class="fas fa-gavel"></i> Avoid Notices</span>
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
            <h2 class="sec-title light">Why Choose K-Seva <span>GSTR-10 Filing</span></h2>
            <p class="sec-sub light">Expert assistance to close your GST registration properly and on time</p>
        </div>
        <div class="mt-why-grid">
            <div class="mt-why-card" data-reveal data-delay="0"><div class="wc-glow glow-blue"></div><div class="wc-icon-wrap icon-blue"><div class="wc-icon-ring"></div><i class="fas fa-gavel"></i></div><h3>Stay Compliant</h3><p>Avoid legal notices and penalties by filing GSTR-10 correctly before the deadline.</p><div class="wc-shine"></div></div>
            <div class="mt-why-card" data-reveal data-delay="80"><div class="wc-glow glow-green"></div><div class="wc-icon-wrap icon-green"><div class="wc-icon-ring"></div><i class="fas fa-clock"></i></div><h3>Timely Filing</h3><p>We ensure your final return is submitted within the 3‑month window, eliminating late fee risks.</p><div class="wc-shine"></div></div>
            <div class="mt-why-card" data-reveal data-delay="160"><div class="wc-glow glow-gold"></div><div class="wc-icon-wrap icon-gold"><div class="wc-icon-ring"></div><i class="fas fa-chart-line"></i></div><h3>Accurate Stock Details</h3><p>We help you correctly declare closing stock and tax liability to avoid future disputes.</p><div class="wc-shine"></div></div>
            <div class="mt-why-card" data-reveal data-delay="240"><div class="wc-glow glow-navy"></div><div class="wc-icon-wrap icon-navy"><div class="wc-icon-ring"></div><i class="fas fa-file-signature"></i></div><h3>Complete Documentation</h3><p>We manage all paperwork – cancellation order, stock summary, and final tax computation.</p><div class="wc-shine"></div></div>
            <div class="mt-why-card" data-reveal data-delay="320"><div class="wc-glow glow-teal"></div><div class="wc-icon-wrap icon-teal"><div class="wc-icon-ring"></div><i class="fas fa-headset"></i></div><h3>Expert Support</h3><p>Our GST professionals guide you through every step, from cancellation to final filing.</p><div class="wc-shine"></div></div>
            <div class="mt-why-card" data-reveal data-delay="400"><div class="wc-glow glow-red"></div><div class="wc-icon-wrap icon-red"><div class="wc-icon-ring"></div><i class="fas fa-rupee-sign"></i></div><h3>Cost Effective</h3><p>Get expert GSTR-10 filing service at an affordable price – much lower than penalty costs.</p><div class="wc-shine"></div></div>
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
            <div class="sh-tag sh-tag-light"><i class="fas fa-chart-bar"></i> Why GSTR-10 Matters</div>
            <h2 class="sec-title light">Closing Your GST <span>Properly</span></h2>
            <p class="sec-sub light">Thousands of businesses cancel GST every year – final return is mandatory</p>
        </div>
        <div class="mt-stats-grid">
            <div class="mt-stat-card" data-reveal data-delay="0"><div class="sc-orb"></div><div class="sc-icon-wrap" style="--ic:#23adeb"><i class="fas fa-building"></i></div><div class="sc-num" style="--nc:#23adeb">Lakhs</div><div class="sc-lbl">GST cancellations every year in India</div><div class="sc-bar"><div class="sc-bar-fill" style="--bc:#23adeb;width:85%"></div></div></div>
            <div class="mt-stat-card" data-reveal data-delay="100"><div class="sc-orb"></div><div class="sc-icon-wrap" style="--ic:#64ba4d"><i class="fas fa-calendar-week"></i></div><div class="sc-num" style="--nc:#64ba4d">90 Days</div><div class="sc-lbl">Standard deadline for GSTR-10 filing</div><div class="sc-bar"><div class="sc-bar-fill" style="--bc:#64ba4d;width:90%"></div></div></div>
            <div class="mt-stat-card" data-reveal data-delay="200"><div class="sc-orb"></div><div class="sc-icon-wrap" style="--ic:#fed109"><i class="fas fa-exclamation-triangle"></i></div><div class="sc-num" style="--nc:#fed109">₹10,000+</div><div class="sc-lbl">Potential penalty for non‑filing of final return</div><div class="sc-bar"><div class="sc-bar-fill" style="--bc:#fed109;width:75%"></div></div></div>
            <div class="mt-stat-card" data-reveal data-delay="300"><div class="sc-orb"></div><div class="sc-icon-wrap" style="--ic:#fff"><i class="fas fa-check-circle"></i></div><div class="sc-num" style="--nc:#fff">100%</div><div class="sc-lbl">Compliance secured with timely filing</div><div class="sc-bar"><div class="sc-bar-fill" style="--bc:#fff;width:95%"></div></div></div>
        </div>
    </div>
</section>

<!-- WHO CAN USE SECTION -->
<section class="mt-who">
    <div class="who-deco-1"></div>
    <div class="who-deco-2"></div>
    <div class="mt-container">
        <div class="mt-sec-head" data-reveal>
            <div class="sh-tag sh-tag-green"><i class="fas fa-user-check"></i> Who Needs GSTR-10</div>
            <h2 class="sec-title" style="color: #00335a;">Who Must File <span>GSTR-10</span></h2>
            <p class="sec-sub">Taxpayers whose GST registration has been cancelled or surrendered</p>
        </div>
        <div class="mt-who-grid">
            <div class="mt-who-card" data-reveal data-delay="0"><div class="who-glow"></div><div class="wh-icon"><i class="fas fa-store"></i></div><h4>Business Owners</h4><div class="who-line"></div></div>
            <div class="mt-who-card" data-reveal data-delay="80"><div class="who-glow"></div><div class="wh-icon"><i class="fas fa-chart-line"></i></div><h4>Small Traders</h4><div class="who-line"></div></div>
            <div class="mt-who-card" data-reveal data-delay="160"><div class="who-glow"></div><div class="wh-icon"><i class="fas fa-truck"></i></div><h4>Suppliers & Distributors</h4><div class="who-line"></div></div>
            <div class="mt-who-card" data-reveal data-delay="240"><div class="who-glow"></div><div class="wh-icon"><i class="fas fa-industry"></i></div><h4>Manufacturers</h4><div class="who-line"></div></div>
            <div class="mt-who-card" data-reveal data-delay="320"><div class="who-glow"></div><div class="wh-icon"><i class="fas fa-hand-holding-usd"></i></div><h4>Any Cancelled GST Holder</h4><div class="who-line"></div></div>
        </div>
    </div>
</section>

<!-- HOW IT WORKS SECTION -->
<section class="mt-how" id="how-it-works">
    <div class="how-bg"></div>
    <div class="how-sweep"></div>
    <div class="mt-container">
        <div class="mt-sec-head" data-reveal>
            <div class="sh-tag"><i class="fas fa-list-ol"></i> Simple Steps</div>
            <h2 class="sec-title light" style="color: #00335a;">How GSTR-10 <span>Filing Works</span></h2>
            <p class="sec-sub light">Complete your final return in just a few easy steps</p>
        </div>
        <div class="mt-steps">
            <div class="mt-step" data-reveal data-delay="0"><div class="step-connector left-connector"></div><div class="step-num">01</div><div class="step-circle"><div class="sc-ring"></div><i class="fas fa-envelope-open-text"></i></div><h4>Share Cancellation Order</h4><p>Provide your GST cancellation order or surrender acknowledgement.</p><div class="step-connector right-connector"></div></div>
            <div class="mt-step" data-reveal data-delay="120"><div class="step-connector left-connector"></div><div class="step-num">02</div><div class="step-circle"><div class="sc-ring"></div><i class="fas fa-boxes"></i></div><h4>Submit Stock & Liability Details</h4><p>We help you compile closing stock, input tax credit, and pending tax.</p><div class="step-connector right-connector"></div></div>
            <div class="mt-step" data-reveal data-delay="240"><div class="step-connector left-connector"></div><div class="step-num">03</div><div class="step-circle"><div class="sc-ring"></div><i class="fas fa-file-upload"></i></div><h4>File GSTR-10 on GST Portal</h4><p>Our experts prepare and file the final return using your credentials.</p><div class="step-connector right-connector"></div></div>
            <div class="mt-step" data-reveal data-delay="360"><div class="step-connector left-connector"></div><div class="step-num">04</div><div class="step-circle"><div class="sc-ring"></div><i class="fas fa-check-double"></i></div><h4>Acknowledgement & Closure</h4><p>Receive filing acknowledgement and ensure proper closure of GST.</p><div class="step-connector right-connector"></div></div>
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
            <p class="sec-sub">Complete support for hassle‑free GSTR-10 filing</p>
        </div>
        <div class="feat-columns">
            <!-- Key Features -->
            <div class="feat-col" data-reveal>
                <div class="feat-col-header"><div class="feat-col-icon"><i class="fas fa-cogs"></i></div><h3>Key Features</h3></div>
                <div class="mt-feat-item"><div class="fi-icon fi-blue"><i class="fas fa-calculator"></i></div><div class="fi-text"><h4>Accurate Tax Computation</h4><p>We calculate final tax liability, input tax credit reversal, and interest correctly.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-green"><i class="fas fa-clock"></i></div><div class="fi-text"><h4>Deadline Tracking</h4><p>We remind you of the 3‑month deadline so you never miss the filing window.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-gold"><i class="fas fa-file-signature"></i></div><div class="fi-text"><h4>Stock Statement Preparation</h4><p>We help prepare the closing stock summary required for GSTR-10.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-navy"><i class="fas fa-upload"></i></div><div class="fi-text"><h4>Direct Filing on Portal</h4><p>Your return is filed directly on the GST portal using your login.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-blue"><i class="fas fa-envelope"></i></div><div class="fi-text"><h4>Instant Acknowledgement</h4><p>You receive ARN and filing confirmation as soon as the return is submitted.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-green"><i class="fas fa-shield-alt"></i></div><div class="fi-text"><h4>100% Compliance Guarantee</h4><p>Our filing ensures you meet all GST rules and avoid future notices.</p></div></div>
            </div>
            <!-- Key Benefits -->
            <div class="feat-col" data-reveal data-delay="150">
                <div class="feat-col-header"><div class="feat-col-icon feat-col-icon-gold"><i class="fas fa-gift"></i></div><h3>Key Benefits</h3></div>
                <div class="mt-feat-item"><div class="fi-icon fi-gold"><i class="fas fa-rupee-sign"></i></div><div class="fi-text"><h4>Avoid Heavy Penalties</h4><p>Late or non‑filing can cost thousands – we ensure you file on time.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-blue"><i class="fas fa-balance-scale"></i></div><div class="fi-text"><h4>Legal Peace of Mind</h4><p>Proper closure means no future GST notices or demands.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-green"><i class="fas fa-globe-asia"></i></div><div class="fi-text"><h4>Expert Guidance</h4><p>Our GST professionals answer all your questions and handle complex cases.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-navy"><i class="fas fa-bolt"></i></div><div class="fi-text"><h4>Quick Turnaround</h4><p>We file your GSTR-10 within days of receiving required documents.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-gold"><i class="fas fa-headset"></i></div><div class="fi-text"><h4>Dedicated Support</h4><p>Get personalised assistance via phone, email, or WhatsApp throughout the process.</p></div></div>
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
        <h2 class="cta-title">Ready to Close Your <span>GST Account?</span></h2>
        <p class="cta-sub">File your GSTR‑10 today and avoid penalties. Our experts are just a click away.</p>
        <div class="mt-cta-btns">
            <a href="#enquire" class="btn-primary-glow btn-lg"><span class="btn-shimmer"></span><i class="fas fa-paper-plane"></i><span>Get Started Today</span></a>
            <a href="tel:<?php echo $comp_mobile; ?>" class="btn-glass btn-lg"><i class="fas fa-phone-alt"></i><span>Call Now</span></a>
        </div>
        <div class="cta-trust">
            <div class="cta-chip"><i class="fas fa-check-circle"></i> No Hidden Fees</div>
            <div class="cta-chip"><i class="fas fa-laptop"></i> Online Filing</div>
            <div class="cta-chip"><i class="fas fa-clock"></i> Quick Service</div>
        </div>
    </div>
</section>

</main>

<?php include('includes/footer_1.php'); ?>
<?php include('includes/whats-app.php'); ?>
<?php include('includes/sticky-footer.php'); ?>

<script>
/* ========== PARTICLE CANVAS + SCROLL REVEAL (same as money transfer) ========== */
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