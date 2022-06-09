<?php

require __DIR__.'./conexao.php';
session_start();
function CadastraClientes($conex, $nome, $endereco, $telefone, $rg, $cpf, $nascimento){ // Início da função CadastraClientes
    $query="insert into clientes (nome_cliente, endereco_cliente, telefone_cliente, rg_cliente, cpf_cliente, nasc_cliente) values (
        '{$nome}',
        '{$endereco}',
        '{$telefone}',
        '{$rg}',
        '{$cpf}',
        '{$nascimento}')";
    return mysqli_query($conex, $query);
} // Fim da função CadastraClientes

$nome = $_POST['nomeCliente'];
$endereco = $_POST['enderecoCliente'];
$tel = $_POST['telCliente'];
$rg = $_POST['rgCliente'];
$cpf = $_POST['cpfCliente'];
$dataNasc = $_POST['nascCliente'];

if ($nome == '' || $endereco == '' || $tel == '' || $rg == '' || $cpf == '' || $dataNasc == ''){
    $_SESSION['erroCadastro'] = $nome;
    header('location: ../clientes.php');
}else{
    if(isset($nome, $endereco, $tel, $rg, $cpf, $dataNasc)){
        if(CadastraClientes($conex, $nome, $endereco, $tel, $rg, $cpf, $dataNasc)){
            $_SESSION['Cadastrado'] = $nome;
            header('location: ../clientes.php');
        }
    }
} 

/*
no html está name="nomeArray[]"

$dados = $_POST['array'];

$check = false;
for($i = 0; $i < count($dados); $i++){
    if (empty($dados[$i])){
        echo "<span style='color: red;'>O Cliente: $dados[0] não foi cadastrado!!! Tente novamente!</span>";
        echo "<a href='../clientes.html'>Voltar</a>";
        $check = true;
        break;
    }
}
if(!$check){
    if(CadastraClientes($conex, $dados[0], $dados[1], $dados[2], $dados[3], $dados[4], $dados[5])){
        echo "<span style='color: green;'>O cliente: $dados[0] foi adicionado com sucesso!!!</span>";
        echo "<a href='../clientes.html'>Voltar</a>";
    }
}*/
?>
