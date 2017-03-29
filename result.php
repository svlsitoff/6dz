<?php 
/*echo "<pre>";
var_dump($_POST);
*/$var = $_POST['test_var'];
$res = $_POST['res'];
$file_data = json_decode (file_get_contents('downloads/'.$var.".json"), true);
if (!empty($_POST)) {
	if ($res==$file_data['result']){
		echo "Правильно!";
	}else {
		echo "Неверно";
	}
}

