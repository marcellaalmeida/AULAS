<?php
    class Funcionario {
        // Atributos
        private $nome;
        private $idade;
        private $cargo;
        private $salario;


        //Métodos de encapsulamento (getters e setters)
        public function getNome() {
            return $this->nome;
        }


        public function setNome($nome) {
            $this->nome = $nome;
        }


        public function getIdade() {
            return $this->idade;
        }


        public function setIdade($idade) {
            $this->idade = $idade;
        }


        public function getCargo() {
            return $this->cargo;
        }


        public function setCargo($cargo) {
            $this->cargo = $cargo;
        }


        public function getSalario() {
            return $this->salario;
        }


        public function setSalario($salario) {
            $this->salario = $salario;
        }


        //Método para exibir o Funcionario
        public function exibirInformacoes(){
            echo "<p>" . $this->nome . " " . $this->idade . " " .
            $this->cargo . " " . $this->salario;
        }


        //Método para aumentar o Salário
        public function aumentarSalario($percentual){
            $this->salario += $this->salario * $percentual / 100;
        }
       
    }
