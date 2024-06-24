<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $operador = $_POST['operador'];

    function suma($valor1, $valor2) 
    {
        return $valor1 + $valor2;
    }
    
    function resta($valor1, $valor2) {
        return $valor1 - $valor2;
    }
    
    function multiplicacion($valor1, $valor2) 
    {
        return $valor1 * $valor2;
    }
    
    function division($valor1, $valor2) 
    {
        if ($valor2 == 0) 
        {
            echo"No se puede dividir por cero.";
        }
        return $valor1 / $valor2;
    }

    switch ($operador) {
        case 'suma':
            $resultado = suma($valor1, $valor2);
            echo"Resultado=".$resultado;
            break;
        case 'resta':
            $resultado = resta($valor1, $valor2);
            echo"Resultado=".$resultado;
            break;
        case 'multiplicacion':
            $resultado = multiplicacion($valor1, $valor2);
            echo"Resultado=".$resultado;
            break;
        case 'division':
            $resultado = division($valor1, $valor2);
            echo"Resultado=".$resultado;
            break;
    }

            
    }
}
?>
