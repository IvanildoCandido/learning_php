<h1>Cadastro de nomes:</h1>
<form method="POST" action="validate.php">
    <label>Digite um nome:</label>
    <input type="text" name="name" />
    <button type="submit" name="btSignin">Salvar</button>
</form>
<ul>
    <?php
    $names = explode("\n", file_get_contents('names.txt'));
    array_map(function ($item) {
        if ($item) {
            echo "<li>$item</li>";
        }
    }, $names);
    ?>
</ul>