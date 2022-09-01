<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_polinema";

//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

#untuk memanggil
$nama_produk = $_POST['nama_produk'];
$harga_produk = $_POST['harga_produk'];
$merk_produk = $_POST['merk_produk'];

$target_path = "uploads/";

$target_path = $target_path . basename(
    $_FILES['uploadedfile']['name']
);

if (move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
    $sql = "INSERT INTO produk (nama_produk, harga_produk, merk_produk, gambar)
VALUES ('$nama_produk', '$harga_produk', '$merk_produk', '$target_path')";
} else {
    echo "Terdapat kesalahan upload file.";
}


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
