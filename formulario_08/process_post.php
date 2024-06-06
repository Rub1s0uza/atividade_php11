<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars($_POST['email']);

    
        echo "<h1>Email cadastrado</h1>";
        echo "<p> Ficamos felizes com sua participação! </p> <p>A partir de agora receberá grandes noticias por meio do seu email &#x1F60E;</p>";

  
   
   

} else {
    echo "<h1>Email Inválido  </h1>";
    echo "<p>Por favor, tente novamente</p>";
}
?>