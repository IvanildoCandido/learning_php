<?php
?>
<h2>Cadastro de Usuários</h2>
<form method="POST" action="../actions/addUser_action.php">
    <label>Digite um nome:</label>
    <input type="text" name="name" />
    <label>Digite um email:</label>
    <input type="email" name="email" />
    <button type="submit" name="btnSave">Salvar</button>
</form>