<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    require_once("../../include.php");

    $empresa = null;
    if(isset($_GET['editar'])){
        $id = intval($_GET['editar']);
        $empresa = EmpresaDao::selecionarPorId($id)[0];
    }

    if(isset($_GET['salvar'])){
        
        $id = 0;
        if($_POST['id'] !=''){
            $id = intval($_POST['id']);
        }

        EmpresaDao::salvar($id, $_POST['nome'],$_POST['cnpj'],$_POST['endereco'],$_POST['cep'],$_POST['telefone']);
        header('location: /cadastrar/empresa');
    }

    if(isset($_GET['excluir']) && $_GET['excluir'] !=''){
        
        EmpresaDao::deletar(intval($_GET['excluir']));
        header('location: /cadastrar/empresa');
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Empresa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div style="text-align: center; margin-top: 20px">
        <h2>Cadastro Empresa</h2>
    </div>
    <div style="margin-left: 30px; margin-right: 30px">
        <form action="?salvar" method="POST">
            <input name="id" type="hidden" value="<?=$empresa['id']?>">

            <div class="form-group row">
                <div class="col-md-4">
                    <label>Nome</label>
                    <input name="nome" class="form-control" value="<?=$empresa['nome']?>">
                </div>
                <div class="col-md-2">
                    <label>CNPJ</label>
                    <input name="cnpj" class="form-control" value="<?=$empresa['cnpj']?>">
                </div>
                <div class="col-md-2">
                    <label>Endereço</label>
                    <input name="endereco" class="form-control" value="<?=$empresa['endereco']?>">
                </div>
                <div class="col-md-2">
                    <label>CEP</label>
                    <input name="cep" class="form-control" value="<?=$empresa['cep']?>">
                </div>
                <div class="col-md-2">
                    <label>Telefone</label>
                    <input name="telefone" class="form-control" value="<?=$empresa['telefone']?>">
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