<?php 
include('conexao.php');

if(isset($_POST['login']) || isset($_POST['Senha'])){

	if(strlen($_POST['login']) == 0) {
		echo "Preencha seu e-mail";
	}else if(strlen($_POST['Senha']) == 0){
		echo "Preencha sua senha";
	} else {
		$email = $mysqli->real_escape_string($_POST['login']);
		$senha = $mysqli->real_escape_string($_POST['Senha']);

		$sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
		$sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

		$quantidade = $sql_query->num_rows;

		if($quantidade == 1){
			$usuario = $sql_query->fetch_assoc();

			if(!isset($_SESSION)){
				session_start();
			}

			$_SESSION['idusuario'] = $usuario['idusuario'];
			$_SESSION['nome'] = $usuario['nome'];

			header("Location: home.php");


		}else {
			echo "Falha ao logar! E-mail ou senha incorretos";
		}
	}
}


?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" href="recursos\css\style.css">
        <link rel="stylesheet" href="recursos\css\media-query.css">
		<title>Elosaude</title>
	</head>
	<body>				
		<main>
			<section id="login">
                <div id="imagem">

                </div>
                <div id="formulario">
                    <h1>Login</h1>
                    <p>Seja bem-vindo(a) novamnete. Faça login para acessar a Intranet</p>
                    <form action="home.php" method="post" autocomplete="on">
						<div class="campo">
							<span class="material-icons">person</span>
							<input type="email" name="login" id="ilogin" placeholder="seu e-mail" autocomplete="email" require maxlength="30">
							<label for="ilogin">Login</label>
						</div>
						<div class="campo">
							<span class="material-icons">vpn_key</span>
							<input type="password" name="Senha" id="isenha" placeholder="sua senha" autocomplete="current-password" required minlength="6" maxlength="8">
							<label for="isenha">Senha</label>
						</div>
						<input type="submit" value="Entrar">
						<a href="esqueci.html" class="botao">
							Esqueci a senha <i class="material-icons">mail</i>
						</a>
					</form>   
                </div>
            </section>
		</main>	
	</body>
</html>