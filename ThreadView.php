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
		
		
			
		
		
		
		<a href="#sendcom">投稿欄にジャンプ</a>
		
		<?php
		require("function/API_Function.php");
		
		
		//スレッド名キャッチ
		$thread_name = $_GET['threadname'];
		
		echo ("<div class=\"centerAlign\">");
		echo ("<h1>");
		echo $thread_name;
		echo ("</h1>");
		echo ("</div>");
		
		
		//スレッドIDをキャッチ
		$thread_id = (int) $_GET['threadid'];		
		$resp = GET_Thread($thread_id);
		
		//ほんとはエラー処理する $resp -> statusが1or0か確認する
		$tmp = $resp -> data;
		echo ("<ol>");
		foreach($tmp as $index){
			$msg = "<li><h4>". $index -> comment_time . "</h4>" . $index -> comment . "</li>";
			echo $msg;
			
		}
		echo ("</ol>");
		?>
		
		
		
		
		
		<!--　コメント投稿部分　-->
		<hr id="sendcom">
		<div class="sendCom" style="text-align: center;">
			<form action="sendComment.php" method="post">
				<label>投稿：</label>
				<?php
				echo "<input type=\"hidden\" name=\"thread_id\" value=\" " . $thread_id . "\">" ;
				echo "<input type=\"hidden\" name=\"thread_name\" value=\" " . $thread_name . "\">" ;
				?>
				<textarea name="sendCom" rows="3" cols="50" maxlength="500" placeholder="投稿内容を記載する"></textarea>
				<dl class="sButton">
					<input type="reset" value="キャンセル">
					<input type="submit" value="投稿" style="margin-left: 8%;">
				</dl>
			</form>
		</div>
		<!--　　-->
		
	</body>
</html>