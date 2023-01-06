<!DOCTYPE html>
<html lang="pt-br">
	<head>
	<meta charset="UTF-8">		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" href="recursos\css\style_home.css">
		<title>Elosaude</title>
	</head>
	<body onresize="mudouTamanho()">
		<header>
			<h1>Intranet</h1>
			<i id="burguer" class="material-icons" onclick="clickMenu()">menu</i>
			<menu id="itens">
				<ul>
					<li><a href="elosaude/elosaude.php">Elosaude</a></li>
					<li><a href="gni/gni.php">GNI</a></li>
					<li><a href="gestão_e_desenvolvimento_de_pessoas/gestão_e_desenvolvimento_de_pessoas.php">GDP</a></li>
					<li><a href="governança_risco_e_compliance/governança_risco_e_compliance.php">GRC</a></li>
					<li><a href="superintendente/superintendente.php">Superintendente</a></li>
					<li><a href="lgpd/lgpd.php">LGPD</a></li>
					<li><a href="workshops/workshops.php">Workshops</a></li>
					<li><a href="treinamentos/treinamentos.php">Treinamentos</a></li>
					<li><a href="comunicados/comunicados.php">Comunicados</a></li>
				</ul>
			</menu>
		</header>
		<main>
			<article>
				<h2>Testo do conteudo</h2>
				<p>Ao longo desse período mudanças ocorreram no universo das patrocinadoras. 
					Por ocasião da privatização de parte das atividades da Eletrosul (geração de energia) para o grupo Tractebel, 
					duas novas empresas ingressaram como patrocinadoras: a Tractebel Energia e a Previg Sociedade de Previdência Complementar.

					No início de 2010 um novo marco se estabeleceu. Motivado pelo desejo das quatro patrocinadoras de fortalecer o plano de 
					saúde de seus beneficiários, pelo dinamismo do mercado de saúde – sempre evoluindo e exigindo novas posturas das operadoras
					 – e, também, pelas alterações ocorridas na regulamentação do setor previdenciário, foi iniciado o processo de cisão que 
					 daria origem à ELOSAÚDE. A partir desse processo o setor de saúde ligado à Fundação Elos deixou de existir.

					Em fevereiro desse mesmo ano nascia, desta feita como organismo totalmente independente, a ELOSAÚDE – Associação 
					de Assistência à Saúde, instituição que trouxe atrás de si a maturidade de quem já nasceu praticamente maior de idade.

					A nova entidade, regida por estatuto próprio e por dispositivos legais específicos, foi constituída como associação civil, 
					sem fins lucrativos, voltada especialmente para operar planos de assistência à saúde; criada com a finalidade de atender 
					a um público específico e seleto: diretores, empregados, aposentados e pensionistas vinculados às patrocinadoras, 
					bem como seus respectivos dependentes elegíveis.</p>
			</article>
		</main>
		<script>

function mudouTamanho(){
				if (window.innerWidth >= 768){
					itens.style.display = 'block'
				} else {
					itens.style.display = 'none'
				}
			}

			function clickMenu(){
				if (itens.style.display == 'block'){
					itens.style.display = 'none'
				} else {
					itens.style.display = 'block'
				}
			}

			
		</script>
	
	</body>
</html>