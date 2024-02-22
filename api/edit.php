<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
    parse_str(file_get_contents("php://input"), $put_vars);
    $nama = $put_vars['nama'];
    $jenis_kelamin = $put_vars['jenis_kelamin'];
    $status = $put_vars['status'];

    $query = "UPDATE silsilah_keluarga SET jenis_kelamin='$jenis_kelamin', status='$status' WHERE nama='$nama'";
    if ($conn->query($query) === TRUE) {
        echo "Data berhasil diubah.";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
