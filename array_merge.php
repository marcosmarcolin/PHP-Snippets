<?php

/**
 * function array_merge
 * Mesclando arrays simples
 * @author Marcos Marcolin
 */

$arrayTimes = [
    'Chapecoense', 'Grêmio', 'Internacional'
];

$arraySelecoes = [
    'Brasil', 'Argentina', 'Alemanha'
];

$arrayPaises = [
    'Inglaterra', 'Espanha', 'Holanda'
];

$arrayMerge = array_merge($arrayTimes, $arraySelecoes, $arrayPaises);
echo '<pre>';
print_r($arrayMerge);