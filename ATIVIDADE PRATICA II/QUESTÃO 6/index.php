<?php
function areaQuadrado($lado) {
    return $lado * $lado;
}
function areaRetangulo($base, $altura) {
    return $base * $altura;
}
function areaCirculo($raio) {
    return pi() * $raio * $raio;
}

echo "Escolha a figura (quadrado, retangulo, circulo): ";
$figura = strtolower(trim(fgets(STDIN)));

switch ($figura) {
    case "quadrado":
        echo "Digite o lado: ";
        $lado = (float)trim(fgets(STDIN));
        echo "Área do quadrado: " . areaQuadrado($lado) . "\n";
        break;
    case "retangulo":
        echo "Digite a base: ";
        $base = (float)trim(fgets(STDIN));
        echo "Digite a altura: ";
        $altura = (float)trim(fgets(STDIN));
        echo "Área do retângulo: " . areaRetangulo($base, $altura) . "\n";
        break;
    case "circulo":
        echo "Digite o raio: ";
        $raio = (float)trim(fgets(STDIN));
        echo "Área do círculo: " . areaCirculo($raio) . "\n";
        break;
    default:
        echo "Figura inválida!\n";
}
?>
