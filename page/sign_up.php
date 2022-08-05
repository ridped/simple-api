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
    <title><?php echo $dataweb['nama_web'];?> | Kumpulan API</title>

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
</head>
<body>
    <div class="app app-auth-sign-up align-content-stretch d-flex flex-wrap justify-content-end">
        <div class="app-auth-background">

        </div>
        <div class="app-auth-container">
            <div class="logo">
                <a href="daftar">Daftar | <?php echo $dataweb['nama_web'];?></a>
            </div>
            <p class="auth-description">Harap masukkan informasi pendaftaran akun yang benar.<br>Sudah memiliki akun? <a href="login">Masuk</a></p>
            <p style="color: Tomato;"><?php echo $error;?></p>
            <form action="" method="POST">
                <div class="auth-credentials m-b-xxl">
                    <label for="signUpUsername" class="form-label">Username</label>
                    <input type="text" name="username"  class="form-control m-b-md" id="signUpUsername" aria-describedby="signUpUsername" placeholder="Enter username" required>
                    <input type="text" name="email"  class="form-control m-b-md" id="signUpUsername" aria-describedby="signUpUsername" placeholder="Enter Email" required>
                    <input type="text" name="no_wa"  class="form-control m-b-md" id="signUpUsername" aria-describedby="signUpUsername" placeholder="Enter No whatsapp" required>
                    <label for="signUpPassword" class="form-label">Password</label>
                    <input type="password" name="password"  class="form-control" id="signUpPassword" aria-describedby="signUpPassword" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;">
                    <div id="emailHelp" class="form-text">Password must be minimum 8 characters length*</div>
                </div>
                <div class="auth-submit">
                    <button type="submit" class="btn btn-primary btn-block enter-btn" name="daftar">Daftar</button>
                </div>
            </form>
            <div class="divider"></div>
            <div class="auth-alts">
                <a href="#" class="auth-alts-google"></a>
                <a href="#" class="auth-alts-facebook"></a>
                <a href="#" class="auth-alts-twitter"></a>
            </div>
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