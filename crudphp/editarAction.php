<?php 
require 'config.php';

$id = filter_input(INPUT_POST, 'id');
$nome = filter_input(INPUT_POST, 'nome');
$preco = filter_input(INPUT_POST, 'preco');
if($id && $nome && $preco) { 

    $sql = $pdo->prepare("UPDATE produtos SET nome = :nome, preco = :preco WHERE id = :id");
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':preco', $preco);
    $sql->bindValue(':id', $id);
    $sql->execute();

header ('location: listar.php');
exit;
}else{ 
    // header("Location: listar.php");
    echo'erro';
}
?>