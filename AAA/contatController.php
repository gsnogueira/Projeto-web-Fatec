	<?php /*? iniciado o php.. Esta pagina ser? o controlador que servira com intermidiador entre a tabela.sql e a pagina de web contat*/
	
	
	
		$db = new PDO('mysql:host=localhost;dbname=tabela;charset=utf8', 'root', ''); /*? criado um banco de dados(bd) e uma conex?o (pdo) entre o php e o sql */
			
		$nome = $_REQUEST['txtNome'];
/		$button = $_REQUEST['txtButton'];
		session_start();/*dentro dessa nova se??o(evento) estar?o o enviar(if) que por meio do $REQUEST solicita a entrada de dados
e atribui os valores digitados(bindvalue). Os valores s?o executados e contados(execute, rowcount)
Ap?s digitar os dados e clicar em enviar a se??o de mensagem imprime que o Seu contato esta salvo	
O pesquisar(else) seleciona e vai para a pagina de contat.php e faz pesquisa (where) e atribui??o (like) dos resultados ele prepara (stmt $db $sql)
 uma tabela com os valores atribuidos  executa, conta e imprime (echo) os resultados na pagina contat.php em forma de array(lista) */
		
		
		if ($button == "enviar") {
			$personagens = $_REQUEST['txtPersonagens'];
			$gostou = $_REQUEST['txtGostou'];

			$sql = "INSERT INTO contat (id, nome, personagens, gostou) ";
			$sql = $sql . " VALUES (:id, :nome, :personagens,:gostou)";
			$stmt = $db->prepare($sql);
			$stmt->bindValue(':id', 0, PDO::PARAM_INT);
			$stmt->bindValue(':nome', $nome, PDO::PARAM_STR);
			$stmt->bindValue(':personagens', $personagens, PDO::PARAM_STR);
			$stmt->bindValue(':gostou', $gostou, PDO::PARAM_STR);
			$stmt->execute();
			$result = $stmt->rowCount();
			$_SESSION['MENSAGEM'] = 'Seu Contato está salvo';
		} else if ($button == "pesquisar") {
			$sql = "SELECT * FROM contat WHERE nome like :nome";
			$stmt = $db->prepare($sql);
			$stmt->bindValue(':nome', '%' . $nome . '%', PDO::PARAM_STR);
			$stmt->execute();
			$result = $stmt->rowCount();
			echo "Foram encontrados $result contat";
			$listacontat = array();
			forEach( $stmt as $row ) {
				array_push($listacontat, $row);
			}
			$_SESSION['LISTA'] = $listacontat;
		}
		header('Location: ./contat.php'); 
?>
