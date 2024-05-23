<?php

// Variabelen voor de operator, het eerste en tweede getal
$operator = readline("Voer de operator in (+ voor optellen, - voor aftrekken): ");
$eerste_getal = readline("Voer het eerste getal in: ");
$tweede_getal = readline("Voer het tweede getal in: ");

// Controleren welke operator is ingevoerd en de berekening uitvoeren
if ($operator == "+") {
    $resultaat = $eerste_getal + $tweede_getal;
    echo "Resultaat: " . $resultaat;
} elseif ($operator == "-") {
    $resultaat = $eerste_getal - $tweede_getal;
    echo "Resultaat: " . $resultaat;
} else {
    echo "Ongeldige operator ingevoerd. Voer alleen + of - in.";
}
?>
