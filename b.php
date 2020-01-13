<?php
include("./Snoopy.class.php");
date_default_timezone_set('Asia/Shanghai');
echo '<pre>';
set_time_limit(0);

$snoopy = new Snoopy();
    
// $sourceURL = "https://www.php.cn/course/type/3.html";
// $snoopy->fetchlinks($sourceURL);
    
// $a = $snoopy->results;
// array_push($a,"https://ask.fastadmin.net/");
// $a=preg_grep('/php.cn\/course/',$a);
// $jing=preg_grep('/[#]/',$a);
// if(!empty($jing)){
	// foreach($jing as $k => $v){
		// unset($a[$k]);
	// }
// }
// echo '<pre>';
// //print_r($a);


// foreach($a as $key => $value){
	// $code = get_http_code($value);
	// if($code != 200){
		// echo '<a href="{$value}" style="color:red;font-size:16px;" target="_blank">'. $value .'</a>'.PHP_EOL;
	// }else{
		// echo '<a href="{$value}" style="color:green;" target="_blank">'. $value .'</a>'.PHP_EOL;
	// }
// }


/**
 * 获取状态码（用户图片自动拒绝）
 * @param $url
 * @return mixed
 */
function get_http_code($url) {
    $ch = curl_init (); 
	curl_setopt($ch, CURLOPT_URL, $url); 
	curl_setopt($ch, CURLOPT_TIMEOUT, 200); 
	curl_setopt($ch, CURLOPT_HEADER, FALSE); 
	curl_setopt($ch, CURLOPT_NOBODY, FALSE); 
	#curl_setopt( $ch, CURLOPT_POSTFIELDS, "username=".$username."&password=".$password ); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); 
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, FALSE); 
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET'); 
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // 跳过证书检查
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); // 从证书中检查SSL加密算法是否存在
	curl_exec($ch); 
	$httpCode = curl_getinfo($ch,CURLINFO_HTTP_CODE);

    return $httpCode;
}

$url = "https://www.php.cn/course/type/https://www.php.cn/login.php";
$code = get_http_code($url);
echo $url. "　" .$code.PHP_EOL;



















