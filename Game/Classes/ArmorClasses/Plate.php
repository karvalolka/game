<?php

namespace Classes\ArmorClasses;
class Plate extends Armor
{
    protected int $physicalResist = 0;
    protected int $magicResist = 3;
    protected int $needLevel = 1;

    public function getArmorName(): string
    {
        return "Латы";
    }
}