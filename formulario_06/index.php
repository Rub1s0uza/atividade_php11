<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 6</title>
      <!--Biblioteca de js-->
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<h1>Utilizando formulários</h1>
    <h2>06 - Feedbak com post</h2>
       <!-- Com o action coloca o nome do seu arquivo secundario, metodo coloque o metodo que vai utilizar a variavel global -->
    <form id="formulario_feedback" action="process_post.php" method= "post"> 
    
        <label for="nome">Nome: </label>
        <input type="text" id="nome" name="nome" requerid placeholder="Digite seu nome"> <br><br>

        <label for="nomeProduto">Nome do produto: </label> 
        <input type="text" id="nomeProduto" name="nomeProduto" placeholder="Digite o nome do produto" ><br><br>

        <label for="feedback">Feedback: </label> 
       <textarea name="feedback" id="feedback" rows="3" cols="30" placeholder="Digite seu feedbak"></textarea><br><br>

       <label for="estrela">Quantas estrelas avalia este atendimento? </label><br>
       <!-- Para deixar para selecionar apenas um valor colocar o mesmo nome para todos-->
       <br>
        <select name="estrela" id="estrela" >
            <option value="1 &#x2605;">1 &#x2605;</option>
            <option value="2 &#x2B50;">2 &#x2B50;</option>
            <option value="3 &#x1F31F;">3 &#x1F31F;</option>
            <option value="4 &#X2728;">4 &#X2728;</option>
            <option value="5 &#x1F320;">5 &#x1F320;</option>
         </select>
        <br>
        <br>
        <input type="submit" value="Enviar">
    </form>
    <div id="resultado"></div>
    <script>

        $(document).ready(function(){
            $('#formulario_feedback').submit(function(event){
                event.preventDefault(); // Evita a submissão padrão do formulário evita que va/exiba a pagina do php

                var nome = $('#nome') .val();
                var nomeProduto = $('#nomeProduto') .val();
                var feedback = $('#feedback') .val();
                var estrela = $('#estrela') .val();

                // Requisição AJAX para process_post.php
                // aqui estamos ativando a biblioteca do js
                // em url vc coloca a sua pasta em php que esta calculando 

                $.ajax({
                    type: 'POST',
                    url: 'process_post.php',
                    // colocando que a nossa variavel recebe o valor do id
                    data: {
                        nome: nome,
                        nomeProduto: nomeProduto,
                        feedback: feedback,
                        estrela: estrela,

                    },

                    // parecido com if, caso de sucesso aparece a resposta do php se nao da erro
                    // se der certo vamos adicionar o valor da resposta na div resultado
                    success: function(response){
                        $('#resultado').html(' ' + response);

                    },
                    error: function(xhr, status, error){
                        $('#resultado').html('Error: ' + error);

                    },
                });
            });
        });
</script>   
</body>
</html>