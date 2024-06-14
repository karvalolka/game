<?php
function getTheProbabilityOfRain($precipitation)
{
    if ($precipitation >= 90) {
        $rain = 'hail';
    } elseif (
        $precipitation >= 60 && $precipitation < 90
    ) {
        $rain = 'rainfall';
    } elseif (
        $precipitation >= 30 && $precipitation < 60
    ) {
        $rain = 'Rain';
    } elseif (
        $precipitation >= 10 && $precipitation < 30
    ) {
        $rain = 'light rain';
    } else {
        $rain = 'rain is unlikely';
    }
    return $rain;
}