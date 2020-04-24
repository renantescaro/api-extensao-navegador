<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once("../include.php");
    
    $pessoas = PessoaDao::selecionarTudo();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pessoas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    
    <div style="text-align: center; margin-top: 20px">
        <h2>Listagem de Pessoas</h2>
    </div>

    <div style="margin-top: 20px; margin-left: 25px; margin-right: 25px">
        <a class="btn btn-primary" href="cadastro.php">Cadastrar</a>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>RG</th>
                    <th>Data Nascimento</th>
                    <th>Alterações</th>
                </tr>
            </thead>
            <tbody>

                <?php forEach($pessoas as $pessoa){ ?>
                    <tr>
                        <td><?=$pessoa['nome']?></td>
                        <td><?=$pessoa['cpf']?></td>
                        <td><?=$pessoa['rg']?></td>
                        <td><?=$pessoa['data_nascimento']?></td>
                        <td>
                            <a href="cadastro.php?editar=<?=$pessoa['id']?>" class="btn btn-warning">Editar</a>
                            <a href="cadastro.php?excluir=<?=$pessoa['id']?>" class="btn btn-danger">Excluir</a>
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