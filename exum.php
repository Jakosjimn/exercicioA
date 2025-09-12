<?php
// Pegar valores digitados no formulário GET
$dados = [
    filter_input(INPUT_GET, "d1", FILTER_SANITIZE_SPECIAL_CHARS),
    filter_input(INPUT_GET, "d2", FILTER_SANITIZE_SPECIAL_CHARS),
    filter_input(INPUT_GET, "d3", FILTER_SANITIZE_SPECIAL_CHARS),
    filter_input(INPUT_GET, "d4", FILTER_SANITIZE_SPECIAL_CHARS),
    filter_input(INPUT_GET, "d5", FILTER_SANITIZE_SPECIAL_CHARS)
];

// Mostrar elementos
echo "<h2>Array Original</h2>";
foreach ($dados as $valor) {
    echo $valor . "<br>";
}
?>