<?php

namespace Classes\WeaponClasses;
abstract class Weapon
{

    public int $needLevel = 1;
    public int $physicalBaseDamageMin = 0;
    public int $physicalBaseDamageMax = 0;
    public int $magicBaseDamage = 0;

    public function getPhysicalBaseDamage(): int
    {
        return rand($this->physicalBaseDamageMin, $this->physicalBaseDamageMax);
    }

    abstract public function getWeaponName(): string;

}