<?php
require '../utils/config.php';
require '../dao/UserDaoMysql.php';
$userDao = new UserDaoMysql($pdo);

$user = false;
$id = filter_input(INPUT_GET, 'id');
if ($id) {
    $user = $userDao->findById($id);
}
if ($user === false) {
    header("Location: index.php");
    exit;
}
?>
<h2>Edição de Usuários</h2>
<form method="POST" action="editUser_action.php?id=<?= $id ?>">
    <label>Digite um nome:</label>
    <input type="text" name="name" value="<?= $user->getName(); ?>" />
    <label>Digite um email:</label>
    <input type="email" name="email" value="<?= $user->getEmail(); ?>" />
    <button type="submit" name="btnSave">Salvar</button>
</form>