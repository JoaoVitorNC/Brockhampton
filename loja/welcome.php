<html>
	<head>
		<title>Home</title>
		<link type="text/css" rel="stylesheet" href="css/estilo.css"/>
	</head>
	<body>
		<div id="container">
			<div id="banner">
				HOME
			</div> <!-- Fecha a div 'banner' -->
			
			<div id="menu">
				<?php
					include('menu.php');
				?>
			</div> <!-- Fecha a div 'menu '-->
			
			<div id="corpo">
				Cuerpo
				
				<?php	
					echo('<p>O echo mostra mensagens na tela.</p>');
					echo('<p>O echo manipula comandos/instruções HTML, por exemplo a tag BR.</p>');
					echo('<p>Exemplo de uso da tag BR para<br>quebra de linha.</p>');
				?>
				<br>
			</div> <!-- Fecha a div 'corpo' -->
			
			<div id="rodape">
				Rodape
			</div> <!-- Fecha a div 'rodape' -->
		</div> <!-- Fecha a div 'container' -->
	</body>
</html>