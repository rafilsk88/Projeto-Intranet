<?php

if(!isset($_SESSION)){
	session_start();
}

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">	
		<meta http-equiv="X-UA-Compatible" content="IE-edge">	
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Home</title>
	</head>
	<body>				
		<h1>Seja bem-vindo(a), <?php echo $_SESSION['nome'];?> </h1>
		<h2> Ao nosso canal de comunicação da ELOSAUDE</h2>   
	</body>
</html>
