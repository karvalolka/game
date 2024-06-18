<?php

namespace Classes\FigthClasses;
class Char
{
    protected $strength;
    protected $intelligence;
    protected $agile;
    protected $baseHP;
    protected $HP;
    protected $baseMana;
    protected $level = 1;
    protected $weapon;
    protected $armor;
    protected $nickname;

    public function __construct($nickname)
    {
        $this->nickname = $nickname;
    }
    
    public function setWeapon($weapon)
    {
        if ($this->level >= $weapon->getNeedLevel()) {
            $this->weapon = $weapon;
        }
    }

    public function setArmor($armor)
    {
        if ($this->level >= $armor->getNeedLevel()) {
            $this->armor = $armor;
        }
    }

    public function getWeapon()
    {
        if ($this->weapon) {
            $weapon = get_class($this->weapon);
        } else {
            $weapon = 'Нет оружия';
        }
        return $weapon;
    }

    public function getArmor()
    {
        if ($this->armor) {
            $armor = get_class($this->armor);
        } else {
            $armor = 'Нет брони';
        }
        return $armor;
    }

    public function getPhysicalAttack()
    {
        if ($this->weapon) {
            $weaponDamage = $this->weapon->getPhysicalBaseDamage();
        } else {
            $weaponDamage = 0;
        }
        $damage = $this->level - 1 + $weaponDamage;
        return $damage;
    }

    public function getPResister()
    {
        if ($this->armor) {
            $armorDef = $this->armor->getPhysicalResist();
        } else {
            $armorDef = 0;
        }
        return $armorDef;
    }

    public function getMagicAttack()
    {
        if ($this->weapon) {
            $weaponDamage = $this->weapon->getMagicBaseDamage();
        } else {
            $weaponDamage = 0;
        }
        $damage = $this->intelligence + $this->level - 1 + $weaponDamage;
        return $damage;
    }

    public function getMResister()
    {
        if ($this->armor) {
            $armorDef = $this->armor->getMagicResist();
        } else {
            $armorDef = 0;
        }
        return $armorDef;
    }

    public function getBaseMana()
    {
        $fullMana = $this->baseMana + $this->intelligence + $this->level;
        return $fullMana;
    }

    public function getNickname()
    {
        return $this->nickname;
    }

    public function setNickname($nickname)
    {
        $this->nickname = $nickname;
    }

    public function pAttack($enemy)
    {
        $enemyHP = $enemy->getHP();
        $damage = $this->getPhysicalAttack() - $enemy->getPResister();
        if ($damage < 0) {
            $damage = 0;
        }
        $newHP = $enemyHP - $damage;
        $enemy->setHP($newHP);
        echo $this->getNickname() . ' отнял ' . '<span class="red">' . $damage . '</span>' . ' здоровья у ' . $enemy->getNickname() . '<br>';
        if ($enemy->getHP() <=0){
            echo $enemy->getNickname() . ' погиб' . '<br>';
        }
    }

    public function getCharacterInfo()
    {
        return "<span class='size'>Nickname:</span> <span class='more'>{$this->getNickname()}</span><br>
                Уровень: {$this->level}<br>
                HP: <span class='red'>{$this->getHP()}</span>
                <span class='block'>MP: <span class='blue'>{$this->getBaseMana()}</span></span>
                <span class='bold'>Сила: {$this->strength}<br>
                Ловкость: {$this->agile}<br>
                Интеллект: {$this->intelligence}</span>
                <span class='dashed'>Физический урон: {$this->getPhysicalAttack()}<br>
                Магический урон: {$this->getMagicAttack()}<br>
                Сопротивление физическому урону:{$this->getPResister()}<br>
                Сопротивление магическому урону:{$this->getMResister()}</span>
                ⚔️Оружие: {$this->getWeapon()}<br>
                🛡️Класс брони: {$this->getArmor()}<br>";
    }
    public function getHP()
    {
        return $this->HP;
    }
    public function setHP($HP): void
    {
        if ($HP < 0){
            $HP = 0;
        }
        $this->HP = $HP;
    }

    public function updateHP(): void
    {
        $this->HP = $this->getBaseHP() + $this->strength + $this->level;
    }

    public function getBaseHP()
    {
        return $this->baseHP;
    }

    public function setBaseHP($baseHP): void
    {
        $this->baseHP = $baseHP;
    }
}


