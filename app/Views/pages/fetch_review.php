<?php
// Fetch customer reviews from database
$sql = "SELECT id, review, created_at FROM customer_review ORDER BY id DESC";
$result = $conn->query($sql);

$reviews = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $reviews[] = $row;
    }
}

// Return reviews as JSON
header('Content-Type: application/json');
echo json_encode($reviews);

$conn->close();
?>


