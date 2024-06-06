<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $assunto = htmlspecialchars($_POST['assunto']);
    $mensagem = htmlspecialchars($_POST['mensagem']);
 
    
    echo "<h1>Contato</h1>";
    echo "<p>Muito obrigada $nome, já já iremos entrar em contato!</p>";
    echo "<p> Chamado referente a <strong>$assunto</strong>";
   

} else {
    echo "<h1>Contato Inválido </h1>";
    echo "<p>Por favor, tente novamente</p>";
}
?>