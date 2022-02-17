# MySQL dump 8.14
#
# Host: localhost    Database: apuracao
#--------------------------------------------------------
# Server version	3.23.41

#
# Table structure for table 'partidos'
#

CREATE TABLE partidos (
  codigo int(2) NOT NULL auto_increment,
  nome varchar(250) NOT NULL default '',
  sigla varchar(50) NOT NULL default '',
  cPrefeito varchar(250) NOT NULL default '',
  cVice varchar(250) NOT NULL default '',
  votosPrefeito bigint(5) NOT NULL default '0',
  votosVereador bigint(5) NOT NULL default '0',
  KEY codigo (codigo)
) TYPE=MyISAM;

#
# Dumping data for table 'partidos'
#

INSERT INTO partidos VALUES (1,'União Por Getúlio Vargas','UGV','Natalício Botolli','Flávio Dalla Costa',0,0);
INSERT INTO partidos VALUES (2,'Partido Liberal','PL','Marcelo Figueiredo','Paulo Prauze',0,0);
INSERT INTO partidos VALUES (3,'Partido dos Trabalhadores','PT','Dino Giaretta','Paulo dos Santos',0,0);
INSERT INTO partidos VALUES (4,'Trabalho e Otimismo','TO','Pedro Paulo Prezotto','Pedro Tomelero',0,0);
INSERT INTO partidos VALUES (5,'Votos em Branco','Branco','Branco','Preto',0,0);
INSERT INTO partidos VALUES (6,'Nulos','Nulos','Nulos','Nulos',0,0);
INSERT INTO partidos VALUES (7,'Abstencoes','Abstencoes','Abstencoes','Abstencoes',0,0);

#
# Table structure for table 'urnas'
#

CREATE TABLE urnas (
  codigo int(3) NOT NULL auto_increment,
  numero int(3) NOT NULL default '0',
  votosC1 int(4) NOT NULL default '0',
  votosC2 int(4) NOT NULL default '0',
  votosC3 int(4) NOT NULL default '0',
  votosC4 int(4) NOT NULL default '0',
  branco int(4) NOT NULL default '0',
  nulos int(4) NOT NULL default '0',
  abstencoes int(4) NOT NULL default '0',
  KEY codigo (codigo)
) TYPE=MyISAM;

#
# Dumping data for table 'urnas'
#


#
# Table structure for table 'vereadores'
#

CREATE TABLE vereadores (
  codigo int(3) NOT NULL auto_increment,
  nome varchar(250) NOT NULL default '',
  numero bigint(5) NOT NULL default '0',
  partido int(4) NOT NULL default '0',
  qtdVotos bigint(5) NOT NULL default '0',
  KEY codigo (codigo)
) TYPE=MyISAM;

#
# Dumping data for table 'vereadores'
#

INSERT INTO vereadores VALUES (1,'Adriel Vanderlei Ferreira',15151,1,0);
INSERT INTO vereadores VALUES (2,'Aldino Beledelli',15550,1,0);
INSERT INTO vereadores VALUES (3,'Amelia Pelissari',22300,2,0);
INSERT INTO vereadores VALUES (4,'Amilton Jose Lazzari',15150,1,0);
INSERT INTO vereadores VALUES (5,'Aquiles Pessoa da Silva',11688,1,0);
INSERT INTO vereadores VALUES (6,'Cleonice Forlin',15555,1,0);
INSERT INTO vereadores VALUES (7,'Darcy João de Marchy',14666,4,0);
INSERT INTO vereadores VALUES (8,'Delfino Gomes de Araujo',22500,2,0);
INSERT INTO vereadores VALUES (9,'Domingo Borges de Oliveira',11111,1,0);
INSERT INTO vereadores VALUES (10,'Eloi Nardi',11611,1,0);
INSERT INTO vereadores VALUES (11,'Estanislau Polinski',14567,4,0);
INSERT INTO vereadores VALUES (12,'Flávio Roberto Noskoski',13113,3,0);
INSERT INTO vereadores VALUES (13,'Gelson Luiz Seminotti',13013,3,0);
INSERT INTO vereadores VALUES (14,'Ilario Antonio Bele',12610,1,0);
INSERT INTO vereadores VALUES (15,'Ilson da Silva',22777,2,0);
INSERT INTO vereadores VALUES (16,'Ione Pereira',15123,1,0);
INSERT INTO vereadores VALUES (17,'Irineu Afonso Wendt de Queiroz',13121,3,0);
INSERT INTO vereadores VALUES (18,'Jacira Simioni da Silva',15234,1,0);
INSERT INTO vereadores VALUES (19,'José Rui Lorenzi',13333,3,0);
INSERT INTO vereadores VALUES (20,'Liberato Perin',13413,3,0);
INSERT INTO vereadores VALUES (21,'Lidio Bublitz',22222,2,0);
INSERT INTO vereadores VALUES (22,'Luiz Antonio do Prado',11690,1,0);
INSERT INTO vereadores VALUES (23,'Luiz Claudio Rossi Nunes',11123,1,0);
INSERT INTO vereadores VALUES (24,'Maira Rosane Araújo Musso',14700,4,0);
INSERT INTO vereadores VALUES (25,'Maria Helena Pereira da Silva',14555,4,0);
INSERT INTO vereadores VALUES (26,'Marlene Salete Gostinski Zorzan',13666,3,0);
INSERT INTO vereadores VALUES (27,'Maurício Cadorin',25500,4,0);
INSERT INTO vereadores VALUES (28,'Mauro Gregio',14777,4,0);
INSERT INTO vereadores VALUES (29,'Nauber Feil',15015,1,0);
INSERT INTO vereadores VALUES (30,'Noé Pereira de Almeida',13888,3,0);
INSERT INTO vereadores VALUES (31,'Ocimara Cristina Tessaro Blaszak',13713,3,0);
INSERT INTO vereadores VALUES (32,'Olinda Janete Lopes Machado',11234,1,0);
INSERT INTO vereadores VALUES (33,'Osmar José Morandini',11602,1,0);
INSERT INTO vereadores VALUES (34,'Paulo Prause',22001,2,0);
INSERT INTO vereadores VALUES (35,'Roberto Thomaz',13131,3,0);
INSERT INTO vereadores VALUES (36,'Ronaldo Delfino',11222,1,0);
INSERT INTO vereadores VALUES (37,'Roque Gaetano Lazzari',13123,3,0);
INSERT INTO vereadores VALUES (38,'Sonia Maria da Silva',45000,4,0);
INSERT INTO vereadores VALUES (39,'Vanderlei José Lemos',45045,4,0);
INSERT INTO vereadores VALUES (40,'Vilmar Antônio Soccol',14888,4,0);
INSERT INTO vereadores VALUES (41,'Vilson Barbizan',14444,4,0);
INSERT INTO vereadores VALUES (42,'Vilson Doro',13313,3,0);
INSERT INTO vereadores VALUES (43,'Vitacir Knerek',14000,4,0);
INSERT INTO vereadores VALUES (44,'Volmar Fabro',25555,4,0);
INSERT INTO vereadores VALUES (45,'Votos em Branco',0,5,0);
INSERT INTO vereadores VALUES (46,'Votos Nulos',0,6,0);
INSERT INTO vereadores VALUES (47,'Abstensoes',0,7,0);

#
# Table structure for table 'vereadores_urnas'
#

CREATE TABLE vereadores_urnas (
  codigo int(4) NOT NULL auto_increment,
  secao int(3) NOT NULL default '0',
  vereador int(3) NOT NULL default '0',
  qtdVotos int(4) NOT NULL default '0',
  KEY codigo (codigo),
  KEY codigo_2 (codigo)
) TYPE=MyISAM;

#
# Dumping data for table 'vereadores_urnas'
#


