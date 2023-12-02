<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include_once "conexao.php";
 
if (isset($_POST['cadastrar'])){
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];
  $endereco = $_POST['endereco'];
  $cpf = $_POST['cpf'];
  $senha= $_POST['senha'];
  
  $stmt= $database->prepare('SELECT * FROM usuario WHERE email= :email');
  $stmt->bindValue(':email',$email,SQLITE3_TEXT);
  $result = $stmt->execute();


  if ($result->fetchArray()) {
      echo 'cliente já existe.';
      return;
  }

  $stmt = $database->prepare('INSERT INTO usuario (nome,endereco,cpf,telefone,senha, email) VALUES (:nome,:endereco,:cpf,:telefone, :senha, :email)');
  $stmt->bindValue(':nome', $nome, SQLITE3_TEXT);
  $stmt->bindValue(':endereco', $endereco, SQLITE3_TEXT);
  $stmt->bindValue(':cpf', $cpf, SQLITE3_TEXT);
  $stmt->bindValue(':telefone', $telefone, SQLITE3_TEXT);
  $stmt->bindValue(':email', $email,SQLITE3_TEXT);
  $stmt->bindValue(':senha', password_hash($senha, PASSWORD_DEFAULT), SQLITE3_TEXT);
  $result = $stmt->execute();

  echo 'cliente registrado com sucesso.';

}
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <div id="container-login">
        <h1 id="h1-login">
        Realizar seu cadastro
        </h1>
        <form method="post">

            <label for="nomes">Nome</label>
            <input type="text" name="nome"  id="nome"  placeholder="Digite o seu nome" required>
            <label for="nomes">email</label>
            <input type="email" name="email"  id="email" placeholder="Digite o seu email" required>
            <label for="nomes">telefone</label>
            <input type="tel" name="telefone"  id="tele" placeholder="Digite o seu telefone" required>
            <label for="nomes">endereço</label>
            <input type="text" name="endereco"  id="endereco" placeholder="Digite o seu endereço" required>
            <label for="nomes">CPF</label>
            <input type="text" name="cpf"  id="cpf" placeholder="Digite o seu cpf" required>
            <label for="nomes">Senha</label>
            <input type="password" name="senha"  id="Senha" placeholder="criar  sua Senha" required>
            <label for="nomes">Senha</label>
            <input type="password" name="cenha"  id="Senha" placeholder="repita a sua Senha" required>

            <button type="submit" onclick="logar" name="cadastrar" value="Cadastrar" id="btn-login">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Cadastrar
            </button>
        </form>
        
    </div>
</body>
</html>