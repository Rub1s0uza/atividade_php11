<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 4</title>
</head>
<body>
    <h1>Utilizando formulários</h1>
    <h2>04 - Contato com post</h2>
       <!-- Com o action coloca o nome do seu arquivo secundario, metodo coloque o metodo que vai utilizar a variavel global -->
    <form action="process_post.php" method= "post"> 
        <label for="nome">Nome: </label>
        <input type="text" id="nome" name="nome" requerid> <br><br>

        <label for="email">Email: </label> 
        <input type="email" id="email" name="email" requerid> <br><br>

        <label for="assunto">Assunto: </label> 
        <input type="text" id="assunto" name="assunto" ><br><br>

        <label for="mensagem">Mensagem: </label> 
       <textarea name="mensagem" id="mensagem" rows="4" cols="50"></textarea><br><br>

<!-- Com o submit mandamos para a outra pasta-->
        <input type="submit" value="Enviar">
</body>
</html>