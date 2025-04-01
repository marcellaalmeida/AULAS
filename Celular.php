<?php
    class Celular {
        //Atributos
        public $marca;
        public $modelo;
        public $bateria;

        //Métodos ligar
        public function ligar() {
            if ($this->bateria > 0) {
                echo "O celular está ligando ";
            } else {
                echo "Não há bateria. Não foi possível iniciar o sistema. ";

            }
        }

        // Metodo verificar a Bateria
        public function verificarBateria() {
                echo "Nível de Bateria: " . $this->bateria . "%";

        }

}
?>
