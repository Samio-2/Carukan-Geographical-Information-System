<!DOCTYPE html>
<html lang="en">

<head>

    <title>Carukan</title>
    <!-- 

Eatery Cafe Template 

http://www.templatemo.com/tm-515-eatery

-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="<?= base_url() ?>assets/web/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/web/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/web/css/animate.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/web/css/owl.carousel.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/web/css/magnific-popup.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/web/css/templatemo-style.css">

</head>

<body>

    <!-- PRE LOADER -->
    <section class="preloader">
        <div class="spinner">

            <span class="spinner-rotate"></span>

        </div>
    </section>


    <!-- MENU -->
    <!-- MENU -->
    <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
        <div class="container">

            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                </button>

                <!-- lOGO TEXT HERE -->
                <a href="#" class="navbar-brand">Caru<span>kan</span></a>
            </div>

            <!-- MENU LINKS -->
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-nav-first navbar-right">
                    <li><a href="#home" class="smoothScroll">Beranda</a></li>
                    <li><a href="#about" class="smoothScroll">Tentang</a></li>
                    <li><a href="#map" class="smoothScroll">Peta</a></li>
                    <li><a href="#gallery" class="smoothScroll">Galeri</a></li>
                    <li><a href="#profile" class="smoothScroll">Profil Saya</a></li>
                </ul>
            </div>

        </div>
    </section>


    <!-- HOME -->
    <section id="home" class="slider" data-stellar-background-ratio="0.5">
        <div class="row">
            <div class="owl-carousel owl-theme">


                <div class="item item-first">
                    <div class="caption">
                        <div class="container">
                            <div class="col-md-8 col-sm-12">
                                <h3>Cari Tempat Untuk Makan</h3>
                                <h1>Cari tempat makan yang enak dan nyaman</h1>
                                <a href="#map" class="section-btn btn btn-default smoothScroll">Cari Tempat</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item item-first">
                    <div class="caption">
                        <div class="container">
                            <div class="col-md-8 col-sm-12">
                                <h3>Galeri Kami</h3>
                                <h1>Lihatlah dan putuskan tempat favorit Anda</h1>
                                <a href="#gallery" class="section-btn btn btn-default smoothScroll">Galeri Kami</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item item-first">
                    <div class="caption">
                        <div class="container">
                            <div class="col-md-8 col-sm-12">
                                <h3>Profil Saya</h3>
                                <h1>Tetap berhubungan dan kenali saya lebih jauh</h1>
                                <a href="#profile" class="section-btn btn btn-default smoothScroll">Temui Saya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ABOUT -->
    <section id="about" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-sm-12">
                    <div class="about-info">
                        <div class="section-title wow fadeInUp" data-wow-delay="0.2s">
                            <h4>Baca cerita kami</h4>
                            <h2>Carukan Website Apasih?</h2>
                        </div>

                        <div class="wow fadeInUp" data-wow-delay="0.4s">
                            <p>
                                Bagi kalian para pecinta makanan yang masih bingung cari tempat makan yang lezat dan
                                nyaman di daerah Pagedangan, maka <a href="#about">Carukan</a>: Cari Rumah Makan adalah
                                solusinya.
                            </p>
                            <p>
                                <a href="#about">Carukan</a> merupakan website yang memberitahu pengguna
                                mengenai persebaran tempat makan seperti cafe, restaurant, dan lain sebagainya di daerah
                                Pagedangan. Pengguna dapat melihat persebaran tempat makan yang ada pada website ini
                                dibagian <a href="#map">Map</a>. Yuk cek ada tempat makan apa aja di daerah Pagedangan!
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12">
                    <div class="wow fadeInUp about-image" data-wow-delay="0.6s">
                        <img src="<?= base_url() ?>assets/web/images/food-about.jpg" class="img-responsive" alt="">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- MAP -->
    <section id="map">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                        <h2>Peta</h2>
                        <h4>Temukan tempat makan yang nyaman</h4>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12">
                    <iframe src="<?= base_url() ?>/home" width="100%" height="620px" frameborder="0"></iframe>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- GALLERY -->
    <section id="gallery" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                        <h2>Galeri Kami</h2>
                        <h4>Lihat tempat makan yang nyaman</h4>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <!-- MENU THUMB -->
                    <div class="menu-thumb wow fadeInUp">
                        <a href="<?= base_url() ?>assets/web/images/tempat/bangka.png" class="image-popup"
                            title="American Breakfast">
                            <img src="<?= base_url() ?>assets/web/images/tempat/bangka.png" class="img-responsive"
                                alt="">

                            <div class="menu-info">
                                <div class="menu-item">
                                    <h3>Bakmi Bangka Asli 17</h3>
                                    <p>Jl. BSD Raya Pusat, Pagedangan, Kec. Pagedangan, Tangerang, Banten</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <!-- MENU THUMB -->
                    <div class="menu-thumb wow fadeInUp">
                        <a href="<?= base_url() ?>assets/web/images/tempat/budew.png" class="image-popup"
                            title="Self-made Salad">
                            <img src="<?= base_url() ?>assets/web/images/tempat/budew.png" class="img-responsive"
                                alt="">

                            <div class="menu-info">
                                <div class="menu-item">
                                    <h3>Ayam Bakar Bumbu Rujak Resep Budew</h3>
                                    <p>Jl. Raya Pagedangan No.31, Pagedangan, Kec. Pagedangan, Tangerang, Banten</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <!-- MENU THUMB -->
                    <div class="menu-thumb wow fadeInUp">
                        <a href="<?= base_url() ?>assets/web/images/tempat/ceker.png" class="image-popup"
                            title="Chinese Noodle">
                            <img src="<?= base_url() ?>assets/web/images/tempat/ceker.png" class="img-responsive"
                                alt="">

                            <div class="menu-info">
                                <div class="menu-item">
                                    <h3>Ayam Bakar Ceker</h3>
                                    <p>Jl. Biofisika, Pagedangan, Kec. Pagedangan, Tangerang, Banten</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <!-- MENU THUMB -->
                    <div class="menu-thumb wow fadeInUp">
                        <a href="<?= base_url() ?>assets/web/images/tempat/koga.png" class="image-popup"
                            title="Rice Soup">
                            <img src="<?= base_url() ?>assets/web/images/tempat/koga.png" class="img-responsive" alt="">

                            <div class="menu-info">
                                <div class="menu-item">
                                    <h3>Mie Ayam Koga</h3>
                                    <p>Ruko West Park, Jl. BSD Raya Pusat, Pagedangan, Tangerang, Banten</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <!-- MENU THUMB -->
                    <div class="menu-thumb wow fadeInUp">
                        <a href="<?= base_url() ?>assets/web/images/tempat/dafi.png" class="image-popup"
                            title="Project title">
                            <img src="<?= base_url() ?>assets/web/images/tempat/dafi.png" class="img-responsive" alt="">

                            <div class="menu-info">
                                <div class="menu-item">
                                    <h3>Mie Ayam Dafi</h3>
                                    <p>Bumi Puspiptek Asri, Blok 2, No. 27J, Pagedangan, Tangerang, Banten</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <!-- MENU THUMB -->
                    <div class="menu-thumb wow fadeInUp">
                        <a href="<?= base_url() ?>assets/web/images/tempat/ean.png" class="image-popup"
                            title="Project title">
                            <img src="<?= base_url() ?>assets/web/images/tempat/ean.png" class="img-responsive" alt="">

                            <div class="menu-info">
                                <div class="menu-item">
                                    <h3>Sambel Nampol Mama Ean</h3>
                                    <p>Jl. Raya Pagedangan, Pagedangan, Tangerang, Banten</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <!-- MENU THUMB -->
                    <div class="menu-thumb wow fadeInUp">
                        <a href="<?= base_url() ?>assets/web/images/tempat/gareng.png" class="image-popup"
                            title="Project title">
                            <img src="<?= base_url() ?>assets/web/images/tempat/gareng.png" class="img-responsive"
                                alt="">

                            <div class="menu-info">
                                <div class="menu-item">
                                    <h3>Bakso Gareng Wonogiri</h3>
                                    <p>Jl. Kp. Pagedangan No.15, RT.1/RW.2, Pagedangan, Kec. Pagedangan, Tangerang,
                                        Banten</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <!-- MENU THUMB -->
                    <div class="menu-thumb wow fadeInUp">
                        <a href="<?= base_url() ?>assets/web/images/tempat/gembus.png" class="image-popup"
                            title="Project title">
                            <img src="<?= base_url() ?>assets/web/images/tempat/gembus.png" class="img-responsive"
                                alt="">

                            <div class="menu-info">
                                <div class="menu-item">
                                    <h3>Ayam Gepuk Pak Gembus</h3>
                                    <p>Jl. Raya Pagedangan, RT.001/RW001, BSD, Kec. Pagedangan, Tangerang, Banten</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <!-- MENU THUMB -->
                    <div class="menu-thumb wow fadeInUp">
                        <a href="<?= base_url() ?>assets/web/images/tempat/gendut.png" class="image-popup"
                            title="Project title">
                            <img src="<?= base_url() ?>assets/web/images/tempat/gendut.png" class="img-responsive"
                                alt="">

                            <div class="menu-info">
                                <div class="menu-item">
                                    <h3>Bubur Ayam Pak Gendut</h3>
                                    <p>Jl. Astrobiologi, Pagedangan, Kec. Pagedangan, Tangerang, Banten</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <!-- MY PROFILE -->
    <section id="profile" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                        <h2>Profil Saya</h2>
                        <h4>Lebih dekat dengan saya</h4>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                        <img src="<?= base_url() ?>assets/web/images/sami.png" class="img-responsive" alt="">
                        <div class="team-hover">
                            <div class="team-item" data-wow-delay="0.2s">
                                <h4>"Lakukan apapun yang ingin kau lakukan"</h4>
                                <ul class="social-icon wow fadeInUp" data-wow-delay="0.2s">
                                    <li><a href="https://www.linkedin.com/in/muh-sami/"
                                            class="fa fa-linkedin-square"></a></li>
                                    <li><a href="https://dribbble.com/samio2" class="fa fa-dribbble"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="team-info wow fadeInUp" data-wow-delay="0.2s">
                        <h3>Muhammad Sami</h3>
                        <p>Pengembang Web</p>
                    </div>
                </div>

                <div class="col-md-8 col-sm-8">
                    <div class="isi wow fadeInUp" data-wow-delay="0.5s">
                        <p>Halo SIpilion, kenalin saya Muhammad Sami dari jurusan Sistem Informasi semester 7 di
                            Universitas Islam Negeri Syarif Hidayatullah Jakarta. Saya memiliki hobi membaca, desain dan
                            ngoding. Cari Cafe Yuk adalah website yang dibuat untuk menyelesaikan tugas mata kuliah
                            Aplikasi dan Website Sistem Informasi Geografis yang diampu oleh ibu Eva Khudzaeva, M.Si.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- FOOTER -->
    <footer id="footer" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="footer">
                    <div class="col-md-6 col-sm-6">
                        <div class="section-title wow fadeInUp" data-wow-delay="0.2s">
                            <p>
                                <br>Apk &amp; Web GIS
                                <br>Copyright &copy; 2021 Muhammad Sami
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <ul class="wow fadeInUp social-icon" data-wow-delay="0.4s">
                            <br>
                            <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-instagram"></a></li>
                            <li><a href="#" class="fa fa-google"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- SCRIPTS -->
    <script src="<?= base_url() ?>assets/web/js/jquery.js"></script>
    <script src="<?= base_url() ?>assets/web/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/web/js/jquery.stellar.min.js"></script>
    <script src="<?= base_url() ?>assets/web/js/wow.min.js"></script>
    <script src="<?= base_url() ?>assets/web/js/owl.carousel.min.js"></script>
    <script src="<?= base_url() ?>assets/web/js/jquery.magnific-popup.min.js"></script>
    <script src="<?= base_url() ?>assets/web/js/smoothscroll.js"></script>
    <script src="<?= base_url() ?>assets/web/js/custom.js"></script>

</body>

</html>