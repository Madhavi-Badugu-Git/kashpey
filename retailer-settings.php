<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: retailer-login");
    exit();
}
require_once('includes/dbConfig.php');

$userId = $_SESSION['user_id'];
$userName = $_SESSION['user_name'];

// Fetch user data
$stmt = $conn->prepare("SELECT firstName, lastName, email_id, avatar FROM tbl_retail_user WHERE id = ?");
$stmt->bind_param("i", $userId);
$stmt->execute();
$user = $stmt->get_result()->fetch_assoc();
$stmt->close();

$firstName = $user['firstName'] ?? $userName;
$email = $user['email_id'] ?? '';
$initials = strtoupper(substr($firstName, 0, 1)) ?: "U";

// Handle notification preference save (optional)
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['save_notification'])) {
    $notify_status = isset($_POST['notifications']) ? 1 : 0;
    // Save to database if you have a settings table
    // For now, just show toast message
    $_SESSION['toast_msg'] = "Notification preferences saved!";
    $_SESSION['toast_type'] = "success";
}

$toastMsg = $_SESSION['toast_msg'] ?? '';
$toastType = $_SESSION['toast_type'] ?? '';
unset($_SESSION['toast_msg']);
unset($_SESSION['toast_type']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes, viewport-fit=cover">
    <title>Settings | K-Seva Retailer</title>
    <link rel="shortcut icon" href="assets/logo/favicon.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            -webkit-tap-highlight-color: transparent;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #f5f7fa;
            color: #1a1a2e;
            min-height: 100vh;
            padding-bottom: 30px;
        }

        /* Header */
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
            align-items: center;
            gap: 16px;
        }

        .back-btn {
            background: #f0f2f5;
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            text-decoration: none;
            color: #1a1a2e;
            transition: 0.2s;
        }

        .back-btn:active {
            background: #e4e7eb;
            transform: scale(0.95);
        }

        .back-btn i {
            font-size: 1.2rem;
        }

        .page-title {
            font-size: 1.2rem;
            font-weight: 700;
            color: #1a1a2e;
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px 16px 40px;
        }

        /* Profile Card */
        .profile-card {
            background: linear-gradient(135deg, #00b4d8, #023e8a);
            border-radius: 24px;
            padding: 20px;
            margin-bottom: 24px;
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .profile-avatar {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: rgba(255,255,255,0.2);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            font-weight: 700;
            color: white;
        }

        .profile-info h3 {
            font-size: 1.1rem;
            font-weight: 700;
            color: white;
            margin-bottom: 4px;
        }

        .profile-info p {
            font-size: 0.7rem;
            color: rgba(255,255,255,0.8);
        }

        .profile-info .email {
            font-size: 0.65rem;
            color: rgba(255,255,255,0.6);
            margin-top: 2px;
        }

        /* Settings Card */
        .settings-card {
            background: #ffffff;
            border-radius: 24px;
            border: 1px solid #e8ecf1;
            overflow: hidden;
            margin-bottom: 20px;
        }

        .card-title {
            padding: 16px;
            background: #f8f9fa;
            border-bottom: 1px solid #e8ecf1;
            font-size: 0.8rem;
            font-weight: 700;
            color: #4a5568;
            letter-spacing: 0.5px;
        }

        .settings-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 16px;
            border-bottom: 1px solid #f0f2f5;
            cursor: pointer;
            transition: 0.2s;
        }

        .settings-item:active {
            background: #f8f9fa;
            transform: scale(0.98);
        }

        .settings-item:last-child {
            border-bottom: none;
        }

        .settings-left {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .settings-icon {
            width: 44px;
            height: 44px;
            background: #f0f8ff;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            color: #00b4d8;
        }

        .settings-info h4 {
            font-size: 0.9rem;
            font-weight: 600;
            color: #1a1a2e;
            margin-bottom: 4px;
        }

        .settings-info p {
            font-size: 0.7rem;
            color: #a0aec0;
        }

        .settings-right i {
            color: #a0aec0;
            font-size: 0.8rem;
        }

        /* Toggle Switch */
        .switch {
            position: relative;
            display: inline-block;
            width: 50px;
            height: 24px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            transition: .4s;
            border-radius: 34px;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 18px;
            width: 18px;
            left: 3px;
            bottom: 3px;
            background-color: white;
            transition: .4s;
            border-radius: 50%;
        }

        input:checked + .slider {
            background-color: #00b4d8;
        }

        input:checked + .slider:before {
            transform: translateX(26px);
        }

        /* Logout Button */
        .logout-section {
            margin-top: 30px;
        }

        .logout-btn {
            width: 100%;
            padding: 16px;
            background: #fff0f0;
            border: 1px solid #ffcdcd;
            border-radius: 28px;
            color: #ff6b6b;
            font-weight: 700;
            font-size: 1rem;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            transition: 0.2s;
        }

        .logout-btn:active {
            transform: scale(0.97);
            background: #ffe0e0;
        }

        /* Version Info */
        .version-info {
            text-align: center;
            margin-top: 24px;
            font-size: 0.65rem;
            color: #a0aec0;
        }

        /* Toast Message */
        .toast-message {
            position: fixed;
            bottom: 30px;
            left: 16px;
            right: 16px;
            background: #1a1a2e;
            padding: 12px 16px;
            border-radius: 12px;
            text-align: center;
            font-weight: 500;
            color: white;
            z-index: 2000;
            max-width: 500px;
            margin: 0 auto;
            animation: slideUp 0.3s ease forwards;
        }

        .toast-message.success {
            border-left: 4px solid #2eb84b;
        }

        .toast-message.error {
            border-left: 4px solid #ff6b6b;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideDown {
            from {
                opacity: 1;
                transform: translateY(0);
            }
            to {
                opacity: 0;
                transform: translateY(20px);
            }
        }
    </style>
</head>
<body>

<div class="mobile-header">
    <div class="header-content">
        <a href="retailer-dashboard" class="back-btn">
            <i class="fas fa-arrow-left"></i>
        </a>
        <span class="page-title">Settings</span>
        <div style="width: 40px;"></div>
    </div>
</div>

<div class="container">
    <!-- Profile Card -->
    <div class="profile-card">
        <div class="profile-avatar">
            <?= htmlspecialchars($initials) ?>
        </div>
        <div class="profile-info">
            <h3><?= htmlspecialchars($firstName) ?></h3>
            <p>Retailer Partner</p>
            <div class="email"><?= htmlspecialchars($email) ?></div>
        </div>
    </div>

    <!-- Account Settings -->
    <div class="settings-card">
        <div class="card-title"><i class="fas fa-user-circle" style="margin-right: 6px;"></i> Account</div>
        
        <div class="settings-item" onclick="window.location.href='edit-retailer-profile.php'">
            <div class="settings-left">
                <div class="settings-icon"><i class="fas fa-user-edit"></i></div>
                <div class="settings-info">
                    <h4>Edit Profile</h4>
                    <p>Update your personal information</p>
                </div>
            </div>
            <div class="settings-right"><i class="fas fa-chevron-right"></i></div>
        </div>

        <div class="settings-item" onclick="window.location.href='retailer-wallet'">
            <div class="settings-left">
                <div class="settings-icon"><i class="fas fa-wallet"></i></div>
                <div class="settings-info">
                    <h4>Wallet & Earnings</h4>
                    <p>View your balance and transactions</p>
                </div>
            </div>
            <div class="settings-right"><i class="fas fa-chevron-right"></i></div>
        </div>

        <div class="settings-item" onclick="window.location.href='change-password.php'">
            <div class="settings-left">
                <div class="settings-icon"><i class="fas fa-lock"></i></div>
                <div class="settings-info">
                    <h4>Change Password</h4>
                    <p>Update your login password</p>
                </div>
            </div>
            <div class="settings-right"><i class="fas fa-chevron-right"></i></div>
        </div>
    </div>

    <!-- Preferences -->
    <div class="settings-card">
        <div class="card-title"><i class="fas fa-sliders-h" style="margin-right: 6px;"></i> Preferences</div>
        
        <div class="settings-item" id="notificationItem">
            <div class="settings-left">
                <div class="settings-icon"><i class="fas fa-bell"></i></div>
                <div class="settings-info">
                    <h4>Notifications</h4>
                    <p>Push notifications & alerts</p>
                </div>
            </div>
            <div class="settings-right">
                <label class="switch">
                    <input type="checkbox" id="notificationToggle" checked>
                    <span class="slider round"></span>
                </label>
            </div>
        </div>

        <div class="settings-item" id="languageItem">
            <div class="settings-left">
                <div class="settings-icon"><i class="fas fa-language"></i></div>
                <div class="settings-info">
                    <h4>Language</h4>
                    <p>English (Default)</p>
                </div>
            </div>
            <div class="settings-right">
                <i class="fas fa-chevron-down"></i>
            </div>
        </div>
    </div>

    <!-- Legal & Support -->
    <div class="settings-card">
        <div class="card-title"><i class="fas fa-gavel" style="margin-right: 6px;"></i> Legal & Support</div>
        
        <div class="settings-item" onclick="window.open('https://mobile.k-seva.com/privacy-policy', '_blank')">
            <div class="settings-left">
                <div class="settings-icon"><i class="fas fa-user-secret"></i></div>
                <div class="settings-info">
                    <h4>Privacy Policy</h4>
                    <p>Read our privacy practices</p>
                </div>
            </div>
            <div class="settings-right"><i class="fas fa-external-link-alt"></i></div>
        </div>

        <div class="settings-item" onclick="window.open('https://mobile.k-seva.com/terms', '_blank')">
            <div class="settings-left">
                <div class="settings-icon"><i class="fas fa-balance-scale"></i></div>
                <div class="settings-info">
                    <h4>Terms of Use</h4>
                    <p>Terms and conditions</p>
                </div>
            </div>
            <div class="settings-right"><i class="fas fa-external-link-alt"></i></div>
        </div>

        <div class="settings-item" onclick="window.open('https://mobile.k-seva.com/refund-policy', '_blank')">
            <div class="settings-left">
                <div class="settings-icon"><i class="fas fa-file-invoice-dollar"></i></div>
                <div class="settings-info">
                    <h4>Refund Policy</h4>
                    <p>Cancellation & refund guidelines</p>
                </div>
            </div>
            <div class="settings-right"><i class="fas fa-external-link-alt"></i></div>
        </div>

        <div class="settings-item" onclick="window.open('https://mobile.k-seva.com/refund-cancellation-policy', '_blank')">
            <div class="settings-left">
                <div class="settings-icon"><i class="fas fa-exchange-alt"></i></div>
                <div class="settings-info">
                    <h4>Refund & Cancellation</h4>
                    <p>Return and exchange policy</p>
                </div>
            </div>
            <div class="settings-right"><i class="fas fa-external-link-alt"></i></div>
        </div>

        <div class="settings-item" onclick="window.location.href='retailer-dashboard?page=support'">
            <div class="settings-left">
                <div class="settings-icon"><i class="fas fa-headset"></i></div>
                <div class="settings-info">
                    <h4>Support Center</h4>
                    <p>Get help from support team</p>
                </div>
            </div>
            <div class="settings-right"><i class="fas fa-chevron-right"></i></div>
        </div>
    </div>

    <!-- About -->
    <div class="settings-card">
        <div class="card-title"><i class="fas fa-info-circle" style="margin-right: 6px;"></i> About</div>
        
        <div class="settings-item" onclick="window.open('https://k-seva.com', '_blank')">
            <div class="settings-left">
                <div class="settings-icon"><i class="fas fa-globe"></i></div>
                <div class="settings-info">
                    <h4>Visit Website</h4>
                    <p>www.k-seva.com</p>
                </div>
            </div>
            <div class="settings-right"><i class="fas fa-external-link-alt"></i></div>
        </div>

        <div class="settings-item">
            <div class="settings-left">
                <div class="settings-icon"><i class="fas fa-code-branch"></i></div>
                <div class="settings-info">
                    <h4>App Version</h4>
                    <p>Version 2.0.1</p>
                </div>
            </div>
            <div class="settings-right"></div>
        </div>
    </div>

    <!-- Logout Button -->
    <div class="logout-section">
        <button class="logout-btn" onclick="confirmLogout()">
            <i class="fas fa-sign-out-alt"></i> Logout
        </button>
    </div>

    <div class="version-info">
        © 2024 K-Seva | All rights reserved
    </div>
</div>

<!-- Language Selection Modal (Simple) -->
<div id="languageModal" style="display:none; position:fixed; bottom:0; left:0; right:0; background:white; border-radius:28px 28px 0 0; padding:20px; z-index:1000; max-width:500px; margin:0 auto; box-shadow:0 -4px 20px rgba(0,0,0,0.1);">
    <div style="display:flex; justify-content:space-between; margin-bottom:16px;">
        <h3 style="font-size:1rem;">Select Language</h3>
        <button onclick="closeLanguageModal()" style="background:none; border:none; font-size:1.2rem;">✕</button>
    </div>
    <div style="display:flex; flex-direction:column; gap:12px;">
        <button onclick="setLanguage('English')" style="padding:12px; background:#f8f9fa; border:none; border-radius:12px; text-align:left; font-weight:500;">🇬🇧 English</button>
        <button onclick="setLanguage('Hindi')" style="padding:12px; background:#f8f9fa; border:none; border-radius:12px; text-align:left; font-weight:500;">🇮🇳 हिन्दी (Hindi)</button>
        <button onclick="setLanguage('Telugu')" style="padding:12px; background:#f8f9fa; border:none; border-radius:12px; text-align:left; font-weight:500;">🇮🇳 తెలుగు (Telugu)</button>
    </div>
</div>
<div id="modalOverlay" style="display:none; position:fixed; top:0; left:0; right:0; bottom:0; background:rgba(0,0,0,0.5); z-index:999; max-width:500px; margin:0 auto;"></div>
<?php include('includes/bottom-nav.php'); ?>
<script>
    // Notification Toggle
    const notificationToggle = document.getElementById('notificationToggle');
    if (notificationToggle) {
        // Load saved preference from localStorage
        const savedPref = localStorage.getItem('notifications_enabled');
        if (savedPref !== null) {
            notificationToggle.checked = savedPref === 'true';
        }
        
        notificationToggle.addEventListener('change', function(e) {
            localStorage.setItem('notifications_enabled', e.target.checked);
            showToast(e.target.checked ? 'Notifications enabled' : 'Notifications disabled');
        });
    }

    // Language selection
    const languageItem = document.getElementById('languageItem');
    const languageModal = document.getElementById('languageModal');
    const modalOverlay = document.getElementById('modalOverlay');
    
    if (languageItem) {
        languageItem.addEventListener('click', function() {
            languageModal.style.display = 'block';
            modalOverlay.style.display = 'block';
        });
    }
    
    function closeLanguageModal() {
        languageModal.style.display = 'none';
        modalOverlay.style.display = 'none';
    }
    
    function setLanguage(lang) {
        localStorage.setItem('selected_language', lang);
        showToast(lang + ' language selected');
        closeLanguageModal();
        // Update the display text
        const langText = document.querySelector('#languageItem .settings-info p');
        if (langText) langText.innerText = lang;
    }
    
    function confirmLogout() {
        if (confirm('Are you sure you want to logout?')) {
            window.location.href = 'logout.php';
        }
    }
    
    function showToast(message, type = 'success') {
        let toast = document.querySelector('.toast-message');
        if (toast) toast.remove();
        toast = document.createElement('div');
        toast.className = `toast-message ${type}`;
        toast.innerHTML = '<i class="fas fa-check-circle" style="margin-right: 8px; color: #00b4d8;"></i> ' + message;
        document.body.appendChild(toast);
        setTimeout(() => {
            toast.style.animation = 'slideDown 0.3s ease forwards';
            setTimeout(() => toast.remove(), 300);
        }, 3000);
    }
    
    // Load saved language on page load
    const savedLang = localStorage.getItem('selected_language');
    if (savedLang) {
        const langText = document.querySelector('#languageItem .settings-info p');
        if (langText) langText.innerText = savedLang;
    }
    
    // Close modal when clicking outside
    modalOverlay.addEventListener('click', closeLanguageModal);

    <?php if ($toastMsg): ?>
    showToast("<?= addslashes($toastMsg) ?>", "<?= $toastType ?>");
    <?php endif; ?>
</script>

</body>
</html>