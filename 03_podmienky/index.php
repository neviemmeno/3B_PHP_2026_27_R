<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Podimienky
        /*
         Podmienka je programovacia paradigma, pomocou ktorej sa rozhoduje, ktorý kód sa vykoná.
         Podmienka obsahuje logický výraz napríklad j < 5

         Ak podmienka je splnená, tak sa vykoná kód uvedený pod touto podmienkou
         Ak podmienka nie je splnená, tak sa preskočí alebo sa vykoná kód uvedený v else časti

         Pri porovnávaní viacerých výrazov, používame príkaz else if.

         Špeciálnou podmienkou v modernom programovaní je switch

        */

         if(1 < 5){
            echo "1 je menej ako 5";
         }

         echo "<br>";

         $cislo1 = 10;
         $cislo2 = 50;

         // Operátor
         /*
          == : rovná sa
          != : nerovná sa
          <= : menej alebo rovné
          >= : viac alebo rovné
          ! : negácia
          === : porovnáva hodnotu aj dátový typ (2 === 2): Pravda (2 !=== "2"): Nepravda
         */

         if($cislo1 != $cislo2){
            echo "Toto sa vykoná?";
         }

         echo "<br>";

         if($cislo1 == $cislo2){
            echo "Tento kód sa nevykoná";
         }else{
            echo "Vykoná sa tento kód";
         }

         // Úloha na precvičenie si podmienky
         /*
         Vytvore podmienku, ktorá bude na základe počtu bodov vypisovať vaše hodnotenie.
        

         100 - 90: 1
         89 - 80: 2

         BONUS: počet bodov bude definovaný náhodne pomocou funkcie random_int(min, max).
         */
        
        echo "<br>";

        $pocetBodov = random_int(0, 100);

        if($pocetBodov >= 90){
            echo "1";
        }elseif($pocetBodov >= 80){ 
            echo "2";
        }elseif($pocetBodov >= 70){
            echo "3";
        }elseif($pocetBodov >= 60){
            echo "4";
        }else{
            echo "5";
        }
        
        
        // Úloha na precvičenie si podmienok časť druhá
        /*
        Vstup na párty

        Vstup na párty je podmienený niekoľkými podmienkami.

        1. podmienka: Vstup na párty je od 18 rokov
        2. podmienka: Pokiaľ je párty v SNV, tak od 15
        3. podmienka: Ak nemáte slušné oblečenie, tak smola
        4. podmienka: Ak si bol v base, tak máš zákaz vstupu na párty
        5. podmienka: Ak máte súhlas zákonneho zástupca, môžete vstúpiť na párty od 10 r.
        */

        print("<br>");

        $mojVek = 15;
        $miestoParty = "Poprad";
        $slusneOblecenie = false;
        $suhlasZakZastupcu = false;
        $somVBase = false;

        if($slusneOblecenie == true && $somVBase == false){
            if($mojVek >= 18){
                echo "Mozes ist na party";
            } else if($miestoParty == "SNV" && $mojVek >= 15){
                echo "mozes ist na party";
            } else if($suhlasZakZastupcu == true && $mojVek >= 10){
                echo "Mozes ist na party";
            } else{
                echo "Zostan doma";
            }
        }
        else {
            echo "Zostan doma";
        }
    ?>
</body>
</html>