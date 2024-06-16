<?php
class Armor
{

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