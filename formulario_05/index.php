<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 5</title>
    <!--Biblioteca de js-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    

</head>
<body>
<h1>Utilizando formulários</h1>
    <h2>05 - Calculadora com post</h2>
       <!-- Com o action coloca o nome do seu arquivo secundario, metodo coloque o metodo que vai utilizar a variavel global -->
    <form id="formulario" action="process_post.php" method= "post"> 

        <label for="numero1">Digite um número: </label>
        <input type="text" id="numero1" name="numero1" required> <br><br>

        <label for="operador"> Digite qual operador deseja: </label>
            <select name="operador" id="operador">
                <option value="soma">+Soma+</option>
                <option value="subtracao">-Subtração-</option>
                <option value="divisao">/Divisão/</option>
                <option value="multiplicacao">*Multiplicação*</option>

         </select> <br><br>
        <label for="numero2">Digite um número: </label>
        <input type="text" id="numero2" name="numero2" required> <br><br>

        <input type="submit" value="Enviar">
    </form>
    <br>
    <div id="resultado"></div>

<script>

        $(document).ready(function(){
            $('#formulario').submit(function(event){
                event.preventDefault(); // Evita a submissão padrão do formulário evita que va/exiba a pagina do php

                var numero1 = $('#numero1') .val();
                var numero2 = $('#numero2') .val();
                var operador = $('#operador') .val();

                // Requisição AJAX para process_post.php
                // aqui estamos ativando a biblioteca do js
                // em url vc coloca a sua pasta em php que esta calculando 

                $.ajax({
                    type: 'POST',
                    url: 'process_post.php',
                    // colocando que a nossa variavel recebe o valor do id
                    data: {
                        numero1: numero1,
                        numero2: numero2,
                        operador: operador,

                    },

                    // parecido com if, caso de sucesso aparece a resposta do php se nao da erro
                    // se der certo vamos adicionar o valor da resposta na div resultado
                    success: function(response){
                        $('#resultado').html('Resultado: ' + response);

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