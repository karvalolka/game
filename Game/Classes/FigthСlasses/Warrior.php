<?php

class Warrior extends Char
{
    protected $strength = 6;
    protected $intelligence = 2;
    protected $agile = 3;
    protected $baseHP = 7;
    protected $baseMana = 3;
    public function getPhysicalAttack()
    {
        $out = parent::getPhysicalAttack() + $this->strength;
        if ($out < 0) {
            $out = 0;
        }
        return $out;
    }

    public function getMagicAttack()
    {
        $out = parent::getMagicAttack() - 3;
        if ($out < 0) {
            $out = 0;
        }
        return $out;
    }
    public function getCharacterInfo()
    {
        $out = "<div class='char'>Воин<br>";
        $out .= parent::getCharacterInfo();
        $out .= '</div>';
        return $out;
    }
}