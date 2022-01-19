<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<link href="css/mainStyle.css" rel="stylesheet">
		<title>HOME</title>
		
	</head>
	<body>
	<!-- 共通ヘッダー部分 -->
		<header>
			<?php include('headers/header-main.php'); ?>
		</header>
	<!--　-->
		
		
	 	
	<!--パンくずリスト-->
	<!--　-->
		
		
	<!--メインコンテンツ-->
		<div class="centerAlign">
			<h1>カテゴリ一覧</h1>
		<?php
			require("function/API_Function.php");
		
		//カテゴリ名
			$resp = GET_Category();
			
		//スレ名表示
			$tmp = $resp -> data;
			foreach($tmp as $index) {
				echo "<li>";
				$msg = '<a href="./ThreadList.php?categoryid=' . $index -> category_id . '&categoryname=' . $index -> category_name . '">' . $index -> category_name . '</a></li>';
				echo $msg;
			}
		?>
		
		<!--　　-->
			
			
		<!--　　-->
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
		</div>
	</body>
</html>