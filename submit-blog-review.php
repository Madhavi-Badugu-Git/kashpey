<?php
include('includes/dbConfig.php');
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['action']) || $_POST['action'] !== 'submit_review') {
    echo json_encode(['success' => false, 'message' => 'Invalid request']);
    exit();
}

$blog_id = intval($_POST['blog_id'] ?? 0);
$name = trim($_POST['reviewer_name'] ?? '');
$email = trim($_POST['reviewer_email'] ?? '');
$rating = intval($_POST['rating'] ?? 0);
$text = trim($_POST['review_text'] ?? '');

if (!$blog_id || empty($name) || $rating < 1 || $rating > 5 || empty($text)) {
    echo json_encode(['success' => false, 'message' => 'All required fields must be filled']);
    exit();
}

// Check if blog exists
$check = mysqli_query($conn, "SELECT id FROM tbl_website_blog WHERE id = $blog_id AND status = 1");
if (mysqli_num_rows($check) == 0) {
    echo json_encode(['success' => false, 'message' => 'Blog post not found']);
    exit();
}

// Insert review (status = 0 => pending approval)
$name_safe = mysqli_real_escape_string($conn, $name);
$email_safe = mysqli_real_escape_string($conn, $email);
$text_safe = mysqli_real_escape_string($conn, $text);

$sql = "INSERT INTO tbl_blog_reviews (blog_id, reviewer_name, reviewer_email, rating, review_text, status, created_at) 
        VALUES ($blog_id, '$name_safe', '$email_safe', $rating, '$text_safe', 0, NOW())";

if (mysqli_query($conn, $sql)) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'message' => 'Database error: ' . mysqli_error($conn)]);
}
?>