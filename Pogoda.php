<?php

class Pogoda
{
    public $sun;
    public $wind_speed;
    public $humidity;
    public $rain;
    public $temperature;
    public $date;

    public function __construct($date, $sun, $wind_speed, $humidity, $rain, $temperature)
    {
      $this->date = $date;
      $this->sun = $sun;
      $this->wind_speed = $wind_speed;
      $this->humidity = $humidity;
      $this->rain = $rain;
      $this->temperature = $temperature;
    }

    public function getPogodaInfo()
    {
        $speed = round($this->getConvertKmChToMS(), 4);
        return "<h3>{$this->date}</h3>
            Облачность: {$this->getThePresenceOfClouds()}<br>
            Скорость ветра: {$speed} м/с<br>
            Влажность: {$this->humidity}<br>
            Дождь: {$this->getTheProbabilityOfRain()}<br>
            Температура: {$this->getConvertKelToCel()}<br>";
    }

    public function getConvertKelToCel()
    {
        $cel = $this->temperature - 273.15;
        return $cel;
    }

    public function getThePresenceOfClouds()
    {
        if ($this->sun > 80) {
            $cloudСover = 'sunny';
        } elseif ($this->sun < 30) {
            $cloudСover = 'cloudy';
        } else {
            $cloudСover = 'partly cloudy';
        }
        return $cloudСover;
    }

    public function getTheProbabilityOfRain()
    {
        if ($this->rain >= 90) {
            $rain = 'hail';
        } elseif (
            $this->rain >= 60 && $this->rain < 90
        ) {
            $rain = 'rainfall';
        } elseif (
            $this->rain >= 30 && $this->rain < 60
        ) {
            $rain = 'Rain';
        } elseif (
            $this->rain >= 10 && $this->rain < 30
        ) {
            $rain = 'light rain';
        } else {
            $rain = 'rain is unlikely';
        }
        return $rain;
    }

    public function getConvertKmChToMS()
    {
        $m_s = $this->wind_speed / 3.6;
        return $m_s;
    }

    public function getPogoda()
    {
        $yellowDwarf = $this->getThePresenceOfClouds();
        $thermometer = $this->getConvertKelToCel();
        $aRush = $this->getConvertKmChToMS();
        $humidity = $this->humidity;
        $fallingWater = $this->getTheProbabilityOfRain();
        $circle = round($aRush, 4);
        $date = $this->date;
        $result = "<h2>$date</h2> $yellowDwarf, air temperature - $thermometer*C, wind speed $circle м\с, air humidity - $humidity, $fallingWater";
        return $result . "<br>";
    }

//    public function getSun()
//    {
//        return $this->sun;
//    }
//
//    public function setSun($sun): void
//    {
//        $this->sun = $sun;
//    }

}