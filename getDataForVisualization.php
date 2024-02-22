<?php 
include 'koneksi.php';

$sql = "SELECT * FROM keluarga";
$result = $conn->query($sql);

// Siapkan array untuk menyimpan data
$data = array();

// Loop melalui hasil query dan tambahkan ke array data
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// Tutup koneksi database
$conn->close();

// Keluarkan data dalam format JSON
echo json_encode($data);
?>