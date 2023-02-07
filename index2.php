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
<html lang="en">
	<head>
		<meta charset="UTF-8">	
		<meta http-equiv="X-UA-Compatible" content="IE-edge">	
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Elosaude</title>
	</head>
	<body>				
		<h1>Seja bem-vindo(a) novamnete. Faça login para acessar a Intranet</h1>
		<form action=" " method="post" autocomplete="on">
			<p>
				<label>E-mail</label>
				<input type="text" name="email">
			</p>
			<p>
				<label>Senha</label>
				<input type="password" name="senha">
			</p>
			<p>
				<button type="submit">Entrar<button>
			</p>
		</form>   
	</body>
</html>