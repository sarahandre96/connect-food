<?php

//die("container-login");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css"/>
   
</head>
<body>
    <div id="container-login">
        <h1 id="h1-login">
            Login
        </h1>

        
           
            <label for="nomes">Nome</label>
            <input type="text" name="nomes"  id="nomes"  placeholder="Digite o seu nome" required>
            <label for="nomes">Senha</label>
            <input type="password" name="Senha"  id="Senha" placeholder="Digite o sua Senha" required>
            <a href="#" target="_blank" id="esqueceu">esqueceu sua Senha</a>

            <button type="submit" onclick="logar" value="Entrar" id="btn-login">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Entrar
            </button>
        </form>

        <div id="registro">
            <p>Ainda não é cliente faça seu cadastro</p>
            <a href="cadastrar.php" target="_blank">Tornar-se nosse cliente</a>
        </div>
    </div>
</body>
</html>