<?php include('includes/dbConfig.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>Cash@POS & mPOS Solutions | K-Seva – Accept Payments & Provide Cash</title>
    <meta name="description" content="Upgrade your business with K-Seva Cash@POS. Accept all credit/debit card payments and offer Micro ATM cash withdrawal services using a single, compact mPOS device.">
    <meta name="keywords" content="Cash@POS, mPOS Device, Mobile POS, Micro ATM Terminal, Accept Card Payments, K-Seva mPOS, Retail Payment Solutions, Swipe Machine for Shop">
    <meta name="author" content="K-Seva">
    <link rel="canonical" href="https://k-seva.com/m-pos-micro-atm">

    <!-- Open Graph (Facebook, WhatsApp, LinkedIn) -->
    <meta property="og:title" content="K-Seva mPOS | All-in-One Payment & Cash Withdrawal Device">
    <meta property="og:description" content="Don't just sell products—become a cash point! Accept all major cards and provide easy cash withdrawals for your customers with K-Seva Cash@POS.">
    <meta property="og:image" content="https://k-seva.com/assets/images/og-mpos.jpg"> <!-- Ensure this image exists -->
    <meta property="og:url" content="https://k-seva.com/m-pos-micro-atm">
    <meta property="og:type" content="website">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Cash@POS Solutions | K-Seva Digital Banking">
    <meta name="twitter:description" content="The ultimate handheld terminal for modern retailers. Secure card payments and instant cash-out services in one device.">
    <meta name="twitter:image" content="https://k-seva.com/assets/images/og-mpos.jpg">

    <?php include('includes/header_1.php'); ?>
    
    <!-- Fonts & Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800;900&family=Playfair+Display:ital,wght@0,700;0,900;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/m-pos.css">
</head>
<body class="mt-body">

<canvas id="mt-particles" aria-hidden="true"></canvas>
<div class="over-menu"></div>
<?php include('includes/navbar_1.php'); ?>

<main class="mt-page mpos-page">

    <!-- ========== HERO – CASH@POS (M-POS) & MICRO ATM ========== -->
    <section class="mt-hero">
        <div class="hero-orb orb-1"></div>
        <div class="hero-orb orb-2"></div>
        <div class="hero-orb orb-3"></div>
        <div class="hero-mesh"></div>
        <div class="hero-sweep"></div>
        <div class="mt-hero-inner">
            <div class="mt-hero-text" data-reveal>
                <div class="mt-badge"><span class="badge-dot"></span><i class="fas fa-credit-card"></i>&nbsp; K-Seva Service</div>
                <h1 class="hero-title">Cash@POS<br><span class="hero-gradient-text teal">M-POS</span> <span class="hero-subtitle">&amp; Micro ATM</span></h1>
                <p class="hero-sub">Turn your smartphone or tablet into a simple payment machine. Accept card payments anytime, anywhere — fast, secure, and affordable for small and medium businesses.</p>
                <div class="mt-hero-btns">
                    <a href="#about" class="btn-primary-glow"><span class="btn-shimmer"></span><i class="fas fa-paper-plane"></i><span>Learn More</span></a>
                    <a href="#micro-atm" class="btn-glass"><i class="fas fa-info-circle"></i><span>Micro ATM Services</span></a>
                </div>
                <div class="hero-trust">
                    <div class="trust-badge"><i class="fas fa-mobile-alt"></i> Phone to POS</div>
                    <div class="trust-badge"><i class="fas fa-credit-card"></i> All Cards Accepted</div>
                    <div class="trust-badge"><i class="fas fa-shield-alt"></i> 100% Secure</div>
                </div>
            </div>
            <div class="mt-hero-card" data-reveal data-delay="200">
                <div class="card-glow-ring"></div>
                <div class="hc-header">
                    <div class="hc-pulse-dot"></div>
                    <span class="hc-title">Cash@POS Overview</span>
                    <span class="hc-live-badge">LIVE</span>
                </div>
                <div class="mt-stat-row">
                    <div class="mt-stat"><div class="mt-stat-num c-blue">M-POS</div><div class="mt-stat-lbl">Smartphone POS</div></div>
                    <div class="mt-stat"><div class="mt-stat-num c-green">Micro ATM</div><div class="mt-stat-lbl">Cash Withdrawal</div></div>
                    <div class="mt-stat"><div class="mt-stat-num c-gold">Secure</div><div class="mt-stat-lbl">Encrypted</div></div>
                    <div class="mt-stat"><div class="mt-stat-num c-white">24x7</div><div class="mt-stat-lbl">Service</div></div>
                </div>
                <div class="hero-feature">
                    <i class="fas fa-hand-holding-usd"></i>
                    <div><div class="feature-label">Accept Payments Anywhere</div><div class="feature-sub">Turn smartphone into payment machine</div></div>
                </div>
                <div class="card-shimmer"></div>
            </div>
        </div>
    </section>

    <!-- BREADCRUMB -->
    <nav class="mt-breadcrumb" aria-label="Breadcrumb">
        <div class="bc-inner">
            <a href="home"><i class="fas fa-home"></i> Home</a>
            <i class="fas fa-chevron-right bc-sep"></i>
            <span>Services</span>
            <i class="fas fa-chevron-right bc-sep"></i>
            <span class="bc-active">Cash@POS (M-POS) & Micro ATM</span>
        </div>
    </nav>

    <!-- ========== INTRO SECTION (About + Enquiry Form) ========== -->
    <section class="mt-intro" id="enquire">
        <div class="intro-deco deco-1"></div>
        <div class="intro-deco deco-2"></div>
        <div class="mt-container">
            <div class="mt-intro-text" data-reveal>
                <div class="sec-tag"><i class="fas fa-exchange-alt"></i> About This Service</div>
                <h2 class="sec-title">Accept Payments <span>Anywhere</span> with <span>Cash@POS</span></h2>
                <div class="sec-divider"><span></span><i class="fas fa-credit-card"></i><span></span></div>
                <p>With K-Seva Cash@POS, you can turn your smartphone or tablet into a simple payment machine. This service helps small and medium businesses accept card payments from customers anytime and anywhere. It is an easy, secure, and affordable way to receive digital payments without needing a large POS machine.</p>
                <p>Using a small card reader connected to your phone, shop owners and service providers can quickly accept payments. The system is simple to set up and very easy to use, making it perfect for daily business transactions.</p>
                <p>Customers can pay using credit or debit cards such as Mastercard, Visa, and RuPay through the Payswiff mPOS Card Reader. This portable device allows businesses to accept secure card payments instantly. It connects to a smartphone through an app, making it easy for merchants to process payments anytime and anywhere. The device is secure, lightweight, and helps businesses offer fast and convenient cashless transactions to customers.</p>
                <div class="intro-pills">
                    <span class="pill pill-blue"><i class="fas fa-mobile-alt"></i> Phone to POS</span>
                    <span class="pill pill-green"><i class="fas fa-credit-card"></i> All Cards</span>
                    <span class="pill pill-gold"><i class="fas fa-atm"></i> Micro ATM</span>
                    <span class="pill pill-navy"><i class="fas fa-lock"></i> 100% Secure</span>
                </div>
            </div>

            <!-- ENQUIRY FORM CARD – Premium with Glitter & Glow -->
            <div class="gold-enquiry-col" data-reveal data-delay="150">
                <?php 
                $current_page_name = "Cash@POS";
                $current_service_category = "cash_at_pos";
                include('includes/enquiry_form.php'); 
                ?>
            </div>
        </div>
    </section>

    <!-- ========== IMAGE GALLERY SECTION (white background) ========== -->
    <section class="mp-about-section" id="about">
        <div class="mt-container">
            <div class="about-grid" data-reveal>
                <div class="about-intro-card">
                    <div class="intro-icon">📱</div>
                    <h3>How M-POS Works</h3>
                    <p>A small card reader connects to your smartphone via Bluetooth. Customers swipe or tap their card, and the transaction is processed instantly through the app. No bulky machine, no long contracts — just simple payments.</p>
                    <p>Perfect for small shops, home delivery services, field agents, and any business that needs to accept card payments on the go.</p>
                </div>
                <div class="img-grid">
                    <img src="upload/imag_4.jpg" alt="Cash@POS Device">
                    <img src="upload/imag_3.jpg" alt="M-POS Payment">
                    <img src="upload/imag_2.jpg" alt="Card Payment">
                    <img src="upload/imag_1.jpg" alt="Micro ATM">
                </div>
            </div>
        </div>
    </section>

    <!-- ========== MICRO ATM DARK SECTION ========== -->
    <section class="micro-atm-dark" id="micro-atm">
        <div class="dark-orb dark-orb--1"></div>
        <div class="dark-orb dark-orb--2"></div>
        <div class="dark-mesh"></div>
        <div class="dark-sweep"></div>
        <div class="mt-container">
            <div class="micro-grid" data-reveal>
                <div class="micro-img">
                    <img src="upload/micoratm.jpg" alt="Micro ATM Device">
                </div>
                <div class="micro-text">
                    <div class="micro-tag"><i class="fas fa-atm"></i> Micro ATM</div>
                    <h3>Cash@POS <span>(M-POS / Micro ATM)</span></h3>
                    <p>Running out of cash when you need it the most can be frustrating. With K-Seva Cash@POS (Micro ATM), customers can easily withdraw cash and perform basic banking services from nearby shops without visiting a bank or ATM.</p>
                    <p>A Micro ATM / M-POS device is a small portable machine that allows shop owners to provide banking services to customers. By using a debit card or Aadhaar authentication, customers can quickly complete transactions in a safe and simple way.</p>
                    <p>This service helps people in both cities and rural areas access banking facilities anytime.</p>

                    <ul class="svc-list">
                        <li><div class="svc-ico">💳</div><div class="svc-text"><h4>Cash Withdrawal</h4><p>Customers can withdraw cash using their debit card or Aadhaar authentication quickly and securely.</p></div></li>
                        <li><div class="svc-ico">💰</div><div class="svc-text"><h4>Cash Deposit</h4><p>Deposit money securely through the Micro ATM device at a nearby shop without visiting a bank.</p></div></li>
                        <li><div class="svc-ico">🔁</div><div class="svc-text"><h4>Fund Transfer</h4><p>Send money from one bank account to another easily and instantly through the M-POS device.</p></div></li>
                        <li><div class="svc-ico">📄</div><div class="svc-text"><h4>Balance Enquiry</h4><p>Check bank account balance instantly without needing to visit an ATM or bank branch.</p></div></li>
                    </ul>

                    <a href="#enquire" class="micro-enquire">Enquire Now →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== CONTACT STRIP ========== -->
    <section class="mp-contact-strip">
        <div class="mt-container">
            <div class="contact-inner">
                <div class="contact-text">
                    <h3>Need Help with <span>Cash@POS / M-POS?</span></h3>
                    <p>Contact our K-Seva payment expert — we're here to assist you anytime.</p>
                </div>
                <div class="contact-items">
                    <div class="contact-item">
                        <div class="ct-ico">📞</div>
                        <div>
                            <span class="ct-label">Helpline</span>
                            <div class="ct-val"><a href="tel:<?php echo $comp_mobile; ?>"><?php echo $comp_mobile; ?></a></div>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="ct-ico">✉️</div>
                        <div>
                            <span class="ct-label">Email</span>
                            <div class="ct-val"><a href="mailto:<?php echo $comp_email; ?>"><?php echo $comp_email; ?></a></div>
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

<script>
/* Particle Canvas (glitter effect) */
(function () {
    const canvas = document.getElementById('mt-particles');
    if (!canvas) return;
    const ctx = canvas.getContext('2d');
    let W, H;
    const COLORS = ['#23adeb','#fed109','#64ba4d','#ffffff','#003b66','#14b8a6','#c44536'];
    const COUNT = 80;
    const particles = [];
    function resize() { W = canvas.width = window.innerWidth; H = canvas.height = window.innerHeight; }
    resize();
    window.addEventListener('resize', resize, { passive: true });
    function rand(a,b){return a+Math.random()*(b-a);}
    class Particle {
        constructor(){ this.reset(true); }
        reset(init){
            this.x=rand(0,W); this.y=init?rand(0,H):H+10;
            this.r=rand(0.6,2.8); this.alpha=0; this.maxA=rand(0.3,0.85);
            this.speed=rand(0.003,0.01); this.dir=1;
            this.color=COLORS[Math.floor(Math.random()*COLORS.length)];
            this.vx=rand(-0.12,0.12); this.vy=rand(-0.3,-0.08);
            this.phase=rand(0,Math.PI*2); this.type=Math.random()>0.5?'star':'circle';
        }
        draw(t){
            const flicker=0.5+0.5*Math.sin(t*0.003+this.phase);
            ctx.save(); ctx.globalAlpha=this.alpha*flicker; ctx.fillStyle=this.color;
            ctx.shadowBlur=this.r*10; ctx.shadowColor=this.color;
            if(this.type==='star'){
                const r=this.r; ctx.beginPath();
                for(let i=0;i<8;i++){ let ang=i*Math.PI/4; let len=i%2===0?r*3:r;
                    let px=this.x+Math.cos(ang)*len, py=this.y+Math.sin(ang)*len;
                    i===0?ctx.moveTo(px,py):ctx.lineTo(px,py);
                } ctx.closePath(); ctx.fill();
            } else { ctx.beginPath(); ctx.arc(this.x,this.y,this.r,0,Math.PI*2); ctx.fill(); }
            ctx.restore();
        }
        update(){
            this.alpha+=this.speed*this.dir;
            if(this.alpha>=this.maxA) this.dir=-1;
            if(this.alpha<=0){ this.reset(false); return; }
            this.x+=this.vx; this.y+=this.vy;
            if(this.x<-10) this.x=W+10; if(this.x>W+10) this.x=-10;
            if(this.y<-10) this.reset(false);
        }
    }
    for(let i=0;i<COUNT;i++) particles.push(new Particle());
    let t=0;
    function loop(){ ctx.clearRect(0,0,W,H); t++; particles.forEach(p=>{p.update(); p.draw(t);}); requestAnimationFrame(loop); }
    loop();
})();

/* Scroll Reveal */
(function(){
    const els=document.querySelectorAll('[data-reveal]');
    const obs=new IntersectionObserver(entries=>{
        entries.forEach(entry=>{
            if(entry.isIntersecting){
                const el=entry.target;
                const delay=parseInt(el.getAttribute('data-delay')||0);
                setTimeout(()=>el.classList.add('revealed'), delay);
                obs.unobserve(el);
            }
        });
    },{threshold:0.12, rootMargin:'0px 0px -40px 0px'});
    els.forEach(el=>obs.observe(el));
})();
</script>

</body>
</html>