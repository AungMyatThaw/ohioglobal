<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "ohioglobal";

$conn = new mysqli($host, $user, $password, $db);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$year = $_GET['year'];

if ($year === 'before2025') {
    $stmt = $conn->prepare("SELECT filename, original_name, year, month FROM gallery WHERE year < 2025");
    $stmt->execute();
} else {
    $stmt = $conn->prepare("SELECT filename, original_name, year, month FROM gallery WHERE year = ?");
    $stmt->bind_param("s", $year);
    $stmt->execute();
}
$stmt->execute();
$result = $stmt->get_result();

$photos = [];
while ($row = $result->fetch_assoc()) {
    $photos[] = $row;
}

header('Content-Type: application/json');
echo json_encode($photos);
?>