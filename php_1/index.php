<?php

$temps = [12, -12, 122, -23, 456, 87, -100, 400, 56, 345, 87, -34, -7, 10, 56];
function getState($temperature)
{
    if ($temperature > 100) {
        $state = 'steam';
    } elseif ($temperature < 0) {
        $state = 'ice';
    } else {
        $state = 'watter';
    }
    return $state;
}

function getStateImg($s)
{

    if ($s == 'steam') {
        $img = '💨';
    } elseif ($s == 'ice') {
        $img = '🧊';
    } else {
        $img = '💧';
    }
    return $img;
}

foreach ($temps as $temp) {
 $ss = getState($temp);
    echo getStateImg($ss);
}

//
//💧
//
//🧊
//
//💨
