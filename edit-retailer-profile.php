<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: retailer-login");
    exit();
}
require_once('includes/dbConfig.php');

$userId = $_SESSION['user_id'];
$message = '';
$messageType = '';

// Fetch current user data
$stmt = $conn->prepare("SELECT firstName, lastName, mobile, email_id, avatar, userRank, password, status FROM tbl_retail_user WHERE id = ?");
$stmt->bind_param("i", $userId);
$stmt->execute();
$user = $stmt->get_result()->fetch_assoc();
$stmt->close();

// If userRank is empty or not set, update to 'Retailer'
if (empty($user['userRank']) || $user['userRank'] !== 'Retailer') {
    $updateRank = $conn->prepare("UPDATE tbl_retail_user SET userRank = 'Retailer' WHERE id = ?");
    $updateRank->bind_param("i", $userId);
    $updateRank->execute();
    $updateRank->close();
    $user['userRank'] = 'Retailer';
}

// ========== FETCH EARNINGS DATA ==========
$totalCommission = '0.00';
$walletBalance = '0.00';
$todayEarning = '0.00';
$weekEarning = '0.00';
$monthEarning = '0.00';
$pendingCommission = '0.00';
$withdrawnAmount = '0.00';

$tableCheck = $conn->query("SHOW TABLES LIKE 'tbl_retailer_earnings'");
if ($tableCheck && $tableCheck->num_rows > 0) {
    $stmtE = $conn->prepare("SELECT total_commission, wallet_balance, today_earning, week_earning, month_earning, pending_commission, withdrawn_amount FROM tbl_retailer_earnings WHERE retailer_id = ? LIMIT 1");
    if ($stmtE) {
        $stmtE->bind_param("i", $userId);
        $stmtE->execute();
        $resultE = $stmtE->get_result();
        $earnings = $resultE->fetch_assoc();
        $stmtE->close();
        
        if ($earnings) {
            $totalCommission = number_format($earnings['total_commission'] ?? 0, 2);
            $walletBalance = number_format($earnings['wallet_balance'] ?? 0, 2);
            $todayEarning = number_format($earnings['today_earning'] ?? 0, 2);
            $weekEarning = number_format($earnings['week_earning'] ?? 0, 2);
            $monthEarning = number_format($earnings['month_earning'] ?? 0, 2);
            $pendingCommission = number_format($earnings['pending_commission'] ?? 0, 2);
            $withdrawnAmount = number_format($earnings['withdrawn_amount'] ?? 0, 2);
        }
    }
}

// Calculate commission tier
$totalRaw = floatval($totalCommission);
if ($totalRaw >= 50000) $commissionTier = "Diamond Partner";
elseif ($totalRaw >= 20000) $commissionTier = "Gold Partner";
elseif ($totalRaw >= 5000) $commissionTier = "Silver Partner";
else $commissionTier = "Standard Partner";

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'update_profile') {
    $firstName = trim($_POST['first_name']);
    $lastName  = trim($_POST['last_name']);
    $mobile    = trim($_POST['mobile']);
    $password  = $_POST['password'] ?? '';
    $confirmPassword = $_POST['confirm_password'] ?? '';
    
    $errors = [];
    
    // Validation
    if (empty($firstName)) $errors[] = "First name is required.";
    if (empty($lastName)) $errors[] = "Last name is required.";
    if (empty($mobile)) $errors[] = "Mobile number is required.";
    elseif (!preg_match('/^[6-9][0-9]{9}$/', $mobile)) $errors[] = "Mobile must be 10 digits and start with 6,7,8,9.";
    
    if (!empty($password)) {
        if (strlen($password) < 6) $errors[] = "Password must be at least 6 characters.";
        elseif ($password !== $confirmPassword) $errors[] = "Passwords do not match.";
    }
    
    // Handle avatar upload
    $avatar = $user['avatar'];
    if (isset($_FILES['avatar']) && $_FILES['avatar']['error'] === UPLOAD_ERR_OK) {
        $allowed = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
        $fileInfo = pathinfo($_FILES['avatar']['name']);
        $extension = strtolower($fileInfo['extension']);
        if (!in_array($extension, $allowed)) {
            $errors[] = "Only JPG, PNG, GIF, WEBP images are allowed.";
        } else {
            $newFileName = "retailer_" . $userId . "_" . time() . "." . $extension;
            $uploadDir = "../uploads/retail_user/";
            if (!is_dir($uploadDir)) mkdir($uploadDir, 0777, true);
            $uploadPath = $uploadDir . $newFileName;
            if (move_uploaded_file($_FILES['avatar']['tmp_name'], $uploadPath)) {
                if (!empty($user['avatar']) && file_exists("../" . $user['avatar'])) {
                    unlink("../" . $user['avatar']);
                }
                $avatar = "uploads/retail_user/" . $newFileName;
            } else {
                $errors[] = "Failed to upload image.";
            }
        }
    }
    
    if (empty($errors)) {
        if (!empty($password)) {
            $plainPassword = $password;
            $stmt = $conn->prepare("UPDATE tbl_retail_user SET firstName=?, lastName=?, mobile=?, password=?, avatar=?, userRank='Retailer' WHERE id=?");
            $stmt->bind_param("sssssi", $firstName, $lastName, $mobile, $plainPassword, $avatar, $userId);
        } else {
            $stmt = $conn->prepare("UPDATE tbl_retail_user SET firstName=?, lastName=?, mobile=?, avatar=?, userRank='Retailer' WHERE id=?");
            $stmt->bind_param("ssssi", $firstName, $lastName, $mobile, $avatar, $userId);
        }
        
        if ($stmt->execute()) {
            $_SESSION['toast_msg'] = "Profile updated successfully!";
            $_SESSION['toast_type'] = "success";
            $_SESSION['user_name'] = $firstName . " " . $lastName;
            header("Location: retailer-dashboard");
            exit();
        } else {
            $message = "Update failed. Please try again.";
            $messageType = "error";
        }
        $stmt->close();
    } else {
        $message = implode("<br>", $errors);
        $messageType = "error";
    }
}

$toastMsg = $_SESSION['toast_msg'] ?? '';
$toastType = $_SESSION['toast_type'] ?? '';
unset($_SESSION['toast_msg']);
unset($_SESSION['toast_type']);

$initials = strtoupper(substr($user['firstName'], 0, 1)) ?: "U";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">
    <title>Edit Profile | K-Seva Retailer</title>
    <link rel="shortcut icon" href="assets/logo/favicon.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #f5f7fa;
            color: #1a1a2e;
            min-height: 100vh;
            padding-bottom: 30px;
        }

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
            font-size: 1.1rem;
        }

        .back-btn:active {
            background: #e4e7eb;
            transform: scale(0.95);
        }

        .page-title {
            font-size: 1.2rem;
            font-weight: 700;
            color: #1a1a2e;
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px 16px;
        }

        /* Profile Image Section */
        .profile-image-section {
            background: #ffffff;
            border-radius: 24px;
            padding: 24px;
            text-align: center;
            margin-bottom: 20px;
            border: 1px solid #e8ecf1;
        }

        .avatar-preview {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin: 0 auto 12px;
            overflow: hidden;
        }

        .avatar-preview img {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            object-fit: cover;
        }

        .avatar-placeholder {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background: linear-gradient(135deg, #00b4d8, #023e8a);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5rem;
            font-weight: 700;
            color: white;
        }

        .upload-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: #f0f2f5;
            padding: 8px 20px;
            border-radius: 40px;
            font-size: 0.8rem;
            font-weight: 500;
            color: #1a1a2e;
            cursor: pointer;
            transition: 0.2s;
            margin-top: 8px;
        }

        .upload-btn:active {
            background: #e4e7eb;
            transform: scale(0.96);
        }

        input[type="file"] {
            display: none;
        }

        .upload-note {
            font-size: 0.65rem;
            color: #a0aec0;
            margin-top: 8px;
        }

        /* Form Card */
        .form-card {
            background: #ffffff;
            border-radius: 24px;
            padding: 24px;
            border: 1px solid #e8ecf1;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            font-size: 0.8rem;
            color: #4a5568;
        }

        .form-group input {
            width: 100%;
            padding: 14px 16px;
            background: #f8f9fa;
            border: 1px solid #e8ecf1;
            border-radius: 16px;
            font-size: 0.9rem;
            font-family: 'Inter', sans-serif;
            transition: 0.2s;
        }

        .form-group input:focus {
            outline: none;
            border-color: #00b4d8;
            box-shadow: 0 0 0 3px rgba(0,180,216,0.1);
        }

        .form-group input:disabled {
            background: #f0f2f5;
            color: #a0aec0;
            cursor: not-allowed;
        }

        .password-wrapper {
            position: relative;
        }

        .password-wrapper input {
            padding-right: 50px;
        }

        .toggle-password {
            position: absolute;
            right: 16px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #a0aec0;
            z-index: 10;
        }

        .toggle-password:hover {
            color: #00b4d8;
        }

        .row-2 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
        }

        .info-note {
            background: #f0f8ff;
            padding: 12px 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            font-size: 0.75rem;
            color: #00b4d8;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .save-btn {
            width: 100%;
            padding: 16px;
            background: linear-gradient(135deg, #00b4d8, #023e8a);
            border: none;
            border-radius: 28px;
            color: white;
            font-weight: 700;
            font-size: 1rem;
            cursor: pointer;
            transition: 0.2s;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-bottom: 16px;
        }

        .save-btn:active {
            transform: scale(0.98);
        }

        .logout-btn {
            width: 100%;
            padding: 16px;
            background: white;
            border: 1px solid #ffcdcd;
            border-radius: 28px;
            color: #ff6b6b;
            font-weight: 700;
            font-size: 1rem;
            cursor: pointer;
            transition: 0.2s;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-bottom: 16px;
        }

        .logout-btn:active {
            transform: scale(0.98);
            background: #fff0f0;
        }

        .cancel-link {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            text-align: center;
            margin-top: 8px;
            margin-bottom: 20px;
            color: #6c757d;
            text-decoration: none;
            font-size: 0.85rem;
            padding: 12px;
        }

        /* Earnings Section */
        .earnings-card {
            background: linear-gradient(135deg, #00b4d8, #023e8a);
            border-radius: 24px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .earnings-title {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 16px;
        }

        .earnings-title h3 {
            font-size: 1rem;
            font-weight: 700;
            color: white;
        }

        .earnings-title span {
            font-size: 0.7rem;
            color: rgba(255,255,255,0.8);
        }

        .total-amount {
            font-size: 2rem;
            font-weight: 800;
            color: white;
            margin-bottom: 20px;
        }

        .earnings-row {
            display: flex;
            justify-content: space-between;
            gap: 12px;
            margin-bottom: 20px;
        }

        .earning-box {
            flex: 1;
            text-align: center;
            padding: 12px 8px;
            background: rgba(255,255,255,0.15);
            border-radius: 16px;
        }

        .earning-label {
            font-size: 0.7rem;
            color: rgba(255,255,255,0.8);
            font-weight: 500;
            margin-bottom: 6px;
        }

        .earning-value {
            font-size: 1rem;
            font-weight: 700;
            color: white;
        }

        .earnings-footer {
            display: flex;
            justify-content: space-between;
            padding-top: 16px;
            border-top: 1px solid rgba(255,255,255,0.2);
            font-size: 0.7rem;
            color: rgba(255,255,255,0.8);
        }

        .earnings-footer span i {
            margin-right: 5px;
        }

        /* Logout Modal */
        .logout-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            backdrop-filter: blur(4px);
            z-index: 1000;
            align-items: center;
            justify-content: center;
        }

        .logout-modal.show {
            display: flex;
        }

        .modal-content {
            background: white;
            width: 90%;
            max-width: 340px;
            border-radius: 32px;
            text-align: center;
            padding: 28px 24px;
            animation: modalPop 0.3s ease;
        }

        @keyframes modalPop {
            from {
                opacity: 0;
                transform: scale(0.9);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .modal-icon {
            width: 70px;
            height: 70px;
            background: #fff0f0;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
        }

        .modal-icon i {
            font-size: 2.5rem;
            color: #ff6b6b;
        }

        .modal-title {
            font-size: 1.4rem;
            font-weight: 700;
            color: #1a1a2e;
            margin-bottom: 10px;
        }

        .modal-message {
            font-size: 0.85rem;
            color: #6c757d;
            margin-bottom: 24px;
            line-height: 1.5;
        }

        .modal-buttons {
            display: flex;
            gap: 12px;
        }

        .modal-btn {
            flex: 1;
            padding: 14px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.9rem;
            cursor: pointer;
            transition: 0.2s;
            border: none;
        }

        .modal-btn.cancel {
            background: #f0f2f5;
            color: #4a5568;
        }

        .modal-btn.cancel:active {
            background: #e4e7eb;
            transform: scale(0.97);
        }

        .modal-btn.logout {
            background: #ff6b6b;
            color: white;
        }

        .modal-btn.logout:active {
            background: #e55555;
            transform: scale(0.97);
        }

        /* Toast Notification */
        .toast-notification {
            position: fixed;
            bottom: 30px;
            left: 16px;
            right: 16px;
            background: #1e293b;
            backdrop-filter: blur(10px);
            color: white;
            padding: 14px 20px;
            border-radius: 60px;
            font-weight: 500;
            font-size: 0.85rem;
            z-index: 2000;
            max-width: 500px;
            margin: 0 auto;
            animation: slideUp 0.3s ease forwards;
            text-align: center;
        }

        .toast-notification.success {
            border-left: 4px solid #2eb84b;
        }

        .toast-notification.error {
            border-left: 4px solid #ff6b6b;
        }

        @keyframes slideUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes slideDown {
            from { opacity: 1; transform: translateY(0); }
            to { opacity: 0; transform: translateY(20px); }
        }
    </style>
</head>
<body>

<div class="mobile-header">
    <div class="header-content">
        <a href="retailer-dashboard" class="back-btn">
            <i class="fas fa-arrow-left"></i>
        </a>
        <span class="page-title">Edit Profile</span>
    </div>
</div>

<div class="container">
    <form method="POST" action="" enctype="multipart/form-data">
        <input type="hidden" name="action" value="update_profile">
        
        <!-- Profile Image Section -->
        <div class="profile-image-section">
            <div class="avatar-preview" id="avatarPreview">
                <?php if (!empty($user['avatar']) && file_exists("../" . $user['avatar'])): ?>
                    <img src="<?= htmlspecialchars($user['avatar']) ?>" alt="Avatar" id="previewImage">
                <?php else: ?>
                    <div class="avatar-placeholder" id="placeholderAvatar">
                        <?= htmlspecialchars($initials) ?>
                    </div>
                <?php endif; ?>
            </div>
            <label class="upload-btn" for="avatarUpload">
                <i class="fas fa-camera"></i> Change Photo
            </label>
            <input type="file" name="avatar" id="avatarUpload" accept="image/jpeg,image/png,image/gif,image/webp" onchange="previewFile(this)">
            <div class="upload-note">Supported: JPG, PNG, GIF, WEBP (Max 2MB)</div>
        </div>

        <!-- Info Note -->
        <div class="info-note">
            <i class="fas fa-info-circle"></i>
            Email address cannot be changed. Contact support for email updates.
        </div>

        <!-- Form Card -->
        <div class="form-card">
            <div class="row-2">
                <div class="form-group">
                    <label><i class="fas fa-user"></i> First Name *</label>
                    <input type="text" name="first_name" value="<?= htmlspecialchars($user['firstName']) ?>" required placeholder="Enter first name">
                </div>
                <div class="form-group">
                    <label><i class="fas fa-user"></i> Last Name *</label>
                    <input type="text" name="last_name" value="<?= htmlspecialchars($user['lastName']) ?>" required placeholder="Enter last name">
                </div>
            </div>

            <div class="form-group">
                <label><i class="fas fa-phone"></i> Mobile Number *</label>
                <input type="tel" name="mobile" value="<?= htmlspecialchars($user['mobile']) ?>" pattern="[6-9][0-9]{9}" maxlength="10" required placeholder="10-digit mobile number">
                <small style="font-size: 0.65rem; color: #a0aec0;">Must start with 6,7,8, or 9</small>
            </div>

            <div class="form-group">
                <label><i class="fas fa-envelope"></i> Email Address</label>
                <input type="email" value="<?= htmlspecialchars($user['email_id']) ?>" disabled readonly>
            </div>

            <div class="form-group">
                <label><i class="fas fa-lock"></i> New Password (leave blank to keep current)</label>
                <div class="password-wrapper">
                    <input type="password" name="password" id="password" placeholder="Minimum 6 characters">
                    <i class="fas fa-eye-slash toggle-password" onclick="togglePasswordVisibility('password', this)"></i>
                </div>
            </div>

            <div class="form-group">
                <label><i class="fas fa-lock"></i> Confirm New Password</label>
                <div class="password-wrapper">
                    <input type="password" name="confirm_password" id="confirm_password" placeholder="Re-enter new password">
                    <i class="fas fa-eye-slash toggle-password" onclick="togglePasswordVisibility('confirm_password', this)"></i>
                </div>
            </div>
        </div>

        <!-- Earnings Section -->
        <div class="earnings-card">
            <div class="earnings-title">
                <h3><i class="fas fa-chart-line" style="margin-right: 6px;"></i> My Earnings</h3>
                <span>Lifetime</span>
            </div>
            <div class="total-amount">₹<?= $totalCommission ?></div>
            <div class="earnings-row">
                <div class="earning-box">
                    <div class="earning-label">Today</div>
                    <div class="earning-value">₹<?= $todayEarning ?></div>
                </div>
                <div class="earning-box">
                    <div class="earning-label">This Week</div>
                    <div class="earning-value">₹<?= $weekEarning ?></div>
                </div>
                <div class="earning-box">
                    <div class="earning-label">This Month</div>
                    <div class="earning-value">₹<?= $monthEarning ?></div>
                </div>
            </div>
            <div class="earnings-footer">
                <span><i class="fas fa-wallet"></i> Wallet: ₹<?= $walletBalance ?></span>
                <span><i class="fas fa-clock"></i> Pending: ₹<?= $pendingCommission ?></span>
            </div>
        </div>

        <!-- Save Button -->
        <button type="submit" class="save-btn">
            <i class="fas fa-save"></i> Save Changes
        </button>
        
        <!-- Logout Button (opens modal) -->
        <button type="button" class="logout-btn" onclick="openLogoutModal()">
            <i class="fas fa-sign-out-alt"></i> Logout
        </button>
        
        <!-- Cancel Link -->
        <a href="retailer-dashboard" class="cancel-link">
            <i class="fas fa-times"></i> Cancel
        </a>

    </form>
</div>

<!-- Logout Confirmation Modal -->
<div class="logout-modal" id="logoutModal">
    <div class="modal-content">
        <div class="modal-icon">
            <i class="fas fa-sign-out-alt"></i>
        </div>
        <h2 class="modal-title">Logout?</h2>
        <p class="modal-message">Are you sure you want to logout from your account? You will need to login again to access your dashboard.</p>
        <div class="modal-buttons">
            <button class="modal-btn cancel" onclick="closeLogoutModal()">Cancel</button>
            <button class="modal-btn logout" onclick="confirmLogout()">Logout</button>
        </div>
    </div>
</div>

<script>
    function previewFile(input) {
        const previewImg = document.getElementById('previewImage');
        const placeholder = document.getElementById('placeholderAvatar');
        
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                if (placeholder) {
                    placeholder.style.display = 'none';
                }
                if (previewImg) {
                    previewImg.style.display = 'block';
                    previewImg.src = e.target.result;
                } else {
                    const avatarPreview = document.getElementById('avatarPreview');
                    if (avatarPreview) {
                        avatarPreview.innerHTML = `<img src="${e.target.result}" alt="Avatar" id="previewImage" style="width:100%; height:100%; border-radius:50%; object-fit:cover;">`;
                    }
                }
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    function togglePasswordVisibility(fieldId, iconElement) {
        const field = document.getElementById(fieldId);
        if (field.type === "password") {
            field.type = "text";
            iconElement.classList.remove('fa-eye-slash');
            iconElement.classList.add('fa-eye');
        } else {
            field.type = "password";
            iconElement.classList.remove('fa-eye');
            iconElement.classList.add('fa-eye-slash');
        }
    }

    function openLogoutModal() {
        document.getElementById('logoutModal').classList.add('show');
    }

    function closeLogoutModal() {
        document.getElementById('logoutModal').classList.remove('show');
    }

    function confirmLogout() {
        window.location.href = 'retailer-logout.php';
    }

    // Close modal when clicking outside
    document.getElementById('logoutModal').addEventListener('click', function(e) {
        if (e.target === this) {
            closeLogoutModal();
        }
    });

    <?php if ($toastMsg): ?>
    showToast("<?= addslashes($toastMsg) ?>", "<?= $toastType ?>");
    <?php elseif ($message): ?>
    showToast("<?= addslashes($message) ?>", "<?= $messageType ?>");
    <?php endif; ?>

    function showToast(message, type = 'success') {
        const toast = document.createElement('div');
        toast.className = `toast-notification ${type}`;
        toast.innerHTML = `<i class="fas ${type === 'success' ? 'fa-check-circle' : 'fa-exclamation-circle'}" style="margin-right: 8px;"></i> ${message}`;
        document.body.appendChild(toast);
        setTimeout(() => {
            toast.style.animation = 'slideDown 0.3s ease forwards';
            setTimeout(() => toast.remove(), 300);
        }, 4000);
    }
</script>

</body>
</html>