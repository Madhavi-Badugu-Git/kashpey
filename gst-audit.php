<?php 
session_start();
include('includes/dbConfig.php');
$current_page_name = "GST Audit & Reconciliation";
$current_service_category = "gst_audit";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>GST Audit | Compliance Verification & Reconciliation – K-Seva</title>
    <meta name="description" content="Ensure GST compliance with expert audit services. Identify errors, reconcile returns, and reduce penalty risks. Self-certification support for GSTR-9C.">
    <meta name="keywords" content="GST Audit, GSTR-9C, GST Compliance, Reconciliation Statement, Tax Audit, K-Seva">
    <link rel="canonical" href="https://k-seva.com/gst-audit">

    <!-- Open Graph -->
    <meta property="og:title" content="GST Audit & Compliance Verification – K-Seva">
    <meta property="og:description" content="Expert GST audit to verify records, returns, and ITC. Stay compliant and avoid notices.">
    <meta property="og:image" content="https://k-seva.com/assets/images/og-gst-audit.jpg">
    <meta property="og:url" content="https://k-seva.com/gst-audit">
    <meta property="og:type" content="website">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GST Audit Service | K-Seva">
    <meta name="twitter:description" content="Simplify GST audit and reconciliation with professional support.">
    <meta name="twitter:image" content="https://k-seva.com/assets/images/og-gst-audit.jpg">

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
            <div class="mt-badge"><span class="badge-dot"></span><i class="fas fa-search"></i>&nbsp; GST Audit</div>
            <h1 class="hero-title">GST <span class="hero-gradient-text">Audit & Compliance</span></h1>
            <p class="hero-sub">Examination and verification of GST records, returns, and financial statements to ensure accuracy. Identify mismatches, claim correct ITC, and reduce penalty risks.</p>
            <div class="mt-hero-btns">
                <a href="#enquire" class="btn-primary-glow"><span class="btn-shimmer"></span><i class="fas fa-paper-plane"></i><span>Enquire Now</span></a>
                <a href="#how-it-works" class="btn-glass"><i class="fas fa-play-circle"></i><span>How It Works</span></a>
            </div>
            <div class="hero-trust">
                <div class="trust-badge"><i class="fas fa-check-double"></i> Self‑Certification</div>
                <div class="trust-badge"><i class="fas fa-shield-alt"></i> Reduce Notices</div>
                <div class="trust-badge"><i class="fas fa-chart-line"></i> ITC Verification</div>
            </div>
        </div>
        <div class="mt-hero-card" data-reveal data-delay="200">
            <div class="card-glow-ring"></div>
            <div class="hc-header">
                <div class="hc-pulse-dot"></div>
                <span class="hc-title">GST Audit Overview</span>
                <span class="hc-live-badge">FINANCE ACT 2021</span>
            </div>
            <div class="mt-stat-row">
                <div class="mt-stat"><div class="mt-stat-num c-blue">GSTR-9C</div><div class="mt-stat-lbl">Reconciliation Statement</div></div>
                <div class="mt-stat"><div class="mt-stat-num c-green">Self‑Certification</div><div class="mt-stat-lbl">Now Allowed</div></div>
                <div class="mt-stat"><div class="mt-stat-num c-gold">Turnover Limit</div><div class="mt-stat-lbl">Relaxations for Small Taxpayers</div></div>
                <div class="mt-stat"><div class="mt-stat-num c-white">Compliance</div><div class="mt-stat-lbl">Penalty Reduction</div></div>
            </div>
            <div class="mt-transfer-demo">
                <div class="td-node td-from"><div class="td-icon"><i class="fas fa-book"></i></div><div class="td-label">GST Returns & Books</div><div class="td-val">Your Records</div></div>
                <div class="td-flow"><div class="flow-line"><div class="flow-particle p1"></div><div class="flow-particle p2"></div><div class="flow-particle p3"></div></div><div class="flow-arrow"><i class="fas fa-arrow-right"></i></div><div class="flow-label">Audit & Reconciliation</div></div>
                <div class="td-node td-to"><div class="td-icon"><i class="fas fa-check-circle"></i></div><div class="td-label">Compliant</div><div class="td-val">Verified & Accurate</div></div>
            </div>
            <div class="card-shimmer"></div>
        </div>
    </div>
</section>

<!-- BREADCRUMB -->
<nav class="mt-breadcrumb" aria-label="Breadcrumb"><div class="bc-inner"><a href="home"><i class="fas fa-home"></i> Home</a><i class="fas fa-chevron-right bc-sep"></i><span>Services</span><i class="fas fa-chevron-right bc-sep"></i><span>GST</span><i class="fas fa-chevron-right bc-sep"></i><span class="bc-active">Audit & Reconciliation</span></div></nav>

<!-- INTRO + ENQUIRY FORM -->
<section class="mt-intro" id="enquire">
    <div class="intro-deco deco-1"></div>
    <div class="intro-deco deco-2"></div>
    <div class="mt-container">
        <div class="mt-intro-text" data-reveal>
            <div class="sec-tag"><i class="fas fa-info-circle"></i> About GST Audit</div>
            <h2 class="sec-title" style="color: #00335a">GST Audit & <span>Reconciliation</span></h2>
            <div class="sec-divider"><span></span><i class="fas fa-search"></i><span></span></div>
            <p>GST Audit refers to the examination and verification of a taxpayer's GST records, returns, and financial statements to ensure compliance with GST laws and regulations. It helps confirm that the taxes collected, input tax credits claimed, and returns filed are accurate and properly maintained.</p>
            <p>Under the revised GST provisions introduced through the <strong>Finance Act 2021</strong>, the mandatory certification of GSTR-9C by a Chartered Accountant (CA) or Cost Accountant (CMA) was removed. Businesses with higher annual turnover are now allowed to submit the reconciliation statement on a <strong>self-certification basis</strong> as per the latest GST guidelines.</p>
            <p>According to notifications issued by the GST authorities, certain small taxpayers with turnover below the prescribed limit have also been provided relaxation from filing annual return forms in specific financial years. These updates were introduced to simplify GST compliance and reduce the filing burden for businesses.</p>
            <div class="intro-pills">
                <span class="pill pill-blue"><i class="fas fa-check-double"></i> Self‑Certification</span>
                <span class="pill pill-green"><i class="fas fa-chart-line"></i> ITC Verification</span>
                <span class="pill pill-gold"><i class="fas fa-rupee-sign"></i> Reduce Penalties</span>
                <span class="pill pill-navy"><i class="fas fa-shield-alt"></i> Stay Compliant</span>
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
            <h2 class="sec-title light">Why K-Seva for <span>GST Audit</span></h2>
            <p class="sec-sub light">Expert verification and reconciliation to ensure error‑free GST compliance</p>
        </div>
        <div class="mt-why-grid">
            <div class="mt-why-card" data-reveal data-delay="0"><div class="wc-glow glow-blue"></div><div class="wc-icon-wrap icon-blue"><div class="wc-icon-ring"></div><i class="fas fa-search"></i></div><h3>Detailed Verification</h3><p>We examine your GST returns, purchase/sales registers, and ITC claims.</p><div class="wc-shine"></div></div>
            <div class="mt-why-card" data-reveal data-delay="80"><div class="wc-glow glow-green"></div><div class="wc-icon-wrap icon-green"><div class="wc-icon-ring"></div><i class="fas fa-check-double"></i></div><h3>Reconciliation Expertise</h3><p>Match GSTR-1, GSTR-3B, GSTR-2B with your books to identify mismatches.</p><div class="wc-shine"></div></div>
            <div class="mt-why-card" data-reveal data-delay="160"><div class="wc-glow glow-gold"></div><div class="wc-icon-wrap icon-gold"><div class="wc-icon-ring"></div><i class="fas fa-file-alt"></i></div><h3>GSTR-9C Support</h3><p>Assistance with reconciliation statement – self‑certification or CA certification as needed.</p><div class="wc-shine"></div></div>
            <div class="mt-why-card" data-reveal data-delay="240"><div class="wc-glow glow-navy"></div><div class="wc-icon-wrap icon-navy"><div class="wc-icon-ring"></div><i class="fas fa-rupee-sign"></i></div><h3>Penalty Protection</h3><p>Identify errors early to avoid interest, late fees, and show‑cause notices.</p><div class="wc-shine"></div></div>
            <div class="mt-why-card" data-reveal data-delay="320"><div class="wc-glow glow-teal"></div><div class="wc-icon-wrap icon-teal"><div class="wc-icon-ring"></div><i class="fas fa-chart-line"></i></div><h3>Updated with Latest Rules</h3><p>We follow Finance Act 2021 changes – self‑certification where applicable.</p><div class="wc-shine"></div></div>
            <div class="mt-why-card" data-reveal data-delay="400"><div class="wc-glow glow-red"></div><div class="wc-icon-wrap icon-red"><div class="wc-icon-ring"></div><i class="fas fa-headset"></i></div><h3>Dedicated Support</h3><p>Get assistance with departmental notices, scrutiny, and assessments.</p><div class="wc-shine"></div></div>
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
            <div class="sh-tag sh-tag-light"><i class="fas fa-chart-bar"></i> Why Audit Matters</div>
            <h2 class="sec-title light">Benefits of <span>GST Audit</span></h2>
            <p class="sec-sub light">Accuracy, transparency, and reduced risk of penalties</p>
        </div>
        <div class="mt-stats-grid">
            <div class="mt-stat-card" data-reveal data-delay="0"><div class="sc-orb"></div><div class="sc-icon-wrap" style="--ic:#23adeb"><i class="fas fa-check-circle"></i></div><div class="sc-num" style="--nc:#23adeb">100%</div><div class="sc-lbl">Compliance Assurance</div><div class="sc-bar"><div class="sc-bar-fill" style="--bc:#23adeb;width:100%"></div></div></div>
            <div class="mt-stat-card" data-reveal data-delay="100"><div class="sc-orb"></div><div class="sc-icon-wrap" style="--ic:#64ba4d"><i class="fas fa-chart-line"></i></div><div class="sc-num" style="--nc:#64ba4d">Errors</div><div class="sc-lbl">Identified and corrected early</div><div class="sc-bar"><div class="sc-bar-fill" style="--bc:#64ba4d;width:95%"></div></div></div>
            <div class="mt-stat-card" data-reveal data-delay="200"><div class="sc-orb"></div><div class="sc-icon-wrap" style="--ic:#fed109"><i class="fas fa-rupee-sign"></i></div><div class="sc-num" style="--nc:#fed109">Penalties</div><div class="sc-lbl">Reduced through proper verification</div><div class="sc-bar"><div class="sc-bar-fill" style="--bc:#fed109;width:85%"></div></div></div>
            <div class="mt-stat-card" data-reveal data-delay="300"><div class="sc-orb"></div><div class="sc-icon-wrap" style="--ic:#fff"><i class="fas fa-shield-alt"></i></div><div class="sc-num" style="--nc:#fff">Transparency</div><div class="sc-lbl">Maintained in financial records</div><div class="sc-bar"><div class="sc-bar-fill" style="--bc:#fff;width:100%"></div></div></div>
        </div>
    </div>
</section>

<!-- WHO CAN USE SECTION -->
<section class="mt-who">
    <div class="who-deco-1"></div>
    <div class="who-deco-2"></div>
    <div class="mt-container">
        <div class="mt-sec-head" data-reveal>
            <div class="sh-tag sh-tag-green"><i class="fas fa-user-check"></i> Who Needs GST Audit</div>
            <h2 class="sec-title" style="color: #00335a;">Who Should <span>Get Audited</span></h2>
            <p class="sec-sub">Businesses that file annual returns and want to ensure compliance</p>
        </div>
        <div class="mt-who-grid">
            <div class="mt-who-card" data-reveal data-delay="0"><div class="who-glow"></div><div class="wh-icon"><i class="fas fa-chart-line"></i></div><h4>Regular Taxpayers</h4><div class="who-line"></div></div>
            <div class="mt-who-card" data-reveal data-delay="80"><div class="who-glow"></div><div class="wh-icon"><i class="fas fa-store"></i></div><h4>High Turnover Businesses</h4><div class="who-line"></div></div>
            <div class="mt-who-card" data-reveal data-delay="160"><div class="who-glow"></div><div class="wh-icon"><i class="fas fa-hand-holding-usd"></i></div><h4>Businesses Receiving Notices</h4><div class="who-line"></div></div>
            <div class="mt-who-card" data-reveal data-delay="240"><div class="who-glow"></div><div class="wh-icon"><i class="fas fa-file-invoice"></i></div><h4>Those Filing GSTR-9C</h4><div class="who-line"></div></div>
            <div class="mt-who-card" data-reveal data-delay="320"><div class="who-glow"></div><div class="wh-icon"><i class="fas fa-chart-pie"></i></div><h4>Any GST Registered Entity</h4><div class="who-line"></div></div>
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
            <h2 class="sec-title light" style="color: #00335a;">How GST <span>Audit Works</span></h2>
            <p class="sec-sub light">We review, reconcile, and help you correct discrepancies</p>
        </div>
        <div class="mt-steps">
            <div class="mt-step" data-reveal data-delay="0"><div class="step-connector left-connector"></div><div class="step-num">01</div><div class="step-circle"><div class="sc-ring"></div><i class="fas fa-upload"></i></div><h4>Share Records</h4><p>Provide GST returns, purchase/sales registers, and financial statements.</p><div class="step-connector right-connector"></div></div>
            <div class="mt-step" data-reveal data-delay="120"><div class="step-connector left-connector"></div><div class="step-num">02</div><div class="step-circle"><div class="sc-ring"></div><i class="fas fa-chart-line"></i></div><h4>Reconciliation</h4><p>We compare GSTR-1, GSTR-3B, GSTR-2B with your books.</p><div class="step-connector right-connector"></div></div>
            <div class="mt-step" data-reveal data-delay="240"><div class="step-connector left-connector"></div><div class="step-num">03</div><div class="step-circle"><div class="sc-ring"></div><i class="fas fa-edit"></i></div><h4>Identify Mismatches</h4><p>Find errors in ITC claims, tax payment, or return filings.</p><div class="step-connector right-connector"></div></div>
            <div class="mt-step" data-reveal data-delay="360"><div class="step-connector left-connector"></div><div class="step-num">04</div><div class="step-circle"><div class="sc-ring"></div><i class="fas fa-check-double"></i></div><h4>Report & Compliance</h4><p>We provide an audit report and help you rectify discrepancies.</p><div class="step-connector right-connector"></div></div>
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
            <p class="sec-sub">Complete GST audit support to ensure error‑free compliance</p>
        </div>
        <div class="feat-columns">
            <!-- Key Features -->
            <div class="feat-col" data-reveal>
                <div class="feat-col-header"><div class="feat-col-icon"><i class="fas fa-cogs"></i></div><h3>Key Features</h3></div>
                <div class="mt-feat-item"><div class="fi-icon fi-blue"><i class="fas fa-search"></i></div><div class="fi-text"><h4>Return Verification</h4><p>Check GSTR-1, GSTR-3B, GSTR-9, GSTR-9C for accuracy.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-green"><i class="fas fa-chart-line"></i></div><div class="fi-text"><h4>ITC Reconciliation</h4><p>Match ITC claimed with GSTR-2B and purchase register.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-gold"><i class="fas fa-file-alt"></i></div><div class="fi-text"><h4>GSTR-9C Support</h4><p>Assistance with reconciliation statement – self‑certification or CA certified.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-navy"><i class="fas fa-gavel"></i></div><div class="fi-text"><h4>Notice Handling</h4><p>Help with departmental queries, scrutiny, and assessment.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-blue"><i class="fas fa-chart-pie"></i></div><div class="fi-text"><h4>Mismatch Resolution</h4><p>Identify and correct differences between returns and books.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-green"><i class="fas fa-file-pdf"></i></div><div class="fi-text"><h4>Audit Report</h4><p>Detailed report of findings and corrective actions.</p></div></div>
            </div>
            <!-- Key Benefits -->
            <div class="feat-col" data-reveal data-delay="150">
                <div class="feat-col-header"><div class="feat-col-icon feat-col-icon-gold"><i class="fas fa-gift"></i></div><h3>Key Benefits</h3></div>
                <div class="mt-feat-item"><div class="fi-icon fi-gold"><i class="fas fa-rupee-sign"></i></div><div class="fi-text"><h4>Avoid Penalties</h4><p>Rectify errors before they attract interest or late fees.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-blue"><i class="fas fa-shield-alt"></i></div><div class="fi-text"><h4>Reduced Notices</h4><p>Properly reconciled books reduce chance of departmental scrutiny.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-green"><i class="fas fa-chart-line"></i></div><div class="fi-text"><h4>Better ITC Claims</h4><p>Claim correct ITC without risking reversals.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-navy"><i class="fas fa-clock"></i></div><div class="fi-text"><h4>Peace of Mind</h4><p>Know that your GST compliance is accurate and up‑to‑date.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-gold"><i class="fas fa-headset"></i></div><div class="fi-text"><h4>Expert Guidance</h4><p>CA/CMA support available if mandatory certification is required.</p></div></div>
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
        <div class="cta-icon-wrap"><div class="cta-icon-ring"></div><i class="fas fa-search"></i></div>
        <h2 class="cta-title">Ensure <span>GST Compliance</span> With K-Seva</h2>
        <p class="cta-sub">Get your GST records audited and reconciled – stay ahead of notices and penalties.</p>
        <div class="mt-cta-btns">
            <a href="#enquire" class="btn-primary-glow btn-lg"><span class="btn-shimmer"></span><i class="fas fa-paper-plane"></i><span>Request Audit</span></a>
            <a href="tel:<?php echo $comp_mobile; ?>" class="btn-glass btn-lg"><i class="fas fa-phone-alt"></i><span>Call Now</span></a>
        </div>
        <div class="cta-trust">
            <div class="cta-chip"><i class="fas fa-check-circle"></i> No Hidden Fees</div>
            <div class="cta-chip"><i class="fas fa-shield-alt"></i> Expert Verification</div>
            <div class="cta-chip"><i class="fas fa-headset"></i> Dedicated Support</div>
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