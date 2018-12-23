<?php
header('Content-type: image/jpeg');

$image = $_FILES['image'];
$im = $t_name.$_FILES['image']['name'];
move_uploaded_file($_FILES["image"]["tmp_name"],"../innog/".$t_name . $_FILES["image"]["name"]);

$image = new Imagick('../innog/$im');
$image->adaptiveResizeImage(1024,768);

echo $image;
?>
