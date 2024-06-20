<?php

namespace Classes\WeaponClasses;
class Grimoire extends Weapon
{
    public int $magicBaseDamage = 2;

    public function getWeaponName(): string
    {
        return "Гримуар";
    }
}