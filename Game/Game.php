<!DOCTYPE html>
<html lang="ru">
<head>
    <link href="css/color.css" rel='stylesheet'>
    <title> Чек игры </title>
</head>
<body>

<?php

use Classes\ArmorClasses\{Leather, Plate, Tunic};
use Classes\FightClasses\{Archer, Mage, Warrior};
use Classes\WeaponClasses\{Bow, Grimoire, Sword};

require_once __DIR__ . '/vendor/autoload.php';

$lordArcher = new Archer('Lord Archer');
$lordArcher->updateHP();
$aspen = new Mage('Aspen');
$aspen->updateHP();
$dunkan = new Warrior('Dunkan');
$dunkan->updateHP();

$bow = new Bow();
$sword = new Sword();
$grimoire = new Grimoire();

$leather = new Leather();
$plate = new Plate();
$tunic = new Tunic();

$lordArcher->setWeapon($bow);
$aspen->setWeapon($grimoire);
$dunkan->setWeapon($sword);

$lordArcher->setArmor($leather);
$aspen->setArmor($tunic);
$dunkan->setArmor($plate);

echo '<div class="container">';
echo $lordArcher->getCharacterInfo();
echo $aspen->getCharacterInfo();
echo $dunkan->getCharacterInfo();
echo '</div>';

$aspen->mAttack($lordArcher);
$lordArcher->pAttack($aspen);

//$lordArcher->pAttack($aspen);
//
$lordArcher->pAttack($dunkan);
//
$dunkan->pAttack($lordArcher);
//
//$dunkan->pAttack($aspen);


echo '<div class="container">';
echo $aspen->getCharacterInfo();
echo $dunkan->getCharacterInfo();
echo $lordArcher->getCharacterInfo();
echo '</div>';

?>
</body>
</html>



