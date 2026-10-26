<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Polia

    /*
    Pole je premenná, ktorá si dokáže uchovať viacero hodnôt
    Každá hodnota v poli je indexovaná

    Indexovanie je jedinečné priradenie čísla k hodnote.
    Indexovanie štandartne funguje od 0 po nekonečno (resp. po počet prvkov v našom poli)

    Pole sa v programovaní (rôznych jazykoch) označuje ako []. 
    Napríklad $ovocie["pomaranč", "mandarinka", "slivka"]

    Pole ovocie obsahuje 3 hodnoty
    Index hodnoty pomaranč je 0


    */

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

    ?>
</body>
</html>