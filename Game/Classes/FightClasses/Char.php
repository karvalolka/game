<?php

namespace Classes\FightClasses;

use Classes\ArmorClasses\Armor;
use Classes\WeaponClasses\Weapon;

class Char
{
    protected int $strength;
    protected int $intelligence;
    protected int $agile;
    protected int $baseHP;
    protected int $HP;
    protected int $baseMana;
    protected int $level = 1;
    protected Weapon|null $weapon = null;
    protected Armor|null $armor = null;
    protected string $nickname;

    public function __construct($nickname)
    {
        $this->nickname = $nickname;
    }

    public function setWeapon(Weapon $weapon): void
    {
        if ($this->level >= $weapon->needLevel) {
            $this->weapon = $weapon;
        }
    }

    public function setArmor(Armor $armor): void
    {
        if ($this->level >= $armor->getNeedLevel()) {
            $this->armor = $armor;
        }
    }

    public function getWeapon(): string
    {
        if ($this->weapon) {
            $weapon = $this->weapon->getWeaponName();
        } else {
            $weapon = 'Нет оружия';
        }
        return $weapon;
    }

    public function getArmor(): string
    {
        if ($this->armor) {
            $armor = $this->armor->getArmorName();
        } else {
            $armor = 'Нет брони';
        }

        return $armor;
    }

    public function getPhysicalAttack(string $type = ''): int
    {
        $weaponDamage = 0;

        if ($this->weapon) {
            switch ($type) {
                case 'min':
                    $weaponDamage = $this->weapon->physicalBaseDamageMin;
                    break;
                case 'max':
                    $weaponDamage = $this->weapon->physicalBaseDamageMax;
                    break;
                default:
                    $weaponDamage = $this->weapon->getPhysicalBaseDamage();
            }
        }

        return $this->getPhysicalAttackByLevel($weaponDamage);
    }


    private function getPhysicalAttackByLevel(int $weaponDamage): int
    {
        return $this->level - 1 + $weaponDamage;
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

    public function getMagicAttack(): int
    {
        if ($this->weapon) {
            $weaponDamage = $this->weapon->magicBaseDamage;
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

    public function getBaseMana(): int
    {
        return $this->baseMana + $this->intelligence + $this->level;
    }

    public function getNickname(): string
    {
        return $this->nickname;
    }

    public function setNickname($nickname): void
    {
        $this->nickname = $nickname;
    }

    public function pAttack(Char $enemy): void
    {
        $enemyHP = $enemy->getHP();
        $damage = $this->getPhysicalAttack() - $enemy->getPResister();
        if ($damage < 0) {
            $damage = 0;
        }
        $newHP = $enemyHP - $damage;
        $enemy->setHP($newHP);
        echo $this->getNickname() . ' отнял ' . '<span class="red">' . $damage . '</span>' . ' здоровья у ' . $enemy->getNickname() . '<br>';
        if ($enemy->getHP() <= 0) {
            echo $enemy->getNickname() . ' погиб' . '<br>';
        }
    }

    public function getCharacterInfo(): string
    {
        return "<span class='size'>Nickname:</span> <span class='more'>{$this->getNickname()}</span><br>
                Уровень: {$this->level}<br>
                HP: <span class='red'>{$this->getHP()}</span>
                <span class='block'>MP: <span class='blue'>{$this->getBaseMana()}</span></span>
                <span class='bold'>Сила: {$this->strength}<br>
                Ловкость: {$this->agile}<br>
                Интеллект: {$this->intelligence}</span>
                <span class='dashed'>Физический урон: {$this->getPhysicalAttack('min')}-{$this->getPhysicalAttack('max')}<br>
                Магический урон: {$this->getMagicAttack()}<br>
                Сопротивление физическому урону:{$this->getPResister()}<br>
                Сопротивление магическому урону:{$this->getMResister()}</span>
                ⚔️Оружие: {$this->getWeapon()}<br>
                🛡️Класс брони: {$this->getArmor()}<br>";
    }

    public function getHP(): int
    {
        return $this->HP;
    }

    public function setHP($HP): void
    {
        if ($HP < 0) {
            $HP = 0;
        }
        $this->HP = $HP;
    }

    public function updateHP(): void
    {
        $this->HP = $this->getBaseHP() + $this->strength + $this->level;
    }

    public function getBaseHP(): int
    {
        return $this->baseHP;
    }

    public function setBaseHP($baseHP): void
    {
        $this->baseHP = $baseHP;
    }
}


