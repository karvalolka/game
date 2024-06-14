<?php
function getThePresenceOfClouds($sunny)
{
    if ($sunny > 80) {
        $cloudСover = 'sunny';
    } elseif ($sunny < 30) {
        $cloudСover = 'cloudy';
    } else {
        $cloudСover = 'partly cloudy';
    }
    return $cloudСover;
}