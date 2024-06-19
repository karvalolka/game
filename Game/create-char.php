<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Game</title>
    <link href="css/color.css" rel='stylesheet'>
</head>
<body>

<?php


use Classes\WeaponClasses\{Bow as Bow, Sword, Grimoire};
use Classes\ArmorClasses\{Leather, Plate, Tunic};
use Classes\FightClasses\{Mage, Archer, Warrior};

require_once __DIR__ . '/vendor/autoload.php';

$bow = new Bow();
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