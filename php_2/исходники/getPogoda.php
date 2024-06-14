<?php
function getPogoda($weatherData)
{
    $yellowDwarf = getThePresenceOfClouds($weatherData['sun']);
    $thermometer = getConvertKelToCel($weatherData['temperature']);
    $aRush = getConvertKmChToMS($weatherData['wind_speed']);
    $humidity = $weatherData['humidity'];
    $fallingWater = getTheProbabilityOfRain($weatherData['rain']);
    $circle = round($aRush, 4);
    $date = $weatherData['date'];
    $result = "$date $yellowDwarf, air temperature - $thermometer*C, wind speed $circle м\с, air humidity - $humidity, $fallingWater";
    return $result . "\n";
}