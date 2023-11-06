<?php

$db_name = 'crudphp';
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';

// try {
    $pdo = new PDO("mysql:dbname=" . $db_name . ";host=" . $db_host, $db_user, $db_password);
    // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//     $pdo->exec("CREATE DATABASE IF NOT EXISTS db_produtos");
//     $pdo->exec("USE db_produtos");

//     $pdo->exec("CREATE TABLE IF NOT EXIST produtos (
//         id INT AUTO_INCREMENT PRIMARY KEY,
//         nome VARCHAR(255) NOT NULL,
//         preco FLOAT NOT NULL
//     )");
// } catch (PDOException $e) { 
//     die("Erro na conexão com o banco: " .$e->getMessage());
// }
