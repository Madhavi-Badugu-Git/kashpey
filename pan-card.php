<?php include('includes/dbConfig.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>PAN Card Services | K-Seva – Apply for PAN Card Online</title>
    <meta name="description" content="K-Seva offers PAN Card services – new application, correction, duplicate, e-PAN, NRI PAN, business PAN, and PAN-Aadhaar linking. Authorized UTI direct access agent.">
    <meta name="keywords" content="PAN Card, Apply PAN Card Online, PAN Correction, e-PAN, PAN Aadhaar Linking, NRI PAN, K-Seva">
    <meta name="author" content="K-Seva">
    <link rel="canonical" href="https://k-seva.com/pan-card">

    <!-- Open Graph -->
    <meta property="og:title" content="PAN Card Services | K-Seva">
    <meta property="og:description" content="Authorized PAN Card agent with UTI direct access. Apply for new PAN, correction, duplicate, e-PAN, and more. Fast and reliable service.">
    <meta property="og:image" content="https://k-seva.com/assets/images/og-pan-card.jpg">
    <meta property="og:url" content="https://k-seva.com/pan-card">
    <meta property="og:type" content="website">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="K-Seva PAN Card – Apply & Update Online">
    <meta name="twitter:description" content="Expert assistance for all PAN Card services – new, correction, duplicate, e-PAN. Authorized UTI agent.">
    <meta name="twitter:image" content="https://k-seva.com/assets/images/og-pan-card.jpg">

    <?php include('includes/header_1.php'); ?>
    
    <!-- Fonts & Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800;900&family=Playfair+Display:ital,wght@0,700;0,900;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/pan-card.css">
</head>

<body class="pan-body">

<canvas id="pan-particles" aria-hidden="true"></canvas>
<div class="over-menu"></div>
<?php include('includes/navbar_1.php'); ?>

<main class="pan-page">

<!-- ========== HERO SECTION ========== -->
<section class="pan-hero">
    <div class="hero-orb orb-1"></div>
    <div class="hero-orb orb-2"></div>
    <div class="hero-orb orb-3"></div>
    <div class="hero-mesh"></div>
    <div class="hero-sweep"></div>
    <div class="pan-hero-inner">
        <div class="pan-hero-text" data-reveal>
            <div class="pan-badge"><span class="badge-dot"></span><i class="fas fa-id-card"></i>&nbsp; K-Seva PAN Services</div>
            <h1 class="hero-title">PAN Card <span class="hero-gradient-text">Services</span></h1>
            <p class="hero-sub">Become an Authorized PAN Card Agent with UTI Direct Access. A complete solution for all PAN Card related needs — new applications, corrections, duplicates, e-PAN and more.</p>
            <div class="pan-hero-btns">
                <a href="#enquire" class="btn-primary-glow"><span class="btn-shimmer"></span><i class="fas fa-id-card"></i><span>Apply Now</span></a>
                <a href="#services" class="btn-glass"><i class="fas fa-th-large"></i><span>View Services</span></a>
            </div>
            <div class="hero-trust">
                <div class="trust-badge"><i class="fas fa-check-circle"></i> Authorized Agent</div>
                <div class="trust-badge"><i class="fas fa-clock"></i> Fast Processing</div>
                <div class="trust-badge"><i class="fas fa-shield-alt"></i> UTI Direct Access</div>
            </div>
        </div>
        <div class="pan-hero-card" data-reveal data-delay="200">
            <div class="card-glow-ring"></div>
            <div class="hc-header">
                <div class="hc-pulse-dot"></div>
                <span class="hc-title">PAN Card Services Overview</span>
                <span class="hc-live-badge">LIVE</span>
            </div>
            <div class="pan-stat-row">
                <div class="pan-stat"><div class="pan-stat-num c-emerald">7+</div><div class="pan-stat-lbl">Services Available</div></div>
                <div class="pan-stat"><div class="pan-stat-num c-emerald">UTI</div><div class="pan-stat-lbl">Direct Access</div></div>
                <div class="pan-stat"><div class="pan-stat-num c-emerald">Fast</div><div class="pan-stat-lbl">Processing</div></div>
                <div class="pan-stat"><div class="pan-stat-num c-emerald">Official</div><div class="pan-stat-lbl">Authorized Agent</div></div>
            </div>
            <div class="pan-hero-tag">
                <div class="hst-icon"><i class="fas fa-shield-alt"></i></div>
                <div class="hst-text">
                    <div class="hst-num">Authorized PAN Card Agent</div>
                    <div class="hst-lbl">UTI Direct Access — Official and Trusted</div>
                </div>
            </div>
            <div class="card-shimmer"></div>
        </div>
    </div>
</section>



<!-- BREADCRUMB -->
<nav class="pan-breadcrumb" aria-label="Breadcrumb"><div class="bc-inner"><a href="home"><i class="fas fa-home"></i> Home</a><i class="fas fa-chevron-right bc-sep"></i><span>Services</span><i class="fas fa-chevron-right bc-sep"></i><span class="bc-active">PAN Card Services</span></div></nav>

<!-- ========== INTRO & CONTACT SECTION ========== -->
<section class="pan-intro" id="enquire">
    <div class="intro-deco deco-1"></div>
    <div class="intro-deco deco-2"></div>
    <div class="pan-container">
        <div class="pan-intro-text" data-reveal>
            <div class="sec-tag"><i class="fas fa-info-circle"></i> About This Service</div>
            <h2 class="sec-title" style="color: #00335a">What Is a <span>PAN Card?</span></h2>
            <div class="sec-divider"><span></span><i class="fas fa-id-card"></i><span></span></div>
            <p>A PAN Card (Permanent Account Number) is a unique 10-digit alphanumeric number issued by the Income Tax Department of India under the Government of India. It is an important identity for financial and tax-related activities in India.</p>
            <p>The PAN card helps the government keep track of financial transactions and prevents tax fraud. Today, it is one of the most important documents required for individuals, businesses, and organizations.</p>
            <p>At K-Seva, we help you apply for a new PAN card, make corrections, or update your details quickly and easily. We are an authorized UTI Direct Access agent for all PAN Card services.</p>
            <!-- NEW CATEGORY BADGES -->
            <div class="intro-categories">
                <div class="cat-badge"><i class="fas fa-id-card"></i> New PAN Card</div>
                <div class="cat-badge"><i class="fas fa-edit"></i> PAN Correction</div>
                <div class="cat-badge"><i class="fas fa-copy"></i> Duplicate PAN</div>
                <div class="cat-badge"><i class="fas fa-download"></i> e-PAN</div>
                <div class="cat-badge"><i class="fas fa-link"></i> PAN-Aadhaar Link</div>
                <div class="cat-badge"><i class="fas fa-building"></i> Business PAN</div>
            </div>
        </div>

        <!-- ENQUIRY FORM – premium card (same as money transfer) -->
        <?php 
        $current_page_name = "PAN Card";
        $current_service_category = "pan_card";
        include('includes/enquiry_form.php'); 
        ?>
    </div>
</section>



<!-- ========== IMPORTANCE & INFO SECTION ========== -->
<section class="pan-content">
    <div class="pan-container">
        <div class="pan-content-grid">
            <div class="pan-content-block" data-reveal>
                <h2>Why is PAN Card Important?</h2>
                <p>A PAN card is required for many financial and official activities such as:</p>
                <ul>
                    <li><i class="fas fa-check-circle"></i> Opening a bank account</li>
                    <li><i class="fas fa-check-circle"></i> Starting a business or company registration</li>
                    <li><i class="fas fa-check-circle"></i> Filing income tax returns</li>
                    <li><i class="fas fa-check-circle"></i> Receiving large payments or making big purchases</li>
                    <li><i class="fas fa-check-circle"></i> Applying for loans or credit cards</li>
                    <li><i class="fas fa-check-circle"></i> Investing in mutual funds or stocks</li>
                </ul>
                <div class="pan-highlight">
                    <i class="fas fa-info-circle"></i> PAN Card is mandatory for all financial transactions above ₹50,000.
                </div>
            </div>
            <div class="pan-content-block" data-reveal data-delay="100">
                <h2>Information on PAN Card</h2>
                <p>A PAN card generally contains the following details:</p>
                <ul>
                    <li><i class="fas fa-user"></i> <strong>Full Name</strong> of the Applicant</li>
                    <li><i class="fas fa-user-friends"></i> <strong>Father's Name</strong> (for individuals)</li>
                    <li><i class="fas fa-calendar-alt"></i> <strong>Date of Birth</strong></li>
                    <li><i class="fas fa-hashtag"></i> <strong>PAN Number</strong> – 10 digit alphanumeric</li>
                    <li><i class="fas fa-camera"></i> <strong>Photograph</strong> and Signature</li>
                    <li><i class="fas fa-qrcode"></i> <strong>QR Code</strong> for verification</li>
                </ul>
                <p>The PAN card also works as a valid identity proof, age proof, and financial identity.</p>
            </div>
        </div>
    </div>
</section>

<!-- ========== PAN STRUCTURE SECTION ========== -->
<section class="pan-structure">
    <div class="structure-bg"></div>
    <div class="pan-container">
        <div class="pan-sec-head" data-reveal>
            <div class="sh-tag sh-tag-green"><i class="fas fa-id-card"></i> PAN Card Details</div>
            <h2 class="sec-title light">Structure of <span>PAN Card Number</span></h2>
            <p class="sec-sub light">A PAN Card contains a 10-character alphanumeric number (for example: ABCDE1234F). Each character has a specific meaning</p>
        </div>
        <div class="pan-struct-layout">
            <div class="pan-struct-visual" data-reveal>
                <div class="pan-struct-img-placeholder">
                    <i class="fas fa-id-card"></i>
                    <div class="placeholder-text">PAN Card Sample</div>
                    <div class="pan-number-demo">A B C D E 1 2 3 4 F</div>
                </div>
                <div class="pan-fourth-letter">
                    <h4>4th Letter — Taxpayer Category</h4>
                    <div class="pan-letter-grid">
                        <div class="pan-letter-item"><span class="li-letter">A</span> Association of Persons</div>
                        <div class="pan-letter-item"><span class="li-letter">B</span> Body of Individuals</div>
                        <div class="pan-letter-item"><span class="li-letter">C</span> Company</div>
                        <div class="pan-letter-item"><span class="li-letter">F</span> Firm</div>
                        <div class="pan-letter-item"><span class="li-letter">G</span> Government</div>
                        <div class="pan-letter-item"><span class="li-letter">H</span> HUF</div>
                        <div class="pan-letter-item"><span class="li-letter">L</span> Local Authority</div>
                        <div class="pan-letter-item"><span class="li-letter">J</span> Artificial Judicial Person</div>
                        <div class="pan-letter-item"><span class="li-letter">P</span> Individual</div>
                        <div class="pan-letter-item"><span class="li-letter">T</span> Trust</div>
                    </div>
                </div>
            </div>
            <div class="pan-struct-details" data-reveal data-delay="100">
                <h3>PAN Card Number Breakdown</h3>
                <div class="detail-item">
                    <div class="di-dot"></div>
                    <p><b>First Five Characters (Letters)</b> — The first three are random letters from A to Z. The fourth letter represents the category of taxpayer. The fifth letter is the first letter of the cardholder's surname.</p>
                </div>
                <div class="detail-item">
                    <div class="di-dot"></div>
                    <p><b>Next Four Characters (Numbers)</b> — These are sequential numbers ranging from 0001 to 9999, uniquely assigned to the cardholder.</p>
                </div>
                <div class="detail-item">
                    <div class="di-dot"></div>
                    <p><b>Last Character (Letter)</b> — This is an alphabetic check digit used for verification purposes.</p>
                </div>
                <div class="detail-item">
                    <div class="di-dot"></div>
                    <p><b>Example: ABCDE1234F</b><br>ABC - Random letters<br>D - Category (Individual)<br>E - First letter of surname<br>1234 - Unique numbers<br>F - Verification character</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========== DETAILED INFO SECTION ========== -->
<section class="pan-details">
    <div class="pan-container">
        <div class="pan-details-grid">
            <div class="pan-detail-block" data-reveal>
                <h3><i class="fas fa-user"></i> Name of the Cardholder</h3>
                <p>The PAN Card shows the full name of the person or the name of the company or organization that owns the card.</p>
                <h3><i class="fas fa-user-friends"></i> Father's Name</h3>
                <p>For individuals, the father's name is also printed on the card along with the holder's details.</p>
                <h3><i class="fas fa-calendar-alt"></i> Date of Birth / Registration</h3>
                <p>For individuals, the card displays the date of birth. For companies or firms, the date of registration is shown.</p>
            </div>
            <div class="pan-detail-block" data-reveal data-delay="100">
                <h3><i class="fas fa-hashtag"></i> PAN Number</h3>
                <p>Every PAN Card has a unique 10-character alphanumeric number that contains important information about the cardholder.</p>
                <h3><i class="fas fa-signature"></i> Signature</h3>
                <p>The PAN Card also includes the signature of the individual, which can be used as a valid signature proof.</p>
                <h3><i class="fas fa-camera"></i> Photograph</h3>
                <p>For individuals, the PAN Card includes a photograph, making it a valid photo identity proof.</p>
                <div class="pan-highlight">
                    <i class="fas fa-check-circle"></i> <strong>Note:</strong> This number remains permanent for lifetime and does not change even if your address or city changes.
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========== SERVICES GRID SECTION ========== -->
<section class="pan-services" id="services">
    <div class="services-deco-1"></div>
    <div class="services-deco-2"></div>
    <div class="pan-container">
        <div class="pan-sec-head" data-reveal>
            <div class="sh-tag sh-tag-green"><i class="fas fa-th-large"></i> Our PAN Services</div>
            <h2 class="sec-title" style="color: #00335a;">All PAN Card <span>Services</span></h2>
            <p class="sec-sub">Click on any service below to apply or get more information from our experts</p>
        </div>
        <div class="pan-services-grid">
            <div class="pan-service-card" data-reveal data-delay="0">
                <div class="sc-number">01</div>
                <div class="sc-icon"><i class="fas fa-file-alt"></i></div>
                <h4>PAN Card – New Application</h4>
                <a href="#" class="service-apply-btn"><i class="fas fa-paper-plane"></i> Apply Now</a>
            </div>
            <div class="pan-service-card" data-reveal data-delay="30">
                <div class="sc-number">02</div>
                <div class="sc-icon"><i class="fas fa-edit"></i></div>
                <h4>PAN Card – Correction Application</h4>
                <a href="#" class="service-apply-btn"><i class="fas fa-paper-plane"></i> Apply Now</a>
            </div>
            <div class="pan-service-card" data-reveal data-delay="60">
                <div class="sc-number">03</div>
                <div class="sc-icon"><i class="fas fa-copy"></i></div>
                <h4>PAN Card – Duplicate / Reprint</h4>
                <a href="#" class="service-apply-btn"><i class="fas fa-paper-plane"></i> Apply Now</a>
            </div>
            <div class="pan-service-card" data-reveal data-delay="90">
                <div class="sc-number">04</div>
                <div class="sc-icon"><i class="fas fa-globe-asia"></i></div>
                <h4>PAN Card – NRI PAN</h4>
                <a href="#" class="service-apply-btn"><i class="fas fa-paper-plane"></i> Apply Now</a>
            </div>
            <div class="pan-service-card" data-reveal data-delay="120">
                <div class="sc-number">05</div>
                <div class="sc-icon"><i class="fas fa-building"></i></div>
                <h4>PAN Card – Business / Company</h4>
                <a href="#" class="service-apply-btn"><i class="fas fa-paper-plane"></i> Apply Now</a>
            </div>
            <div class="pan-service-card" data-reveal data-delay="150">
                <div class="sc-number">06</div>
                <div class="sc-icon"><i class="fas fa-download"></i></div>
                <h4>E-PAN Card (Instant)</h4>
                <a href="#" class="service-apply-btn"><i class="fas fa-paper-plane"></i> Apply Now</a>
            </div>
            <div class="pan-service-card" data-reveal data-delay="180">
                <div class="sc-number">07</div>
                <div class="sc-icon"><i class="fas fa-link"></i></div>
                <h4>PAN – Aadhaar Linking</h4>
                <a href="#" class="service-apply-btn"><i class="fas fa-paper-plane"></i> Apply Now</a>
            </div>
            <div class="pan-service-card" data-reveal data-delay="210">
                <div class="sc-number">08</div>
                <div class="sc-icon"><i class="fas fa-sync-alt"></i></div>
                <h4>PAN Details Update / Correction</h4>
                <a href="#" class="service-apply-btn"><i class="fas fa-paper-plane"></i> Apply Now</a>
            </div>
        </div>
        <div class="pan-services-note" data-reveal>
            <p>At K-Seva, we provide simple and quick assistance for all PAN Card services. Our team guides you through the process and ensures your application is submitted correctly.</p>
        </div>
    </div>
</section>

<!-- ========== CTA SECTION ========== -->
<section class="pan-cta">
    <div class="cta-orb cta-orb-1"></div>
    <div class="cta-orb cta-orb-2"></div>
    <div class="cta-mesh"></div>
    <div class="cta-sweep"></div>
    <div class="cta-inner">
        <div class="cta-icon-wrap"><div class="cta-icon-ring"></div><i class="fas fa-id-card"></i></div>
        <h2 class="cta-title">Apply for Your <span>PAN Card Today</span></h2>
        <p class="cta-sub">K-Seva is an authorized UTI Direct Access agent for all PAN Card services. Our experts will guide you through the application process quickly, accurately and without any hassle.</p>
        <div class="pan-cta-btns">
            <a href="#services" class="btn-primary-glow"><span class="btn-shimmer"></span><i class="fas fa-th-large"></i> Browse All Services</a>
            <a href="tel:<?php echo $comp_mobile; ?>" class="btn-glass"><i class="fas fa-phone-alt"></i> Call Helpline</a>
        </div>
        <div class="cta-trust">
            <div class="cta-chip"><i class="fas fa-check-circle"></i> Authorized Agent</div>
            <div class="cta-chip"><i class="fas fa-shield-alt"></i> UTI Direct Access</div>
            <div class="cta-chip"><i class="fas fa-clock"></i> Quick Assistance</div>
        </div>
    </div>
</section>

</main>

<?php include('includes/footer_1.php'); ?>
<?php include('includes/whats-app.php'); ?>
<?php include('includes/sticky-footer.php'); ?>

<!-- ========== PARTICLE + SCROLL REVEAL + COUNTERS ========== -->
<script>
/* Particle Canvas (same as money transfer, using #pan-particles) */
(function () {
    const canvas = document.getElementById('pan-particles');
    if (!canvas) return;
    const ctx = canvas.getContext('2d');
    let W, H;
    const COLORS = ['#10b981','#23adeb','#fed109','#64ba4d','#003b66','#87ceeb'];
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

/* Scroll Reveal (data-reveal) */
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