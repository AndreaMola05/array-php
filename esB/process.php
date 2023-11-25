<?php
// Inizializzazione dell'array
$sequenzaNumeri = [];

// Riempimento casuale dell'array con 20 numeri interi
for ($i = 0; $i < 20; $i++) {
    $sequenzaNumeri[] = rand(1, 100);
}

// Inizializzazione degli array per numeri pari e dispari
$numeriPari = [];
$numeriDispari = [];

// Conteggio e separazione dei numeri pari e dispari
foreach ($sequenzaNumeri as $numero) {
    if ($numero % 2 == 0) {
        $numeriPari[] = $numero;
    } else {
        $numeriDispari[] = $numero;
    }
}

// Visualizzazione dei risultati
echo "Array sequenziale: ";
print_r($sequenzaNumeri);

echo "Numeri pari: ";
print_r($numeriPari);

echo "Numeri dispari: ";
print_r($numeriDispari);

echo "Quantità di numeri pari: " . count($numeriPari) . "\n";
echo "Quantità di numeri dispari: " . count($numeriDispari) . "\n";
?>
