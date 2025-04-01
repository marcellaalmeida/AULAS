<?php
    class ContaCorrente {
        //Atributos
        public $conta;
        public $agencia;
        public $nome;
        public $saldo;

        //Métodos
        public function efetuarSaque($valor){
            $this-> saldo -= $valor;
        }

        public function imprimirSaldo(){
            echo "<p>Olá " . $this->nome;
            echo "<p>Seu saldo atual é: " . $this->saldo;
        }
    }