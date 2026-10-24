<?php
session_start();
if (!isset($_SESSION['dist_user_id'])) {
    header("Location: distributor-login");
    exit();
}
require_once('includes/dbConfig.php');

$userId    = $_SESSION['dist_user_id'];
$error     = '';
$success   = '';

// Fetch current distributor data
$stmt = $conn->prepare("SELECT firstName, lastName, mobile, email_id, avatar, status FROM tbl_distributor_user WHERE id = ?");
$stmt->bind_param("i", $userId);
$stmt->execute();
$user = $stmt->get_result()->fetch_assoc();
$stmt->close();

if (!$user) {
    // User not found in DB (should not happen)
    session_destroy();
    header("Location: distributor-login");
    exit();
}

// Handle profile update
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_profile'])) {
    $firstName = trim($_POST['first_name']);
    $lastName  = trim($_POST['last_name']);
    $mobile    = trim($_POST['mobile']);
    $email     = trim($_POST['email']);
    $newPass   = $_POST['new_password'];
    $confirmPass = $_POST['confirm_password'];

    // Validation
    if (empty($firstName)) {
        $error = "First name is required.";
    } elseif (empty($lastName)) {
        $error = "Last name is required.";
    } elseif (empty($mobile)) {
        $error = "Mobile number is required.";
    } elseif (!preg_match('/^[6-9][0-9]{9}$/', $mobile)) {
        $error = "Enter a valid 10-digit mobile number starting with 6–9.";
    } elseif (empty($email)) {
        $error = "Email address is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email format.";
    } elseif (!empty($newPass) && strlen($newPass) < 6) {
        $error = "Password must be at least 6 characters.";
    } elseif (!empty($newPass) && $newPass !== $confirmPass) {
        $error = "Passwords do not match.";
    }

    // Check if email already exists for another distributor
    if (empty($error)) {
        $check = $conn->prepare("SELECT id FROM tbl_distributor_user WHERE email_id = ? AND id != ?");
        $check->bind_param("si", $email, $userId);
        $check->execute();
        $check->store_result();
        if ($check->num_rows > 0) {
            $error = "Email already in use by another distributor.";
        }
        $check->close();
    }

    // Handle avatar upload
    $avatarPath = $user['avatar']; // keep existing by default
    if (empty($error) && isset($_FILES['avatar']) && $_FILES['avatar']['error'] === UPLOAD_ERR_OK) {
        $allowed = ['jpg', 'jpeg', 'png', 'gif'];
        $fileName = $_FILES['avatar']['name'];
        $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        if (!in_array($fileExt, $allowed)) {
            $error = "Only JPG, JPEG, PNG, GIF files are allowed.";
        } else {
            $uploadDir = 'uploads/avatars/';
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }
            $newFileName = 'distributor_' . $userId . '_' . time() . '.' . $fileExt;
            $destination = $uploadDir . $newFileName;
            if (move_uploaded_file($_FILES['avatar']['tmp_name'], $destination)) {
                $avatarPath = $destination;
            } else {
                $error = "Failed to upload image.";
            }
        }
    }

    // Update database
    if (empty($error)) {
        if (!empty($newPass)) {
            // Update with password change
            $stmt = $conn->prepare("UPDATE tbl_distributor_user SET firstName=?, lastName=?, mobile=?, email_id=?, password=?, avatar=? WHERE id=?");
            $stmt->bind_param("ssssssi", $firstName, $lastName, $mobile, $email, $newPass, $avatarPath, $userId);
        } else {
            // Update without password change
            $stmt = $conn->prepare("UPDATE tbl_distributor_user SET firstName=?, lastName=?, mobile=?, email_id=?, avatar=? WHERE id=?");
            $stmt->bind_param("sssssi", $firstName, $lastName, $mobile, $email, $avatarPath, $userId);
        }

        if ($stmt->execute()) {
            // Update session name if first/last name changed
            $_SESSION['dist_user_name'] = $firstName . ' ' . $lastName;
            $_SESSION['dist_user_email'] = $email;
            $success = "Profile updated successfully!";
            // Refresh user data for display
            $user['firstName'] = $firstName;
            $user['lastName']  = $lastName;
            $user['mobile']    = $mobile;
            $user['email_id']  = $email;
            $user['avatar']    = $avatarPath;
        } else {
            $error = "Update failed: " . $conn->error;
        }
        $stmt->close();
    }
}

$fullName = $user['firstName'] . ' ' . $user['lastName'];
$initials = strtoupper(substr($user['firstName'], 0, 1) . substr($user['lastName'], 0, 1));
if (strlen($initials) < 2) $initials = strtoupper(substr($fullName, 0, 2));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K-Seva | Edit Distributor Profile</title>
    <link rel="shortcut icon" href="<?= $comp_favicon ?? 'assets/logo/favicon.png'; ?>" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Exo+2:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <style>
        * { margin:0; padding:0; box-sizing:border-box; }
        body {
            font-family: 'Exo 2', sans-serif;
            background: #0a1828;
            color: #fff;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 30px;
        }
        .edit-container {
            max-width: 700px;
            width: 100%;
            background: rgba(13,31,53,0.88);
            backdrop-filter: blur(16px);
            border-radius: 32px;
            border: 1px solid rgba(41,171,226,0.35);
            padding: 40px 36px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.4), 0 0 30px rgba(41,171,226,0.2);
            animation: fadeUp 0.6s ease;
        }
        @keyframes fadeUp {
            from { opacity:0; transform:translateY(30px); }
            to   { opacity:1; transform:translateY(0); }
        }
        h1 {
            font-family: 'Orbitron', sans-serif;
            font-size: 1.8rem;
            background: linear-gradient(120deg, #fff, #4dd9f5, #29abe2);
            -webkit-background-clip: text; background-clip: text; color: transparent;
            margin-bottom: 8px;
        }
        .sub {
            color: rgba(160,210,240,0.7);
            margin-bottom: 28px;
            border-left: 3px solid #29abe2;
            padding-left: 14px;
        }
        .field-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            font-size: 0.8rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            color: rgba(77,217,245,0.8);
            margin-bottom: 6px;
        }
        input, select {
            width: 100%;
            padding: 12px 16px;
            background: rgba(255,255,255,0.05);
            border: 1px solid rgba(41,171,226,0.3);
            border-radius: 14px;
            color: #fff;
            font-family: 'Exo 2', sans-serif;
            font-size: 0.95rem;
            transition: all 0.25s;
        }
        input:focus {
            outline: none;
            border-color: #4dd9f5;
            box-shadow: 0 0 0 3px rgba(77,217,245,0.2);
            background: rgba(41,171,226,0.1);
        }
        .row-2 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
        }
        .avatar-preview {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }
        .current-avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #29abe2;
            box-shadow: 0 0 15px rgba(41,171,226,0.4);
        }
        .avatar-placeholder {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: linear-gradient(135deg, #1a6fad, #2eb84b);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            font-weight: bold;
            font-family: 'Orbitron', sans-serif;
            color: white;
        }
        .btn-submit {
            width: 100%;
            padding: 14px;
            background: linear-gradient(135deg, #1a6fad, #2eb84b);
            border: none;
            border-radius: 40px;
            font-size: 1rem;
            font-weight: 700;
            color: white;
            cursor: pointer;
            transition: transform 0.2s, box-shadow 0.3s;
            margin-top: 12px;
            font-family: 'Exo 2', sans-serif;
        }
        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(41,171,226,0.4);
        }
        .back-link {
            display: inline-block;
            margin-top: 20px;
            color: #4dd9f5;
            text-decoration: none;
            font-size: 0.85rem;
            font-weight: 600;
        }
        .back-link:hover {
            text-decoration: underline;
        }
        .alert {
            padding: 12px 18px;
            border-radius: 12px;
            margin-bottom: 24px;
            font-weight: 600;
        }
        .alert-error {
            background: rgba(255,107,107,0.2);
            border-left: 4px solid #ff6b6b;
            color: #ffb3b3;
        }
        .alert-success {
            background: rgba(46,184,75,0.2);
            border-left: 4px solid #57d672;
            color: #c6f7d0;
        }
        @media (max-width: 550px) {
            .edit-container { padding: 28px 20px; }
            .row-2 { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
<div class="edit-container">
    <h1>Edit Distributor Profile</h1>
    <div class="sub">Update your personal information and security details</div>

    <?php if (!empty($error)): ?>
        <div class="alert alert-error">⚠️ <?= htmlspecialchars($error) ?></div>
    <?php endif; ?>
    <?php if (!empty($success)): ?>
        <div class="alert alert-success">✅ <?= htmlspecialchars($success) ?></div>
    <?php endif; ?>

    <form method="POST" enctype="multipart/form-data">
        <div class="row-2">
            <div class="field-group">
                <label>First Name</label>
                <input type="text" name="first_name" value="<?= htmlspecialchars($user['firstName']) ?>" required>
            </div>
            <div class="field-group">
                <label>Last Name</label>
                <input type="text" name="last_name" value="<?= htmlspecialchars($user['lastName']) ?>" required>
            </div>
        </div>
        <div class="field-group">
            <label>Mobile Number</label>
            <input type="tel" name="mobile" value="<?= htmlspecialchars($user['mobile']) ?>" pattern="[6-9][0-9]{9}" required>
        </div>
        <div class="field-group">
            <label>Email Address</label>
            <input type="email" name="email" value="<?= htmlspecialchars($user['email_id']) ?>" readonly>
        </div>

        <!-- Password change section (optional) -->
        <div class="field-group">
            <label>New Password (leave blank to keep unchanged)</label>
            <input type="password" name="new_password" placeholder="Min 6 characters">
        </div>
        <div class="field-group">
            <label>Confirm New Password</label>
            <input type="password" name="confirm_password" placeholder="Retype new password">
        </div>

        <!-- Avatar upload -->
        <!-- <div class="field-group">
            <label>Profile Picture</label>
            <div class="avatar-preview">
                <?php if (!empty($user['avatar']) && file_exists($user['avatar'])): ?>
                    <img src="<?= htmlspecialchars($user['avatar']) ?>" class="current-avatar" alt="Avatar">
                <?php else: ?>
                    <div class="avatar-placeholder"><?= htmlspecialchars($initials) ?></div>
                <?php endif; ?>
                <input type="file" name="avatar" accept="image/jpeg,image/png,image/gif">
            </div>
            <small style="color:rgba(160,210,240,0.6);">Allowed: JPG, PNG, GIF. Max size 2MB (server-side limit not enforced here; adjust as needed).</small>
        </div> -->

        <button type="submit" name="update_profile" class="btn-submit">💾 Save Changes</button>
        <a href="distributor-dashboard" class="back-link">← Back to Dashboard</a>
    </form>
</div>
</body>
<script>
    // Add this to your <script> section in edit-distributor-profile.php
    document.querySelector('input[name="mobile"]').addEventListener('input', function(e) {
        this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10);
    });
</script>
</html>