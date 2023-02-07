<?php
session_start();
include_once '../dados_login.php';
$logged = $_SESSION['logged'] ?? NULL;
if(!$logged) die('Conteudo restrito, apenas para colaboradores da ELOSAUDE');
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">		
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=MuseoModerno:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="..\recursos\css\estilo.css">
		<link rel="stylesheet" href="..\recursos\css\acordo_coletivo.css">
		<title>Elosaude</title>
	</head>
	<body class="acordo_coletivo">
		<header class="cabecalho">
			<h1>Intranet</h1>
			<h2>Elosaude</h2>
		</header>
		<nav class="navegacao">
			<a href=<?="/{$_GET['dir']}/{$_GET['file']}.php"?> class="verde">Sem Formatação</a>
			<a href="..\index.php" class="vermelho">Voltar</a>
		</nav>
		<main class="principal">
			<div class="conteudo">
				<?php
					#include("/{$_GET['dir']}/{$_GET['file']}.php");
					#include('elosaude/organograma.php')
					include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
				?>
			</div>
		</main>
		<footer class="rodape">
			ELOSAÚDE – Associação de Assistência à Saúde  © <?= date(Y) ?>
		</footer>
	
	</body>
</html>