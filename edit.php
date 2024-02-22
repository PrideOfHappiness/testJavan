<?php
include 'koneksi.php';

// Ambil parameter nama yang dikirimkan
$nama = $_GET['nama'];

// Ambil data yang akan diubah dari database
$query = "SELECT * FROM silsilah_keluarga WHERE nama='$nama'";
$result = $conn->query($query);
$row = $result->fetch_assoc();

// Tampilkan formulir pengubahan data
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ubah Data Keluarga</title>
</head>
<body>
    <h2>Ubah Data Keluarga</h2>
    <form action="proses_ubah.php" method="post">
        Nama: <input type="text" name="nama" value="<?php echo $row['nama']; ?>"><br>
        Jenis Kelamin: <input type="text" name="jenis_kelamin" value="<?php echo $row['jenis_kelamin']; ?>"><br>
        Status: <input type="text" name="status" value="<?php echo $row['status']; ?>"><br>
        <input type="hidden" name="old_nama" value="<?php echo $row['nama']; ?>">
        Nama Orang Tua: <input type="text" name="ortu" value="<?php echo $row['ortu']; ?>"><br>
        <input type="submit" value="Simpan Perubahan">
    </form>
</body>
</html>