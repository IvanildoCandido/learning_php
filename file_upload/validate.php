<?php
echo '<pre>';
print_r($_FILES);
$extensions = ['image/jpg', 'image/png', 'image/jpeg'];
if (in_array($_FILES['file']['type'], $extensions)) {
    $fileName = md5(time() . rand(0, 1000) . '.png');
    move_uploaded_file($_FILES['file']['tmp_name'], "uploads/$fileName");
    echo "Arquivo carregado com sucesso!";
} else {
    echo "Arquivo não permitido!";
}
