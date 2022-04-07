<?php
require 'config.php';
$user = [];
$id = filter_input(INPUT_GET, 'id');
if ($id) {
    $sql = $pdo->prepare("SELECT * FROM users WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    if ($sql->rowCount() > 0) {
        $user = $sql->fetch(PDO::FETCH_ASSOC);
    } else {
        header('Location: connect.php');
        exit;
    }
} else {
    header('Location: connect.php');
    exit;
}
?>
<h2>Edição de Usuários</h2>
<form method="POST" action="editUser_action.php?id=<?= $id ?>">
    <label>Digite um nome:</label>
    <input type="text" name="name" value="<?= $user['name'] ?>" />
    <label>Digite um email:</label>
    <input type="email" name="email" value="<?= $user['email'] ?>" />
    <button type="submit" name="btnSave">Salvar</button>
</form>