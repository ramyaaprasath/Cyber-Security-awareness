<!DOCTYPE html>
<?php
    session_start();
    $email=$_SESSION['email'];
    echo $email;
?>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
	<link href="../forum/main.css" rel="stylesheet" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Forum</title>
  <link rel="icon" type="image/icon type" href="../forum/favcon.jpg" />
</head>
<body>
<div class="sidenav">
  <a href="forum.html" id="formenu">Forum</a>
  <form method="POST" action="savedforum.php">
    <a href="personalforum.php">Saved</a>
    <?php
        $_SESSION['email']=$email;
    ?>
  </form>
  <a href="logout.php" >Logout</a>
  <div class="insta">
    <a href="https://www.instagram.com/cybsec_awarenx/">Followers on Instagram</a>
    <img src="insta.jpg" width="50px" height="50px">
  <a href="https://www.instagram.com/cybsec_awarenx/">Click Here!</a>
  </div>  
</div>
<span class="header">
  <h2>Forum</h2>
</span>
<br><br><br><br>
<div class="main">
  <h2>Discussion:</h2>
<form method="POST" action="saveforum.php">
    <textarea required id="askques" name="askquestion" placeholder="  Ask your question here !"></textarea>
    <button id="ask">POST QUESTION</button>
    <?php
        $_SESSION['email']=$email;
    ?>
</form>

</div>
</body>
</html>