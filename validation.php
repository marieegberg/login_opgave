<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Login system</title>
<link rel="stylesheet" href="style.css">
            <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
            <link rel="stylesheet" href="#">
            <link rel="stylesheet" href="#" media="screen and (min-width: 960px)">
            <link rel="stylesheet" href="style.css" media="screen and (min-width: 1500px)">
</head>

<body>
<?php
if (filter_input(INPUT_GET, 'submit')){
	
	$n = filter_input(INPUT_GET, 'name')
		or die('Missing/illegal name parameter');
	
	$e = filter_input(INPUT_GET, 'email', FILTER_VALIDATE_EMAIL)
		or die('Missing/illegal email parameter');
	
	$a = filter_input(INPUT_GET, 'age', 
					  FILTER_VALIDATE_INT,
					  array('options' => array('min_range'=>1, 
											   'max_range'=>120))
					 )
		or die('Missing/illegal age parameter');
	
	echo 'Got the valid parameters: <br>';
	echo 'name : '.$n.'<br>';
	echo 'email : '.$e.'<br>';
	echo 'age : '.$a.'<br>';
	
}
?>
<div class="form">
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
	<fieldset>
    	<legend>Try on server</legend>
    	<input name="name"  type="text"   placeholder="Navn" required />
    	<input name="email" type="email"  placeholder="E-mail" required />
    	<input name="age"   type="number" placeholder="Alder" min="1" max="120" required />
    	<input name="submit" type="submit" value="Check it" />
	</fieldset>
</div>
</body>
</html>