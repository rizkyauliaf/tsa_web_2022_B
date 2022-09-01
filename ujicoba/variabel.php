<?php

//membuat variabel baru
$nama_barang = "Minyak Goreng";
$harga = 15000;

// menampilkan isi variabel
echo "Ibu membeli $nama_barang seharga Rp $harga <br>";
$judul = "Belajar PHP dari nol sampai expert";
echo "Judul artikel: $judul <br>";
$judul = "Tutorial PHP untuk pemula<br><br>";
echo 'Judul artikel: ' . $judul;

define('NAMA_KONSTANTA', 'NILAI KONSTATNTA<br>');
const KONSTANTA = "nilai konstanta<br>";

echo "nilai konstanta: KONSTANTA<br>";
echo "NILAI KONSTANTA: NAMA_KONSTANTA<br><br>";

$jenis_kelamin = 'Laki-Laki'; //tipe data char
$nama_lengkap = "Aries Ariyanto"; //tipe data string
$umur = 17; //tipe data integer
$berat = 65.5; //tipe data float
$tinggi = 178.5; //tipe data float
$menikah = false; //tipe data boolean

echo "nama lengkap: $nama_lengkap <br>";
echo 'jenis kelamin :' . $jenis_kelamin . '<br>';
echo "umur : " . $umur . " tahun<br>";
echo "berat : $berat kg <br>";
echo 'tinggi :' . $tinggi . 'cm<br>';
echo "status menikah : $menikah<br><br>";

$minuman = array("Kopi", "Teh", "Jus Jeruk<br>");
$makanan = ["Nasi Goreng", "Soto", "Bubur<br>"];
echo $minuman[0] . "<br>";
echo $minuman[1] . "<br>";
echo $minuman[2] . "<br><br>";
echo $makanan[0] . "<br>";
echo $makanan[1] . "<br>";
echo $makanan[2] . "<br>";

$data = [
    "nama" => "Arie Ariyanto",
    "usia" => 17,
    "berat" => 65.5,
    "tinggi" => 178.5,
    "menikah" => false
];

echo "Nama: " . $data['nama'] . "<br/>";
echo "Usia: " . $data['usia'] . "</br>";
echo "Berat: " . $data['berat'] . "</br>";
echo "Tinggi: " . $data['tinggi'] . "<br/>";
echo "Menikah: " . $data['menikah'] . "<br/><br>";

$a = 5;
$b = 2;

// Penjumlahan
$c = $a + $b;
echo "$a + $b =  $c";
echo "<hr>";

// Pengurangan
$c = $a - $b;
echo "$a - $b = $c";
echo "<hr>";

// Perkalian
$c = $a * $b;
echo "$a * $b = $c";
echo "<hr>";

// Pembagian
$c = $a / $b;
echo "$a / $b = $c";
echo "<hr>";

// Sisa bagi
$c = $a % $b;
echo "$a % $b = $c";
echo "<hr>";

// Pangkat
$c = $a ** $b;
echo "$a ** $b = $c";
echo "<hr><br><br>";

$a = 6;
$b = 2;

// menggunakan operator relasi lebih besar
$c = $a > $b;
echo "$a > $b: $c";
echo "<hr>";

// menggunakan operator relasi lebih kecil
$c = $a < $b;
echo "$a < $b: $c";
echo "<hr>";

// menggunakan operator relasi lebih sama dengan
$c = $a == $b;
echo "$a == $b: $c";
echo "<hr>";

// menggunakan operator relasi lebih tidak sama dengan
$c = $a != $b;
echo "$a != $b: $c";
echo "<hr>";

// menggunakan operator relasi lebih besar sama dengan
$c = $a >= $b;
echo "$a >= $b: $c";
echo "<hr>";

// menggunakan operator relasi lebih kecil sama dengan
$c = $a <= $b;
echo "$a <= $b: $c";
echo "<hr><br><br>";

$a = true;
$b = false;

// variable #c akan bernilai false
$c = $a && $b;
printf("%b && %b = %b", $a, $b, $c);
echo "<hr>";

//variabel $c akan bernilai true
$c = $a || $b;
printf("%b || %b = %b", $a, $b, $c);
echo "<hr>";

// variabel $c akan bernilai false
$c = !$a;
printf("!%b = %b", $a, $c);
echo "<hr><br><br>";

$a = 60;
$b = 13;

// bitwise AND
$c = $a & $b;
echo "$a & $b = $c";
echo "<br>";

// bitwise OR
$c = $a | $b;
echo "$a | $b = $c";
echo "<br>";

// bitwise XOR
$c = $a ^ $b;
echo "$a ^ $b = $c";
echo "<br>";

// bitwise Left
$c = $a << $b;
echo "$a << $b = $c";
echo "<br>";

// bitwise Right
$c = $a >> $b;
echo "$a >> $b = $c";
echo "<br><br>";

$suka = true;

// menggunakan operator ternary
$jawab = $suka ? "iya" : "tidak";

//menampilkan jawaban
echo $jawab;
