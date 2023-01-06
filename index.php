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
		<main class="principal">
			<section id="login">
                <div id="imagem">

                </div>
                <div id="formulario">
                    <h1>Login</h1>
                    <p>Seja bem-vindo(a) novamnete. Faça login para acessar a Intranet</p>
                    <form action="login.php" method="post"></form>   
                </div>
            </section>
		</main>
		<footer class="rodape">
			ELOSAÚDE – Associação de Assistência à Saúde  © <?= date(Y) ?>
		</footer>
	
	</body>
</html>