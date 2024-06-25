<?php

namespace Classes\FightClasses;
class Mage extends Char
{
    protected int $strength = 2;
    protected int $intelligence = 6;
    protected int $agile = 3;
    protected int $baseHP = 3;
    protected int $baseMana = 7;

    public function getPhysicalAttack(string $type = ''): int
    {
        $out = parent::getPhysicalAttack() + $this->agile - 3;
        if ($out < 0) {
            $out = 0;
        }
        return $out;
    }

    public function mAttack($enemy): void
    {
        $enemyHP = $enemy->getHP();
        $damage = $this->getMagicAttack() - $enemy->getMResister();
        $manaPool = $this->getMP();
        if ($damage < 0 || $manaPool <= 0) {
            $damage = 0;
        } else {
            $newMP = $manaPool - 2;
            $this->setMP($newMP);
        }
        $newHP = $enemyHP - $damage;
        $enemy->setHP($newHP);
        echo $this->getNickname() . ' отнял ' . '<span class="red">' . $damage . '</span>' . ' здоровья у ' . $enemy->getNickname() . ' при помощи ⚡️' . '<br>';
        if ($enemy->getHP() <= 0) {
            echo $enemy->getNickname() . ' погиб' . '<br>';
        }
    }

    public function getCharacterInfo(): string
    {
        $out = "<div class='char'>Маг<br>";
        $out .= parent::getCharacterInfo();
        $out .= '</div>';
        return $out;
    }


}