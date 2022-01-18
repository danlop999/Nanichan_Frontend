<?php
$thread_id = $_POST['thread_id'];
$comment = $_POST['sendCom'];
$thread_name = $_POST['thread_name'];

require("function/API_Function.php");

$resp = POST_Comment($thread_id,$comment,"0");
$url = "./ThreadView.php?threadid=" . $thread_id . "&threadname=" . $thread_name;

header("Location: $url");

//スレ作
//int $category_id,string $thread_name,string $API_Token

//コメ投
//int $thread_id,string $comment,string $API_Token
?>