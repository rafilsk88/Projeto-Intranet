<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">		
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=MuseoModerno:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="recursos\css\estilo.css">
		<link rel="stylesheet" href="recursos\css\acordo_coletivo.css">
		<title>Elosaude</title>
	</head>
	<body class="acordo_coletivo">
		<header class="cabecalho">
			<h1>Intranet</h1>
			<h2>Fique por dentro de tudo que acontece em nossa associação</h2>
		</header>
		<nav class="navegacao">
			<a href=<?="/{$_GET['dir']}/{$_GET['file']}.php"?> class="verde">Institucional</a>
			<a href="elosaude/elosaude.php" class="verde">Elosaude</a>
			<a href="gni/gni.php" class="verde">GNI</a>
			<a href="gestão_e_desenvolvimento_de_pessoas/gestão_e_desenvolvimento_de_pessoas.php" class="verde">GDP</a>
			<a href="governança_risco_e_compliance/governança_risco_e_compliance.php" class="verde">GRC</a>
			<a href="superintendente/superintendente.php" class="verde">Superintendente</a>
			<a href="lgpd/lgpd.php" class="verde">LGPD</a>
			<a href="workshops/workshops.php" class="verde">Workshops</a>
			<a href="treinamentos/treinamentos.php" class="verde">Treinamentos</a>
			<a href="comunicados/comunicados.php" class="verde">Comunicados</a>
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