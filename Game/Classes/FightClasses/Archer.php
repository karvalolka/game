<?php

namespace Classes\FightClasses;
class Archer extends Char
{
    protected $strength = 3;
    protected $intelligence = 2;
    protected $agile = 6;
    protected $baseHP = 4;
    protected $baseMana = 5;

    public function getPhysicalAttack()
    {
        $out = parent::getPhysicalAttack() + $this->agile;
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
        $out = "<div class='char'>Лучник<br>";
        $out .= parent::getCharacterInfo();
        $out .= '</div>';
        return $out;
    }
}