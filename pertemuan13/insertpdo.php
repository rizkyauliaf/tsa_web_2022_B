<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbpdo";

try {
    //membuat koneksi
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    //set PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //sql untuk membuat tabel
    $sql = "INSERT INTO peserta (nama, email) VALUES ('Rizky','rizkyauliaf@gmail.com'),('Andi','andi@gmail.com')";

    // menggunakan exec() karena no result are turned
    $conn->exec($sql);
    echo "New record created successfully";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
