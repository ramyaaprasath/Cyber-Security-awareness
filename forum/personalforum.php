<!DOCTYPE html>
<html>
<?php
session_start();
$email=$_SESSION['email'];
$email=stripslashes($email);
?>
<head>
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
  <link href="../forum/main.css" rel="stylesheet" />
  <link href="../forum/personalforum.css" rel="stylesheet" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Saved</title>
   <link rel="icon" type="image/icon type" href="../forum/favcon.jpg" />
</head>
<body>
<div class="sidenav">
  <a href="forum.php">Forum</a>
  <a href="personalforum.php" id="formenu">Saved</a>
  <a href="logout.php" >Logout</a>
  <div class="insta">
    <a href="https://www.instagram.com/cybsec_awarenx/">Followers on Instagram</a>
    <img src="insta.jpg" width="50px" height="50px">
  <a href="https://www.instagram.com/cybsec_awarenx/">Click Here!</a>
  </div>  
</div>
<span class="header">
  <h2>Saved discussions</h2>
</span>
<br><br><br>
<br>
<div class="main" name="main">
  <table border="2">
    <tr>
      <td>Questions</td>
    </tr>
  <?php
    $link = new mysqli('localhost','root','','cyber_security');
    if($link->connect_error)
    {
        die("Error");
    }
    $sql = "SELECT * FROM `$email`";
    $result=$link->query($sql);
    while($data = mysqli_fetch_assoc($result))
    {
      ?>
      <tr>
        <td><?php echo $data['questions'];?></td>
      </tr>
      <?php
    }
  ?>
</div>
</body>
</html>