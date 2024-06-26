<?php

require 'Pogoda.php';

$pogoda1 = new Pogoda('1.06.2024', '90%', 30, 60, '5%', 293);
$pogoda2 = new Pogoda('2.06.2024', '30%', 10, 80, '70%', 295);
$pogoda3 = new Pogoda('3.06.2024', '50%', 20, 90, '100%', 290);
$pogoda4 = new Pogoda('4.06.2024', '10%', 50, 70, '80%', 291);
$pogoda5 = new Pogoda('5.06.2024', '80%', 40, 80, '30%', 297);

echo $pogoda1->getPogodaInfo();
echo $pogoda2->getPogodaInfo();
echo $pogoda3->getPogodaInfo();
echo $pogoda4->getPogodaInfo();
echo $pogoda5->getPogodaInfo();