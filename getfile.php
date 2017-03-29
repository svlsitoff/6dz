<?php 
if( !empty( $_POST )) {
$downloads = "downloads/".$_FILES['file']['name'];
move_uploaded_file($_FILES['file']['tmp_name'],$downloads);}
?>