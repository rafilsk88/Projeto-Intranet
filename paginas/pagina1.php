<?php 
require_once '../includes/session.php';

if(! $logado){
	die("Você mão tem permissão para acessar essa página.");
}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">	
		<meta http-equiv="X-UA-Compatible" content="IE-edge">	
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="./../css/style.css">
		<title>Pagina1</title>
	</head>
	<body>
		<div class="container">
            <h1>Pagina 1</h1>
            <?php include_once("./html/menu.php");?>
        </div>
		
        <p>Aqui vai conteudo da Pagina 1</p>
	</body>
</html>