<?php
include('includes/dbConfig.php');

$category = isset($_GET['category']) ? $_GET['category'] : 'all';
$response = [];

// Prevent SQL injection
$category = mysqli_real_escape_string($conn, $category);

if($category == 'all') {
    $sql = "SELECT * FROM tbl_gallery_images WHERE status=1 ORDER BY created_at DESC";
} else {
    $sql = "SELECT * FROM tbl_gallery_images WHERE status=1 AND image_category = '$category' ORDER BY created_at DESC";
}

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $response[] = [
            'id' => $row['id'],
            'name' => $row['image_name'],
            'category' => $row['image_category'],
            'file' => $row['image_file'],
            'created_at' => date('d M Y', strtotime($row['created_at'])),
            'category_display' => ucwords(str_replace('_', ' ', $row['image_category']))
        ];
    }
}

header('Content-Type: application/json');
echo json_encode($response);
?>