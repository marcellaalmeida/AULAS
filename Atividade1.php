<?php
    class Celular {
        //Atributos
        public $marca;
        public $modelo;
        public $bateria;

        //Métodos
        public function ligar($bateria){
            $this-> bateria -= $valor;
        }

        public function verificarBateria(){
            echo "<p>Olá " . $this->nome;
            echo "<p>Sua bateria atual é: " . $this->bateria;
        }
    }