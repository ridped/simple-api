<?php
require('../config/function.php');
$ro = mysqli_query($con, "SELECT * FROM way_account");
while ($row = mysqli_fetch_assoc($ro)) {
    $apikey = $row['username'] . '-' . way_key(10);
    $username = $row['username'];
    $no_wa = $row['no_wa'];
    if ($row['username'] == 'ridah') {
        echo 'tidak akan kuhapus si ridah';
    } else {
    deactivated($row['username'], $apikey, $no_wa);
    }
}