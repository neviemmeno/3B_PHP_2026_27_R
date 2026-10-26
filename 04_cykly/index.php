<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*
    Cyklus - časť kódu, ktorá sa opakuje
    Typy cyklov: for, while, do while, foreach

    for - je typ cyklu, pri ktorom poznáme počet opakovaní
    while - je typ cyklu, ktorý sa opakuje pokiaľ je splnená podmienka
    do while - je typ cyklu, ktorý sa opakuje pokiaľ je splnená podmienka, alespoň raz sa vykoná- Podmienka sa skontroluje na konci cyklu.
    foreach - je typ cyklu, ktorý prechádza hodnoty polí

    */

    for($i = 0; $i < 10; $i++){
        echo "Najlepšia hodina na svete <br>";
    }

    //$mena = array("Peter", "Ján", "Lukáš");

    ?>

    <?php
    /*
        V cykle od 1 po 10 zväčšujte font písma o 5px . Slove hodina priradte nahodnu farbu v každom cykle
    */

        echo "<p style='font-size: 10px;'> Najlepsia <span style='color: red';>hodina</span> na svete";

        $k = 1;
        $nahCislo = 0;
        $nahCislo2 = 0;
        $nahCislo3 = 0;
        $fontSize = 10;

        while($k < 10){
            $nahCislo = rand(0, 255);
            $nahCislo2 = rand(0, 255);
            $nahCislo3 = rand(0, 255); 
            $fontSize = $fontSize + 5;

            echo "<p style='font-size: {$fontSize}px;'> Najlepsia <span style='color: rgb($nahCislo, $nahCislo2, $nahCislo3)';>hodina</span> na svete";
            $k++;   
        }

        echo "<br>";
        echo "<br>";

        /*
        do while uloha:
        Vytvorte cyklus od 0 do 6
        V každom cykle vytvorte kombináciu kariet
        Hodnoty:
        2- 10, 11 (J), 12 (Q), 13 (K), 14 (A)
        J, Q, K, A

        4 znaky - ♠ (čierna), ♥ (červená), ♦ (čierna), ♣ (červená)


        */
        $prvaKarta = 0;
        $druhaKarta = 0;
        $kartaJ = 'J'; // "toto je string" a toto je znak 'J'
        $kartaQ = 'Q';
        $kartaK = 'K';
        $kartaA = 'A';

        for($i = 1; $i <= 6; $i++){
            $prvaKarta = rand(2, 14);
            $druhaKarta = rand(2, 14);

            if($prvaKarta == 11){
                $prvaKarta = $kartaJ;
            }else if($prvaKarta == 12){
                $prvaKarta = $kartaQ;
            }else if($prvaKarta == 13){
                $prvaKarta = $kartaK;
            }else if($prvaKarta == 14){
                $prvaKarta = $kartaA;
            }

            if($druhaKarta == 11){
                $druhaKarta = $kartaJ;
            }else if($druhaKarta == 12){
                $druhaKarta = $kartaQ;
            }else if($druhaKarta == 13){
                $druhaKarta = $kartaK;
            }else if($druhaKarta == 14){
                $druhaKarta = $kartaA;
            }
            echo "Hráč $i.: " . "{$prvaKarta} {$druhaKarta}" . "</br>";
        }

        //Pokračovanie v 05_polia/index.php
    ?>
</body>
</html>