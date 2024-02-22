<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
    parse_str(file_get_contents("php://input"), $delete_vars);
    $nama = $delete_vars['nama'];

    $query = "DELETE FROM silsilah_keluarga WHERE nama='$nama'";
    if ($conn->query($query) === TRUE) {
        echo "Data berhasil dihapus.";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
