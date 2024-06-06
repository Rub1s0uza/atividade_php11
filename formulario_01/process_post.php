<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $idade = htmlspecialchars($_POST['idade']);
    
    echo "<h1>Cadastro Realizado com sucesso</h1>";
    echo "<p>Nome: $name</p>";
    echo "<p>Email: $email</p>";
} else {
    echo "<h1>Acesso Inválido</h1>";
    echo "<p>Por favor, envie o formulário corretamente.</p>";
}
?>