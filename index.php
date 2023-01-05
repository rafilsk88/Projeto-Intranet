<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">		
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=MuseoModerno:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="recursos\css\estilo.css">
		<title>Elosaude</title>
	</head>
	<body>
		<header class="cabecalho">
			<h1>Intranet</h1>
			<h2>Fique por dentro de tudo que acontece em nossa associação</h2>
		</header>
		<nav class="navegacao">
			<a href=<?="/{$_GET['dir']}/{$_GET['file']}.php"?> class="verde">Sem Formatação</a>
			<a href="index.php" class="vermelho">Voltar</a>
		</nav>
		<main class="principal">
			<div class="conteudo">
				<nav class="modulos">
					<div class="modulo verde">
					 <h3>Institucional</h3>
					 <ul>
						<li><a href="elosaude.php?dir=elosaude&file=estatuto_social">Estatuto Social</a></li>
						<li><a href="elosaude.php?dir=elosaude&file=organograma">Organograma</a></li>
						<li><a href="elosaude.php?dir=elosaude&file=acordo_coletivo">Acordo Coletivo</a></li>
					 </ul>
					</div>				
					<div class="modulo vermelho">
					 <h3>GNI</h3>
					 <ul>
						<li><a href="#">Menu01</a></li>
						<li><a href="#">Menu02</a></li>
						<li><a href="#">Menu03</a></li>
					 </ul>
					</div>				
					<div class="modulo azul">
					 <h3>Governança e Compliance</h3>
					 <ul>
						<li><a href="#">Menu01</a></li>
						<li><a href="#">Menu02</a></li>
						<li><a href="#">Menu03</a></li>
					 </ul>
					</div>			
					<div class="modulo roxo">
					 <h3>Gente e Gestão</h3>
					 <ul>
						<li><a href="#">Menu01</a></li>
						<li><a href="#">Menu02</a></li>
						<li><a href="#">Menu03</a></li>
					 </ul>
					</div>				
					<div class="modulo laranja">
					 <h3>Superintendente</h3>
					 <ul>
						<li><a href="#">Menu01</a></li>
						<li><a href="#">Menu02</a></li>
						<li><a href="#">Menu03</a></li>
					 </ul>
					</div>			
					<div class="modulo verde-escuro">
					 <h3>LGPD</h3>
					 <ul>
						<li><a href="#">Menu01</a></li>
						<li><a href="#">Menu02</a></li>
						<li><a href="#">Menu03</a></li>
					 </ul>
					</div>				
					<div class="modulo vermelho-escuro">
					 <h3>Workshops</h3>
					 <ul>
						<li><a href="#">Menu01</a></li>
						<li><a href="#">Menu02</a></li>
						<li><a href="#">Menu03</a></li>
					 </ul>
					</div>				
					<div class="modulo azul-escuro">
					 <h3>Treinamentos</h3>
					 <ul>
						<li><a href="#">Menu01</a></li>
						<li><a href="#">Menu02</a></li>
						<li><a href="#">Menu03</a></li>
					 </ul>
					</div>			
		     		<div class="modulo roxo-escuro">
					 <h3>Comunicados</h3>
					 <ul>
						<li><a href="#">Menu01</a></li>
						<li><a href="#">Menu02</a></li>
						<li><a href="#">Menu03</a></li>
					 </ul>
					</div>
				</nav>
			</div>
		</main>
		<footer class="rodape">
			ELOSAÚDE – Associação de Assistência à Saúde  © <?= date(Y) ?>
		</footer>
	
	</body>
</html>