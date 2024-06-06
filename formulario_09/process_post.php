<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $quiz_1 = htmlspecialchars($_POST['quiz_1']);
    $quiz_2 = htmlspecialchars($_POST['quiz_2']);
    $quiz_3 = htmlspecialchars($_POST['quiz_3']);

    // Questão 1
    echo "<h1>Gabarito </h1>";

        if($quiz_1 == "4"){
         
        echo " 1 - Parabéns!! Vc acertou em cheio ";
        echo "<br>";

        } 
        
        else{
         
            echo " 1 - Erooouuu BURROOOOO!";
            echo "<br>";
        }

       // Questão 2    
        if($quiz_2 == "2"){
            echo " 2 - Parabéns!! Vc acertou em cheio ";
            echo "<br>";
        } else{
         
            echo " 2 - Erooouuu BURROOOOO!";
            echo "<br>";
        }

        // Questão 3    
        if($quiz_3 == "1"){
            echo " 3 - Parabéns!! Vc acertou em cheio";
            echo "<br>";
        } else{
         
            echo " 3 - Erooouuu BURROOOOO!";
            echo "<br>";
        }
    
       }
?>