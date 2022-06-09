<?php
    session_start();
    $msg = '';
    if(isset($_SESSION['erroCadastro'])){
        $msgAlert = 'msgERR';
        $msg = "<h4 class='msgERR'>Erro ao tentar finalizar a venda. Tente novamente!</h4>";
        unset($_SESSION['erroCadastro']);
    }
    if(isset($_SESSION['Cadastrado'])){
        $msgAlert = 'msgOK';
        $msg = "<h4 class='msgOK'>Venda realizada com sucesso!!!</h4>";
        unset($_SESSION['Cadastrado']);
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/global.css">
    <link rel="stylesheet" href="style/vendas.css">
    <title>Finalizar venda</title>
</head>
<body>

    <h2>Finalizar venda</h2>
    <div class="<?=$msgAlert?>"><?=$msg?></div>
    
    <form action="./php/vendas.php" method="post">
        <div class="column">
            <div class="row center">
                <label for="">Id Vendedor
                <input type="text" class="input" name="id_vendedor" placeholder="Id vendedor"></label>

            	<label for="">Id cliente
            	<input type="text" class="input" name="id_cliente" placeholder="Id cliente"></label>
            </div>
            <div class="row center">
                <label for="">Id Veiculo
                <input type="text" class="input" name="id_veiculo" placeholder="Id veiculo"></label>

            	<label for="">Data
            	<input type="date" class="input" name="data_venda"></label>
            </div>
    
            <div class="row center">
                <button id="btnCadastrar" type="submit">Finalizar</button>
                <a href="./index.html">
                    <button id="btnVoltar" type="button">Voltar</button>
                </a>
                <a href="./php/consultas/consultas_vendas.php">
                    <button id="btnConsultar" type="button">Consultar</button>
                </a>
            </div>
        </div>
    </form>
    
</body>
</html>