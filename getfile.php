<?php 
if( !empty( $_POST )) {
//$downloads = "downloads/".$_FILES['file']['name'];
//move_uploaded_file($_FILES['file']['tmp_name'],$downloads);
//сохраняем полученый файл в папке downloads
//$tests = glob("downloads/*.json");//создаем массив в который помещаем значение нашего файла
//foreach ($tests as $key => $value) {
$test = file_get_contents($_FILES['file']['tmp_name']);
//$test = json_decode($test);
file_put_contents('list.php', $test, FILE_APPEND);}

//foreach (glob('/downloads/*') as $file){
//unlink($file);}

