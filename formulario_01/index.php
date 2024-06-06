<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 01</title>
</head>
<body>
    <h1>Utilizando formulários</h1>

    <!-- Questão 01 -->
    <h2>01 - Cadastrando usuário com post</h2>
       <!-- Com o action coloca o nome do seu arquivo secundario, metodo coloque o metodo que vai utilizar a variavel global -->
    <form action="process_post.php" method= "post"> 
        <label for="nome">Nome: </label>
        <input type="text" id="name" name="name" requerid> <br><br>

        <label for="email">Email: </label> 
        <input type="email" id="email" name="email" requerid> <br><br>

        <label for="idade">Idade: </label> 
        <input type="number" id="idade" name="idade" ><br><br>
<!-- Com o submit mandamos para a outra pasta-->
        <input type="submit" value="Enviar">
    </form>
    
</body>
</html>