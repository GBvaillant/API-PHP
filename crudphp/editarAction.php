<?php 
require 'config.php';

$idSneaker = filter_input(INPUT_POST, 'idSneaker');
if($idSneaker) { 

    $sql = $pdo->prepare("UPDATE produtos SET idSneaker = :idSneaker WHERE id = :id");
    $sql->bindValue(':idSneaker', $idSneaker);
    $sql->execute();

header ('location: listar.php');
exit;
}else{ 
    // header("Location: listar.php");
    echo'erro';
}
?>