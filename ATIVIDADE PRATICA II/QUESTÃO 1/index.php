<?php
$frutas = [];

for ($i = 1; $i <= 5; $i++) {
    echo "Digite a fruta $i: ";
    $frutas[] = trim(fgets(STDIN));
}

sort($frutas);

echo "\nFrutas em ordem alfabética:\n";
foreach ($frutas as $fruta) {
    echo $fruta . "\n";
}
?>
