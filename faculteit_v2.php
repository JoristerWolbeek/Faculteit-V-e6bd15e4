<?php

$getal = readline("Welk getal?");
$antwoord  =1;
$x=1;

while($getal!=$x){
    $antwoord += $antwoord*$x;
    $x++;
}
echo($antwoord);