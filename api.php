<?php
require('config/function.php');
$feature = $_GET['feature'];
$apikey = $_GET['apikey'];
$cekser = mysqli_query($con, "SELECT * FROM way_account WHERE apikey = '$apikey'");
$datser = mysqli_fetch_assoc($cekser);
if (mysqli_num_rows($cekser) == '0') {
    header("Content-Type: application/json");
    $responya = array(
        "status"=> false,
        "msg"=> "Apikey invalid"
    );
    echo json_encode($responya);
} else {
    if ($datser['status_akun'] == '0') {
        $responya = array(
            "status"=> false,
            "msg"=> "Your account is not active, please activate your account first before using. check your whatsapp"
        );
        echo json_encode($responya);
    } else {
        if ($datser['limit_hit'] < 1) {
            $responya = array(
                "status"=> false,
                "msg"=> "Limit anda sudah habis, coba kembali besok. limit dan key akan direset setiap harinya"
            );
            echo json_encode($responya);
        } else {
            if (empty($feature)) {
                header("Content-Type: application/json");
                $responya = array(
                    "status"=> false,
                    "msg"=> "param feature is empty"
                );
                echo json_encode($responya);
            } else {
                if ($feature == 'fb') {
                    $url = $_GET['url'];
                    if (empty($url)) {
                        $responya = array(
                            "status"=> false,
                            "msg"=> "param url is empty"
                        );
                        echo json_encode($responya);
                    } else {
                        $cuy = file_get_contents("https://ridah-cans.herokuapp.com/fbdl?url=$url");
                        $dlmp3 = json_decode($cuy, true);
                        if ($dlmp3['status'] == 200) {
                            $kurangi = kurangi($apikey);
                            $add = addHit($apikey);
                            echo $cuy;
                        } else {
                            $responya = array(
                                "status"=> 200,
                                "msg"=> "not found"
                            );
                            echo json_encode($responya);
                        }
                    }
                } else if ($feature == 'tebakgambar') {
                    $tebakgambar = tebakgambar();
                    if ($tebakgambar == null or '') {
                        $responya = array(
                            "status"=> false,
                            "msg"=> "Ada kesalahan system"
                        );
                        echo json_encode($responya);
                    } else {
                        $kurangi = kurangi($apikey);
                        $add = addHit($apikey);
                        echo $tebakgambar;
                    }
                } else if ($feature == 'quotemaker') {
                    $txt = urlencode($_GET['text'] ? $_GET['text'] : "Before you quit, remember why you started");
                    $wm = urlencode($_GET['wm'] ? $_GET['wm'] : $datser['username']);
                    $bg = $_GET['bg'] ? $_GET['bg'] : "https://ridped.com/way/mypp2.png";
                    $quotemaker = file_get_contents("https://ridah-cans.herokuapp.com/quotemaker?text=$txt&wm=$wm&bg=$bg");
                    $datimage = imagecreatefromstring($quotemaker);
                    $kurangi = kurangi($apikey);
                    $add = addHit($apikey);
                    header("Content-type: image/png");
                    imagepng($datimage);
                    imagedestroy($datimage);
                } else if ($feature == 'ytdl') {
                    $urll = $_GET['url'];
                    $format = $_GET['format'];
                    if (empty($urll) && empty($format)) {
                        $responya = array(
                            "status"=> false,
                            "msg"=> "Param url,format is required"
                        );
                        echo json_encode($responya);
                    } else {
                        $cuy = file_get_contents("https://ridah-cans.herokuapp.com/ytdl?url=$urll&format=$format");
                        $dlmp3 = json_decode($cuy, true);
                        if ($dlmp3['status'] == 200) {
                            if ($dlmp3['dl_link'] == 'Converting') {
                                $cuy = file_get_contents("https://ridah-cans.herokuapp.com/ytdl?url=$urll&format=$format");
                            }
                            $kurangi = kurangi($apikey);
                            $add = addHit($apikey);
                            echo $cuy;
                        } else {
                            $responya = array(
                                "status"=> 200,
                                "msg"=> "not found"
                            );
                            echo json_encode($responya);
                        }
                    }
                } else if ($feature == 'play') {
                    $q = urlencode($_GET['q']);
                    $format = $_GET['format'];
                    if (empty($q) && empty($format)) {
                        $responya = array(
                            "status"=> false,
                            "msg"=> "Param q,format is required"
                        );
                        echo json_encode($responya);
                    } else {
                        $cuy = file_get_contents("https://ridah-cans.herokuapp.com/play?q=$q&format=$format");
                        $dlmp3 = json_decode($cuy, true);
                        if ($dlmp3['status'] == 200) {
                            $kurangi = kurangi($apikey);
                            $add = addHit($apikey);
                            echo $cuy;
                        } else {
                            $responya = array(
                                "status"=> 200,
                                "msg"=> "not found"
                            );
                            echo json_encode($responya);
                        }
                    }
                } else if ($feature == 'tiktok') {
                    $url = $_GET['url'];
                    if (empty($url)) {
                        $responya = array(
                            "status"=> false,
                            "msg"=> "Param url is required"
                        );
                        echo json_encode($responya);
                    } else {
                        $cuy = file_get_contents("https://ridah-cans.herokuapp.com/tikdl?url=$url");
                        $dlmp3 = json_decode($cuy, true);
                        if ($dlmp3['status'] == 200) {
                            $kurangi = kurangi($apikey);
                            $add = addHit($apikey);
                            $responya = array(
                                "status"=> 200,
                                "result"=> $dlmp3['nowm']
                            );
                            echo json_encode($responya);
                        } else {
                            $responya = array(
                                "status"=> 200,
                                "msg"=> "not found"
                            );
                            echo json_encode($responya);
                        }
                    }
                } else if ($feature == 'ig') {
                    $url = $_GET['url'];
                    if (empty($url)) {
                        $responya = array(
                            "status"=> false,
                            "msg"=> "Param url is required"
                        );
                        echo json_encode($responya);
                    } else {
                        $cuy = file_get_contents("https://ridah-cans.herokuapp.com/igdl?url=$url");
                        $dlmp3 = json_decode($cuy, true);
                        if ($dlmp3['status'] == 200) {
                            $kurangi = kurangi($apikey);
                            $add = addHit($apikey);
                            echo $cuy;
                        } else {
                            $responya = array(
                                "status"=> 200,
                                "msg"=> "not found"
                            );
                            echo json_encode($responya);
                        }
                    }
                }
                else if ($feature == 'asupan') {
                    $video = json_decode(file_get_contents("https://ridah-cans.herokuapp.com/asupan"), true);
                    $kurangi = kurangi($apikey);
                    $add = addHit($apikey);
                    header("Content-Type: video/mp4");
                    $fp = fopen($video['video'], 'rb');
                    fpassthru($fp);
                    exit;
                } else if ($feature == 'card-welcome') {
                    $title = urlencode($_GET['title']);
                    $msgcenter = urlencode($_GET['msgcenter']);
                    $msgfooter = urlencode($_GET['msgfooter']);
                    $userimage = urlencode($_GET['userimage']);
                    $background = urlencode($_GET['background']);
                    $cw = file_get_contents("http://ridah-cans.herokuapp.com/set-welcome?title=$title&msgcenter=$msgcenter&msgfooter=$msgfooter&userimage=$userimage&background=$background");
                    $kurangi = kurangi($apikey);
                    $add = addHit($apikey);
                    $datimage = imagecreatefromstring($cw);
                    header("Content-type: image/png");
                    imagepng($datimage);
                    imagedestroy($datimage);
                } else if ($feature == 'glitch-tiktok') {
                    $txtS = urlencode($_GET['text1']);
                    $txtT = urlencode($_GET['text2']);
                    $wm = urlencode($_GET['wm']);
                    $cw = file_get_contents("http://ridah-cans.herokuapp.com/glitch-tiktok?text1=$txtS&text2=$txtT&wm=$wm");
                    $kurangi = kurangi($apikey);
                    $add = addHit($apikey);
                    $datimage = imagecreatefromstring($cw);
                    header("Content-type: image/png");
                    imagepng($datimage);
                    imagedestroy($datimage);
                } else if ($feature == 'porn-hub') {
                    $txtS = urlencode($_GET['text1']);
                    $txtT = urlencode($_GET['text2']);
                    $wm = urlencode($_GET['wm']);
                    $cw = file_get_contents("http://ridah-cans.herokuapp.com/porn-hub?text1=$txtS&text2=$txtT&wm=$wm");
                    $kurangi = kurangi($apikey);
                    $add = addHit($apikey);
                    $datimage = imagecreatefromstring($cw);
                    header("Content-type: image/png");
                    imagepng($datimage);
                    imagedestroy($datimage);
                } else if ($feature == 'blackpink') {
                    $txtS = urlencode($_GET['text1']);
                    $wm = urlencode($_GET['wm']);
                    $cw = file_get_contents("http://ridah-cans.herokuapp.com/blackpink?text1=$txtS&wm=$wm");
                    $kurangi = kurangi($apikey);
                    $add = addHit($apikey);
                    $datimage = imagecreatefromstring($cw);
                    header("Content-type: image/png");
                    imagepng($datimage);
                    imagedestroy($datimage);
                } else if ($feature == 'glitch-generator') {
                    $txtS = urlencode($_GET['text1']);
                    $wm = urlencode($_GET['wm']);
                    $cw = file_get_contents("http://ridah-cans.herokuapp.com/glitch-generator?text1=$txtS&wm=$wm");
                    $kurangi = kurangi($apikey);
                    $add = addHit($apikey);
                    $datimage = imagecreatefromstring($cw);
                    header("Content-type: image/png");
                    imagepng($datimage);
                    imagedestroy($datimage);
                } else if ($feature == 'love-neon') {
                    $txtS = urlencode($_GET['text1']);
                    $wm = urlencode($_GET['wm']);
                    $cw = file_get_contents("http://ridah-cans.herokuapp.com/love-neon?text1=$txtS&wm=$wm");
                    $kurangi = kurangi($apikey);
                    $add = addHit($apikey);
                    $datimage = imagecreatefromstring($cw);
                    header("Content-type: image/png");
                    imagepng($datimage);
                } else if ($feature == 'rec-glitch') {
                    $txtS = urlencode($_GET['text1']);
                    $wm = urlencode($_GET['wm']);
                    $cw = file_get_contents("http://ridah-cans.herokuapp.com/rec-glitch?text1=$txtS&wm=$wm");
                    $kurangi = kurangi($apikey);
                    $add = addHit($apikey);
                    $datimage = imagecreatefromstring($cw);
                    header("Content-type: image/png");
                    imagepng($datimage);
                } else if ($feature == 'neon-devil') {
                    $txtS = urlencode($_GET['text1']);
                    $wm = urlencode($_GET['wm']);
                    $cw = file_get_contents("http://ridah-cans.herokuapp.com/neon-devil?text1=$txtS&wm=$wm");
                    $kurangi = kurangi($apikey);
                    $add = addHit($apikey);
                    $datimage = imagecreatefromstring($cw);
                    header("Content-type: image/png");
                    imagepng($datimage);
                } else if ($feature == 'graffiti-1') {
                    $txtS = urlencode($_GET['text1']);
                    $txtT = urlencode($_GET['text2']);
                    $wm = urlencode($_GET['wm']);
                    $cw = file_get_contents("http://ridah-cans.herokuapp.com/graffiti-1?text1=$txtS&text2=$txT&wm=$wm");
                    $kurangi = kurangi($apikey);
                    $add = addHit($apikey);
                    $datimage = imagecreatefromstring($cw);
                    header("Content-type: image/png");
                    imagepng($datimage);
                } else if ($feature == 'graffiti-2') {
                    $txtS = urlencode($_GET['text1']);
                    $txtT = urlencode($_GET['text2']);
                    $wm = urlencode($_GET['wm']);
                    $cw = file_get_contents("http://ridah-cans.herokuapp.com/graffiti-2?text1=$txtS&text2=$txT&wm=$wm");
                    $kurangi = kurangi($apikey);
                    $add = addHit($apikey);
                    $datimage = imagecreatefromstring($cw);
                    header("Content-type: image/png");
                    imagepng($datimage);
                } else if ($feature == 'horror-blood') {
                    $txtS = urlencode($_GET['text1']);
                    $wm = urlencode($_GET['wm']);
                    $cw = file_get_contents("http://ridah-cans.herokuapp.com/horror-blood?text1=$txtS&wm=$wm");
                    $kurangi = kurangi($apikey);
                    $add = addHit($apikey);
                    $datimage = imagecreatefromstring($cw);
                    header("Content-type: image/png");
                    imagepng($datimage);
                } else if ($feature == 'dropwater') {
                    $txtS = urlencode($_GET['text1']);
                    $wm = urlencode($_GET['wm']);
                    $cw = file_get_contents("http://ridah-cans.herokuapp.com/dropwater?text1=$txtS&wm=$wm");
                    $kurangi = kurangi($apikey);
                    $add = addHit($apikey);
                    $datimage = imagecreatefromstring($cw);
                    header("Content-type: image/png");
                    imagepng($datimage);
                } else if ($feature == 'sfile') {
                    $url = $_GET['url'];
                    $sfile = sfile($url);
                    if ($sfile !== null or '') {
                        $kurangi = kurangi($apikey);
                        $add = addHit($apikey);
                        echo $sfile;
                    } else {
                        $responya = array(
                            "status"=> false,
                            "msg"=> "Nothing"
                        );
                        echo json_encode($responya);
                    }
                } else if ($feature == 'artinama') {
                    $name = $_GET['name'];
                    if (empty($name)) {
                        $responya = array(
                            "status"=> false,
                            "msg"=> "param name required"
                        );
                        echo json_encode($responya);
                    } else {
                        $arti = artinama($name);
                        if ($arti !== null or '') {
                            $kurangi = kurangi($apikey);
                            $add = addHit($apikey);
                            echo $arti;
                        } else {
                            $responya = array(
                                "status"=> false,
                                "msg"=> "Nothing"
                            );
                            echo json_encode($responya);
                        }
                    }
                } else if ($feature == 'artimimpi') {
                    $mimpi = $_GET['mimpi'];
                    if (empty($mimpi)) {
                        $responya = array(
                            "status"=> false,
                            "msg"=> "param mimpi required"
                        );
                        echo json_encode($responya);
                    } else {
                        $arti = artimimpi($mimpi);
                        if ($arti !== null or '') {
                            $kurangi = kurangi($apikey);
                            $add = addHit($apikey);
                            echo $arti;
                        } else {
                            $responya = array(
                                "status"=> false,
                                "msg"=> "Nothing"
                            );
                            echo json_encode($responya);
                        }
                    }
                } else if ($feature == 'scr') {
                    $url = $_GET['url'];
                    $g = testscp($url);
                    if ($g == '' or null) {
                        echo 'Tidak dapat mengambil data website';
                    } else {
                        echo $g;
                    }
                } else if ($feature == 'quran') {
                    $surah = $_GET['surah'] ? $_GET['surah'] : rand(1, 114);
                    $ayat = $_GET['ayat'] ? $_GET['ayat'] : rand(1, 3);
                    $g = json_decode(file_get_contents("https://islamic-api-indonesia.herokuapp.com/api/data/quran?surah=$surah&ayat=$ayat"), true);
                    if ($g['result']['code'] == 200) {
                        $responya = array(
                            "status"=> 200,
                            "arab"=> $g['result']['data']['text']['arab'],
                            "id"=> $g['result']['data']['translation']['id'],
                            "en"=> $g['result']['data']['translation']['en'],
                            "surah_name"=> $g['result']['data']['surah']['name']['transliteration']['id'],
                            "audio"=> $g['result']['data']['audio']['primary'],
                            "tafsir"=> $g['result']['data']['tafsir']['id'],
                        );
                        echo json_encode($responya);
                    } else {
                        $responya = array(
                            "status"=> 404,
                            "msg"=> $g
                        );
                        echo json_encode($responya);
                    }
                } else if ($feature == 'tts') {
                    $text = urlencode($_GET['text'] ? $_GET['text'] : 'Kosong bang kosong');
                    $lang = $_GET['lang'] ? $_GET['lang'] : 'id';
                    $key = "selebew";
                    $g = json_decode(file_get_contents("$api_nembak/tts?text=$text&lang=$lang&key=$key"), true);
                    if ($g['status'] == true) {
                        kurangi($apikey);
                        addHit($apikey);
                        echo json_encode($g);
                    } else {
                        $responya = array(
                            "status"=> 404,
                            "msg"=> "Ada kesalahan"
                        );
                        echo json_encode($responya);
                    }
                }
                else {
                    $responya = array(
                        "status"=> false,
                        "msg"=> "Sorry $feature is not found"
                    );
                    echo json_encode($responya);
                }
            }
        }
    }
}
