<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);

    $nama = $data['nama'];
    $jenis_kelamin = $data['jenis_kelamin'];
    $status = $data['status'];

    $query = "INSERT INTO silsilah_keluarga (nama, jenis_kelamin, status) VALUES ('$nama', '$jenis_kelamin', '$status')";
    if ($conn->query($query) === TRUE) {
        echo "Data berhasil ditambahkan.";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
