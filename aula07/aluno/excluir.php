<?php

    include '../conexao.php';

    $id = $_GET['id'];

    $sql = "DELETE FROM aluno WHERE id =:id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":id", $id);

    $stmt->execute();

    header("Location: index.php");

?>