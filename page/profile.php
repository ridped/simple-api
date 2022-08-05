<?php
// profile.php
require('../config/function.php');

// simple ae :v ini data profile user
$umser = $_GET['user'] ? $_GET['user'] : $_SESSION['username'];
$ss = mysqli_query($con, "SELECT * FROM way_account WHERE username = '$umser'");

if (mysqli_num_rows($ss) == 0) {
    header('HTTP/1.1 404 Not Found');
    include '../404.html';
    exit();
}

$profileUser = mysqli_fetch_assoc($ss);

// au ah cape, gini aja pokonya
$isOwnerUser = "";
if ($umser == $_SESSION['username']) {
    $isOwnerUser = true;
} else {
    $isOwnerUser = false;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $dataweb['deskripsi'];?>">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="M Asran">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <!-- Title -->
    <title><?php echo $dataweb['nama_web'];?></title>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link href="<?php echo $domain;?>/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $domain;?>/assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
    <link href="<?php echo $domain;?>/assets/plugins/pace/pace.css" rel="stylesheet">

    
    <!-- Theme Styles -->
    <link href="<?php echo $domain;?>/assets/css/main.min.css" rel="stylesheet">
    <link href="<?php echo $domain;?>/assets/css/custom.css" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/neptune.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/neptune.png" />
</head>
<body>
    <div class="app align-content-stretch d-flex flex-wrap">
        <div class="app-sidebar">
            <div class="logo">
                <a href="<?php echo $domain;?>" class="logo-icon"><span class="logo-text">APIWaY</span></a>
            </div>
            <div class="app-menu">
                <ul class="accordion-menu">
                    <li class="sidebar-title">
                        MENU
                    </li>
                    <li class="active-page">
                        <a href="<?php echo $domain;?>" class="active"><i class="material-icons-two-tone">dashboard</i>Dashboard</a>
                    </li>
                    <li>
                        <a href=""><i class="material-icons-two-tone">download</i>Downloader<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="<?php echo $domain?>/api?feature=ig&apikey=YOUR-API&url=URL">IG</a>
                            </li>
                            <li>
                                <a href="<?php echo $domain?>/api?feature=tiktok&apikey=YOUR-API&url=URL">TikTok</a>
                            </li>
                            <li>
                                <a href="<?php echo $domain?>/api?feature=ytdl&apikey=YOUR-API&url=URL&format=audio">ytmp3/ytmp4</a>
                            </li>
                            <li>
                                <a href="<?php echo $domain?>/api?feature=fb&apikey=YOUR-API&url=URL">Facebook</a>
                            </li>
                            <li>
                                <a href="<?php echo $domain?>/api?feature=play&apikey=YOUR-API&q=Five minutes hampa&format=audio">Play audio/video</a>
                            </li>
                            <li>
                                <a href="<?php echo $domain?>/api?feature=sfile&apikey=YOUR-API&url=URL">SFile Mobi</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href=""><i class="material-icons-two-tone">mms</i>Image & text maker<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="<?php echo $domain?>/api?feature=card-welcome&apikey=YOUR-API&title=This title&msgcenter=This msgcenter&msgfooter=This msgfooter&userimage=https://ridped.com/way/mypp2.png&background=https://ridped.com/way/mypp2.png">Card welcome</a>
                            </li>
                            <li>
                                <a href="<?php echo $domain?>/api?feature=quotemaker&apikey=YOUR-API&text=This text&wm=This wn&bg=https://ridped.com/way/mypp2.png">Quotemaker</a>
                            </li>
                            <li>
                                <a href="<?php echo $domain?>/api?feature=dropwater&apikey=YOUR-API&text1=This text1&wm=This wm">Dropwater</a>
                            </li>
                            <li>
                                <a href="<?php echo $domain?>/api?feature=horror-blood&apikey=YOUR-API&text1=This text1&wm=This wm">Horror blood</a>
                            </li>
                            <li>
                                <a href="<?php echo $domain?>/api?feature=graffiti-2&apikey=YOUR-API&text1=This text1&text2=This text2&wm=This wm">Graffiti 2</a>
                            </li>
                            <li>
                                <a href="<?php echo $domain?>/api?feature=graffiti-1&apikey=YOUR-API&text1=This text1&text2=This text2&wm=This wm">Graffiti 1</a>
                            </li>
                            <li>
                                <a href="<?php echo $domain?>/api?feature=neon-devil&apikey=YOUR-API&text1=This text1&wm=This wm">Neon devil</a>
                            </li>
                            <li>
                                <a href="<?php echo $domain?>/api?feature=rec-glitch&apikey=YOUR-API&text1=This text1&wm=This wm">Rec Glitch</a>
                            </li>
                            <li>
                                <a href="<?php echo $domain?>/api?feature=love-neon&apikey=YOUR-API&text1=This text1&wm=This wm">Love neon</a>
                            </li>
                            <li>
                                <a href="<?php echo $domain?>/api?feature=glitch-generator&apikey=YOUR-API&text1=This text1&wm=This wm">Glitch generator</a>
                            </li>
                            <li>
                                <a href="<?php echo $domain?>/api?feature=blackpink&apikey=YOUR-API&text1=This text1&wm=This wm">Black Pink</a>
                            </li>
                            <li>
                                <a href="<?php echo $domain?>/api?feature=porn-hub&apikey=YOUR-API&text1=This text1&text2=This text2&wm=This wm">Porn Hub</a>
                            </li>
                            <li>
                                <a href="<?php echo $domain?>/api?feature=glitch-tiktok&apikey=YOUR-API&text1=This text1&text2=This text2&wm=This wm">Glitch Tiktok</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href=""><i class="material-icons-two-tone">games</i>Fun & Game<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
                        <li>
                            <a href="<?php echo $domain;?>/api?feature=tebakgambar&apikey=YOUR-API">Tebak Gambar</a>
                        </li>
                        <li>
                            <a href="<?php echo $domain;?>/api?feature=asupan&apikey=YOUR-API">Asupan</a>
                        </li>
                        <li>
                            <a href="<?php echo $domain;?>/api?feature=artinama&apikey=YOUR-API&name=ridah">Arti nama</a>
                        </li>
                        <li>
                            <a href="<?php echo $domain;?>/api?feature=artimimpi&apikey=YOUR-API&mimpi=belanja">Arti mimpi</a>
                        </li>

                        </ul>
                    </li>
                    <li class="sidebar-title hiddenpc">
                        <?php if (ceksess() !== 0) { echo "👋 HI " .$_SESSION['username']; } else { echo 'You\'re login as guest'; }?>
                    </li>

                    <style type="text/css">
                        @media (min-width: 1100px) {
                            .hiddenpc {
                                display: none!important;
                            }
                        }
                    </style>
                    <?php if (ceksess() !== 0) { ?>
                    <li class="hiddenpc">
                        <a href="#"><i class="material-icons-two-tone">analytics</i>Settings<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="profile/<?php echo $_SESSION['username'];?>">Profile</a>
                            </li>
                            <li>
                                <a href="logout">Logout</a>
                            </li>
                        </ul>
                    </li>
                    <?php } else {?>

                    <li class="hiddenpc">
                        <a href="#"><i class="material-icons-two-tone">analytics</i>Auth<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="login">Masuk</a>
                            </li>
                            <li>
                                <a href="daftar">Daftar</a>
                            </li>
                        </ul>
                    </li>
                     <?php } ?>
                </ul>
            </div>
        </div>
        <div class="app-container">
            <div class="search hidden-on-mobile">
                <form>
                    <input class="form-control" type="text" placeholder="Type here..." aria-label="Search">
                </form>
                <a href="#" class="toggle-search"><i class="material-icons">close</i></a>
            </div>
            <div class="app-header">
                <nav class="navbar navbar-light navbar-expand-lg">
                    <div class="container-fluid">
                        <div class="navbar-nav" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link hide-sidebar-toggle-button" href="#"><i class="material-icons">first_page</i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="d-flex">
                            <ul class="navbar-nav">
                                <li class="nav-item hidden-on-mobile">
                                    <a class="nav-link active" href="#">  <?php if (ceksess() !== 0) { echo $_SESSION['username']; } else { echo 'Your Guest'; }?>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link toggle-search" href="#"><i class="material-icons">search</i></a>
                                </li>
                                <li class="nav-item hidden-on-mobile">
                                    <a class="nav-link nav-notifications-toggle" id="notificationsDropDown" href="#" data-bs-toggle="dropdown"><i class="material-icons">arrow_circle_down</i></a>
                                    <div class="dropdown-menu dropdown-menu-end notifications-dropdown" aria-labelledby="notificationsDropDown">

                                        <h6 class="dropdown-header">Notifications</h6>
                                        <h2 class="dropdown-header"><?php if (ceksess() !== 0) { echo 'Welcome, '.$_SESSION['username']; echo ' ('. $datauser['level'].')';}else { echo '👋 Hello Guest'; }?></h2>
                                        <div class="notifications-dropdown-list">
                                            <?php if (ceksess() !== 0) { ?>
                                            <a href="<?php echo $domain;?>/profile/<?php echo $_SESSION['username'];?>">
                                                <div class="notifications-dropdown-item">
                                                    <div class="notifications-dropdown-item-image">
                                                        <span class="notifications-badge bg-info text-white">
                                                            <i class="material-icons-outlined">people</i>
                                                        </span>
                                                    </div>
                                                    <div class="notifications-dropdown-item-text">
                                                        <p class="bold-notifications-text">Profile</p>
                                                        <small>Informasi akun</small>
                                                    </div>
                                                </div>
                                            </a><?php } ?>
                                            <?php if (ceksess() !== 0) { ?>
                                            <a href="<?php echo $domain;?>/logout">
                                                <div class="notifications-dropdown-item">
                                                    <div class="notifications-dropdown-item-image">
                                                        <span class="notifications-badge bg-danger text-white">
                                                            <i class="material-icons-outlined">unpublished</i>
                                                        </span>
                                                    </div>
                                                    <div class="notifications-dropdown-item-text">
                                                        <p class="bold-notifications-text">Keluar</p>
                                                        <small>Sampai berjumpa kembali</small>
                                                    </div>
                                                </div>
                                            </a><?php } else { ?>
                                            <a href="login">
                                                <div class="notifications-dropdown-item">
                                                    <div class="notifications-dropdown-item-image">
                                                        <span class="notifications-badge bg-danger text-white">
                                                            <i class="material-icons-outlined">login</i>
                                                        </span>
                                                    </div>
                                                    <div class="notifications-dropdown-item-text">
                                                        <p class="bold-notifications-text">Masuk</p>
                                                        <small>Masuk dan rasakan</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="daftar">
                                                <div class="notifications-dropdown-item">
                                                    <div class="notifications-dropdown-item-image">
                                                        <span class="notifications-badge bg-danger text-white">
                                                            <span class="material-icons">admin_panel_settings</span>
                                                        </span>
                                                    </div>
                                                    <div class="notifications-dropdown-item-text">
                                                        <p class="bold-notifications-text">Daftar</p>
                                                        <small>Daftar dan rasakan</small>
                                                    </div>
                                                </div>
                                            </a><?php }; ?>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="app-content">
                <div class="content-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card widget widget-info">
                                    <div class="card-body">
                                        <div class="widget-info-container">
                                            <div class="avatar avatar-xxl avatar-rounded m-r-xs">
                                                <img src="https://ridped.com/way/mypp2.png" alt="Way">
                                            </div>
                                            <h5 class="widget-info-title">
                                                <?php echo $profileUser['username']; ?>
                                                <?php if ($profileUser['verified'] == '1' || $profileUser['level'] == 'admin') { ?>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 512 512"><path d="m256 0c-141.164062 0-256 114.835938-256 256s114.835938 256 256 256 256-114.835938 256-256-114.835938-256-256-256zm0 0" fill="#2196f3"></path><path d="m385.75 201.75-138.667969 138.664062c-4.160156 4.160157-9.621093 6.253907-15.082031 6.253907s-10.921875-2.09375-15.082031-6.253907l-69.332031-69.332031c-8.34375-8.339843-8.34375-21.824219 0-30.164062 8.339843-8.34375 21.820312-8.34375 30.164062 0l54.25 54.25 123.585938-123.582031c8.339843-8.34375 21.820312-8.34375 30.164062 0 8.339844 8.339843 8.339844 21.820312 0 30.164062zm0 0" fill="#fff"></path></svg>
                                                <?php } ?>
                                            </h5>
                                        <?php if ($isOwnerUser == true) { ?>
                                        <p class="text-muted d-block"> <?php if ($datauser['status_akun'] == '0') { echo 'You need verify account first, tap link dibawah.'; } else { echo 'Your key'; } ?> </p>
                                        <div class="input-group">
                                            <input type="text" class="form-control form-control-solid-bordered" value="<?php if ($datauser['status_akun'] == '0') { echo $datauser['link_key']; } else { echo $datauser['apikey']; } ?>" aria-describedby="share-link1">
                                            <button class="btn btn-primary" type="button" id="share-link1"><i class="material-icons no-m fs-5">content_copy</i></button>
                                        </div>
                                        <label for="totalhit">Total hit</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control form-control-solid-bordered" value="<?php echo $datauser['total_hit'];?>" aria-describedby="share-link1">
                                        </div>
                                        <label for="totalhit">Limit hit</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control form-control-solid-bordered" value="<?php echo $datauser['limit_hit'];?>" aria-describedby="share-link1">
                                        </div>
                                        <label for="level">Level</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control form-control-solid-bordered" value="<?php echo $datauser['level'];?>" aria-describedby="share-link1">
                                        </div>

                                            <a href="<?php echo $domain;?>/setting_general" class="btn btn-primary widget-info-action">Edit Account</a>
                                        <?php } else { ?>
                                        <label for="totalhit">Total hit</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control form-control-solid-bordered" value="<?php echo $profileUser['total_hit'];?>" aria-describedby="share-link1">
                                        </div>
                                        <label for="level">Level</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control form-control-solid-bordered" value="<?php echo $profileUser['level'];?>" aria-describedby="share-link1">
                                        </div>
                                        <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <div class="col-xl-6">
                                <div class="card widget widget-info-inline">
                                    <div class="card-header">
                                        <h5 class="card-title">Dapatkan fitur premium<span class="badge badge-info badge-style-light">Premium</span></h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="widget-info-container">
                                            <p class="widget-info-text">Dapatkan semua fitur dengan mendaftar akun sebagai premium!</p>
                                            <a href="https://wa.me/<?php echo $datafitur['kontak'] ?>?text=Halo+admin+<?php echo $datafitur['nama_web'] ?>" class="btn btn-outline-primary widget-info-action">Upgrade Now</a>
                                            <div class="widget-info-image" style="background: url('<?php echo $domain;?>/assets/images/widgets/speed.svg')"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    
    <!-- Javascripts -->
    <script src="<?php echo $domain;?>/assets/plugins/jquery/jquery-3.5.1.min.js"></script>
    <script src="<?php echo $domain;?>/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo $domain;?>/assets/plugins/perfectscroll/perfect-scrollbar.min.js"></script>
    <script src="<?php echo $domain;?>/assets/plugins/pace/pace.min.js"></script>
    <script src="<?php echo $domain;?>/assets/plugins/apexcharts/apexcharts.min.js"></script>
    <script src="<?php echo $domain;?>/assets/js/main.min.js"></script>
    <script src="<?php echo $domain;?>/assets/js/custom.js"></script>
    <script src="<?php echo $domain;?>/assets/js/pages/dashboard.js"></script>
</body>
</html>
                            