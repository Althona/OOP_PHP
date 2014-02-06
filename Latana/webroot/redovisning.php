<?php

include(__DIR__.'/config.php');

$Latana['title'] = "Redovisning";



$Latana['main'] = <<<EOD
<h1 class= 'redo'>Redovisning</h1>
<h2>Uppgift 1</h2>
<h3>Utvecklingsmiljö</h3>
<p>Operativsystem: PC, Windos 7</p>
<p>Lokal Server: EasyPHP</p>
<p>Program: Aptana</p>
<p>Testad i: Mozilla Firefox, Google Chrome</p>
<h3>Reflektion</h3>
<p>Var lite stressad så hoppade nästan över 20-stegen men är glad att jag tog beslutet att göra dem ändå.
Var lite segt att komma igång med anax-modelen men efter många om och men med en del svordommar så föll bitarna på platts.
Det vill säga tills nästa problem uppstod under konstruktionen ut av "source.php". Fick på något sätt för mig att
jag behövde ladda upp min kod på github innan det gick att använda ordentligt men så var ju inte fallet.</p>
<p>Min Anax fick sig namnet Latana. Namnet är inte märkligare än att det brukar vara mitt internetnamn. Jag har googlat
namnet några gånger och har fått upp italienska restuaranger. Det är också namnet på min publika webbplatts.</p>
Jag beslutade mig för att inte göra några förändringar förrens jag känner mig trygg med anax. Detta sättet att progammera är
väldigt nytt för mig och jag vill komma ut ur mina trygga sätt att programmera på. Det är ju så man lär sig något nytt vare sig
man håller med eller inte. 
Jag är fortfarande fundersam över om jag gillar detta sättet att hantera sin katalog. Jag kan se vissa fördelar men
undrar om det verkligen är värt mödan. Jag hade nog föredragit att skapa en View och låta html-koden skötas ut av olika metoder.</p>
<p>Annars en bra uppgift. Fick en vernligen att komma ut ur sitt skal.</p>

EOD;
 

include(LATANA_THEME_PATH);

?>