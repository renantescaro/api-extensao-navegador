<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once("../../include.php");
    
    $empresas = EmpresaDao::selecionarTudo();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div style="text-align: center; margin-top: 20px">
        <h2>Listagem de Empresas</h2>
    </div>

    <div style="margin-top: 20px; margin-left: 25px; margin-right: 25px">
        <a class="btn btn-primary" href="empresa/cadastro.php">Cadastrar</a>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>CNPJ</th>
                    <th>Endereço</th>
                    <th>CEP</th>
                    <th>Telefone</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>

                <?php forEach($empresas as $empresa){ ?>
                    <tr>
                        <td><?=$empresa['nome']?></td>
                        <td><?=$empresa['cnpj']?></td>
                        <td><?=$empresa['endereco']?></td>
                        <td><?=$empresa['cep']?></td>
                        <td><?=$empresa['telefone']?></td>
                        <td>
                            <a href="empresa/cadastro.php?editar=<?=$empresa['id']?>" class="btn btn-warning">Editar</a>
                            <a href="empresa/cadastro.php?excluir=<?=$empresa['id']?>" class="btn btn-danger">Excluir</a>
                        </td>
                    </tr>
                <?php } ?>

            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>