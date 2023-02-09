<?php 
include_once 'includes/session.php';
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
		<div class="container">
            <h1>HOME</h1>
            <?php include_once("./html/menu.php");?>
        
		
            <p>Aqui vai conteudo da HOME</p>
            
            <?php
            if($logado){
                echo "<p> Olá {$_SESSION['usuario']}!</p>"
            }
            ?>
        </div>
	</body>
</html>