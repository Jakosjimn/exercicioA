<?php
$dados = [
    filter_input(INPUT_GET, "d1", FILTER_SANITIZE_SPECIAL_CHARS),
    filter_input(INPUT_GET, "d2", FILTER_SANITIZE_SPECIAL_CHARS),
    filter_input(INPUT_GET, "d3", FILTER_SANITIZE_SPECIAL_CHARS),
    filter_input(INPUT_GET, "d4", FILTER_SANITIZE_SPECIAL_CHARS),
    filter_input(INPUT_GET, "d5", FILTER_SANITIZE_SPECIAL_CHARS)
];

// array_map - Maiúsculas
$maiusculas = array_map('strtoupper', $dados);

echo "<h2>Array com array_map (Maiúsculas)</h2>";
foreach ($maiusculas as $valor) {
    echo $valor . "<br>";
}

// array_search
$procura = "Uva"; 
$posicao = array_search($procura, $dados);

echo "<h2>array_search: Procurando '$procura'</h2>";
echo $posicao !== false ? "Encontrado na posição $posicao" : "Não encontrado";

// array_filter - itens com mais de 5 letras
$filtrados = array_filter($dados, fn($item) => strlen($item) > 5);

echo "<h2>array_filter: Palavras com mais de 5 letras</h2>";
foreach ($filtrados as $valor) {
    echo $valor . "<br>";
}
?>