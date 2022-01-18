<?php
$category_id = $_POST['category_id'];
$thread_name = $_POST['thread_name'];
$category_name = $_POST['category_name'];

require("function/API_Function.php");

$resp = POST_Thread($category_id,$thread_name,"0");
$url = "./ThreadList.php?categoryid=" . $category_id . "&categoryname=" . $category_name;

header("Location: $url");

?>