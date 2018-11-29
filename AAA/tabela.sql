/*É o repositório de dados em sql que servirá como modelo(base) da tabela que será visualizada em contat*/

create database tabela; 



/*É criada um novo banco de dados (db )chamado tabela que terá uma table(contat)
 com os parametros id,nome,personagens e gostou cada um com seu tipo de dados (int,char) 
 após criar o bd e a table é selecionada a tabela contat onde serão inseridos os valores correspondentes ao seu tipo.
 As tabelas são enviadas para o servidor e atualizadas na página  */
use tabela;
create table contat(
	id int,
	nome char(100),
	personagens char(15),
	gostou char(1)
);
show tables;
desc contat;
SELECT * FROM contat;
INSERT INTO contat (id, nome, personagens, gostou) VALUES (1, 'Gabriel', 'Rafael', 'S');