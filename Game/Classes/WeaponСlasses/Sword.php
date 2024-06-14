<?php

class Sword extends Weapon
{
    protected $physicalBaseDamage = 1;
    protected $magicBaseDamage = 0;

    public function __construct()
    {
        $this->physicalBaseDamage = rand(1, 2);
    }

    public function getPhysicalBaseDamage()
    {
        return $this->physicalBaseDamage;
    }
}