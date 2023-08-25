
-- Vamos pensar como seria o relacionamento entre essas tabelas, no caso estamos modelando uma Concessionária.
-- lojas, carros, marcas, carros_marcas, carros_lojas
-- Busca, ao ir digitando o nome do carro, retorna os carros.
-- Busca, ao ir digitando o nome do marca, retorna os carros.
-- Retornar carros de determinada loja
-- Retornar marca de determinado carro





CREATE DATABASE Concessionaria;

USE Concessionaria;

CREATE TABLE lojas (
 id INT AUTO_INCREMENT PRIMARY KEY, 
 apelido VARCHAR(255) NOT NULL, 
 localidade	VARCHAR(255)
);
 
 CREATE TABLE carros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    modelo VARCHAR(255) NOT NULL,
    ano YEAR
);


CREATE TABLE marcas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    marca VARCHAR(255) NOT NULL
);


CREATE TABLE carros_marcas (
    carro_id INT NOT NULL,
    marca_id INT NOT NULL,
    PRIMARY KEY (carro_id, marca_id),
    FOREIGN KEY (carro_id) REFERENCES carros(id),
    FOREIGN KEY (marca_id) REFERENCES marcas(id)
);


CREATE TABLE carros_lojas (
    carro_id INT NOT NULL,
    loja_id INT  NOT NULL,
    PRIMARY KEY (carro_id, loja_id),
    FOREIGN KEY (carro_id) REFERENCES carros(id),
    FOREIGN KEY (loja_id) REFERENCES lojas(id)
);


INSERT INTO lojas (apelido, localidade) VALUES ('GGcars', 'zona sul');
INSERT INTO lojas (apelido, localidade) VALUES ('GHautoride', 'zona norte');

INSERT INTO carros (modelo, ano) VALUES ('Uno', 2022);
INSERT INTO carros (modelo, ano) VALUES ('Sandero', 2022);

INSERT INTO marcas (marca) VALUES ('Fiat');
INSERT INTO marcas (marca) VALUES ('Renault');

INSERT INTO carros_marcas (carro_id, marca_id) VALUES (1, 1);
INSERT INTO carros_marcas (carro_id, marca_id) VALUES (2, 2);

INSERT INTO carros_lojas (carro_id, loja_id) VALUES (1, 1);
INSERT INTO carros_lojas (carro_id, loja_id) VALUES (2, 2);


SELECT * FROM carros WHERE modelo LIKE 'Sa%';


SELECT c.* FROM carros c
JOIN carros_marcas cm ON c.id = cm.carro_id
JOIN marcas m ON cm.marca_id = m.id
WHERE m.marca LIKE 'Ren%';

SELECT c.* FROM carros c
JOIN carros_lojas cl ON c.id = cl.carro_id
JOIN lojas l ON cl.loja_id = l.id
WHERE l.apelido = 'GGcars';


SELECT m.marca FROM marcas m
JOIN carros_marcas cm ON m.id = cm.marca_id
JOIN carros c ON cm.carro_id = c.id
WHERE c.modelo = 'Uno';


