<?php
echo "<table style='border: solid lpx black;'>";
echo "<tr><th>ID</th><th>Nama</th><th>EMAIL</th></tr>";

class TableRows extends RecursiveIteratorIterator{
    function __construct($it){
        parent:: __construct ($it, self::LEAVES_ONLY);
    }
    function current(){
        return "<td style 'width:150px;border:1px solid black;'>" . parent::current(). "</td>";
    }
    function beginChildren(){
        echo "<tr>";
    }
    function endChildren(){
        echo "</tr>" . "<\n>";
    }
}

 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "dbpdo";

 try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $stmt =  $conn->prepare("select id,nama,email from peserta");
    $stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
 foreach (new TableRows (new RecursiveArrayIterator ($stmt->fetchAll())) as $k=>$v) {
   echo $v;
 }
}catch (PDOException $e){
    echo "Error: " . $e->getMessage();  
}
$conn = null;
echo "</table>";
