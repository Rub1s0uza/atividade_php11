<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero1 = $_POST['numero1'];
    $operador = $_POST['operador'];
    $numero2 = $_POST['numero2'];
    
    switch($operador){

        case 'soma' :
           
           $resultado = $numero1 + $numero2;
           
            break;

        case 'subtracao' :
          
            $resultado = $numero1 - $numero2;
           
            break;
        
        
        case 'divisao' :
            if ($numero2 != 0) {
                $resultado = $numero1 / $numero2;
            } else {
                $resultado = "Erro: Divisão por zero";
            }
            $resultado = $numero1 / $numero2;
            
            break;

        case 'multiplicacao' :
           
            $resultado = $numero1 / $numero2;
           
          break;    
    }

  
    echo $resultado;
// echo json_encode($resultado)
} 

?>