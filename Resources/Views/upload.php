<?php
header('Content-Type: application/json');

$year = $_POST['year'];
$month = $_POST['month'];

$targetDir = __DIR__ . '/../gallery/uploads/' . $year . '/' . $month;

if (!is_dir($targetDir)) {
    mkdir($targetDir, 0777, true);
}

if (isset($_FILES['image'])) {
    $file = $_FILES['image'];
    $originalName = $file['name'];
    $filename = uniqid() . "-" . basename($originalName);
    $targetFile = $targetDir . '/' . $filename;
    $fileSize = $file['size'];

    if (move_uploaded_file($file['tmp_name'], $targetFile)) {
        $conn = new mysqli("localhost", "root", "", "ohioglobal");

        if ($conn->connect_error) {
            echo json_encode(['success' => false, 'message' => 'Database connection failed.']);
            exit;
        }

        $stmt = $conn->prepare("INSERT INTO gallery (filename, original_name, file_size, year, month) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("ssiii", $filename, $originalName, $fileSize, $year, $month);
        $stmt->execute();
        $stmt->close();
        $conn->close();

        // ✅ Send JSON success response
        echo json_encode(['success' => true, 'message' => 'Image uploaded successfully.']);
        exit;
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to move uploaded file.']);
        exit;
    }
} else {
    echo json_encode(['success' => false, 'message' => 'No image file received.']);
    exit;
}