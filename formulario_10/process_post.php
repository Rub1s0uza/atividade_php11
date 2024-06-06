<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

   // $enquete = ($_POST['enquete']);

    $animal = $_POST['animal'];
    

    $listaAnimal = '';
    foreach($animal as $a){
        $listaAnimal .= $a.',';
    }
    

   echo "Suas escolhas $listaAnimal foram excelentes!";

} else {
    echo "<h1> Inválido  </h1>";
    echo "<p>Por favor, tente novamente</p>";
}
?>