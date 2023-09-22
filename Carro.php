<?php

class Carro{

    public $cor;
    public $marca;
    public $modelo;
    public $motor;
    public $chassi;
    public $placa;
    public $tipoCombustivel;
    public $capacidadeCombustivel;
    public $tanqueCombustivel;
    public $categoria;
    public $qtdePassageiro;
    public $cambio;
    public $preco;

    public function acelerar(){

    }

    public function re(){

    }

    public function abrirPortaEsquerda(){

    }

    public function frear(){

    }

    public function abastecer($qtdelitros){
     $this->tanqueCombustivel = $qtdelitros + $this->tanqueCombustivel;
     $this->verificarQtdeCombustivel();
    }

    public function verificarQtdeCombustivel(){
      $totalFaltaCombustivel = $this->capacidadeCombustivel - $this->tanqueCombustivel;
      $totalCombustivel = $this->capacidadeCombustivel - $totalFaltaCombustivel;
      echo "Total de combustivel:".$totalCombustivel."<br>";
      echo "Falta ".$totalFaltaCombustivel." para completar o tanque<br>";

    }

    public function fecharPorta(){

    }

    public function ligarFarol(){

    }

    public function abrirJanela(){

    }

    public function fecharJanela(){

    }

    public function conversaoEsquerda(){

    }

    public function conversaoDireita(){

    }



}