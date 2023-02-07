<?php 
include('conexao.php')
session_start();
$_SESSION['logged'] = $_SESSION['logged'] ?? False;

    $email = $mysqli->real_escape_string($_POST['email']);
    $senha = $mysqli->real_escape_string($_POST['senha']);

    $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

    $quantidade = $sql_query->num_rows;

    if($quantidade == 1){

        $usuario = $sql_query->fetch_assoc();

        $_SESSION['idusuario'] = $usuario['idusuario'];
        $_SESSION['nome'] = $usuario['nome'];

    }else {
        echo "Falha ao logar! E-mail ou senha incorretos";
    }

?>