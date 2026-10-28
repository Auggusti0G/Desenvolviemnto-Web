<?php

    include 'conexao.php';

    $login = $_POST['usuario'];
    $senha = md5($_POST['senha']);

    $sql =  " SELECT * FROM usuario 
              WHERE login =:login AND 
                    senha =:senha ";
    
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":login", $login);
    $stmt->bindParam(":senha", $senha);
    $stmt->execute();

    $usuario = $stmt->fetch();

    if($usuario) {
        header("Location: aluno/index.php");
    } else {
        echo "Usuário ou senha inválidos";
    }

?>