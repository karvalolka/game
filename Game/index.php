<!DOCTYPE html>
<html>
<head>
    <title>Game</title>
</head>
<body>
<form action="create-char.php" method="post">
<div>
    <p>Создание песнонажа:</p>
</div>
<div>
    <p>
        <label for="name">Придумайте ник:</label><br>
        <input name="name" id="name" type="text" placeholder="Введите ник">
     </p>
</div>
<div>
    <p>Выберите класс:</p>

    <div>
        <input type="radio" name="class" value="Archer"/> Archer
    </div>
    <div>
        <input type="radio" name="class" value="Mage"/> Mage
    </div>
    <div>
        <input type="radio" name="class" value="Warrior"/> Warrior
    </div>
</div>
<div>
    <button type="submit">В игру!</button>
</div>
</form>
<?php

?>
</body>
</html>