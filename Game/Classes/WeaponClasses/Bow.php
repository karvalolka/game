<?php

namespace Classes\WeaponClasses;
class Bow extends Weapon
{
    public int $physicalBaseDamageMin = 1;
    public int $physicalBaseDamageMax = 3;
    public function getWeaponName(): string
    {
        return "Лук";
    }
}
