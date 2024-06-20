<?php

namespace Classes\ArmorClasses;
class Leather extends Armor
{
    protected int $physicalResist = 1;
    protected int $magicResist = 2;
    protected $needLevel = 1;

   public function getArmorName(): string
    {
        return "Кожанный доспех";
    }
}