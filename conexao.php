<?php

$host = '192.168.40.25';
$usuario = 'rafal';
$senha = 'LkzR#4yu';
$database = 'Intranet';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->connect_errno){
    echo "Falha ao conectar ao banco de dados: (".$mysqli->connect_errno.") ".$mysqli->connect_error;
}
?>