<?php include('includes/dbConfig.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>Domestic Money Transfer | K-Seva – Instant Bank Remittance</title>
    <meta name="description" content="Send money instantly to any bank account across India with K-Seva. Our Domestic Money Transfer (DMT) service is secure, fast, and available 24/7 via IMPS and NEFT.">
    <meta name="keywords" content="Domestic Money Transfer, DMT Service, Instant Money Transfer India, Cash to Bank, IMPS Money Transfer, NEFT Remittance, K-Seva Banking">
    <meta name="author" content="K-Seva">
    <link rel="canonical" href="https://k-seva.com/money-transfer">

    <!-- Open Graph (Facebook, WhatsApp, LinkedIn) -->
    <meta property="og:title" content="Instant Domestic Money Transfer | K-Seva">
    <meta property="og:description" content="Need to send money fast? Use K-Seva's DMT service for secure and instant transfers to any bank account in India. Reliable, 24/7 service.">
    <meta property="og:image" content="https://k-seva.com/assets/images/og-money-transfer.jpg"> <!-- Ensure this image exists -->
    <meta property="og:url" content="https://k-seva.com/money-transfer">
    <meta property="og:type" content="website">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="K-Seva DMT | Fast Domestic Money Transfer">
    <meta name="twitter:description" content="Transfer funds instantly with K-Seva. Secure, paperless, and real-time bank transfers available nationwide.">
    <meta name="twitter:image" content="https://k-seva.com/assets/images/og-money-transfer.jpg">

    <?php include('includes/header_1.php'); ?>
    
    <!-- Fonts & Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800;900&family=Playfair+Display:ital,wght@0,700;0,900;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/money-transfer.css">
   
</head>

<body class="mt-body">

<canvas id="mt-particles" aria-hidden="true"></canvas>
<div class="over-menu"></div>
<?php include('includes/navbar_1.php'); ?>

<main class="mt-page">

<!-- HERO SECTION (unchanged – already stunning) -->
<section class="mt-hero">
    <div class="hero-orb orb-1"></div>
    <div class="hero-orb orb-2"></div>
    <div class="hero-orb orb-3"></div>
    <div class="hero-mesh"></div>
    <div class="hero-sweep"></div>
    <div class="mt-hero-inner">
        <div class="mt-hero-text" data-reveal>
            <div class="mt-badge"><span class="badge-dot"></span><i class="fas fa-paper-plane"></i>&nbsp; K-Seva Money Transfer</div>
            <h1 class="hero-title">Send Money<br><span class="hero-gradient-text">Instantly & Safely</span></h1>
            <p class="hero-sub">Send money to any bank account in India within minutes. No bank visit needed — just walk into your nearest K-Seva center and transfer instantly.</p>
            <div class="mt-hero-btns">
                <a href="#enquire" class="btn-primary-glow"><span class="btn-shimmer"></span><i class="fas fa-paper-plane"></i><span>Enquire Now</span></a>
                <a href="#how-it-works" class="btn-glass"><i class="fas fa-play-circle"></i><span>How It Works</span></a>
            </div>
            <div class="hero-trust">
                <div class="trust-badge"><i class="fas fa-shield-alt"></i> 100% Secure</div>
                <div class="trust-badge"><i class="fas fa-clock"></i> 24×7 Available</div>
                <div class="trust-badge"><i class="fas fa-university"></i> All Banks</div>
            </div>
        </div>
        <div class="mt-hero-card" data-reveal data-delay="200">
            <div class="card-glow-ring"></div>
            <div class="hc-header">
                <div class="hc-pulse-dot"></div>
                <span class="hc-title">Live Transfer Stats</span>
                <span class="hc-live-badge">LIVE</span>
            </div>
            <div class="mt-stat-row">
                <div class="mt-stat"><div class="mt-stat-num c-blue">60 Cr+</div><div class="mt-stat-lbl">Indians Using Digital Banking</div></div>
                <div class="mt-stat"><div class="mt-stat-num c-green">24×7</div><div class="mt-stat-lbl">Service Available</div></div>
                <div class="mt-stat"><div class="mt-stat-num c-gold">All Banks</div><div class="mt-stat-lbl">Supported Nationwide</div></div>
                <div class="mt-stat"><div class="mt-stat-num c-white">Instant</div><div class="mt-stat-lbl">Transfer Speed</div></div>
            </div>
            <div class="mt-transfer-demo">
                <div class="td-node td-from"><div class="td-icon"><i class="fas fa-user"></i></div><div class="td-label">You</div><div class="td-val">K-Seva Center</div></div>
                <div class="td-flow"><div class="flow-line"><div class="flow-particle p1"></div><div class="flow-particle p2"></div><div class="flow-particle p3"></div></div><div class="flow-arrow"><i class="fas fa-arrow-right"></i></div><div class="flow-label">Instant</div></div>
                <div class="td-node td-to"><div class="td-icon"><i class="fas fa-university"></i></div><div class="td-label">Family</div><div class="td-val">Any Bank in India</div></div>
            </div>
            <div class="card-shimmer"></div>
        </div>
    </div>
</section>

<!-- BREADCRUMB -->
<nav class="mt-breadcrumb" aria-label="Breadcrumb"><div class="bc-inner"><a href="home"><i class="fas fa-home"></i> Home</a><i class="fas fa-chevron-right bc-sep"></i><span>Services</span><i class="fas fa-chevron-right bc-sep"></i><span class="bc-active">Money Transfer</span></div></nav>

<!-- ========== INTRO SECTION – FIXED CONTACT CARD LAYOUT ========== -->
<section class="mt-intro" >
    <div class="intro-deco deco-1"></div>
    <div class="intro-deco deco-2"></div>
    <div class="mt-container">
        <div class="mt-intro-text" data-reveal>
            <div class="sec-tag"><i class="fas fa-exchange-alt"></i> About This Service</div>
            <h2 class="sec-title" style="color: #00335a">Domestic <span>Money Transfer</span></h2>
            <div class="sec-divider"><span></span><i class="fas fa-paper-plane"></i><span></span></div>
            <p>Domestic Money Transfer allows people to send cash to any bank account in India using just a mobile number. You do not need to visit a bank branch or fill long forms.</p>
            <p>With K-Seva, you can transfer money within minutes from your nearest service point. This service is very helpful for workers, daily wage earners, and small business owners who want to send their daily income safely to their loved ones.</p>
            <p>Fund transfers are now made easy with Cash to Account. Walk in to any K-Seva center, provide a few details and have the money transferred to your loved ones, anywhere in the country.</p>
            <div class="intro-pills">
                <span class="pill pill-blue"><i class="fas fa-bolt"></i> Instant</span>
                <span class="pill pill-green"><i class="fas fa-lock"></i> Secure</span>
                <span class="pill pill-gold"><i class="fas fa-globe-asia"></i> Pan India</span>
                <span class="pill pill-navy"><i class="fas fa-calendar-check"></i> 365 Days</span>
            </div>
        </div>

        <!-- ENQUIRY FORM CARD – Premium with Glitter & Glow -->
        <div id="enquire">
        
        <?php 
        $current_page_name = "Money Transfer";
        $current_service_category = "money_transfer";
        include('includes/enquiry_form.php'); 
        ?>
         </div>
    </div>
</section>

<!-- ═══════════════════════════════════════
     WHY CHOOSE SECTION
════════════════════════════════════════ -->
<section class="mt-why">
    <div class="why-bg-mesh"></div>
    <div class="why-sweep"></div>

    <div class="mt-container">
        <div class="mt-sec-head" data-reveal>
            <div class="sh-tag">
                <i class="fas fa-star"></i> Why Choose K-Seva
            </div>
            <h2 class="sec-title light">Why Choose K-Seva <span>Money Transfer</span></h2>
            <p class="sec-sub light">Everything you need to send money quickly, safely and conveniently</p>
        </div>

        <div class="mt-why-grid">

            <div class="mt-why-card" data-reveal data-delay="0">
                <div class="wc-glow glow-blue"></div>
                <div class="wc-icon-wrap icon-blue">
                    <div class="wc-icon-ring"></div>
                    <i class="fas fa-bolt"></i>
                </div>
                <h3>Instant Transfer</h3>
                <p>Send money to any bank account in minutes. No long waiting periods or processing delays.</p>
                <div class="wc-shine"></div>
            </div>

            <div class="mt-why-card" data-reveal data-delay="80">
                <div class="wc-glow glow-green"></div>
                <div class="wc-icon-wrap icon-green">
                    <div class="wc-icon-ring"></div>
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <h3>No Bank Visit Needed</h3>
                <p>Transfer money easily from your nearest K-Seva center without going to any bank branch.</p>
                <div class="wc-shine"></div>
            </div>

            <div class="mt-why-card" data-reveal data-delay="160">
                <div class="wc-glow glow-gold"></div>
                <div class="wc-icon-wrap icon-gold">
                    <div class="wc-icon-ring"></div>
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <h3>Simple Process</h3>
                <p>Only your mobile number and bank details are required. The process is quick and straightforward.</p>
                <div class="wc-shine"></div>
            </div>

            <div class="mt-why-card" data-reveal data-delay="240">
                <div class="wc-glow glow-navy"></div>
                <div class="wc-icon-wrap icon-navy">
                    <div class="wc-icon-ring"></div>
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3>Safe and Secure</h3>
                <p>Every transaction is protected with secure systems. Instant SMS confirmation to sender.</p>
                <div class="wc-shine"></div>
            </div>

            <div class="mt-why-card" data-reveal data-delay="320">
                <div class="wc-glow glow-teal"></div>
                <div class="wc-icon-wrap icon-teal">
                    <div class="wc-icon-ring"></div>
                    <i class="fas fa-globe-asia"></i>
                </div>
                <h3>Available Across India</h3>
                <p>Send money to any PSU or private bank account anywhere in the country at any time.</p>
                <div class="wc-shine"></div>
            </div>

            <div class="mt-why-card" data-reveal data-delay="400">
                <div class="wc-glow glow-red"></div>
                <div class="wc-icon-wrap icon-red">
                    <div class="wc-icon-ring"></div>
                    <i class="fas fa-calendar-check"></i>
                </div>
                <h3>All Days Including Holidays</h3>
                <p>Transfers can be done on Sundays, bank holidays and any day of the year, 24 × 7 × 365.</p>
                <div class="wc-shine"></div>
            </div>

        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════
     STATS SECTION
════════════════════════════════════════ -->
<section class="mt-stats">
    <div class="stats-orb stats-orb-1"></div>
    <div class="stats-orb stats-orb-2"></div>
    <div class="stats-mesh"></div>

    <div class="mt-container">
        <div class="mt-sec-head" data-reveal>
            <div class="sh-tag sh-tag-light">
                <i class="fas fa-chart-bar"></i> Growing Need in India
            </div>
            <h2 class="sec-title light">Money Transfer in <span>India Today</span></h2>
            <p class="sec-sub light">The scale of digital money transfer is growing every year across the country</p>
        </div>

        <div class="mt-stats-grid">

            <div class="mt-stat-card" data-reveal data-delay="0">
                <div class="sc-orb"></div>
                <div class="sc-icon-wrap" style="--ic:#23adeb">
                    <i class="fas fa-users"></i>
                </div>
                <div class="sc-num" style="--nc:#23adeb">60 Cr+</div>
                <div class="sc-lbl">Indians use digital banking and payment services today</div>
                <div class="sc-bar"><div class="sc-bar-fill" style="--bc:#23adeb;width:90%"></div></div>
            </div>

            <div class="mt-stat-card" data-reveal data-delay="100">
                <div class="sc-orb"></div>
                <div class="sc-icon-wrap" style="--ic:#64ba4d">
                    <i class="fas fa-exchange-alt"></i>
                </div>
                <div class="sc-num" style="--nc:#64ba4d">Billions</div>
                <div class="sc-lbl">Money transfer transactions recorded in India every month</div>
                <div class="sc-bar"><div class="sc-bar-fill" style="--bc:#64ba4d;width:95%"></div></div>
            </div>

            <div class="mt-stat-card" data-reveal data-delay="200">
                <div class="sc-orb"></div>
                <div class="sc-icon-wrap" style="--ic:#fed109">
                    <i class="fas fa-hard-hat"></i>
                </div>
                <div class="sc-num" style="--nc:#fed109">Millions</div>
                <div class="sc-lbl">Migrant workers send money regularly to support their families</div>
                <div class="sc-bar"><div class="sc-bar-fill" style="--bc:#fed109;width:80%"></div></div>
            </div>

            <div class="mt-stat-card" data-reveal data-delay="300">
                <div class="sc-orb"></div>
                <div class="sc-icon-wrap" style="--ic:#fff">
                    <i class="fas fa-clock"></i>
                </div>
                <div class="sc-num" style="--nc:#fff">Time Saved</div>
                <div class="sc-lbl">Digital transfers help people save time and avoid travel to banks</div>
                <div class="sc-bar"><div class="sc-bar-fill" style="--bc:#fff;width:85%"></div></div>
            </div>

        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════
     WHO CAN USE SECTION
════════════════════════════════════════ -->
<section class="mt-who">
    <div class="who-deco-1"></div>
    <div class="who-deco-2"></div>

    <div class="mt-container">
        <div class="mt-sec-head" data-reveal>
            <div class="sh-tag sh-tag-green">
                <i class="fas fa-user-friends"></i> Who Can Use
            </div>
            <h2 class="sec-title" style="color: #00335a;">Who Can Use <span>This Service</span></h2>
            <p class="sec-sub">This service is useful for anyone who wants to transfer money quickly and conveniently</p>
        </div>

        <div class="mt-who-grid">

            <div class="mt-who-card" data-reveal data-delay="0">
                <div class="who-glow"></div>
                <div class="wh-icon"><i class="fas fa-hard-hat"></i></div>
                <h4>Daily Workers</h4>
                <div class="who-line"></div>
            </div>

            <div class="mt-who-card" data-reveal data-delay="80">
                <div class="who-glow"></div>
                <div class="wh-icon"><i class="fas fa-store"></i></div>
                <h4>Small Shop Owners</h4>
                <div class="who-line"></div>
            </div>

            <div class="mt-who-card" data-reveal data-delay="160">
                <div class="who-glow"></div>
                <div class="wh-icon"><i class="fas fa-truck"></i></div>
                <h4>Migrant Workers</h4>
                <div class="who-line"></div>
            </div>

            <div class="mt-who-card" data-reveal data-delay="240">
                <div class="who-glow"></div>
                <div class="wh-icon"><i class="fas fa-user-graduate"></i></div>
                <h4>Students Sending Money Home</h4>
                <div class="who-line"></div>
            </div>

            <div class="mt-who-card" data-reveal data-delay="320">
                <div class="who-glow"></div>
                <div class="wh-icon"><i class="fas fa-users"></i></div>
                <h4>Anyone Transferring Money</h4>
                <div class="who-line"></div>
            </div>

        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════
     HOW IT WORKS SECTION
════════════════════════════════════════ -->
<section class="mt-how" id="how-it-works">
    <div class="how-bg"></div>
    <div class="how-sweep"></div>

    <div class="mt-container">
        <div class="mt-sec-head" data-reveal>
            <div class="sh-tag">
                <i class="fas fa-list-ol"></i> Simple Steps
            </div>
            <h2 class="sec-title light" style="color: #00335a;">How It <span>Works</span></h2>
            <p class="sec-sub light">Transfer money in just 4 simple steps from any K-Seva center near you</p>
        </div>

        <div class="mt-steps">

            <div class="mt-step" data-reveal data-delay="0">
                <div class="step-connector left-connector"></div>
                <div class="step-num">01</div>
                <div class="step-circle">
                    <div class="sc-ring"></div>
                    <i class="fas fa-walking"></i>
                </div>
                <h4>Visit K-Seva Center</h4>
                <p>Walk in to your nearest K-Seva service center with cash</p>
                <div class="step-connector right-connector"></div>
            </div>

            <div class="mt-step" data-reveal data-delay="120">
                <div class="step-connector left-connector"></div>
                <div class="step-num">02</div>
                <div class="step-circle">
                    <div class="sc-ring"></div>
                    <i class="fas fa-id-card"></i>
                </div>
                <h4>Provide Details</h4>
                <p>Share your mobile number and the recipient bank account details</p>
                <div class="step-connector right-connector"></div>
            </div>

            <div class="mt-step" data-reveal data-delay="240">
                <div class="step-connector left-connector"></div>
                <div class="step-num">03</div>
                <div class="step-circle">
                    <div class="sc-ring"></div>
                    <i class="fas fa-paper-plane"></i>
                </div>
                <h4>Transfer Initiated</h4>
                <p>The operator processes your transfer instantly and securely</p>
                <div class="step-connector right-connector"></div>
            </div>

            <div class="mt-step" data-reveal data-delay="360">
                <div class="step-connector left-connector"></div>
                <div class="step-num">04</div>
                <div class="step-circle">
                    <div class="sc-ring"></div>
                    <i class="fas fa-check-circle"></i>
                </div>
                <h4>Confirmation Received</h4>
                <p>You receive an instant SMS confirmation on your mobile number</p>
                <div class="step-connector right-connector"></div>
            </div>

        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════
     FEATURES + BENEFITS
════════════════════════════════════════ -->
<section class="mt-features">
    <div class="feat-deco-1"></div>
    <div class="feat-deco-2"></div>

    <div class="mt-container">
        <div class="mt-sec-head" data-reveal>
            <div class="sh-tag sh-tag-blue">
                <i class="fas fa-star"></i> Features & Benefits
            </div>
            <h2 class="sec-title" style="color: #00335a;">What You <span>Get</span></h2>
            <p class="sec-sub">A complete package of features and benefits designed for your convenience</p>
        </div>

        <div class="feat-columns">

            <!-- Key Features -->
            <div class="feat-col" data-reveal>
                <div class="feat-col-header">
                    <div class="feat-col-icon"><i class="fas fa-cogs"></i></div>
                    <h3>Key Features</h3>
                </div>

                <div class="mt-feat-item">
                    <div class="fi-icon fi-blue"><i class="fas fa-bolt"></i></div>
                    <div class="fi-text">
                        <h4>Send Money Instantly</h4>
                        <p>Funds are transferred to the recipient account within minutes of the transaction.</p>
                    </div>
                </div>

                <div class="mt-feat-item">
                    <div class="fi-icon fi-green"><i class="fas fa-clock"></i></div>
                    <div class="fi-text">
                        <h4>Available 24 × 7 × 365</h4>
                        <p>Transfer money any time — day, night, weekends, and even on bank holidays.</p>
                    </div>
                </div>

                <div class="mt-feat-item">
                    <div class="fi-icon fi-gold"><i class="fas fa-calendar-check"></i></div>
                    <div class="fi-text">
                        <h4>Works on Sundays and Holidays</h4>
                        <p>Fund transfer can be done on Sundays and all bank holidays without any restriction.</p>
                    </div>
                </div>

                <div class="mt-feat-item">
                    <div class="fi-icon fi-navy"><i class="fas fa-sms"></i></div>
                    <div class="fi-text">
                        <h4>Instant SMS Confirmation</h4>
                        <p>Sender receives an immediate SMS alert confirming the successful transaction.</p>
                    </div>
                </div>

                <div class="mt-feat-item">
                    <div class="fi-icon fi-blue"><i class="fas fa-shield-alt"></i></div>
                    <div class="fi-text">
                        <h4>Safe and Secure Transaction</h4>
                        <p>Every transaction is fully protected and verified through secure banking systems.</p>
                    </div>
                </div>

                <div class="mt-feat-item">
                    <div class="fi-icon fi-green"><i class="fas fa-university"></i></div>
                    <div class="fi-text">
                        <h4>All Bank Branches Supported</h4>
                        <p>This service is available across all PSU and private bank branches in India.</p>
                    </div>
                </div>
            </div>

            <!-- Key Benefits -->
            <div class="feat-col" data-reveal data-delay="150">
                <div class="feat-col-header">
                    <div class="feat-col-icon feat-col-icon-gold"><i class="fas fa-gift"></i></div>
                    <h3>Key Benefits</h3>
                </div>

                <div class="mt-feat-item">
                    <div class="fi-icon fi-gold"><i class="fas fa-rupee-sign"></i></div>
                    <div class="fi-text">
                        <h4>Cost Effective</h4>
                        <p>Very low transaction charges make this service affordable for everyone including daily wage workers.</p>
                    </div>
                </div>

                <div class="mt-feat-item">
                    <div class="fi-icon fi-blue"><i class="fas fa-lock"></i></div>
                    <div class="fi-text">
                        <h4>Safe and Secure Transaction</h4>
                        <p>Transactions are backed by secure and trusted banking infrastructure.</p>
                    </div>
                </div>

                <div class="mt-feat-item">
                    <div class="fi-icon fi-green"><i class="fas fa-globe-asia"></i></div>
                    <div class="fi-text">
                        <h4>Fund Transfer to All Banks</h4>
                        <p>Send money to any government or private bank account anywhere across India.</p>
                    </div>
                </div>

                <div class="mt-feat-item">
                    <div class="fi-icon fi-navy"><i class="fas fa-bell"></i></div>
                    <div class="fi-text">
                        <h4>Free SMS Alerts on Every Transaction</h4>
                        <p>Get notified instantly on your mobile for every transfer you make through K-Seva.</p>
                    </div>
                </div>

                <div class="mt-feat-item">
                    <div class="fi-icon fi-gold"><i class="fas fa-map-marker-alt"></i></div>
                    <div class="fi-text">
                        <h4>Near Doorstep Remittance Facility</h4>
                        <p>K-Seva centers are located nearby so you do not have to travel far to send money.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>



</main>
 <?php include('includes/footer_1.php'); ?>

<?php include('includes/whats-app.php'); ?>
<?php include('includes/sticky-footer.php'); ?>



<!-- ═══════════════════════════════════════
     PARTICLE SYSTEM + SCROLL REVEAL JS
════════════════════════════════════════ -->
<script>
/* ── Particle Canvas ── */
(function () {
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

/* ── Scroll Reveal ── */
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

/* ── Animated counter for stats section ── */
(function () {
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
                if (/^\d/.test(raw)) {
                    const match = raw.match(/^([\d.]+)(.*)/);
                    if (match) {
                        const num = parseFloat(match[1]);
                        const suffix = match[2];
                        el.textContent = '0' + suffix;
                        animateNum(el, num, suffix);
                    }
                }
                obs.unobserve(el);
            }
        });
    }, { threshold: 0.5 });
    statNums.forEach(el => obs.observe(el));
})();

/* ── Progress bar animations ── */
(function () {
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

/* ── Step connector animation ── */
(function () {
    const steps = document.querySelectorAll('.mt-step');
    steps.forEach((step, i) => {
        step.style.setProperty('--step-i', i);
    });
})();
</script>
<script>
/* ── Particle Canvas ── */
(function () {
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

/* Animated counter & progress bars (unchanged) */
(function () {
    function animateNum(el, target, suffix) {
        let cur = 0;
        const step = target / 55;
        const tick = () => {
            cur += step;
            if (cur < target) {
                el.textContent = Math.floor(cur) + suffix;
                requestAnimationFrame(tick);
            } else { el.textContent = target + suffix; }
        };
        tick();
    }
    const statNums = document.querySelectorAll('.sc-num');
    const obs = new IntersectionObserver(entries => {
        entries.forEach(e => {
            if (e.isIntersecting) {
                const el = e.target;
                const raw = el.textContent.trim();
                if (/^\d/.test(raw)) {
                    const match = raw.match(/^([\d.]+)(.*)/);
                    if (match) {
                        const num = parseFloat(match[1]);
                        const suffix = match[2];
                        el.textContent = '0' + suffix;
                        animateNum(el, num, suffix);
                    }
                }
                obs.unobserve(el);
            }
        });
    }, { threshold: 0.5 });
    statNums.forEach(el => obs.observe(el));
})();

/* Progress bars */
(function () {
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

/* Step connector animation */
(function () {
    const steps = document.querySelectorAll('.mt-step');
    steps.forEach((step, i) => step.style.setProperty('--step-i', i));
})();
</script>

</body>
</html>