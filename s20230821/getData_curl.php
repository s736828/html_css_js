<?php
function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}
// header('Access-Control-Allow-Origin: http://test.com');
// header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');

// 解法1 html→php folder2
// 解法2 php+CORS解法

// windows host
// 127.0.0.1 blue-front.com
// 192.168.211.3 red-back.com
// redred 前端
// blue 後端
// cmd ipconfig IPv4 位址 每個人都不一樣

header('Access-Control-Allow-Origin: http://blue-front.com:5502');
// header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: *");
header("Access-Control-Allow-Headers: Origin, Methods, Content-Type");

$url = 'https://odws.hccg.gov.tw/001/Upload/25/opendataback/9059/1431/452e3ebc-2ba9-4e99-a533-72d1e659b2f5.json';

//搜尋php curl 請查佛祖球球 https://blog.johnsonlu.org/php-curl/  
// 方法一 存到變數再顯示
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
// 預設是false顯示
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$result=curl_exec($ch);
echo $result;
// dd($result);

// 方法二 直接執行不顯示
// $ch = curl_init();
// curl_setopt($ch, CURLOPT_URL, $url);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// echo curl_exec($ch);


// $data = [
//     'message' => 'test_OK',
//     'test' => $url
// ];

// echo json_encode($data);
