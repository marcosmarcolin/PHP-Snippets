<?php

/** Buscar chave em um Array com array_key_exists */

$dadosCliente = [
    'endereco' => 'Avenida Brasil, 999, Centro - Chapecó',
    'nome' => 'Marcos Marcolin',
    'data_nascimento' => '1994-12-28',
    'idade' => '24',
    'cidade' => 'Chapeco'
];

$chave = 'cidade';
if(array_key_exists($chave, $dadosCliente)){
    echo 'Encontrei a chave!';
    exit;
}
echo 'Não encontrei a chave!';