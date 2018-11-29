<html>

	<head>
	
		<title>FFA Racing: Download</title>
		<meta charset="utf-8"></meta>
		<meta name="description" content="Jogo de corrida 3D"/>
		<link rel="stylesheet" type="text/css" href="Posicao.css"/>
		
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<link href="./css/bootstrap.min.css" rel="stylesheet"/>
		<script src="./js/jquery-3.3.1.min.js"></script>
		<script src="./js/bootstrap.js"></script>
		<div align="center">
			<header>
				<!--<h1>FFA Racing </h1>-->
				<div class="becker">
				<span>
				<img src="Img/Logo.png" width="1024" height="60" alt="Logo"/>
				</span>
				</div>
				<nav>
					<ul>
					
					<div class="form-group">
					
						<li><a href="Inicio.html"class="btn btn-primary">Início</a></li>
						<li><a href="Corred.html"class="btn btn-primary">Corredores</a></li>
						<li><a href="Circ.html"class="btn btn-primary">Circuitos</a></li>
						<li><a href="contat.php"class="btn btn-primary">Contato</a></li>
						<li><a href="download.php"class="btn btn-primary">Download</a></li>

					</div>
					
					</ul>
				</nav>
			</header>
		</div>
		
	</head>

	<body>
		<div id="header"></div>
		
		<div class="laterais">
		<div class="par2">	
			
			<p class="par3"><strong>Descrição do jogo para download</strong></br>FFA Racing é um jogo 3D disponibilizado para Windows 7, 8 e 10. Desenvolvido em Unity3D programado em C#. Esse jogo não é recomendável para menores de 12 anos, pois aborda crime e violência. FFA Racing não necessita de redes privadas ou acesso à internet.
			
			<div class="centro">
	
			<form action="DownloadController.php" method="post">
           <input type="submit" name="submit" value="Download File" /> 	<!--Ao clicar no bottão.. Executa o script da pagina downloadController.php-->
			</form>
		
		</div>
			</p>
		</div>
		<div class="par1">
			<img src="Img/Promo.png" align="left" width="300" alt="Promo"/>
			<p class="par3"><strong>Descrição empresa:</strong></br>A Dark Path é uma empresa de jogos digitais idealizada pelos respectivos alunos Elias Papp, Gabriel Nogueira e Pedro Henrique Ramos. Responsável pelo jogo: FFA Racing com o objetivo de ganhar reconhecimento e fazer um jogo de corrida cujo diferencial é o ambiente acadêmico inspirado na Fatec. 
			</p>
		</div>

		<div class="par2">
			
			<p class="par3"><strong>Termos de uso:</strong></br>Este jogo foi desenvolvido para fins acadêmicos e tanto a programação quanto a arte foram desenvolvidas pelos alunos autores do projeto ficando vetada a cópia não autorizada dos respectivos componentes utilizados para o jogo em outros meios tanto lucrativo quanto acadêmico.  
			</p>	
			
		</div>
			
			
		</div>
		
	
		
	</body>

</html>