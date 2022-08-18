<?php
    session_start();
    $msg = '';
    if(isset($_SESSION['erroCadastro'])){
        $msgAlert = 'msgERR';
        $msg = "<span class='msgERR'>O Cliente não foi cadastrado. Tente novamente!</span>";
        unset($_SESSION['erroCadastro']);
    }
    if(isset($_SESSION['Cadastrado'])){
        $msgAlert = 'msgOK';
        $msg = "<span class='msgOK'>O Cliente: ".$_SESSION['Cadastrado']." foi adicionado com sucesso!!!</span>";
        unset($_SESSION['Cadastrado']);
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar clientes</title>
    <link rel="stylesheet" href="../style/global.css">
    <link rel="stylesheet" href="../style/clientes.css">
</head>
<body>
    <h2>Cadastrar clientes</h2>
    <div class="<?=$msgAlert?>"><?=$msg?></div>
    <form action="../php/processa-formularios/clientes.php" method="post">
        <div class="column">
            <div class="row center">
                <label for="nomeCliente">Nome: <input type="text" class="input" name="nomeCliente"></label>
                <label for="enderecoCliente">Endereço: <input type="text" class="input" name="enderecoCliente"></label>
            </div>
            <div class="row center">
                <label for="telCliente">Telefone: <input type="tel" class="input" name="telCliente" placeholder="(XX) XXXX-XXXX"></label>
                <label for="rgCliente">RG: <input type="text" class="input" name="rgCliente"></label>
            </div>
            <div class="row center">
                <label for="cpfCliente">CPF: <input type="number" class="input" name="cpfCliente" placeholder="11 digitos"></label>
                <label for="nascCliente">Data Nascimento: <input type="date" class="input" name="nascCliente"></label>
            </div>
            <div class="row">
     
                <div class="msg">
                    <button id="btnCadastrar" type="submit">Cadastrar</button>
                    <a href="../index.html">
                        <button id="btnVoltar" type="button">Voltar</button>
                    </a>
                    <a href="../php/busca-sem-filtro/consultas_clientes.php">
                        <button id="btnConsultar" type="button">Consultar</button>
                    </a>
                </div>
          
            </div>
        </div>
    </form>
</body>
</html>