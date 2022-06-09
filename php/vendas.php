
<?php
    require __DIR__.'./conexao.php';
    session_start();
    function CadastraVendedores($conex, $idVendedor, $idCliente, $idVeiculo, $dataVenda){ // Início da função CadastraVendedores
        $query="insert into loja_veiculos.vendas (id_vendedor, id_cliente, id_veiculo, data_compra) values (
            '{$idVendedor}',
            '{$idCliente}',
            '{$idVeiculo}',
            '{$dataVenda}')";
        return mysqli_query($conex, $query);
    } // Fim da função CadastraVendedores


    $idVendedor = $_POST['id_vendedor'];
    $idCliente = $_POST['id_cliente'];
    $idVeiculo = $_POST['id_veiculo'];
    $dataVenda = $_POST['data_venda'];

    if ($idVendedor == '' || $idCliente == '' || $idVeiculo == '' || $dataVenda == ''){
        $_SESSION['erroCadastro'] = $idVendedor;
        header('location: ../vendas.php');
    }else{
        if(isset($idVendedor, $idCliente, $idVeiculo, $dataVenda)){
            if(CadastraVendedores($conex, $idVendedor, $idCliente, $idVeiculo, $dataVenda)){
                $_SESSION['Cadastrado'] = $idVendedor;
                header('location: ../vendas.php');
            }
        }
    } 
?>
