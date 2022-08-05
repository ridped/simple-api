<?php
require('../config/function.php');
if (!ceksess() == '0') {
    redirect($domain);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>ApiWaY - Rest API For Your Project</title>
    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link rel="manifest" href="images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- main template stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
    <div class="preloader"></div>
    <div class="page-wrapper">
        <header class="site-header header-one">
            <nav class="navbar navbar-expand-lg navbar-light header-navigation stricky">
                <div class="container clearfix">
                    <div class="logo-box clearfix">
                        <a class="navbar-brand" href="">
                            <img src="images/logo.png" width="200px" alt="Awesome Image" />
                        </a>
                        <button class="menu-toggler" data-target=".header-one .main-navigation">
                            <span class="fa fa-bars"></span>
                        </button>
                    </div>
                    <div class="main-navigation">
                        <ul class="one-page-scroll-menu navigation-box">
                            <li class=" current scrollToLink">
                                <a href="#banner">Home</a>
                            </li>
                            <li class="scrollToLink"><a href="#service">Layanan</a></li>
                            <li class="scrollToLink"><a href="#features">Fitur</a></li>
                        </ul>
                    </div>
                    <div class="right-side-box">
                        <a href="login" class="header-btn">Login</a>
                    </div>
                </div>
            </nav>
        </header>
        <section class="banner-style-one" id="banner">
            <span class="bubble-1"></span>
            <span class="bubble-2"></span>
            <span class="bubble-3"></span>
            <span class="bubble-4"></span>
            <span class="bubble-5"></span>
            <span class="bubble-6"></span>
            <img src="images/banner-moc-1-1.png" class="banner-mock" alt="Awesome Image" />
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-8">
                        <div class="content-block">
                            <h3>Best API <br>For Your Project.<br>
                            <p>Berbagai macam Rest Api <br>yang dibutuhkan oleh developer ada disini.</p>
                            <div class="button-block">
                                <a href="login" class="banner-btn">
                                    <i class="fa fa-user"></i>
                                    <span>Login</span>
                                </a>
                                <a href="daftar" class="banner-btn">
                                    <i class="fa fa-user-plus"> </i>
                                    <span class="ml-2">Register</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="brand-style-one ">
            <div class="container">
                <div class="block-title text-center">
                    <img src="images/round-circle-1-2.png" alt="Awesome Image" class="wow rotateIn" data-wow-duration="1000ms" />
                    <h2>ADMIN APIWAY</h2>
                <div class="brand-carousel-one owl-theme owl-carousel text-center font-weight-bold">
                    <?php
                        $p = mysqli_query($con, "SELECT * FROM way_account WHERE level = 'admin' ORDER BY id");
                        while($row = mysqli_fetch_assoc($p)) { ?>
                    <div class="item">
                        <a href="<?php echo $domain;?>/profile/<?php echo $row['username'];?>" target="_blank">
                        <img src="https://www.ridped.com/way/mypp2.png" alt="<?php echo $row['username'];?>" />
                        <p><?php echo $row['username'];?> <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 512 512"><path d="m256 0c-141.164062 0-256 114.835938-256 256s114.835938 256 256 256 256-114.835938 256-256-114.835938-256-256-256zm0 0" fill="#2196f3"></path><path d="m385.75 201.75-138.667969 138.664062c-4.160156 4.160157-9.621093 6.253907-15.082031 6.253907s-10.921875-2.09375-15.082031-6.253907l-69.332031-69.332031c-8.34375-8.339843-8.34375-21.824219 0-30.164062 8.339843-8.34375 21.820312-8.34375 30.164062 0l54.25 54.25 123.585938-123.582031c8.339843-8.34375 21.820312-8.34375 30.164062 0 8.339844 8.339843 8.339844 21.820312 0 30.164062zm0 0" fill="#fff"></path></svg></p>
                        </a>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <section class="brand-style-one ">
            <div class="container">
                <div class="block-title text-center">
                    <img src="images/round-circle-1-2.png" alt="Awesome Image" class="wow rotateIn" data-wow-duration="1000ms" />
                    <h2>OUR MEMBER</h2>
                <div class="brand-carousel-one owl-theme owl-carousel text-center font-weight-bold">
                    <?php
                        $p = mysqli_query($con, "SELECT * FROM way_account WHERE level = 'member' ORDER BY id");
                        while($row = mysqli_fetch_assoc($p)) { ?>
                    <div class="item">
                        <a href="<?php echo $domain;?>/profile/<?php echo $row['username'];?>" target="_blank">
                        <img src="https://www.ridped.com/way/mypp2.png" alt="<?php echo $row['username'];?>" />
                        <p><?php echo $row['username'];?></p>
                        </a>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <section class="fun-fact-style-one">
            <div class="container">
                <h3 class="title-line">REAL STATISTIK APIWaY</h3>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="single-funfact-one text-center">
                            <h3 class="counter"><?php echo $datafitur['fitur']; ?></h3>
                            <p>Fitur</p>
                        </div><!-- /.single-funfact-one -->
                    </div><!-- /.col-lg-3 -->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="single-funfact-one text-center">
                            <h3 class="counter"><?php echo $totaluser;?></h3>
                            <p>Pengguna</p>
                        </div><!-- /.single-funfact-one -->
                    </div><!-- /.col-lg-3 -->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="single-funfact-one text-center">
                            <h3 class="counter towtalhit">10481</h3>
                            <p>Total Hit</p>
                        </div><!-- /.single-funfact-one -->
                    </div><!-- /.col-lg-3 -->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="single-funfact-one text-center">
                            <h3 class="counter"><?php echo $totnotactive;?></h3>
                            <p>Tidak Aktif</p>
                        </div><!-- /.single-funfact-one -->
                    </div><!-- /.col-lg-3 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.fun-fact-style-one -->
        <section class="services-style-one" id="service">
            <div class="container">
                <div class="block-title text-center">
                    <img src="images/round-circle-1-1.png" alt="Awesome Image" class="wow rotateIn" data-wow-duration="1000ms" />
                    <h2>Layanan.</h2>
                </div><!-- /.block-title -->
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="single-service-one">
                            <div class="hover-block"></div>
                            <i class="opins-icon-smartphone"></i>
                            <h3>Full Responsive</h3>
                            <p>Website kami dapat diakses melalui berbagai device/perangkat baik PC, tablet, maupun mobile phone.</p>
                            <div class="line-block"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="single-service-one">
                            <div class="hover-block"></div>
                            <i class="opins-icon-smartphone-1"></i>
                            <h3>Free for <br>Access & Hit </h3>
                            <p>Selain fitur premium, Kami juga menyediakan banyak fitur dan Hit gratis.</p>
                            <div class="line-block"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="single-service-one">
                            <div class="hover-block"></div>
                            <i class="opins-icon-smartphone-2"></i>
                            <h3>Secure and Perfect <br> Integration</h3>
                            <p>APIWaY Sangat mudah digunakan dan diintegrasikan pada projek Anda.</p>
                            <div class="line-block"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="feature-style-one" id="features">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="image-block">
                            <img src="images/moc-1-1.png" alt="Awesome Image" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="content-block">
                            <div class="block-title ">
                                <img src="images/round-circle-1-2.png" alt="Awesome Image" class="wow rotateIn" data-wow-duration="1000ms" />
                                <h2>Integrasikan<br>ke Projekmu sekarang.</h2>
                            </div>
                            <p>Fitur yang lengkap dan integrasi yang cukup mudah.</p>
                            <ul class="feature-lists">
                                <li><i class="fa fa-check"></i> Downloader social media. </li>
                                <li><i class="fa fa-check"></i> Image & text maker.</li>
                                <li><i class="fa fa-check"></i> Fun & game.</li>
                            </ul>
                            <a href="daftar" class="feature-btn">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="site-footer">
            <span class="bubble-1"></span>
            <span class="bubble-2"></span>
            <span class="bubble-3"></span>
            <span class="bubble-4"></span>
            <span class="bubble-5"></span>
            <span class="bubble-6"></span>
        </footer>
        <div class="bottom-footer text-center">
            <div class="container">
                <p>&copy; copyright 2022 by <a href="https://azran.my.id">M Asran</a></p>
                <p>Powered By : <a href="https://www.ridped.com/">RIDPEDIA</a></p>
            </div>
        </div>
    </div>
    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-long-arrow-up"></i></a>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.bxslider.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/theme.js"></script>
</body>

</html>