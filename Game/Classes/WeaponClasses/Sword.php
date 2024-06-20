<?php

namespace Classes\WeaponClasses;
class Sword extends Weapon
{
    public int $physicalBaseDamageMin = 1;
    public int $physicalBaseDamageMax = 3;
    public function getWeaponName(): string
    {
        return "Меч";
    }
}