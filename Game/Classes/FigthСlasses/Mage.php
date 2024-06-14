<?php

class Mage extends Char
{
    protected $strength = 2;
    protected $intelligence = 6;
    protected $agile = 3;
    protected $baseHP = 3;
    protected $baseMana = 7;
    public function getPhysicalAttack()
    {
        $out = parent::getPhysicalAttack() + $this->agile - 3;
        if ($out < 0) {
            $out = 0;
        }
        return $out;
    }
    public function mAttack($enemy)
    {
        $enemyHP = $enemy->getHP();
        $damage = $this->getMagicAttack() - $enemy->getMResister();
        if ($damage < 0) {
            $damage = 0;
        }
        $newHP = $enemyHP - $damage;
        $enemy->setHP($newHP);
        echo $this->getNickname() . ' отнял ' . '<span class="red">' . $damage . '</span>' . ' здоровья у ' . $enemy->getNickname() . ' при помощи ⚡️' . '<br>';
        if ($enemy->getHP() <=0){
            echo $enemy->getNickname() . ' погиб' . '<br>';
        }
    }

    public function getCharacterInfo()
    {
        $out = "<div class='char'>Маг<br>";
        $out .= parent::getCharacterInfo();
        $out .= '</div>';
        return $out;
    }

}