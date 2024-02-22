<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $query = "SELECT * FROM silsilah_keluarga";
    $result = $conn->query($query);

    $data = array();
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    header('Content-Type: application/json');
    echo json_encode($data);
}
?>
