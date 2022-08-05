<?php
require('../config/function.php');
$key = $_GET['key'];
if (!empty($key)) {
    $slek = mysqli_query($con, "SELECT * FROM way_account WHERE apikey = '$key'");
    if (mysqli_num_rows($slek) == 1) {
        $rilornot = mysqli_fetch_assoc($slek);
        if ($rilornot['status_akun'] == '0') {
            $update = activate($key);
            $apikey = $rilornot['apikey'];
            $sendnotif = sendNotif($rilornot['no_wa'], '', 'Key dan akun anda sudah aktif, selamat menikmati fitur sederhana kami:). NOTE : Key akan direset setiap harinya setiap pukul 00:00, anda di haruskan untuk mengaktifkanya kembali.', $domain, 'Try something now');
            redirect($domain);
        } else {
            redirect($domain);
        }
?>
<?php
    } else {
        $respona = array (
            "status"=> false,
            "msg"=> "Key tidak valid, silahkan membuat key terlebih dahulu"
        );
        header("Content-Type: application/json");
        echo json_encode($respona);
    }
} else {?>
<?php 
}