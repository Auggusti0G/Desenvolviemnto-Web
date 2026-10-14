<?php
//1. Ler com segurança mesmo com outros códigos adicionados

$nome = trim($_GET['nome'] ?? "");

if (empty($nome)) {
    echo "O nome é obrigatório.";
} else {
    echo "Olá, " . htmlspecialchars($nome);
}

if (filter_var($nome, FILTER_VALIDATE_EMAIL)) {
    echo "E-mail válido!";
}
?>