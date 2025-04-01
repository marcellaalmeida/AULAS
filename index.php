<?php
     //Incluir o arquivo da Classe Funcionario
     require "Funcionario.php";


     // Intanciar o objeto da Classe Funcionario
     $esteFuncionario = new Funcionario();
 
     // Definir os atributos do Funcionario
     $esteFuncionario->setNome("Marcella");
     $esteFuncionario->setIdade(18);
     $esteFuncionario->setCargo("Técnico em Informática");
     $esteFuncionario->setSalario(2000,00);
     $esteFuncionario->aumentarSalario(10);
 
     // Mostrar o Funcionario
     $esteFuncionario->exibirInformacoes();