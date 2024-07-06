<?php

$host = 'localhost';
$db = 'world';
$user = 'root';
$pass = '';
$charset = 'utf8';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

// не обязательный массив
$opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

$pdo = new PDO($dsn, $user, $pass, $opt);

//$stmt = $pdo->query("SELECT Code, Name FROM country");
//while ($row = $stmt->fetch()){
//    echo "Code: {$row['Code']}; Name: {$row['Name']}<br>";
//}
//$stmt = $pdo->prepare("SELECT Name, Population FROM city WHERE CountryCode = ?");
//$stmt->execute(['AFG']);
//foreach ($stmt as $row){
//    echo "Name: {$row['Name']}; Population: {$row['Population']}<br>";
//}

$stmt = $pdo->prepare("SELECT Name, Population FROM city WHERE CountryCode = :country_code");
$stmt->execute(['country_code' => 'AFG']);
while($row = $stmt->fetch(PDO::FETCH_LAZY)){
    echo $row[0] . '<br>';
    echo $row['Name'] . '<br>';
    echo $row->Name . '<br>';
}