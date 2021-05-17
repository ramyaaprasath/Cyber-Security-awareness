<?php
session_start();
$link = new mysqli('localhost','root','','cyber_security');
if($link->connect_error)
{
    die("Error");
}
$f1=0;
$f2=0;
$name=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$sql = "INSERT INTO userdetails VALUES('$email','$password')";
if($link->query($sql)===TRUE)
{
    $f1=1;
}
else
{
    echo "Already Registered Try logging in";
    header("location:index.html");
}
$sql="CREATE TABLE `".$email."` (
    questions VARCHAR(2000))";
if($link->query($sql)===TRUE)
{
  header("location:index.html");
  $_SESSION['email']=$email;
}
mysqli_close($link);
$link = new mysqli('localhost','root','','password_security');
if($link->connect_error)
{
    die("Error");
}
$sql = "INSERT INTO userdetails VALUES('$email','$password')";
if($link->query($sql)===TRUE)
{
    $f2=1;
}
else
{
    echo "Already Registered Try logging in";
    header("location:index.html");
}
$sql="CREATE TABLE `".$email."` (
    pwd VARCHAR(2000))";
if($f1==1 && $f2==1)
{
    header("location:index.html");
}
mysqli_close($link);
?>