<?php

class PessoaDao{

    public static function selecionarPorId(int $id){
        $sql = 'SELECT * FROM pessoa WHERE id = :ID';
        return Banco::selecionar($sql, [':ID'=>$id]);
    }

    public static function selecionarTudo(){
        $sql = 'SELECT * FROM pessoa';
        return Banco::selecionar($sql);
    }

    public static function selecionarIds(){
        $sql = 'SELECT id FROM pessoa';
        return Banco::selecionar($sql);
    }

    public static function salvar(int $id, $nome, $cpf, $rg, $dataNascimento){

        //INSERT
        if($id == 0){
            self::inserir([':NOME'=>$nome,':CPF'=>$cpf,':RG'=>$rg,':DATA_NASCIMENTO'=>$dataNascimento]);
        }
        
        //UPDATE
        self::atualizar([':ID'=>$id,':NOME'=>$nome,':CPF'=>$cpf,':RG'=>$rg,':DATA_NASCIMENTO'=>$dataNascimento]);
    }
    
    private static function inserir($parametros){
        $sql = 'INSERT INTO pessoa(nome,cpf,rg,data_nascimento)
                    VALUES(:NOME,:CPF,:RG,:DATA_NASCIMENTO)';
        
        return Banco::executar($sql,$parametros);
    }

    private static function atualizar($parametros){
        $sql = 'UPDATE pessoa SET nome=:NOME,cpf=:CPF,rg=:RG,data_nascimento=:DATA_NASCIMENTO
                WHERE id=:ID';

        return Banco::executar($sql,$parametros);
    }

    public static function deletar(int $id){
        $sql = 'DELETE FROM pessoa WHERE id = :ID';
        return Banco::executar($sql, [':ID'=>$id]);
    }
}