<?php
    class Computador {
        //Atributos

        public $atributos = array("marca", "cor", "modelo","preco");
        public function __construct($marca, $cor, $modelo, $preco) {
            $this->atributos["marca"] = $marca;
            $this->atributos["cor"] = $cor;
            $this->atributos["modelo"] = $modelo;
            $this->atributos["preco"] = $preco;
        }

        // Métodos getters e setters
 
        public function getPreco() {
            return $this->preco;
        }

        public function setPreco($preco) {
       
            if($preco >= 0)
            $this->preco = $preco;
        else {
            echo "<p>Valor inválido. Defina um valor positivo";
            $this->preco = 0;}
        }


        public function imprimir(){
            echo "<p> Marca: " . $this->atributos["marca"];
            echo "<p> Cor: " . $this->atributos["cor"];
            echo "<p> Modelo: " . $this->atributos["modelo"];
            echo "<p> Preco: " . $this->atributos["preco"];
        }
        public function darDesconto($percentual){
            $this->preco -= $this->preco * $percentual / 100;
        }
    }
        