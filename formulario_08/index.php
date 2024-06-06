<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 8</title>
</head>
<body>
<h1>Utilizando formulários</h1>
    <h2>08 - Newsletter com post</h2>
       <!-- Com o action coloca o nome do seu arquivo secundario, metodo coloque o metodo que vai utilizar a variavel global -->
    <form action="process_post.php" method= "post"> 

    <label for="email">Digite seu email e receba grandes notícias sempre atualizadas: </label>
    <input type="email" id="email" name="email" required><br><br>

    <input type="submit" value="Cadastrar">
    </form>
</body>
</html>