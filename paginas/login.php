<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">	
		<meta http-equiv="X-UA-Compatible" content="IE-edge">	
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="./../css/style.css">
		<title>Login</title>
	</head>
	<body>
		<div class="container">
            <h1>Login</h1>
            <?php include_once("./html/menu.php");?>

            <form action="../forms/logar.php" method="post">
                <p>
                    Usuario:<br>
                    <input type="text" name="usuario">
                </p>
                <p>
                    Senha:<br>
                    <input type="text" name="senha">
                </p>
                <p>
                    <input type="submit" name="Entrar">
                </p>
            </form>
        </div>
	</body>
</html>