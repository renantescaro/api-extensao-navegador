<?php

class EmpresaCtrl{

    public static function gerar(){
        
        $ids = EmpresaDao::selecionarIds();

        $qtdIds  = count($ids);
        $posicao = rand(0,$qtdIds-1);
        $empresa = EmpresaDao::selecionarPorId(intval($ids[$posicao]['id']));

        return json_encode($empresa, true);
    }
}