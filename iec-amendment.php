<?php 
session_start();
include('includes/dbConfig.php');
$current_page_name = "IEC Amendment";
$current_service_category = "iec_amendment";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>IEC Amendment | Update Import Export Code – K-Seva</title>
    <meta name="description" content="Update your Import Export Code (IEC) details online with K-Seva. Modify company name, address, bank details, and more – stay compliant with DGFT.">
    <meta name="keywords" content="IEC Amendment, Update IEC, Import Export Code Modification, DGFT Compliance, K-Seva">
    <link rel="canonical" href="https://k-seva.com/iec-amendment">

    <!-- Open Graph -->
    <meta property="og:title" content="IEC Amendment Service – K-Seva">
    <meta property="og:description" content="Hassle‑free amendment of Import Export Code details. Keep your IEC data updated for smooth international trade.">
    <meta property="og:image" content="https://k-seva.com/assets/images/og-iec.jpg">
    <meta property="og:url" content="https://k-seva.com/iec-amendment">
    <meta property="og:type" content="website">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="IEC Amendment | K-Seva">
    <meta name="twitter:description" content="Update your IEC details quickly – avoid customs and banking delays.">
    <meta name="twitter:image" content="https://k-seva.com/assets/images/og-iec.jpg">

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
            <div class="mt-badge"><span class="badge-dot"></span><i class="fas fa-edit"></i>&nbsp; IEC Amendment</div>
            <h1 class="hero-title">Update Your <span class="hero-gradient-text">Import Export Code</span></h1>
            <p class="hero-sub">Keep your IEC details current – modify company name, address, bank details, and more. Stay compliant with DGFT and avoid trade disruptions.</p>
            <div class="mt-hero-btns">
                <a href="#enquire" class="btn-primary-glow"><span class="btn-shimmer"></span><i class="fas fa-paper-plane"></i><span>Enquire Now</span></a>
                <a href="#how-it-works" class="btn-glass"><i class="fas fa-play-circle"></i><span>How It Works</span></a>
            </div>
            <div class="hero-trust">
                <div class="trust-badge"><i class="fas fa-globe-asia"></i> Smooth Trade</div>
                <div class="trust-badge"><i class="fas fa-check-circle"></i> DGFT Compliant</div>
                <div class="trust-badge"><i class="fas fa-clock"></i> Fast Processing</div>
            </div>
        </div>
        <div class="mt-hero-card" data-reveal data-delay="200">
            <div class="card-glow-ring"></div>
            <div class="hc-header">
                <div class="hc-pulse-dot"></div>
                <span class="hc-title">IEC Amendment</span>
                <span class="hc-live-badge">ONLINE</span>
            </div>
            <div class="mt-stat-row">
                <div class="mt-stat"><div class="mt-stat-num c-blue">Name Change</div><div class="mt-stat-lbl">Business / Individual</div></div>
                <div class="mt-stat"><div class="mt-stat-num c-green">Address</div><div class="mt-stat-lbl">Registered Office Update</div></div>
                <div class="mt-stat"><div class="mt-stat-num c-gold">Bank Details</div><div class="mt-stat-lbl">New Account Information</div></div>
                <div class="mt-stat"><div class="mt-stat-num c-white">Contact</div><div class="mt-stat-lbl">Email / Phone / Director</div></div>
            </div>
            <div class="mt-transfer-demo">
                <div class="td-node td-from"><div class="td-icon"><i class="fas fa-file-alt"></i></div><div class="td-label">Existing IEC</div><div class="td-val">Need Update</div></div>
                <div class="td-flow"><div class="flow-line"><div class="flow-particle p1"></div><div class="flow-particle p2"></div><div class="flow-particle p3"></div></div><div class="flow-arrow"><i class="fas fa-arrow-right"></i></div><div class="flow-label">Amendment</div></div>
                <div class="td-node td-to"><div class="td-icon"><i class="fas fa-check-circle"></i></div><div class="td-label">Updated IEC</div><div class="td-val">DGFT Approved</div></div>
            </div>
            <div class="card-shimmer"></div>
        </div>
    </div>
</section>

<!-- BREADCRUMB -->
<nav class="mt-breadcrumb" aria-label="Breadcrumb"><div class="bc-inner"><a href="home"><i class="fas fa-home"></i> Home</a><i class="fas fa-chevron-right bc-sep"></i><span>Services</span><i class="fas fa-chevron-right bc-sep"></i><span>IEC</span><i class="fas fa-chevron-right bc-sep"></i><span class="bc-active">Amendment</span></div></nav>

<!-- INTRO + ENQUIRY FORM -->
<section class="mt-intro" id="enquire">
    <div class="intro-deco deco-1"></div>
    <div class="intro-deco deco-2"></div>
    <div class="mt-container">
        <div class="mt-intro-text" data-reveal>
            <div class="sec-tag"><i class="fas fa-info-circle"></i> About IEC Amendment</div>
            <h2 class="sec-title" style="color: #00335a">IEC <span>Amendment</span></h2>
            <div class="sec-divider"><span></span><i class="fas fa-edit"></i><span></span></div>
            <p>IEC Amendment refers to the process of updating or modifying the details of an existing Import Export Code (IEC) registration issued to businesses involved in international trade. Businesses may need to amend their IEC information due to changes in company name, address, bank details, contact information, or business structure.</p>
            <p>The Import Export Code is an important registration required for companies and individuals engaged in importing or exporting goods and services. Keeping IEC details updated helps businesses maintain smooth international trade operations and comply with government regulations.</p>
            <p>IEC-related services support businesses involved in global trade activities across various industries such as manufacturing, electronics, textiles, technology, energy, and other commercial sectors. Timely amendment of IEC details helps avoid issues during customs clearance, banking transactions, and export‑import documentation.</p>
            <div class="intro-pills">
                <span class="pill pill-blue"><i class="fas fa-building"></i> Company Name</span>
                <span class="pill pill-green"><i class="fas fa-map-marker-alt"></i> Address Change</span>
                <span class="pill pill-gold"><i class="fas fa-university"></i> Bank Details</span>
                <span class="pill pill-navy"><i class="fas fa-phone-alt"></i> Contact Update</span>
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
            <h2 class="sec-title light">Why K-Seva for <span>IEC Amendment</span></h2>
            <p class="sec-sub light">Expert assistance to update your IEC quickly and correctly</p>
        </div>
        <div class="mt-why-grid">
            <div class="mt-why-card" data-reveal data-delay="0"><div class="wc-glow glow-blue"></div><div class="wc-icon-wrap icon-blue"><div class="wc-icon-ring"></div><i class="fas fa-file-alt"></i></div><h3>Complete Documentation</h3><p>We help you prepare the amendment application and supporting documents.</p><div class="wc-shine"></div></div>
            <div class="mt-why-card" data-reveal data-delay="80"><div class="wc-glow glow-green"></div><div class="wc-icon-wrap icon-green"><div class="wc-icon-ring"></div><i class="fas fa-clock"></i></div><h3>Fast Processing</h3><p>We file the amendment online and follow up with DGFT for approval.</p><div class="wc-shine"></div></div>
            <div class="mt-why-card" data-reveal data-delay="160"><div class="wc-glow glow-gold"></div><div class="wc-icon-wrap icon-gold"><div class="wc-icon-ring"></div><i class="fas fa-chart-line"></i></div><h3>Smooth Trade Operations</h3><p>Updated IEC avoids customs clearance and banking delays.</p><div class="wc-shine"></div></div>
            <div class="mt-why-card" data-reveal data-delay="240"><div class="wc-glow glow-navy"></div><div class="wc-icon-wrap icon-navy"><div class="wc-icon-ring"></div><i class="fas fa-shield-alt"></i></div><h3>DGFT Compliance</h3><p>Stay compliant with government regulations for import/export.</p><div class="wc-shine"></div></div>
            <div class="mt-why-card" data-reveal data-delay="320"><div class="wc-glow glow-teal"></div><div class="wc-icon-wrap icon-teal"><div class="wc-icon-ring"></div><i class="fas fa-globe-asia"></i></div><h3>All Industry Support</h3><p>We serve manufacturing, electronics, textiles, technology, energy, and more.</p><div class="wc-shine"></div></div>
            <div class="mt-why-card" data-reveal data-delay="400"><div class="wc-glow glow-red"></div><div class="wc-icon-wrap icon-red"><div class="wc-icon-ring"></div><i class="fas fa-headset"></i></div><h3>End‑to‑End Assistance</h3><p>From application to final approval – we handle everything.</p><div class="wc-shine"></div></div>
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
            <div class="sh-tag sh-tag-light"><i class="fas fa-chart-bar"></i> Why Amendment Matters</div>
            <h2 class="sec-title light">Benefits of <span>IEC Update</span></h2>
            <p class="sec-sub light">Keep your business ready for global trade</p>
        </div>
        <div class="mt-stats-grid">
            <div class="mt-stat-card" data-reveal data-delay="0"><div class="sc-orb"></div><div class="sc-icon-wrap" style="--ic:#23adeb"><i class="fas fa-check-circle"></i></div><div class="sc-num" style="--nc:#23adeb">100%</div><div class="sc-lbl">Compliance maintained</div><div class="sc-bar"><div class="sc-bar-fill" style="--bc:#23adeb;width:100%"></div></div></div>
            <div class="mt-stat-card" data-reveal data-delay="100"><div class="sc-orb"></div><div class="sc-icon-wrap" style="--ic:#64ba4d"><i class="fas fa-clock"></i></div><div class="sc-num" style="--nc:#64ba4d">No Delays</div><div class="sc-lbl">At customs & banks</div><div class="sc-bar"><div class="sc-bar-fill" style="--bc:#64ba4d;width:90%"></div></div></div>
            <div class="mt-stat-card" data-reveal data-delay="200"><div class="sc-orb"></div><div class="sc-icon-wrap" style="--ic:#fed109"><i class="fas fa-globe-asia"></i></div><div class="sc-num" style="--nc:#fed109">All Sectors</div><div class="sc-lbl">Manufacturing, Tech, Textiles & more</div><div class="sc-bar"><div class="sc-bar-fill" style="--bc:#fed109;width:95%"></div></div></div>
            <div class="mt-stat-card" data-reveal data-delay="300"><div class="sc-orb"></div><div class="sc-icon-wrap" style="--ic:#fff"><i class="fas fa-edit"></i></div><div class="sc-num" style="--nc:#fff">Online</div><div class="sc-lbl">Hassle‑free amendment process</div><div class="sc-bar"><div class="sc-bar-fill" style="--bc:#fff;width:100%"></div></div></div>
        </div>
    </div>
</section>

<!-- WHO CAN USE SECTION -->
<section class="mt-who">
    <div class="who-deco-1"></div>
    <div class="who-deco-2"></div>
    <div class="mt-container">
        <div class="mt-sec-head" data-reveal>
            <div class="sh-tag sh-tag-green"><i class="fas fa-user-check"></i> Who Needs Amendment</div>
            <h2 class="sec-title" style="color: #00335a;">Who Should <span>Update IEC</span></h2>
            <p class="sec-sub">Any business or individual with an existing IEC and changed details</p>
        </div>
        <div class="mt-who-grid">
            <div class="mt-who-card" data-reveal data-delay="0"><div class="who-glow"></div><div class="wh-icon"><i class="fas fa-building"></i></div><h4>Name Changed</h4><div class="who-line"></div></div>
            <div class="mt-who-card" data-reveal data-delay="80"><div class="who-glow"></div><div class="wh-icon"><i class="fas fa-map-marker-alt"></i></div><h4>Address Changed</h4><div class="who-line"></div></div>
            <div class="mt-who-card" data-reveal data-delay="160"><div class="who-glow"></div><div class="wh-icon"><i class="fas fa-university"></i></div><h4>Bank Account Changed</h4><div class="who-line"></div></div>
            <div class="mt-who-card" data-reveal data-delay="240"><div class="who-glow"></div><div class="wh-icon"><i class="fas fa-phone-alt"></i></div><h4>Contact Details Updated</h4><div class="who-line"></div></div>
            <div class="mt-who-card" data-reveal data-delay="320"><div class="who-glow"></div><div class="wh-icon"><i class="fas fa-chart-line"></i></div><h4>Business Structure Change</h4><div class="who-line"></div></div>
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
            <h2 class="sec-title light" style="color: #00335a;">How IEC <span>Amendment Works</span></h2>
            <p class="sec-sub light">Update your IEC in a few easy steps with our expert guidance</p>
        </div>
        <div class="mt-steps">
            <div class="mt-step" data-reveal data-delay="0"><div class="step-connector left-connector"></div><div class="step-num">01</div><div class="step-circle"><div class="sc-ring"></div><i class="fas fa-upload"></i></div><h4>Share Existing IEC</h4><p>Provide your current IEC certificate and details that need change.</p><div class="step-connector right-connector"></div></div>
            <div class="mt-step" data-reveal data-delay="120"><div class="step-connector left-connector"></div><div class="step-num">02</div><div class="step-circle"><div class="sc-ring"></div><i class="fas fa-file-signature"></i></div><h4>Prepare Amendment Application</h4><p>We fill the online amendment form with updated information.</p><div class="step-connector right-connector"></div></div>
            <div class="mt-step" data-reveal data-delay="240"><div class="step-connector left-connector"></div><div class="step-num">03</div><div class="step-circle"><div class="sc-ring"></div><i class="fas fa-upload"></i></div><h4>Upload Supporting Documents</h4><p>We attach proof of change (new PAN, address proof, bank certificate).</p><div class="step-connector right-connector"></div></div>
            <div class="mt-step" data-reveal data-delay="360"><div class="step-connector left-connector"></div><div class="step-num">04</div><div class="step-circle"><div class="sc-ring"></div><i class="fas fa-check-double"></i></div><h4>Approval & Updated IEC</h4><p>DGFT approves the amendment – we share the updated IEC certificate.</p><div class="step-connector right-connector"></div></div>
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
            <p class="sec-sub">Complete IEC amendment service with expert support</p>
        </div>
        <div class="feat-columns">
            <!-- Key Features -->
            <div class="feat-col" data-reveal>
                <div class="feat-col-header"><div class="feat-col-icon"><i class="fas fa-cogs"></i></div><h3>Key Features</h3></div>
                <div class="mt-feat-item"><div class="fi-icon fi-blue"><i class="fas fa-building"></i></div><div class="fi-text"><h4>Name Change Amendment</h4><p>Update business or individual name in IEC records.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-green"><i class="fas fa-map-marker-alt"></i></div><div class="fi-text"><h4>Address Change</h4><p>Modify registered office address or correspondence address.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-gold"><i class="fas fa-university"></i></div><div class="fi-text"><h4>Bank Details Update</h4><p>Change bank account details for export/import transactions.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-navy"><i class="fas fa-phone-alt"></i></div><div class="fi-text"><h4>Contact Information</h4><p>Update email, mobile, director, or partner details.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-blue"><i class="fas fa-chart-line"></i></div><div class="fi-text"><h4>Business Structure Change</h4><p>Modify from proprietorship to partnership or company.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-green"><i class="fas fa-file-pdf"></i></div><div class="fi-text"><h4>Updated IEC Certificate</h4><p>We deliver the digitally signed IEC certificate after approval.</p></div></div>
            </div>
            <!-- Key Benefits -->
            <div class="feat-col" data-reveal data-delay="150">
                <div class="feat-col-header"><div class="feat-col-icon feat-col-icon-gold"><i class="fas fa-gift"></i></div><h3>Key Benefits</h3></div>
                <div class="mt-feat-item"><div class="fi-icon fi-gold"><i class="fas fa-globe-asia"></i></div><div class="fi-text"><h4>Uninterrupted Trade</h4><p>Avoid customs clearance issues and banking rejections.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-blue"><i class="fas fa-gavel"></i></div><div class="fi-text"><h4>DGFT Compliance</h4><p>Stay compliant with import‑export regulations.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-green"><i class="fas fa-clock"></i></div><div class="fi-text"><h4>Fast Turnaround</h4><p>We process amendments quickly – typically within 5‑7 working days.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-navy"><i class="fas fa-shield-alt"></i></div><div class="fi-text"><h4>Legal Accuracy</h4><p>Our experts ensure all documents meet DGFT requirements.</p></div></div>
                <div class="mt-feat-item"><div class="fi-icon fi-gold"><i class="fas fa-headset"></i></div><div class="fi-text"><h4>Dedicated Support</h4><p>Get assistance with any queries during the amendment process.</p></div></div>
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
        <div class="cta-icon-wrap"><div class="cta-icon-ring"></div><i class="fas fa-edit"></i></div>
        <h2 class="cta-title">Update Your <span>IEC Today</span></h2>
        <p class="cta-sub">Keep your import‑export code current – avoid disruptions in global trade.</p>
        <div class="mt-cta-btns">
            <a href="#enquire" class="btn-primary-glow btn-lg"><span class="btn-shimmer"></span><i class="fas fa-paper-plane"></i><span>Apply for Amendment</span></a>
            <a href="tel:<?php echo $comp_mobile; ?>" class="btn-glass btn-lg"><i class="fas fa-phone-alt"></i><span>Call Now</span></a>
        </div>
        <div class="cta-trust">
            <div class="cta-chip"><i class="fas fa-check-circle"></i> No Hidden Fees</div>
            <div class="cta-chip"><i class="fas fa-clock"></i> Fast Processing</div>
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