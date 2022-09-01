<?php
$servername = "localhost";
$username = "root";
$password = "";

//membuat koneksi
$conn = mysqli_connect($servername, $username, $password);

//cek koneksi
if (!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
