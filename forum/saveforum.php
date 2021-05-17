<?php
    session_start();
    $email=$_SESSION['email'];
    $table=$email;
    $question=$_POST['askquestion'];
    $link = new mysqli('localhost','root','','cyber_security');
    if($link->connect_error)
    {
        die("Error");
    }
    $sql="INSERT INTO `$table` VALUES('$question')";
    $result=$link->query($sql);
    if($result===TRUE)
    {
        echo "Saved";
    }
    else
    {
        echo "Wrong";
    }
?>