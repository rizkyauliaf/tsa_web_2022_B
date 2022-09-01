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
$sql = "UPDATE peserta SET email='rizkyauliaf@gmail.com' WHERE id=1";

if ($conn->query($sql) === TRUE) {
    echo "Record update successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
