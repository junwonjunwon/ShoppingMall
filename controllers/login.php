<?php
session_start();
$connect = mysqli_connect("localhost","junwon7103","jigle7103","shop");
mysqli_set_charset($connect,'utf8');
$email = $_POST['email'];
$password = hash("sha256",$_POST['password']);
$query = "SELECT * FROM user WHERE email='$email' AND pss = '$password'";
$query = mysqli_query($connect, $query);
$result = mysqli_fetch_assoc($query);

$_SESSION['name'] = $result['name'];
$_SESSION['idx'] = $result['idx'];
$_SESSION['manager'] = $result['manager'];
if(count($result)){
  echo "<script>alert('로그인 성공');location.href='/';</script>";
}else{
  echo "<script>alert('로그인 실패');location.href='/?page=login';</script>";
}
