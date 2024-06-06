<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 7</title>
</head>
<body>
<h1>Utilizando formulários</h1>
    <h2>07 - Feedbak com post</h2>
       <!-- Com o action coloca o nome do seu arquivo secundario, metodo coloque o metodo que vai utilizar a variavel global -->

    <form action="process_post.php" method= "post"> 
        
        <label for="nome">Nome: </label>
        <input type="text" id="nome" name="nome" requerid placeholder="Digite seu nome"> <br><br>

        <label for="email">Email: </label>
        <input type="email" id="email" name="email" requerid placeholder="Digite seu email"> <br><br>

        <label for="evento"> Escolha um evento:  </label>
         <select name="evento" id="evento" >
            <option value="Circo">Circo</option>
            <option value="Mergulho">Mergulho</option>
            <option value="Trilha">Trilha</option>
            <option value="Pesque-pague">Pesque-pague</option>
         </select>
         
        <br><br>
        <input type="submit" value="Enviar">

    </form>
</body>
</html>