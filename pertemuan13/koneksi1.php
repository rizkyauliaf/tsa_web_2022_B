<?php
$servername = "localhost";
$username = "root";
$password = "";

//membuat koneksi
$conn = new mysqli($servername, $username, $password);

//cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
