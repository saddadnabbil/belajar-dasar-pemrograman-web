<?php

/* 
* HARAM UNTUK DIJUAL LAGI
* JUAL JUGA BOT ALARM TELEGRAM, 50K (https://web.facebook.com/dyvretz/)
*/

error_reporting(0);
date_default_timezone_set("Asia/Jakarta");
require 'function.php';
require 'userAgent.php';

if(!file_exists("apikey.txt")) {
    anjir:
    $updated = input('Apakah Sudah Menambakan Api Key, di apikey.txt? (y/N)');
    if(strtolower($updated) == 'y') {
    } else if(strtolower($updated) == 'n') {
        inputKey:
        $key = input('Apikey Kamu ');
        file_put_contents('apikey.txt', "$key");
    } else {
        echo "\nPilihan Tidak Tersedia\n\n";
        goto anjir;
    }
}
echo "\n";
$apikey = file_get_contents('apikey.txt');
$apikey = trim($apikey);
if ($apikey) {
    echo "Apikey Ditemukan : $apikey\n";
} else {
    echo "Apikey Tidak Ditemukan\n";
    echo "Silakan Input Data Apikey\n\n";
    goto inputKey;
}
echo "\n";
echo '----------- AUTO REFF ONEASET WITH SMSHUB, SMS-ACTIVE -----------'.PHP_EOL.PHP_EOL;
echo '[ '.date('H:i:s').' ] 1. SMSHUB.ORG / 2. SMS-ACTIVE.ORG / 3. MANUAL OTP'.PHP_EOL;
$webOTP = input('[ '.date('H:i:s').' ] Pilih Web');

if($webOTP == 1) {
    $url = 'smshub.org';

    $saldo = explode(':', GetBalance($url, $apikey));
$saldo = $saldo[1];
echo '[ '.date('H:i:s').' ] Saldo u sisa: '.$saldo.' RUB'.PHP_EOL;

$agent = new userAgent();

inputReff:
echo "\n";
    $LinkReff = input('[ '.date('H:i:s').' ] Link Refferal ');
    $totalReff = input('[ '.date('H:i:s').' ] Total Refferal ');

    $LinkReff = str_replace('https://forward.oneaset.co.id/management/s/', 'https://app.oneaset.co.id/s/', $LinkReff);

    $getData = get_headers($LinkReff);
    $codeReff = get_between($getData[8], 'referrerCode=', '&source');
    $codeReff1 = get_between($getData[7], 'referrerCode=', '&source');
    if (strpos($LinkReff, 'referrerCode=')) {
        $codeReff2 = get_between($LinkReff, 'referrerCode=', '&source');
    }
    echo "\n";

    if ($codeReff) {
    $headers = [
        'Host: app.oneaset.co.id',
        'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:99.0) Gecko/20100101 Firefox/99.0',
        'Accept: application/json, text/plain, */*',
        'Accept-Language: id,en-US;q=0.7,en;q=0.3',
        'Authorization: ',
        'Countryid: 1',
        'Languageid: 123',
        'Sec-Fetch-Dest: empty',
        'Sec-Fetch-Mode: cors',
        'Sec-Fetch-Site: same-origin',
        'Te: trailers',
        'Connection: close',
    ];

    $getData = curlget('https://app.oneaset.co.id/api/app/user/referrercode?code='.$codeReff.'', null, $headers);
    $nama = get_between($getData[1], '"userName":"', '",');
    $phoneNumber = get_between($getData[1], '"phoneNumber":"', '"');;
    echo '[ '.date('H:i:s').' ] Kode Reff: '.$codeReff.PHP_EOL;
    echo '[ '.date('H:i:s').' ] Nama     : '.$nama.PHP_EOL;
    echo '[ '.date('H:i:s').' ] Nomor HP : '.$phoneNumber.PHP_EOL;

    echo "\n";

    } else if ($codeReff1) {
        $headers = [
            'Host: app.oneaset.co.id',
            'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:99.0) Gecko/20100101 Firefox/99.0',
            'Accept: application/json, text/plain, */*',
            'Accept-Language: id,en-US;q=0.7,en;q=0.3',
            'Authorization: ',
            'Countryid: 1',
            'Languageid: 123',
            'Sec-Fetch-Dest: empty',
            'Sec-Fetch-Mode: cors',
            'Sec-Fetch-Site: same-origin',
            'Te: trailers',
            'Connection: close',
        ];
    
        $getData = curlget('https://app.oneaset.co.id/api/app/user/referrercode?code='.$codeReff1.'', null, $headers);
        $nama = get_between($getData[1], '"userName":"', '",');
        $phoneNumber = get_between($getData[1], '"phoneNumber":"', '"');;
        echo '[ '.date('H:i:s').' ] Kode Reff: '.$codeReff1.PHP_EOL;
        echo '[ '.date('H:i:s').' ] Nama     : '.$nama.PHP_EOL;
        echo '[ '.date('H:i:s').' ] Nomor HP : '.$phoneNumber.PHP_EOL;
    
        echo "\n";
    } else if ($codeReff2) {
        $headers = [
            'Host: app.oneaset.co.id',
            'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:99.0) Gecko/20100101 Firefox/99.0',
            'Accept: application/json, text/plain, */*',
            'Accept-Language: id,en-US;q=0.7,en;q=0.3',
            'Authorization: ',
            'Countryid: 1',
            'Languageid: 123',
            'Sec-Fetch-Dest: empty',
            'Sec-Fetch-Mode: cors',
            'Sec-Fetch-Site: same-origin',
            'Te: trailers',
            'Connection: close',
        ];
    
        $getData = curlget('https://app.oneaset.co.id/api/app/user/referrercode?code='.$codeReff2.'', null, $headers);
        $nama = get_between($getData[1], '"userName":"', '",');
        $phoneNumber = get_between($getData[1], '"phoneNumber":"', '"');;
        echo '[ '.date('H:i:s').' ] Kode Reff: '.$codeReff2.PHP_EOL;
        echo '[ '.date('H:i:s').' ] Nama     : '.$nama.PHP_EOL;
        echo '[ '.date('H:i:s').' ] Nomor HP : '.$phoneNumber.PHP_EOL;
    
        echo "\n";
    } else {
    echo "\n";
    echo '[ '.date('H:i:s').' ] Masukan Link Refferal Yang Benar'.PHP_EOL;
    echo '[ '.date('H:i:s').' ] Contoh   : https://forward.oneaset.co.id/management/s/RRjmYz?'.PHP_EOL;
    goto inputReff;
    }

    awal:
    sleep(5);
    echo "\n";
    if ($codeReff) {
    echo '[ '.date('H:i:s').' ] Kode Reff: '.$codeReff.PHP_EOL;
    } else if ($codeReff1) {
    echo '[ '.date('H:i:s').' ] Kode Reff: '.$codeReff1.PHP_EOL;
    }
    echo '[ '.date('H:i:s').' ] Sedang Menunggu Apakah Ada Reward '.PHP_EOL;
    $headers = [
        'Host: app.oneaset.co.id',
        'Cookie: sajssdk_2015_cross_new_user=1; sensorsdata2015jssdkcross=%7B%22distinct_id%22%3A%221806a062077366-095ceb240795ce8-43650800-360000-1806a0620783b3%22%2C%22first_id%22%3A%22%22%2C%22props%22%3A%7B%22%24latest_traffic_source_type%22%3A%22%E7%9B%B4%E6%8E%A5%E6%B5%81%E9%87%8F%22%2C%22%24latest_search_keyword%22%3A%22%E6%9C%AA%E5%8F%96%E5%88%B0%E5%80%BC_%E7%9B%B4%E6%8E%A5%E6%89%93%E5%BC%80%22%2C%22%24latest_referrer%22%3A%22%22%7D%2C%22identities%22%3A%22eyIkaWRlbnRpdHlfY29va2llX2lkIjoiMTgwNmEwNjIwNzczNjYtMDk1Y2ViMjQwNzk1Y2U4LTQzNjUwODAwLTM2MDAwMC0xODA2YTA2MjA3ODNiMyJ9%22%2C%22history_login_id%22%3A%7B%22name%22%3A%22%22%2C%22value%22%3A%22%22%7D%2C%22%24device_id%22%3A%221806a062077366-095ceb240795ce8-43650800-360000-1806a0620783b3%22%7D; token=eyJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2NTEwNDYxNjksInN1YiI6IntcInVpZFwiOjEwNTQ1MDR9IiwiZXhwIjoxNjUxNjUwOTY5fQ.ffwGCXg0wI06gnpj3s2U--jV5M3WcEm3pmA1LZDyL9k; languageCode=in',
        'Accept: application/json, text/plain, */*',
        'Sentry-Trace: 36bccd3fe92947b5b5f524fba71eed8e-81617634bf8e0c8e-1',
        'Authorization: eyJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2NTEwNDYxNjksInN1YiI6IntcInVpZFwiOjEwNTQ1MDR9IiwiZXhwIjoxNjUxNjUwOTY5fQ.ffwGCXg0wI06gnpj3s2U--jV5M3WcEm3pmA1LZDyL9k',
        'User-Agent: Mozilla/5.0 (Linux; Android 5.1.1; SM-G977N Build/LMY48Z; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.136 Mobile Safari/537.36',
        'Countryid: 1',
        'Referer: https://app.oneaset.co.id/finance/Finance/ArticleReadInvitation?',
        'Accept-Language: id-SG,id;q=0.9,en-US;q=0.8,en;q=0.7',
        'X-Requested-With: com.finance.oneaset',
        'Connection: close',
    ];

    $alarm = curlget('https://app.oneaset.co.id/api/app/biz/activity/finc/activityInfo', null, $headers);
    $getData = get_between($alarm[1], '"nameId":"Hadiah Referral",', '},');
    $amountTersedia = get_between($getData, '"remainNum":', ',"sendAmount":');
    echo '[ '.date('H:i:s').' ] Reward Tersedia Adalah : '.$amountTersedia.PHP_EOL;
    if ($amountTersedia < 10) {
        echo '[ '.date('H:i:s').' ] Menunggu Hingga Tersedia'.PHP_EOL;
        goto awal;
    } else {

    for ($ia=0; $ia < $totalReff; $ia++) {
        echo "--------------\e[0;32mDalam Proses\e[0m--------------".PHP_EOL;
        echo "\n";
        echo '[ '.date('H:i:s').' ] Kode Reff: '.$codeReff.PHP_EOL;
        echo "\n";

        echo "--------------\e[0;32mDalam Proses\e[0m-------------".PHP_EOL;
        echo "\n";


        $no = $ia+1;
        $deviceId = vsprintf( '%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex(random_bytes(16)), 4) );
        $getNumber = getNumber($url,$apikey);
        if(preg_match("/ACCESS_NUMBER/", $getNumber)) {
            $exGet = explode(':', $getNumber);
            $idOrder = $exGet[1];
            $nomorhp = str_replace('628', '08', $exGet[2]);
            echo '-----------------------------------------------------------------'.PHP_EOL;
            echo '[ '.date('H:i:s').' ] Mencoba mendaftar dengan Nomor '.$nomorhp;
            $getOTPRegist = curlget('https://app.oneaset.co.id/api/app/user/sms/captcha?phoneNumber='.$nomorhp.'&smsBizType=1', null, null);
            $checkOTPRegist = get_between($getOTPRegist[1], '"success":', ',');
            if($checkOTPRegist == true) {
                echo ' -> Berhasil Mengirim OTP'.PHP_EOL;
                echo '[ '.date('H:i:s').' ] OTP: ';
                CheckUlang:
                $funcOTPRegist = GetOtp($url, $apikey, $idOrder);
                if(preg_match("/STATUS_OK/", $funcOTPRegist)) {
                    $otpR = explode(':', $funcOTPRegist);
                    $otp = $otpR[1];
                    echo $otp.PHP_EOL;
                    $funcRetryOTP = RetrySMS($url, $apikey, $idOrder);
                } else {
                    goto CheckUlang;
                }
                ulangBgst:
                $headers = [
                    'Host: app.oneaset.co.id',
                    // 'Connection: keep-alive',
                    //'Content-Length: 100',
                    'Accept: application/json, text/plain, */*',
                    //'Authorization: ',
                    'languageId: 123',
                    'User-Agent: '.$agent->generate('android'),
                    'countryId: 1',
                    'Content-Type: application/x-www-form-urlencoded',
                    'Origin: https://app.oneaset.co.id',
                    'X-Requested-With: com.android.browser',
                    'Sec-Fetch-Site: same-origin',
                    'Sec-Fetch-Mode: cors',
                    'Sec-Fetch-Dest: empty',
                    // 'Referer: https://app.oneaset.co.id/finance/Finance/LandingPage?channel=web_OneAset_activity_financeinvite&referrerCode='.$codeReff.'&source=outside&ad=Ym09MiZjcD01Jmd1PW51bGwmdWM9MTAmdWU9MCZ1ZD02NzczMTgmdWE9MTQ=',
                    // 'Accept-Encoding: gzip, deflate',
                    'Accept-Language: en-US,en;q=0.9',
                    //'Cookie: sajssdk_2015_cross_new_user=1; sensorsdata2015jssdkcross=%7B%22distinct_id%22%3A%221806667dc224e2-0446cb892a59c2-71087e59-230400-1806667dc235ad%22%2C%22first_id%22%3A%22%22%2C%22props%22%3A%7B%22%24latest_traffic_source_type%22%3A%22%E7%9B%B4%E6%8E%A5%E6%B5%81%E9%87%8F%22%2C%22%24latest_search_keyword%22%3A%22%E6%9C%AA%E5%8F%96%E5%88%B0%E5%80%BC_%E7%9B%B4%E6%8E%A5%E6%89%93%E5%BC%80%22%2C%22%24latest_referrer%22%3A%22%22%7D%2C%22identities%22%3A%22eyIkaWRlbnRpdHlfY29va2llX2lkIjoiMTgwNjY2N2RjMjI0ZTItMDQ0NmNiODkyYTU5YzItNzEwODdlNTktMjMwNDAwLTE4MDY2NjdkYzIzNWFkIn0%3D%22%2C%22history_login_id%22%3A%7B%22name%22%3A%22%22%2C%22value%22%3A%22%22%7D%2C%22%24device_id%22%3A%221806667dc224e2-0446cb892a59c2-71087e59-230400-1806667dc235ad%22%7D; languageCode=in',
                ];
                $data = 'phoneNumber='.$nomorhp.'&captcha='.$otp.'&channel=web_OneAset_activity_financeinvite&referrerCode='.$codeReff.'';
                $otwRegist = curl('https://app.oneaset.co.id/api/app/user/register', $data, $headers);
                $success = get_between($otwRegist[1], '"success":', ',');
                $errMsg = get_between($otwRegist[1], '"errMsg":"', '",');
                if($errMsg == 'Aktivitas login tidak biasa di perangkat') {
                    goto ulangBgst;
                } else {
                    if($errMsg == 'Nomor telepon yang Anda masukkan sudah terdaftar.' || $success == true) {
                        echo '[ '.date('H:i:s').' ] Berhasil Mendaftar'.PHP_EOL;

                        echo "--------------\e[0;32mData\e[0m--------------".PHP_EOL;
                        echo "\n";
                        echo '[ '.date('H:i:s').' ] Silakan login Di Emulator Atau Handphone NO HP : '.$nomorhp.PHP_EOL;
                        echo '[ '.date('H:i:s').' ] Silakan login Di Emulator Atau Handphone OTP   : '.$otp.PHP_EOL;
                        echo '[ '.date('H:i:s').' ] Device ID                                      : '.$deviceId.PHP_EOL;

                        echo "--------------\e[0;32mData\e[0m--------------".PHP_EOL;
                        echo "\n";
                        
                    } else {
                        $ChangeCancel = ChangeCancel($url, $apikey, $idOrder);
                        die('[ '.date('H:i:s').' ] Gagal Mendaftar, Alasan: '.$errMsg).PHP_EOL;
                    }
                }
            } else {
                $ChangeCancel = ChangeCancel($url, $apikey, $idOrder);
                die(' -> Gagal Mengirim OTP').PHP_EOL;
            }
        } else {
            die('[ '.date('H:i:s').' ] Gagal Mendapatkan Nomor').PHP_EOL;
        }
        echo "\n";
    }
    }

} elseif($webOTP == 2) {
    $url = 'api.sms-activate.org';

    $saldo = explode(':', GetBalance($url, $apikey));
$saldo = $saldo[1];
echo '[ '.date('H:i:s').' ] Saldo u sisa: '.$saldo.' RUB'.PHP_EOL;

$agent = new userAgent();

inputReff1:
echo "\n";
    $LinkReff = input('[ '.date('H:i:s').' ] Link Refferal ');
    $totalReff = input('[ '.date('H:i:s').' ] Total Refferal ');

    $LinkReff = str_replace('https://forward.oneaset.co.id/management/s/', 'https://app.oneaset.co.id/s/', $LinkReff);

    $getData = get_headers($LinkReff);
    $codeReff = get_between($getData[8], 'referrerCode=', '&source');
    $codeReff1 = get_between($getData[7], 'referrerCode=', '&source');
    if (strpos($LinkReff, 'referrerCode=')) {
        $codeReff2 = get_between($LinkReff, 'referrerCode=', '&source');
    }
    echo "\n";

    if ($codeReff) {
    $headers = [
        'Host: app.oneaset.co.id',
        'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:99.0) Gecko/20100101 Firefox/99.0',
        'Accept: application/json, text/plain, */*',
        'Accept-Language: id,en-US;q=0.7,en;q=0.3',
        'Authorization: ',
        'Countryid: 1',
        'Languageid: 123',
        'Sec-Fetch-Dest: empty',
        'Sec-Fetch-Mode: cors',
        'Sec-Fetch-Site: same-origin',
        'Te: trailers',
        'Connection: close',
    ];

    $getData = curlget('https://app.oneaset.co.id/api/app/user/referrercode?code='.$codeReff.'', null, $headers);
    $nama = get_between($getData[1], '"userName":"', '",');
    $phoneNumber = get_between($getData[1], '"phoneNumber":"', '"');;
    echo '[ '.date('H:i:s').' ] Kode Reff: '.$codeReff.PHP_EOL;
    echo '[ '.date('H:i:s').' ] Nama     : '.$nama.PHP_EOL;
    echo '[ '.date('H:i:s').' ] Nomor HP : '.$phoneNumber.PHP_EOL;

    echo "\n";

    } else if ($codeReff1) {
        $headers = [
            'Host: app.oneaset.co.id',
            'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:99.0) Gecko/20100101 Firefox/99.0',
            'Accept: application/json, text/plain, */*',
            'Accept-Language: id,en-US;q=0.7,en;q=0.3',
            'Authorization: ',
            'Countryid: 1',
            'Languageid: 123',
            'Sec-Fetch-Dest: empty',
            'Sec-Fetch-Mode: cors',
            'Sec-Fetch-Site: same-origin',
            'Te: trailers',
            'Connection: close',
        ];
    
        $getData = curlget('https://app.oneaset.co.id/api/app/user/referrercode?code='.$codeReff1.'', null, $headers);
        $nama = get_between($getData[1], '"userName":"', '",');
        $phoneNumber = get_between($getData[1], '"phoneNumber":"', '"');;
        echo '[ '.date('H:i:s').' ] Kode Reff: '.$codeReff1.PHP_EOL;
        echo '[ '.date('H:i:s').' ] Nama     : '.$nama.PHP_EOL;
        echo '[ '.date('H:i:s').' ] Nomor HP : '.$phoneNumber.PHP_EOL;
    
        echo "\n";
    } else if ($codeReff2) {
        $headers = [
            'Host: app.oneaset.co.id',
            'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:99.0) Gecko/20100101 Firefox/99.0',
            'Accept: application/json, text/plain, */*',
            'Accept-Language: id,en-US;q=0.7,en;q=0.3',
            'Authorization: ',
            'Countryid: 1',
            'Languageid: 123',
            'Sec-Fetch-Dest: empty',
            'Sec-Fetch-Mode: cors',
            'Sec-Fetch-Site: same-origin',
            'Te: trailers',
            'Connection: close',
        ];
    
        $getData = curlget('https://app.oneaset.co.id/api/app/user/referrercode?code='.$codeReff2.'', null, $headers);
        $nama = get_between($getData[1], '"userName":"', '",');
        $phoneNumber = get_between($getData[1], '"phoneNumber":"', '"');;
        echo '[ '.date('H:i:s').' ] Kode Reff: '.$codeReff2.PHP_EOL;
        echo '[ '.date('H:i:s').' ] Nama     : '.$nama.PHP_EOL;
        echo '[ '.date('H:i:s').' ] Nomor HP : '.$phoneNumber.PHP_EOL;
    
        echo "\n";
    } else {
    echo "\n";
    echo '[ '.date('H:i:s').' ] Masukan Link Refferal Yang Benar'.PHP_EOL;
    echo '[ '.date('H:i:s').' ] Contoh   : https://forward.oneaset.co.id/management/s/RRjmYz?'.PHP_EOL;
    goto inputReff1;
    }

    awal1:
    sleep(5);
    echo "\n";
    if ($codeReff) {
    echo '[ '.date('H:i:s').' ] Kode Reff: '.$codeReff.PHP_EOL;
    } else if ($codeReff1) {
    echo '[ '.date('H:i:s').' ] Kode Reff: '.$codeReff1.PHP_EOL;
    }
    echo '[ '.date('H:i:s').' ] Sedang Menunggu Apakah Ada Reward '.PHP_EOL;
    $headers = [
        'Host: app.oneaset.co.id',
        'Cookie: sajssdk_2015_cross_new_user=1; sensorsdata2015jssdkcross=%7B%22distinct_id%22%3A%221806a062077366-095ceb240795ce8-43650800-360000-1806a0620783b3%22%2C%22first_id%22%3A%22%22%2C%22props%22%3A%7B%22%24latest_traffic_source_type%22%3A%22%E7%9B%B4%E6%8E%A5%E6%B5%81%E9%87%8F%22%2C%22%24latest_search_keyword%22%3A%22%E6%9C%AA%E5%8F%96%E5%88%B0%E5%80%BC_%E7%9B%B4%E6%8E%A5%E6%89%93%E5%BC%80%22%2C%22%24latest_referrer%22%3A%22%22%7D%2C%22identities%22%3A%22eyIkaWRlbnRpdHlfY29va2llX2lkIjoiMTgwNmEwNjIwNzczNjYtMDk1Y2ViMjQwNzk1Y2U4LTQzNjUwODAwLTM2MDAwMC0xODA2YTA2MjA3ODNiMyJ9%22%2C%22history_login_id%22%3A%7B%22name%22%3A%22%22%2C%22value%22%3A%22%22%7D%2C%22%24device_id%22%3A%221806a062077366-095ceb240795ce8-43650800-360000-1806a0620783b3%22%7D; token=eyJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2NTEwNDYxNjksInN1YiI6IntcInVpZFwiOjEwNTQ1MDR9IiwiZXhwIjoxNjUxNjUwOTY5fQ.ffwGCXg0wI06gnpj3s2U--jV5M3WcEm3pmA1LZDyL9k; languageCode=in',
        'Accept: application/json, text/plain, */*',
        'Sentry-Trace: 36bccd3fe92947b5b5f524fba71eed8e-81617634bf8e0c8e-1',
        'Authorization: eyJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2NTEwNDYxNjksInN1YiI6IntcInVpZFwiOjEwNTQ1MDR9IiwiZXhwIjoxNjUxNjUwOTY5fQ.ffwGCXg0wI06gnpj3s2U--jV5M3WcEm3pmA1LZDyL9k',
        'User-Agent: Mozilla/5.0 (Linux; Android 5.1.1; SM-G977N Build/LMY48Z; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.136 Mobile Safari/537.36',
        'Countryid: 1',
        'Referer: https://app.oneaset.co.id/finance/Finance/ArticleReadInvitation?',
        'Accept-Language: id-SG,id;q=0.9,en-US;q=0.8,en;q=0.7',
        'X-Requested-With: com.finance.oneaset',
        'Connection: close',
    ];

    $alarm = curlget('https://app.oneaset.co.id/api/app/biz/activity/finc/activityInfo', null, $headers);
    $getData = get_between($alarm[1], '"nameId":"Hadiah Referral",', '},');
    $amountTersedia = get_between($getData, '"remainNum":', ',"sendAmount":');
    echo '[ '.date('H:i:s').' ] Reward Tersedia Adalah : '.$amountTersedia.PHP_EOL;
    if ($amountTersedia < 10) {
        echo '[ '.date('H:i:s').' ] Menunggu Hingga Tersedia'.PHP_EOL;
        goto awal1;
    } else {

    for ($ia=0; $ia < $totalReff; $ia++) {
        echo "--------------\e[0;32mDalam Proses\e[0m--------------".PHP_EOL;
        echo "\n";
        echo '[ '.date('H:i:s').' ] Kode Reff: '.$codeReff.PHP_EOL;
        echo "\n";

        echo "--------------\e[0;32mDalam Proses\e[0m-------------".PHP_EOL;
        echo "\n";


        $no = $ia+1;
        $deviceId = vsprintf( '%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex(random_bytes(16)), 4) );
        $getNumber = getNumber($url,$apikey);
        if(preg_match("/ACCESS_NUMBER/", $getNumber)) {
            $exGet = explode(':', $getNumber);
            $idOrder = $exGet[1];
            $nomorhp = str_replace('628', '08', $exGet[2]);
            echo '-----------------------------------------------------------------'.PHP_EOL;
            echo '[ '.date('H:i:s').' ] Mencoba mendaftar dengan Nomor '.$nomorhp;
            $getOTPRegist = curlget('https://app.oneaset.co.id/api/app/user/sms/captcha?phoneNumber='.$nomorhp.'&smsBizType=1', null, null);
            $checkOTPRegist = get_between($getOTPRegist[1], '"success":', ',');
            if($checkOTPRegist == true) {
                echo ' -> Berhasil Mengirim OTP'.PHP_EOL;
                echo '[ '.date('H:i:s').' ] OTP: ';
                CheckUlang1:
                $funcOTPRegist = GetOtp($url, $apikey, $idOrder);
                if(preg_match("/STATUS_OK/", $funcOTPRegist)) {
                    $otpR = explode(':', $funcOTPRegist);
                    $otp = $otpR[1];
                    echo $otp.PHP_EOL;
                    $funcRetryOTP = RetrySMS($url, $apikey, $idOrder);
                } else {
                    goto CheckUlang1;
                }
                ulangBgst1:
                $headers = [
                    'Host: app.oneaset.co.id',
                    // 'Connection: keep-alive',
                    //'Content-Length: 100',
                    'Accept: application/json, text/plain, */*',
                    //'Authorization: ',
                    'languageId: 123',
                    'User-Agent: '.$agent->generate('android'),
                    'countryId: 1',
                    'Content-Type: application/x-www-form-urlencoded',
                    'Origin: https://app.oneaset.co.id',
                    'X-Requested-With: com.android.browser',
                    'Sec-Fetch-Site: same-origin',
                    'Sec-Fetch-Mode: cors',
                    'Sec-Fetch-Dest: empty',
                    // 'Referer: https://app.oneaset.co.id/finance/Finance/LandingPage?channel=web_OneAset_activity_financeinvite&referrerCode='.$codeReff.'&source=outside&ad=Ym09MiZjcD01Jmd1PW51bGwmdWM9MTAmdWU9MCZ1ZD02NzczMTgmdWE9MTQ=',
                    // 'Accept-Encoding: gzip, deflate',
                    'Accept-Language: en-US,en;q=0.9',
                    //'Cookie: sajssdk_2015_cross_new_user=1; sensorsdata2015jssdkcross=%7B%22distinct_id%22%3A%221806667dc224e2-0446cb892a59c2-71087e59-230400-1806667dc235ad%22%2C%22first_id%22%3A%22%22%2C%22props%22%3A%7B%22%24latest_traffic_source_type%22%3A%22%E7%9B%B4%E6%8E%A5%E6%B5%81%E9%87%8F%22%2C%22%24latest_search_keyword%22%3A%22%E6%9C%AA%E5%8F%96%E5%88%B0%E5%80%BC_%E7%9B%B4%E6%8E%A5%E6%89%93%E5%BC%80%22%2C%22%24latest_referrer%22%3A%22%22%7D%2C%22identities%22%3A%22eyIkaWRlbnRpdHlfY29va2llX2lkIjoiMTgwNjY2N2RjMjI0ZTItMDQ0NmNiODkyYTU5YzItNzEwODdlNTktMjMwNDAwLTE4MDY2NjdkYzIzNWFkIn0%3D%22%2C%22history_login_id%22%3A%7B%22name%22%3A%22%22%2C%22value%22%3A%22%22%7D%2C%22%24device_id%22%3A%221806667dc224e2-0446cb892a59c2-71087e59-230400-1806667dc235ad%22%7D; languageCode=in',
                ];
                $data = 'phoneNumber='.$nomorhp.'&captcha='.$otp.'&channel=web_OneAset_activity_financeinvite&referrerCode='.$codeReff.'';
                $otwRegist = curl('https://app.oneaset.co.id/api/app/user/register', $data, $headers);
                $success = get_between($otwRegist[1], '"success":', ',');
                $errMsg = get_between($otwRegist[1], '"errMsg":"', '",');
                if($errMsg == 'Aktivitas login tidak biasa di perangkat') {
                    goto ulangBgst1;
                } else {
                    if($errMsg == 'Nomor telepon yang Anda masukkan sudah terdaftar.' || $success == true) {
                        echo '[ '.date('H:i:s').' ] Berhasil Mendaftar'.PHP_EOL;

                        echo "--------------\e[0;32mData\e[0m--------------".PHP_EOL;
                        echo "\n";
                        echo '[ '.date('H:i:s').' ] Silakan login Di Emulator Atau Handphone NO HP : '.$nomorhp.PHP_EOL;
                        echo '[ '.date('H:i:s').' ] Silakan login Di Emulator Atau Handphone OTP   : '.$otp.PHP_EOL;
                        echo '[ '.date('H:i:s').' ] Device ID                                      : '.$deviceId.PHP_EOL;

                        echo "--------------\e[0;32mData\e[0m--------------".PHP_EOL;
                        echo "\n";
                        
                    } else {
                        $ChangeCancel = ChangeCancel($url, $apikey, $idOrder);
                        die('[ '.date('H:i:s').' ] Gagal Mendaftar, Alasan: '.$errMsg).PHP_EOL;
                    }
                }
            } else {
                $ChangeCancel = ChangeCancel($url, $apikey, $idOrder);
                die(' -> Gagal Mengirim OTP').PHP_EOL;
            }
        } else {
            die('[ '.date('H:i:s').' ] Gagal Mendapatkan Nomor').PHP_EOL;
        }
        echo "\n";
    }
    }
} else if ($webOTP == 3) {
    $agent = new userAgent();
    
    inputReff2:
    echo "\n";
        $LinkReff = input('[ '.date('H:i:s').' ] Link Refferal ');
        $totalReff = input('[ '.date('H:i:s').' ] Total Refferal ');
    
        $LinkReff = str_replace('https://forward.oneaset.co.id/management/s/', 'https://app.oneaset.co.id/s/', $LinkReff);
    
        $getData = get_headers($LinkReff);
        $codeReff = get_between($getData[8], 'referrerCode=', '&source');
        $codeReff1 = get_between($getData[7], 'referrerCode=', '&source');
        if (strpos($LinkReff, 'referrerCode=')) {
            $codeReff2 = get_between($LinkReff, 'referrerCode=', '&source');
        }
        echo "\n";
    
        if ($codeReff) {
        $headers = [
            'Host: app.oneaset.co.id',
            'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:99.0) Gecko/20100101 Firefox/99.0',
            'Accept: application/json, text/plain, */*',
            'Accept-Language: id,en-US;q=0.7,en;q=0.3',
            'Authorization: ',
            'Countryid: 1',
            'Languageid: 123',
            'Sec-Fetch-Dest: empty',
            'Sec-Fetch-Mode: cors',
            'Sec-Fetch-Site: same-origin',
            'Te: trailers',
            'Connection: close',
        ];
    
        $getData = curlget('https://app.oneaset.co.id/api/app/user/referrercode?code='.$codeReff.'', null, $headers);
        $nama = get_between($getData[1], '"userName":"', '",');
        $phoneNumber = get_between($getData[1], '"phoneNumber":"', '"');;
        echo '[ '.date('H:i:s').' ] Kode Reff: '.$codeReff.PHP_EOL;
        echo '[ '.date('H:i:s').' ] Nama     : '.$nama.PHP_EOL;
        echo '[ '.date('H:i:s').' ] Nomor HP : '.$phoneNumber.PHP_EOL;
    
        echo "\n";
    
        } else if ($codeReff1) {
            $headers = [
                'Host: app.oneaset.co.id',
                'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:99.0) Gecko/20100101 Firefox/99.0',
                'Accept: application/json, text/plain, */*',
                'Accept-Language: id,en-US;q=0.7,en;q=0.3',
                'Authorization: ',
                'Countryid: 1',
                'Languageid: 123',
                'Sec-Fetch-Dest: empty',
                'Sec-Fetch-Mode: cors',
                'Sec-Fetch-Site: same-origin',
                'Te: trailers',
                'Connection: close',
            ];
        
            $getData = curlget('https://app.oneaset.co.id/api/app/user/referrercode?code='.$codeReff1.'', null, $headers);
            $nama = get_between($getData[1], '"userName":"', '",');
            $phoneNumber = get_between($getData[1], '"phoneNumber":"', '"');;
            echo '[ '.date('H:i:s').' ] Kode Reff: '.$codeReff1.PHP_EOL;
            echo '[ '.date('H:i:s').' ] Nama     : '.$nama.PHP_EOL;
            echo '[ '.date('H:i:s').' ] Nomor HP : '.$phoneNumber.PHP_EOL;
        
            echo "\n";
        } else if ($codeReff2) {
            $headers = [
                'Host: app.oneaset.co.id',
                'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:99.0) Gecko/20100101 Firefox/99.0',
                'Accept: application/json, text/plain, */*',
                'Accept-Language: id,en-US;q=0.7,en;q=0.3',
                'Authorization: ',
                'Countryid: 1',
                'Languageid: 123',
                'Sec-Fetch-Dest: empty',
                'Sec-Fetch-Mode: cors',
                'Sec-Fetch-Site: same-origin',
                'Te: trailers',
                'Connection: close',
            ];
        
            $getData = curlget('https://app.oneaset.co.id/api/app/user/referrercode?code='.$codeReff2.'', null, $headers);
            $nama = get_between($getData[1], '"userName":"', '",');
            $phoneNumber = get_between($getData[1], '"phoneNumber":"', '"');;
            echo '[ '.date('H:i:s').' ] Kode Reff: '.$codeReff2.PHP_EOL;
            echo '[ '.date('H:i:s').' ] Nama     : '.$nama.PHP_EOL;
            echo '[ '.date('H:i:s').' ] Nomor HP : '.$phoneNumber.PHP_EOL;
        
            echo "\n";
        } else {
        echo "\n";
        echo '[ '.date('H:i:s').' ] Masukan Link Refferal Yang Benar'.PHP_EOL;
        echo '[ '.date('H:i:s').' ] Contoh   : https://forward.oneaset.co.id/management/s/RRjmYz?'.PHP_EOL;
        goto inputReff2;
        }
    
        awal2:
        sleep(5);
        echo "\n";
        if ($codeReff) {
        echo '[ '.date('H:i:s').' ] Kode Reff: '.$codeReff.PHP_EOL;
        } else if ($codeReff1) {
        echo '[ '.date('H:i:s').' ] Kode Reff: '.$codeReff1.PHP_EOL;
        }
        echo '[ '.date('H:i:s').' ] Sedang Menunggu Apakah Ada Reward '.PHP_EOL;
        $headers = [
            'Host: app.oneaset.co.id',
            'Cookie: sajssdk_2015_cross_new_user=1; sensorsdata2015jssdkcross=%7B%22distinct_id%22%3A%221806a062077366-095ceb240795ce8-43650800-360000-1806a0620783b3%22%2C%22first_id%22%3A%22%22%2C%22props%22%3A%7B%22%24latest_traffic_source_type%22%3A%22%E7%9B%B4%E6%8E%A5%E6%B5%81%E9%87%8F%22%2C%22%24latest_search_keyword%22%3A%22%E6%9C%AA%E5%8F%96%E5%88%B0%E5%80%BC_%E7%9B%B4%E6%8E%A5%E6%89%93%E5%BC%80%22%2C%22%24latest_referrer%22%3A%22%22%7D%2C%22identities%22%3A%22eyIkaWRlbnRpdHlfY29va2llX2lkIjoiMTgwNmEwNjIwNzczNjYtMDk1Y2ViMjQwNzk1Y2U4LTQzNjUwODAwLTM2MDAwMC0xODA2YTA2MjA3ODNiMyJ9%22%2C%22history_login_id%22%3A%7B%22name%22%3A%22%22%2C%22value%22%3A%22%22%7D%2C%22%24device_id%22%3A%221806a062077366-095ceb240795ce8-43650800-360000-1806a0620783b3%22%7D; token=eyJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2NTEwNDYxNjksInN1YiI6IntcInVpZFwiOjEwNTQ1MDR9IiwiZXhwIjoxNjUxNjUwOTY5fQ.ffwGCXg0wI06gnpj3s2U--jV5M3WcEm3pmA1LZDyL9k; languageCode=in',
            'Accept: application/json, text/plain, */*',
            'Sentry-Trace: 36bccd3fe92947b5b5f524fba71eed8e-81617634bf8e0c8e-1',
            'Authorization: eyJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2NTEwNDYxNjksInN1YiI6IntcInVpZFwiOjEwNTQ1MDR9IiwiZXhwIjoxNjUxNjUwOTY5fQ.ffwGCXg0wI06gnpj3s2U--jV5M3WcEm3pmA1LZDyL9k',
            'User-Agent: Mozilla/5.0 (Linux; Android 5.1.1; SM-G977N Build/LMY48Z; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.136 Mobile Safari/537.36',
            'Countryid: 1',
            'Referer: https://app.oneaset.co.id/finance/Finance/ArticleReadInvitation?',
            'Accept-Language: id-SG,id;q=0.9,en-US;q=0.8,en;q=0.7',
            'X-Requested-With: com.finance.oneaset',
            'Connection: close',
        ];
    
        $alarm = curlget('https://app.oneaset.co.id/api/app/biz/activity/finc/activityInfo', null, $headers);
        $getData = get_between($alarm[1], '"nameId":"Hadiah Referral",', '},');
        $amountTersedia = get_between($getData, '"remainNum":', ',"sendAmount":');
        echo '[ '.date('H:i:s').' ] Reward Tersedia Adalah : '.$amountTersedia.PHP_EOL;
        if ($amountTersedia < 10) {
            echo '[ '.date('H:i:s').' ] Menunggu Hingga Tersedia'.PHP_EOL;
            goto awal2;
        } else {
    
        for ($ia=0; $ia < $totalReff; $ia++) {
            echo "--------------\e[0;32mDalam Proses\e[0m--------------".PHP_EOL;
            echo "\n";
            echo '[ '.date('H:i:s').' ] Kode Reff: '.$codeReff.PHP_EOL;
            echo "\n";
    
            echo "--------------\e[0;32mDalam Proses\e[0m-------------".PHP_EOL;
            echo "\n";
    
    
            $no = $ia+1;
            $deviceId = vsprintf( '%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex(random_bytes(16)), 4) );
            $nomorhp = input('[ '.date('H:i:s').' ] Nomor Hp ');

                $nomorhp = str_replace('628', '08', $nomorhp);
                echo '-----------------------------------------------------------------'.PHP_EOL;
                echo '[ '.date('H:i:s').' ] Mencoba mendaftar dengan Nomor '.$nomorhp;
                $getOTPRegist = curlget('https://app.oneaset.co.id/api/app/user/sms/captcha?phoneNumber='.$nomorhp.'&smsBizType=1', null, null);
                $checkOTPRegist = get_between($getOTPRegist[1], '"success":', ',');
                if($checkOTPRegist == true) {
                    echo ' -> Berhasil Mengirim OTP'.PHP_EOL;
                    $otp = input('[ '.date('H:i:s').' ] OTP Kode ');
                    ulangBgst2:
                    $headers = [
                        'Host: app.oneaset.co.id',
                        // 'Connection: keep-alive',
                        //'Content-Length: 100',
                        'Accept: application/json, text/plain, */*',
                        //'Authorization: ',
                        'languageId: 123',
                        'User-Agent: '.$agent->generate('android'),
                        'countryId: 1',
                        'Content-Type: application/x-www-form-urlencoded',
                        'Origin: https://app.oneaset.co.id',
                        'X-Requested-With: com.android.browser',
                        'Sec-Fetch-Site: same-origin',
                        'Sec-Fetch-Mode: cors',
                        'Sec-Fetch-Dest: empty',
                        // 'Referer: https://app.oneaset.co.id/finance/Finance/LandingPage?channel=web_OneAset_activity_financeinvite&referrerCode='.$codeReff.'&source=outside&ad=Ym09MiZjcD01Jmd1PW51bGwmdWM9MTAmdWU9MCZ1ZD02NzczMTgmdWE9MTQ=',
                        // 'Accept-Encoding: gzip, deflate',
                        'Accept-Language: en-US,en;q=0.9',
                        //'Cookie: sajssdk_2015_cross_new_user=1; sensorsdata2015jssdkcross=%7B%22distinct_id%22%3A%221806667dc224e2-0446cb892a59c2-71087e59-230400-1806667dc235ad%22%2C%22first_id%22%3A%22%22%2C%22props%22%3A%7B%22%24latest_traffic_source_type%22%3A%22%E7%9B%B4%E6%8E%A5%E6%B5%81%E9%87%8F%22%2C%22%24latest_search_keyword%22%3A%22%E6%9C%AA%E5%8F%96%E5%88%B0%E5%80%BC_%E7%9B%B4%E6%8E%A5%E6%89%93%E5%BC%80%22%2C%22%24latest_referrer%22%3A%22%22%7D%2C%22identities%22%3A%22eyIkaWRlbnRpdHlfY29va2llX2lkIjoiMTgwNjY2N2RjMjI0ZTItMDQ0NmNiODkyYTU5YzItNzEwODdlNTktMjMwNDAwLTE4MDY2NjdkYzIzNWFkIn0%3D%22%2C%22history_login_id%22%3A%7B%22name%22%3A%22%22%2C%22value%22%3A%22%22%7D%2C%22%24device_id%22%3A%221806667dc224e2-0446cb892a59c2-71087e59-230400-1806667dc235ad%22%7D; languageCode=in',
                    ];
                    $data = 'phoneNumber='.$nomorhp.'&captcha='.$otp.'&channel=web_OneAset_activity_financeinvite&referrerCode='.$codeReff.'';
                    $otwRegist = curl('https://app.oneaset.co.id/api/app/user/register', $data, $headers);
                    $success = get_between($otwRegist[1], '"success":', ',');
                    $errMsg = get_between($otwRegist[1], '"errMsg":"', '",');
                    if($errMsg == 'Aktivitas login tidak biasa di perangkat') {
                        goto ulangBgst2;
                    } else {
                        if($errMsg == 'Nomor telepon yang Anda masukkan sudah terdaftar.' || $success == true) {
                            echo '[ '.date('H:i:s').' ] Berhasil Mendaftar'.PHP_EOL;
    
                            echo "--------------\e[0;32mData\e[0m--------------".PHP_EOL;
                            echo "\n";
                            echo '[ '.date('H:i:s').' ] Silakan login Di Emulator Atau Handphone NO HP : '.$nomorhp.PHP_EOL;
                            echo '[ '.date('H:i:s').' ] Silakan login Di Emulator Atau Handphone OTP   : '.$otp.PHP_EOL;
                            echo '[ '.date('H:i:s').' ] Device ID                                      : '.$deviceId.PHP_EOL;
    
                            echo "--------------\e[0;32mData\e[0m--------------".PHP_EOL;
                            echo "\n";
                            
                        } else {
                            $ChangeCancel = ChangeCancel($url, $apikey, $idOrder);
                            die('[ '.date('H:i:s').' ] Gagal Mendaftar, Alasan: '.$errMsg).PHP_EOL;
                        }
                    }
                } else {
                    $ChangeCancel = ChangeCancel($url, $apikey, $idOrder);
                    die(' -> Gagal Mengirim OTP').PHP_EOL;
                }
            echo "\n";
        }
        }
} else {
    die('[ '.date('H:i:s').' ] Web OTP gak ada gblg').PHP_EOL;
}
