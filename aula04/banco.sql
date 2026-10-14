CREATE DATABASE exemplo;

USE exemplo;

CREATE TABLE aluno (
id INTEGER NOT NULL auto_increment PRIMARY KEY,
nome VARCHAR(200) NOT NULL,
idade INTEGER NOT NULL
);

INSERT INTO aluno (nome, idade) VALUES ('Molina', 40);
INSERT INTO aluno (nome, idade) VALUES ('Cecilia',19 );
INSERT INTO aluno (nome, idade) VALUES ('Rafael', 19);
INSERT INTO aluno (nome, idade) VALUES ('larissa', 25);

SELECT * FROM aluno;

UPDATE aluno SET idade = 50 WHERE id = 1;
UPDATE aluno SET idade = 46 WHERE id = 1;



