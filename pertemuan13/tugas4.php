<?php
$servername = "localhost";
$username = "root";
$password ="";
$dbname = "db_polinema";

//craete connection
$conn = new mysqli($servername, $username, $password, $dbname);
//check connection
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id_produk,nama_produk, harga_produk, merk_produk FROM produk ";
$result = $conn->query($sql);

if ($result->num_rows > 0){
    //output data of each row
    while($row = $result->fetch_assoc()) {
        echo "ID Produk: " . $row["id_produk"]. " - Nama Produk: " . $row["nama_produk"]. " - Harga Produk: " 
        . $row["harga_produk"]. " - Merk Produk: " . $row["merk_produk"].  "<br>";
    } 
} else{
    echo "0 results";

}
$conn->close();
