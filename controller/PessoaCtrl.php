<?php

class PessoaCtrl{

    public static function gerar(){
        
        $ids = PessoaDao::selecionarIds();

        $qtdIds  = count($ids);
        $posicao = rand(0,$qtdIds-1);
        $produto = PessoaDao::selecionarPorId(intval($ids[$posicao]['id']));

        return json_encode($produto, true);
    }
}