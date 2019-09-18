--Para mudar o tipo da data
--Primeiro verifique qual formato está
--SHOW DATESTYLE;
--Depois use um dos comandos abaixo
--ALTER DATABASE nomedabase SET datestyle TO SQL, DMY;
--ou
-- ALTER DATABASE nomedabase SET datestyle TO ISO, DMY;
--Isso deixará no formato "Dia/Mês/Ano"

--Cadastro de usuários
insert into usuarios (nome, sobrenome, foto, email, senha, privilegio, dataplano) values ('Marcos Vinicius', 'Cruz Lima', 'null', 'marcosvinicius@outlook.com', '$6$rounds=5000$ABCDEFGHIJKLMNOP$XsgN.YoH37CoXellu8iIduHzehiDh/pHSGVBIyFsiedaGvWab3vtYBWUWXhuDbYvAJev5YQCYQ0gFFLax9vSa/', 'N', '11/12/2017');
insert into usuarios (nome, sobrenome, foto, email, senha, privilegio, dataplano) values ('Itamar', 'Oliveira Maximo', 'null', 'itamar@gmail.com', '$6$rounds=5000$ABCDEFGHIJKLMNOP$XsgN.YoH37CoXellu8iIduHzehiDh/pHSGVBIyFsiedaGvWab3vtYBWUWXhuDbYvAJev5YQCYQ0gFFLax9vSa/', 'N', '07/11/2017');
insert into usuarios (nome, sobrenome, foto, email, senha, privilegio, dataplano) values ('Giovana', 'Forninho da Silva', 'null', 'giovana@outlook.com', '$6$rounds=5000$ABCDEFGHIJKLMNOP$XsgN.YoH37CoXellu8iIduHzehiDh/pHSGVBIyFsiedaGvWab3vtYBWUWXhuDbYvAJev5YQCYQ0gFFLax9vSa/', 'N', '10/12/2017');
insert into usuarios (nome, sobrenome, foto, email, senha, privilegio, dataplano) values ('Lucas', 'Fada Cardoso', 'null', 'lucas@yahoo.com', '$6$rounds=5000$ABCDEFGHIJKLMNOP$XsgN.YoH37CoXellu8iIduHzehiDh/pHSGVBIyFsiedaGvWab3vtYBWUWXhuDbYvAJev5YQCYQ0gFFLax9vSa/', 'N', '11/07/2017');

--Cadastro de simulado
insert into simulado (idsimulado, idusuario, data_simulado, tempo, pontuacao, tipo) values ('1','14', '12/11/2017', '03:14:38', '734', '');
insert into simulado (idsimulado, idusuario, data_simulado, tempo, pontuacao, tipo) values ('2','13', '11/06/2017', '02:59:32', '653', '');
insert into simulado (idsimulado, idusuario, data_simulado, tempo, pontuacao, tipo) values ('3','15', '12/12/2017', '03:31:53', '832', '');
insert into simulado (idsimulado, idusuario, data_simulado, tempo, pontuacao, tipo) values ('4','16', '15/12/2017', '03:46:24', '767', '');
insert into simulado (idsimulado, idusuario, data_simulado, tempo, pontuacao, tipo) values ('5','13', '16/12/2017', '01:12:46', '322', '');
		
--Cadastro de prova
insert into prova (idprova, qtdquestoes, ano) values ('1','90', '2016');
insert into prova (idprova, qtdquestoes, ano) values ('2','90', '2015');
insert into prova (idprova, qtdquestoes, ano) values ('3','90', '2014');
insert into prova (idprova, qtdquestoes, ano) values ('4','90', '2013');

--Cadastro de Área de Conhecimento
insert into areadeconhecimento (idarea, nome) values ('1', 'Ciências Humanas e suas Tecnologias');
insert into areadeconhecimento (idarea, nome) values ('2', 'Ciências da Natureza e suas Tecnologias');
insert into areadeconhecimento (idarea, nome) values ('3', 'Linguagens');
insert into areadeconhecimento (idarea, nome) values ('4', 'Matemática e suas Tecnologias');

--Cadastro de Relatório
insert into relatorio (quantidadecadastrados,quantidadeacessos,quantidadedestivados,quantidadeplanoscancelados,quantidadeplanosnovos) values('30','40','20','5','3');


--Cadastro de Histórico
insert into logsistema (idusuario,descricao,idacao) values ('1','fez alguma coisa pq ele é top','1');
insert into logsistema (idusuario,descricao,idacao) values ('2','fez alguma coisa pq ele é top','2');
insert into logsistema (idusuario,descricao,idacao) values ('3','fez alguma coisa pq ele é top','3');
insert into logsistema (idusuario,descricao,idacao) values ('1','fez alguma coisa pq ele é top','4');
insert into logsistema (idusuario,descricao,idacao) values ('2','fez alguma coisa pq ele é top','5');
insert into logsistema (idusuario,descricao,idacao) values ('3','fez alguma coisa pq ele é top','6');

-- Cadastro de Relatorio

insert into usuariorelatorio (idusuario, idrelatorio) values ('1','1');

--Cadastro Denuncia de Questão
insert into denunciaquestao (idusuario,idquestao,observacao) values ('1','2','Muito difícil');
insert into denunciaquestao (idusuario,idquestao,observacao) values ('2','3','Muito Fácil');

--Cadastro Feedback
insert into feedback (idusuario,descricao,titulo) values('1','Adorei o sistema','Muito top');
insert into feedback (idusuario,descricao,titulo) values('2','Odiei o Sistema','Muito ruim');
