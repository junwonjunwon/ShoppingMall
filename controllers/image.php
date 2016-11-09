<?php
ini_set("display_errors","0");
$connect = mysqli_connect("localhost","junwon7103","jigle7103","shop");
mysqli_set_charset($connect,'utf8');

$name = $_POST['name'];
if (is_numeric($_POST['price'])) {
  $price = $_POST['price'];
} else {
  die("Price is not a number");
}
$info = str_replace("\r\n", "<br>", trim($_POST['info']));
preg_match("/[.].+$/", $_FILES['info']['name'], $matches);
$imageName = time().$matches[0];

if (move_uploaded_file($_FILES['info']['tmp_name'], $_SERVER['DOCUMENT_ROOT']."/image/".$imageName)) {
  $query = "INSERT INTO item (name, info, image, price) VALUES ('$name', '$info', '".$imageName."', $price)";
  if (mysqli_query($connect, $query)) {
    echo "Success";
  }
} else echo "Failure";
