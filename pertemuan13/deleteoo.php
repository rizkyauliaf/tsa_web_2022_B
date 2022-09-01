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
$sql = "DELETE FROM peserta WHERE id=2";

if ($conn->query($sql) === TRUE) {
    echo "Record delete successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
