<?php 
require 'config.php';

$lista = [];
$sql = $pdo->query("SELECT * FROM produtos");
if($sql->rowCount() > 0) { 
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}

?>

<table>
    <tr>
    <th>ID</th>
    <th>NOME</th>
    <th>PREÇO</th>
    </tr>
    <?php foreach($lista as $produto): ?>

<tr>
    <td><?=$produto['id'];?></td>
    <td><?=$produto['nome'];?></td>
    <td><?=$produto['preco'];?></td>
    <td>
        <a href="excluir.php?id=<?=$produto['id'];?>">Excluir</a>
        <a href="editarProduto.php?id=<?=$produto['id'];?>">Editar</a>
    </td>
</tr>

<?php endforeach; ?>
</table>


