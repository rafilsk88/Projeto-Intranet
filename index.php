<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<meta name="description" content="A sidebar menu as seen on the Google Nexus 7 website" />
	<meta name="keywords" content="google nexus 7 menu, css transitions, sidebar, side menu, slide out menu" />
	<meta name="author" content="Codrops" />
	<link rel="shortcut icon" href="../favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<link rel="stylesheet" type="text/css" href="css/component.css" />
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/estilo.css">
    <script src="js/modernizr.custom.js"></script>
    <title>Elosaude</title>
</head>
<body>
    <header class="cabecalho">
        <h1>ELOSAÚDE</h1>
        <h2>Intranet</h2>
    </header>
    <main class="principal">
    <div class="container">
			<ul id="gn-menu" class="gn-menu-main">
				<li class="gn-trigger">
					<a class="gn-icon gn-icon-menu"><span>Menu</span></a>
					<nav class="gn-menu-wrapper">
						<div class="gn-scroller">
							<ul class="gn-menu">
								<li class="gn-search-item">
									<input placeholder="Search" type="search" class="gn-search">
									<a class="gn-icon gn-icon-search"><span>Search</span></a>
								</li>
								<li>
									<a class="gn-icon gn-icon-download">Downloads</a>
									<ul class="gn-submenu">
										<li><a class="gn-icon gn-icon-illustrator">Vector Illustrations</a></li>
										<li><a class="gn-icon gn-icon-photoshop">Photoshop files</a></li>
									</ul>
								</li>
								<li><a class="gn-icon gn-icon-cog">Settings</a></li>
								<li><a class="gn-icon gn-icon-help">Help</a></li>
								<li>
									<a class="gn-icon gn-icon-archive">Archives</a>
									<ul class="gn-submenu">
										<li><a class="gn-icon gn-icon-article">Articles</a></li>
										<li><a class="gn-icon gn-icon-pictures">Images</a></li>
										<li><a class="gn-icon gn-icon-videos">Videos</a></li>
									</ul>
								</li>
							</ul>
						</div><!-- /gn-scroller -->
					</nav>
				</li>
				<li><a href="http://tympanus.net/codrops">Codrops</a></li>
				<li><a class="codrops-icon codrops-icon-prev" href="http://tympanus.net/Development/HeaderEffects/"><span>Previous Demo</span></a></li>
				<li><a class="codrops-icon codrops-icon-drop" href="http://tympanus.net/codrops/?p=16030"><span>Back to the Codrops Article</span></a></li>
			</ul>
        </div><!-- /container -->
		<script src="js/classie.js"></script>
		<script src="js/gnmenu.js"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo verde">
                    <h3>Elosaude</h3>
                    <ul>
                        <li>
                        <a href="exercicio.php?dir=elosaude&file=acordo_coletivo">Acordo Coletivo Vigente</a>
                        </li>
                        <li>
                        <a href="exercicio.php?dir=elosaude&file=elosaude">Elosaude</a>
                        </li>
                        <li>
                        <a href="exercicio.php?dir=elosaude&file=estatuto_social">Estatuto Social</a>
                        </li>
                        <li>
                        <a href="exercicio.php?dir=elosaude&file=organograma">Organograma</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </main>
    <footer class="rodape">
        ELOSAÚDE © Copyright <?= date('Y'); ?>
    </footer>
</body>
</html>