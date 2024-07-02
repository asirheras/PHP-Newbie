<?php
// Verifica si la función readline está disponible
if (function_exists('readline')) {
    // Solicita la edad al usuario
    $age = readline("Por favor, introduce tu edad: ");
    
    // Verifica si la entrada es un número
    if (!is_numeric($age)) {
        echo "Por favor, introduce un número válido para la edad.\n";
    } else {
        // Convierte la entrada a un entero
        $age = (int)$age;

        // Determina si es mayor o menor de edad
        if ($age >= 18) {
            echo "Eres mayor de edad.\n";
        } else {
            echo "Eres menor de edad.\n";
        }
    }
} else {
    echo "La función readline no está disponible en tu entorno PHP.\n";
}
?>
