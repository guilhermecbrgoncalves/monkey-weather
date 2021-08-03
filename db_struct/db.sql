DROP TABLE IF EXISTS utilizador;
DROP TABLE IF EXISTS locals;

CREATE TABLE utilizador(
    id_utilizador INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(255) UNIQUE,
    password VARCHAR(255),
    email VARCHAR(255) UNIQUE,
    name VARCHAR(255)
);

INSERT INTO utilizador VALUES (1, 'guilhas', '12345', 'guigonca7@gmail.com', 'Guilherme Rodrigues');
INSERT INTO utilizador (username, password, email, name) VALUES ('guilhas2', '12345', 'guigonca2@gmail.com', 'Guilherme Gonçalves');

CREATE TABLE locals(
    name VARCHAR(255) PRIMARY KEY,
    id_utilizador INT,
    FOREIGN KEY (id_utilizador) REFERENCES utilizador(id_utilizador)
);