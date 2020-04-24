<?php

class ProdutoCtrl{

    public static function gerar(){
        
        $ids = ProdutoDao::selecionarIds();

        $qtdIds  = count($ids);
        $posicao = rand(0,$qtdIds-1);
        $produto = ProdutoDao::selecionarPorId(intval($ids[$posicao]['id']));

        return json_encode($produto, true);
    }
}