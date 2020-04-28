<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    require_once("../../include.php");

    $pessoa = null;
    if(isset($_GET['editar'])){
        $id = intval($_GET['editar']);
        $pessoa = PessoaDao::selecionarPorId($id)[0];
    }

    if(isset($_GET['salvar'])){
        
        $id = 0;
        if($_POST['id'] !=''){
            $id = intval($_POST['id']);
        }

        PessoaDao::salvar($id, $_POST['nome'],$_POST['cpf'],$_POST['rg'],$_POST['dataNascimento']);
        header('location: /cadastrar/pessoa');
    }

    if(isset($_GET['excluir']) && $_GET['excluir'] !=''){
        
        PessoaDao::deletar(intval($_GET['excluir']));
        header('location: /cadastrar/pessoa');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Pessoa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div style="text-align: center; margin-top: 20px">
        <h2>Cadastro Pessoa</h2>
    </div>
    <div style="margin-left: 30px; margin-right: 30px">
        <form action="?salvar" method="POST">
            <input name="id" type="hidden" value="<?=$pessoa['id']?>">

            <div class="form-group row">
                <div class="col-md-4">
                    <label>Nome</label>
                    <input name="nome" class="form-control" value="<?=$pessoa['nome']?>">
                </div>
                <div class="col-md-2">
                    <label>CPF</label>
                    <input name="cpf" class="form-control" value="<?=$pessoa['cpf']?>">
                </div>
                <div class="col-md-2">
                    <label>RG</label>
                    <input name="rg" class="form-control" value="<?=$pessoa['rg']?>">
                </div>
                <div class="col-md-2">
                    <label>Data Nascimento</label>
                    <input name="dataNascimento" class="form-control" value="<?=$pessoa['data_nascimento']?>">
                </div>
            </div>

            <button class="btn btn-primary" type="submit">Salvar</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>