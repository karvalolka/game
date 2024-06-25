<?php

namespace Classes\ArmorClasses;
class Plate extends Armor
{
    protected int $physicalResist = 3;
    protected int $magicResist = 0;
    protected int $needLevel = 1;

    public function getArmorName(): string
    {
        return "Латы";
    }
}