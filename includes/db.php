<?php

#Variavel para teste 
$usuario_db = 'rafael';
$senha_db = '1234';


$host = 'localhost';
$usuario = 'rafael';
$senha = 'LkzR#4yu';
$database = 'Intranet';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error){
    die( "Falha ao conectar ao banco de dados: " . $mysqli->error);
}
