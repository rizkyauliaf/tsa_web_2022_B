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
$sql = "SELECT id,nama,email FROM peserta";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row["id"] . " - Nama: " . $row["nama"] . " - Email: " . $row["email"] . "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
