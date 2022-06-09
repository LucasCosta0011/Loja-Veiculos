<?php
    require __DIR__.'./conexao.php';
    session_start();
    function CadastraVendedores($conex, $nome, $endereco, $telefone, $rg, $cpf, $nascimento){ // Início da função CadastraVendedores
        $query="insert into vendedores (nome_vendedor, endereco_vendedor, tel_vendedor, rg_vendedor, cpf_vendedor, nasc_vendedor) values (
            '{$nome}',
            '{$endereco}',
            '{$telefone}',
            '{$rg}',
            '{$cpf}',
            '{$nascimento}')";
        return mysqli_query($conex, $query);
    } // Fim da função CadastraVendedores


    $nome = $_POST['nomeVendedor'];
    $endereco = $_POST['enderecoVendedor'];
    $tel = $_POST['telVendedor'];
    $rg = $_POST['rgVendedor'];
    $cpf = $_POST['cpfVendedor'];
    $dataNasc = $_POST['nascVendedor'];

    if ($nome == '' || $endereco == '' || $tel == '' || $rg == '' || $cpf == '' || $dataNasc == ''){
        $_SESSION['erroCadastro'] = $nome;
        header('location: ../vendedores.php');
    }else{
        if(isset($nome, $endereco, $tel, $rg, $cpf, $dataNasc)){
            if(CadastraVendedores($conex, $nome, $endereco, $tel, $rg, $cpf, $dataNasc)){
                $_SESSION['Cadastrado'] = $nome;
                header('location: ../vendedores.php');
            }
        }
    } 
?>
