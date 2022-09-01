<html>

<head>
</head>

<body>
    <?php
    if (isset($_GET["nama"]) and isset($_GET["email"]) and isset($_GET["telp"])) {
        echo "Halo " . $_GET["nama"] . "!!<br>";
        echo "Alamat email kamu adalah " . $_GET["email"] . "!!<br>";
        echo "No telepon kamu adalah " . $_GET["telp"] . "!!<br>";
    } else {
        echo "Anda harus mengakses halaman ini dari myform.html";
    }
    ?>
</body>

</html>