<?php

// # 1.Percabangan if
// $kegiatan = "berlatih";
// if ($kegiatan == "berlatih") {
//     echo "Saya menjadi terampil<br><br>";
// }

// # 2.Percabangan if else
// $kegiatan = "belajar";
// if ($kegiatan == "belajar") {
//     echo "Saya menjadi terampil";
// } else {
//     echo "Saya menjadi kurang terampil";
// }

// # 3.switch case dengan integer
// $n = 3;
// switch ($n) {
//     case 1:
//         echo ("n bernilai 1");
//         break;
//     case 2:
//         echo ("n bernilai 2");
//         break;
//     case 3:
//         echo ("n bernilai 3");
//         break;
//     default:
//         echo ("n tidak bernilai 1, 2 or 3<br><br>");
// }

// # 4.switch case dengan String
// $kelas = "<br><br>IPA";
// switch ($kelas) {
//     case "<br><br>IPS<br><br>":
//         echo "<br><br>IPS<br><br>";
//         break;
//     case "<br><br>IPA":
//         echo "<br><br>IPS<br><br>";
//         break;
//     default:
//         echo "<br><br>Tidak ada yang dipilih<br>";
//         break;
// }

// # 5.while
// $i = 1000;
// while ($i <= 10) {
//     echo "$i";
//     echo "Tidak akan tampil di browser";
//     $i++;
// }

// # 6.do while
// $i = 1000;
// do {
//     echo "$i";
//     echo "<br><br>Akan tampil di browser<br><br>";
//     $i++;
// } while ($i <= 10);

# 1.if
$bintang = "bintang";
if ($bintang == "bintang") {
    echo "******<br><br>";
}

# 2.foreach
$bintang = array("******", "******", "******", "******", "******<br>");
foreach ($bintang as $val) {
    echo "$val";
    echo "<br />";
}

# 3.for
$bintang = 6;
for ($a = 1; $a <= $bintang; $a++) {
    for ($i = 1; $i <= $a; $i++) {
        echo " &nbsp";
    }
    for ($c = $bintang; $c >= $a; $c -= 1) {
        echo "*";
    }
    echo "<br>";
}
