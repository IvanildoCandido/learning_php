<?php
require '../utils/config.php';
require '../dao/UserDaoMysql.php';
$userDao = new UserDaoMysql($pdo);
$list = $userDao->findAll();
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
                <td><?= $user->getId(); ?></td>
                <td><?= $user->getName(); ?></td>
                <td><?= $user->getEmail(); ?></td>
                <td align="center">
                    <a href="editUser.php?id=<?= $user->getId(); ?>">[ Editar ]</a>
                    <a href="deleteUser.php?id=<?= $user->getId(); ?>" onclick="return confirm('Tem certeza que deseja excluir?')">[ Excluir ]</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>

</table>