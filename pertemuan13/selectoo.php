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
$sql = "SELECT id,nama,email FROM peserta";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Nama: " . $row["nama"] . " - Email: " . $row["email"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
