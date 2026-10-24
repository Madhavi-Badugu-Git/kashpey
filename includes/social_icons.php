<!-- ═══════════════════════════════════════════
   K-SEVA — FLOATING ICONS + CHAT BOARD
   LEFT   : Call Button (blue + pulse + ripple)
   RIGHT  : WhatsApp Button (green + pulse + ripple)
   BOTTOM : Chat Board above WhatsApp (toggleable)
═══════════════════════════════════════════ -->

<!-- CALL ICON — LEFT -->
<div class="call_button_1">
    <a href="tel:<?php echo $comp_mobile; ?>" title="Call Us">
        <img src="upload/callsupport.gif" alt="call support">
    </a>
    <span class="call_tooltip">Call Us</span>
</div>

<!-- CHAT BOARD — appears above WhatsApp button -->
<div class="ks-chat-board" id="ksChatBoard">

    <!-- Header -->
    <div class="kcb-header">
        <div class="kcb-header-avatar">
            <img src="assets/images/logo.png" alt="K-Seva" onerror="this.style.display='none'">
            <span class="kcb-online-dot"></span>
        </div>
        <div class="kcb-header-info">
            <div class="kcb-header-name">K-Seva Support</div>
            <div class="kcb-header-status"><span class="kcb-dot"></span> Online · Typically replies instantly</div>
        </div>
        <button class="kcb-close-btn" onclick="toggleChat()" title="Close">
            <i class="fas fa-times"></i>
        </button>
    </div>

    <!-- Messages area -->
    <div class="kcb-messages" id="kcbMessages">

        <!-- Bot welcome message -->
        <div class="kcb-msg bot">
            <div class="kcb-msg-avatar"><i class="fas fa-headset"></i></div>
            <div class="kcb-msg-bubble">
                👋 Hello! Welcome to <strong>K-Seva</strong>.<br>
                How can we help you today?
                <div class="kcb-msg-time">Just now</div>
            </div>
        </div>

        <!-- Quick reply chips -->
        <div class="kcb-quick-replies" id="kcbQuickReplies">
            <button class="kcb-chip" onclick="quickReply('Services Info')">📋 Services Info</button>
            <button class="kcb-chip" onclick="quickReply('Franchise Query')">🏪 Franchise Query</button>
            <button class="kcb-chip" onclick="quickReply('Support')">🛠 Support</button>
            <button class="kcb-chip" onclick="quickReply('Pricing')">💰 Pricing</button>
        </div>

    </div>

    <!-- Input area -->
    <div class="kcb-input-wrap">
        <input type="text" id="kcbInput" class="kcb-input"
               placeholder="Type your message..."
               onkeydown="if(event.key==='Enter') sendMsg()">
        <button class="kcb-send-btn" onclick="sendMsg()" title="Send">
            <i class="fas fa-paper-plane"></i>
        </button>
    </div>

    <!-- Footer -->
    <div class="kcb-footer">
        <i class="fab fa-whatsapp" style="color:#25D366;margin-right:5px;"></i>
        Continue on
        <a href="https://api.whatsapp.com/send?phone=<?php echo $comp_mobile; ?>" target="_blank">WhatsApp</a>
    </div>

</div>

<!-- CHAT TOGGLE BUTTON — sits just above WhatsApp icon -->
<button class="ks-chat-toggle" id="ksChatToggle" onclick="toggleChat()" title="Chat with us">
    <i class="fas fa-comment-dots" id="ksChatIcon"></i>
    <span class="ks-chat-badge" id="ksChatBadge">1</span>
</button>

<!-- WHATSAPP ICON — RIGHT -->
<a href="https://api.whatsapp.com/send?phone=<?php echo $comp_mobile; ?>"
   class="float" target="_blank" title="Chat on WhatsApp">
    <i class="fab fa-whatsapp my-float"></i>
</a>

<style type="text/css">

/* ══════════════════════════════
   WHATSAPP — RIGHT SIDE
══════════════════════════════ */
.float {
    position: fixed;
    width: 60px; height: 60px;
    bottom: 30px; right: 30px;
    background: linear-gradient(135deg, #2FD000, #009446);
    color: #FFF; border-radius: 50%;
    text-align: center;
    box-shadow: 2px 2px 12px rgba(0,148,70,0.45);
    z-index: 1000;
    display: flex; align-items: center; justify-content: center;
    text-decoration: none;
    animation: wpPulse 2s infinite ease-in-out;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.float:hover { transform: scale(1.12) !important; box-shadow: 0 8px 28px rgba(0,148,70,0.60); animation-play-state: paused; }
.float i.my-float { font-size: 32px; line-height: 1; display: block; }
@keyframes wpPulse {
    0%,100% { transform: scale(1);    box-shadow: 2px 2px 12px rgba(0,148,70,0.45); }
    50%      { transform: scale(1.07); box-shadow: 0 6px 22px rgba(0,148,70,0.65); }
}
.float::before {
    content: ''; position: absolute;
    width: 100%; height: 100%; border-radius: 50%;
    background: rgba(47,208,0,0.30);
    animation: wpRipple 2s infinite ease-out; z-index: -1;
}
@keyframes wpRipple {
    0%   { transform: scale(1);    opacity: 0.70; }
    100% { transform: scale(1.80); opacity: 0; }
}

/* ══════════════════════════════
   CALL — LEFT SIDE
══════════════════════════════ */
.call_button_1 {
    position: fixed; bottom: 30px; left: 30px;
    z-index: 1000; display: flex; align-items: center; justify-content: center;
}
.call_button_1 a {
    display: flex; align-items: center; justify-content: center;
    width: 60px; height: 60px;
    background: linear-gradient(135deg, #1e88e5, #0d47a1);
    border-radius: 50%;
    box-shadow: 2px 2px 12px rgba(13,71,161,0.45);
    text-decoration: none;
    animation: callPulse 2s infinite ease-in-out;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    position: relative;
}
.call_button_1 a:hover { transform: scale(1.12) !important; box-shadow: 0 8px 28px rgba(13,71,161,0.65); animation-play-state: paused; }
.call_button_1 img { width: 44px; height: 44px; border-radius: 50%; object-fit: cover; border: 2px solid rgba(255,255,255,0.85); pointer-events: none; }
@keyframes callPulse {
    0%,100% { transform: scale(1);    box-shadow: 2px 2px 12px rgba(13,71,161,0.45); }
    50%      { transform: scale(1.07); box-shadow: 0 6px 22px rgba(13,71,161,0.65); }
}
.call_button_1 a::before {
    content: ''; position: absolute;
    width: 100%; height: 100%; border-radius: 50%;
    background: rgba(30,136,229,0.28);
    animation: callRipple 2s infinite ease-out; z-index: -1;
}
@keyframes callRipple {
    0%   { transform: scale(1);    opacity: 0.70; }
    100% { transform: scale(1.80); opacity: 0; }
}
.call_tooltip {
    visibility: hidden; opacity: 0;
    background: #0d2b4e; color: #fff;
    padding: 5px 14px; border-radius: 30px;
    position: absolute; bottom: 110%; left: 50%;
    transform: translateX(-50%);
    white-space: nowrap; font-size: 13px; font-weight: 600;
    box-shadow: 0 4px 12px rgba(0,0,0,0.30);
    transition: opacity 0.2s; pointer-events: none;
}
.call_tooltip::after {
    content: ''; position: absolute;
    top: 100%; left: 50%; transform: translateX(-50%);
    border: 5px solid transparent; border-top-color: #0d2b4e;
}
.call_button_1:hover .call_tooltip { visibility: visible; opacity: 1; }

/* ══════════════════════════════
   CHAT TOGGLE BUTTON
══════════════════════════════ */
.ks-chat-toggle {
    position: fixed;
    bottom: 102px; right: 30px;
    width: 54px; height: 54px;
    border-radius: 50%;
    background: linear-gradient(135deg, #4f46e5, #7c3aed);
    color: #fff; border: none; cursor: pointer;
    display: flex; align-items: center; justify-content: center;
    font-size: 22px;
    box-shadow: 0 4px 18px rgba(79,70,229,0.50);
    z-index: 1001;
    transition: transform .28s, box-shadow .28s;
    animation: chatBtnPulse 2.5s infinite ease-in-out;
}
.ks-chat-toggle:hover {
    transform: scale(1.14) !important;
    box-shadow: 0 8px 28px rgba(79,70,229,0.70);
    animation-play-state: paused;
}
@keyframes chatBtnPulse {
    0%,100% { transform: scale(1); }
    50%      { transform: scale(1.08); }
}
.ks-chat-toggle::before {
    content: ''; position: absolute;
    width: 100%; height: 100%; border-radius: 50%;
    background: rgba(79,70,229,0.30);
    animation: chatBtnRipple 2.5s infinite ease-out; z-index: -1;
}
@keyframes chatBtnRipple {
    0%   { transform: scale(1);    opacity: 0.70; }
    100% { transform: scale(1.90); opacity: 0; }
}

/* Unread badge */
.ks-chat-badge {
    position: absolute; top: -2px; right: -2px;
    width: 20px; height: 20px; border-radius: 50%;
    background: #e11d48; color: #fff;
    font-size: 11px; font-weight: 900;
    display: flex; align-items: center; justify-content: center;
    border: 2px solid #fff;
    animation: badgeBounce .6s ease infinite alternate;
}
@keyframes badgeBounce {
    from { transform: scale(1); }
    to   { transform: scale(1.18); }
}

/* ══════════════════════════════
   CHAT BOARD
══════════════════════════════ */
.ks-chat-board {
    position: fixed;
    bottom: 168px; right: 20px;
    width: 340px;
    border-radius: 22px;
    overflow: hidden;
    box-shadow: 0 16px 60px rgba(0,0,0,0.22), 0 4px 16px rgba(79,70,229,0.18);
    z-index: 1002;
    display: none;
    flex-direction: column;
    font-family: 'Nunito','Segoe UI',sans-serif;
    transform: translateY(20px) scale(0.95);
    opacity: 0;
    transition: transform .30s cubic-bezier(.34,1.56,.64,1), opacity .25s ease;
    border: 1px solid rgba(79,70,229,0.18);
}
.ks-chat-board.open {
    display: flex;
    transform: translateY(0) scale(1);
    opacity: 1;
}
/* Entry animation */
@keyframes chatSlideIn {
    from { transform: translateY(24px) scale(0.94); opacity: 0; }
    to   { transform: translateY(0)    scale(1);    opacity: 1; }
}
.ks-chat-board.open { animation: chatSlideIn .32s cubic-bezier(.34,1.56,.64,1) forwards; }

/* Header */
.kcb-header {
    background: linear-gradient(135deg, #1B2A4A, #4f46e5);
    padding: 16px 18px;
    display: flex; align-items: center; gap: 12px;
    position: relative;
}
.kcb-header-avatar {
    width: 42px; height: 42px; border-radius: 50%;
    background: rgba(255,255,255,0.15);
    display: flex; align-items: center; justify-content: center;
    flex-shrink: 0; position: relative; overflow: visible;
}
.kcb-header-avatar img {
    width: 42px; height: 42px; border-radius: 50%;
    object-fit: contain; background: #fff; padding: 3px;
}
.kcb-online-dot {
    position: absolute; bottom: 1px; right: 1px;
    width: 11px; height: 11px; border-radius: 50%;
    background: #22c55e; border: 2px solid #fff;
    animation: onlinePulse 2s infinite;
}
@keyframes onlinePulse { 0%,100%{opacity:1} 50%{opacity:.5} }
.kcb-header-info { flex: 1; }
.kcb-header-name { color: #fff; font-size: 15px; font-weight: 800; }
.kcb-header-status {
    color: rgba(255,255,255,0.68); font-size: 11px; font-weight: 600;
    display: flex; align-items: center; gap: 5px; margin-top: 2px;
}
.kcb-dot {
    width: 7px; height: 7px; border-radius: 50%; background: #22c55e;
    display: inline-block; flex-shrink: 0;
}
.kcb-close-btn {
    background: rgba(255,255,255,0.14); border: none; color: #fff;
    width: 30px; height: 30px; border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    cursor: pointer; font-size: 14px; flex-shrink: 0;
    transition: background .2s;
}
.kcb-close-btn:hover { background: rgba(255,255,255,0.28); }

/* Messages */
.kcb-messages {
    background: #f7f8fc;
    padding: 16px 14px 10px;
    min-height: 200px; max-height: 300px;
    overflow-y: auto;
    display: flex; flex-direction: column; gap: 10px;
    scroll-behavior: smooth;
}
.kcb-messages::-webkit-scrollbar { width: 4px; }
.kcb-messages::-webkit-scrollbar-thumb { background: #d0d5e8; border-radius: 4px; }

/* Message bubble */
.kcb-msg {
    display: flex; align-items: flex-end; gap: 8px;
}
.kcb-msg.user { flex-direction: row-reverse; }

.kcb-msg-avatar {
    width: 30px; height: 30px; border-radius: 50%;
    background: linear-gradient(135deg, #4f46e5, #7c3aed);
    color: #fff; font-size: 14px;
    display: flex; align-items: center; justify-content: center;
    flex-shrink: 0;
}
.kcb-msg.user .kcb-msg-avatar {
    background: linear-gradient(135deg, #1B2A4A, #29ABE2);
}

.kcb-msg-bubble {
    max-width: 78%;
    padding: 10px 14px;
    border-radius: 16px 16px 16px 4px;
    background: #fff;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    font-size: 13px; color: #1B2A4A; line-height: 1.55;
    position: relative;
}
.kcb-msg.user .kcb-msg-bubble {
    border-radius: 16px 16px 4px 16px;
    background: linear-gradient(135deg, #4f46e5, #7c3aed);
    color: #fff;
    box-shadow: 0 2px 12px rgba(79,70,229,0.28);
}
.kcb-msg-time {
    font-size: 10px; color: #9ca3af; margin-top: 4px;
    text-align: right;
}
.kcb-msg.user .kcb-msg-time { color: rgba(255,255,255,0.65); }

/* Typing indicator */
.kcb-typing {
    display: flex; align-items: center; gap: 8px;
}
.kcb-typing-dots {
    display: flex; gap: 4px;
    padding: 10px 14px;
    background: #fff; border-radius: 16px 16px 16px 4px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
}
.kcb-typing-dots span {
    width: 7px; height: 7px; border-radius: 50%;
    background: #a5b4fc;
    animation: typingDot 1.2s infinite ease-in-out;
}
.kcb-typing-dots span:nth-child(2) { animation-delay: .2s; }
.kcb-typing-dots span:nth-child(3) { animation-delay: .4s; }
@keyframes typingDot {
    0%,80%,100% { transform: scale(1);    background: #c7d2fe; }
    40%          { transform: scale(1.4); background: #4f46e5; }
}

/* Quick reply chips */
.kcb-quick-replies {
    display: flex; flex-wrap: wrap; gap: 7px;
    padding: 0 0 4px 38px;
}
.kcb-chip {
    padding: 6px 14px; border-radius: 50px;
    background: #fff;
    border: 1.5px solid #c7d2fe; color: #4f46e5;
    font-size: 12px; font-weight: 700;
    cursor: pointer; font-family: inherit;
    transition: background .2s, color .2s, border-color .2s;
    white-space: nowrap;
}
.kcb-chip:hover {
    background: #4f46e5; color: #fff; border-color: #4f46e5;
}

/* Input */
.kcb-input-wrap {
    display: flex; gap: 8px; align-items: center;
    padding: 10px 14px;
    background: #fff;
    border-top: 1px solid #e8eeff;
}
.kcb-input {
    flex: 1; padding: 9px 14px;
    border: 1.5px solid #e0e7ff; border-radius: 50px;
    font-size: 13px; font-family: inherit; color: #1B2A4A;
    background: #f7f8fc; outline: none;
    transition: border-color .2s;
}
.kcb-input:focus { border-color: #4f46e5; background: #fff; }
.kcb-input::placeholder { color: #9ca3af; }
.kcb-send-btn {
    width: 38px; height: 38px; border-radius: 50%;
    background: linear-gradient(135deg, #4f46e5, #7c3aed);
    color: #fff; border: none; cursor: pointer;
    display: flex; align-items: center; justify-content: center;
    font-size: 15px; flex-shrink: 0;
    box-shadow: 0 3px 10px rgba(79,70,229,0.38);
    transition: transform .2s, box-shadow .2s;
}
.kcb-send-btn:hover { transform: scale(1.10); box-shadow: 0 5px 16px rgba(79,70,229,0.52); }

/* Footer */
.kcb-footer {
    background: #fff;
    text-align: center; padding: 8px 14px;
    font-size: 12px; color: #9ca3af;
    border-top: 1px solid #f0f0f0;
}
.kcb-footer a { color: #25D366; font-weight: 700; text-decoration: none; }
.kcb-footer a:hover { text-decoration: underline; }

/* ══════════════════════════════
   RESPONSIVE
══════════════════════════════ */
@media screen and (max-width: 800px) {
    .float { width: 50px; height: 50px; bottom: 14px; right: 14px; }
    .float i.my-float { font-size: 26px; }
    .call_button_1 { bottom: 14px; left: 14px; }
    .call_button_1 a { width: 50px; height: 50px; }
    .call_button_1 img { width: 36px; height: 36px; }
    .call_tooltip { display: none; }
    .ks-chat-toggle { bottom: 78px; right: 14px; width: 46px; height: 46px; font-size: 19px; }
    .ks-chat-board { width: calc(100vw - 28px); right: 14px; bottom: 138px; }
    .kcb-messages { max-height: 240px; }
}
</style>

<script>
/* ── Predefined bot responses ── */
var botReplies = {
    'Services Info':   '📋 We offer GST Filing, AEPS, Money Transfer, PAN Card, Ayushman Bharat, Stock Broking, Digital Gold, and 30+ more services. Visit our Services page for details!',
    'Franchise Query': '🏪 Interested in a K-Seva franchise? Please fill our contact form or reach us on WhatsApp. Our team will get back to you within 24 hours.',
    'Support':         '🛠 For support, you can call us directly or chat on WhatsApp. Our helpdesk is available Mon–Sat, 9 AM to 6 PM.',
    'Pricing':         '💰 Most K-Seva services are offered at nominal charges. Please contact us for a detailed pricing sheet for your specific service requirement.',
    'default':         '👍 Thank you for your message! Our team will respond shortly. You can also reach us instantly on WhatsApp or call us directly.'
};

function toggleChat() {
    var board = document.getElementById('ksChatBoard');
    var icon  = document.getElementById('ksChatIcon');
    var badge = document.getElementById('ksChatBadge');

    if (board.classList.contains('open')) {
        board.classList.remove('open');
        icon.className = 'fas fa-comment-dots';
    } else {
        board.classList.add('open');
        icon.className = 'fas fa-times';
        /* Hide unread badge on open */
        if (badge) badge.style.display = 'none';
        scrollToBottom();
    }
}

function quickReply(text) {
    /* Hide chips after selection */
    var chips = document.getElementById('kcbQuickReplies');
    if (chips) chips.style.display = 'none';
    addUserMsg(text);
    showTyping(function() {
        addBotMsg(botReplies[text] || botReplies['default']);
    });
}

function sendMsg() {
    var input = document.getElementById('kcbInput');
    var text  = input.value.trim();
    if (!text) return;
    input.value = '';
    addUserMsg(text);
    showTyping(function() {
        addBotMsg(botReplies['default']);
    });
}

function addUserMsg(text) {
    var msgs = document.getElementById('kcbMessages');
    var now  = getTime();
    var div  = document.createElement('div');
    div.className = 'kcb-msg user';
    div.innerHTML =
        '<div class="kcb-msg-avatar"><i class="fas fa-user"></i></div>' +
        '<div class="kcb-msg-bubble">' + escHtml(text) +
        '<div class="kcb-msg-time">' + now + '</div></div>';
    msgs.appendChild(div);
    scrollToBottom();
}

function addBotMsg(text) {
    var msgs = document.getElementById('kcbMessages');
    var now  = getTime();
    var div  = document.createElement('div');
    div.className = 'kcb-msg bot';
    div.innerHTML =
        '<div class="kcb-msg-avatar"><i class="fas fa-headset"></i></div>' +
        '<div class="kcb-msg-bubble">' + text +
        '<div class="kcb-msg-time">' + now + '</div></div>';
    msgs.appendChild(div);
    scrollToBottom();
}

function showTyping(callback) {
    var msgs = document.getElementById('kcbMessages');
    var typing = document.createElement('div');
    typing.className = 'kcb-msg bot kcb-typing-wrap';
    typing.innerHTML =
        '<div class="kcb-msg-avatar"><i class="fas fa-headset"></i></div>' +
        '<div class="kcb-typing"><div class="kcb-typing-dots">' +
        '<span></span><span></span><span></span>' +
        '</div></div>';
    msgs.appendChild(typing);
    scrollToBottom();
    setTimeout(function() {
        msgs.removeChild(typing);
        callback();
    }, 1200);
}

function scrollToBottom() {
    var msgs = document.getElementById('kcbMessages');
    setTimeout(function() { msgs.scrollTop = msgs.scrollHeight; }, 50);
}

function getTime() {
    var d = new Date();
    var h = d.getHours(), m = d.getMinutes();
    var ampm = h >= 12 ? 'PM' : 'AM';
    h = h % 12 || 12;
    return h + ':' + (m < 10 ? '0' : '') + m + ' ' + ampm;
}

function escHtml(t) {
    return t.replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;');
}
</script>