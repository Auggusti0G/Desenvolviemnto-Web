<?php

    include 'conexao.php';

    // --- Listagem completa ----
    $sql = "SELECT * FROM aluno";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    $alunos = $stmt->fetchAll();
    // ------ Fim Listagem -------

    // --- Selecionar para edição -----
    $id = isset($_GET['id']) ? $_GET['id'] : '';
    $sqlEdit = "SELECT * FROM aluno WHERE id =:id";
    $stmtEdit = $pdo->prepare($sqlEdit);
    $stmtEdit->bindParam(":id", $id);
    $stmtEdit->execute();
    $alunoSelecionado = $stmtEdit->fetch();
    // ---- Fim da seleção para edição ------
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="inserir.php">

        <input type="hidden" name="id" 
                             value="<?php echo isset($alunoSelecionado['id']) ? 
                                                     $alunoSelecionado['id']  :
                                                     ''; ?>">

        Nome: <input type="text" name="nome" 
                     value="<?php echo isset($alunoSelecionado['nome']) ? 
                                             $alunoSelecionado['nome']  :
                                             ''; ?>">

        Idade: <input type="number" name="idade"
                      value="<?php echo isset($alunoSelecionado['idade']) ? 
                                              $alunoSelecionado['idade']  :
                                             ''; ?>">

        <input type="submit" value="Salvar">
    </form>

    <br>

    <table border="1" width="100%">
        <tr>
            <th>Nome</th>
            <th>Idade</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($alunos as $aluno) { ?>
            <tr>
                <td><?php echo $aluno['nome'] ?></td>
                <td><?php echo $aluno['idade'] ?></td>
                <td>
                    <a href="index.php?id=<?php echo $aluno['id'] ?>">Editar</a> |
                    <a href="excluir.php?id=<?php echo $aluno['id'] ?>">Excluir</a>
                </td>
            </tr>
        <?php } ?>
    </table>

</body>
</html>