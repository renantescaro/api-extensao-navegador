<?php

class Configuracoes{
    
    public function __construct(){
        
        define('DIRETORIO',dirname(dirname(__FILE__)));
        define('USUARIO' ,'admin');
        define('SENHA'   ,'');
        define('BANCO'   ,'extensao');
        define('SERVIDOR','localhost');
    }
}

$config = new Configuracoes();