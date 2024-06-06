<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 10</title>
</head>
<body>
<h2>10 - Enquete com post</h2>
       <!-- Com o action coloca o nome do seu arquivo secundario, metodo coloque o metodo que vai utilizar a variavel global -->
    <form action="process_post.php" method= "post"> 

    <label for="enquete">Quais animais são você acha fofo:</label><br>

    <input type="checkbox" id="animal_1" name="animal[]" value="cachorro">
    <label for="animal_1">Cachorro</label><br>
    
    <input type="checkbox" id="animal_2" name="animal[]" value="macaco">
    <label for="animal_2">Macaco</label><br>

    <input type="checkbox" id="animal_3" name="animal[]" value="gato">
    <label for="animal_3">Gato</label><br>

    <input type="checkbox" id="animal_4" name="animal[]" value="panda">
    <label for="animal_4">Panda</label><br><br>

    <input type="submit" value="Enviar">
    </form>

</body>
</html>