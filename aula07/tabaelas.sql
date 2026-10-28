CREATE DATABASE exemplo;

USE exemplo;

CREATE TABLE aluno (
id INTEGER NOT NULL auto_increment PRIMARY KEY,
nome VARCHAR(200) NOT NULL,
idade INTEGER NOT NULL
);
-- 1. Apague a tabela existente
DROP TABLE IF EXISTS usuario;

-- 2. Recrie a tabela usuario (Atenção para o tipo da coluna 'senha')
CREATE TABLE usuario (
    id INTEGER AUTO_INCREMENT PRIMARY KEY,
    login VARCHAR(200) NOT NULL,
    senha VARCHAR(255) NOT NULL  -- Deve ser VARCHAR, pois md5 gera texto!
);

-- 3. Execute o INSERT com o MD5
INSERT INTO usuario (login, senha) VALUES ('Maria.silva', md5('123456'));

INSERT INTO usuario (login, senha) VALUES ('Rafael.ag', md5('1234567'));

INSERT INTO usuario (login, senha) VALUES ('francisco.molina', '123456');
INSERT INTO usuario (login, senha) VALUES ('Maria.silva', md5('123456'));

INSERT INTO aluno (nome, idade) VALUES ('Molina', 40);
INSERT INTO aluno (nome, idade) VALUES ('Cecilia',19 );
INSERT INTO aluno (nome, idade) VALUES ('Rafael', 19);
INSERT INTO aluno (nome, idade) VALUES ('larissa', 25);

SELECT * FROM aluno;
SELECT * FROM usuario;

UPDATE aluno SET idade = 50 WHERE id = 1;
UPDATE aluno SET idade = 46 WHERE id = 1;

UPDATE usuario SET senha = md5('123456') WHERE login = 'Maria.silva';
