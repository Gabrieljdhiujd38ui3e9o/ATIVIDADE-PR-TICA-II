<?php
function celsiusParaFahrenheit($c) {
    return ($c * 9/5) + 32;
}

// F para C
function fahrenheitParaCelsius($f) {
    return ($f - 32) * 5/9;
}

echo "Digite a temperatura: ";
$temp = (float)trim(fgets(STDIN));

echo "Digite a escala (C para Celsius, F para Fahrenheit): ";
$escala = strtoupper(trim(fgets(STDIN)));

if ($escala == "C") {
    echo "$temp °C = " . celsiusParaFahrenheit($temp) . " °F\n";
} elseif ($escala == "F") {
    echo "$temp °F = " . fahrenheitParaCelsius($temp) . " °C\n";
} else {
    echo "Escala inválida!\n";
}
?>
