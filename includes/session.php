<?php
if(session_start() !== PHP_SESSION_ACTIVE) session_start();
$logado = isset($_SESSION['session_id']) && session_id() == $_SESSION['session_id'];