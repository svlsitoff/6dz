<?php 
if (!empty($_GET['var'])) {
$var = $_GET['var'];}
else{
$var = 1;}
$formdata = json_decode (file_get_contents('downloads/'.$var.".json"), true);

$fdata = $formdata['name'];
$fdata_lab = $formdata['label'];

?>
<!DOCTYPE html>
<html>
<head>
<title>тест</title>
</head>
<body>
<form action="result.php" method="post" >
<label for="<?= $fdata ?>" ><?=$fdata_lab ?></label><br>
<input name="test_var" value="<?=$var?>" hidden><br>
<input id="<?= $fdata ?>"  type="text" name="res" ><br>
<input type="submit" name="go" value="Проверить"><br>
</form>
<a href="list.php">список</a><br>
</body>
</html>