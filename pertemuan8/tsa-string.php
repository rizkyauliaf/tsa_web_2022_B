<?php

// $nama = 'riris';
// $anggota = 'selamat datang $nama';

// $namaDepan = 'Aulia';
// $namaBelakang = 'Rizky';
// $nama = $namaDepan . ' ' . $namaBelakang;
// echo "$nama<br>";
// $namaDepan . .$namaBelakang;
// echo $namaDepan;

// $kota = 'Pasuruan';
// $provinsi = 'Jawa Timur';
// $alamat = $kota . ' ' . $provinsi;
// echo "$alamat<br>";

$loremIpsum = " rizky aulia suka makan bakso, hamburger, cake, pasta, semua makanan kecuali duren, dan pare.";
echo "<p>{$loremIpsum}</p>";
echo "Panjang karakter: " . strlen($loremIpsum) . "<br>";

echo "Panjang kata: " . str_word_count($loremIpsum) . "<br";

#mengembalikan sebuah string yang telah dihapus,  dihilangkan karakter spasi yang ada pada akhir kanan string
$str = "<br><br><br>Sate makanan khas Indonesia <br>";
echo rtrim($str);

#mengembalikan sebuah string yang telah dihapus,  dihilangkan karakter spasi yang ada pada akhir kiri string
$str = "<br> Air putih sehat untuk kesehatan<br>";
echo ltrim($str);

#dihilangkan karakter spasi yang ada pada awal (kiri) dan akhir (kanan) string
$str = "<br>Minuman dan makanan<br>";
echo trim($str);

#explode untuk mengekstrak sebuah string menjadi array()
$makanan = "<br>bakso sate air soto";
$exp = explode(' ', $makanan);
foreach ($exp as $val) {
    echo $val . "<br />";
}

#mencetak string
print("<br>Selamat Pagi!<br>");

#mengulang string
echo str_repeat("<br>Pagi", 10);

# Strtoupper() digunakan untuk mengkonversi string dengan format huruf kapital
echo strtoupper('<br>rizky aulia<br>');

# mengubah ukuran huruf pertama dikata sebuah string menjadi kapital. 
$string = "<br>bakso dan pasta itu enak<br>";
echo ucfirst($string);

#special karakter \n baris baru
echo "<br>JTI\npolinema <br>";

#special karakter \r carrige return
echo "Halo\rDunia <br>";

#karakter \t tab
echo "
<pre>Halo\tTeman-Teman!</pre>";
