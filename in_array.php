<?php

/**
 * function in_array
 * Procurando valor em array
 * @author Marcos Marcolin
 */

$estadosEmitentesNfe = ['PR', 'SC', 'MG' ,'RS', 'SP', 'RJ', 'ES'];

$estadoEmpresa = 'SC';
if(in_array($estadoEmpresa, $estadosEmitentesNfe)){
    echo "Seu estado pode emitir NFe!";
    exit;
}
echo 'Seu estado não pode emitir NFe!';