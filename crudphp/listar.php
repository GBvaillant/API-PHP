<?php 
require 'config.php';

header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *"); // Permite qualquer origem
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS"); // Métodos HTTP permitidos
header("Access-Control-Allow-Headers: Content-Type, Authorization"); // Cabeçalhos personalizados permitidos


$lista = [];
$sql = $pdo->query("SELECT * FROM produtos");
if($sql->rowCount() > 0) { 
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}

$dataLista = json_encode($lista);
echo $dataLista
?>


