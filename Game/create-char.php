<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Game</title>
    <link href="css/color.css" rel='stylesheet'>
</head>
<body>

<?php

//require_once 'Classes\FigthСlasses\Char.php';
//require_once 'Classes\FigthСlasses\Archer.php';
//require_once 'Classes\FigthСlasses\Mage.php';
//require_once 'Classes\FigthСlasses\Warrior.php';
//require_once 'Classes\ArmorClasses\Armor.php';
//require_once 'Classes\ArmorClasses\Leather.php';
//require_once 'Classes\ArmorClasses\Tunic.php';
//require_once 'Classes\ArmorClasses\Plate.php';
//require_once 'Classes\WeaponСlasses\Weapon.php';
//require_once 'Classes\WeaponСlasses\Bow.php';
//require_once 'Classes\WeaponСlasses\Grimoire.php';
//require_once 'Classes\WeaponСlasses\Sword.php';

use Classes\WeaponClasses\Bow;
use Classes\WeaponClasses\Sword;
use Classes\WeaponClasses\Grimoire;
use Classes\ArmorClasses\Leather;
use Classes\ArmorClasses\Plate;
use Classes\ArmorClasses\Tunic;
use Classes\FigthClasses\Mage;
use Classes\FigthClasses\Archer;
use Classes\FigthClasses\Warrior;

function autoloder($class)
{
    $class = str_replace("\\", "/", $class);
    $file = __DIR__ . "/{$class}.php";
    if (file_exists($file)) {
        require $file;
    }
}
spl_autoload_register('autoloder');

$bow = new \Classes\WeaponClasses\Bow;
$sword = new Sword();
$grimoire = new Grimoire();

$leather = new Leather();
$plate = new Plate();
$tunic = new Tunic();

if ($_POST['class'] == 'Mage') {
    $m = new Mage(($_POST['name']));
    $m->setWeapon($grimoire);
    $m->updateHP();
    $m->setArmor($tunic);
    echo $m->getCharacterInfo();
} elseif ($_POST['class'] == 'Archer') {
    $a = new Archer(($_POST['name']));
    $a->setWeapon($bow);
    $a->updateHP();
    $a->setArmor($leather);
    echo $a->getCharacterInfo();
} elseif ($_POST['class'] == 'Warrior') {
    $w = new Warrior(($_POST['name']));
    $w->setWeapon($sword);
    $w->updateHP();
    $w->setArmor($plate);
    echo $w->getCharacterInfo();
}

?>.

</body>