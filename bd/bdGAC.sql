create database gac;
use gac;
CREATE TABLE if not exists Categoria (
  idCategoria INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Nome VARCHAR(200) NULL,
  Limite_categoria DOUBLE NULL,
  Limite_atividade DOUBLE NULL,
  PRIMARY KEY(idCategoria)
) Engine=INNODB;

CREATE TABLE IF NOT EXISTS Usuario (
  idUsuario INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Login VARCHAR(100) NULL,
  Senha VARCHAR(50) NULL,
  Tipo_Usuario VARCHAR(50) NULL,
  PRIMARY KEY(idUsuario),
  UNIQUE INDEX Unique_key(Login)
) ENGINE=INNODB;

CREATE TABLE IF NOT EXISTS Coordenador (
  idCoordenador INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Nome VARCHAR(150) NULL,
  Email VARCHAR(150) NULL,
  idUsuario INTEGER UNSIGNED NULL,
  PRIMARY KEY(idCoordenador),
  INDEX Coordenador_FKIndex1(idUsuario),
  FOREIGN KEY(idUsuario)
    REFERENCES Usuario(idUsuario)
    ON DELETE CASCADE
    ON UPDATE CASCADE
    

) ENGINE=INNODB;

CREATE TABLE IF NOT EXISTS Administrador (
  idAdministrador INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Nome VARCHAR(150) NULL,
  Email VARCHAR(150) NULL,
  idUsuario INTEGER UNSIGNED NULL,
  PRIMARY KEY(idAdministrador),
  INDEX Administrador_FKIndex1(idUsuario),
  FOREIGN KEY(idUsuario)
    REFERENCES Usuario(idUsuario)
    ON DELETE CASCADE
    ON UPDATE CASCADE
    

) ENGINE=INNODB;

CREATE TABLE IF NOT EXISTS Curso (
  idCurso INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  idCoordenador INTEGER UNSIGNED NOT NULL,
  Nome VARCHAR(150) NULL,
  PRIMARY KEY(idCurso),
  INDEX Curso_FKIndex1(idCoordenador),
  FOREIGN KEY(idCoordenador)
    REFERENCES Coordenador(idCoordenador)
    on delete cascade
    on update cascade
) ENGINE=INNODB;

CREATE TABLE IF NOT EXISTS Aluno (
  RA INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  idCurso INTEGER UNSIGNED NOT NULL,
  idUsuario INTEGER UNSIGNED NOT NULL,
  Nome VARCHAR(150) NULL,
  Email VARCHAR(150) NULL,
  PRIMARY KEY(RA),
  INDEX Aluno_FKIndex1(idUsuario),
  INDEX Aluno_FKIndex2(idCurso),
  FOREIGN KEY(idUsuario)
    REFERENCES Usuario(idUsuario)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  FOREIGN KEY(idCurso)
    REFERENCES Curso(idCurso)
     ON DELETE CASCADE
    ON UPDATE CASCADE

) ENGINE=INNODB;

CREATE TABLE IF NOT EXISTS Atividade_Complementar (
  idAtividade INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  idCategoria INTEGER UNSIGNED NOT NULL,
  Aluno_RA INTEGER UNSIGNED NOT NULL,
  titulo VARCHAR(150) NULL,
  dataCadastro DATE NULL,
  dataRealizacao DATE NULL,
  CH DOUBLE NULL,
  nome_arquivo VARCHAR(150) NULL,
  status_ac VARCHAR(20) NULL,
  descricao VARCHAR(400) NULL,
  comentario VARCHAR(400) NULL,
  PRIMARY KEY(idAtividade),
  INDEX Atividade_Complementar_FKIndex1(Aluno_RA),
  INDEX Atividade_Complementar_FKIndex2(idCategoria),
  FOREIGN KEY(Aluno_RA)
    REFERENCES Aluno(RA) 
     ON DELETE CASCADE
    ON UPDATE CASCADE ,
  FOREIGN KEY(idCategoria)
    REFERENCES Categoria(idCategoria)
     ON DELETE CASCADE
    ON UPDATE CASCADE
) ENGINE=INNODB;

CREATE USER gac@localhost IDENTIFIED BY '';
GRANT SELECT,INSERT,UPDATE,DELETE,EXECUTE ON gac.* TO gac@localhost;