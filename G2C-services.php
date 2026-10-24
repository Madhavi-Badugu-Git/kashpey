<?php include('includes/dbConfig.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>G2C Services | K-Seva – Government Citizen Services Portal</title>
    <meta name="description" content="Access all government citizen services (G2C) at one place – Aadhaar, Passport, Driving License, Certificates, Welfare Schemes. K-Seva simplifies government services.">
    <meta name="keywords" content="Government Services, G2C Services, Citizen Services, Aadhaar Correction, Passport Application, Driving License, Ration Card, K-Seva">
    <meta name="author" content="K-Seva">
    <link rel="canonical" href="https://k-seva.com/g2c-services">

    <!-- Open Graph -->
    <meta property="og:title" content="G2C Services | K-Seva – Government Citizen Services">
    <meta property="og:description" content="One-stop solution for all government citizen services. Apply for documents, certificates, welfare schemes online with expert assistance.">
    <meta property="og:image" content="https://k-seva.com/assets/images/og-g2c.jpg">
    <meta property="og:url" content="https://k-seva.com/g2c-services">
    <meta property="og:type" content="website">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="K-Seva G2C Services – Government Citizen Services">
    <meta name="twitter:description" content="Access all government services in one place. Fast, reliable, and fully online assistance.">
    <meta name="twitter:image" content="https://k-seva.com/assets/images/og-g2c.jpg">

    <?php include('includes/header_1.php'); ?>
    
    <!-- Fonts & Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800;900&family=Playfair+Display:ital,wght@0,700;0,900;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/g2c-services.css">
</head>

<body class="g2c-body">

<canvas id="g2c-particles" aria-hidden="true"></canvas>
<div class="over-menu"></div>
<?php include('includes/navbar_1.php'); ?>

<main class="g2c-page">

<!-- ========== HERO SECTION ========== -->
<section class="g2c-hero">
    <div class="hero-orb orb-1"></div>
    <div class="hero-orb orb-2"></div>
    <div class="hero-orb orb-3"></div>
    <div class="hero-mesh"></div>
    <div class="hero-sweep"></div>
    <div class="g2c-hero-inner">
        <div class="g2c-hero-text" data-reveal>
            <div class="g2c-badge"><span class="badge-dot"></span><i class="fas fa-landmark"></i>&nbsp; K-Seva G2C Services</div>
            <h1 class="hero-title">Government <span class="hero-gradient-text">Citizen Services</span></h1>
            <p class="hero-sub">Access important government services quickly and easily — all from one place. No confusion, no long queues, no multiple office visits.</p>
            <div class="g2c-hero-btns">
                <a href="#services" class="btn-primary-glow"><span class="btn-shimmer"></span><i class="fas fa-th-large"></i><span>View All Services</span></a>
                <a href="#contact" class="btn-glass"><i class="fas fa-phone-alt"></i><span>Contact Expert</span></a>
            </div>
            <div class="hero-trust">
                <div class="trust-badge"><i class="fas fa-check-circle"></i> 20+ Services</div>
                <div class="trust-badge"><i class="fas fa-clock"></i> 24×7 Support</div>
                <div class="trust-badge"><i class="fas fa-shield-alt"></i> Govt Approved</div>
            </div>
        </div>
        <div class="g2c-hero-card" data-reveal data-delay="200">
            <div class="card-glow-ring"></div>
            <div class="hc-header">
                <div class="hc-pulse-dot"></div>
                <span class="hc-title">G2C Services Overview</span>
                <span class="hc-live-badge">LIVE</span>
            </div>
            <div class="g2c-stat-row">
                <div class="g2c-stat"><div class="g2c-stat-num c-blue">20+</div><div class="g2c-stat-lbl">Services Available</div></div>
                <div class="g2c-stat"><div class="g2c-stat-num c-green">1 Place</div><div class="g2c-stat-lbl">All Services</div></div>
                <div class="g2c-stat"><div class="g2c-stat-num c-gold">Fast</div><div class="g2c-stat-lbl">Processing</div></div>
                <div class="g2c-stat"><div class="g2c-stat-num c-white">Free</div><div class="g2c-stat-lbl">Guidance</div></div>
            </div>
            <div class="g2c-services-tag">
                <div class="hst-icon"><i class="fas fa-check-circle"></i></div>
                <div class="hst-text">
                    <div class="hst-num">Trusted Assistance</div>
                    <div class="hst-lbl">Accurate info and proper documentation support</div>
                </div>
            </div>
            <div class="card-shimmer"></div>
        </div>
    </div>
</section>

<!-- BREADCRUMB -->
<nav class="g2c-breadcrumb" aria-label="Breadcrumb"><div class="bc-inner"><a href="home"><i class="fas fa-home"></i> Home</a><i class="fas fa-chevron-right bc-sep"></i><span>Services</span><i class="fas fa-chevron-right bc-sep"></i><span class="bc-active">Government Citizen Services (G2C)</span></div></nav>

<!-- ========== INTRO & CONTACT SECTION ========== -->
<section class="g2c-intro" id="contact">
    <div class="intro-deco deco-1"></div>
    <div class="intro-deco deco-2"></div>
    <div class="g2c-container">
        <div class="g2c-intro-text" data-reveal>
            <div class="sec-tag"><i class="fas fa-info-circle"></i> About This Service</div>
            <h2 class="sec-title" style="color: #00335a">What Are <span>G2C Services?</span></h2>
            <div class="sec-divider"><span></span><i class="fas fa-landmark"></i><span></span></div>
            <p>Government Citizen Services (G2C) help people access important government services quickly and easily. Instead of visiting different government offices, citizens can get many services from one place.</p>
            <p>K-Seva works as a support center where individuals can apply for government services, submit forms, and get important information without confusion. Our aim is to make government services simple, fast, and accessible for everyone.</p>
            <p>Through K-Seva, citizens can apply for various services such as identity documents, certificates, registrations, and welfare schemes. We help people complete the process correctly and save their valuable time.</p>
            <p>Today, many government services are available online through digital technology. However, not everyone knows how to use these online systems. K-Seva helps bridge this gap by assisting people with online applications, document uploads, and service tracking.</p>
        </div>

        <!-- ENQUIRY FORM – same premium card -->
        <?php 
        $current_page_name = "Govt Citizen Services";
        $current_service_category = "govt_citizen_services";
        include('includes/enquiry_form.php'); 
        ?>
    </div>
</section>

<!-- ========== WHY CHOOSE K-SEVA SECTION ========== -->
<section class="g2c-why">
    <div class="why-bg-mesh"></div>
    <div class="why-sweep"></div>
    <div class="g2c-container">
        <div class="g2c-sec-head" data-reveal>
            <div class="sh-tag"><i class="fas fa-star"></i> Why Choose K-Seva</div>
            <h2 class="sec-title light">Why Choose K-Seva for <span>Government Services</span></h2>
            <p class="sec-sub light">Everything you need to access government services quickly, simply and accurately</p>
        </div>
        <div class="g2c-why-grid">
            <div class="g2c-why-card" data-reveal data-delay="0">
                <div class="wc-glow glow-green"></div>
                <div class="wc-icon-wrap icon-green"><div class="wc-icon-ring"></div><i class="fas fa-store"></i></div>
                <h3>One-Stop Service Center</h3>
                <p>Access multiple government services at one place without going to different offices.</p>
                <div class="wc-shine"></div>
            </div>
            <div class="g2c-why-card" data-reveal data-delay="80">
                <div class="wc-glow glow-blue"></div>
                <div class="wc-icon-wrap icon-blue"><div class="wc-icon-ring"></div><i class="fas fa-file-alt"></i></div>
                <h3>Simple Process</h3>
                <p>Easy guidance for filling forms and submitting documents correctly without confusion.</p>
                <div class="wc-shine"></div>
            </div>
            <div class="g2c-why-card" data-reveal data-delay="160">
                <div class="wc-glow glow-gold"></div>
                <div class="wc-icon-wrap icon-gold"><div class="wc-icon-ring"></div><i class="fas fa-clock"></i></div>
                <h3>Time Saving</h3>
                <p>Avoid long queues at government offices. We handle the process quickly on your behalf.</p>
                <div class="wc-shine"></div>
            </div>
            <div class="g2c-why-card" data-reveal data-delay="240">
                <div class="wc-glow glow-teal"></div>
                <div class="wc-icon-wrap icon-teal"><div class="wc-icon-ring"></div><i class="fas fa-laptop"></i></div>
                <h3>Digital Support</h3>
                <p>Help with online applications, government portals, document uploads and service tracking.</p>
                <div class="wc-shine"></div>
            </div>
            <div class="g2c-why-card" data-reveal data-delay="320">
                <div class="wc-glow glow-navy"></div>
                <div class="wc-icon-wrap icon-navy"><div class="wc-icon-ring"></div><i class="fas fa-shield-alt"></i></div>
                <h3>Trusted Assistance</h3>
                <p>Accurate information and proper documentation support for every service you need.</p>
                <div class="wc-shine"></div>
            </div>
            <div class="g2c-why-card" data-reveal data-delay="400">
                <div class="wc-glow glow-green"></div>
                <div class="wc-icon-wrap icon-green"><div class="wc-icon-ring"></div><i class="fas fa-users"></i></div>
                <h3>For Every Citizen</h3>
                <p>Every citizen deserves easy, transparent, and reliable access to government services. That is our commitment.</p>
                <div class="wc-shine"></div>
            </div>
        </div>
    </div>
</section>

<!-- ========== MISSION SECTION ========== -->
<section class="g2c-mission">
    <div class="mission-bg"></div>
    <div class="g2c-container">
        <div class="g2c-sec-head" data-reveal>
            <div class="sh-tag sh-tag-green"><i class="fas fa-bullseye"></i> Our Mission</div>
            <h2 class="sec-title" style="color: #00335a;">Our <span>Mission</span></h2>
            <p class="sec-sub light">Making government services accessible to every citizen</p>
        </div>
        <div class="mission-content" data-reveal>
            <div class="mission-icon"><i class="fas fa-bullseye"></i></div>
            <p>Our mission is to make government services easily available to every citizen. With the help of digital technology and proper guidance, K-Seva ensures that people can access important services without stress or delay.</p>
            <p>At K-Seva, we believe that every citizen deserves easy, transparent, and reliable access to government services.</p>
            <div class="mission-quote">
                <i class="fas fa-quote-left"></i> At K-Seva, we believe that every citizen deserves easy, transparent, and reliable access to government services.
            </div>
        </div>
    </div>
</section>

<!-- ========== SERVICES GRID SECTION ========== -->
<section class="g2c-services" id="services">
    <div class="services-deco-1"></div>
    <div class="services-deco-2"></div>
    <div class="g2c-container">
        <div class="g2c-sec-head" data-reveal>
            <div class="sh-tag sh-tag-green"><i class="fas fa-th-large"></i> Our Services</div>
            <h2 class="sec-title" style="color: #00335a;">All Government <span>Citizen Services</span></h2>
            <p class="sec-sub">Click on any service below to apply or get more information</p>
        </div>
        <div class="g2c-services-grid">
            <!-- Service 1 - Aadhaar Correction -->
            <div class="g2c-service-card" data-reveal data-delay="0">
                <div class="sc-number">01</div>
                <div class="sc-icon"><i class="fas fa-id-card"></i></div>
                <h4>Aadhaar Correction (OTP)</h4>
                <a href="aadhar-correction" class="service-apply-btn"><i class="fas fa-paper-plane"></i> Apply Now</a>
            </div>
            <!-- Service 2 - Learner's License -->
            <div class="g2c-service-card" data-reveal data-delay="30">
                <div class="sc-number">02</div>
                <div class="sc-icon"><i class="fas fa-graduation-cap"></i></div>
                <h4>Learner's License</h4>
                <a href="#" class="service-apply-btn"><i class="fas fa-paper-plane"></i> Apply Now</a>
            </div>
            <!-- Service 3 - New Passport -->
            <div class="g2c-service-card" data-reveal data-delay="60">
                <div class="sc-number">03</div>
                <div class="sc-icon"><i class="fas fa-passport"></i></div>
                <h4>New Passport Application</h4>
                <a href="passport-application" class="service-apply-btn"><i class="fas fa-paper-plane"></i> Apply Now</a>
            </div>
            <!-- Service 4 - Passport Renewal -->
            <div class="g2c-service-card" data-reveal data-delay="90">
                <div class="sc-number">04</div>
                <div class="sc-icon"><i class="fas fa-sync-alt"></i></div>
                <h4>Renewal of Passport</h4>
                <a href="passport-application" class="service-apply-btn"><i class="fas fa-paper-plane"></i> Apply Now</a>
            </div>
            <!-- Service 5 - Driving License -->
            <div class="g2c-service-card" data-reveal data-delay="120">
                <div class="sc-number">05</div>
                <div class="sc-icon"><i class="fas fa-id-card"></i></div>
                <h4>Driving License</h4>
                <a href="driving-license" class="service-apply-btn"><i class="fas fa-paper-plane"></i> Apply Now</a>
            </div>
            <!-- Service 6 - Driving License Renewal -->
            <div class="g2c-service-card" data-reveal data-delay="150">
                <div class="sc-number">06</div>
                <div class="sc-icon"><i class="fas fa-calendar-alt"></i></div>
                <h4>Renewal of Driving License</h4>
                <a href="driving-license" class="service-apply-btn"><i class="fas fa-paper-plane"></i> Apply Now</a>
            </div>
            <!-- Service 7 - Voter ID -->
            <div class="g2c-service-card" data-reveal data-delay="180">
                <div class="sc-number">07</div>
                <div class="sc-icon"><i class="fas fa-vote-yea"></i></div>
                <h4>Voter ID Application</h4>
                <a href="voter-id-application" class="service-apply-btn"><i class="fas fa-paper-plane"></i> Apply Now</a>
            </div>
            <!-- Service 8 - Caste Certificate -->
            <div class="g2c-service-card" data-reveal data-delay="210">
                <div class="sc-number">08</div>
                <div class="sc-icon"><i class="fas fa-file-alt"></i></div>
                <h4>Caste Certificate</h4>
                <a href="caste-certificate" class="service-apply-btn"><i class="fas fa-paper-plane"></i> Apply Now</a>
            </div>
            <!-- Service 9 - Marriage Certificate -->
            <div class="g2c-service-card" data-reveal data-delay="240">
                <div class="sc-number">09</div>
                <div class="sc-icon"><i class="fas fa-heart"></i></div>
                <h4>Marriage Certificate</h4>
                <a href="marriage-certificate" class="service-apply-btn"><i class="fas fa-paper-plane"></i> Apply Now</a>
            </div>
            <!-- Service 10 - Ration Card -->
            <div class="g2c-service-card" data-reveal data-delay="270">
                <div class="sc-number">10</div>
                <div class="sc-icon"><i class="fas fa-shopping-basket"></i></div>
                <h4>Ration Card Application</h4>
                <a href="ration-card-application" class="service-apply-btn"><i class="fas fa-paper-plane"></i> Apply Now</a>
            </div>
            <!-- Service 11 - Death Certificate -->
            <div class="g2c-service-card" data-reveal data-delay="300">
                <div class="sc-number">11</div>
                <div class="sc-icon"><i class="fas fa-cross"></i></div>
                <h4>Death Certificate</h4>
                <a href="death-certificate" class="service-apply-btn"><i class="fas fa-paper-plane"></i> Apply Now</a>
            </div>
            <!-- Service 12 - Birth Certificate -->
            <div class="g2c-service-card" data-reveal data-delay="330">
                <div class="sc-number">12</div>
                <div class="sc-icon"><i class="fas fa-baby"></i></div>
                <h4>Birth Certificate</h4>
                <a href="birth-certificate" class="service-apply-btn"><i class="fas fa-paper-plane"></i> Apply Now</a>
            </div>
            <!-- Service 13 - PM Kisan -->
            <div class="g2c-service-card" data-reveal data-delay="360">
                <div class="sc-number">13</div>
                <div class="sc-icon"><i class="fas fa-tractor"></i></div>
                <h4>PM Kisan Samman Nidhi</h4>
                <a href="#" class="service-apply-btn"><i class="fas fa-paper-plane"></i> Apply Now</a>
            </div>
            <!-- Service 14 - PM Kisan Maandhan -->
            <div class="g2c-service-card" data-reveal data-delay="390">
                <div class="sc-number">14</div>
                <div class="sc-icon"><i class="fas fa-piggy-bank"></i></div>
                <h4>PM Kisan Maandhan Yojna</h4>
                <a href="#" class="service-apply-btn"><i class="fas fa-paper-plane"></i> Apply Now</a>
            </div>
            <!-- Service 15 - PM Bima Yojna -->
            <div class="g2c-service-card" data-reveal data-delay="420">
                <div class="sc-number">15</div>
                <div class="sc-icon"><i class="fas fa-shield-alt"></i></div>
                <h4>PM Bima Yojna</h4>
                <a href="#" class="service-apply-btn"><i class="fas fa-paper-plane"></i> Apply Now</a>
            </div>
            <!-- Service 16 - E-Shram Card -->
            <div class="g2c-service-card" data-reveal data-delay="450">
                <div class="sc-number">16</div>
                <div class="sc-icon"><i class="fas fa-id-card"></i></div>
                <h4>E-Shram Card</h4>
                <a href="e-shram-card" class="service-apply-btn"><i class="fas fa-paper-plane"></i> Apply Now</a>
            </div>
            <!-- Service 17 - Income Certificate -->
            <div class="g2c-service-card" data-reveal data-delay="480">
                <div class="sc-number">17</div>
                <div class="sc-icon"><i class="fas fa-file-invoice-dollar"></i></div>
                <h4>Income Certificate</h4>
                <a href="income-certificate" class="service-apply-btn"><i class="fas fa-paper-plane"></i> Apply Now</a>
            </div>
            <!-- Service 18 - Domicile Certificate -->
            <div class="g2c-service-card" data-reveal data-delay="510">
                <div class="sc-number">18</div>
                <div class="sc-icon"><i class="fas fa-home"></i></div>
                <h4>Domicile Certificate</h4>
                <a href="#" class="service-apply-btn"><i class="fas fa-paper-plane"></i> Apply Now</a>
            </div>
            <!-- Service 19 - Jeevan Pramaan Patra -->
            <div class="g2c-service-card" data-reveal data-delay="540">
                <div class="sc-number">19</div>
                <div class="sc-icon"><i class="fas fa-fingerprint"></i></div>
                <h4>Jeevan Pramaan Patra</h4>
                <a href="#" class="service-apply-btn"><i class="fas fa-paper-plane"></i> Apply Now</a>
            </div>
            <!-- Service 20 - E-Stamp Paper -->
            <div class="g2c-service-card" data-reveal data-delay="570">
                <div class="sc-number">20</div>
                <div class="sc-icon"><i class="fas fa-stamp"></i></div>
                <h4>E-Stamp Paper</h4>
                <a href="#" class="service-apply-btn"><i class="fas fa-paper-plane"></i> Apply Now</a>
            </div>
        </div>
    </div>
</section>

<!-- ========== CTA SECTION ========== -->
<section class="g2c-cta">
    <div class="cta-orb cta-orb-1"></div>
    <div class="cta-orb cta-orb-2"></div>
    <div class="cta-mesh"></div>
    <div class="cta-sweep"></div>
    <div class="cta-inner">
        <div class="cta-icon-wrap"><div class="cta-icon-ring"></div><i class="fas fa-landmark"></i></div>
        <h2 class="cta-title">Get Your Government Service <span>Done Today</span></h2>
        <p class="cta-sub">Visit your nearest K-Seva center or contact our helpdesk. We are here to guide you through every step of the process quickly and accurately.</p>
        <div class="g2c-cta-btns">
            <a href="#services" class="btn-primary-glow"><span class="btn-shimmer"></span><i class="fas fa-th-large"></i> Browse All Services</a>
            <a href="tel:<?php echo $comp_mobile; ?>" class="btn-glass"><i class="fas fa-phone-alt"></i> Call <?php echo $comp_mobile; ?></a>
        </div>
        <div class="cta-trust">
            <div class="cta-chip"><i class="fas fa-check-circle"></i> 20+ Services</div>
            <div class="cta-chip"><i class="fas fa-shield-alt"></i> Government Approved</div>
            <div class="cta-chip"><i class="fas fa-clock"></i> Quick Assistance</div>
        </div>
    </div>
</section>

</main>

<?php include('includes/footer_1.php'); ?>
<?php include('includes/whats-app.php'); ?>
<?php include('includes/sticky-footer.php'); ?>

<!-- ========== PARTICLE + SCROLL REVEAL + COUNTERS JS ========== -->
<script>
/* Particle Canvas */
(function () {
    const canvas = document.getElementById('g2c-particles');
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

/* Scroll Reveal */
(function () {
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
</script>
</body>
</html>