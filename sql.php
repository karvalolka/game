<?php

$db = new mysqli('localhost', 'root', '', 'world');

if($db->connect_errno){
    echo 'No connect: ' . $db->connect_errno;
    die;
}

//if($res = $db->query("SELECT * FROM country")){
//    while ($row = $res->fetch_assoc()){
//echo "Code: {$row['Code']}; Name: {$row['Name']}<br>";
//    }
//}

//if($res = $db->query("SELECT Name, Population FROM city WHERE CountryCode = 'UKR'")) {
//    while ($row = $res->fetch_object()) {
//        echo "Name: {$row->Name}; Population: {$row->Population}<br>";
//    }
//}

$country_code = 'UKR';
if($stmt = $db->prepare("SELECT Name, Population FROM city WHERE CountryCode = ?")) {
    $stmt->bind_param('s', $country_code);
    $stmt->execute();
    $stmt->bind_result($name, $population);
    while ($stmt->fetch()){
        echo "Name: {$name}; Population: {$population}<br>";
    }
}