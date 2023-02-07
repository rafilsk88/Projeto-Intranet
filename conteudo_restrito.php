<?php
$logged = $_SESSION['logged'] ?? NULL;

if(!$logged) die('Conteudo restrito, apenas para colaboradores da ELOSAUDE');
?>

<p>
    <?php
    echo "Olá {$_SESSION['email']}";
    ?>

</p>