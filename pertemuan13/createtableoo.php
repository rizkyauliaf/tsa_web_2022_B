<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dboo";

//membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);
//cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//sql untuk membuat tabel
$sql = "CREATE TABLE peserta (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(50) NOT NULL,
    email VARCHAR(50),
    tgl_registrasi TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";

if ($conn->query($sql) === TRUE) {
    echo "Peserta Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
