<?php
require 'config.php';

// Configurar cabeçalhos CORS para permitir acesso de qualquer origem
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS"); // Adicione outros métodos se necessário
header("Access-Control-Allow-Headers: Content-Type"); // Adicione outros cabeçalhos se necessário

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    // Lida com solicitações preflight (usadas pelo navegador para verificar permissões)
    header("HTTP/1.1 200 OK");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $data = file_get_contents('php://input');
        $jsonData = json_decode($data);

        if ($jsonData !== null && isset($jsonData->idSneaker)) {
            $idSneaker = $jsonData->idSneaker;

            $sql = $pdo->prepare("INSERT INTO produtos (idSneaker) VALUES (:idSneaker)");
            $sql->bindValue(":idSneaker", $idSneaker);
            $sql->execute();

            if ($sql->rowCount() > 0) {
                echo "ID do Sneaker inserido com sucesso: $idSneaker";
            } else {
                echo "Erro: Não foi possível inserir o ID do Sneaker.";
            }
        } else {
            echo "Erro: Dados inválidos ou ausentes no formato JSON.";
        }
    } catch (PDOException $e) {
        echo "Erro ao inserir o ID do Sneaker: " . $e->getMessage();
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
    try {
        $sql = $pdo->prepare("SELECT * FROM produtos");
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($result);
    } catch (PDOException $e) {
        echo "Erro ao buscar dados: " . $e->getMessage();
    }
}

?>

<form action="cadastrar.php" method="post">

<input type="text" name="idSneaker">
<input type="submit" value="Send" >
</form>
