<?php

    // Estabelecer a conexão com o banco de dados;
    $host = '127.0.0.1';
    $db   = 'exemplo';
    $user = 'root';
    $pass = 'ceub123456';

    $dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";
    $pdo = new PDO($dsn, $user, $pass);

?>