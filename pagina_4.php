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
    $a = 10;
    $b = 20;

    // Operador de igualdad
    echo ($a == $b) ? 'Iguales' : 'Diferentes'; // Salida: Diferentes

    // Operador de desigualdad
    echo ($a != $b) ? 'Diferentes' : 'Iguales'; // Salida: Diferentes

    // Operador de identidad (igualdad estricta)
    echo ($a === $b) ? 'Iguales' : 'Diferentes'; // Salida: Diferentes

    // Operador de no identidad (desigualdad estricta)
    echo ($a !== $b) ? 'Diferentes' : 'Iguales'; // Salida: Diferentes

    // Operador mayor que
    echo ($a > $b) ? 'Mayor' : 'No mayor'; // Salida: No mayor

    // Operador menor que
    echo ($a < $b) ? 'Menor' : 'No menor'; // Salida: Menor

    // Operador mayor o igual que
    echo ($a >= $b) ? 'Mayor o igual' : 'Menor'; // Salida: Menor

    // Operador menor o igual que
    echo ($a <= $b) ? 'Menor o igual' : 'Mayor'; // Salida: Menor
    ?>

</body>
</html>