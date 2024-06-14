<?php
$weathers = [
    [
        'date' => '1.06.2024',
        'sun' => '90%',
        'wind_speed' => 30,
        'speed_units' => 'км/ч',
        'humidity' => 60,
        'rain' => '5%',
        'temperature' => 293,
    ],
    [
        'date' => '2.06.2024',
        'sun' => '30%',
        'wind_speed' => 10,
        'speed_units' => 'км/ч',
        'humidity' => 80,
        'rain' => '70%',
        'temperature' => 295,
    ],
    [
        'date' => '3.06.2024',
        'sun' => '50%',
        'wind_speed' => 20,
        'speed_units' => 'км/ч',
        'humidity' => 90,
        'rain' => '100%',
        'temperature' => 290,
    ],
    [
        'date' => '4.06.2024',
        'sun' => '10%',
        'wind_speed' => 50,
        'speed_units' => 'км/ч',
        'humidity' => 70,
        'rain' => '80%',
        'temperature' => 291,
    ],
    [
        'date' => '5.06.2024',
        'sun' => '80%',
        'wind_speed' => 40,
        'speed_units' => 'км/ч',
        'humidity' => 80,
        'rain' => '30%',
        'temperature' => 297,
    ],
];

include_once 'исходники/getConvertKelToCel.php';
include_once 'исходники/getThePresenceOfClouds.php';
include_once 'исходники/getConvertKmChToMS.php';
include_once 'исходники/getTheProbabilityOfRain.php';
include_once 'исходники/getPogoda.php';

foreach ($weathers as $weather) {
    $weather = getPogoda($weather);
    echo $weather;
}


