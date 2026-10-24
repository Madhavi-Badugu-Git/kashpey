<?php 
session_start();
include('includes/dbConfig.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>Shipping Policy | K-Seva – Delivery Timelines & Charges</title>
    <meta name="description" content="K-Seva Shipping Policy: Orders shipped within 3 days via courier/speed post, delivery address confirmation, and non-refundable shipping costs.">
    <meta name="keywords" content="Shipping Policy, Delivery Policy, K-Seva Shipping, Courier, Speed Post, Delivery Time">
    <link rel="canonical" href="https://www.k-seva.com/shipping-policy">
    <meta property="og:title" content="Shipping Policy – K-Seva">
    <meta property="og:description" content="Official shipping policy for K-Seva platform. Delivery timelines, courier partners, and non-refundable shipping charges.">
    <meta property="og:url" content="https://www.k-seva.com/shipping-policy">
    <?php include('includes/header_1.php'); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800;900&family=Playfair+Display:ital,wght@0,700;0,900;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* ========== COMPLETE STYLES (identical to refund-policy.php) ========== */
        :root {
            --navy: #003b66; --navy-deep: #001e3c; --navy-mid: #004d87;
            --sky: #23adeb; --sky-light: #e8f7fe; --sky-bright: #29c3ff;
            --green: #64ba4d; --green-light: #eaf6e5;
            --gold: #fed109; --gold-light: #fff0a0;
            --white: #ffffff; --off-white: #f7fafd;
            --text: #0a1f3c; --text-mid: #2c4a6e; --text-muted: #6b84a0;
            --r-sm: 12px; --r-md: 20px; --r-lg: 28px; --r-xl: 40px; --r-pill: 100px;
        }
        *,*::before,*::after{box-sizing:border-box;margin:0;padding:0;}
        .mt-body{font-family:'Plus Jakarta Sans',sans-serif;background:var(--off-white);color:var(--text);overflow-x:hidden;padding-bottom:50px;}
        #mt-particles{position:fixed;inset:0;pointer-events:none;z-index:0;opacity:0.45;}
        .mt-container{max-width:1260px;margin:0 auto;padding:0 32px;position:relative;z-index:2;}
        [data-reveal]{opacity:0;transform:translateY(32px);transition:opacity 0.75s cubic-bezier(0.16,1,0.3,1),transform 0.75s cubic-bezier(0.16,1,0.3,1);}
        [data-reveal].revealed{opacity:1;transform:translateY(0);}
        .mt-hero{min-height:60vh;background:linear-gradient(145deg,var(--navy-deep) 0%,var(--navy) 45%,var(--navy-mid) 100%);position:relative;display:flex;align-items:center;overflow:hidden;padding:20px 32px 40px;}
        .hero-mesh{position:absolute;inset:0;background-image:linear-gradient(rgba(35,173,235,0.07) 1px,transparent 1px),linear-gradient(90deg,rgba(35,173,235,0.07) 1px,transparent 1px);background-size:56px 56px;animation:meshDrift 25s linear infinite;}
        @keyframes meshDrift{0%{transform:translate(0,0)}100%{transform:translate(56px,56px)}}
        .hero-orb{position:absolute;border-radius:50%;filter:blur(90px);pointer-events:none;z-index:0;}
        .orb-1{width:700px;height:700px;top:-200px;left:-150px;background:radial-gradient(circle,rgba(35,173,235,0.4) 0%,transparent 65%);animation:orbPulse1 14s ease-in-out infinite;}
        .orb-2{width:550px;height:550px;bottom:-180px;right:-120px;background:radial-gradient(circle,rgba(254,209,9,0.25) 0%,transparent 65%);animation:orbPulse2 18s ease-in-out infinite;}
        .orb-3{width:400px;height:400px;top:40%;left:50%;background:radial-gradient(circle,rgba(100,186,77,0.15) 0%,transparent 65%);animation:orbPulse3 11s ease-in-out infinite;}
        @keyframes orbPulse1{0%,100%{transform:translate(0,0) scale(1)}50%{transform:translate(50px,40px) scale(1.15)}}
        @keyframes orbPulse2{0%,100%{transform:translate(0,0) scale(1)}50%{transform:translate(-40px,-50px) scale(1.1)}}
        @keyframes orbPulse3{0%,100%{transform:translate(-50%,-50%) scale(1)}50%{transform:translate(-48%,-52%) scale(1.2)}}
        .hero-sweep{position:absolute;top:-50%;left:-50%;width:200%;height:200%;background:linear-gradient(115deg,transparent 0%,rgba(35,173,235,0.06) 45%,rgba(254,209,9,0.08) 50%,rgba(35,173,235,0.06) 55%,transparent 100%);animation:heroSweep 18s ease-in-out infinite;}
        @keyframes heroSweep{0%{transform:rotate(25deg) translateX(-120%)}100%{transform:rotate(25deg) translateX(120%)}}
        .mt-hero-inner{max-width:1260px;margin:0 auto;width:100%;position:relative;z-index:2;text-align:center;}
        .mt-badge{display:inline-flex;align-items:center;gap:8px;background:rgba(255,255,255,0.1);backdrop-filter:blur(10px);border:1px solid rgba(255,255,255,0.2);color:rgba(255,255,255,0.9);padding:8px 20px;border-radius:var(--r-pill);font-size:0.78rem;font-weight:700;letter-spacing:1.5px;text-transform:uppercase;margin-bottom:28px;}
        .badge-dot{width:8px;height:8px;background:var(--green);border-radius:50%;box-shadow:0 0 0 0 rgba(100,186,77,0.7);animation:badgePulse 2s ease-in-out infinite;}
        @keyframes badgePulse{0%{box-shadow:0 0 0 0 rgba(100,186,77,0.7)}70%{box-shadow:0 0 0 8px rgba(100,186,77,0)}100%{box-shadow:0 0 0 0 rgba(100,186,77,0)}}
        .hero-title{font-family:'Playfair Display',serif;font-size:clamp(2.4rem,5vw,3.8rem);font-weight:900;color:#fff;line-height:1.12;margin-bottom:20px;}
        .hero-gradient-text{background:linear-gradient(135deg,var(--gold),var(--sky-bright),var(--gold-light));background-size:200% auto;-webkit-background-clip:text;background-clip:text;color:transparent;animation:textGradientShift 5s ease-in-out infinite;}
        @keyframes textGradientShift{0%,100%{background-position:0% 50%}50%{background-position:100% 50%}}
        .hero-sub{font-size:1.05rem;color:rgba(255,255,255,0.75);line-height:1.75;margin-bottom:36px;max-width:700px;margin-left:auto;margin-right:auto;}
        .hero-trust{display:flex;gap:12px;flex-wrap:wrap;justify-content:center;}
        .trust-badge{display:inline-flex;align-items:center;gap:7px;background:rgba(255,255,255,0.08);border:1px solid rgba(255,255,255,0.15);color:rgba(255,255,255,0.8);padding:6px 16px;border-radius:var(--r-pill);font-size:0.76rem;font-weight:600;transition:all 0.3s;}
        .trust-badge:hover{background:rgba(35,173,235,0.2);border-color:rgba(35,173,235,0.4);color:#fff;}
        .mt-breadcrumb{background:#fff;border-bottom:1px solid rgba(35,173,235,0.1);position:relative;z-index:3;}
        .mt-breadcrumb::before{content:'';position:absolute;bottom:0;left:0;width:100%;height:2px;background:linear-gradient(90deg,transparent,var(--sky),var(--gold),var(--sky),transparent);background-size:200% 100%;animation:bcLine 4s infinite alternate;}
        @keyframes bcLine{0%{background-position:0%}100%{background-position:100%}}
        .bc-inner{max-width:1260px;margin:0 auto;padding:14px 32px;display:flex;align-items:center;gap:10px;font-size:0.83rem;}
        .bc-inner a{color:var(--sky);text-decoration:none;font-weight:600;display:flex;align-items:center;gap:6px;}
        .bc-inner a:hover{color:var(--navy);}
        .bc-sep{color:var(--text-muted);font-size:0.65rem;}
        .bc-active{color:var(--navy);font-weight:800;}
        .disclaimer-content{padding:40px 0;background:var(--white);}
        .disclaimer-wrapper{max-width:900px;margin:0 auto;}
        .disclaimer-block{margin-bottom:40px;padding-bottom:25px;border-bottom:1px solid rgba(35,173,235,0.1);}
        .disclaimer-block:last-child{border-bottom:none;}
        .disclaimer-block h2{font-family:'Playfair Display',serif;font-size:2rem;font-weight:800;color:var(--navy);margin-bottom:20px;}
        .disclaimer-block h3{font-size:1.3rem;font-weight:800;color:var(--navy);margin-bottom:15px;position:relative;padding-bottom:8px;}
        .disclaimer-block h3::after{content:'';position:absolute;bottom:0;left:0;width:50px;height:3px;background:linear-gradient(90deg,var(--sky),var(--gold));border-radius:3px;}
        .disclaimer-block p{font-size:0.98rem;line-height:1.7;color:var(--text-mid);margin-bottom:15px;}
        .disclaimer-block ul,.disclaimer-block ol{margin:15px 0 15px 25px;color:var(--text-mid);font-size:0.98rem;line-height:1.7;}
        .disclaimer-block li{margin-bottom:8px;}
        .disclaimer-block li::marker{color:var(--sky);font-weight:bold;}
        .contact-box{display:flex;gap:20px;flex-wrap:wrap;margin-top:20px;}
        .contact-link{display:inline-flex;align-items:center;gap:10px;background:var(--sky-light);padding:12px 24px;border-radius:50px;text-decoration:none;font-weight:600;color:var(--navy);transition:all 0.3s;border:1px solid rgba(35,173,235,0.2);}
        .contact-link:hover{background:var(--sky);color:white;transform:translateY(-3px);border-color:var(--sky);}
        .mt-contact-strip{background:linear-gradient(135deg,var(--navy-deep),var(--navy));padding:60px 0;color:#fff;}
        .contact-inner{display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:30px;}
        .contact-text h3{font-size:1.6rem;margin-bottom:10px;}
        .contact-text span{color:var(--gold);}
        .contact-text p{margin-top:8px;color:rgba(255,255,255,0.7);max-width:500px;}
        .contact-items{display:flex;gap:30px;}
        .contact-item{display:flex;align-items:center;gap:15px;background:rgba(255,255,255,0.1);padding:12px 24px;border-radius:var(--r-pill);transition:all 0.3s;}
        .contact-item:hover{background:rgba(255,255,255,0.2);transform:translateY(-3px);}
        .ct-ico{font-size:1.8rem;}
        .ct-label{font-size:0.7rem;text-transform:uppercase;opacity:0.7;}
        .ct-val a{color:#fff;text-decoration:none;font-weight:700;font-size:1rem;}
        @media (max-width:1100px){.mt-hero{min-height:auto;padding:140px 32px 80px;}}
        @media (max-width:900px){.mt-container{padding:0 24px;}}
        @media (max-width:768px){.hero-title{font-size:2rem;}.mt-hero{padding:100px 20px 60px;}.bc-inner{padding:12px 20px;}.disclaimer-block h2{font-size:1.8rem;}.disclaimer-block h3{font-size:1.2rem;}}
        @media (max-width:540px){.hero-trust{flex-direction:column;align-items:center;}.contact-box{flex-direction:column;}.contact-link{justify-content:center;}}
    </style>
</head>
<body class="mt-body">
<canvas id="mt-particles" aria-hidden="true"></canvas>
<div class="over-menu"></div>
<?php include('includes/navbar_1.php'); ?>

<main class="mt-page">
    <!-- Hero Section -->
    <section class="mt-hero">
        <div class="hero-orb orb-1"></div>
        <div class="hero-orb orb-2"></div>
        <div class="hero-orb orb-3"></div>
        <div class="hero-mesh"></div>
        <div class="hero-sweep"></div>
        <div class="mt-hero-inner">
            <div class="mt-hero-text" data-reveal>
                <div class="mt-badge"><span class="badge-dot"></span><i class="fas fa-truck"></i>&nbsp; Delivery Information</div>
                <h1 class="hero-title"><span class="hero-gradient-text">Shipping Policy</span></h1>
                <p class="hero-sub">Understand how we ship your orders, delivery timelines, and important terms regarding shipping charges.</p>
                <div class="hero-trust">
                    <div class="trust-badge"><i class="fas fa-box"></i> Ships within 3 days</div>
                    <div class="trust-badge"><i class="fas fa-truck-fast"></i> Courier / Speed Post</div>
                    <div class="trust-badge"><i class="fas fa-rupee-sign"></i> Shipping costs non-refundable</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Breadcrumb -->
    <nav class="mt-breadcrumb" aria-label="Breadcrumb">
        <div class="bc-inner">
            <a href="home"><i class="fas fa-home"></i> Home</a>
            <i class="fas fa-chevron-right bc-sep"></i>
            <span class="bc-active">Shipping Policy</span>
        </div>
    </nav>

    <!-- SHIPPING POLICY CONTENT (VERBATIM) -->
    <section class="disclaimer-content">
        <div class="mt-container">
            <div class="disclaimer-wrapper" data-reveal>

                <div class="disclaimer-block">
                    <p>The orders for the user are shipped through registered domestic courier companies and/or speed post only. Orders are shipped within 3 days from the date of the order and/or payment or as per the delivery date agreed at the time of order confirmation and delivering of the shipment, subject to courier company / post office norms. Platform Owner shall not be liable for any delay in delivery by the courier company / postal authority. Delivery of all orders will be made to the address provided by the buyer at the time of purchase. Delivery of our services will be confirmed on your email ID as specified at the time of registration. If there are any shipping cost(s) levied by the seller or the Platform Owner (as the case be), the same is not refundable.</p>
                </div>

                

            </div>
        </div>
    </section>

    <!-- Contact Strip -->
    <section class="mt-contact-strip">
        <div class="mt-container">
            <div class="contact-inner">
                <div class="contact-text">
                    <h3>Shipping <span>Queries?</span></h3>
                    <p>Contact us for tracking or delivery-related questions.</p>
                </div>
                <div class="contact-items">
                    <div class="contact-item">
                        <div class="ct-ico">📞</div>
                        <div><span class="ct-label">Helpline</span><div class="ct-val"><a href="tel:<?php echo $comp_mobile; ?>"><?php echo $comp_mobile; ?></a></div></div>
                    </div>
                    <div class="contact-item">
                        <div class="ct-ico">✉️</div>
                        <div><span class="ct-label">Email</span><div class="ct-val"><a href="mailto:shipping@kseva.com">shipping@kseva.com</a></div></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include('includes/footer_1.php'); include('includes/whats-app.php'); include('includes/sticky-footer.php'); ?>

<script>
    // Particle Canvas Effect (same as reference)
    (function() {
        const canvas = document.getElementById('mt-particles');
        if (!canvas) return;
        const ctx = canvas.getContext('2d');
        let W, H;
        const COLORS = ['#23adeb','#fed109','#64ba4d','#ffffff','#003b66','#f97316','#14b8a6'];
        const COUNT = 80;
        let particles = [];
        function resize() { W = canvas.width = window.innerWidth; H = canvas.height = window.innerHeight; }
        resize();
        window.addEventListener('resize', resize);
        function rand(a,b) { return a + Math.random() * (b - a); }
        class Particle {
            constructor() { this.reset(true); }
            reset(init) {
                this.x = rand(0,W); this.y = init ? rand(0,H) : H+10;
                this.r = rand(0.6,2.8); this.alpha = 0; this.maxA = rand(0.3,0.85);
                this.speed = rand(0.003,0.01); this.dir = 1;
                this.color = COLORS[Math.floor(Math.random() * COLORS.length)];
                this.vx = rand(-0.12,0.12); this.vy = rand(-0.3,-0.08);
                this.phase = rand(0,Math.PI*2); this.type = Math.random() > 0.5 ? 'star' : 'circle';
            }
            draw(t) {
                const flicker = 0.5 + 0.5 * Math.sin(t * 0.003 + this.phase);
                ctx.save(); ctx.globalAlpha = this.alpha * flicker;
                ctx.fillStyle = this.color; ctx.shadowBlur = this.r * 10; ctx.shadowColor = this.color;
                if (this.type === 'star') {
                    ctx.beginPath();
                    for (let i = 0; i < 8; i++) {
                        let ang = i * Math.PI / 4;
                        let len = (i % 2 === 0) ? this.r * 3 : this.r;
                        let px = this.x + Math.cos(ang) * len;
                        let py = this.y + Math.sin(ang) * len;
                        i === 0 ? ctx.moveTo(px, py) : ctx.lineTo(px, py);
                    }
                    ctx.closePath(); ctx.fill();
                } else {
                    ctx.beginPath(); ctx.arc(this.x, this.y, this.r, 0, Math.PI*2); ctx.fill();
                }
                ctx.restore();
            }
            update() {
                this.alpha += this.speed * this.dir;
                if (this.alpha >= this.maxA) this.dir = -1;
                if (this.alpha <= 0) { this.reset(false); return; }
                this.x += this.vx; this.y += this.vy;
                if (this.x < -10) this.x = W+10; if (this.x > W+10) this.x = -10;
                if (this.y < -10) this.reset(false);
            }
        }
        for(let i=0; i<COUNT; i++) particles.push(new Particle());
        let t=0;
        function loop() { ctx.clearRect(0,0,W,H); t++; particles.forEach(p=>{p.update(); p.draw(t);}); requestAnimationFrame(loop); }
        loop();
    })();

    // Scroll Reveal
    (function() {
        const els = document.querySelectorAll('[data-reveal]');
        const obs = new IntersectionObserver(entries => {
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