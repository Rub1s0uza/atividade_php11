<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 02</title>
</head>
<body>
    <h1>Utilizando formulários</h1>
    <!-- Questão 02 -->
    <h2>02 - Login com post</h2>
     <!-- Com o action coloca o nome do seu arquivo secundario, metodo coloque o metodo que vai utilizar a variavel global -->

     <form action="process_post.php" method= "post">
        <label for="usuario">Usuário: </label> 
        <input type="text" id="usuario" name="usuario" requerid> <br><br>

        <label for="senha">Senha: </label> 
        <input type="password"  id="senha" name="senha" required minlength="8" ><br><br>
<!-- Com o submit mandamos para a outra pasta-->
        <input type="submit" value="Enviar">
    </form>
    

    
</body>
</html>