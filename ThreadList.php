<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<link href="css/mainStyle.css" rel="stylesheet">
		<title>スレッド一覧</title>
	</head>
	<body>
		<!-- 共通ヘッダー部分 -->
		<?php include('headers/header-main.php'); ?>
		<!--　-->
		
		<!--　カテゴリ名を表示する　-->
		<div class="centerAlign">
		<?php
		require("function/API_Function.php");
		
		//カテゴリ名キャッチ
		$category_id = (int) $_GET['categoryid'];
		$category_name = $_GET['categoryname'];
		
		echo ("<h1>");
		echo $category_name; 
		echo ("</h1>");
		?>
		</div>
		
		<!--　スレッド作成　-->
		<div class="createThread" style="text-align: center;">
			<h2 class="centerAlign">スレッド作成</h2>
			<form action="sendThread.php" method="post">
				<label for="threadName">スレッド名：</label>
				
				<!-- sendThreadに投げる -->
				<input type="hidden" name="category_id" value="<?php echo $category_id ; ?> ">
				<input type="hidden" name="category_name" value="<?php echo $category_name ; ?> ">
				<input type="text" name="thread_name" required maxlength="30" placeholder="MAX30字">
				
				
				<dl class="sButton">
					<input type="reset" value="キャンセル">
					<input type="submit" value="作成" style="margin-left: 8%;">
				</dl>
			</form>
			<hr>
		</div>
		<!--　　-->
		
		<table border="1">
				<tr>
				<th>スレッド名</th>
				</tr>
			<ol>
		<!--　スレッド一覧　-->
		<?php
		$resp = GET_ThreadInfo_Category($category_id);
		//スレ名(一覧)表示
		$tmp = $resp -> data;
		foreach($tmp as $index) {
			$msg = '<a href="./ThreadView.php?threadid=' . $index -> thread_id . '&threadname=' . $index -> thread_name . '">' . $index ->  thread_name . '</a>';
			
			echo ("<tr><td><li>");
			echo $msg;
			echo ("</li></td></tr>");
			
		}
			?>
			</ol>
		</table>
	</body>
</html>