<?php
require('../config/function.php');
$ro = mysqli_query($con, "SELECT * FROM way_account");
while ($row = mysqli_fetch_assoc($ro)) {
    $apikey = $row['username'] . '-' . way_key(10);
    $username = $row['username'];
    $no_wa = $row['no_wa'];
    $premium = array("ridah", "usernameAKUN"); // tambah user premium disini:v supaya tidak tereset apikey & status akun nya kalo cronjob nya aktif:v simple aja :v
    if (in_array($row['username'], $premium)) {
        echo 'Premium';
    } else {
        deactivated($row['username'], $apikey, $no_wa); // reset apikey + nonaktifkan.
    }
}
