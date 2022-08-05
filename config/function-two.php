<?php
// test downloader aja dulu :v
function fb($txt)
{
    $url = 'https://socialdownloader.in/social-downloader';
    $data = [
        "url" => $txt
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/x-www-form-urlencoded']);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.2 (KHTML, like Gecko) Chrome/22.0.1216.0 Safari/537.2');
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_URL, $url);
    //curl_setopt($ch, CURLOPT_TIMEOUT_MS, 3000);
    $result = curl_exec($ch);
    //sleep(3);
    $asu = new DOMDocument();
    $asu->loadHTML($result);
    $gas = new DOMXPath($asu);
    $slekpict = $gas->query('/html/body/div[1]/div/div[2]/div/ul/li[2]/a');
    if ($slekpict->length > 0) {
        $linknya = $slekpict->item(0)->getAttribute('href');
        $thumb = $gas->query('/html/body/div[1]/div/div[1]/img');
        $thumbb = $thumb->item(0)->getAttribute('src');
        $responya = array(
            "status"=> true,
            "link"=> $linknya,
            "thumbnail"=> $thumbb 
        );
        curl_close($ch);
        return json_encode($responya);
    } else {
        curl_close($ch);
        return null;
    }
    //return $result;
}

function tebakgambar()
{
    $url = "https://jawabantebakgambar.net/level-".rand(1, 135)."/";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/x-www-form-urlencoded']);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.2 (KHTML, like Gecko) Chrome/22.0.1216.0 Safari/537.2');
    //curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_URL, $url);
    //curl_setopt($ch, CURLOPT_TIMEOUT_MS, 3000);
    $result = curl_exec($ch);
    //sleep(3);
    $asu = new DOMDocument();
    $asu->loadHTML($result);
    $gas = new DOMXPath($asu);
    $slekpict = $gas->query('/html/body/div[1]/div[2]/ul/li[1]/a/img');
    if ($slekpict->length > 0) {
        
        $imgnya = $slekpict->item(0)->getAttribute('data-src');
        $jawabanya = $gas->query('/html/body/div[1]/div[2]/ul/li[1]/a/span');
        $jawaban = $jawabanya->item(0)->nodeValue;
        $responya = array(
            "status"=> true,
            "img"=> "https://jawabantebakgambar.net".$imgnya,
            "jawaban"=> $jawaban,
            "creator"=> "Ridah",
            "fetchfrom"=> "https://jawabantebakgambar.net"
        );
        curl_close($ch);
        return json_encode($responya);
    } else {
        curl_close($ch);
        return null;
    }
    //return $result;
}

function data_yt($urls)
{
    $url = 'https://yt1s.one/wp-admin/admin-ajax.php';
    $data = [
        "action" => "fetch_home",
        "url"=> $urls
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/x-www-form-urlencoded']);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.2 (KHTML, like Gecko) Chrome/22.0.1216.0 Safari/537.2');
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_URL, $url);
    //curl_setopt($ch, CURLOPT_TIMEOUT_MS, 3000);
    $result = curl_exec($ch);
    //sleep(3);
    curl_close($ch);
    return $result;
}

function play($q) {
    $url = "https://ridah-cans.herokuapp.com/play?q=$q";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/x-www-form-urlencoded']);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.2 (KHTML, like Gecko) Chrome/22.0.1216.0 Safari/537.2');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL, $url);
    //curl_setopt($ch, CURLOPT_TIMEOUT_MS, 3000);
    $result = curl_exec($ch);
    //sleep(3);
    curl_close($ch);
    return $result;
}

function downloadyt($type, $id)
{
    if ($type == 'mp3') {
        $type = 'mp3';
        $typetwo = 'mp3';
    } else if ($type == 'mp4') {
        $type = 'videos';
        $typetwo = 'mp4';
    }
    $url = "https://ytmp4.buzz/api/widget/$type/$id";
    $cookie = 'cookie.txt';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/x-www-form-urlencoded']);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.2 (KHTML, like Gecko) Chrome/22.0.1216.0 Safari/537.2');
    //curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_TIMEOUT_MS, 3000);
    $result = curl_exec($ch);
    //sleep(3);
    $asu = new DOMDocument();
    $asu->loadHTML($result);
    $gas = new DOMXPath($asu);
    $sleklink = $gas->query('/html/body/div/div/div/div/a[1]');
    if ($sleklink->length > 0) {
        $path = 'temp/'. $id . '.'.$typetwo;
        $slekimg = $gas->query('/html/body/div/div/img');
        $thumb = $slekimg->item(0)->getAttribute('src');
        $slektitle = $gas->query('/html/body/div/div/img');
        $link = $sleklink->item(0)->getAttribute('href');
        file_put_contents($path, file_get_contents($link));
        $responya = array(
            "thumb"=> $thumb
        );
        curl_close($ch);
        return json_encode($responya);
    } else {
        curl_close($ch);
        return null;
    }
    //return $result;
}

function sfile($url)
{
    $url = $url;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/x-www-form-urlencoded']);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.2 (KHTML, like Gecko) Chrome/22.0.1216.0 Safari/537.2');
    //curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_URL, $url);
    //curl_setopt($ch, CURLOPT_TIMEOUT_MS, 3000);
    $result = curl_exec($ch);
    //sleep(3);
    $asu = new DOMDocument();
    $asu->loadHTML($result);
    $gas = new DOMXPath($asu);
    $slekdownload = $gas->query('/html/body/div[2]/div/div[7]/center[2]/a');
    if ($slekdownload->length > 0) {
        $link = $slekdownload->item(0)->getAttribute('href');
        $slekuser = $gas->query('/html/body/div[2]/div/div[3]/a[1]');
        $user = $slekuser->item(0)->nodeValue;
        $slekdesc = $gas->query('/html/body/div[2]/div/div[6]/center/h1');
        $desc = $slekdesc->item(0)->nodeValue;
        $slekup = $gas->query('/html/body/div[2]/div/div[4]');
        $uploaded = $slekup->item(0)->nodeValue;
        $slekcountdl = $gas->query('/html/body/div[2]/div/div[5]');
        $totaldl = $slekcountdl->item(0)->nodeValue;
        $responya = array(
            "status"=> true,
            "link"=> $link."&k=1",
            "user"=> $user,
            "desc"=> $desc,
            "uploaded"=> str_replace("\n - Uploaded: ", "", $uploaded),
            "total_download"=> str_replace("\n - Downloads: ", "", $totaldl)
        );
        curl_close($ch);
        return json_encode($responya);
    } else {
        curl_close($ch);
        return null;
    }
    //return $result;
}

function artinama($nama)
{
    $url = "https://www.primbon.com/arti_nama.php?nama1=$nama&proses=+Submit%21+";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/x-www-form-urlencoded']);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.2 (KHTML, like Gecko) Chrome/22.0.1216.0 Safari/537.2');
    //curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_URL, $url);
    //curl_setopt($ch, CURLOPT_TIMEOUT_MS, 3000);
    $result = curl_exec($ch);
    //sleep(3);
    $asu = new DOMDocument();
    $asu->loadHTML($result);
    $gas = new DOMXPath($asu);
    $slekpict = $gas->query('/html/body/div[2]/div[2]/text()[5]');
    if ($slekpict->length > 0) {
        $jawaban = $slekpict->item(0)->nodeValue;
        $jawaban = str_replace('\n', '', $jawaban);
        $slekarti = $gas->query('/html/body/div[2]/div[2]/text()[4]');
        $arti = $slekarti->item(0)->nodeValue;
        $responya = array(
            "status"=> true,
            "name"=> $nama,
            "arti"=> str_replace(', ', '', $arti),
            "desc"=> $jawaban,
        );
        curl_close($ch);
        return json_encode($responya);
    } else {
        curl_close($ch);
        return null;
    }
    //return $result;
}

function artimimpi($mimpi)
{
    $url = "https://www.primbon.com/tafsir_mimpi.php?mimpi=$mimpi&submit=+Submit+";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/x-www-form-urlencoded']);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.2 (KHTML, like Gecko) Chrome/22.0.1216.0 Safari/537.2');
    //curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_URL, $url);
    //curl_setopt($ch, CURLOPT_TIMEOUT_MS, 3000);
    $result = curl_exec($ch);
    //sleep(3);
    $asu = new DOMDocument();
    $asu->loadHTML($result);
    $gas = new DOMXPath($asu);
    $slekpict = $gas->query('/html/body/div[2]/div[2]/text()[8]');
    if ($slekpict->length > 0) {
        $jawaban = $slekpict->item(0)->nodeValue;
        $responya = array(
            "status"=> true,
            "result"=> str_replace(" = ", "", $jawaban),
        );
        curl_close($ch);
        return json_encode($responya);
    } else {
        curl_close($ch);
        return null;
    }
    //return $result;
}

function testscp($url)
{
    $url = $url;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/x-www-form-urlencoded']);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.2 (KHTML, like Gecko) Chrome/22.0.1216.0 Safari/537.2');
    //curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_URL, $url);
    //curl_setopt($ch, CURLOPT_TIMEOUT_MS, 3000);
    $result = curl_exec($ch);
    //sleep(3);
    $asu = new DOMDocument();
    $asu->loadHTML($result);
    $gas = new DOMXPath($asu);
    $slekpict = $gas->query('/html/body/div[2]/div/div/div/div[2]/div[1]/form/p[1]');
    if ($slekpict->length > 0) {
        $jawaban = $sleckpict->item(0)->nodeValue;
        curl_close($ch);
        return $jawaban;
    } else {
        curl_close($ch);
        return null;
    }
    //return $result;
}
