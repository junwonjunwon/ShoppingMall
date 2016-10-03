<?php
$connect = mysqli_connect("localhost","root","","test");

mysqli_query($connect, "SET NAMES utf8");

var_dump($_POST);
// INSERT INTO `MEMBERS` = Members 테이블에 값을 넣겠다!
$email = $_POST['email'];
$password = $_POST['pss'];
$name = $_POST['name'];
$gender = $_POST['gender'];
echo $password;
//$query = "INSERT INTO `member` (email,password,name,gender) VALUES ('" . $email . "','" . $password . "','" . $name . "','" . $gender . "')";
//$query = mysqli_query($connect,$query);
$query = sprintf("INSERT INTO `member` (email,pss,name,gender) VALUES('%s','%s','%s','%s')",$email,$password,$name,$gender);
$query = mysqli_query($connect,$query);
