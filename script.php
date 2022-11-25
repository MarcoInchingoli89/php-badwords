<?php

$parola = $_GET["parola"];
$paragrafo = $_GET["paragrafo"];

/* echo var_dump($parola, $paragrafo); */
// Stampo a schermo il paragrafo e la sua lunghezza
echo $paragrafo . "<br>";
echo "Il paragrafo è lungo " . strlen($paragrafo) . " caratteri" . "<br>";

// Sostituisco la parola scritta con gli asterischi nel paragrafo e lo stampo a schermo con la sua lunghezza
// Rendo la parola minuscola per censurare anche le parole maiuscole
$paragrafoCensurato = str_replace(strtolower($parola), '***', $paragrafo) . "<br>";
echo $paragrafoCensurato;
echo "Il paragrafo censurato è lungo " . strlen($paragrafo) . " caratteri";

?>