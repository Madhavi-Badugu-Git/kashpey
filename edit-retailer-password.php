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
$stmt = $conn->prepare("SELECT firstName, lastName, mobile, email_id, avatar, userRank, password FROM tbl_retail_user WHERE id = ?");
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

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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
    $avatar = $user['avatar']; // keep existing if no new upload
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
                // Delete old avatar if exists
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
            // Store password as plain text (exactly as entered)
            $plainPassword = $password;
            $stmt = $conn->prepare("UPDATE tbl_retail_user SET firstName=?, lastName=?, mobile=?, password=?, avatar=?, userRank='Retailer' WHERE id=?");
            $stmt->bind_param("sssssi", $firstName, $lastName, $mobile, $plainPassword, $avatar, $userId);
        } else {
            $stmt = $conn->prepare("UPDATE tbl_retail_user SET firstName=?, lastName=?, mobile=?, avatar=?, userRank='Retailer' WHERE id=?");
            $stmt->bind_param("ssssi", $firstName, $lastName, $mobile, $avatar, $userId);
        }
        
        if ($stmt->execute()) {
            $_SESSION['toast_msg'] = "✅ Profile updated successfully!";
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

// Check for session toast messages
$toastMsg = $_SESSION['toast_msg'] ?? '';
$toastType = $_SESSION['toast_type'] ?? '';
unset($_SESSION['toast_msg']);
unset($_SESSION['toast_type']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile | K-Seva Retailer</title>
    <link rel="shortcut icon" href="<?= $comp_favicon ?? 'assets/logo/favicon.png'; ?>" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Nunito', sans-serif;
            background: linear-gradient(135deg, #03071e, #001d3d);
            min-height: 100vh;
            color: #fff;
            padding: 0px 0px;
             width: 100%;
        }
        .container {
            max-width: 700px;
            margin: 20px auto;
            background: rgba(3,7,30,0.85);
            backdrop-filter: blur(12px);
            border-radius: 28px;
            padding: 32px 36px;
            border: 1px solid rgba(0,180,216,0.3);
            box-shadow: 0 15px 35px rgba(0,0,0,0.3);
        }
        h2 {
            font-size: 1.8rem;
            margin-bottom: 8px;
            background: linear-gradient(135deg, #fff, #00b4d8);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
        .sub {
            color: rgba(202,240,248,0.6);
            margin-bottom: 28px;
            font-size: 0.9rem;
        }
        .profile-image-area {
            text-align: center;
            margin-bottom: 28px;
        }
        .current-image {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #00b4d8;
            box-shadow: 0 0 20px rgba(0,180,216,0.4);
            margin-bottom: 12px;
        }
        .image-label {
            display: inline-block;
            background: rgba(0,180,216,0.15);
            padding: 8px 20px;
            border-radius: 30px;
            cursor: pointer;
            font-size: 0.85rem;
            transition: 0.2s;
            border: 1px solid rgba(0,180,216,0.3);
        }
        .image-label:hover {
            background: rgba(0,180,216,0.3);
        }
        input[type="file"] { display: none; }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            color: #caf0f8;
            font-weight: 600;
            font-size: 0.85rem;
            letter-spacing: 0.5px;
        }
        input {
            width: 100%;
            padding: 12px 16px;
            background: rgba(255,255,255,0.07);
            border: 1px solid rgba(0,180,216,0.3);
            border-radius: 14px;
            color: #fff;
            font-size: 0.95rem;
            outline: none;
            transition: 0.2s;
        }
        input:focus {
            border-color: #00b4d8;
            box-shadow: 0 0 0 3px rgba(0,180,216,0.1);
        }
        .password-wrapper {
            position: relative;
        }
        .password-wrapper input {
            padding-right: 45px;
        }
        .toggle-password {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #aaa;
            z-index: 10;
        }
        .toggle-password:hover {
            color: #00b4d8;
        }
        .row-2 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }
        button {
            width: 100%;
            padding: 14px;
            background: linear-gradient(135deg, #00b4d8, #023e8a);
            border: none;
            border-radius: 14px;
            color: white;
            font-weight: 800;
            font-size: 1rem;
            cursor: pointer;
            transition: 0.2s;
            margin-top: 12px;
        }
        button:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0,180,216,0.4);
        }
        .back-link {
            display: inline-block;
            margin-top: 20px;
            color: #00b4d8;
            text-decoration: none;
            font-size: 0.9rem;
        }
        .back-link:hover { text-decoration: underline; }
        /* Toast */
        .toast-notification {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 9999;
            background: #1e2a3a;
            backdrop-filter: blur(10px);
            border-left: 5px solid #2eb84b;
            color: white;
            padding: 14px 24px;
            border-radius: 12px;
            font-weight: 600;
            box-shadow: 0 8px 20px rgba(0,0,0,0.3);
            animation: slideInRight 0.3s ease forwards;
        }
        .toast-notification.error { border-left-color: #ff6b6b; background: #2a1a1a; }
        @keyframes slideInRight {
            from { opacity: 0; transform: translateX(100px); }
            to { opacity: 1; transform: translateX(0); }
        }
        @keyframes slideOutRight {
            from { opacity: 1; transform: translateX(0); }
            to { opacity: 0; transform: translateX(100px); }
        }
        @media (max-width: 560px) {
            .container { padding: 20px; }
            .row-2 { grid-template-columns: 1fr; gap: 12px; }
        }
    </style>
</head>
<body>
    <?php include('includes/navbar_1.php'); ?>
<div class="container" >
    <h2>Edit Profile</h2>
    <p class="sub">Update your personal information and profile image</p>

    <form method="POST" action="" enctype="multipart/form-data">
       

        <div class="row-2">
            <div class="form-group">
                <label>First Name</label>
                <input type="text" name="first_name" value="<?= htmlspecialchars($user['firstName']) ?>" required>
            </div>
            <div class="form-group">
                <label>Last Name</label>
                <input type="text" name="last_name" value="<?= htmlspecialchars($user['lastName']) ?>" required>
            </div>
        </div>
        <div class="form-group">
            <label>Mobile Number (10 digits, starts with 6-9)</label>
            <input type="tel" name="mobile" value="<?= htmlspecialchars($user['mobile']) ?>" pattern="[6-9][0-9]{9}" required>
        </div>
        <div class="form-group">
            <label>Email (read-only)</label>
            <input type="email" value="<?= htmlspecialchars($user['email_id']) ?>" readonly disabled style="opacity:0.7; cursor:not-allowed;">
        </div>
        
        <!-- Password fields with visibility toggle -->
        <div class="form-group">
            <label>New Password (leave blank to keep current)</label>
            <div class="password-wrapper">
                <input type="password" name="password" id="password" placeholder="Min 6 characters">
                <i class="fas fa-eye-slash toggle-password" onclick="togglePasswordVisibility('password', this)"></i>
            </div>
        </div>
        <div class="form-group">
            <label>Confirm New Password</label>
            <div class="password-wrapper">
                <input type="password" name="confirm_password" id="confirm_password" placeholder="Re-enter new password">
                <i class="fas fa-eye-slash toggle-password" onclick="togglePasswordVisibility('confirm_password', this)"></i>
            </div>
        </div>
        
        <button type="submit"><i class="fas fa-save"></i> Save Changes</button>
    </form>
    <a href="retailer-dashboard" class="back-link"><i class="fas fa-arrow-left"></i> Back to Dashboard</a>
</div>

<script>
    function previewFile(input) {
        const preview = document.getElementById('previewImage');
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) { preview.src = e.target.result; };
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

    <?php if ($toastMsg): ?>
    showToast("<?= addslashes($toastMsg) ?>", "<?= $toastType ?>");
    <?php elseif ($message): ?>
    showToast("<?= addslashes($message) ?>", "<?= $messageType ?>");
    <?php endif; ?>

    function showToast(message, type = 'success') {
        const toast = document.createElement('div');
        toast.className = `toast-notification ${type}`;
        toast.innerHTML = `<span>${message}</span>`;
        document.body.appendChild(toast);
        setTimeout(() => {
            toast.style.animation = 'slideOutRight 0.3s ease forwards';
            setTimeout(() => toast.remove(), 300);
        }, 4000);
    }
</script>
</body>
</html>