<?php
session_start();
if (!isset($_SESSION['idx']) && $_SESSION['manager']) die("<script>alert('상품 업로드 권한이 없습니다');history.go(-1)</script>");
ini_set("display_errors","0");
$connect = mysqli_connect("localhost","junwon7103","jigle7103","shop");
mysqli_set_charset($connect,'utf8');

$name = $_POST['name'];
if (is_numeric($_POST['price'])) {
  $price = $_POST['price'];
} else {
  die("<script>alert('Price is not a number');history.go(-1)</script>");
}
$info = str_replace("\r\n", "<br>", trim($_POST['info']));
preg_match("/[.].+$/", $_FILES['info']['name'], $matches);
$imageName = time().$matches[0];

if (move_uploaded_file($_FILES['info']['tmp_name'], $_SERVER['DOCUMENT_ROOT']."/image/".$imageName)) {
  $query = "INSERT INTO item (name, info, image, price, seller) VALUES ('$name', '$info', '$imageName', $price, ".$_SESSION['idx'].")";
  if (mysqli_query($connect, $query)) {
    header("Location: /");
  }
  else echo "<script>alert('업로드에 실패하였습니다');location.href='/?page=upload'</script>";
} else {
  $query = "INSERT INTO item (name, info, image, price, seller) VALUES ('$name', '$info', 'none', $price, ".$_SESSION['idx'].")";
  if (mysqli_query($connect, $query)) {
    header("Location: /");
  }
  else echo "<script>alert('업로드에 실패하였습니다');location.href='/?page=upload'</script>";
}
