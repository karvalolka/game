<!DOCTYPE html>
<html>
<head>
    <link href="css/color.css" rel='stylesheet'>
</head>
<body>

<?php

require_once 'Classes\FigthСlasses\Char.php';
require_once 'Classes\FigthСlasses\Archer.php';
require_once 'Classes\FigthСlasses\Mage.php';
require_once 'Classes\FigthСlasses\Warrior.php';
require_once 'Classes\WeaponСlasses\Weapon.php';
require_once 'Classes\WeaponСlasses\Bow.php';
require_once 'Classes\WeaponСlasses\Grimoire.php';
require_once 'Classes\WeaponСlasses\Sword.php';
require_once 'Classes\ArmorClasses\Armor.php';
require_once 'Classes\ArmorClasses\Leather.php';
require_once 'Classes\ArmorClasses\Plate.php';
require_once 'Classes\ArmorClasses\Tunic.php';

$lordArcher = new Archer('Lord Archer');
$lordArcher->updateHP();
$aspen = new Mage('Aspen');
$aspen->updateHP();
$dunkan = new Warrior('Dunkan');
$dunkan->updateHP();

$bow = new Bow();
$sword = new Sword();
$grimoire = new Grimoire();

$leather = new Leather(1, 2, 0);
$plate = new Plate(0, 3, 1);
$tunic = new Tunic(2, 1, 1);

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



