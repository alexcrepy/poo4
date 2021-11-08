<?php

require_once 'Car.php';

$car = new Car('green', 4, 'electric');

// Test sans le frein à main mis au départ

try {
    echo $car->start() . '</br>';
} catch (Exception $e) {
    echo $e->getMessage() . '</br>';
    echo $car->setParkBrake() . '</br>';
} finally {
    echo "Ma voiture roule comme un donut.</br>";
}

// Test avec le frein à main mis au départ

echo '</br>';

// Mise du frein à main au départ
echo $car->setParkBrake();

try {
    echo $car->start() . '</br>';
} catch (Exception $e) {
    echo 'Attention: ' . $e->getMessage() . '</br>';
    echo $car->setParkBrake() . '</br>';
} finally {
    echo "Ma voiture roule comme un donut.</br>";
}
