-- extensao.pessoa definition

CREATE TABLE `pessoa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `cpf` varchar(20) DEFAULT NULL,
  `rg` varchar(20) DEFAULT NULL,
  `data_nascimento` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4;

-- extensao.produto definition

CREATE TABLE `produto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) DEFAULT NULL,
  `peso` float DEFAULT NULL,
  `sku` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO extensao.pessoa (nome,cpf,rg,data_nascimento) VALUES 
('Renan Tescaro','78409784360','350709385','1996-06-06 00:00:00.000')
,('Ana Maria Braga','55537515512','270674305','1910-03-12 00:00:00.000')
,('Isabela Ester Valentina','96804953452','108758606','1987-04-09 00:00:00.000')
,('Nicolas Severino Enzo','73929685647','146365884','1980-11-16 00:00:00.000')
,('Catarina Louise Jennifer','77696086278','213036678','1954-05-26 00:00:00.000')
,('Marcos Sebastião Caldeira','85370819734','212635347','1948-08-27 00:00:00.000')
,('Ayla Esther Drumond','07144481258','217900367','1969-12-22 00:00:00.000')
,('César Yago Eduardo','75717543727','315106852','1982-03-22 00:00:00.000')
,('Emilly Tereza Emanuelly','83705049062','363965701','1971-02-23 00:00:00.000')
,('Rafael Pedro Henrique','02021726789','109843915','1988-03-05 00:00:00.000')
;
INSERT INTO extensao.pessoa (nome,cpf,rg,data_nascimento) VALUES 
('Benedito Enrico','48183907806','183749212','1996-01-20 00:00:00.000')
,('Geraldo Luiz Leandro','73283175233','159288411','1988-04-27 00:00:00.000')
,('Thomas Anderson da Rosa','96095927838','200387352','1974-10-27 00:00:00.000')
,('Kevin Elias Gonçalves','15953478950','184372148','1986-10-22 00:00:00.000')
,('Francisco Noah Caldeira','25398432397','276128321','1987-09-09 00:00:00.000')
,('Luiz Iago Monteiro','28373455124','165205507','1993-09-17 00:00:00.000')
,('Renata Débora da Mota','06558092794','212723388','1974-12-24 00:00:00.000')
,('Andreia Isabel Mirella','66505200207','201706519','1999-01-06 00:00:00.000')
,('Mariane Lopes Vicente','26112826259','169692061','2004-10-30 00:00:00.000')
,('Márcio Thales Lucca','77898196317','498134246','1998-11-02 00:00:00.000')
;
INSERT INTO extensao.pessoa (nome,cpf,rg,data_nascimento) VALUES 
('Heloise Kamilly Allana','03330749121','459284162','2010-01-30 00:00:00.000')
,('Julio Guilherme Silveira','55486023227','282084721','1996-01-09 00:00:00.000')
;

INSERT INTO extensao.produto (descricao,peso,sku) VALUES 
('ar condicionado',10.5,'6237467283')
,('purificador de ar',5.0999999,'53465567')
;