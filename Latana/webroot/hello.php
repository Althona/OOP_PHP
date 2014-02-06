<?php

include(__DIR__.'/config.php');

$Latana['title'] = "Hello World";

$Latana['main'] = <<<EOD
<h1 class='redo'>Lite om mig</h1>

<p>Tjena! Jag är en snubbe, 27 år gammal och från den sydligaste staden i sverige!</p>

<p>Väldigt nära tyskland men min förknippning med landet går inte längre än att min farfar var tysk.
Jag gillar att spela tv-spel, gå på gym och lite programmering skadar inte heller.
Bor just nu i Kalmar och har bott här i snart 2 år. Från en liten stad till en annan.
I framtiden kommer jag att flytta till Shanghai då min flickvän bor där och det verkar vara ett bra tillfälle
att jobba utomlands. Jag får hålla tummarna och hoppas att de inte programmerar på mandarin. Får försöka att lära mig språket också
så man har någonting ytterligare att spänna sig med.</p>

<p>Det känns bra att läsa denna kursen och få slipa på sina färdigheter.</p>


EOD;
 

include(LATANA_THEME_PATH);

?>