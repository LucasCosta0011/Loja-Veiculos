<?php
    session_start();
    $msg = '';
    if(isset($_SESSION['erroCadastro'])){
        $msgAlert = 'msgERR';
        $msg = "<h4 class='msg'>Não foi possível cadastrar o veículo. Tente novamente!</h4>";
        unset($_SESSION['erroCadastro']);
    }
    if(isset($_SESSION['Cadastrado'])){
        $msgAlert = 'msgOK';
        $msg = "<h4 class='msg'>O modelo: ".$_SESSION['Cadastrado']." foi adicionado com sucesso!!!</h4>";
        unset($_SESSION['Cadastrado']);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar veiculos</title>
    <link rel="stylesheet" href="../style/global.css">
    <link rel="stylesheet" href="../style/veiculos.css">
</head>
<body>
    
    <h2>Cadastrar veículos</h2>
    <div class="<?=$msgAlert?>"><?=$msg?></div>
    
    <form action="../php/processa-formularios/veiculos.php" method="post">
        <div class="column">
            <div class="row center">
                <label for="fabricante">Fabricante: <input type="text" class="input" name="fabricante"></label>
                <label for="modelo">Modelo: <input type="text" class="input" name="modelo"></label>
            </div>
            <div class="row center">
                <label for="ano_fab_veiculo">Ano Fabricação: <input type="number" class="input" name="ano_fab_veiculo"></label>
                <label for="ano_mod_veiculo">Ano Modelo: <input type="number" class="input" name="ano_mod_veiculo"></label>
            </div>
            <div class="row center">
                <label for="cor_veiculo">Cor: <input type="text" class="input" name="cor_veiculo"></label>
                <label for="placa_veiculo">Placa: <input type="text" class="input" name="placa_veiculo"></label>
            </div>
            
            <div class="row center">
                <label for="cidade_veiculo">Cidade: <input type="text" class="input" name="cidade_veiculo"></label>
                <label for="renavam_veiculo">Renavam: <input type="number" class="input" name="renavam_veiculo"></label>
            </div>
            <div class="row center">
                <label for="valor_veiculo">Valor: <input type="number" class="input" name="valor_veiculo"></label>
                <label for="opcional">Opcional: <input type="text" class="input" name="opcional"></label>
            </div>
       
            <div class="row">
                <div class="row center">
                    <button id="btnCadastrar" type="submit">Cadastrar</button>
                    <a href="../index.html">
                        <button id="btnVoltar" type="button">Voltar</button>
                    </a>
                </div>
                <div class="row center">
                    <a href="../php/busca-sem-filtro/consultas_veiculos.php">
                        <button id="btnConsultar" type="button">Consultar</button>
                    </a>
                </div>
            </div>
        </div>

    </form>
</body>
</html>