<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $operador = $_POST['operador'];

    switch ($operador) {
        case 'suma':
            $resultado = $valor1 + $valor2;
            echo"Resultado =". $resultado;
            break;
        case 'resta':
            $resultado = $valor1 - $valor2;
            echo"Resultado =". $resultado;
            break;
        case 'multiplicacion':
            $resultado = $valor1 * $valor2;
            echo"Resultado =". $resultado;
            break;
        case 'division':
            $resultado = $valor1 / $valor2;
            echo"Resultado =". $resultado;
            break;
        default:
            $error = "Operador no válido.";
            
    }
}
?>
