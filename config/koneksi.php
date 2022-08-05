<?php
// wewewe.ridped.kom
// koneksi.php
$host = "localhost";
$user = "ridpedco";
$pw = "";
$db = "ridpedco_api";
$con = mysqli_connect($host,$user,$pw,$db) or die('Gagal terhubung ke database');
$domain = "https://www.api.ridped.com"; // sesuaikan dengan domainmu contoh : https://contoh.com
$domain_without_p = "api.ridped.com"; // sesuaikan dengan domainmu contoh : contoh.com
$safelinku = "https://adsafelink.com/st?api=9b742daf3abde74d8a4a90fdc47f8eeb14ffd8d1"; // api safelinku
$key_waysender = "a4d78b25ef8b76ee7e7f6af443ca120f2475905a"; // key wapi
$sender = "6285872054160"; // sender wapi