<?php include('includes/dbConfig.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>Financial Services | K-Seva – Loans, Insurance & Investment Solutions</title>
    <meta name="description" content="Explore comprehensive financial services at K-Seva. From expert insurance consultancy to loan assistance and investment planning, we help you secure your financial future.">
    <meta name="keywords" content="Financial Services, K-Seva Finance, Insurance Consultancy, Loan Assistance, Investment Planning, Digital Finance India, Personal Loan, Business Insurance">
    <meta name="author" content="K-Seva">
    <link rel="canonical" href="https://k-seva.com/financial-services">

    <!-- Open Graph (Facebook, WhatsApp, LinkedIn) -->
    <meta property="og:title" content="Secure Your Future with K-Seva Financial Services">
    <meta property="og:description" content="Professional financial guidance at your fingertips. Discover our range of loan, insurance, and investment services tailored for you.">
    <meta property="og:image" content="https://k-seva.com/assets/images/og-financial.jpg"> <!-- Ensure this image exists -->
    <meta property="og:url" content="https://k-seva.com/financial-services">
    <meta property="og:type" content="website">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="K-Seva Financial Services | Expert Solutions">
    <meta name="twitter:description" content="Get access to trusted financial advice and services including loans and insurance through K-Seva.">
    <meta name="twitter:image" content="https://k-seva.com/assets/images/og-financial.jpg">

    <?php include('includes/header_1.php'); ?>
    
    <!-- Fonts & Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800;900&family=Playfair+Display:ital,wght@0,700;0,900;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/financial-services.css">
</head>
 <body class="fs-body">

<canvas id="fs-particles" aria-hidden="true"></canvas>
<div class="over-menu"></div>
<?php include('includes/navbar_1.php'); ?>

<main class="fs-page">

<!-- ========== HERO BANNER ========== -->
<section class="fs-hero">
    <div class="hero-bg" style="background-image: url('wp-content/uploads/2020/02/FINANCIAL_SERVICES.jpg');"></div>
    <div class="hero-overlay"></div>
    <div class="hero-sweep"></div>
    <div class="hero-orb orb-1"></div>
    <div class="hero-orb orb-2"></div>
    <div class="fs-hero-inner">
        <div class="fs-hero-text" data-reveal>
            <div class="fs-badge">
                <span class="badge-dot"></span>
                <i class="fas fa-chart-line"></i>&nbsp; Financial Services
            </div>
            <h1 class="hero-title">Financial <span class="hero-gradient-text">Services</span></h1>
            <p class="hero-sub">Expert financial solutions for individuals and businesses – from taxation to project reports, we handle it all with precision and care.</p>
        </div>
    </div>
    <div class="hero-bottom-wave"></div>
</section>

<!-- ========== BREADCRUMB ========== -->
<nav class="fs-breadcrumb" aria-label="Breadcrumb">
    <div class="bc-inner">
        <a href="home"><i class="fas fa-home"></i> Home</a>
        <i class="fas fa-chevron-right bc-sep"></i>
        <span>Services</span>
        <i class="fas fa-chevron-right bc-sep"></i>
        <span class="bc-active">Financial Services</span>
    </div>
</nav>

<!-- ========== INTRO TEXT SECTION ========== -->
<section class="fs-intro">
    <div class="intro-deco deco-1"></div>
    <div class="intro-deco deco-2"></div>
    <div class="mt-container">
        <div class="fs-intro-text" data-reveal>
            <div class="sec-tag"><i class="fas fa-university"></i> About This Service</div>
            <h2 class="sec-title">Financial <span>Services</span></h2>
            <div class="sec-divider"><span></span><i class="fas fa-chart-line"></i><span></span></div>
            <p>Financial services refer to the various money-related services offered by the financial industry. These services are provided by different types of institutions that help people and businesses manage, invest, borrow, and protect their money.</p>
            <p>The financial sector includes organizations such as banks, credit unions, credit card companies, insurance providers, accounting firms, consumer finance companies, stock brokerage firms, investment funds, financial advisors, and certain government-supported institutions. These organizations play an important role in managing financial transactions and supporting economic activities.</p>

                      <!-- 🆕 Extra lines to balance height with form -->
            <p>At K-Seva, we bring these essential financial services directly to your doorstep. Whether you need to open a savings account, apply for a loan, file insurance claims, or invest in mutual funds, our trained partners guide you through the entire process with complete transparency.</p>
            <div class="intro-pills">
                <span class="pill pill-blue"><i class="fas fa-shield-alt"></i> Trusted</span>
                <span class="pill pill-green"><i class="fas fa-chart-line"></i> Expert</span>
                <span class="pill pill-gold"><i class="fas fa-clock"></i> 24×7 Support</span>
                <span class="pill pill-navy"><i class="fas fa-rupee-sign"></i> Affordable</span>
            </div>
        </div>

         <?php 
        $current_page_name = "Financial Services";
        $current_service_category = "financial_services";
        include('includes/enquiry_form.php'); 
        ?>
        
    </div>
</section>

<!-- ========== SERVICES GRID – 5 COLUMNS ========== -->
<section class="fs-services-grid">
    <div class="mt-container">
        <div class="mt-sec-head" data-reveal>
            <div class="sh-tag sh-tag-blue"><i class="fas fa-star"></i> Our Offerings</div>
            <h2 class="sec-title">Complete <span>Financial Solutions</span></h2>
            <p class="sec-sub">A wide range of financial services to meet your every need – from registration to certification</p>
        </div>

        <div class="services-grid-wrapper">
            <div class="services-grid" id="servicesGrid">
                <!-- Card 1 -->
                <div class="service-card" data-reveal data-delay="0">
                    <div class="card-img"><img src="assets/images/services/financial-service/TDS_Return_Filing.jpg" alt="TDS Return Filing"></div>
                    <div class="card-content">
                        <h3><i class="fas fa-star"></i> TDS Return Filing</h3>
                        <a href="#" class="card-btn">Apply Now <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div class="card-glow"></div>
                    <div class="card-shine"></div>
                </div>
                <!-- Card 2 -->
                <div class="service-card" data-reveal data-delay="50">
                    <div class="card-img"><img src="assets/images/services/financial-service/TAN_registration.jpg" alt="TAN Registration"></div>
                    <div class="card-content">
                        <h3><i class="fas fa-star"></i> TAN Registration</h3>
                        <a href="#" class="card-btn">Apply Now <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div class="card-glow"></div>
                    <div class="card-shine"></div>
                </div>
                <!-- Card 3 -->
                <div class="service-card" data-reveal data-delay="100">
                    <div class="card-img"><img src="assets/images/services/financial-service/Profession_Tax_Registration.jpg" alt="Profession Tax Registration"></div>
                    <div class="card-content">
                        <h3><i class="fas fa-star"></i> Profession Tax Registration</h3>
                        <a href="#" class="card-btn">Apply Now <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div class="card-glow"></div>
                    <div class="card-shine"></div>
                </div>
                <!-- Card 4 -->
                <div class="service-card" data-reveal data-delay="150">
                    <div class="card-img"><img src="assets/images/services/financial-service/Profession_Tax_Returns.jpg" alt="Profession Tax Returns"></div>
                    <div class="card-content">
                        <h3><i class="fas fa-star"></i> Profession Tax Returns</h3>
                        <a href="#" class="card-btn">Apply Now <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div class="card-glow"></div>
                    <div class="card-shine"></div>
                </div>
                <!-- Card 5 -->
                <div class="service-card" data-reveal data-delay="200">
                    <div class="card-img"><img src="assets/images/services/financial-service/subservice89.png" alt="Net-worth Certificate"></div>
                    <div class="card-content">
                        <h3><i class="fas fa-star"></i> Net-worth Certificate</h3>
                        <a href="#" class="card-btn">Apply Now <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div class="card-glow"></div>
                    <div class="card-shine"></div>
                </div>
                <!-- Card 6 -->
                <div class="service-card" data-reveal data-delay="250">
                    <div class="card-img"><img src="assets/images/services/financial-service/subservice90.png" alt="Income Certificate"></div>
                    <div class="card-content">
                        <h3><i class="fas fa-star"></i> Income Certificate</h3>
                        <a href="#" class="card-btn">Apply Now <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div class="card-glow"></div>
                    <div class="card-shine"></div>
                </div>
                <!-- Card 7 -->
                <div class="service-card" data-reveal data-delay="300">
                    <div class="card-img"><img src="assets/images/services/financial-service/Business_Plan_and_Project_Report.jpg" alt="Business Plan and Project Report"></div>
                    <div class="card-content">
                        <h3><i class="fas fa-star"></i> Business Plan & Project Report</h3>
                        <a href="#" class="card-btn">Apply Now <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div class="card-glow"></div>
                    <div class="card-shine"></div>
                </div>
                <!-- Card 8 -->
                <div class="service-card" data-reveal data-delay="350">
                    <div class="card-img"><img src="assets/images/services/financial-service/subservice90.png" alt="Income Confirmation Certificate"></div>
                    <div class="card-content">
                        <h3><i class="fas fa-star"></i> Income Confirmation Certificate</h3>
                        <a href="#" class="card-btn">Apply Now <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div class="card-glow"></div>
                    <div class="card-shine"></div>
                </div>
                <!-- Card 9 -->
                <div class="service-card" data-reveal data-delay="400">
                    <div class="card-img"><img src="assets/images/services/financial-service/Book-Keeping-and-Accounting-Services.jpg" alt="Book-Keeping and Accounting Services"></div>
                    <div class="card-content">
                        <h3><i class="fas fa-star"></i> Book-Keeping & Accounting</h3>
                        <a href="#" class="card-btn">Apply Now <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div class="card-glow"></div>
                    <div class="card-shine"></div>
                </div>
                <!-- Card 10 -->
                <div class="service-card" data-reveal data-delay="450">
                    <div class="card-img"><img src="assets/images/services/financial-service/Turnover_Certificate.jpg" alt="Turnover Certificate"></div>
                    <div class="card-content">
                        <h3><i class="fas fa-star"></i> Turnover Certificate</h3>
                        <a href="#" class="card-btn">Apply Now <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div class="card-glow"></div>
                    <div class="card-shine"></div>
                </div>
                <!-- Card 11 -->
                <div class="service-card" data-reveal data-delay="500">
                    <div class="card-img"><img src="assets/images/services/financial-service/subservice91.png" alt="Current Account Opening Certificate"></div>
                    <div class="card-content">
                        <h3><i class="fas fa-star"></i> Current Account Opening Certificate</h3>
                        <a href="#" class="card-btn">Apply Now <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div class="card-glow"></div>
                    <div class="card-shine"></div>
                </div>
                <!-- Card 12 -->
                <div class="service-card" data-reveal data-delay="550">
                    <div class="card-img"><img src="assets/images/services/financial-service/subservice88.png" alt="CMA Data"></div>
                    <div class="card-content">
                        <h3><i class="fas fa-star"></i> CMA Data</h3>
                        <a href="#" class="card-btn">Apply Now <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div class="card-glow"></div>
                    <div class="card-shine"></div>
                </div>
                <!-- Card 13 -->
                <div class="service-card" data-reveal data-delay="600">
                    <div class="card-img"><img src="assets/images/services/financial-service/subservice87.png" alt="Project Report"></div>
                    <div class="card-content">
                        <h3><i class="fas fa-star"></i> Project Report</h3>
                        <a href="#" class="card-btn">Apply Now <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div class="card-glow"></div>
                    <div class="card-shine"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========== CALL TO ACTION ========== -->
<section class="fs-cta">
    <div class="cta-bg-mesh"></div>
    <div class="cta-orb"></div>
    <div class="mt-container">
        <div class="cta-content" data-reveal>
            <h2>Ready to grow your business?</h2>
            <p>Let our financial experts guide you through every step – from compliance to capital.</p>
            <a href="#enquire" class="btn-primary-glow"><span class="btn-shimmer"></span><i class="fas fa-paper-plane"></i> Enquire Now</a>
        </div>
    </div>
</section>

</main>

<?php include('includes/footer_1.php'); ?>
<?php include('includes/whats-app.php'); ?>
<?php include('includes/sticky-footer.php'); ?>

<!-- Particle + Scroll Reveal Scripts -->
<script>
(function () {
    const canvas = document.getElementById('fs-particles');
    if (!canvas) return;
    const ctx = canvas.getContext('2d');
    let W, H;
    const COLORS = ['#23adeb','#fed109','#64ba4d','#ffffff','#003b66','#87ceeb'];
    const COUNT = 75;
    const particles = [];
    function resize() { W = canvas.width = window.innerWidth; H = canvas.height = window.innerHeight; }
    resize();
    window.addEventListener('resize', resize, { passive: true });
    function rand(a, b) { return a + Math.random() * (b - a); }
    class Particle {
        constructor() { this.reset(true); }
        reset(init) {
            this.x = rand(0, W); this.y = init ? rand(0, H) : H + 10;
            this.r = rand(0.8, 3.2); this.alpha = 0; this.maxA = rand(0.4, 0.9);
            this.speed = rand(0.005, 0.015); this.dir = 1;
            this.color = COLORS[Math.floor(Math.random() * COLORS.length)];
            this.vx = rand(-0.15, 0.15); this.vy = rand(-0.4, -0.1);
            this.phase = rand(0, Math.PI * 2);
            this.type = Math.random() > 0.5 ? 'star' : 'circle';
        }
        draw(t) {
            const flicker = 0.5 + 0.5 * Math.sin(t * 0.004 + this.phase);
            ctx.save();
            ctx.globalAlpha = this.alpha * flicker;
            ctx.fillStyle = this.color;
            ctx.shadowBlur = this.r * 12;
            ctx.shadowColor = this.color;
            if (this.type === 'star') {
                const r = this.r;
                ctx.beginPath();
                for (let i = 0; i < 8; i++) {
                    const ang = (i * Math.PI) / 4;
                    const len = i % 2 === 0 ? r * 2.5 : r;
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
            this.x += this.vx; this.y += this.vy;
            if (this.x < -20) this.x = W + 20;
            if (this.x > W + 20) this.x = -20;
            if (this.y < -20) this.reset(false);
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