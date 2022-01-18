<?php
//このファイルを「API_Function」として保存
//呼び出すときには、以下のコードを上部に乗せて呼び出し
//require(このファイルのパス);
function GET_Category(){
	$base_url = "https://apinanichan.herokuapp.com/v1/Category/";

	// cURLセッションを初期化
	$curl = curl_init();

	//ヘッダーにx-ww-form-urlencodedを指定
	$header = array("Content-Type: application/x-www-form-urlencoded");

	//オプション
	$options = array(
		//ヘッダー
		CURLOPT_HTTPHEADER => $header,
		// URL
		CURLOPT_URL => $base_url,
		// Method
		CURLOPT_CUSTOMREQUEST => 'GET',
		//SSL
		CURLOPT_SSL_VERIFYPEER => false, // 証明書の検証を行わない
		// 変数に保存。これがないと即時出力
		CURLOPT_RETURNTRANSFER => true,
	);
	curl_setopt_array($curl, $options);
	$response = curl_exec($curl);
	$result = json_decode(json_decode($response, true));
	//var_dump($response);
	//var_dump($result);
	return $result;
}

function GET_ThreadInfo_Id(int $id){
	$base_url = "https://apinanichan.herokuapp.com/v1/ThreadInfo/Id/".$id;

	// cURLセッションを初期化
	$curl = curl_init();

	//ヘッダーにx-ww-form-urlencodedを指定
	$header = array("Content-Type: application/x-www-form-urlencoded");

	//オプション
	$options = array(
		//ヘッダー
		CURLOPT_HTTPHEADER => $header,
		// URL
		CURLOPT_URL => $base_url,
		// Method
		CURLOPT_CUSTOMREQUEST => 'GET',
		//SSL
		CURLOPT_SSL_VERIFYPEER => false, // 証明書の検証を行わない
		// 変数に保存。これがないと即時出力
		CURLOPT_RETURNTRANSFER => true,
	);
	curl_setopt_array($curl, $options);
	$response = curl_exec($curl);
	$result = json_decode(json_decode($response, true));
	//var_dump($response);
	//var_dump($result);
	return $result;
}

function GET_ThreadInfo_Name(string $name){
	$base_url = "https://apinanichan.herokuapp.com/v1/ThreadInfo/Name/".$name;

	// cURLセッションを初期化
	$curl = curl_init();

	//ヘッダーにx-ww-form-urlencodedを指定
	$header = array("Content-Type: application/x-www-form-urlencoded");

	//オプション
	$options = array(
		//ヘッダー
		CURLOPT_HTTPHEADER => $header,
		// URL
		CURLOPT_URL => $base_url,
		// Method
		CURLOPT_CUSTOMREQUEST => 'GET',
		//SSL
		CURLOPT_SSL_VERIFYPEER => false,// 証明書の検証を行わない
		// 変数に保存。これがないと即時出力
		CURLOPT_RETURNTRANSFER => true,
	);
	curl_setopt_array($curl, $options);
	$response = curl_exec($curl);
	$result = json_decode(json_decode($response, true));
	//var_dump($response);
	//var_dump($result);
	return $result;
}

function GET_ThreadInfo_Category(int $id){
	$base_url = "https://apinanichan.herokuapp.com/v1/ThreadInfo/Category/" . $id;

	// cURLセッションを初期化
	$curl = curl_init();

	//ヘッダーにx-ww-form-urlencodedを指定
	$header = array("Content-Type: application/x-www-form-urlencoded");

	//オプション
	$options = array(
		//ヘッダー
		CURLOPT_HTTPHEADER => $header,
		// URL
		CURLOPT_URL => $base_url,
		// Method
		CURLOPT_CUSTOMREQUEST => 'GET',
		//SSL
		CURLOPT_SSL_VERIFYPEER => false, // 証明書の検証を行わない
		// 変数に保存。これがないと即時出力
		CURLOPT_RETURNTRANSFER => true,
	);
	curl_setopt_array($curl, $options);
	$response = curl_exec($curl);
	$result = json_decode(json_decode($response, true));
	//var_dump($response);
	//var_dump($result);
	return $result;
}

function GET_Thread(int $id){
	$base_url = "https://apinanichan.herokuapp.com/v1/Thread/".$id;

	// cURLセッションを初期化
	$curl = curl_init();

	//ヘッダーにx-ww-form-urlencodedを指定
	$header = array("Content-Type: application/x-www-form-urlencoded");

	//オプション
	$options = array(
		//ヘッダー
		CURLOPT_HTTPHEADER => $header,
		// URL
		CURLOPT_URL => $base_url,
		// Method
		CURLOPT_CUSTOMREQUEST => 'GET',
		//SSL
		CURLOPT_SSL_VERIFYPEER => false, // 証明書の検証を行わない
		// 変数に保存。これがないと即時出力
		CURLOPT_RETURNTRANSFER => true,
	);
	curl_setopt_array($curl, $options);
	$response = curl_exec($curl);
	$result = json_decode(json_decode($response, true));
	//var_dump($response);
	//var_dump($result);
	return $result;
}


function POST_Category(string $category_name){
	$base_url = "https://apinanichan.herokuapp.com/v1/Category/";

	// cURLセッションを初期化
	$curl = curl_init();
	//bodyに送付する変数(API仕様書を参照)
	$params = [
		"category_name" => $category_name,  //任意で
	];
	//ヘッダーにx-ww-form-urlencodedを指定
	$header = array("Content-Type: application/x-www-form-urlencoded");

	//オプション
	$options = array(
		//ヘッダー
		CURLOPT_HTTPHEADER => $header,
		// URL
		CURLOPT_URL => $base_url,
		// Method
		CURLOPT_CUSTOMREQUEST => 'POST',
		//SSL
		CURLOPT_SSL_VERIFYPEER => false, // 証明書の検証を行わない
		//body
		CURLOPT_POSTFIELDS => http_build_query($params),
		// 変数に保存。これがないと即時出力
		CURLOPT_RETURNTRANSFER => true,
	);
	curl_setopt_array($curl, $options);
	$response = curl_exec($curl);
	$result = json_decode(json_decode($response, true));
	//var_dump($response);
	//var_dump($result);
	return $result;
}

function POST_Thread(int $category_id,string $thread_name,string $API_Token){
	$base_url = "https://apinanichan.herokuapp.com/v1/Thread/";

	// cURLセッションを初期化
	$curl = curl_init();
	//bodyに送付する変数(API仕様書を参照)
	$params = [
		"category_id" => $category_id,  //任意で
		"thread_name" => $thread_name,  //任意で
		"API_Token" => $API_Token,  //任意で
	];
	//ヘッダーにx-ww-form-urlencodedを指定
	$header = array("Content-Type: application/x-www-form-urlencoded");

	//オプション
	$options = array(
		//ヘッダー
		CURLOPT_HTTPHEADER => $header,
		// URL
		CURLOPT_URL => $base_url,
		// Method
		CURLOPT_CUSTOMREQUEST => 'POST',
		//SSL
		CURLOPT_SSL_VERIFYPEER => false, // 証明書の検証を行わない
		//body
		CURLOPT_POSTFIELDS => http_build_query($params),
		// 変数に保存。これがないと即時出力
		CURLOPT_RETURNTRANSFER => true,
	);
	curl_setopt_array($curl, $options);
	$response = curl_exec($curl);
	$result = json_decode(json_decode($response, true));
	//var_dump($response);
	//var_dump($result);
	return $result;
}

function POST_Comment(int $thread_id,string $comment,string $API_Token){
	$base_url = "https://apinanichan.herokuapp.com/v1/Comment/";

	// cURLセッションを初期化
	$curl = curl_init();
	//bodyに送付する変数(API仕様書を参照)
	$params = [
		"thread_id" => $thread_id,  //任意で
		"comment" => $comment,  //任意で
		"API_Token" => $API_Token,  //任意で
	];
	//ヘッダーにx-ww-form-urlencodedを指定
	$header = array("Content-Type: application/x-www-form-urlencoded");

	//オプション
	$options = array(
		//ヘッダー
		CURLOPT_HTTPHEADER => $header,
		// URL
		CURLOPT_URL => $base_url,
		// Method
		CURLOPT_CUSTOMREQUEST => 'POST',
		//SSL
		CURLOPT_SSL_VERIFYPEER => false, // 証明書の検証を行わない
		//body
		CURLOPT_POSTFIELDS => http_build_query($params),
		// 変数に保存。これがないと即時出力
		CURLOPT_RETURNTRANSFER => true,
	);
	curl_setopt_array($curl, $options);
	$response = curl_exec($curl);
	$result = json_decode(json_decode($response, true));
	//var_dump($response);
	//var_dump($result);
	return $result;
}


function DELETE_Comment(int $thread_id,int  $comment_id,string $API_Token){
	$base_url = "https://apinanichan.herokuapp.com/v1/Comment/";

	// cURLセッションを初期化
	$curl = curl_init();
	//bodyに送付する変数(API仕様書を参照)
	$params = [
		"thread_id" => $thread_id,  //任意で
		"comment_id" => $comment_id,  //任意で
		"API_Token" => $API_Token,  //任意で
	];
	//ヘッダーにx-ww-form-urlencodedを指定
	$header = array("Content-Type: application/x-www-form-urlencoded");

	//オプション
	$options = array(
		//ヘッダー
		CURLOPT_HTTPHEADER => $header,
		// URL
		CURLOPT_URL => $base_url,
		// Method
		CURLOPT_CUSTOMREQUEST => 'DELETE',
		//SSL
		CURLOPT_SSL_VERIFYPEER => false, // 証明書の検証を行わない
		//body
		CURLOPT_POSTFIELDS => http_build_query($params),
		// 変数に保存。これがないと即時出力
		CURLOPT_RETURNTRANSFER => true,
	);
	curl_setopt_array($curl, $options);
	$response = curl_exec($curl);
	$result = json_decode(json_decode($response, true));
	//var_dump($response);
	//var_dump($result);
	return $result;
}

function DELETE_Thread(int $thread_id,string $API_Token){
	$base_url = "https://apinanichan.herokuapp.com/v1/Thread/";

	// cURLセッションを初期化
	$curl = curl_init();
	//bodyに送付する変数(API仕様書を参照)
	$params = [
		"thread_id" => $thread_id,  //任意で
		"API_Token" => $API_Token,  //任意で
	];
	//ヘッダーにx-ww-form-urlencodedを指定
	$header = array("Content-Type: application/x-www-form-urlencoded");

	//オプション
	$options = array(
		//ヘッダー
		CURLOPT_HTTPHEADER => $header,
		// URL
		CURLOPT_URL => $base_url,
		// Method
		CURLOPT_CUSTOMREQUEST => 'DELETE',
		//SSL
		CURLOPT_SSL_VERIFYPEER => false, // 証明書の検証を行わない
		//body
		CURLOPT_POSTFIELDS => http_build_query($params),
		// 変数に保存。これがないと即時出力
		CURLOPT_RETURNTRANSFER => true,
	);
	curl_setopt_array($curl, $options);
	$response = curl_exec($curl);
	$result = json_decode(json_decode($response, true));
	//var_dump($response);
	//var_dump($result);
	return $result;
}
?>