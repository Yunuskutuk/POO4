<?php

require_once 'Car.php';


$tesla = new Car("black", 4, 'electric');
$tesla->setParkBrake(true);

try {
    echo "On démarre la voiture</br>";
    $tesla->start();
} catch(Exception $e){
    $tesla->setParkBrake(false);
    echo "Exception received  : ". $e->getMessage() . "</br>On a enlevé le frein à main, on peut démarrer!</br>";
    $tesla->start();
} finally{
    echo "Ma voiture roule comme un donut";
}