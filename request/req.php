<?php
require('../config/function.php');

$req = $_GET['req'];
if ($req == 'totalhit') {
    $dat = mysqli_query($con, "SELECT * FROM total_request");
    $datt = mysqli_fetch_assoc($dat); // gubklokkkkk
    $responya = array(
        "status"=> 200,
        "totalhit"=> $datt['total']
    );
    echo json_encode($responya);
} else if ($req == 'ngecheat') {
    $up = mysqli_query($con, "UPDATE total_request SET total = total + 1");
} else if ($req == 'hol') {
    // 
} else {
    $responya = array(
        "status"=> false,
        "msg"=> "$req not found"
    );
    echo json_encode($responya);
}