<?php

$database = new SQLite3('database.db');

$usuarioQuery = 'CREATE TABLE IF NOT EXISTS usuario (
    idUsuario INTEGER PRIMARY KEY,
    nome TEXT NOT NULL,
    endereco TEXT,
    email TEXT NOT NULL,
    telefone TEXT,
    cpf TEXT NOT NULL,
    senha TEXT NOT NULL,
    funcao TEXT DEFAULT "cliente" CHECK (funcao IN ("cliente", "administrador")),
    UNIQUE (email, cpf)
)';

$database->exec($usuarioQuery);
