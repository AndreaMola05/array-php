<?php
// Generazione casuale di 10 numeri interi compresi tra 10 e 100
$numeroCasuale = [];
for ($i = 0; $i < 10; $i++) {
    $numeroCasuale[] = rand(10, 100);
}

// Stampa dell'array originale
echo "Array originale: ";
print_r($numeroCasuale);

// Ribaltamento dell'array
$ribaltato = array_reverse($numeroCasuale);

// Stampa dell'array ribaltato
echo "Array ribaltato: ";
print_r($ribaltato); 
?>