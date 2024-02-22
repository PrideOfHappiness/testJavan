<?php
include 'koneksi.php';

// Menampilkan data
$query = "SELECT * FROM keluarga";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Keluarga</title>
</head>
<body>
    <h2>Data Keluarga</h2>
    <a href="visualization.php">Lihat Diagram Silsilah</a>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Status</th>
            <th>Orang Tua</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row['nama']."</td>";
                echo "<td>".$row['jenis_kelamin']."</td>";
                echo "<td>".$row['status']."</td>";
                echo "<td>".$row['ortu']."</td>";
                echo "<td><a href='detail.php?nama=".$row['nama']."'>Detail</a></td>";
                echo "<td><a href='edit.php?nama=".$row['nama']."'>Ubah</a></td>";
                echo "<td><a href='hapus.php?nama=".$row['nama']."'>Hapus</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>Tidak ada data</td></tr>";
        }
        ?>
    </table>

    <h2>Tambah Data Keluarga</h2>
    <form action="tambah.php" method="post">
        Nama: <input type="text" name="nama"><br>
        Jenis Kelamin: <input type="text" name="jenis_kelamin"><br>
        Status: <input type="text" name="status"><br>
        Nama Orang Tua: <input type="text" name="ortu"><br>
        <input type="submit" value="Tambah">
    </form>
</body>
</html>