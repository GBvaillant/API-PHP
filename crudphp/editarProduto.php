<?php 
require 'config.php';

$produto = [];
$id = filter_input(INPUT_GET, 'id');
if($id) { 
    $sql = $pdo->prepare("SELECT * FROM produtos WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    if($sql->rowCount() > 0) { 
        $produto = $sql->fetch(PDO::FETCH_ASSOC);
        echo json_encode($produto);
    } else { 
         header("Location: listar.php");
        // echo 'Algo deu errado';
        exit;
    }
} else { 
        // header("Location: listar.php");
    error_reporting(-1);
    //  echo 'Algo deu errado';
}
?>

<form method="post" action= "./editarAction.php">
    <input type="hidden" name="id" value="<?=$produto['id'];?>"/>
    <label> 
    idSnekaer: <input type="text" name="idSneaker" value="<?=$produto['idSneaker'];?>"/>
    </label>
    <button type="submit">editar</button>

</form>