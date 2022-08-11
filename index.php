<?php
require_once('config/function.php');
if (ceksess() == '0') {
    redirect('welcome');
}
$page = $_GET['page'];
if (!empty($page)) {
    if (file_exists('page/' . $page . '.php')) {
        $page_loaded = 'page/'. $page . '.php';
    } else {
        redirect('404');
    }
} else {
    $page_loaded = 'page/index.php';
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
    <meta name="author" content="M Asran | ridped">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <!-- Title -->
    <title><?php echo $dataweb['nama_web'];?></title>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
    <link href="assets/plugins/pace/pace.css" rel="stylesheet">

    
    <!-- Theme Styles -->
    <link href="assets/css/main.min.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">

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
                            <a href="<?php echo $domain;?>/api?feature=tts&apikey=YOUR-API&text=Anjay&lang=id">TTS</a>
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
                                            <a href="profile/<?php echo $_SESSION['username'];?>">
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
            <?php require($page_loaded);?>
        </div>
    </div>
    <audio src="https://ridped.com/way/begin.mp3" id="ridAudio" loop="loop"></audio>
    
<script type="text/javascript">
window.onload = function() {
  document.getElementById("ridAudio").play();
}
</script>

<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
  
<script>
    function rid_request_file() {
        return "<?php echo $domain;?>/request/req.php";
    }
</script>
<script>
setInterval(function() {
  $.get(rid_request_file(), {req: 'totalhit'}, function(data) {
      var rid = JSON.parse(data);
      let totalhit = rid.totalhit;
      $('.towtalhit').html('<span class="widget-stats-amount">'+ totalhit + '</span>');
      console.log(totalhit);
  });  
}, 1000)
</script>
    
    <!-- Javascripts -->
    <script src="assets/plugins/jquery/jquery-3.5.1.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/perfectscroll/perfect-scrollbar.min.js"></script>
    <script src="assets/plugins/pace/pace.min.js"></script>
    <script src="assets/plugins/apexcharts/apexcharts.min.js"></script>
    <script src="assets/js/main.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>
</body>
</html>
