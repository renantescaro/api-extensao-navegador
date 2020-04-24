<?php

require_once('include.php');

if(isset($_GET['gerar-pessoa'])){
    echo PessoaCtrl::gerar();
}

if(isset($_GET['gerar-produto'])){
    echo ProdutoCtrl::gerar();
}