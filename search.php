<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "new_taste_kitchen");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get search query
$query = isset($_POST['query']) ? $_POST['query'] : '';

// Prepare SQL query
$sql = "SELECT * FROM foods WHERE name LIKE '%$query%' OR category LIKE '%$query%'";
$result = $conn->query($sql);

// Generate table rows
$output = '';
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $output .= "
            <tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['category']}</td>
                <td>\${$row['price']}</td>
            </tr>
        ";
    }
} else {
    $output = "<tr><td colspan='4' class='text-center'>No food found</td></tr>";
}

echo $output;
$conn->close();
?>
