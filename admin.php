<?php require_once('getfile.php') 
?>

<!DOCTYPE html>
<html>
<head>
	<title>генератор тестов</title>
	<meta charset="utf-8">
</head>
<body>
<form action="admin.php" method="post" enctype="multipart/form-data">
<input type="file" name="file"><br>
<input type="submit" name="send" value="Отправить"><br>
</form>
</body>
</html>
