<?php
ini_set("display_errors", "1");
$connect = mysqli_connect("localhost","junwon7103","jigle7103","shop");

mysqli_query($connect, "SET NAMES utf8");

$email = $_POST['email'];
$phone = $_POST['phone'];
$password = hash("sha256",$_POST['pss']);
$name = $_POST['name'];
$gender = $_POST['gender'];

$query = "INSERT INTO user (email, phone, pss, name, gender) VALUES ('$email', $phone, '$password','$name', $gender)";
echo $query;
mysqli_query($connect,$query) or die("Fuck!");
header("Location: ../");
