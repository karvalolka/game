<?php
class Armor
{
    protected $physicalResist;
    protected $magicResist;
    protected $needLevel;

    public function __construct($magicResist, $physicalResist, $needLevel)
    {
        $this->magicResist = $magicResist;
        $this->physicalResist = $physicalResist;
        $this->needLevel = $needLevel;
    }
    public function getPhysicalResist()
    {
        return $this->physicalResist;
    }
    public function setPhysicalResist($physicalResist): void
    {
        $this->physicalResist = $physicalResist;
    }
    public function getMagicResist()
    {
        return $this->magicResist;
    }
    public function setMagicResist($magicResist): void
    {
        $this->magicResist = $magicResist;
    }
    public function getNeedLevel()
    {
        return $this->needLevel;
    }
    public function setNeedLevel($needLevel): void
    {
        $this->needLevel = $needLevel;
    }

}