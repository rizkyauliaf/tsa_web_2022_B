<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Theme Made By www.w3schools.com - No Copyright -->
    <title>Jamu Kita</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#flip").click(function() {
                $("#panel").slideDown("slow");
            });
        });
    </script>
    <style>
        #panel,
        #flip {
            padding: 5px;
            text-align: center;
            background-color: #6d4200;
            border: solid 1px #6d4200;
        }

        #panel {
            padding: 50px;
            display: none;
        }
    </style>
    <style>
        body {
            font: 20px Montserrat, sans-serif;
            line-height: 1.8;
            color: #f5f6f7;
        }

        p {
            font-size: 16px;
            text-align: center;
        }

        .margin {
            margin-bottom: 45px;
        }

        .bg-1 {
            background-image: url("https://www.femina.co.id/images/images/Peluang-Usaha-Jamu-Kemasan-Dan-Analisa-Usahanya.jpg");
            width: auto;
            height: 300px;
            background-size: cover;
            background-attachment: fixed;
            background-repeat: no-repeat;
            color: #ffffff;
        }

        .bg-2 {
            background-color: #f8e222;
            /* Dark Blue */
            color: #6d4200;
        }

        .bg-3 {
            background-color: #ffffff;
            /* White */
            color: #555555;
        }

        .bg-4 {
            background-color: #2f2f2f;
            /* Black Gray */
            color: #fff;
        }

        .container-fluid {
            padding-top: 70px;
            padding-bottom: 70px;
        }

        .navbar {
            padding-top: 15px;
            padding-bottom: 15px;
            border: 0;
            border-radius: 0;
            margin-bottom: 0;
            font-size: 12px;
            letter-spacing: 5px;
        }

        .navbar-nav li a:hover {
            color: #1abc9c !important;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">JAMU KITA</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">BERANDA</a></li>
                    <li><a href="#">SEJARAH JAMU</a></li>
                    <li><a href="#">PRODUK INOVASI</a></li>
                    <li><a href="#">BERITA TERKINI</a></li>
                    <li><a href="logout.php">LOGOUT</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="flip">Click to slide down panel</div>
    <div id="panel">SELAMAT DATANG!</div>

    <!-- First Container -->
    <div class="container-fluid bg-1 text-center"></div>

    <!-- Second Container -->
    <div class="container-fluid bg-2 text-center">
        <div class="row">
            <h3 class="judul"><b>DARI PETANI HINGGA PRODUKSI</b></h3>
            <br />
            <div class="col-lg-6 col-xs-12 col col-img img blockB>">
                <img src="https://www.sidomuncul.co.id/assets/images/production/production_01.jpg" alt="petani jamu" style="width: 400px; border-radius: 50px" />
            </div>

            <div class="col-lg-4 col-xs-12 col col-text blockA">

                <div class="text-left">
                    <h4><b>Mitra Kami</b></h4>
                </div>

                <div class="text-left">
                    <p class="text-left">
                        Kami percaya bahwa bahan-bahan alami dapat menjaga kesehatan dengan
                        baik. Kami bekerja sama dengan petani lokal untuk memasok bahan baku
                        kami secara baik, adil, dan sinambung.
                    </p>

                    <a href="#" class="btn btn-default btn-light">
                        <span class="button"></span> Gabung Menjadi
                        Mitra Kami
                    </a>
                </div>

            </div>
        </div>
    </div>

    <!-- Third Container -->
    <div class="container-fluid bg-3 text-center">
        <h3 class="margin"><b>SEJARAH JAMU</b></h3>

        <div class="image">
            <img src="https://d220hvstrn183r.cloudfront.net/attachment/52881024896939622944.large" style="width: 800px" alt="sejarah jamu" />
        </div>
        <br />

        <div class="text-center">
            <h4><b>INDUSTRI JAMU YANG BERMANFAAT BAGI MASYARAKAT DAN LINGKUNGAN</b></h4>
            <p>
                Jamu umumnya digunakan masyarakat Indonesia sebagai minuman obat alami untuk menjaga kesehatam, serta menyembuhkan berbagai penyakit. Tradisi minum jamu ini diperkirakan sudah ada sejak 1300 M dan merupakan minuman bersejarah.

                Jamu merupakan minuman berkhasiat dari Indonesia sebagai minuman kesehatan, mencegah, dan menyembuhkan berbagai penyakit. Jamu disajikan dengan berbagai jenis, mengingat di Indonesia memiliki tanaman herbal berjumlah cukup banyak. Setiap daerah mempunyai jenis Jamu yang berbeda, menyesuaikan dengan tanaman herbal yng tumbuh didaerahnya.
            </p>
        </div>

    </div>

    <!-- four Container (Grid) -->
    <div class="container-fluid bg-2 text-center">
        <h3 class="margin"><b>PROSES PRODUKSI</b></h3>
        <br />
        <div class="row">
            <div class="col-lg-6 col-xs-12 col col-img img blockB>">
                <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjBwfSDmcHQzMVEfM6qOGLR5XL0BCFeQvSrnQ933MnFye7Sl_CwNiwdx8CXxz-Rr6IEDVjRmCx0XgPp7an83EqYWGEE3ou67qZ5tsWT74HqZmM7kuPEzAB6BnEHgZsntMQjL3j8Spdwf5morehhJ2UWZQMGWYr-MHkok3E7vBUWfAuP1qxNLptwMt2O/s3397/alur-produksi.png" alt="alur-produksi" style="margin-left:12%;margin-right:12%;width: 1100px; " />
            </div>
        </div>
    </div>
    </div>

    <!-- fifth Container -->
    <div class="container-fluid bg-3 text-center">
        <h3 class="margin"><b>PRODUK INOVASI</b></h3>
        <br />
        <div class="row">
            <div class="col-lg-6 col-xs-12 col col-img img blockB>">
                <img src="https://asset.kompas.com/crops/hVY5E1jqbDoKAbqS4rxx039TAnA=/24x0:867x562/750x500/data/photo/2021/03/02/603e41b8eaf6b.jpg" alt="kunyit asam" style="width: 400px; " />
            </div>

            <div class="col-lg-4 col-xs-12 col col-text blockA>">

                <div class="text-center">
                    <h4><b>Kunyit Asem</b></h4>
                </div>

                <div class="text-left">
                    <p>
                        Kunyit asam adalah minuman tradisional atau jamu yang diracik
                        dari dua jenis rempah yang berbeda, yaitu kunyit dan asam Jawa.
                    </p>
                </div>
                <button type="button" class="btn btn-warning">Selengkapnya</button>
            </div>

        </div>
        <br>
        <br>
        <!-- <button type="button" class="btn btn-default btn-light">Kunyit Asem</button>
        <button type="button" class="btn btn-default btn-light">beras Kencur</button>
        <button type="button" class="btn btn-default btn-light">Temulawak</button>
        <button type="button" class="btn btn-default btn-light">Galian Singset</button>
        <button type="button" class="btn btn-default btn-light">Sinom</button> -->
        <?php
        $jamu = array("Kunyit Asem", "Beras Kencur", "Temulawak", "Galian Singset", "Sinom");
        foreach ($jamu as $val) {
            echo "<button type='button' class='btn btn-warning'>" . $val . "</button>";
        }
        ?>
    </div>

    <!-- sixth Container (Grid) -->
    <div class="container-fluid bg-2 text-center">
        <h2 class="margin">BERITA TERBARU</h2>
        <br />
        <div class="row">
            <div class="col-sm-4">
                <img src="https://disk.mediaindonesia.com/thumbs/1200x-/news/2020/07/107f38017622cdae037ee6eb98ef64af.jpg" class="img-responsive margin" style="width:100%" alt="Image" />
                <div class="sub-judul">
                    <h4><b>Explore Jamu Tradisional</b></h4>
                </div>
                <p>
                    Incar Pasar Eropa, jamu Kami ingin mengexplore jamu lebih banyak lagi ke Eropa. Jamu Akan lebih diexplore dengan lebih...<a href="">Selengkapnya</a>
                </p>

            </div>
            <div class="col-sm-4">
                <img src="https://akcdn.detik.net.id/visual/2015/05/10/09544490-be6f-4a2c-970d-c6372bd9c300_169.jpg?w=650" class="img-responsive margin" style="width:100%" alt="Image" />
                <div class="sub-judul">
                    <h4><b>Sehat dengan Jamu, Ayo Minum Jamu</b></h4>
                </div>
                <p>
                    Upaya peningkatan kualitas hidup manusia dapat diperoleh dengan meningkatkan kondisi kesehatan, dimana berpengaruh positif...<a href="">Selengkapnya</a>
                </p>
            </div>
            <div class="col-sm-4">

                <img src="https://warta.jogjakota.go.id/assets/instansi/warta/article/Untitled-161.jpg" class="img-responsive margin" style="width:100%" alt="Image" />
                <div class="sub-judul">
                    <h4><b>Jamu, Ramuan Tradisional Kaya Manfaat</b></h4>
                </div>
                <p>
                    amu di Indonesia biasa digunakan sebagai obat herbal atau hasil meramu bahan-bahan yang berasal dari alam dan memiliki khas...<a href="">Selengkapnya</a>
                </p>
            </div>
        </div>
    </div>
</body>

<!-- Footer -->
<footer class="footer bg-light">

    <div class="container">
        <p class="text-muted small mb-4 mb-lg-0">&copy; Jamu Kita - kelompok 6</p>
    </div>

</footer>


</html>