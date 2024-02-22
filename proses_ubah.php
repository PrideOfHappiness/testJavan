<?php
include 'koneksi.php';

$old_nama = $_POST['old_nama'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$status = $_POST['status'];
$ortu = $_POST['ortu'];

$query = "UPDATE keluarga SET nama='$nama', jenis_kelamin='$jenis_kelamin', status='$status', ortu='$ortu' WHERE nama='$old_nama'";
if ($conn->query($query) === TRUE) {
    header("Location: index.php");
    exit();
} else {
    echo "Error!";
}

$conn->close();
?>
