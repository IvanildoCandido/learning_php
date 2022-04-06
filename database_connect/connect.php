<?php
require 'config.php';
$list = [];
$sql = $pdo->query('SELECT * FROM users');



if ($sql->rowCount() > 0) {
    $list = $sql->fetchAll(PDO::FETCH_ASSOC);
}

?>
<a href="addUser.php">Adicionar Usuário</a>
<table border="1" width="100%">
    <thead>
        <th>ID</th>
        <th>USUÁRIO</th>
        <th>EMAIL</th>
        <th>AÇÕES</th>
    </thead>
    <tbody>
        <?php foreach ($list as $user) : ?>
            <tr>
                <td><?= $user['id']; ?></td>
                <td><?= $user['name']; ?></td>
                <td><?= $user['email']; ?></td>
                <td align="center">
                    <a href="edit.php?id=<?= $user['id']; ?>">[ Editar ]</a>
                    <a href="delete.php?id=<?= $user['id']; ?>">[ Excluir ]</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>

</table>