<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Game</title>
    <link href="css/color.css" rel='stylesheet'>
</head>
<body>

<?php

require_once 'Classes\FigthСlasses\Char.php';
require_once 'Classes\FigthСlasses\Archer.php';
require_once 'Classes\FigthСlasses\Mage.php';
require_once 'Classes\ArmorClasses\Armor.php';
require_once 'Classes\ArmorClasses\Leather.php';
require_once 'Classes\ArmorClasses\Tunic.php';
require_once 'Classes\ArmorClasses\Plate.php';
require_once 'Classes\WeaponСlasses\Weapon.php';
require_once 'Classes\WeaponСlasses\Bow.php';
require_once 'Classes\WeaponСlasses\Grimoire.php';
require_once 'Classes\WeaponСlasses\Sword.php';

if ($_POST['class'] == 'Mage') {
    $m = new Mage(($_POST['name']));
    echo $m->getCharacterInfo();
} elseif ($_POST['class'] == 'Archer') {
    $a = new Archer(($_POST['name']));
    echo $a->getCharacterInfo();
} elseif ($_POST['class'] == 'Warrior') {
    $w = new Warrior(($_POST['name']));
    echo $w->getCharacterInfo();
}
?>.

</body>