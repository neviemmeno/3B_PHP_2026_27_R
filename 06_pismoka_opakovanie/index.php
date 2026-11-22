<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  // uvod, premenne, podmienky, cykly, polia

  // ÚLOHA 1
  /*
  Vytvorte cyklus od 50 do -20
  a vypíšte všetky čísla v postupnosti 0,5
  Výsledok: 50, 49,5, 49, 48,5 ... -19,5, -20
  */

  for($i = 50; $i >= -20; $i = $i - 0.5){
    echo $i . " ";
  }

  echo "<br>";
  echo "<br>";

  // ÚLOHA 2
  /*
  Pole [4, 23, 56, 23, 5, 66, 12, 2]
  V cykle prejdite všetky prvky poľa a sčítajte
  všetky párne čísla a nepárne čísla zvlášť.
  Výsledok: 
  Súčet párnych: 4 + 56 + 66 + 12 + 2 = 140
  Súčet nepárnych: 23 + 23 + 5 = 51
  */

  $pole = array(4, 23, 56, 23, 5, 66, 12, 2);

  $sucetParne = 0;
  $sucetNeparne = 0;

  for($i = 0; $i <= 7; $i++){
    if($pole[$i] % 2 == 0){
      $sucetParne = $sucetParne + $pole[$i];
    }else{
      $sucetNeparne = $sucetNeparne + $pole[$i];
    }
  }

  echo "Sucet parnych cisel je: " . $sucetParne . "<br>";
  echo "Sucet neparnych cisel je: " . $sucetNeparne;

  echo "<br>";
  echo "<br>";
  



  // ÚLOHA 3
  /*
  V cykle načítajte 10 náhodných čísel 
  v rozsahu od 0 do 1. 
  Pokiaľ je hodnota 0, vypíšte výsledok ako červenú bodku
  Pokiaľ je hodnota 1, vypíšte výsledok ako zelenú bodku
  Napr. vygenerované [0,1,1,0,1,0,1,0,0,0] 
  Výsledok: [•(R), •(G),•(G), •(R), ...]
  */

  for($i = 1; $i <= 10; $i++){
    $ranCislo = rand(0, 1);

    if($ranCislo == 0){
      echo "<span style='color: red'> • </span>";
    }else{
      echo "<span style='color: green'> • </span>";
    }
  }

  echo "<br>";
  echo "<br>";


  // ÚLOHA 4 (Trošku hard)
  /*
  Načítajte 4 čísla do poľa o 0 do 10. 
  Načítajte číslo premennej target (súčet možných čísel v poli)
  Vo výstupe by ste mali nájsť tú Nticu čísel, 
  ktorá vám tvorí hodnotu premennej target.

  Vstup: nums = [2,7,11,15], target = 9
  Výstup: [0,1]

  Vstup: nums = [3,2,4], target = 6
  Výstup: [1,2]
  */
  $cislo1 = rand(0, 10);
  $cislo2 = rand(0, 10);
  $cislo3 = rand(0, 10);
  $cislo4 = rand(0, 10);

  $target = rand(0, 10);


  $nums = array($cislo1, $cislo2, $cislo3, $cislo4);

  for($i = 0; $i <= 3; $i++){
    for($k = 1; $k <= 3; $k++){
      if($nums[$i] + $nums[$k] == $target){
        echo "[" . $i . "," . $k . "]";
      }
    }
  }
  



  
  ?>
</body>
</html>