<?php

    include '../conexao.php';

    // Recuperando as informações do formulário
    $id    = $_GET['id'];
    $nome  = $_GET['nome'];
    $idade = $_GET['idade'];

    if($id) {
        // Execução SQL de atualização
        $sql = "UPDATE aluno SET nome =:nome, idade =:idade WHERE id =:id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":idade", $idade);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    } else {
        // Execução SQL de Inserção
        $sql = " INSERT INTO aluno (nome, idade) VALUES ('$nome', $idade);";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
    }
    header("Location: index.php");

?>