<?php 
   /*echo "<pre>";
   print_r($_FILES);
   $downloads = "downloads/".$_FILES['file']['name'];
   move_uploaded_file($_FILES['file']['tmp_name'],$downloads);
   */$list = glob("downloads/*.json");
   var_dump($list);
   foreach ($list as $value) {
   	$test[] = file_get_contents($value);
   	
   }
   echo "<pre>";
   var_dump($test);
?>
<!DOCTYPE html>
<html>
<head>
	<title>генератор тестов</title>
	<meta charset="utf-8">
</head>
<body>
<form action="index.php" method="post" enctype="multipart/form-data">
<input type="file" name="file"><br>
<input type="submit" name="send" value="Залить"><br>
</form>
</body>
</html>
