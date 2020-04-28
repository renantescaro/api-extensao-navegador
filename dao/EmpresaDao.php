<?php

class EmpresaDao{

    public static function selecionarPorId(int $id){
        $sql = 'SELECT * FROM empresa WHERE id = :ID';
        return Banco::selecionar($sql, [':ID'=>$id]);
    }

    public static function selecionarTudo(){
        $sql = 'SELECT * FROM empresa';
        return Banco::selecionar($sql);
    }

    public static function selecionarIds(){
        $sql = 'SELECT id FROM empresa';
        return Banco::selecionar($sql);
    }

    public static function salvar(int $id, $nome, $cnpj,$endereco, $cep, $telefone){

        //INSERT
        if($id == 0){
            self::inserir([':NOME'=>$nome,':CNPJ'=>$cnpj,':ENDERECO'=>$endereco,':CEP'=>$cep,':TELEFONE'=>$telefone]);
        }
        
        //UPDATE
        self::atualizar([':ID'=>$id,':NOME'=>$nome,':CNPJ'=>$cnpj,':ENDERECO'=>$endereco,':CEP'=>$cep,':TELEFONE'=>$telefone]);
    }
    
    private static function inserir($parametros){
        $sql = 'INSERT INTO empresa(nome,cnpj,endereco,cep,telefone)
                    VALUES(:NOME,:CNPJ,:ENDERECO,:CEP,:TELEFONE)';
        
        return Banco::executar($sql,$parametros);
    }

    private static function atualizar($parametros){
        $sql = 'UPDATE empresa 
                SET nome=:NOME,cnpj=:CNPJ,endereco=:ENDERECO,cep=:CEP,telefone=:TELEFONE
                WHERE id=:ID';

        return Banco::executar($sql,$parametros);
    }

    public static function deletar(int $id){
        $sql = 'DELETE FROM empresa WHERE id = :ID';
        return Banco::executar($sql, [':ID'=>$id]);
    }
}