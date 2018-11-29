<html> 

	<head> 
	<!--<h1>Esta página servirá como layout para as informações. Ela é responsavel pela formatação visual.. No modelo de mvc ela é o view </h1>-->
	
		<title>FFA Racing: Contato</title>
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
	
	<img src="Img/Contato.png" align="center" width="900"  alt="Contato"/>
		
	<div class="par3">
	
		
		<?php /*É iniciada uma seção que irá imprimir tanto as mensagens quanto 
		a atualização dos dados em forma de lista*/
			session_start();
			if (isset($_SESSION['MENSAGEM'])) {
					echo $_SESSION['MENSAGEM'];
					unset($_SESSION['MENSAGEM']);
			}
			$lista = array();
			if (isset($_SESSION['LISTA'])) {
				$lista = $_SESSION['LISTA'];
			}
		 ?>
			
		<form action="./contatController.php">
			<div class="container">
				<div class="form-group">
					<label for="txtNome">Digite o seu Nome:</label>
					<input id="txtNome" name="txtNome" type="text" class="form-control"/>
				</div>

				<div class="form-group">
					<label for="txtPersonagens">Qual foi o seu personagem preferido?:</label>
					<select id="txtPersonagens" name="txtPersonagens" class="form-control">
						<option disabled selected></option>
						<option>Rafael</option>
						<option>Alice</option>
						<option>Bruce</option>
						<option>Victor</option>
					</select>
				</div>

				
				<div class="form-group">
					<label>Você Gostou do nosso jogo?</label>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio"
							   name="txtGostou" id="txtGostouSim" value="sim">
						<label class="form-check-label" for="txtGostouSim">Sim</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio"
							   name="txtGostou" id="txtGostouNao" value="nao" checked>
						<label class="form-check-label" for="txtGostouNao">Não</label>
					</div>
				</div>
				<div class="form-group">
					<button type="submit" name="txtButton" value="enviar" class="btn">Enviar</button>
					<button type="submit" name="txtButton" value="pesquisar" class="btn">Pesquisar</button>
					
				</div>
			</div>
			<div class="container">
				<table class="table table-striped table-hover">
					<thead>
						<tr class="centro">
							<th>Nome</th>
							<th>Personagem</th>
							<th>Gostou</th>
						</tr>
					</thead>
					
					<tbody>
						<?php /*Aqui os dados estarao sendo atualizados na tabela("lista")*/
							foreach ($lista as $linha) {
						?>
						<tr class="centro">
							<td><?=$linha['nome']?></td>
							<td><?=$linha['personagens']?></td>
							<td><?=$linha['gostou']?></td>
						</tr>
						<?php
							}
						?>
					</tbody>

				</table>
			</div>
		</div>	
		</form>
	</body>

</html>
