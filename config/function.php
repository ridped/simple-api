<?php
// wewewe.ridped.kom
// this simple code by wewewe.ridped.kom

// include file koneksi database
include_once('koneksi.php');
include('function-two.php');

// set default waktu server ke Asia/Jakarta
date_default_timezone_set('Asia/Jakarta');

// langsung ae gas mulai session nya
session_start();
error_reporting(0);
// ini data web :v
$datweb = mysqli_query($con, "SELECT * FROM way_setting");
$dataweb = mysqli_fetch_assoc($datweb);

// ini total fitur (belajar ambil data db wkwk) :v
$fitur = mysqli_query($con, "SELECT * FROM way_setting");
$datafitur = mysqli_fetch_assoc($fitur);

// ini Berita & informasi :v
$berita = mysqli_query($con, "SELECT * FROM berita ORDER BY id DESC limit 1");
$databerita = mysqli_fetch_array($berita);

// ini total_request :v
$total = mysqli_query($con, "SELECT * FROM total_request");
$datatotal = mysqli_fetch_assoc($total);

// ini total user:v
$totuser = mysqli_query($con, "SELECT * FROM way_account");
$totaluser = mysqli_num_rows($totuser);

// is not active
$totser = mysqli_query($con, "SELECT * FROM way_account WHERE status_akun = '0'");
$totnotactive = mysqli_num_rows($totser);

// ini untuk menangkap ip address user :v
if (!empty($_SERVER["HTTP_CLIENT_IP"]))
{
$ip = $_SERVER["HTTP_CLIENT_IP"];
}
elseif (!empty($_SERVER["HTTP_X_FORWARDED_FOR"]))
{
$ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
}
else
{
$ip = $_SERVER["REMOTE_ADDR"];
}

function redirect($target)
{
    echo '
    <script>
    window.location = "' . $target . '";
    </script>
    ';
    exit;
}

// send notification
function sendNotif($no, $image, $message, $link, $link_name) {
    global $key_waysender;
    global $sender;
    $data = [
    'api_key' => $key_waysender,
    'sender'  => $sender,
    'number'  => $no,
    'image' => $image,
    'content' => $message,
    'footer' => 'Powered By : www.ridped.com',
    'external_link' => $link,
    'external_link_name' => $link_name,
    'external_telp' => '',
    'external_telp_name' => '',
    'keyword_auto_reply' => '',
    'text_button' => '',
    'keyword_auto_replytwo' => '',
    'text_button_two' => ''
    ];
    
    $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://waysender-v2.ridped.com/apiv2/send-button.php",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($data))
    );

$response = curl_exec($curl);
curl_close($curl);
}

// ini generate key for use api :v
function way_key($length) {
	$str = "";
	$characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
	$max = count($characters) - 1;
	for ($i = 0; $i < $length; $i++) {
		$rand = mt_rand(0, $max);
		$str .= $characters[$rand];
	}
	return $str;
}
// ini lomgin, simple ae lah ya :v
if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = $_POST['password'];
    $p = sha1($password);
    $g = mysqli_query($con, "SELECT * FROM way_account WHERE username = '$username' AND password = '$p'");
    if (mysqli_num_rows($g) == 0) {
        $error = "Username atau password salah!";
    } else {
        $_SESSION['username'] = $username;
        header("Location: $domain");
    }
}
// ini daptar, simple ae lah ya :v
if (isset($_POST['daftar'])) {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = $_POST['password'];
    if (strlen($username) < 5 AND strlen($password) < 5) {
        $error = "Username dan password harus lebih dari 5 karakter!";
    } else {
        $email = $_POST['email'];
        $no_wa = $_POST['no_wa'];
        $level = 'member';
        $verified = '0';
        $verifikasi = '0';
        $total_hit = '0';
        $apikey = $username . '-' . way_key(7);
        $msgnotif = "Terima kasih sudah mendaftar *$username*.
Always be free!.
Langkah terakhir Silahkan verify account terlebih dahulu. tap tombol verify di bawah dan harus melewati shortlink xiixi.
Jika tidak mau seperti ini hubungi admin untuk membeli paket premium tanpa perlu verify setiap harinya:)

*Follow us* :
- Official Website : www.ridped.com
- Instagram : @ridahhh23";
        $p = sha1($password);
        $g = mysqli_query($con, "SELECT * FROM way_account WHERE username = '$username'");
        $g1 = mysqli_query($con, "SELECT * FROM way_account WHERE email = '$email'");
        $g2 = mysqli_query($con, "SELECT * FROM way_account WHERE no_wa = '$no_wa'");
        $datsers = mysqli_fetch_assoc($g);
        if (mysqli_num_rows($g) == 0 && mysqli_num_rows($g1) == 0 && mysqli_num_rows($g2) == 0) {
            $shurt = file_get_contents("http://tinyurl.com/api-create.php?url=$safelinku&url=$domain_without_p/verify/$apikey");
            $insert = mysqli_query($con, "INSERT INTO way_account VALUES (null, '$username', '$p', '$email', '$no_wa', '$level', '0', '$verifikasi', '0', '0', '$apikey', '1000', '$shurt')");
            if ($insert == true) {
                $send = sendNotif($no_wa, "http://ridah-cans.herokuapp.com/set-welcome?title=welcome&msgcenter=$username&msgfooter=Thank%20you%20for%20registering", $msgnotif, $short, 'verify');
                $_SESSION['username'] = $username;
                header("Location: $domain");
            } else {
                $error = "Data yang anda masukan tidak valid";
            }
        } else {
            $error = "Data yang anda masukan sudah terdaftar!";
        }
    }
}
// ini cek session user :v
function ceksess() {
    if (!empty($_SESSION['username'])) {
        return $_SESSION['username'];
    } else {
        return 0;
    }
}

function kurangi($key) {
    global $con;
    $kurangi = mysqli_query($con, "UPDATE way_account SET limit_hit = limit_hit - 1 WHERE apikey = '$key'");
    return 'done';
}

function addHit($key) {
    global $con;
    $add = mysqli_query($con, "UPDATE way_account SET total_hit = total_hit + 1 WHERE apikey = '$key'");
    $addDeui = mysqli_query($con, "UPDATE total_request SET total = total + 1");
    return 'done';
}

function deactivated($username, $apikey, $no_wa) {
    global $con;
    global $safelinku;
    global $domain_without_p;
    $shurt = file_get_contents("http://tinyurl.com/api-create.php?url=$safelinku&url=$domain_without_p/verify/$apikey");
    $ee = mysqli_query($con, "UPDATE way_account SET status_akun = '0', apikey = '$apikey', limit_hit = '1000', link_key = '$shurt' WHERE username = '$username'");
    $sendNotif = sendNotif($no_wa, '', 'Please activate your account again', $short, 'Verify now');
    return 'done';
}

function activate($key) {
    global $con;
    $kurangi = mysqli_query($con, "UPDATE way_account SET status_akun = '1' WHERE apikey = '$key'");
    return 'done';
}

// ini data user :v
if (!empty($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $g = mysqli_query($con, "SELECT * FROM way_account WHERE username = '$username'");
    $datauser = mysqli_fetch_assoc($g);
}

// ini updet 
if(isset($_POST['update']))
{   
    $username = $_SESSION['username'];
    $password = strlen($_POST['password']) > 2 ? sha1($_POST['password']) : $datauser['password'];
    $email = $_POST['email'] ? $_POST['email'] : $datauser['email'];
    $no_wa= $_POST['no_wa'] ? $_POST['no_wa'] : $datauser['no_wa'];

    $result = mysqli_query($con, "UPDATE way_account SET password='$password', email='$email', no_wa='$no_wa' WHERE username='$username'");
    if ($result !== true) {
        $error = "Aww, Gagal!";
    } else {
        $error = "Data berhasil di update!";
        sleep(1);
        redirect($domain."/setting_general");
    }
} 

function rid_loadPage($page_url = '') {
    global $con;
    $page         = './page/' . $page_url . '.php';
    $page_content = '';
    ob_start();
    require($page);
    $page_content = ob_get_contents();
    ob_end_clean();
    return $page_content;
}
// BELUM DAPAT IDEA BARU, jadi segini dulu :) 