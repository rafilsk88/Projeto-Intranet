<?php

$host = '192.168.40.25';
$usuario = 'rafal';
$senha = 'LkzR#4yu';
$database = 'Intranet';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error){
    die( "Falha ao conectar ao banco de dados: " . $mysqli->error);
}
