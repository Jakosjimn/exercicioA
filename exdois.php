<?php
$dados = [
    filter_input(INPUT_GET, "d1", FILTER_SANITIZE_SPECIAL_CHARS),
    filter_input(INPUT_GET, "d2", FILTER_SANITIZE_SPECIAL_CHARS),
    filter_input(INPUT_GET, "d3", FILTER_SANITIZE_SPECIAL_CHARS),
    filter_input(INPUT_GET, "d4", FILTER_SANITIZE_SPECIAL_CHARS),
    filter_input(INPUT_GET, "d5", FILTER_SANITIZE_SPECIAL_CHARS)
];

// Inserir valor extra (fixo ou do form)
array_splice($dados, 2, 0, "Maracujá");

echo "<h2>Array após inserir na 3ª posição</h2>";
foreach ($dados as $valor) {
    echo $valor . "<br>";
}
?>