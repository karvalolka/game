<?php

namespace Classes\FightClasses;
class Archer extends Char
{
    protected int $strength = 3;
    protected int $intelligence = 2;
    protected int $agile = 6;
    protected int $baseHP = 4;
    protected int $baseMana = 5;

    public function getPhysicalAttack(string $type = ''): int
    {
        switch ($type){
            case 'min':
                $attack = parent::getPhysicalAttack('min');
                break;
            case 'max':
                $attack = parent::getPhysicalAttack('max');
                break;
            default:
                $attack = parent::getPhysicalAttack();
        }

        $out = $attack + $this->agile;

        if ($out < 0) {
            $out = 0;
        }

        return $out;
    }
    public function getMagicAttack(): int
    {
        $out = parent::getMagicAttack() - 3;
        if ($out < 0) {
            $out = 0;
        }
        return $out;
    }
    public function getCharacterInfo(): string
    {
        $out = "<div class='char'>Лучник<br>";
        $out .= parent::getCharacterInfo();
        $out .= '</div>';
        return $out;
    }
}