--Para mudar o tipo da data
--Primeiro verifique qual formato est√°
--SHOW DATESTYLE;
--Depois use um dos comandos abaixo
--ALTER DATABASE nomedabase SET datestyle TO SQL, DMY;
--ou
-- ALTER DATABASE nomedabase SET datestyle TO ISO, DMY;
--Isso deixar√° no formato "Dia/M√™s/Ano"

--Cadastro de tipos de log
insert into tipodelog (idacao, nome) values ('1', 'cadastro de usu·rio');
insert into tipodelog (idacao, nome) values ('2', 'promoÁ„o de usu·rio');
insert into tipodelog (idacao, nome) values ('3', 'exclus„o de usu·rio');
insert into tipodelog (idacao, nome) values ('4', 'banimento de usu·rio');
insert into tipodelog (idacao, nome) values ('5', 'submiss„o de quest„o');
insert into tipodelog (idacao, nome) values ('6', 'realizaÁ„o de simulado');
insert into tipodelog (idacao, nome) values ('7', 'cadastro de prova');

--Cadastro de usu√°rios
insert into usuarios (nome, sobrenome, foto, email, senha, privilegio, dataplano) values ('Marcos Vinicius', 'Cruz Lima', 'null', 'marcosviniciuscl@outlook.com', '$6$rounds=5000$ABCDEFGHIJKLMNOP$XsgN.YoH37CoXellu8iIduHzehiDh/pHSGVBIyFsiedaGvWab3vtYBWUWXhuDbYvAJev5YQCYQ0gFFLax9vSa/', 'N', '11/12/2017');
insert into usuarios (nome, sobrenome, foto, email, senha, privilegio, dataplano) values ('Itamar', 'Oliveira Maximo', 'null', 'itamar@gmail.com', '$6$rounds=5000$ABCDEFGHIJKLMNOP$XsgN.YoH37CoXellu8iIduHzehiDh/pHSGVBIyFsiedaGvWab3vtYBWUWXhuDbYvAJev5YQCYQ0gFFLax9vSa/', 'N', '07/11/2017');
insert into usuarios (nome, sobrenome, foto, email, senha, privilegio, dataplano) values ('Giovana', 'Forninho da Silva', 'null', 'giovana@outlook.com', '$6$rounds=5000$ABCDEFGHIJKLMNOP$XsgN.YoH37CoXellu8iIduHzehiDh/pHSGVBIyFsiedaGvWab3vtYBWUWXhuDbYvAJev5YQCYQ0gFFLax9vSa/', 'N', '10/12/2017');
insert into usuarios (nome, sobrenome, foto, email, senha, privilegio, dataplano) values ('Lucas', 'Fada Cardoso', 'null', 'lucas@yahoo.com', '$6$rounds=5000$ABCDEFGHIJKLMNOP$XsgN.YoH37CoXellu8iIduHzehiDh/pHSGVBIyFsiedaGvWab3vtYBWUWXhuDbYvAJev5YQCYQ0gFFLax9vSa/', 'N', '11/07/2017');
insert into usuarios (idusuario, nome, sobrenome, foto, email, senha, privilegio, dataplano) values ('13','Ze', 'de Ferro', 'null', 'zedeferro@outlook.com', '$6$rounds=5000$ABCDEFGHIJKLMNOP$XsgN.YoH37CoXellu8iIduHzehiDh/pHSGVBIyFsiedaGvWab3vtYBWUWXhuDbYvAJev5YQCYQ0gFFLax9vSa/', 'A', '11/12/2017');
insert into usuarios (nome, sobrenome, foto, email, senha, privilegio, dataplano) values ('Maria', 'de Ferro', 'null', 'mariaferro@outlook.com', '$6$rounds=5000$ABCDEFGHIJKLMNOP$XsgN.YoH37CoXellu8iIduHzehiDh/pHSGVBIyFsiedaGvWab3vtYBWUWXhuDbYvAJev5YQCYQ0gFFLax9vSa/', 'M', '11/12/2017');
insert into usuarios (nome, sobrenome, foto, email, senha, privilegio, dataplano) values ('FacoMerda', 'de Erro', 'null', 'facomerda@gmail.com', '$6$rounds=5000$ABCDEFGHIJKLMNOP$XsgN.YoH37CoXellu8iIduHzehiDh/pHSGVBIyFsiedaGvWab3vtYBWUWXhuDbYvAJev5YQCYQ0gFFLax9vSa/', 'B', '11/12/2017');

--Cadastro de simulado
insert into simulado (idusuario, data_simulado, tempo, pontuacao, tipo) values ('1', '12/11/2017 12:35:60', '03:14:38', '734', '');
insert into simulado (idusuario, data_simulado, tempo, pontuacao, tipo) values ('2', '11/06/2017 15:06:21', '02:59:32', '653', '');
insert into simulado (idusuario, data_simulado, tempo, pontuacao, tipo) values ('3', '12/12/2017 07:18:49', '03:31:53', '832', '');
insert into simulado (idusuario, data_simulado, tempo, pontuacao, tipo) values ('4', '15/12/2017 17:39:13', '03:46:24', '767', '');
insert into simulado (idusuario, data_simulado, tempo, pontuacao, tipo) values ('4', '16/12/2017 20:51:36', '01:12:46', '322', '');
		
--Cadastro de prova
insert into prova (qtdquestoes, ano) values ('90', '2016');

--Cadastro de √Årea de Conhecimento
insert into areadeconhecimento (idarea, nome) values ('1', 'Ci√™ncias Humanas e suas Tecnologias');
insert into areadeconhecimento (idarea, nome) values ('2', 'Ci√™ncias da Natureza e suas Tecnologias');
insert into areadeconhecimento (idarea, nome) values ('3', 'Linguagens');
insert into areadeconhecimento (idarea, nome) values ('4', 'Matem√°tica e suas Tecnologias');