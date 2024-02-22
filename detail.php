<?php
include 'koneksi.php';

$nama = $_GET['nama'];

$query = "SELECT * FROM keluarga WHERE nama='$nama'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "Detail Data:";
    echo "<br>Nama: " . $row['nama'];
    echo "<br>Jenis Kelamin: " . $row['jenis_kelamin'];
    echo "<br>Status: " . $row['status'];
    echo "<br>Orang Tua: " . $row['ortu'];
} else {
    echo "Data tidak ditemukan.";
}

$conn->close();
?>
