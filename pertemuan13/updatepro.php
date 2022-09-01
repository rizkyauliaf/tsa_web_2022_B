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
$sql = "UPDATE peserta SET email='rizkyauliaf@gmail.com' WHERE id=1";

if (mysqli_query($conn, $sql)) {
    echo "Record update successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
