use gac;
/*
Procedure para efetuar login no sistema
Nome:proc_Logar
Entrada: login e senha
Saída
	Aluno:nome,ra, tipo usuario
	Coordenador:nome, id, tipo usuario
	Administrador: nome,id, tipo usuario
*/
DELIMITER $$

DROP PROCEDURE IF EXISTS proc_Logar$$

CREATE
    PROCEDURE `proc_Logar`( login_u VARCHAR(100), senha_u VARCHAR(50) )

    BEGIN

	DECLARE idreturn INT;
	DECLARE tpreturn VARCHAR(50);
	
	SELECT idUsuario,tipo_usuario 
	FROM usuario WHERE login=login_u AND senha=senha_u 
	INTO idreturn,tpreturn;
	
	IF (tpreturn='Aluno') THEN
		 SELECT nome, ra as id,tpreturn AS  tipo_usuario FROM aluno WHERE aluno.idUsuario=idreturn;
	ELSEIF(tpreturn='Coordenador') THEN
		 SELECT nome,idCoordenador as id, tpreturn AS tipo_usuario FROM coordenador WHERE coordenador.idUsuario=idreturn;
	ELSE 
		SELECT nome,idAdministrador as id, tpreturn  AS tipo_usuario FROM administrador WHERE administrador.idUsuario=idreturn;	
	END IF;
	
	
	
    END$$

DELIMITER ;
/*
Procedure para verificar a disponibilidade de usuário
Nome:proc_verificaDisponibilidade
Entrada: login.
Saida:login;

*/
DELIMITER $$

DROP PROCEDURE IF EXISTS proc_verificaDisponibilidade$$

CREATE
    PROCEDURE `proc_verificaDisponibilidade`( login_u VARCHAR(100))
    BEGIN
	SELECT login 
	FROM usuario WHERE login=login_u; 
    END$$

DELIMITER ;

/*
Procedure para Alterar usuários
Nome:proc_alterarUsuario
Entrada: id, email, nome, senha
Saida:Não tem;
*/

DELIMITER $$

DROP PROCEDURE IF EXISTS proc_alterarUsuario$$

CREATE
    PROCEDURE proc_alterarUsuario(user_id INT, user_email VARCHAR(150), user_name VARCHAR(150), senha_usuario VARCHAR(50))
    BEGIN
	DECLARE user_type VARCHAR(20);
	SELECT Tipo_Usuario FROM usuario WHERE idUsuario=user_id INTO user_type;
	
	IF(user_type="Administrador") THEN	
		UPDATE usuario SET Tipo_Usuario=user_type,senha=senha_usuario
		WHERE`idUsuario`=user_id;
		
		UPDATE 	administrador SET nome=user_name,email=user_email
		WHERE`idUsuario`=user_id;
		
	ELSEIF(user_type="Aluno") THEN
		UPDATE usuario SET Tipo_Usuario=user_type,senha=senha_usuario
		WHERE`idUsuario`=user_id;
		
		UPDATE 	aluno SET nome=user_name,email=user_email
		WHERE`idUsuario`=user_id;

	ELSEIF(user_type="Coordenador") THEN
		UPDATE usuario SET Tipo_Usuario=user_type,senha=senha_usuario
		WHERE`idUsuario`=user_id;
		
		UPDATE 	coordenador SET nome=user_name,email=user_email
		WHERE`idUsuario`=user_id;
	END IF;

    END$$
		

DELIMITER ;

/*
Procedure para resetar a senha do usuário
Nome:proc_resetarSenha
Entrada: id, senha
Saida:Não tem;
*/
DELIMITER $$

DROP PROCEDURE IF EXISTS proc_resetarSenha$$

CREATE
    PROCEDURE proc_resetarSenha(usuario_id INT, senha_usuario VARCHAR(50))
    BEGIN
	UPDATE 
		usuario 
	SET 
		senha=senha_usuario
	WHERE
		`idUsuario`=usuario_id;
    END$$

DELIMITER ;
/*
Procedure para inserir Usuario aluno
Nome:proc_inserirAluno
Entrada: login, senha, tipo usuario, nome, email, curso.
Saida:Não tem;

*/
DELIMITER $$

DROP PROCEDURE IF EXISTS proc_inserirAluno$$

CREATE
    PROCEDURE `proc_inserirAluno`( login_u VARCHAR(100), senha_u VARCHAR(50),Tipo_Usuario_u VARCHAR(50),nome_u VARCHAR(150), email_u VARCHAR(150),curso_u INT,OUT msg VARCHAR(10) )
    Bloco1:BEGIN
	DECLARE id INT;
	DECLARE excecao SMALLINT DEFAULT 0;
	DECLARE CONTINUE HANDLER FOR SQLEXCEPTION SET excecao = 1;
	START TRANSACTION;
	
		INSERT INTO usuario (login,senha,Tipo_Usuario) VALUES (login_u,senha_u,Tipo_Usuario_u);
		SELECT LAST_INSERT_ID() INTO id;
		
		INSERT INTO aluno (nome,email,idUsuario,idCurso) VALUES(nome_u,email_u,id,curso_u);
		
		IF excecao=1 THEN
			ROLLBACK;
			SET msg="erro";
			LEAVE bloco1;
			
			
		ELSE
			SET msg="ok";
			COMMIT;
		END IF;
	
    END$$

DELIMITER ;
/*
Procedure para inserir coordenador
Nome:proc_inserirCoordenador
Entrada: login, senha, tipo usuario, nome, email.
Saida:ok ou erro;
*/
DELIMITER $$

DROP PROCEDURE IF EXISTS proc_inserirCoordenador$$

CREATE
    PROCEDURE `proc_inserirCoordenador`( login_u VARCHAR(100), senha_u VARCHAR(50),Tipo_Usuario_u VARCHAR(50),nome_u VARCHAR(150), email_u VARCHAR(150),OUT msg VARCHAR(10) )
    Bloco1:BEGIN
	DECLARE id INT;
	DECLARE excecao SMALLINT DEFAULT 0;
	DECLARE CONTINUE HANDLER FOR SQLEXCEPTION SET excecao = 1;
	START TRANSACTION;
	
		INSERT INTO usuario (login,senha,Tipo_Usuario) VALUES (login_u,senha_u,Tipo_Usuario_u);
		SELECT LAST_INSERT_ID() INTO id;
		
		INSERT INTO coordenador (nome,email,idUsuario) VALUES(nome_u,email_u,id);
		
		IF excecao=1 THEN
			ROLLBACK;
			SET msg="erro";
			LEAVE bloco1;
			
			
		ELSE
			SET msg="ok";
			COMMIT;
		END IF;
	
    END$$

DELIMITER ;

/*
Procedure para inserir administrador
Nome:proc_inserirAdministrador
Entrada: login, senha, tipo usuario, nome, email
Saida:ok ou erro;*/

DELIMITER $$

DROP PROCEDURE IF EXISTS proc_inserirAdministrador$$

CREATE
    PROCEDURE `proc_inserirAdministrador`( login_u VARCHAR(100), senha_u VARCHAR(50),Tipo_Usuario_u VARCHAR(50),nome_u VARCHAR(150), email_u VARCHAR(150),OUT msg VARCHAR(10) )
    Bloco1:BEGIN
	DECLARE id INT;
	DECLARE excecao SMALLINT DEFAULT 0;
	DECLARE CONTINUE HANDLER FOR SQLEXCEPTION SET excecao = 1;
	START TRANSACTION;
	
		INSERT INTO usuario (login,senha,Tipo_Usuario) VALUES (login_u,senha_u,Tipo_Usuario_u);
		SELECT LAST_INSERT_ID() INTO id;
		
		INSERT INTO administrador (nome,email,idUsuario) VALUES(nome_u,email_u,id);
		
		IF excecao=1 THEN
			ROLLBACK;
			SET msg="erro";
			LEAVE bloco1;
			
			
		ELSE
			SET msg="ok";
			COMMIT;
		END IF;
	
    END$$

DELIMITER ;

/*
Procedure para listar os usuarios
Nome:proc_listarUsuarios
Entrada: Não tem
Saida:Todos os campos da tabela usuário

*/
DELIMITER $$

DROP PROCEDURE IF EXISTS proc_listarUsuarios$$

CREATE
    PROCEDURE `proc_listarUsuarios`()
    BEGIN
	SELECT * FROM usuario;
    END$$

DELIMITER ;	
/*
Procedure para listar os alunos
Nome:proc_listarAlunos
Entrada: Não tem
Saida:Ra, nome, email, id curso, nome do curso;

*/
DELIMITER $$

DROP PROCEDURE IF EXISTS proc_listarAlunos$$

CREATE
    PROCEDURE `proc_listarAlunos`()
    BEGIN
	SELECT aluno.RA,aluno.`Nome`,aluno.`Email`,aluno.`idCurso`,curso.`Nome` AS Curso 
	FROM aluno 
	INNER JOIN curso 
	ON(aluno.`idCurso` = curso.`idCurso`);
    END$$

DELIMITER ;
/*
Procedure para listar o aluno especifico
Nome:proc_listarAluno
Entrada: ra
Saida: nome, email,senha;

*/
DELIMITER $$

DROP PROCEDURE IF EXISTS proc_listarAluno$$

CREATE
    PROCEDURE `proc_listarAluno`(ra INT)
    BEGIN
	SELECT aluno.`Nome`,aluno.`Email`,usuario.`Senha`,aluno.idUsuario 
	FROM aluno 
	INNER JOIN usuario 
	ON(aluno.`idUsuario` = usuario.`idUsuario`)
	WHERE aluno.`RA`=ra;
    END$$

DELIMITER ;
/*
Procedure para listar os administradores
Nome:proc_listarAdministradores
Entrada: Não tem
Saida: id, nome, email, id usuario;

*/
DELIMITER $$

DROP PROCEDURE IF EXISTS proc_listarAdministradores$$

CREATE
    PROCEDURE `proc_listarAdministradores`()
    BEGIN
		SELECT idAdministrador,Nome,Email, idUsuario
		FROM administrador;
    END$$

DELIMITER ;	
/*
Procedure para listar um administrador específico
Nome:proc_listarAdministradores
Entrada: idAdministrador
Saida: id, nome, email, id usuario;

*/

DELIMITER $$

DROP PROCEDURE IF EXISTS proc_listarAdministrador$$

CREATE
    PROCEDURE `proc_listarAdministrador`( id INT)
    BEGIN
		SELECT Nome,Email,senha,administrador.idUsuario
		FROM administrador
		INNER JOIN usuario
		ON (administrador.`idUsuario`= usuario.`idUsuario`)
		WHERE `idAdministrador`=id;
    END$$

DELIMITER ;	
/*
Procedure para listar os coordenadores
Nome:proc_listarCoordenadores
Entrada: Não tem
Saida:Todos os campos da tabela alunos

*/
DELIMITER $$

DROP PROCEDURE IF EXISTS proc_listarCoordenadores$$

CREATE
    PROCEDURE `proc_listarCoordenadores`()
    BEGIN
	SELECT 
		coordenador.idCoordenador,
		coordenador.`Nome`,
		coordenador.`Email`
		FROM coordenador ;
		
    END$$

DELIMITER ;

/*
Procedure para listar o coordenador especifico
Nome:proc_listarCoordenador
Entrada: id
Saida: nome, email,senha;

*/
DELIMITER $$

DROP PROCEDURE IF EXISTS proc_listarCoordenador$$

CREATE
    PROCEDURE `proc_listarCoordenador`(id INT)
    BEGIN
	SELECT coordenador.`Nome`,coordenador.`Email`,usuario.`Senha`, coordenador.idUsuario 
	FROM coordenador 
	INNER JOIN usuario 
	ON(coordenador.`idUsuario` = usuario.`idUsuario`)
	WHERE coordenador.`idCoordenador`=id;
    END$$

DELIMITER ;

/*
Procedure para recuperar o email do coordenador
Nome:proc_emailCoordenador
Entrada: ra
Saida: email do coordenador deste aluno;

*/
DELIMITER $$

DROP PROCEDURE IF EXISTS proc_emailCoordenador$$

CREATE
    PROCEDURE `proc_emailCoordenador`(id INT)
    BEGIN
	SELECT coordenador.`Email` 
	FROM coordenador 
	INNER JOIN curso 
	ON(coordenador.`idCoordenador` = curso.`idCoordenador`)
	INNER JOIN aluno 
	ON(curso.`idCurso` = aluno.`idCurso`)
	WHERE aluno.`RA`=id;
    END$$

DELIMITER ;
/*
Procedure para listar os coordenadores no dropdown
Nome:proc_listaDropCoordenadores
Entrada: Não tem
Saida:id coordenador, nome
*/
DELIMITER $$

DROP PROCEDURE IF EXISTS proc_listaDropCoordenadores$$

CREATE
    PROCEDURE `proc_listaDropCoordenadores`()
    BEGIN
	SELECT 
		idCoordenador,
		Nome
		FROM coordenador;
    END$$

DELIMITER ;
/*
Procedure para inserir curso
Nome:proc_inserirCurso
Entrada: nome e id coordenador
Saida:não tem
*/
DELIMITER $$

DROP PROCEDURE IF EXISTS proc_inserirCurso$$

CREATE
    PROCEDURE `proc_inserirCurso`(nome_curso VARCHAR(150), id_coordenador INT)
    BEGIN
	INSERT INTO
		curso(Nome,idCoordenador)
	VALUES 
		(nome_curso,id_coordenador);
    END$$

DELIMITER ;

/*
Procedure para alterar curso
Nome:proc_alterarCurso
Entrada: nome, id curso,id coordenador
Saida:não tem
*/
DELIMITER $$
DROP PROCEDURE IF EXISTS proc_alterarCurso$$

CREATE
    PROCEDURE `proc_alterarCurso`(nome_curso VARCHAR(150), id_curso INT, id_coordenador int)
    BEGIN
	Update
		curso
	set 
		nome=nome_curso,
		idCoordenador=id_coordenador
	where
		idCurso=id_curso;
    END$$

DELIMITER ;
/*
Procedure para deletar curso
Nome:proc_deletarCurso
Entrada:id curso
Saida:não tem
*/
DELIMITER $$

DROP PROCEDURE IF EXISTS proc_deletarCurso$$

CREATE
    PROCEDURE `proc_deletarCurso`(id_curso INT)
    BEGIN
	delete from
		curso
	where 
		idCurso=id_curso;
    END$$

DELIMITER ;
/*
Procedure para listar cursos no dropdown
Nome:proc_listaDropCursos
Entrada:Não tem
Saida:id curso, nome curso
*/
DELIMITER $$

DROP PROCEDURE IF EXISTS proc_listaDropCursos$$

CREATE
    PROCEDURE `proc_listaDropCursos`()
    BEGIN
	SELECT 
		idCurso,
		Nome 
	FROM 
		curso;
    END$$

DELIMITER ;
/*
Procedure para listar cursos
Nome:proc_listarCursos
Entrada:Não tem
Saida:id curso, nome curso, id coordenador, nome coordenador
*/
DELIMITER $$

DROP PROCEDURE IF EXISTS proc_listarCursos$$

CREATE
    PROCEDURE `proc_listarCursos`()
    BEGIN
	SELECT 
		idCurso,
		curso.Nome,
		curso.idCoordenador,
		coordenador.`Nome` as nome_coordenador
	FROM 
		curso
	INNER JOIN 
		coordenador
	ON
		(curso.idCoordenador=Coordenador.idCoordenador);
    END$$

DELIMITER ;
/*
Procedure para listar cursos
Nome:proc_listarCursos
Entrada:id
Saida:id curso, nome curso, id coordenador, nome coordenador
*/
DELIMITER $$

DROP PROCEDURE IF EXISTS proc_listarCurso$$

CREATE
    PROCEDURE `proc_listarCurso`(id INT)
    BEGIN
	SELECT 
		idCurso,
		curso.Nome,
		curso.idCoordenador,
		coordenador.`Nome` AS nome_coordenador
	FROM 
		curso
	INNER JOIN 
		coordenador
	ON
		(curso.idCoordenador=Coordenador.idCoordenador)
	WHERE 
		idCurso=id;
    END$$
/*
Procedure para inserir uma categoria
Nome:proc_inserirCategoria
Entrada:nome da categoria, limite da categoria, limite por atividade
Saida:Não tem
*/
DELIMITER $$

DROP PROCEDURE IF EXISTS proc_inserirCategoria$$

CREATE
    PROCEDURE `proc_inserirCategoria`(nome_categoria VARCHAR(150), _limite_categoria DOUBLE,_limite_atividade DOUBLE)
    BEGIN
	INSERT INTO 
		categoria(nome,limite_categoria,limite_atividade)
	VALUES 
		(nome_categoria,_limite_categoria,_limite_atividade);
    END$$

DELIMITER ;
/*
Procedure para alterar uma categoria
Nome:proc_alterarCategoria
Entrada:nome da categoria, limite da categoria, limite por atividade
Saida:Não tem
*/
DELIMITER $$
DROP PROCEDURE IF EXISTS proc_alterarCategoria$$

CREATE
    PROCEDURE `proc_alterarCategoria`(nome_categoria VARCHAR(200), id_categoria INT, _limite_categoria DOUBLE,_limite_atividade DOUBLE)
    BEGIN
	UPDATE
		categoria
	SET 
		nome=nome_categoria,
		Limite_categoria=_limite_categoria,
		Limite_atividade=_limite_atividade
	WHERE
		idCategoria=id_categoria;
    END$$

DELIMITER ;
/*
Procedure para listar as categorias
Nome:proc_listarCategorias
Entrada:Não tem
Saida:id categoria, nome categoria, limite categoria,limite atividade
*/
DELIMITER $$

DROP PROCEDURE IF EXISTS proc_listarCategorias$$

CREATE
    PROCEDURE `proc_listarCategorias`()
    BEGIN
	SELECT 
		idCategoria,nome,limite_categoria,limite_atividade
	FROM categoria;
    END$$

DELIMITER ;
/*
Procedure para recuperar o limite da categoria
Nome:proc_limiteDaCategoria
Entrada:id da categoria
Saida: limite categoria,limite atividade
*/
DELIMITER $$

DROP PROCEDURE IF EXISTS proc_limiteDaCategoria$$

CREATE
    PROCEDURE `proc_limiteDaCategoria`(id int)
    BEGIN
	SELECT 
		limite_categoria,limite_atividade
	FROM categoria
	where idCategoria = id;
    END$$

DELIMITER ;
/*
Procedure para listar a categoria especifica
Nome:proc_listarCategoria
Entrada:id
Saida:id categoria, nome categoria, limite categoria,limite atividade
*/
DELIMITER $$

DROP PROCEDURE IF EXISTS proc_listarCategoria$$

CREATE
    PROCEDURE `proc_listarCategoria`( id INT)
    BEGIN
		SELECT Nome,Limite_atividade,Limite_categoria,idCategoria
		FROM categoria	
		WHERE `idCategoria`=id;
    END$$	

DELIMITER ;	
/*
Procedure para listar as categorias no dropdown
Nome:proc_listaDropCategorias
Entrada:Não tem
Saida:id categoria, nome categoria
*/

DELIMITER $$

DROP PROCEDURE IF EXISTS proc_listaDropCategorias$$

CREATE
    PROCEDURE `proc_listaDropCategorias`()
    BEGIN
	SELECT 
		idCategoria,nome
	FROM categoria;
    END$$

DELIMITER ;
/*
Procedure para listar o limite da categoria
Nome:proc_listarLimiteCategoria
Entrada:id categoria
Saida:limite atividade,limite categoria
*/

DELIMITER $$

DROP PROCEDURE IF EXISTS proc_listarLimiteCategoria$$

CREATE
    PROCEDURE `proc_listarLimiteCategoria`(id_categoria INT)
    BEGIN
	SELECT 
		idCategoria,`limite_atividade`,`limite_categoria`
	FROM categoria
	WHERE 
		idCategoria=id_categoria;
    END$$

DELIMITER ;
/*
Procedure para listar as acs do coordenador(compacto)
Nome:proc_listarAcsCoordenador
Entrada:id do coordenador
Saida:id do coordenador, nome coordenador, id da atividade, titulo da atividade, status da ac
*/
DELIMITER $$

DROP PROCEDURE IF EXISTS proc_listarAcsCoordenador$$

CREATE
    PROCEDURE proc_listarAcsCoordenador(coordenador_ INT)
    BEGIN
	SELECT 
		coordenador.idCoordenador, 
		coordenador.nome,
		atividade_complementar.idAtividade,
		atividade_complementar.titulo,
		atividade_complementar.status_ac
	FROM 
		`atividade_complementar` 
	INNER JOIN aluno 
		ON(aluno.`RA`=`atividade_complementar`.`Aluno_RA`)
	 INNER JOIN curso
		ON (aluno.`idCurso`=curso.`idCurso`)
	INNER JOIN `coordenador`
		ON(curso.`idCoordenador`=`coordenador`.`idCoordenador`)
		WHERE `coordenador`.`idCoordenador`=coordenador_
		AND status_ac='Aguardando Análise';
    END$$

DELIMITER ;
/*
Procedure para listar as acs do coordenador detalhado
Nome:proc_listarAcsCoordenadorDetalhes
Entrada:id do coordenador
Saida:id do coordenador,nome do coordenador, id da ac, titulo da ac, status da ac,carga horaria,nome do aluno,descricao, comentário, nome do arquivo, curso
*/
DELIMITER $$

DROP PROCEDURE IF EXISTS proc_listarAcsCoordenadorDetalhes$$

CREATE
    PROCEDURE proc_listarAcsCoordenadorDetalhes(coordenador_ INT)
    BEGIN
	SELECT 
		coordenador.idCoordenador, 
		coordenador.nome,
		atividade_complementar.idAtividade,
		atividade_complementar.titulo,
		atividade_complementar.status_ac,
		atividade_complementar.CH,
		atividade_complementar.descricao,
		atividade_complementar.comentario,
		atividade_complementar.nome_arquivo,
		curso.nome AS nome_curso,
		aluno.`Nome` AS nome_aluno,
		atividade_complementar.aluno_ra
		
		
	FROM 
		`atividade_complementar` 
	INNER JOIN aluno 
		ON(aluno.`RA`=`atividade_complementar`.`Aluno_RA`)
	 INNER JOIN curso
		ON (aluno.`idCurso`=curso.`idCurso`)
	INNER JOIN `coordenador`
		ON(curso.`idCoordenador`=`coordenador`.`idCoordenador`)
		WHERE `coordenador`.`idCoordenador`=coordenador_
		AND status_ac='Aguardando Análise';
    END$$

DELIMITER ;


DELIMITER $$

DROP PROCEDURE IF EXISTS proc_listarAcDetalhes$$

CREATE
    PROCEDURE proc_listarAcDetalhes(id_atividade INT)
    BEGIN
	SELECT 
		coordenador.idCoordenador, 
		coordenador.nome,
		atividade_complementar.idAtividade,
		atividade_complementar.titulo,
		atividade_complementar.status_ac,
		atividade_complementar.CH,
		atividade_complementar.descricao,
		atividade_complementar.comentario,
		atividade_complementar.nome_arquivo,
		atividade_complementar.`dataRealizacao`,
		curso.nome AS nome_curso,
		aluno.`Nome` AS nome_aluno,
		atividade_complementar.aluno_ra,
		categoria.`Nome` AS nome_categoria,
		categoria.`idCategoria`
		
		
	FROM 
		`atividade_complementar` 
	INNER JOIN categoria 
		ON(categoria.`idCategoria`=`atividade_complementar`.`idCategoria`)
	INNER JOIN aluno 
		ON(aluno.`RA`=`atividade_complementar`.`Aluno_RA`)
	 INNER JOIN curso
		ON (aluno.`idCurso`=curso.`idCurso`)
	INNER JOIN `coordenador`
		ON(curso.`idCoordenador`=`coordenador`.`idCoordenador`)
		WHERE `atividade_complementar`.`idAtividade`=id_atividade;
    END$$

DELIMITER ;
/*
Procedure para listar as acs do aluno(compacto)
Nome:proc_listarAcsAluno
Entrada:id do aluno
Saida:id da ac, titulo da ac, status da ac,nome do aluno
*/
DELIMITER $$

DROP PROCEDURE IF EXISTS proc_listarAcsAluno$$

CREATE
    PROCEDURE proc_listarAcsAluno(aluno_ra INT)
    BEGIN
	SELECT 
		`atividade_complementar`.idAtividade,
		`atividade_complementar`.titulo,
		`atividade_complementar`.status_ac,
		aluno.nome
	FROM 
		`atividade_complementar` 
	INNER JOIN aluno 
		ON(aluno.`RA`=`atividade_complementar`.`Aluno_RA`)
	 INNER JOIN curso
		ON (aluno.`idCurso`=curso.`idCurso`)
	INNER JOIN `coordenador`
		ON(curso.`idCoordenador`=`coordenador`.`idCoordenador`)
		WHERE atividade_complementar.Aluno_RA=aluno_ra
		And status_ac!='Cancelado';
    END$$

DELIMITER ;
/*
Procedure para listar as acs do aluno detalhado
Nome:listarAcsAlunoDetalhes
Entrada:id do aluno
Saida:id da ac, titulo da ac, status da ac,nome do aluno, carga horaria,descricao, comentário, nome do arquivo, curso, nome do coordenador
*/
DELIMITER $$

DROP PROCEDURE IF EXISTS proc_listarAcsAlunoDetalhes$$

CREATE
    PROCEDURE proc_listarAcsAlunoDetalhes(aluno_ra INT)
    BEGIN
	SELECT 
		`atividade_complementar`.idAtividade,
		`atividade_complementar`.titulo,
		`atividade_complementar`.status_ac,
		aluno.nome nome_aluno,
		`atividade_complementar`.ch,
		`atividade_complementar`.descricao,
		`atividade_complementar`.comentario,
		`atividade_complementar`.nome_arquivo,
		curso.nome as nome_curso,
		coordenador.`Nome` as nome_coordenador
		
	FROM 
		`atividade_complementar` 
	INNER JOIN aluno 
		ON(aluno.`RA`=`atividade_complementar`.`Aluno_RA`)
	 INNER JOIN curso
		ON (aluno.`idCurso`=curso.`idCurso`)
	INNER JOIN `coordenador`
		ON(curso.`idCoordenador`=`coordenador`.`idCoordenador`)
		WHERE atividade_complementar.Aluno_RA=aluno_ra
		And status_ac!='Cancelado';
    END$$

DELIMITER ;

/*
Procedure para cancelar uma ac
Nome:proc_cancelarAc
Entrada:id da ac
Saida:cancelado ou erro
*/
DELIMITER $$
DROP PROCEDURE IF EXISTS proc_cancelarAc$$

CREATE
    PROCEDURE `proc_cancelarAc`(id_atividade INT)
    BEGIN
	declare status_ac_atual varchar(50);
	declare msg varchar(10);
	set msg='Cancelado';
	
	select status_ac from atividade_complementar where idAtividade=id_atividade into status_ac_atual;
	
	if status_ac_atual!='Aguardando Análise' then
		UPDATE
			atividade_complementar
		SET 
			status_ac='Cancelado'
		WHERE
			idAtividade=id_atividade;
		select msg;
	else 
		set msg='erro';
		select msg;
	end if;
    END$$

DELIMITER ;

/*
Procedure para inserir uma ac
Nome:proc_inserirAC
Entrada:aluno, titulo, categoria, descricao, data realizacao, carga horaria, arquivo
Saida:Não tem
*/
DELIMITER $$

DROP PROCEDURE IF EXISTS proc_inserirAC$$

CREATE
    PROCEDURE `proc_inserirAC`(aluno_ac INT, titulo_ac VARCHAR(150),categoria_ac INT,descricao_ac VARCHAR(400),data_realizacao DATE ,carga_horaria DOUBLE,arquivo VARCHAR(50))
    Bloco1:BEGIN
	DECLARE id INT;
	DECLARE excecao SMALLINT DEFAULT 0;
	DECLARE CONTINUE HANDLER FOR SQLEXCEPTION SET excecao = 1;
	START TRANSACTION;
	
		INSERT INTO atividade_complementar 
			(Aluno_RA,titulo,idCategoria,descricao,dataRealizacao,CH,dataCadastro,status_ac) 
		VALUES 
			(aluno_ac,titulo_ac,categoria_ac,descricao_ac,data_realizacao,carga_horaria,NOW(),'Aguardando Análise');
		SELECT LAST_INSERT_ID() INTO id;
		
		UPDATE 
			atividade_complementar
		SET
			nome_arquivo=CONCAT(id,"-",arquivo)
		WHERE
			idAtividade=id;
		
		IF excecao=1 THEN
			ROLLBACK;
			LEAVE bloco1;
			
		ELSE
			SELECT CONCAT(id,"-",arquivo) AS nome_arquivo;
			COMMIT;
		END IF;
	
    END$$


DELIMITER $$
/*
Procedure para alterar uma ac
Nome:proc_alterarAc
Entrada:id da ac, carga horaria, status_ac, comentario
Saida:Não tem
*/
DELIMITER $$
DROP PROCEDURE IF EXISTS proc_alterarAc$$

CREATE
    PROCEDURE `proc_alterarAc`(id_ac INT,carga_horaria DOUBLE, status_ac_ VARCHAR(20),comentario_ac VARCHAR(400))
    BEGIN
	UPDATE
		atividade_complementar
	SET 
		ch=carga_horaria,
		status_ac=status_ac_,
		comentario=comentario_ac
	WHERE
		idAtividade=id_ac;
    END$$

DELIMITER ;

/*
Procedure para o relatório de acs pendentes
Nome:proc_relatorioAcsPendentes
Entrada:id do coordenador
Saida:id da atividade,titulo, nome do aluno, carga horaria, id da categoria, nome da categoria, status da ac.
*/
DELIMITER $$

DROP PROCEDURE IF EXISTS proc_relatorioAcsPendentes$$

CREATE
    PROCEDURE proc_relatorioAcsPendentesCoordenador(id_coordenador INT)
    BEGIN
	SELECT 
		atividade_complementar.idAtividade,
		atividade_complementar.titulo,
		aluno.Nome,
		atividade_complementar.CH,
		atividade_complementar.idCategoria,
		categoria.Nome,
		atividade_complementar.status_ac
	FROM 
		`atividade_complementar` 
	INNER JOIN aluno 
		ON(aluno.`RA`=`atividade_complementar`.`Aluno_RA`)
	 INNER JOIN curso
		ON (aluno.`idCurso`=curso.`idCurso`)
	INNER JOIN `coordenador`
		ON(curso.`idCoordenador`=`coordenador`.`idCoordenador`)
	INNER JOIN categoria
		ON(categoria.`idCategoria`=atividade_complementar.`idCategoria`)
		WHERE 
			coordenador.`idCoordenador`=id_coordenador AND
			status_ac='Aguardando Análise';
    END$$

DELIMITER ;
/*
Procedure para o relatório de carga horaria total do aluno
Nome:proc_relatorioCHT
Entrada:id do aluno
Saida:total
*/

DELIMITER $$

DROP PROCEDURE IF EXISTS proc_relatorioCHT$$

CREATE
    PROCEDURE proc_relatorioCHT(id_aluno INT)
    BEGIN
	SELECT SUM(atividade_complementar.`CH`) AS total FROM atividade_complementar WHERE atividade_complementar.`Aluno_RA`=id_aluno AND status_ac ='Aprovado';	
    END$$

DELIMITER ;

/*
Procedure para o relatório de carga horaria total do aluno por tipo de atividade
Nome:proc_relatorioPorTipo
Entrada:id do aluno
Saida:total e nome da categoria
*/

DELIMITER $$

DROP PROCEDURE IF EXISTS proc_relatorioPorTipo$$

CREATE
    PROCEDURE proc_relatorioPorTipo(id_aluno INT)
    BEGIN
	SELECT 
	SUM(atividade_complementar.`CH`) AS total,
	categoria.`Nome`
	FROM 
		atividade_complementar 
	INNER JOIN categoria
	ON
		(categoria.`idCategoria`=atividade_complementar.`idCategoria`)
	WHERE 
		atividade_complementar.`Aluno_RA`=id_aluno
	AND 	
		status_ac ='Aprovado' 
	GROUP BY nome;
    END$$

DELIMITER ;

/*
Procedure para o relatório de carga horaria total do aluno por tipo de atividade
Nome:proc_relatorioPorTipodeAc
Entrada:id do aluno,id categoria
Saida:total e nome da categoria
*/
DELIMITER $$

DROP PROCEDURE IF EXISTS proc_relatorioPorTipodeAC$$

CREATE
    PROCEDURE proc_relatorioPorTipodeAC(id_aluno INT,tipo_ac INT)
    BEGIN
	SELECT 
	SUM(atividade_complementar.`CH`) AS total,
	categoria.`Nome`
	FROM 
		atividade_complementar 
	INNER JOIN categoria
	ON
		(categoria.`idCategoria`=atividade_complementar.`idCategoria`)
	WHERE 
		atividade_complementar.`Aluno_RA`=id_aluno
	AND 	
		status_ac ='Aprovado' OR status_ac ='Aguardando Análise'   
	AND atividade_complementar.idCategoria=tipo_ac;
    END$$

DELIMITER ;
/*
Procedure para o relatório de grupo de atividades solicitadas
Nome:proc_relatorioAtividadeSolicitada
Entrada:id do coordenador
Saida:total e nome da categoria
*/

DELIMITER $$

DROP PROCEDURE IF EXISTS proc_relatorioAtividadeSolicitada$$

CREATE
    PROCEDURE proc_relatorioAtividadeSolicitada(id_coordenador INT)
    BEGIN
	SELECT 
		COUNT(atividade_complementar.`CH`) AS total,
		categoria.`Nome`
	FROM 
		`atividade_complementar` 
	INNER JOIN aluno 
		ON(aluno.`RA`=`atividade_complementar`.`Aluno_RA`)
	 INNER JOIN curso
		ON (aluno.`idCurso`=curso.`idCurso`)
	INNER JOIN `coordenador`
		ON(curso.`idCoordenador`=`coordenador`.`idCoordenador`)
	INNER JOIN categoria
		ON(categoria.`idCategoria`=atividade_complementar.`idCategoria`)
		WHERE 
			coordenador.`idCoordenador`=id_coordenador
		GROUP BY nome;

    END$$

DELIMITER ;