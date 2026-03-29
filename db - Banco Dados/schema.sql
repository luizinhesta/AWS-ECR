CREATE DATABASE IF NOT EXISTS lab_api_gateway
    CHARACTER SET utf8mb4
    COLLATE utf8mb4_unicode_ci;

USE lab_api_gateway;

CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(120) NOT NULL,
    login VARCHAR(80) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO usuarios (nome, login, senha)
VALUES ('Luiz Inhesta', 'luiz.inhesta', 'demo123');

SELECT id, nome, login, criado_em FROM usuarios;
