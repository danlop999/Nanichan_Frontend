<!DOCTYPE html>
<?php
	header('Content-type: text/html; charset=UTF-8');
?>
<html lang="ja">

	<head>
		<meta charset="UTF-8">
	</head>
		<body>
			<table border="1">
				<tr>
				<th>id</th>
				<th>名前</th>
				</tr>
<?php

$base_url = "https://apinanichan.herokuapp.com/v1/Category";
$tag = '';

// cURLセッションを初期化
$curl = curl_init();

// オプションを設定
//curl_setopt($curl, CURLOPT_URL, $base_url.'/api/v2/tags/'.$tag.'/items');
curl_setopt($curl, CURLOPT_URL, $base_url);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); // 証明書の検証を行わない
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);  // curl_execの結果を文字列で返す


				$response = curl_exec($curl);
				
				$result = json_decode(json_decode($response, true));
				
				
				var_dump($result);
				
				
				/* 戻り値一覧
				・->status　…　１：正常
				・->data[0]->category_name
				
				*/
				
				
				$tmp=$result->data;
				foreach ($tmp as $index){
				    echo '<tr>';
					echo '<td>';
					echo $index->category_id;
					echo '</td>';
					
					echo '<td>';
				    echo $index->category_name;
				    echo '</td>';
					echo '</tr>';
				}
				
				/*　繰り返し処理
				
				*/





curl_close($curl);

			?>
		</table>
	</body>
</html>