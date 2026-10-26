<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php
    echo "<h1>Tento web je zameraný na premenné</h1>";

    echo "<p>". 2 + 4 ."</p>";

    // Priradenie hodnoty do premennej
    $cislo = 5;

    // Vypisanie hodnoty premennej
    echo $cislo;
    echo "<br>";
    $desCislo = 4.2;
    echo $desCislo;

    echo "<br>";

    $cislo1 = 4.3;
    $cislo2 = 2.7;

    // Pretypovanie čísel z float na int
    $vysledok = (int)$cislo1 + (int)$cislo2;
    echo $vysledok;

    echo "<br>";

    $text = "toto je môj text";
    echo $text;


    echo "<br>";
    $textCislo = "toto je moje číslo " . $cislo1;
    echo $textCislo;

    echo "<br>";

    $pravidvost = true;
    echo $pravidvost;


    $randomCislo = 5.5;

    echo "<br>";
    echo "<br>";
    echo "<br>";

    echo "Ahoj moje cislo je:" . " " .$randomCislo;

    echo "<br>";

    $idk1 = 5.5;
    $idk2 = 10.2;

    $vysledok3 = (int)$idk1 + (int)$idk2;

    echo $vysledok3;
    ?>
</body>
</html>