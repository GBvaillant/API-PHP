<?php 
require 'config.php';

$id = filter_input(INPUT_GET, 'id');

if($id) { 
    $sql = $pdo->prepare("DELETE FROM produtos WHERE id = :id");
    $sql -> bindValue(':id', $id);
    $sql -> execute();
}

echo 'Produto excluido !! ';
header ('location: listarFront.php');

?>

