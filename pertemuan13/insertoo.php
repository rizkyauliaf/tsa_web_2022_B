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
$sql = "INSERT INTO peserta (nama, email) VALUES ('Rizky','rizkyauliaf@gmail.com'),('Andi','andi@gmail.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
