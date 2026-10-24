<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>K-Seva | Online Service Portal</title>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=Nunito:wght@300;400;600;700&display=swap" rel="stylesheet">
<style>
  :root {
    --sky: #00b4d8;
    --deep: #023e8a;
    --gold: #ffd60a;
    --green: #2dc653;
    --dark: #03071e;
    --glass: rgba(255,255,255,0.07);
    --border: rgba(0,180,216,0.3);
  }

  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

  body {
    min-height: 100vh;
    background: var(--dark);
    font-family: 'Nunito', sans-serif;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  /* ── CANVAS BACKGROUND ── */
  #bg { position: fixed; inset: 0; z-index: 0; }

  /* ── GLITTER CANVAS ── */
  #glitter { position: fixed; inset: 0; z-index: 1; pointer-events: none; }

  /* ── OUTER WRAPPER ── */
  .wrapper {
    position: relative; z-index: 10;
    width: 96vw; max-width: 1100px;
    min-height: 580px;
    display: flex;
    border-radius: 28px;
    overflow: hidden;
    box-shadow: 0 0 80px rgba(0,180,216,0.35), 0 0 200px rgba(0,60,140,0.4);
    animation: wrapperIn 1s cubic-bezier(.23,1,.32,1) both;
  }

  @keyframes wrapperIn {
    from { opacity: 0; transform: scale(.93) translateY(30px); }
    to   { opacity: 1; transform: scale(1) translateY(0); }
  }

  /* ── LEFT PANEL ── */
  .panel-left {
    flex: 1;
    position: relative;
    background: linear-gradient(135deg, #012A6B 0%, #023e8a 40%, #0077b6 80%, #00b4d8 100%);
    display: flex; flex-direction: column;
    align-items: center; justify-content: center;
    padding: 48px 36px;
    overflow: hidden;
  }

  .panel-left::before {
    content: '';
    position: absolute; inset: 0;
    background: radial-gradient(ellipse at 30% 60%, rgba(0,180,216,0.25) 0%, transparent 65%),
                radial-gradient(ellipse at 80% 20%, rgba(255,214,10,0.1) 0%, transparent 55%);
  }

  /* Animated globe rings */
  .ring {
    position: absolute;
    border-radius: 50%;
    border: 1px solid rgba(0,180,216,0.3);
    animation: ringPulse 4s ease-in-out infinite;
  }
  .ring:nth-child(1) { width: 320px; height: 320px; top: 50%; left: 50%; transform: translate(-50%,-50%); animation-delay: 0s; }
  .ring:nth-child(2) { width: 460px; height: 460px; top: 50%; left: 50%; transform: translate(-50%,-50%); animation-delay: .8s; }
  .ring:nth-child(3) { width: 600px; height: 600px; top: 50%; left: 50%; transform: translate(-50%,-50%); animation-delay: 1.6s; }

  @keyframes ringPulse {
    0%, 100% { opacity: .15; transform: translate(-50%,-50%) scale(1); }
    50%       { opacity: .4;  transform: translate(-50%,-50%) scale(1.04); }
  }

  .logo-wrap {
    position: relative; z-index: 2;
    text-align: center;
    animation: logoFloat 6s ease-in-out infinite;
  }

  @keyframes logoFloat {
    0%, 100% { transform: translateY(0); }
    50%       { transform: translateY(-12px); }
  }

  .logo-wrap img {
    width: 210px;
    filter: drop-shadow(0 0 30px rgba(0,180,216,0.7)) drop-shadow(0 0 60px rgba(0,100,200,0.5));
    border-radius: 12px;
  }

  .tagline {
    position: relative; z-index: 2;
    margin-top: 28px;
    color: #caf0f8;
    font-family: 'Playfair Display', serif;
    font-size: 1.55rem;
    font-weight: 700;
    letter-spacing: .04em;
    text-align: center;
    text-shadow: 0 2px 20px rgba(0,180,216,0.6);
    animation: fadeSlideUp 1.2s .4s both;
  }

  .sub {
    position: relative; z-index: 2;
    margin-top: 12px;
    color: rgba(202,240,248,0.65);
    font-size: .95rem;
    letter-spacing: .08em;
    text-transform: uppercase;
    text-align: center;
    animation: fadeSlideUp 1.2s .6s both;
  }

  /* Floating orbs */
  .orb {
    position: absolute;
    border-radius: 50%;
    filter: blur(40px);
    animation: orbDrift linear infinite;
    opacity: .35;
  }
  .orb1 { width: 120px; height: 120px; background: #00b4d8; top: 10%; left: 5%;  animation-duration: 9s; }
  .orb2 { width:  80px; height:  80px; background: #ffd60a; top: 70%; left: 75%; animation-duration: 7s; animation-delay: -3s; }
  .orb3 { width: 100px; height: 100px; background: #2dc653; top: 85%; left: 10%; animation-duration: 11s; animation-delay: -5s; }

  @keyframes orbDrift {
    0%   { transform: translate(0,0) scale(1); }
    33%  { transform: translate(20px,-25px) scale(1.1); }
    66%  { transform: translate(-15px,15px) scale(.95); }
    100% { transform: translate(0,0) scale(1); }
  }

  /* ── RIGHT PANEL ── */
  .panel-right {
    flex: 1;
    background: rgba(3,7,30,0.85);
    backdrop-filter: blur(24px);
    -webkit-backdrop-filter: blur(24px);
    padding: 24px 48px !important;
    display: flex; flex-direction: column;
    justify-content: center;
    border-left: 1px solid var(--border);
    position: relative;
    overflow: hidden;
  }

  .panel-right::before {
    content: '';
    position: absolute; inset: 0;
    background: radial-gradient(ellipse at 80% 10%, rgba(0,180,216,0.08) 0%, transparent 60%);
    pointer-events: none;
  }

  /* ── TABS ── */
  .tabs {
    display: flex; gap: 0;
    margin-bottom: 36px;
    background: rgba(255,255,255,0.04);
    border-radius: 14px;
    padding: 4px;
    border: 1px solid var(--border);
  }

  .tab-btn {
    flex: 1;
    padding: 12px 0;
    border: none;
    background: transparent;
    color: rgba(255,255,255,0.4);
    font-family: 'Nunito', sans-serif;
    font-size: 1rem;
    font-weight: 700;
    letter-spacing: .06em;
    text-transform: uppercase;
    cursor: pointer;
    border-radius: 10px;
    transition: all .35s ease;
    position: relative;
    overflow: hidden;
  }

  .tab-btn.active {
    background: linear-gradient(135deg, var(--sky), var(--deep));
    color: #fff;
    box-shadow: 0 4px 20px rgba(0,180,216,0.4);
  }

  .tab-btn::after {
    content: '';
    position: absolute; inset: 0;
    background: linear-gradient(135deg, rgba(255,255,255,0.15), transparent);
    opacity: 0;
    transition: opacity .3s;
  }
  .tab-btn:hover::after { opacity: 1; }

  /* ── FORMS ── */
  .form-panel { display: none; animation: formIn .45s ease both; }
  .form-panel.active { display: flex; flex-direction: column; gap: 18px; }

  @keyframes formIn {
    from { opacity: 0; transform: translateX(18px); }
    to   { opacity: 1; transform: translateX(0); }
  }

  .form-title {
    font-family: 'Playfair Display', serif;
    font-size: 1.75rem;
    font-weight: 900;
    color: #fff;
    margin-bottom: 4px;
    background: linear-gradient(90deg, #caf0f8, var(--sky));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }

  .form-sub { color: rgba(255,255,255,0.38); font-size: .88rem; margin-bottom: 8px; }

  .field-group { display: flex; flex-direction: column; gap: 6px; }
  .field-group label { color: rgba(202,240,248,0.7); font-size: .82rem; font-weight: 600; letter-spacing: .05em; text-transform: uppercase; }

  .input-wrap { position: relative; }
  .input-wrap svg { position: absolute; left: 14px; top: 50%; transform: translateY(-50%); width: 18px; height: 18px; stroke: rgba(0,180,216,0.5); fill: none; pointer-events: none; transition: stroke .3s; }

  .input-wrap input {
    width: 100%;
    padding: 13px 14px 13px 44px;
    background: rgba(255,255,255,0.05);
    border: 1px solid rgba(0,180,216,0.2);
    border-radius: 12px;
    color: #fff;
    font-family: 'Nunito', sans-serif;
    font-size: .97rem;
    outline: none;
    transition: border-color .3s, background .3s, box-shadow .3s;
  }

  .input-wrap input::placeholder { color: rgba(255,255,255,0.22); }

  .input-wrap input:focus {
    border-color: var(--sky);
    background: rgba(0,180,216,0.07);
    box-shadow: 0 0 0 3px rgba(0,180,216,0.15), 0 0 20px rgba(0,180,216,0.1);
  }

  .input-wrap input:focus + svg,
  .input-wrap input:focus ~ svg { stroke: var(--sky); }

  /* Fix icon to be after input in DOM but position absolute works fine */
  .input-wrap .eye-icon { left: auto; right: 14px; cursor: pointer; }

  .forgot { text-align: right; margin-top: -8px; }
  .forgot a { color: var(--sky); font-size: .82rem; text-decoration: none; opacity: .8; transition: opacity .2s; }
  .forgot a:hover { opacity: 1; }

  /* Row for two fields */
  .row-2 { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; }

  /* ── SUBMIT BUTTON ── */
  .btn-submit {
    position: relative;
    padding: 14px;
    border: none;
    border-radius: 14px;
    background: linear-gradient(135deg, #00b4d8, #023e8a);
    color: #fff;
    font-family: 'Nunito', sans-serif;
    font-size: 1.05rem;
    font-weight: 800;
    letter-spacing: .08em;
    text-transform: uppercase;
    cursor: pointer;
    overflow: hidden;
    transition: transform .2s, box-shadow .3s;
    box-shadow: 0 6px 30px rgba(0,180,216,0.4);
    margin-top: 4px;
  }

  .btn-submit::before {
    content: '';
    position: absolute; inset: 0;
    background: linear-gradient(135deg, rgba(255,255,255,0.18), transparent 60%);
  }

  .btn-submit::after {
    content: '';
    position: absolute;
    top: -60%; left: -80%;
    width: 60%; height: 220%;
    background: rgba(255,255,255,0.25);
    transform: skewX(-25deg);
    transition: left .5s ease;
  }

  .btn-submit:hover { transform: translateY(-2px); box-shadow: 0 10px 40px rgba(0,180,216,0.55); }
  .btn-submit:hover::after { left: 160%; }
  .btn-submit:active { transform: translateY(0); }

  /* ── DIVIDER ── */
  .divider { display: flex; align-items: center; gap: 12px; }
  .divider span { flex: 1; height: 1px; background: rgba(0,180,216,0.15); }
  .divider p { color: rgba(255,255,255,0.28); font-size: .8rem; white-space: nowrap; }

  /* ── SOCIAL ── */
  .social-row { display: flex; gap: 12px; }
  .social-btn {
    flex: 1;
    padding: 11px;
    border: 1px solid rgba(0,180,216,0.2);
    background: rgba(255,255,255,0.04);
    border-radius: 11px;
    color: rgba(255,255,255,0.65);
    font-family: 'Nunito', sans-serif;
    font-size: .85rem;
    cursor: pointer;
    display: flex; align-items: center; justify-content: center; gap: 8px;
    transition: border-color .3s, background .3s, color .3s;
  }
  .social-btn:hover { border-color: var(--sky); background: rgba(0,180,216,0.08); color: #fff; }

  /* Glitter particles overlay */
  .glitter-star {
    position: fixed;
    pointer-events: none;
    border-radius: 50%;
    animation: glitterFall linear forwards;
    z-index: 5;
  }

  @keyframes glitterFall {
    0%   { opacity: 0; transform: translateY(-10px) scale(0) rotate(0deg); }
    20%  { opacity: 1; }
    80%  { opacity: .8; }
    100% { opacity: 0; transform: translateY(60px) scale(1.2) rotate(360deg); }
  }

  @keyframes fadeSlideUp {
    from { opacity: 0; transform: translateY(20px); }
    to   { opacity: 1; transform: translateY(0); }
  }

  /* ── RESPONSIVE ── */
  @media (max-width: 760px) {
    body { overflow-y: auto; align-items: flex-start; }
    .wrapper { flex-direction: column; max-width: 100%; min-height: unset; border-radius: 0; }
    .panel-left { padding: 36px 24px; }
    .panel-right { padding: 36px 24px; }
    .row-2 { grid-template-columns: 1fr; }
  }
</style>
</head>
<body>

<!-- Animated background canvas -->
<canvas id="bg"></canvas>
<!-- Glitter canvas -->
<canvas id="glitter"></canvas>

<div class="wrapper">
  <!-- LEFT PANEL -->
  <div class="panel-left">
    <div class="ring"></div>
    <div class="ring"></div>
    <div class="ring"></div>
    <div class="orb orb1"></div>
    <div class="orb orb2"></div>
    <div class="orb orb3"></div>

    <div class="logo-wrap">
      <img src="assets/logo/footer-1.png" alt="K-Seva Logo" onerror="this.style.display='none'">
    </div>
    <p class="tagline">Empowering Communities<br>Through Service</p>
    <p class="sub">Your Trusted Online Service Portal</p>
  </div>

  <!-- RIGHT PANEL -->
  <div class="panel-right">
    <!-- Tabs -->
    <div class="tabs">
      <button class="tab-btn active" onclick="switchTab('signin')">Sign In</button>
      <button class="tab-btn" onclick="switchTab('signup')">Sign Up</button>
    </div>

    <!-- SIGN IN FORM -->
    <div class="form-panel active" id="signin">
      <h2 class="form-title">Welcome Back</h2>
      <p class="form-sub">Login to access your K-Seva dashboard</p>

      <div class="field-group">
        <label>Email Address</label>
        <div class="input-wrap">
          <input type="email" placeholder="you@email.com">
          <svg viewBox="0 0 24 24" stroke-width="1.8"><path d="M4 4h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
        </div>
      </div>

      <div class="field-group">
        <label>Password</label>
        <div class="input-wrap">
          <input type="password" placeholder="Enter your password" id="si-pass">
          <svg viewBox="0 0 24 24" stroke-width="1.8"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
        </div>
      </div>

      <div class="forgot"><a href="#">Forgot password?</a></div>

      <button class="btn-submit" onclick="handleAuth('signin')">Sign In to K-Seva</button>

      <!-- <div class="divider"><span></span><p>or continue with</p><span></span></div>

      <div class="social-row">
        <button class="social-btn">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21.5 12.1c0-.7-.1-1.4-.2-2H12v3.8h5.3c-.2 1.2-.9 2.2-1.9 2.9v2.4h3.1c1.8-1.7 2.9-4.1 2.9-7.1z" fill="#4285F4" stroke="none"/><path d="M12 22c2.7 0 5-0.9 6.6-2.4l-3.1-2.4c-.9.6-2 1-3.5 1-2.7 0-4.9-1.8-5.7-4.2H3.1v2.5C4.8 19.9 8.1 22 12 22z" fill="#34A853" stroke="none"/><path d="M6.3 13.9c-.2-.6-.3-1.2-.3-1.9s.1-1.3.3-1.9V7.6H3.1C2.4 9 2 10.4 2 12s.4 3 1.1 4.4l3.2-2.5z" fill="#FBBC05" stroke="none"/><path d="M12 5.9c1.5 0 2.8.5 3.9 1.5l2.9-2.9C17 2.8 14.7 2 12 2 8.1 2 4.8 4.1 3.1 7.4l3.2 2.5C7.1 7.7 9.3 5.9 12 5.9z" fill="#EA4335" stroke="none"/></svg>
          Google
        </button>
        <button class="social-btn">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="#1877F2"><path d="M24 12.07C24 5.41 18.63 0 12 0S0 5.41 0 12.07C0 18.1 4.39 23.1 10.13 24v-8.44H7.08v-3.49h3.04V9.41c0-3.02 1.8-4.7 4.54-4.7 1.31 0 2.68.24 2.68.24v2.97h-1.51c-1.49 0-1.95.93-1.95 1.88v2.27h3.32l-.53 3.49h-2.79V24C19.61 23.1 24 18.1 24 12.07z"/></svg>
          Facebook
        </button>
      </div> -->
    </div>

    <!-- SIGN UP FORM -->
    <div class="form-panel" id="signup">
      <h2 class="form-title">Create Account</h2>
      <p class="form-sub">Join K-Seva and access 100+ government services</p>

      <div class="row-2">
        <div class="field-group">
          <label>First Name</label>
          <div class="input-wrap">
            <input type="text" placeholder="Ravi">
            <svg viewBox="0 0 24 24" stroke-width="1.8"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
          </div>
        </div>
        <div class="field-group">
          <label>Last Name</label>
          <div class="input-wrap">
            <input type="text" placeholder="Kumar">
            <svg viewBox="0 0 24 24" stroke-width="1.8"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
          </div>
        </div>
      </div>

      <div class="field-group">
        <label>Mobile Number</label>
        <div class="input-wrap">
          <input type="tel" placeholder="+91 98765 43210">
          <svg viewBox="0 0 24 24" stroke-width="1.8"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 1.27h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.91a16 16 0 0 0 6.12 6.12l.98-.98a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
        </div>
      </div>

      <div class="field-group">
        <label>Email Address</label>
        <div class="input-wrap">
          <input type="email" placeholder="you@email.com">
          <svg viewBox="0 0 24 24" stroke-width="1.8"><path d="M4 4h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
        </div>
      </div>

      <div class="field-group">
        <label>Create Password</label>
        <div class="input-wrap">
          <input type="password" placeholder="Min 8 characters">
          <svg viewBox="0 0 24 24" stroke-width="1.8"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
        </div>
      </div>

      <button class="btn-submit" onclick="handleAuth('signup')">Create My Account</button>

      <!-- <div class="divider"><span></span><p>or sign up with</p><span></span></div>

      <div class="social-row">
        <button class="social-btn">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21.5 12.1c0-.7-.1-1.4-.2-2H12v3.8h5.3c-.2 1.2-.9 2.2-1.9 2.9v2.4h3.1c1.8-1.7 2.9-4.1 2.9-7.1z" fill="#4285F4" stroke="none"/><path d="M12 22c2.7 0 5-0.9 6.6-2.4l-3.1-2.4c-.9.6-2 1-3.5 1-2.7 0-4.9-1.8-5.7-4.2H3.1v2.5C4.8 19.9 8.1 22 12 22z" fill="#34A853" stroke="none"/><path d="M6.3 13.9c-.2-.6-.3-1.2-.3-1.9s.1-1.3.3-1.9V7.6H3.1C2.4 9 2 10.4 2 12s.4 3 1.1 4.4l3.2-2.5z" fill="#FBBC05" stroke="none"/><path d="M12 5.9c1.5 0 2.8.5 3.9 1.5l2.9-2.9C17 2.8 14.7 2 12 2 8.1 2 4.8 4.1 3.1 7.4l3.2 2.5C7.1 7.7 9.3 5.9 12 5.9z" fill="#EA4335" stroke="none"/></svg>
          Google
        </button>
        <button class="social-btn">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="#1877F2"><path d="M24 12.07C24 5.41 18.63 0 12 0S0 5.41 0 12.07C0 18.1 4.39 23.1 10.13 24v-8.44H7.08v-3.49h3.04V9.41c0-3.02 1.8-4.7 4.54-4.7 1.31 0 2.68.24 2.68.24v2.97h-1.51c-1.49 0-1.95.93-1.95 1.88v2.27h3.32l-.53 3.49h-2.79V24C19.61 23.1 24 18.1 24 12.07z"/></svg>
          Facebook
        </button>
      </div> -->
    </div>
  </div>
</div>

<script>
// ── TAB SWITCHING ──
function switchTab(tab) {
  document.querySelectorAll('.tab-btn').forEach((b,i) => b.classList.toggle('active', (tab==='signin'&&i===0)||(tab==='signup'&&i===1)));
  document.querySelectorAll('.form-panel').forEach(p => { p.classList.remove('active'); });
  const target = document.getElementById(tab);
  // trigger re-animation
  setTimeout(() => target.classList.add('active'), 10);
  spawnGlitterBurst();
}

// ── BACKGROUND CANVAS (star field) ──
const bgCanvas = document.getElementById('bg');
const bgCtx = bgCanvas.getContext('2d');
let stars = [];

function resizeCanvases() {
  bgCanvas.width = glCanvas.width = window.innerWidth;
  bgCanvas.height = glCanvas.height = window.innerHeight;
  initStars();
}

function initStars() {
  stars = Array.from({ length: 180 }, () => ({
    x: Math.random() * bgCanvas.width,
    y: Math.random() * bgCanvas.height,
    r: Math.random() * 1.6 + .2,
    a: Math.random(),
    spd: Math.random() * .008 + .003,
    phase: Math.random() * Math.PI * 2,
  }));
}

function drawBg(t) {
  bgCtx.fillStyle = '#03071e';
  bgCtx.fillRect(0, 0, bgCanvas.width, bgCanvas.height);

  // draw nebula gradient
  const grd = bgCtx.createRadialGradient(bgCanvas.width*.15, bgCanvas.height*.5, 0, bgCanvas.width*.15, bgCanvas.height*.5, 600);
  grd.addColorStop(0, 'rgba(2,62,138,.35)');
  grd.addColorStop(1, 'transparent');
  bgCtx.fillStyle = grd;
  bgCtx.fillRect(0, 0, bgCanvas.width, bgCanvas.height);

  const grd2 = bgCtx.createRadialGradient(bgCanvas.width*.85, bgCanvas.height*.2, 0, bgCanvas.width*.85, bgCanvas.height*.2, 400);
  grd2.addColorStop(0, 'rgba(0,119,182,.12)');
  grd2.addColorStop(1, 'transparent');
  bgCtx.fillStyle = grd2;
  bgCtx.fillRect(0, 0, bgCanvas.width, bgCanvas.height);

  stars.forEach(s => {
    const alpha = .3 + .7 * (Math.sin(t * s.spd + s.phase) * .5 + .5);
    bgCtx.beginPath();
    bgCtx.arc(s.x, s.y, s.r, 0, Math.PI * 2);
    bgCtx.fillStyle = `rgba(202,240,248,${alpha})`;
    bgCtx.fill();
  });
}

// ── GLITTER CANVAS ──
const glCanvas = document.getElementById('glitter');
const glCtx = glCanvas.getContext('2d');
let glitters = [];

const COLORS = ['#00b4d8','#caf0f8','#ffd60a','#2dc653','#ffffff','#90e0ef','#ffd166'];

function spawnGlitter(x, y) {
  const count = 6;
  for (let i = 0; i < count; i++) {
    glitters.push({
      x, y,
      vx: (Math.random() - .5) * 3,
      vy: -(Math.random() * 3 + 1),
      r: Math.random() * 3 + 1,
      life: 0,
      maxLife: 60 + Math.random() * 40,
      color: COLORS[Math.floor(Math.random() * COLORS.length)],
      rot: Math.random() * Math.PI * 2,
      rotSpd: (Math.random() - .5) * .2,
      shape: Math.random() > .5 ? 'circle' : 'star',
    });
  }
}

function spawnGlitterBurst() {
  const x = glCanvas.width * .62;
  const y = glCanvas.height * .35;
  for (let i = 0; i < 40; i++) spawnGlitter(x + (Math.random()-.5)*200, y + (Math.random()-.5)*100);
}

// Continuous ambient glitter
setInterval(() => {
  const x = Math.random() * glCanvas.width;
  const y = Math.random() * glCanvas.height;
  spawnGlitter(x, y);
}, 80);

function drawStar(ctx, cx, cy, r) {
  ctx.beginPath();
  for (let i = 0; i < 5; i++) {
    const angle = (i * 4 * Math.PI / 5) - Math.PI / 2;
    const xi = cx + r * Math.cos(angle);
    const yi = cy + r * Math.sin(angle);
    i === 0 ? ctx.moveTo(xi, yi) : ctx.lineTo(xi, yi);
  }
  ctx.closePath();
}

function drawGlitters() {
  glCtx.clearRect(0, 0, glCanvas.width, glCanvas.height);
  glitters = glitters.filter(g => g.life < g.maxLife);
  glitters.forEach(g => {
    g.life++;
    g.x += g.vx;
    g.y += g.vy;
    g.vy += .06; // gravity
    g.rot += g.rotSpd;
    const progress = g.life / g.maxLife;
    const alpha = progress < .2 ? progress / .2 : 1 - ((progress - .2) / .8);
    glCtx.save();
    glCtx.translate(g.x, g.y);
    glCtx.rotate(g.rot);
    glCtx.globalAlpha = alpha;
    glCtx.fillStyle = g.color;
    glCtx.shadowColor = g.color;
    glCtx.shadowBlur = 6;
    if (g.shape === 'star') {
      drawStar(glCtx, 0, 0, g.r);
      glCtx.fill();
    } else {
      glCtx.beginPath();
      glCtx.arc(0, 0, g.r, 0, Math.PI * 2);
      glCtx.fill();
    }
    glCtx.restore();
  });
}

// ── MAIN LOOP ──
let t = 0;
function loop() {
  t++;
  drawBg(t);
  drawGlitters();
  requestAnimationFrame(loop);
}

window.addEventListener('resize', resizeCanvases);
resizeCanvases();
loop();

// Spawn initial burst
setTimeout(spawnGlitterBurst, 600);

// Mouse glitter trail
document.addEventListener('mousemove', e => {
  if (Math.random() > .7) spawnGlitter(e.clientX, e.clientY);
});

// ── AUTH HANDLER ──
function handleAuth(type) {
  spawnGlitterBurst();
  const btn = document.querySelector(`#${type} .btn-submit`);
  const orig = btn.textContent;
  btn.textContent = type === 'signin' ? 'Signing In…' : 'Creating Account…';
  btn.style.opacity = '.8';
  setTimeout(() => { btn.textContent = orig; btn.style.opacity = '1'; }, 2000);
}
</script>
</body>
</html>