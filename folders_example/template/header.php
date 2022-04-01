<h1>Meu Site</h1>
<?php
if (isset($_COOKIE['userName'])) {
    $userName = $_COOKIE['userName'];
    echo "<h3>$userName</h3>";
}
?>
<hr>