<?php

require 'config.php';

 if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
    $nome = filter_input(INPUT_POST, 'nome');
    $preco = filter_input(INPUT_POST, 'preco');
    
    $sql = $pdo->prepare("INSERT INTO produtos (nome, preco) VALUES (:nome, :preco)");
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':preco', $preco);
    $sql->execute();

    echo 'Produto cadastrado';
 }

?>

<form action= "cadastrar.php" method='post'>
    <input type="text" name="nome" placeholder="nome" required>
    <input type="text" name="preco" placeholder="preço" required>
    <input type="submit" value="send">
</form>