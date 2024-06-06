<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $usuario = htmlspecialchars($_POST['usuario']);
    $senha = htmlspecialchars($_POST['senha']);

        if ($usuario == "admin" && $senha == "12345678"){
            echo "<h1>Login Realizado com sucesso</h1>";
            echo "<p>Seja bem vindo(a) $usuario </p>";
        } else {
            echo "<h1>Login Inválido </h1>";
            echo "<p> Digite o login corretamente </p>";
        }
  

} else {
    echo "<h1>Acesso Inválido</h1>";
    
}
?>