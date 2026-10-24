<?php
/* ══════════════════════════════════════════════════════════════
   ADD THIS BLOCK at the very BOTTOM of your existing navbar.php
   (just before the closing ?> tag)
   It reads $_SESSION['toast_success'] set by retailer-login.php
   and renders a styled toast on whichever page the user lands on.
══════════════════════════════════════════════════════════════ */
?>

<!-- ══ GLOBAL SUCCESS TOAST — injected by navbar.php ══ -->
<style>
/* Toast container */
.kseva-toast-wrap {
    position: fixed;
    top: 24px;
    right: 24px;
    z-index: 99999;
    display: flex;
    flex-direction: column;
    gap: 10px;
    pointer-events: none;
}

/* Individual toast */
.kseva-toast {
    display: flex;
    align-items: center;
    gap: 14px;
    padding: 14px 22px 14px 18px;
    border-radius: 16px;
    font-family: 'Plus Jakarta Sans', 'Nunito', sans-serif;
    font-size: 0.9rem;
    font-weight: 600;
    color: #fff;
    min-width: 280px;
    max-width: 400px;
    pointer-events: all;
    position: relative;
    overflow: hidden;
    box-shadow: 0 12px 40px rgba(0,0,0,0.25);
    animation: ksevaToastIn 0.45s cubic-bezier(0.34,1.56,0.64,1) both;
}

.kseva-toast.success {
    background: linear-gradient(135deg, #003b66 0%, #006994 60%, #00a8cc 100%);
    border: 1px solid rgba(41,171,226,0.5);
}

.kseva-toast.error {
    background: linear-gradient(135deg, #5c0a14, #9e2235);
    border: 1px solid rgba(220,53,69,0.5);
}

/* Shimmer bar at bottom */
.kseva-toast::after {
    content: '';
    position: absolute;
    bottom: 0; left: 0;
    height: 3px;
    width: 100%;
    border-radius: 0 0 16px 16px;
    background: linear-gradient(90deg, #29abe2, #57d672, #ffd166, #29abe2);
    background-size: 200% 100%;
    animation: ksevaShimmer 2s linear infinite;
}

@keyframes ksevaShimmer {
    0%   { background-position: 200% 0; }
    100% { background-position: -200% 0; }
}

/* Progress bar (timer) */
.kseva-toast-progress {
    position: absolute;
    top: 0; left: 0;
    height: 3px;
    border-radius: 16px 16px 0 0;
    background: rgba(255,255,255,0.4);
    animation: ksevaProgress 4s linear forwards;
}

@keyframes ksevaProgress {
    from { width: 100%; }
    to   { width: 0%; }
}

/* Icon circle */
.kseva-toast-icon {
    width: 36px; height: 36px;
    border-radius: 50%;
    background: rgba(255,255,255,0.15);
    display: flex; align-items: center; justify-content: center;
    font-size: 1.1rem;
    flex-shrink: 0;
}

.kseva-toast-body { flex: 1; line-height: 1.4; }
.kseva-toast-title { font-size: 0.78rem; opacity: 0.75; text-transform: uppercase; letter-spacing: 0.8px; margin-bottom: 2px; }
.kseva-toast-msg   { font-size: 0.92rem; font-weight: 700; }

/* Close button */
.kseva-toast-close {
    background: rgba(255,255,255,0.15);
    border: none; cursor: pointer; color: #fff;
    width: 24px; height: 24px; border-radius: 50%;
    font-size: 0.75rem; display: flex; align-items: center; justify-content: center;
    transition: background 0.2s; flex-shrink: 0;
}
.kseva-toast-close:hover { background: rgba(255,255,255,0.3); }

@keyframes ksevaToastIn {
    from { opacity: 0; transform: translateX(60px) scale(0.92); }
    to   { opacity: 1; transform: translateX(0) scale(1); }
}

@keyframes ksevaToastOut {
    to { opacity: 0; transform: translateX(60px) scale(0.92); max-height: 0; padding: 0; margin: 0; }
}

@media (max-width: 480px) {
    .kseva-toast-wrap { top: 12px; right: 12px; left: 12px; }
    .kseva-toast { min-width: unset; max-width: 100%; }
}
</style>

<!-- Toast container (rendered once; JS populates it) -->
<div class="kseva-toast-wrap" id="ksevaToastWrap"></div>

<script>
/* ── Global K-Seva Toast Function ──
   Call from anywhere:  ksevaToast('Your message here', 'success')
   Types: 'success' | 'error'
*/
function ksevaToast(message, type = 'success', duration = 4000) {
    const icons = { success: '✓', error: '✕' };
    const titles = { success: 'Success', error: 'Error' };

    const wrap = document.getElementById('ksevaToastWrap');
    const toast = document.createElement('div');
    toast.className = `kseva-toast ${type}`;
    toast.innerHTML = `
        <div class="kseva-toast-progress"></div>
        <div class="kseva-toast-icon">${icons[type] || '✓'}</div>
        <div class="kseva-toast-body">
            <div class="kseva-toast-title">${titles[type] || 'Notice'}</div>
            <div class="kseva-toast-msg">${message}</div>
        </div>
        <button class="kseva-toast-close" onclick="this.closest('.kseva-toast').remove()">✕</button>
    `;
    wrap.appendChild(toast);

    // Auto-dismiss
    setTimeout(() => {
        if (toast.parentNode) {
            toast.style.animation = 'ksevaToastOut 0.35s ease forwards';
            setTimeout(() => toast.remove(), 340);
        }
    }, duration);
}

/* ── Fire session toast passed from PHP ── */
<?php if (!empty($_SESSION['toast_success'])): ?>
document.addEventListener('DOMContentLoaded', function () {
    ksevaToast(<?= json_encode($_SESSION['toast_success']); ?>, 'success');
});
<?php
    unset($_SESSION['toast_success']); // consume immediately — show only once
endif;
?>

/* ── Also expose showToast as alias so existing calls still work ── */
function showToast(message, type) { ksevaToast(message, type || 'success'); }
</script>