<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "ohioglobal";

$conn = new mysqli($host, $user, $password, $db);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get distinct years from the gallery table

$sql = "SELECT DISTINCT year FROM gallery WHERE filename IS NOT NULL AND filename != '' ORDER BY year DESC";

$result = $conn->query($sql);

$years = [];
while ($row = $result->fetch_assoc()) {
    $years[] = (int)$row['year'];
}

header('Content-Type: application/json');
echo json_encode($years);
?>