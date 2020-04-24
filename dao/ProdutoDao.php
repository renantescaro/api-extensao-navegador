<?php

class ProdutoDao{

    public static function selecionarPorId(int $id){
        $sql = 'SELECT * FROM produto WHERE id = :ID';
        return Banco::selecionar($sql, [':ID'=>$id]);
    }

    public static function selecionarTudo(){
        $sql = 'SELECT * FROM produto';
        return Banco::selecionar($sql);
    }

    public static function selecionarIds(){
        $sql = 'SELECT id FROM produto';
        return Banco::selecionar($sql);
    }
}