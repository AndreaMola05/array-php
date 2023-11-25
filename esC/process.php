<?php
// Riempire l'array con 20 numeri interi casuali
$numero_elementi = 20;
$min = 1;
$max = 10;
$array_numeri = array();

for ($i = 0; $i < $numero_elementi; $i++) {
    $array_numeri[] = mt_rand($min, $max);
}

// Stampare l'array generato
echo "Array generato: " . implode(", ", $array_numeri) . "\n";

// Individuare numeri ripetuti
$conteggio_numeri = array_count_values($array_numeri);
$ripetizioni_max = max($conteggio_numeri);

if ($ripetizioni_max > 1) {
    // Trovare il numero con il maggior numero di ripetizioni
    $numero_maggior_ripetizioni = array_search($ripetizioni_max, $conteggio_numeri);
    
    echo "Sono presenti numeri ripetuti.\n";
    echo "Il numero con il maggior numero di ripetizioni è: $numero_maggior_ripetizioni (ripetuto $ripetizioni_max volte).\n";
} else {
    echo "Non sono presenti numeri ripetuti.\n";
}
?>
