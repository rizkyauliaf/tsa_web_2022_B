<?php
include "koneksi2.php";

//membuat  database
$sql = "CREATE DATABASE dbpro";
if (mysqli_query($conn, $sql)) {
    echo "DATABASE created successfully";
} else {
    echo "Error creating database: " . mysqli_query($conn);
}
mysqli_close($conn);
