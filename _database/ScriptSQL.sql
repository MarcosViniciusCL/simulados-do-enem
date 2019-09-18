--Dropa o usuário administrador
--DROP ROLE administrador;

--Cria o usuário administrador
--CREATE ROLE administrador WITH LOGIN PASSWORD 'sosenemadmin' SUPERUSER CREATEDB;

--Cria o database
--CREATE DATABASE mi WITH OWNER = administrador ENCODING = 'UTF8' CONNECTION LIMIT = -1;

--Dropa as tabelas
--DROP schema public CASCADE;

--Cria as tabelas
--CREATE schema public;

CREATE TABLE  usuarios (
  idusuario SERIAL NOT NULL,
  nome VARCHAR(100) NOT NULL,
  sobrenome VARCHAR(100),
  foto VARCHAR(100),
  email VARCHAR(100) NOT NULL UNIQUE,
  senha VARCHAR(120),
  privilegio VARCHAR(1) NOT NULL,
  dataplano DATE,
  PRIMARY KEY(idusuario)
) ;

CREATE TABLE simulado (
  idsimulado SERIAL,
  idusuario INTEGER NOT NULL,
  data_simulado DATE NOT NULL,
  tempo VARCHAR(8) NOT NULL,
  pontuacao INTEGER NOT NULL,
  tipo VARCHAR(1) NOT NULL,
  CONSTRAINT simulado_pkey PRIMARY KEY(idsimulado),
  CONSTRAINT simulado_fk FOREIGN KEY (idusuario)
    REFERENCES  usuarios(idusuario)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
    NOT DEFERRABLE
);

CREATE TABLE prova (
  idprova SERIAL,
  qtdquestoes INTEGER NOT NULL,
  ano INTEGER NOT NULL,
  CONSTRAINT prova_pkey PRIMARY KEY(idprova)
) ;

CREATE TABLE areadeconhecimento (
  idarea SERIAL,
  nome VARCHAR(50) NOT NULL,
  CONSTRAINT areadeconhecimento_pkey PRIMARY KEY(idarea)
) ;

CREATE TABLE questao (
  idquestao SERIAL,
  idusuario INTEGER,
  idprova INTEGER NOT NULL,
  idareaconhecimento INTEGER,
  enunciado TEXT NOT NULL,
  questaooficial VARCHAR(1) NOT NULL,
  respostaa TEXT,
  respostab TEXT,
  respostac TEXT,
  respostad TEXT,
  respostae TEXT,
  respostacorreta VARCHAR(1),
  CONSTRAINT questao_pkey PRIMARY KEY(idquestao),
  CONSTRAINT questao_fk FOREIGN KEY (idusuario)
    REFERENCES  usuarios(idusuario)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
    NOT DEFERRABLE,
  CONSTRAINT questao_fk1 FOREIGN KEY (idprova)
    REFERENCES  prova(idprova)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
    NOT DEFERRABLE,
  CONSTRAINT questao_fk2 FOREIGN KEY (idareaconhecimento)
    REFERENCES  areadeconhecimento(idarea)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
    NOT DEFERRABLE
) ;

CREATE TABLE  tablesimuladoquestao (
  idsimulado INTEGER NOT NULL,
  idquestao INTEGER NOT NULL,
  CONSTRAINT tablesimuladoquestao_fk FOREIGN KEY (idsimulado)
    REFERENCES  simulado(idsimulado)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
    NOT DEFERRABLE,
  CONSTRAINT tablesimuladoquestao_fk1 FOREIGN KEY (idquestao)
    REFERENCES  questao(idquestao)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
    NOT DEFERRABLE
) ;

CREATE TABLE  denunciaquestao (
  iddencuncia SERIAL,
  idusuario INTEGER NOT NULL,
  idquestao INTEGER NOT NULL,
  observacao VARCHAR(400),
  data DATE DEFAULT 'now'::text::date NOT NULL,
  CONSTRAINT denunciaquestao_pkey PRIMARY KEY(iddencuncia)
) ;

CREATE TABLE  relatorio (
  idrelatorio SERIAL,
  quantidadecadastrados INTEGER,
  quantidadeacessos INTEGER,
  quantidadedestivados INTEGER,
  quantidadeplanoscancelados INTEGER,
  data DATE DEFAULT 'now'::text::date,
  quantidadeplanosnovos INTEGER,
  CONSTRAINT relatorio_pkey PRIMARY KEY(idrelatorio)
);

CREATE TABLE tipodelog (
  idacao SERIAL NOT NULL,
  nome VARCHAR(30) NOT NULL,
  CONSTRAINT acao_pkey PRIMARY KEY(idacao)
);

 
CREATE TABLE logsistema (
  idhistorico SERIAL,
  idusuario INTEGER NOT NULL,
  descricao VARCHAR(400) NOT NULL,
  data DATE DEFAULT 'now'::text::date NOT NULL,
  idacao INTEGER NOT NULL,
  CONSTRAINT historico_pkey PRIMARY KEY(idhistorico),
  CONSTRAINT historico_fk FOREIGN KEY (idusuario)
    REFERENCES public.usuarios(idusuario)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
    NOT DEFERRABLE,
  CONSTRAINT logsistema_fk FOREIGN KEY (idacao)
    REFERENCES public.tipodelog(idacao)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
    NOT DEFERRABLE
);

CREATE TABLE  usuariorelatorio (
  idusuario INTEGER NOT NULL,
  idrelatorio INTEGER NOT NULL,
  CONSTRAINT usuariorelatorio_fk FOREIGN KEY (idusuario)
    REFERENCES  usuarios(idusuario)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
    NOT DEFERRABLE,
  CONSTRAINT usuariorelatorio_fk1 FOREIGN KEY (idrelatorio)
    REFERENCES  relatorio(idrelatorio)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
    NOT DEFERRABLE
);


