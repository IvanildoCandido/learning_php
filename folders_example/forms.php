<?php
include('./template/header.php');
session_start();
if ($_SESSION['alert']) {
    echo $_SESSION['alert'];
    $_SESSION['alert'] = '';
}
?>
<h1>Exemplo de Formulário</h1>
<form method="POST" action="dataForm.php">
    <label>Usuário:</label>
    <input type="text" name="user" />
    <br>
    <label>Senha:</label>
    <input type="password" name="pass" />
    <br>
    <label>Email:</label>
    <input type="text" name="email" />
    <br>
    <button type="submit" name="btSignin">Enviar</button>
</form>