<?php

namespace Classes\ArmorClasses;
abstract class Armor
{

    public function getPhysicalResist()
    {
        return $this->physicalResist;
    }

    public function getMagicResist()
    {
        return $this->magicResist;
    }

    public function getNeedLevel()
    {
        return $this->needLevel;
    }

    abstract public function getArmorName(): string;


}