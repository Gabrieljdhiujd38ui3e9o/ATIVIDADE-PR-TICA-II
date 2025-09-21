<?php
$numeros = [];

for ($i = 1; $i <= 10; $i++) {
    echo "Digite o número $i: ";
    $numeros[] = (int)trim(fgets(STDIN));
}

$pares = [];
$impares = [];

foreach ($numeros as $num) {
    if ($num % 2 == 0) {
        $pares[] = $num;
    } else {
        $impares[] = $num;
    }
}

echo "\nNúmeros pares: " . implode(", ", $pares) . "\n";
echo "Números ímpares: " . implode(", ", $impares) . "\n";
?>
