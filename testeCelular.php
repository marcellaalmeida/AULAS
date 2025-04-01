<?php
    // Incluir o arquivo da classe
    require "Celular.php";


    // Instanciar um objetivo de Celular
    $meuCelular = new Celular();


    // Definir os valores dos atributos do celular
    $meuCelular->marca = "Apple";
    $meuCelular->modelo = "Iphone 13";
    $meuCelular->bateria = 78;


    // Ligar o celular
    $meuCelular->ligar();

    // Bateria atualizadau
    $meuCelular->verificarBateria();
