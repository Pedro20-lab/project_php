<?php

use function PHPSTORM_META\type;

try {
    $pdo = new PDO('mysql:host=mysql;dbname=sjreal;charset=utf8mb4', 'superuser', 'mypassword');

    $query = 'SELECT `numero_habitacion`, `descripcion_habitacion`, `habitacion_tipo`, `status_habitacion`, `precio_habitacion` FROM `habitaciones`';
    $habs = $pdo->query($query);
    

    $title = 'Lista de habitaciones';

    ob_start();

    include __DIR__ . '/../templates/habitaciones.html.php';

    $output = ob_get_clean();
} catch (PDOException $e) {
    $title = 'An error has occurred';

    $output = "Something went wrong" . $e->getMessage() . "in" . $e->getFile() . ": " . $e->getLine();
}

include __DIR__ . "/../templates/layout.html.php";
