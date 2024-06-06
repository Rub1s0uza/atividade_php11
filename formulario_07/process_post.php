<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $evento = htmlspecialchars($_POST['evento']);
    

        echo "<h1>Feedbak</h1>";
        echo "<p>Seja bem vindo(a) $nome!!</p>";
        echo "<p> Ficamos felizes em escolher nosso evento de $evento!";

  
   
   

} else {
    echo "<h1>Cadastro Inválido  </h1>";
    echo "<p>Por favor, tente novamente</p>";
}
?>