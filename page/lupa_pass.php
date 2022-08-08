<?php
require('../config/function.php');
if (ceksess() !== 0) {
    header("Location: $domain");
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
    <title><?php echo $dataweb['nama_web'];?> | Lupa password</title>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
    <link href="../assets/plugins/pace/pace.css" rel="stylesheet">

    
    <!-- Theme Styles -->
    <link href="../assets/css/main.min.css" rel="stylesheet">
    <link href="../assets/css/custom.css" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/neptune.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/neptune.png" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="app app-auth-sign-in align-content-stretch d-flex flex-wrap justify-content-end">
        <div class="app-auth-background">

        </div>
        <div class="app-auth-container">
            <div class="logo">
                <a href="#">Lupa kata sandi | <?php echo $dataweb['nama_web'];?></a>
            </div>
            <?php if (!$_SESSION['otp']) { ?>
            <p class="auth-description">Silahkan masukan nomor whatsapp di akun <?php echo $dataweb['nama_web'];?> anda.<br>Belum mempunyai akun? <a href="login">Daftar / Login</a></p>
            <?php } else { ?>
            <p class="auth-description">Masukan kode OTP dan kata sandi baru anda!.</p>
            <?php } ?>
            <?php if ($error == true) { ?>
            <p style="color: Tomato;"><?php echo $error_msg;?></p>
            <?php } ?>
            <form action="" method="POST">
            <?php if (!$_SESSION['otp']) { ?>
            <div class="auth-credentials m-b-xxl">
                <label for="signInEmail" class="form-label">Nomor whatsapp</label>
                <input type="number" name="no_wa"  class="form-control m-b-md" placeholder="628xxx" value="<?php echo $no_wa ? $no_wa : '';?>">
            </div>

            <div class="auth-submit">
                <button type="submit" class="btn btn-primary enter-btn" name="lupa_pass">Reset</button>
            </div>
            <?php } else { ?>
            <div class="auth-credentials m-b-xxl">
                <label for="signInEmail" class="form-label">OTP</label>
                <input type="number" name="otp_receiver"  class="form-control m-b-md" placeholder="12345" value="<?php echo $otp_receiver ? $otp_receiver : '';?>">
                
                <label for="signInEmail" class="form-label">New password</label>
                <input type="password" name="new_pass"  class="form-control m-b-md" placeholder="xxxxxx" value="<?php echo $new_pass ? $new_pass : '';?>">
            </div>

            <div class="auth-submit">
                <button type="submit" class="btn btn-primary enter-btn" name="change_pass">Change & login</button>
            </div>
            <?php } ?>
        </form>
        </div>
    </div>
    
    <!-- Javascripts -->
    <script src="../assets/plugins/jquery/jquery-3.5.1.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/plugins/perfectscroll/perfect-scrollbar.min.js"></script>
    <script src="../assets/plugins/pace/pace.min.js"></script>
    <script src="../assets/js/main.min.js"></script>
    <script src="../assets/js/custom.js"></script>
</body>
</html>
