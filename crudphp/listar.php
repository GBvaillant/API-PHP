<?php 
require 'config.php';

$lista = [];
$sql = $pdo->query("SELECT * FROM produtos");
if($sql->rowCount() > 0) { 
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}

echo json_encode($lista);
?>

