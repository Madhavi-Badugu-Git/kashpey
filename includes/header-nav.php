<?php
// This file requires these variables to be defined before including:
// $initials, $fullName, $email (from session/database)
?>

<!-- Header Navigation Component with Sidebar -->
<div class="mobile-header">
    <div class="header-content">
        <button class="menu-btn" onclick="openSidebar()">
            <i class="fas fa-bars"></i>
        </button>
        <div class="logo-area">
            <img src="assets/logo/kashpe.png" alt="K-Seva" onerror="this.style.display='none'">
        </div>
        <a href="edit-retailer-profile.php" class="profile-btn">
            <span><?= htmlspecialchars($firstName ?? 'User') ?></span>
            <i class="fas fa-user" style="font-size: 0.8rem; color: #00b4d8;"></i>
        </a>
    </div>
</div>

<!-- Sidebar Modal -->
<div class="sidebar-modal" id="sidebarModal">
    <div class="sidebar-content">
        <div style="display: flex; justify-content: flex-end; margin-bottom: 10px;">
            <button onclick="closeSidebar()" style="background: none; border: none; font-size: 1.3rem; cursor: pointer; color: #6c757d; padding: 5px;">
                <i class="fas fa-times"></i>
            </button>
        </div>
        
        <div class="sidebar-header">
            <div class="sidebar-avatar"><?= htmlspecialchars($initials ?? 'U') ?></div>
            <div class="sidebar-user">
                <h4><?= htmlspecialchars($fullName ?? 'User') ?></h4>
                <p><?= htmlspecialchars($email ?? 'user@example.com') ?></p>
            </div>
        </div>
        
     
        <button class="sidebar-menu-item" onclick="window.location.href='retailer-wallet'"><i class="fas fa-wallet"></i><span>Wallet & Commission</span></button>
        <button class="sidebar-menu-item" onclick="window.open('https://mobile.k-seva.com/blog')"><i class="fas fa-blog"></i><span>Blogs</span></button>
        <button class="sidebar-menu-item" onclick="window.open('https://mobile.k-seva.com/privacy-policy')"><i class="fas fa-user-secret"></i><span>Privacy Policy</span></button>
        <button class="sidebar-menu-item" onclick="window.open('https://mobile.k-seva.com/terms')"><i class="fas fa-balance-scale"></i><span>Terms of Use</span></button>
        <button class="sidebar-menu-item" onclick="window.open('https://mobile.k-seva.com/refund-policy')"><i class="fas fa-file-invoice-dollar"></i><span>Refund Policy</span></button>
        <button class="sidebar-menu-item" onclick="window.open('https://mobile.k-seva.com/refund-cancellation-policy')"><i class="fas fa-file-invoice-dollar"></i><span>Refund & Cancellation</span></button>
        <button class="sidebar-menu-item" onclick="window.location.href='retailer-support'"><i class="fas fa-headset"></i><span>Support</span></button>
        <button class="sidebar-menu-item" onclick="window.location.href='retailer-settings'"><i class="fas fa-cog"></i><span>Settings</span></button>
        <button class="sidebar-menu-item logout" onclick="logout()"><i class="fas fa-sign-out-alt"></i><span>Logout</span></button>
    </div>
</div>

<style>
/* Header Styles */
.mobile-header {
    background: #ffffff;
    position: sticky;
    top: 0;
    z-index: 100;
    padding: 12px 16px;
    border-bottom: 1px solid #e8ecf1;
    box-shadow: 0 2px 8px rgba(0,0,0,0.02);
}
.header-content {
    max-width: 500px;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: relative;
}
.menu-btn {
    background: #f0f2f5;
    border: none;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.2s;
    z-index: 10;
}
.menu-btn:active {
    background: #e8ecf1;
    transform: scale(0.95);
}
.menu-btn i {
    font-size: 1.2rem;
    color: #1a1a2e;
}
.logo-area {
    position: absolute;
    left: 30%;
    transform: translateX(-50%);
    display: flex;
    align-items: center;
    gap: 8px;
}
.logo-area img {
    height: 50px;
    width: auto;
}
.profile-btn {
    display: flex;
    align-items: center;
    gap: 6px;
    background: #7CC913;
    padding: 4px 10px 4px 4px;
    border-radius: 50px;
    border: 1px solid #e8ecf1;
    cursor: pointer;
    text-decoration: none;
    z-index: 10;
}
.profile-btn span {
    font-size: 0.75rem;
    font-weight: 500;
    color: #1a1a2e;
    max-width: 80px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

/* Sidebar Modal Styles */
.sidebar-modal {
    display: none;
    position: fixed;
    background: rgba(0,0,0,0.5);
    backdrop-filter: blur(4px);
    z-index: 1000;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    align-items: flex-start;
    justify-content: flex-start;
}
.sidebar-modal.show {
    display: flex;
}
.sidebar-content {
    background: white;
    width: 280px;
    height: 100%;
    padding: 24px;
    animation: slideRight 0.3s;
    overflow-y: auto;
}
@keyframes slideRight {
    from { transform: translateX(-100%); }
    to { transform: translateX(0); }
}
.sidebar-header {
    display: flex;
    align-items: center;
    gap: 12px;
    padding-bottom: 20px;
    margin-bottom: 20px;
    border-bottom: 1px solid #e8ecf1;
}
.sidebar-avatar {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background: linear-gradient(135deg, #00b4d8, #023e8a);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2rem;
    font-weight: 700;
    color: white;
    flex-shrink: 0;
}
.sidebar-user h4 {
    font-size: 1rem;
    font-weight: 700;
    color: #1a1a2e;
}
.sidebar-user p {
    font-size: 0.7rem;
    color: #6c757d;
}
.sidebar-menu-item {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 14px 12px;
    color: #4a5568;
    font-size: 0.9rem;
    font-weight: 500;
    border-radius: 12px;
    cursor: pointer;
    width: 100%;
    background: transparent;
    border: none;
    text-align: left;
    transition: 0.2s;
}
.sidebar-menu-item:hover {
    background: #f0f2f5;
}
.sidebar-menu-item.logout {
    margin-top: 20px;
    border-top: 1px solid #e8ecf1;
    padding-top: 20px;
    color: #ff6b6b;
}
.sidebar-menu-item.logout:hover {
    background: #fff0f0;
}

/* Toast Message */
.toast-message {
    position: fixed;
    bottom: 80px;
    left: 16px;
    right: 16px;
    background: #1a1a2e;
    padding: 12px;
    border-radius: 12px;
    text-align: center;
    font-weight: 500;
    color: white;
    z-index: 2000;
    max-width: 500px;
    margin: 0 auto;
    animation: fadeUp 0.3s ease;
}
@keyframes fadeUp {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}
</style>

<script>
function openSidebar() { 
    document.getElementById('sidebarModal').classList.add('show');
}
function closeSidebar() { 
    document.getElementById('sidebarModal').classList.remove('show');
}
function logout() {
    if (confirm('Are you sure you want to logout?')) {
        window.location.href = 'logout.php';
    }
}
function showToast(message) {
    let toast = document.querySelector('.toast-message');
    if (toast) toast.remove();
    toast = document.createElement('div');
    toast.className = 'toast-message';
    toast.innerHTML = '<i class="fas fa-check-circle" style="margin-right: 8px; color: #00b4d8;"></i> ' + message;
    document.body.appendChild(toast);
    setTimeout(() => { 
        toast.style.opacity = '0'; 
        setTimeout(() => toast.remove(), 300); 
    }, 2000);
}

// Close sidebar when clicking outside
document.getElementById('sidebarModal')?.addEventListener('click', function(e) {
    if (e.target === this) closeSidebar();
});
</script>