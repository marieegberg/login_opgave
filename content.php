<?php 
	session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome</title>
<link rel="stylesheet" href="style.css">
            <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
            <link rel="stylesheet" href="#">
            <link rel="stylesheet" href="#" media="screen and (min-width: 960px)">
            <link rel="stylesheet" href="style.css" media="screen and (min-width: 1500px)">
</head>

<body>

<div class="navbar-left">
        </div>
    <div class="navbar">
        <div class="active">
        <ul class="navbar-right">
          <li><a href="#">Log out</a></li>
           <li><a href="#">Explore</a></li>
            <li><a class="active" href="#">Home</a></li>
        </ul>
    </div>
    </div>

<?php 
	if(empty($_SESSION['uid'])) {
		echo 'not logged in!';
	}
	else { //fører videre til næste side som nu bliver: login.php
		echo 'Welcome to you '.$_SESSION['username']. ', take a look around!'. '<br>';
		echo "<script language='javascript' type='text/javascript'>";
		echo "alert('Du er nu logget ud');";
		echo "</script>";
		$URL="login.php";
		echo "<script>location.href='$URL'</script>";
		
	} 
	?>
<div class="background">
<div class="form_1">
	<p class="text"><?php echo 'Velkommen '.$_SESSION['username' ]. ', god fornøjelse'. '<br>' ?></p>
</div>
<button class="logout">
<a href="login.php">log ud</a>
</button>
	</div>
</div>
</body>
</html>