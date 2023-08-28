-- Vamos pensar como seria o MER e a criação do SQL de um banco de dados,
-- no caso somos uma empresa de recursos humanos que administra diversas empresas e seus funcionários.
-- Preciso ter os endereços das empresas e de seus funcionários e também preciso ter os cargos de cada funcionário.

CREATE DATABASE futureRH;

USE futureRH;

CREATE TABLE empresas (

	id INT(11) NOT NULL AUTO_INCREMENT,
	nome VARCHAR(255) NOT NULL,
	Cnpj VARCHAR(150) NOT NULL,
	endereço VARCHAR (255) NOT NULL, 
	cidade VARCHAR(255) NOT NULL,
	estado CHAR(2) NOT NULL,
	PRIMARY KEY (id)
);

CREATE TABLE funcionarios (

	id INT(11) NOT NULL AUTO_INCREMENT, 
	nome VARCHAR(255) NOT NULL,
	endereço VARCHAR(255) NOT NULL,
	Telefone VARCHAR(100) NOT NULL,
	Numero INT (9) NOT NULL,
	cidade VARCHAR(255) NOT NULL, 
	estado CHAR(2) NOT NULL,
	estado_civil VARCHAR(255) NOT NULL,
	PRIMARY KEY (id)
);



CREATE TABLE Cargos (

	id INT(11) NOT NULL AUTO_INCREMENT, 
	função VARCHAR(255),
	setor VARCHAR(255),
	PRIMARY KEY(id)
);


CREATE TABLE empresas_funcionarios (

	id INT(11) NOT NULL AUTO_INCREMENT,
	id_empresas INT(11) NOT NULL, 
	id_funcionarios INT(11) NOT NULL,
	PRIMARY KEY (id),
	FOREIGN KEY (id_empresas) REFERENCES empresas(id),
   FOREIGN KEY (id_funcionarios) REFERENCES funcionarios(id)
);

CREATE TABLE funcionarios_cargos (

	id INT(11) NOT NULL AUTO_INCREMENT,
	id_funcionarios INT(11) NOT NULL, 
	id_cargos INT(11) NOT NULL,
	PRIMARY KEY (id),
	FOREIGN KEY (id_funcionarios) REFERENCES funcionarios(id),
   FOREIGN KEY (id_cargos) REFERENCES cargos(id)
);

INSERT INTO empresas (nome, Cnpj, endereço, cidade, estado) 
	VALUES ('Diesel Cars', '72872478000112', 'Rua antunes,123, centro', 'Bom Jesus da Lapa', 'BA');
INSERT INTO empresas (nome, Cnpj, endereço, cidade, estado) 
	VALUES ('Jota Financeira', '07316865000100', 'Rua Mario Delano, 561, centro', 'Rio de Janeiro', 'RJ');
INSERT INTO empresas (nome, Cnpj, endereço, cidade, estado) 
	VALUES ('Hospital São Bento', '15355854000168', 'Rua Divino amor, 282, Vila esperança', 'Serra do salitre', 'MG');
SELECT * FROM empresas;
SELECT COUNT(id) FROM empresas;

INSERT INTO funcionarios (nome, endereço, Telefone, Numero, cidade, estado, estado_civil)
	VALUES ('João Silva', 'Rua da Amizade, 123', '(11) 1234-5678', 123456789, 'São Paulo', 'SP', 'Solteiro');

INSERT INTO funcionarios (nome, endereço, Telefone, Numero, cidade, estado, estado_civil)
	VALUES ('Maria Santos', 'Avenida da Liberdade, 456', '(21) 9876-5432', 987654321, 'Rio de Janeiro', 'RJ', 'Casado');

INSERT INTO funcionarios (nome, endereço, Telefone, Numero, cidade, estado, estado_civil)
	VALUES ('Pedro Souza', 'Praça da Paz, 789', '(31) 5555-8888', 555555555, 'Belo Horizonte', 'MG', 'Solteiro');

INSERT INTO funcionarios (nome, endereço, Telefone, Numero, cidade, estado, estado_civil)
	VALUES ('Ana Oliveira', 'Rua das Flores, 987', '(41) 2222-1111', 111111111, 'Curitiba', 'PR', 'Viúvo');

INSERT INTO funcionarios (nome, endereço, Telefone, Numero, cidade, estado, estado_civil)
	VALUES ('Lucas Rodrigues', 'Avenida da Esperança, 321', '(51) 3333-6666', 666666666, 'Porto Alegre', 'RS', 'Casado');

SELECT * FROM funcionarios;


INSERT INTO Cargos (função, setor) VALUES ('Desenvolvedor', 'TI');
INSERT INTO Cargos (função, setor) VALUES ('Analista Financeiro', 'Financeiro');
INSERT INTO Cargos (função, setor) VALUES ('Gerente de Vendas', 'Comercial');
INSERT INTO Cargos (função, setor) VALUES ('Designer Gráfico', 'Markenting');
INSERT INTO Cargos (função, setor) VALUES ('Assistente Administrativo', 'Administrativo');
SELECT * FROM cargos;


INSERT INTO empresas_funcionarios (id_empresas, id_funcionarios) VALUES (1, 1);
INSERT INTO empresas_funcionarios (id_empresas, id_funcionarios) VALUES (2, 2);
INSERT INTO empresas_funcionarios (id_empresas, id_funcionarios) VALUES (3, 3);    
INSERT INTO empresas_funcionarios (id_empresas, id_funcionarios) VALUES (1, 4);     
INSERT INTO empresas_funcionarios (id_empresas, id_funcionarios) VALUES (2, 5);          
SELECT * FROM empresas_funcionarios;


INSERT INTO funcionarios_cargos (id_funcionarios, id_cargos) VALUES (1, 1);
INSERT INTO funcionarios_cargos (id_funcionarios, id_cargos) VALUES (2, 2);
INSERT INTO funcionarios_cargos (id_funcionarios, id_cargos) VALUES (3, 3);
INSERT INTO funcionarios_cargos (id_funcionarios, id_cargos) VALUES (4, 4);
INSERT INTO funcionarios_cargos (id_funcionarios, id_cargos) VALUES (5, 5);
SELECT * FROM funcionarios_cargos;











