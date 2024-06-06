<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $feedback = htmlspecialchars($_POST['feedback']);
    $nomeProduto = htmlspecialchars($_POST['nomeProduto']);
    $estrela = htmlspecialchars($_POST['estrela']);

 
    
    echo "<h1>Feedbak</h1>";
    echo "<p>Muito obrigada $nome por seu feedbak!</p>";
    echo "<br>";
    echo " <p> Ficamos felizes por nos avaliar com $estrela </p> ";
    echo "<br>";
    echo "<p> Chamado referente a <strong>$nomeProduto</strong> </p>";
   
} else {
    echo "<h1>Cadastro Inválido  </h1>";
    echo "<p>Por favor, tente novamente</p>";
}
?>