<?php 
require_once '../includes/session.php';
require_once '../include/db.php';

$p_usuario = $_POST['usuario'] ?? NULL;
$p_senha = $_POST['senha'] ?? NULL;

if($p_usuario == $usuario_db && $p_senha == $senha_db){
    $_SESSION['usuario'] = $usuario_db;
    $_SESSION['senha'] = $usuario_db;
    $_SESSION['session_id'] = session_id();
    header('Location: http://192.168.40.25/Projeto-Intranet/index.php');
    
} else{
    session_unset();
    session_destroy();
    header('Location: http://192.168.40.25/Projeto-Intranet/paginas/paginas/login.php');
}
