<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 9</title>
     <!--Biblioteca de js-->
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<h1>Utilizando formulários</h1>
    <h2>09 - Quiz com post</h2>
       <!-- Com o action coloca o nome do seu arquivo secundario, metodo coloque o metodo que vai utilizar a variavel global -->
    <form id="formulario_quiz" action="process_post.php" method= "post"> 

<!-- Questão 01 -->
    <label for="quiz_1"> <strong>1 - Qual a capital de moscou?</strong> </label><br>
    
     <input type="radio" id="opcao_1" name="quiz_1" value="1" required>
     <label for="opcao_1">1 - Berna; </label><br>

        <input type="radio" id="opcao_2" name="quiz_1" value="2" required>
        <label for="opcao_2">2 - Estados Unidos </label><br>

            <input type="radio" id="opcao_3" name="quiz_1" value="3" required>
            <label for="estrela_3">3 - Brasilia </label><br>
                
                <input type="radio" id="opcao_4" name="quiz_1" value="4" required>
                <label for="opcao_4">4 - Nenhuma opção acima </label><br><br>
          
            
        <!-- Questão 02 -->
                    <label for="quiz_2"> <strong>2 - Sou uma animação, você não me vê chegar, minha cor favorita é VERMELHO, quem sou eu?</strong> </label><br>
    
                        <input type="radio" id="opcao_1" name="quiz_2" value="1" required>
                        <label for="opcao_1">1 - Peter pan </label><br>

                            <input type="radio" id="opcao_2" name="quiz_2" value="2" required>
                            <label for="opcao_2">2 - Carlos marquinhos </label><br>

                                <input type="radio" id="opcao_3" name="quiz_2" value="3" required>
                                <label for="estrela_3">3 - Chuck </label><br>
                                    
                                    <input type="radio" id="opcao_4" name="quiz_2" value="4" required>
                                    <label for="opcao_4">4 - Nenhuma opção acima </label><br><br>
        
                        <!-- Questão 02 -->
                                    <label for="quiz_3"> <strong>3 - Com quantos paus se faz uma canoa?</strong> </label><br>
                    
                                        <input type="radio" id="opcao_1" name="quiz_3" value="1" required>
                                        <label for="opcao_1">1 - Um </label><br>

                                            <input type="radio" id="opcao_2" name="quiz_3" value="2" required>
                                            <label for="opcao_2">2 - Cinco </label><br>

                                                <input type="radio" id="opcao_3" name="quiz_3" value="3" required>
                                                <label for="estrela_3">3 - Quatorze </label><br>
                                                    
                                                    <input type="radio" id="opcao_4" name="quiz_3" value="4" required>
                                                    <label for="opcao_4">4 - Oito </label><br><br>

                                                        <input type="submit" value="Cadastrar">
                                                        </form>

                                                        <div id="resultado"></div>

<script>

        $(document).ready(function(){
            $('#formulario_quiz').submit(function(event){
                event.preventDefault(); // Evita a submissão padrão do formulário evita que va/exiba a pagina do php

                // Capturando os valores dos radio buttons
                var quiz_1 = $('input[name="quiz_1"]:checked').val();
                var quiz_2 = $('input[name="quiz_2"]:checked').val();
                var quiz_3 = $('input[name="quiz_3"]:checked').val();

                // Requisição AJAX para process_post.php
                // aqui estamos ativando a biblioteca do js
                // em url vc coloca a sua pasta em php que esta calculando 
                
                // Verificando se todos os radio buttons foram selecionado
                if (quiz_1 && quiz_2 && quiz_3) {
                $.ajax({
                    type: 'POST',
                    url: 'process_post.php',
                    // colocando que a nossa variavel recebe o valor do id
                    data: {
                        quiz_1: quiz_1,
                        quiz_2: quiz_2,
                        quiz_3: quiz_3,

                    },

                    // parecido com if, caso de sucesso aparece a resposta do php se nao da erro
                    // se der certo vamos adicionar o valor da resposta na div resultado
                    success: function(response){
                        $('#resultado').html('Resultado: ' + response);

                    },
                    error: function(xhr, status, error){
                        $('#resultado').html('Error: ' + error);

                    },
                }); } 
                else {
                        // Se algum dos radio buttons não estiver selecionado, exiba uma mensagem de erro
                        $('#resultado').html('Por favor, selecione uma opção para cada pergunta.');

                }
            });
        });
        
</script>   
 
</body>
</html>