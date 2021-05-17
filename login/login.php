<?php
session_start();
$link = new mysqli('localhost','root','','cyber_security');
if($link->connect_error)
{
    die("Error");
}
$email=$_POST['email'];
$pwd=$_POST['password'];
$email=stripslashes($email);
$pwd=stripslashes($pwd);
$email=mysqli_real_escape_string($link,$email);
$pwd=mysqli_real_escape_string($link,$pwd);
$sql="SELECT * FROM userdetails WHERE email='$email' AND password='$pwd'";
$result=mysqli_query($link,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$count=mysqli_num_rows($result);
if($count==1)
{
    $_SESSION['email']=$email;
    header("location:../forum/forum.php");
}
else
{
    echo "Failure";
}
?>