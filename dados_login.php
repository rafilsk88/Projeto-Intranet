<?php 
session_start();
$_SESSION['logged'] = $_SESSION['logged'] ?? False;

$usuario_bd = 'rafael';
$senha_bd = '1234';
        
$p_usuario = $_POST['email'];
$p_senha = $_POST['senha'];

if($p_usuario == $usuario_bd && $p_senha == $senha_bd ){
    $_SESSION['email'] = $usuario_bd;
    $_SESSION['senha'] = $senha_bd;
    $_SESSION['logged'] = True;      
}
           