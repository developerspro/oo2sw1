<?php

require_once "Carro.php";
$meuCarro = new Carro();

$meuCarro->capacidadeCombustivel = 50;
$meuCarro->tanqueCombustivel = 0;

$meuCarro->verificarQtdeCombustivel();
$meuCarro->abastecer(20);
$meuCarro->abastecer(10);
$meuCarro->abastecer(20);






