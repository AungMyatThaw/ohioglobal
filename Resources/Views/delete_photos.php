<?php
// Connect to DB
$host = "localhost";
$user = "root";
$password = "";
$db = "ohioglobal";

$conn = new mysqli($host, $user, $password, $db);
if ($conn->connect_error) {
    echo json_encode(['success' => false, 'error' => 'DB connection failed: ' . $conn->connect_error]);
    exit;
}

// Read JSON input
$data = json_decode(file_get_contents('php://input'), true);
$filenames = $data['filenames'] ?? [];

if (empty($filenames)) {
    echo json_encode(['success' => false, 'error' => 'No filenames provided']);
    exit;
}

$deleted = [];
$errors = [];

foreach ($filenames as $path) {
    if (preg_match('#one-sided/Resources/gallery/uploads/(\d{4})/(\d{1,2})/(.+)$#', $path, $matches)) {
        $year = (int)$matches[1];
        $month = (int)$matches[2];
        $filename = urldecode($matches[3]);  // <== FIXED HERE

        $filePath = __DIR__ . '/../gallery/uploads/' . $year . '/' . $month . '/' . $filename;

        if (file_exists($filePath)) {
            unlink($filePath);
            // ... rest unchanged ...


            // Delete from DB
            $stmt = $conn->prepare("DELETE FROM gallery WHERE filename = ? AND year = ? AND month = ?");
            $stmt->bind_param("sii", $filename, $year, $month);
            $stmt->execute();

            if ($stmt->affected_rows > 0) {
                $deleted[] = $path;
            } else {
                $errors[] = "DB row not found for: $filename";
            }

            $stmt->close();
        } else {
            $errors[] = "File not found: $filePath";
        }
    } else {
        $errors[] = "Invalid path format: $path";
    }
}

$conn->close();

echo json_encode([
    'success' => empty($errors),
    'deleted' => $deleted,
    'errors' => $errors
]);
?>