<?php

require __DIR__.'./conexao.php';
session_start();

function CadastraVeiculos(
$conex, 
$fabricante, 
$modelo,
$ano_fab_veiculo,
$ano_mod_veiculo,
$cor_veiculo,
$placa_veiculo,
$cidade_veiculo,
$renavam_veiculo,
$valor_veiculo,
$opcional){ // Início da função CadastraVeiculos

    $query="insert into veiculos (fabricante, modelo, ano_fab_veiculo, ano_mod_veiculo, cor_veiculo, placa_veiculo, cidade_veiculo, renavam_veiculo, valor_veiculo, opcionais_veiculo) values (
    '{$fabricante}',
    '{$modelo}',
    '{$ano_fab_veiculo}',
    '{$ano_mod_veiculo}',
    '{$cor_veiculo}',
    '{$placa_veiculo}',
    '{$cidade_veiculo}',
    '{$renavam_veiculo}',
    '{$valor_veiculo}',
    '{$opcional}')";
    return mysqli_query($conex, $query);
} // Fim da função CadastraVeiculos

$fabricante = $_POST['fabricante'];
$modelo = $_POST['modelo'];
$ano_fab_veiculo = $_POST['ano_fab_veiculo'];
$ano_mod_veiculo = $_POST['ano_mod_veiculo'];
$cor_veiculo = $_POST['cor_veiculo'];
$placa_veiculo = $_POST['placa_veiculo'];
$cidade_veiculo = $_POST['cidade_veiculo'];
$renavam_veiculo = $_POST['renavam_veiculo'];
$valor_veiculo = $_POST['valor_veiculo'];
$opcional = $_POST['opcional'];


if ($fabricante == '' || 
$modelo == '' || 
$ano_fab_veiculo == '' || 
$ano_mod_veiculo == '' || 
$cor_veiculo == '' || 
$placa_veiculo == '' || 
$cidade_veiculo == '' || 
$renavam_veiculo == '' ||
$valor_veiculo == ''){
    $_SESSION['erroCadastro'] = $modelo;
    header('location: ../veiculos.php');
}else{
    if(isset($fabricante, 
    $modelo, 
    $ano_fab_veiculo, 
    $ano_mod_veiculo, 
    $cor_veiculo, 
    $placa_veiculo,
    $cidade_veiculo,
    $renavam_veiculo,
    $valor_veiculo,
    $opcional)){
        if(CadastraVeiculos($conex, 
        $fabricante, 
        $modelo, 
        $ano_fab_veiculo, 
        $ano_mod_veiculo, 
        $cor_veiculo, 
        $placa_veiculo,
        $cidade_veiculo,
        $renavam_veiculo,
        $valor_veiculo,
        $opcional)){
            $_SESSION['Cadastrado'] = $modelo;
            header('location: ../veiculos.php');
        }
    }
} 