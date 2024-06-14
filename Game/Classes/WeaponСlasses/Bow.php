<?php

class Bow extends Weapon
{
    protected $physicalBaseDamage;
    protected $magicBaseDamage = 0;

    public function __construct()
    {
        $this->physicalBaseDamage = rand(1, 3);
    }

    public function getPhysicalBaseDamage()
    {
        return $this->physicalBaseDamage;
    }

}
