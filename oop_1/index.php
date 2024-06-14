<?php

require_once 'classes/Car.php';

$car1 = new Car('чёрный', 4, 180, 'volvo');
$car2 = new Car('чёрный', 4, 200, 'bmv');

echo $car1->getCarInfo();
echo $car2->getCarInfo();



