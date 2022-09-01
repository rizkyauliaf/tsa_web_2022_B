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
$sql = "INSERT INTO peserta (nama, email) VALUES ('Rizky','rizkyauliaf@gmail.com'),('Andi','andi@gmail.com')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
