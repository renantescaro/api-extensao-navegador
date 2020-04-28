<?php

class Configuracoes{
    
    public function __construct(){
        
        define('DIRETORIO',dirname(dirname(__FILE__)));
        define('USUARIO' ,'usr_extensao');
        define('SENHA'   ,'');
        define('BANCO'   ,'extensao');
        define('SERVIDOR','');
    }
}

$config = new Configuracoes();