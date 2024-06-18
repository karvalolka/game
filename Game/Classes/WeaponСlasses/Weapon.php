<?php

namespace Classes\WeaponClasses;
class Weapon
{

    protected $needLevel = 1;

    public function getNeedLevel()
    {
        return $this->needLevel;
    }
    public function setNeedLevel($needLevel)
    {
        $this->needLevel = $needLevel;
    }
    public function getPhysicalBaseDamage()
    {
        return $this->physicalBaseDamage;
    }
    public function getMagicBaseDamage()
    {
        return $this->magicBaseDamage;
    }
    public function setPhysicalBaseDamage($physicalBaseDamage)
    {
        $this->physicalBaseDamage = $physicalBaseDamage;
    }
    public function setMagicBaseDamage($magicBaseDamage)
    {
        $this->magicBaseDamage = $magicBaseDamage;
    }
}