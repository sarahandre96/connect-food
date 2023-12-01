<?php

$database = new SQLite3('database.db');

$clienteQuery = 'CREATE TABLE IF NOT EXISTS  cliente 
( 
 idCliente INT PRIMARY KEY,  
 nome VARCHAR(n) NOT NULL,  
 endereco VARCHAR(n),  
 email VARCHAR(n) NOT NULL,  
 telefone VARCHAR(n),  
 cpf VARCHAR(n) NOT NULL,  
 senha VARCHAR(n) NOT NULL,  
 UNIQUE (email,cpf)
)
';



$database->exec($fornecedorQuery);


function registrarCliente($nome, $endereco, $email, $telefon, $cpf, $senha) {
   global $database;
    $smt= $database->prepare('SELECT * FROM cliente  WHERE email= :email');
    $stm->bindValue(':email',$email,SQLITE3_TEXT);
    $result = $stmt->execute();


    if ($result->fetchArray()) {
        echo 'cliente já existe.';
        return;
    }

    $stmt = $database->prepare('INSERT INTO cliente (nome,endereco,cpf,telefone,senha, email) VALUES (:nome,:endereco,:cpf, :senha, :email)');
    $stmt->bindValue(':nome', $nome, SQLITE3_TEXT);
    $stmt->bindValue(':endereco', $endereco, SQLITE3_TEXT);
    $stmt->bindValue(':cpf', $cpf, SQLITE3_TEXT);
    $stmt->bindValue(':telefone', $telefone, SQLITE3_TEXT);
    $stmt->bindValue(':email', $email,SQLITE3_TEXT);
    $stmt->bindValue(':senha', password_hash($senha, PASSWORD_DEFAULT), SQLITE3_TEXT);
    $result = $stmt->execute();

    echo 'cliente registrado com sucesso.';
}



function registrarFornecedor($nome, $endereco, $email, $telefone, $cnpj, $senha) {
    global $database;
     $smt= $database->prepare('SELECT * FROM fornecedor  WHERE email= :email');
     $stm->bindValue(':email',$email,SQLITE3_TEXT);
     $result = $stmt->execute();
 
 
     if ($result->fetchArray()) {
         echo 'fornecedor já existe.';
         return;
     }
 
     $stmt = $database->prepare('INSERT INTO fornecedor (nome,endereco,cnpj,telefone,senha, email) VALUES (:nome,:endereco,:cnpj, :senha, :email)');
     $stmt->bindValue(':nome', $nome, SQLITE3_TEXT);
     $stmt->bindValue(':endereco', $endereco, SQLITE3_TEXT);
     $stmt->bindValue(':cnpj', $cnpj, SQLITE3_TEXT);
     $stmt->bindValue(':telefone', $telefone, SQLITE3_TEXT);
     $stmt->bindValue(':email', $email, SQLITE3_TEXT);
     $stmt->bindValue(':senha', password_hash($senha, PASSWORD_DEFAULT), SQLITE3_TEXT);
     $result = $stmt->execute();
 
     echo 'fornecedor registrado com sucesso.';
 }


 die("CHEGOU AQUI");