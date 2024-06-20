<?php

namespace Classes\ArmorClasses;
class Tunic extends Armor
{
    protected int $physicalResist = 2;
    protected int $magicResist = 1;
    protected $needLevel = 1;

    public function getArmorName(): string
    {
        return "Туника";
    }
}