<?php

require_once("pessoa.class.php");

class Teste{
    private $pessoa;

    public function __construct(){
        $pessoa = new Pessoa();

        $pessoa->setNome("Kawan Ximendes");
        echo $pessoa->getNome();

        $pessoa->setEndereco("Rua Alfajor, 95");
        echo $pessoa->getEndereco() . "<br>";

        $pessoa->setBairro("Jardim das Oliveiras");
        echo $pessoa->getBairro() . "<br>";

        $pessoa->setCep("123456");
        echo $pessoa->getCep() . "<br>";

        $pessoa->setCidade("São Paulo");
        echo $pessoa->getCidade() . "<br>";

        $pessoa->setEstado("São Paulo");
        echo $pessoa->getEstado();
        
    }
}new Teste();
?>