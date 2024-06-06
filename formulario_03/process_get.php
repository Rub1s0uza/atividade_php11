<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $pesquisa = htmlspecialchars($_GET['pesquisa']);
 
    
    echo "<h1>Procurando...</h1>";
    echo "<p>Estamos procurando por $pesquisa</p>";

} else {
    echo "<h1>Pesquisa Inválida </h1>";
    echo "<p>Por favor, tente novamente</p>";
}
?>