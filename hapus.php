<?php
include 'koneksi.php';

$nama = $_GET['nama'];

$query = "DELETE FROM keluarga WHERE nama='$nama'";
if ($conn->query($query) === TRUE) {
    header("Location: index.php");
    exit();
} else {
    echo "Error!";
}

$conn->close();
?>
