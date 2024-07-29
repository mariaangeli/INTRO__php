<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Ejemplo 1: Definición y uso básico de una constante global
define('PI', 3.14159);
echo 'El valor de PI es: ' . PI . "<br>"; // Salida: El valor de PI es: 3.14159

// Ejemplo 2: Definición de una constante con la palabra clave const
const GRAVITY = 9.81;
echo 'La gravedad es: ' . GRAVITY . " m/s²<br>"; // Salida: La gravedad es: 9.81 m/s²

// Ejemplo 3: Constantes dentro de una clase
class Configuracion {
    const DB_HOST = 'localhost';
    const DB_USER = 'root';
    const DB_PASS = 'contraseña';
    const DB_NAME = 'mi_base_de_datos';
}

// Usar constantes de clase
echo 'Host de la base de datos: ' . Configuracion::DB_HOST . "<br>"; // Salida: Host de la base de datos: localhost
echo 'Usuario de la base de datos: ' . Configuracion::DB_USER . "<br>"; // Salida: Usuario de la base de datos: root

// Ejemplo 4: Constantes de array (PHP 5.6+)
define('COLORS', [
    'rojo' => '#FF0000',
    'verde' => '#00FF00',
    'azul' => '#0000FF'
]);

// Usar constantes de array
echo 'El color verde es: ' . COLORS['verde'] . "<br>"; // Salida: El color verde es: #00FF00

// Ejemplo 5: Constantes en funciones
function calcularAreaCirculo($radio) {
    return PI * $radio * $radio;
}

$radio = 5;
$area = calcularAreaCirculo($radio);
echo "El área de un círculo con radio $radio es: $area<br>"; // Salida: El área de un círculo con radio 5 es: 78.53975

// Ejemplo 6: Ejemplo de constantes globales y locales
function imprimirConstantes() {
    // Constante local a la función
    const LOCAL_CONSTANT = 'Soy una constante local';
    echo LOCAL_CONSTANT . "<br>";
}

// Llamada a la función
imprimirConstantes(); // Salida: Soy una constante local

// Intento de modificar una constante (esto causará un error)
// define('PI', 3.14); // Descomentando esto generará un error

?>

    
</body>
</html>

