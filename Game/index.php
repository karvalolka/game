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
        <input tabindex="1" name="name" id="name" type="text" placeholder="Введите ник">
     </p>
</div>
<div>
    <p>Выберите класс:</p>

    <div>
        <label>
            <input tabindex="2" type="radio" name="class" value="Archer"/>
        </label> Archer
    </div>
    <div>
        <label>
            <input tabindex="2" type="radio" name="class" value="Mage"/>
        </label> Mage
    </div>
    <div>
        <label>
            <input tabindex="2" type="radio" name="class" value="Warrior"/>
        </label> Warrior
    </div>
</div>
<div>
    <button tabindex="3" type="submit">В игру!</button>
</div>
</form>
<?php

?>
</body>
</html>