<?php 
session_start();
session_unset();
session_destroy();
header('Location: http://192.168.40.25/Projeto-Intranet/index.php')