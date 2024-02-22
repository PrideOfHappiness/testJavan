<?php 
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'silsilah_keluarga2';

$conn = new mysqli($host, $username, $password, $database);
if($conn->connect_error){
    die("Error connecting to database due to : " . $conn->connect_error);
}
?>