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
    $sql = "UPDATE peserta SET email='rizkyauliaf@gmail.com' WHERE id=1";

    $stmt = $conn->prepare($sql);

    $stmt->execute();

    echo $stmt->rowCount() . " records UPDATE successfully";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
