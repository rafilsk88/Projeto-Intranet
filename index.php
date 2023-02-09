<?php 

include_once('dados_login.php');

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">	
		<meta http-equiv="X-UA-Compatible" content="IE-edge">	
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Login</title>
	</head>
	<body>
		<p>
			<a href="elosaude/elosaude.php">elosaude</a>
			<a href="gni/gni.php">GNI</a>
			<a href="lgpd/lgpd.php">LGPD</a>
			<a href="?logout=1">Sair</a>
		</p>
		<?php
			if(!$_SESSION['logged']){
				include_once "form_login.php";
			}else {
				include_once "conteudo_restrito.php";
			}
		?>   
	</body>
</html>