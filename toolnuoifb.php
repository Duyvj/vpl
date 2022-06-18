<?php
error_reporting(0);
session_start();
date_default_timezone_set("Asia/Ho_Chi_Minh");
ini_set('date.timezone', 'Asia/Ho_Chi_Minh');
$now = time();
$xnhac= "\033[1;96m";
$den="\033[1;90m";
$do="\033[1;91m";
$luc="\033[1;92m";
$vang="\033[1;93m";
$xduong="\033[1;94m";
$hong="\033[1;95m";
$trang="\033[1;97m";
$green="\033[1;32m";
$lmg = $do."[".$luc."●".$do."] ".$trang."=>\033[1;32m ";
function chay() {
for($i=0; $i<=15; $i++){
echo "\033[1;31m─ ";
usleep(20000);
echo "\033[1;37m─ ";
usleep(20000);
}
echo "\n"; 
}
$arr=[];
$loai=[];
$dem1=0;
@system('clear');
echo $lmg."Nhập Số Acc Cần Nuôi: \033[1;33m";
$luong=trim(fgets(STDIN));
for($a = 1; $a <= $luong;$a++){
echo $lmg."Nhập Cookie Thứ $a:\033[1;37m ";
 $cookie=trim(fgets(STDIN));
 array_push($loai,$cookie);
 }
 $js=json_encode($loai);
$demcki=count($loai);
@system('clear');
eval(file_get_contents("logo"));
echo "\33[5;33m=============\33[5;41m\33[10;33m- Nuôi Facebook Đa Luồng -\33[0m\33[5;33m==============\n                    \n\n";
echo "\33[1;31m[\33[5;32m!\33[1;31m] \33[5;32mGroup Zalo: \33[5;37mhttps://zalo.me/g/cjfouk744\n";
echo "\33[1;31m[\33[5;32m!\33[1;31m] \33[5;33mFacebook: \33[5;37mm.me/dddvn.net\n";
echo "\33[1;31m[\33[5;32m!\33[1;31m] \33[5;35mZalo: \33[5;37m0348969200\n";
echo "\33[1;31m[\33[5;32m!\33[1;31m] \33[5;36mTool By: \33[5;37mDuy Tool\n";
echo chay();
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Nhập [".$vang."1".$luc."] Add Bạn Bè Gợi Ý\n";
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Nhập [".$vang."2".$luc."] Chấp Nhập Bạn bè\n";
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Nhập [".$vang."3".$luc."] Auto Tương Tác\n";
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Nhập Chế Độ: \033[1;36m";
$chedo=trim(fgets(STDIN));
echo chay();
if ($chedo=='1'){
@system('clear');
eval(file_get_contents("logo"));
echo chay();
echo $lmg."".$luc."Tool Auto Add Bạn Bè Gợi Ý\n";
echo $lmg."".$vang."Facebook: DDDVN.NET\n";
echo $lmg."".$hong."Link Zalo: zalo.me\n";
echo $lmg."".$xnhac."Zalo: 0348969200\n";
echo chay();
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Delay Khi Gửi: $vang";
$delayglmkb=trim(fgets(STDIN));
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Thêm Bao Nhiêu Bạn Thì Chuyển Acc: $vang";
$jobscklmkb=trim(fgets(STDIN));
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Bạn Muốn Gửi Bao Nhiêu: $vang";
$dungtool=trim(fgets(STDIN));
} else if ($chedo=='2'){
@system('clear');
eval(file_get_contents("logo"));
echo $do."\n";
echo chay();
echo $lmg."".$luc."Tool Chấp Nhận Kết Bạn\n";
echo $lmg."".$vang."Facebook: DDDVN.NET\n";
echo $lmg."".$hong."Link Zalo: zalo.me\n";
echo $lmg."".$xnhac."Zalo: 0348969200\n";
echo chay();
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Delay Nhiệm Vụ: $vang";
$delaykb=trim(fgets(STDIN));
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Chuyển Acc Sau Mấy Nhiệm Vụ: $vang";
$jobsckkb=trim(fgets(STDIN));
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Chấp Nhận Bao Nhiêu Bạn: $vang";
$dungtool=trim(fgets(STDIN));
} else if ($chedo=='3'){
@system('clear');
eval(file_get_contents("logo"));
echo chay();
echo $lmg."".$luc."Tool Auto Tương Tác\n";
echo $lmg."".$vang."Facebook: DDDVN.NET\n";
echo $lmg."".$hong."Link Zalo: zalo.me\n";
echo $lmg."".$xnhac."Zalo: 0348969200\n";
echo chay();
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Tương Tác Like ? (y/n): $vang";
$testlike=trim(fgets(STDIN));
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Tương Tác Love ? (y/n): $vang";
$testlove=trim(fgets(STDIN));
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Tương Tác Wow ? (y/n): $vang";
$testwow=trim(fgets(STDIN));
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Tương Tác Haha ? (y/n): $vang";
$testhaha=trim(fgets(STDIN));
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Tương Tác Buồn ? (y/n): $vang";
$testsad=trim(fgets(STDIN));
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Comment Tự Động ? (y/n): $vang";
$testcmt=trim(fgets(STDIN));
if ($testcmt=='y'){
echo $lmg."Nhập Nội Dung: \033[1;33m";
$nd=trim(fgets(STDIN));
	}
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Delay Tương Tác: $vang";
$delayttd=trim(fgets(STDIN));
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Sau Mấy Tương Tác Thì Chuyển Acc: $vang";
$jobsckttd=trim(fgets(STDIN));
if ($testlike=='y'){
	array_push($loai, 'LIKE');
	}
	if ($testlove=='y'){
	array_push($loai, 'LOVE');
	}
	if ($testwow=='y'){
	array_push($loai, 'WOW');
	}
	if ($testhaha=='y'){
	array_push($loai, 'HAHA');
	}
	if ($testsad=='y'){
	array_push($loai, 'SAD');
	}
}else{exit($do."Lựa Chọn Không Xác Định\n");}
while ($chedo=='1'){
$ch=curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://m.facebook.com/composer/ocelot/async_loader/?publisher=feed');
$head[] = "Connection: keep-alive";
$head[] = "Keep-Alive: 300";
$head[] = "authority: m.facebook.com";
$head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
$head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
$head[] = "cache-control: max-age=0";
$head[] = "upgrade-insecure-requests: 1";
$head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
$head[] = "sec-fetch-site: none";
$head[] = "sec-fetch-mode: navigate";
$head[] = "sec-fetch-user: ?1";
$head[] = "sec-fetch-dest: document";
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
curl_setopt($ch, CURLOPT_ENCODING, '');
curl_setopt($ch, CURLOPT_COOKIE, $cookie);
curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_TIMEOUT, 60);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
$access = curl_exec($ch);
curl_close($ch);
if (explode('\",\"useLocalFilePreview',explode('accessToken\":\"', $access)[1])[0]){
$access_token = explode('\",\"useLocalFilePreview',explode('accessToken\":\"', $access)[1])[0];
}else{exit($red."Cookie Die !!");}
if(json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'name'}){
	$tenfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'name'};	
	$idfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'};	
}else{exit($red."Cookie Die !!");}
echo chay();
echo $vang."Đang Cấu Hình ID: ".$luc.$idfb." ".$vang."Tên FB: ".$luc.$tenfb."".$res."\n";
echo chay();
$chuyenacc=0;
$url = 'https://mbasic.facebook.com/friends/center/suggestions/?mff_nav=1&ref=wizard';
$head_fb=array(
  'Host:mbasic.facebook.com',
  'user-agent:Mozilla/5.0 (Linux; Android 10; RMX1929) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.105 Mobile Safari/537.36',
  'accept:text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
  'accept-language:vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5',
  'cookie:'.$cookie,
);
$ch = curl_init();
curl_setopt_array($ch, array(
  CURLOPT_PORT => "443",
  CURLOPT_URL => "$url",
  CURLOPT_ENCODING => "",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => $head_fb));
$data = curl_exec($ch);
curl_close($ch);
//print_r($data);
if(strpos($data, 'Không có gợi ý') == true){
  echo "\nKhông có gợi ý kết bạn!\n";
}
else{
$listid = explode('/a/mobile/friends/add_friend.php?id=',$data);
array_splice($listid,0,1);
foreach ($listid as $key){
$id = explode('&amp',$key)[0];
$linkid='https://mbasic.facebook.com/profile.php?id='.$id;
$ch = @curl_init();
curl_setopt($ch, CURLOPT_URL, $linkid);
$head[] = "Connection: keep-alive";
$head[] = "Keep-Alive: 300";
$head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
$head[] = "Accept-Language: en-us,en;q=0.5";
curl_setopt($ch, CURLOPT_USERAGENT, 'Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14');
curl_setopt($ch, CURLOPT_ENCODING, '');
curl_setopt($ch, CURLOPT_COOKIE, $cookie);
curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_TIMEOUT, 60);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect
:'));
$page = curl_exec($ch);
	if (strpos($page, "xs=deleted") == true) {
        echo "$res ~".$yellow."[".$red."×".$yellow."]".$res." =>".$red." Die Cookie Chuyển Nick!!!\n";
exit();
}
preg_match('#href="/a/mobile/friends/profile_add_friend.php?(.+?)"#is', $page, $_link);
$link= html_entity_decode('https://mbasic.facebook.com/a/mobile/friends/profile_add_friend.php'.$_link[1]);
curl_setopt($ch, CURLOPT_URL, $link);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$fl=curl_exec($ch);
curl_close($ch);
$te=json_decode(file_get_contents('https://graph.facebook.com/?ids='.$id.'&fields=id,name&access_token='.$access_token), true);
	        $tenbb1=$te[$id]["name"];
$dem1++;$chuyenacc++;echo $vang."";
          $t=$vang."🌸[".$vang.$dem1.$vang."]".$do." ● ".$xnhac.date("H:i")."".$do." ●".$vang." Đã Gửi Lời Mời Kết Bạn Cho".$do." ● ".$trang.$id."".$do." ● ".$vang."".$tenbb1."\e[0m\n";
			for($i=11;$i<(strlen($t)+1);$i++){echo $t[$i];
			  usleep(3000);
			}
if ( $dem1 >= $dungtool ){echo $trang."Đã Gửi Hết Lời Mời Kết Bạn\n";
    exit;}
if ($chuyenacc==$jobscklmkb){
$chuyenacc=0;
	break;
	}
for ($time=$delayglmkb;$time>-1;$time--)
{ 
echo "\r".$res."~".$red."[".$yellow."|".$red."]$blue Vui Lòng Đợi  $time      \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."/".$red."]$blue Vui Lòng Đợi $time        \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."-".$red."]$blue Vui Lòng Đợi $time          \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."\\".$red."]".$red."$blue Vui Lòng Đợi $time          \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."|".$red."]$blue Vui Lòng Đợi $time          \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."/".$red."]$blue Vui Lòng Đợi $time          \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."-".$red."]$blue Vui Lòng Đợi $time          \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."\\".$red."]".$red."$blue Vui Lòng Đợi $time          \r";
usleep(125000);
}
echo "$res                                  \r";
}}}
while ($chedo=='2'){
$ch=curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://m.facebook.com/composer/ocelot/async_loader/?publisher=feed');
$head[] = "Connection: keep-alive";
$head[] = "Keep-Alive: 300";
$head[] = "authority: m.facebook.com";
$head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
$head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
$head[] = "cache-control: max-age=0";
$head[] = "upgrade-insecure-requests: 1";
$head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
$head[] = "sec-fetch-site: none";
$head[] = "sec-fetch-mode: navigate";
$head[] = "sec-fetch-user: ?1";
$head[] = "sec-fetch-dest: document";
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
curl_setopt($ch, CURLOPT_ENCODING, '');
curl_setopt($ch, CURLOPT_COOKIE, $cookie);
curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_TIMEOUT, 60);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
$access = curl_exec($ch);
curl_close($ch);
if (explode('\",\"useLocalFilePreview',explode('accessToken\":\"', $access)[1])[0]){
$access_token = explode('\",\"useLocalFilePreview',explode('accessToken\":\"', $access)[1])[0];
}else{exit($red."Cookie Die !!");}
if(json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'name'}){
	$tenfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'name'};	
	$idfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'};	
}else{exit($red."Cookie Die !!");}
echo chay();
echo $vang."Đang Dùng FB: ".$luc.$tenfb." ".$vang."ID: ".$luc.$idfb."".$res."\n";
echo chay();
$chuyenacc=0;
	
	$url = 'https://mbasic.facebook.com/friends/center/requests/#friends_center_main';
$head_fb=array(
  'Host:mbasic.facebook.com',
  'user-agent:Mozilla/5.0 (Linux; Android 10; RMX1929) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.105 Mobile Safari/537.36',
  'accept:text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
  'accept-language:vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5',
  'cookie:'.$cookie,
);
$ch = curl_init();
curl_setopt_array($ch, array(
  CURLOPT_PORT => "443",
  CURLOPT_URL => "$url",
  CURLOPT_ENCODING => "",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => $head_fb));
$data = curl_exec($ch);
curl_close($ch);
$listid = explode('/a/notifications.php?confirm=',$data);
	foreach ($listid as $key){
		$id = explode('&amp',$key)[0];
		if (is_numeric($id)){
		$linkid='https://mbasic.facebook.com/profile.php?id='.$id;
$ch = @curl_init();
curl_setopt($ch, CURLOPT_URL, $linkid);
$head[] = "Connection: keep-alive";
$head[] = "Keep-Alive: 300";
$head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
$head[] = "Accept-Language: en-us,en;q=0.5";
curl_setopt($ch, CURLOPT_USERAGENT, 'Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14');
curl_setopt($ch, CURLOPT_ENCODING, '');
curl_setopt($ch, CURLOPT_COOKIE, $cookie);
curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_TIMEOUT, 60);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect
:'));
$page = curl_exec($ch);
preg_match('#href="/a/mobile/friends/profile_add_friend.php?(.+?)"#is', $page, $_link);
$link= html_entity_decode('https://mbasic.facebook.com/a/mobile/friends/profile_add_friend.php'.$_link[1]);
curl_setopt($ch, CURLOPT_URL, $link);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$fl=curl_exec($ch);
curl_close($ch);
$te=json_decode(file_get_contents('https://graph.facebook.com/?ids='.$id.'&fields=id,name&access_token='.$access_token), true);
	        $tenbb0=$te[$id]["name"];
$dem1++;$chuyenacc++;echo $vang."";
          $t=$vang."🌸[".$vang.$dem1.$vang."]".$do." ● ".$xnhac.date("H:i")."".$do." ●".$vang." Đã Chấp Nhận Kết Bạn: ".$trang.$id."".$do." ● ".$trang."".$tenbb0."\e[0m\n";
			for($i=11;$i<(strlen($t)+1);$i++){echo $t[$i];
			  usleep(3000);
			}
if ( $dem1 >= $dungtool ){echo $trang."Đã Chấp Nhận Hết Bạn Bè\n";
    exit;}
if ($chuyenacc==$jobsckkb){
$chuyenacc=0;
	break;
	}
for ($time=$delaykb;$time>-1;$time--)
{ 
echo "\r".$res."~".$red."[".$yellow."|".$red."]$blue Vui Lòng Đợi  $time      \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."/".$red."]$blue Vui Lòng Đợi $time        \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."-".$red."]$blue Vui Lòng Đợi $time          \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."\\".$red."]".$red."$blue Vui Lòng Đợi $time          \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."|".$red."]$blue Vui Lòng Đợi $time          \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."/".$red."]$blue Vui Lòng Đợi $time          \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."-".$red."]$blue Vui Lòng Đợi $time          \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."\\".$red."]".$red."$blue Vui Lòng Đợi $time          \r";
usleep(125000);
}
echo "$res                                  \r";
		}
	}
}

while ($chedo=='3'){
$ch=curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://m.facebook.com/composer/ocelot/async_loader/?publisher=feed');
$head[] = "Connection: keep-alive";
$head[] = "Keep-Alive: 300";
$head[] = "authority: m.facebook.com";
$head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
$head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
$head[] = "cache-control: max-age=0";
$head[] = "upgrade-insecure-requests: 1";
$head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
$head[] = "sec-fetch-site: none";
$head[] = "sec-fetch-mode: navigate";
$head[] = "sec-fetch-user: ?1";
$head[] = "sec-fetch-dest: document";
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
curl_setopt($ch, CURLOPT_ENCODING, '');
curl_setopt($ch, CURLOPT_COOKIE, $cookie);
curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_TIMEOUT, 60);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
$access = curl_exec($ch);
curl_close($ch);
if (explode('\",\"useLocalFilePreview',explode('accessToken\":\"', $access)[1])[0]){
$access_token = explode('\",\"useLocalFilePreview',explode('accessToken\":\"', $access)[1])[0];
}else{exit($red."Cookie Die !!");}
if(json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'name'}){
	$tenfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'name'};	
	$idfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'};	
}else{exit($red."Cookie Die !!");}
echo chay();
echo $vang."Đang Cấu Hình ID: ".$luc.$idfb." ".$vang."Tên FB: ".$luc.$tenfb."".$res."\n";
echo chay();
$chuyenacc=0;
	$url="https://mbasic.facebook.com/";
	$head_fb=array(
  'Host:mbasic.facebook.com',
  'user-agent:Mozilla/5.0 (Linux; Android 10; RMX1929) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.105 Mobile Safari/537.36',
  'accept:text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
  'accept-language:vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5',
  'cookie:'.$cookie,
);
$ch = curl_init();
curl_setopt_array($ch, array(
  CURLOPT_PORT => "443",
  CURLOPT_URL => "$url",
  CURLOPT_ENCODING => "",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => $head_fb));
$data = curl_exec($ch);
curl_close($ch);
$listid = explode('/story.php?',$data);
	foreach ($listid as $key){
		$ids= explode('story_fbid=', $key);
		$id = explode('&amp',$ids[1])[0];
		
		if (is_numeric($id)){
			if (!in_array($id, $arr)){
				if ($testcmt=='y'){
 $msg = $nd;
 }
$type = $loai[rand(0, count($loai)-1)];
if ($type=='LIKE'){
			$linkid='https://mbasic.facebook.com/'.$id;
$ch = @curl_init();
curl_setopt($ch, CURLOPT_URL, $linkid);
$head[] = "Connection: keep-alive";
$head[] = "Keep-Alive: 300";
$head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
$head[] = "Accept-Language: en-us,en;q=0.5";
curl_setopt($ch, CURLOPT_USERAGENT, 'Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14');
curl_setopt($ch, CURLOPT_ENCODING, '');
curl_setopt($ch, CURLOPT_COOKIE, $cookie);
curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_TIMEOUT, 60);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect
:'));
$page = curl_exec($ch);
if (strpos($page, "xs=deleted") == true) {
        exit("$res ~".$yellow."[".$red."×".$yellow."]".$res." =>".$red." Die Cookie !!!\n");
}
$te = explode('<head><title>',$page);
$ten = explode(' | Facebook',$te[1])[0];
preg_match('#href="/a/like.php?(.+?)"#is', $page, $_link);
$link= html_entity_decode('https://mbasic.facebook.com/a/like.php'.$_link[1]);
curl_setopt($ch, CURLOPT_URL, $link);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIE, $cookie);
curl_exec($ch);
curl_close($ch);
}else{
	$ch=curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com/'.$id);
	$head[] = "Connection: keep-alive";
	$head[] = "Keep-Alive: 300";
	$head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
	$head[] = "Accept-Language: en-us,en;q=0.5";
	curl_setopt($ch, CURLOPT_USERAGENT, 'Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14');
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect
	:'));
	$page = curl_exec($ch);
	$te = explode('<head><title>',$page);
$ten = explode(' | Facebook',$te[1])[0];
	if ($id2 != $id && explode('&amp;origin_uri=',explode('amp;ft_id=',$page,2)[1],2)[0]){
		$get = explode('&amp;origin_uri=',explode('amp;ft_id=',$page,2)[1],2)[0];
	}else{
		$get = $id;
	}
	$link = 'https://mbasic.facebook.com/reactions/picker/?is_permalink=1&ft_id='.$get;
	curl_setopt($ch, CURLOPT_URL, $link);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$cx = curl_exec($ch);
	$haha = explode('<a href="',$cx);
	if ($type == 'LOVE'){
		$haha2 = explode('" style="display:block"',$haha[2])[0];
	}else if ($type == 'WOW'){
		$haha2 = explode('" style="display:block"',$haha[5])[0];
	}else if ($type == 'HAHA'){
		$haha2 = explode('" style="display:block"',$haha[4])[0];
	}else if ($type == 'SAD'){
		$haha2 = explode('" style="display:block"',$haha[6])[0];
	}else{
		$haha2 = explode('" style="display:block"',$haha[7])[0];
	}
	$link2 = html_entity_decode($haha2);

	curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com'.$link2);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_exec($ch);
	curl_close($ch);
	}
array_push($arr, $id);
if ($testcmt=='y'){
$ch=curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$id.'/comments');
	$head[] = "Connection: keep-alive";
	$head[] = "Keep-Alive: 300";
	$head[] = "authority: m.facebook.com";
	$head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
	$head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
	$head[] = "cache-control: max-age=0";
	$head[] = "upgrade-insecure-requests: 1";
	$head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
	$head[] = "sec-fetch-site: none";
	$head[] = "sec-fetch-mode: navigate";
	$head[] = "sec-fetch-user: ?1";
	$head[] = "sec-fetch-dest: document";
	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
	$data = array('message' => $msg,'access_token' => $access_token);
	curl_setopt($ch, CURLOPT_POST,count($data));
	curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
	$access = curl_exec($ch);
	curl_close($ch);
	}
$dem1++;$chuyenacc++;echo $vang."";
          $t=$vang."🌸[\033[1;36m".$dem1.$vang."]".$do." ● \033[1;30m".date("H:i")."".$do." ●\033[1;37m ".$id."".$do." ● ".$luc."Đã $xduong$type$luc Bài Viết:\n\033[1;37m [\033[1;30m$ten\033[1;37m]\e[0m\n";
			for($i=11;$i<(strlen($t)+1);$i++){echo $t[$i];
			  usleep(3000);
			}
if ($testcmt=='y'){
echo $luc."Đã Comment Nội Dung: $vang$msg\n";
}
			if ($chuyenacc==$jobsckttd){
$chuyenacc=0;
	break;
	}
for ($time=$delayttd;$time>-1;$time--)
{ 
echo "\r".$res."~".$red."[".$yellow."|".$red."]$blue Vui Lòng Đợi  $time      \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."/".$red."]$blue Vui Lòng Đợi $time        \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."-".$red."]$blue Vui Lòng Đợi $time          \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."\\".$red."]".$red."$blue Vui Lòng Đợi $time          \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."|".$red."]$blue Vui Lòng Đợi $time          \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."/".$red."]$blue Vui Lòng Đợi $time          \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."-".$red."]$blue Vui Lòng Đợi $time          \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."\\".$red."]".$red."$blue Vui Lòng Đợi $time          \r";
usleep(125000);
}
echo "$res                                  \r";
}}
	}
}