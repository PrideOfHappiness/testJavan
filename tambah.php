<?php
include 'koneksi.php';

// Mengambil data dari formulir
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$status = $_POST['status'];
$ortu = $_POST['ortu'];

// Menambahkan data ke database
$query = "INSERT INTO keluarga (nama, jenis_kelamin, status, ortu) VALUES ('$nama', '$jenis_kelamin', '$status', '$ortu')";
if ($conn->query($query) === TRUE) {
    header("Location: index.php");
    exit();
} else {
    echo "Error: ".$query."<br>";
}

$conn->close();
?>
