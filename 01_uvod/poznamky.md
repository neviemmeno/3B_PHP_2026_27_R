PHP - slon

Čo je PHP?
- Hypertext PreProcessor je open-source skriptovací jazyk bežiaci na strane servera (Server-side)

Architektúra Klient-Server
- kód sa vykonáva na serveri a klientovi (prehliadaču) sa odošle už len vygenerovaný a čistý HTML, CSS alebo JSON výstup

Tvorba dynamických webových aplikácií, API rozhraní, komunikácia s databázami a spracovaie formulárov

Výstup (PHP Echo / Print) -> na zobrazenie dát klientovi sa používajú konštrukcie echo a print (preferuje sa echo lebo je o kusok rychlejsi)

Premenné (PHP Variables) -> deklarujú sa znakom dolára $ a musia začínať písmenom alebo podčiarkovníkom (typ premennej sa sám určí) -> premenná je miesto v pamäti

Dátové typy (PHP Data Types) -> String, Integer, Float, Boolean

Znak "." je na spájanie textu s premennou

Práca s reťazcami (PHP Strings) -> Text PHP vieme nielen spájať, ale aj upravovať pomocou stoviek zabudovaných funkcií (napr. zistenie dĺžky, nahradzovanie slov, vyhľadávanie podreťazca)

Čísla a Matematika (PHP Numbers, Math) -> okrem základných operácií ponúka PHP funkcie round() a rand() alebo min/max

Pretypovanie

Konštanty (PHP Constatns) -> Identifikátory pre hodnoty, ktoré sa na rozdiel od premenných počas behu skriptu nedajú a nesmú zmeniť

Magické konštanty

Operátory (PHP Operators) -> aritmetické (matematika), priraďovacie (+=), porovnávacie (===)  a logické (&&, ||)


Podmienky:
         Podmienka je programovacia paradigma, pomocou ktorej sa rozhoduje, ktorý kód sa vykoná.
         Podmienka obsahuje logický výraz napríklad j < 5

         Ak podmienka je splnená, tak sa vykoná kód uvedený pod touto podmienkou
         Ak podmienka nie je splnená, tak sa preskočí alebo sa vykoná kód uvedený v else časti

         Pri porovnávaní viacerých výrazov, používame príkaz else if.

         Špeciálnou podmienkou v modernom programovaní je switch

Operátory:
          == : rovná sa
          != : nerovná sa
          <= : menej alebo rovné
          >= : viac alebo rovné
          ! : negácia
          === : porovnáva hodnotu aj dátový typ (2 === 2): Pravda (2 !=== "2"): Nepravda

Cyklus:
    Cyklus - časť kódu, ktorá sa opakuje
    Typy cyklov: for, while, do while, foreach

    for - je typ cyklu, pri ktorom poznáme počet opakovaní
    while - je typ cyklu, ktorý sa opakuje pokiaľ je splnená podmienka
    do while - je typ cyklu, ktorý sa opakuje pokiaľ je splnená podmienka, alespoň raz sa vykoná- Podmienka sa skontroluje na konci cyklu.
    foreach - je typ cyklu, ktorý prechádza hodnoty polí