<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "dboo";

 $conn = new mysqli($servername, $username, $password, $dbname);
 if($conn->connect_error){
    die("Connection Failed : " . $conn->connect_error);
 }

 $sql = "Select id,nama,email from peserta order by nama desc";
 $result = $conn->query($sql);

if($result->num_rows > 0){
while($row = $result->fetch_assoc()){
    echo "ID : ". $row["id"]."  NAMA : " . $row["nama"]."  EMAIL :" . $row["email"] . "<br>";
}
}else{
    echo "0 results";
}

$conn->close();
