<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbpro";

//membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);
//cek koneksi
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//sql untuk membuat tabel
$sql = "DELETE FROM peserta WHERE id=2";

if (mysqli_query($conn, $sql)) {
    echo "Record delete successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
