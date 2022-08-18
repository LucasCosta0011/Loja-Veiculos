<?php
    session_start();
    $msg = '';
    if(isset($_SESSION['erroCadastro'])){
        $msgAlert = 'msgERR';
        $msg = "<h4 class='msgERR'>O Vendedor não foi cadastrado. Tente novamente!</h4>";
        unset($_SESSION['erroCadastro']);
    }
    if(isset($_SESSION['Cadastrado'])){
        $msgAlert = 'msgOK';
        $msg = "<h4 class='msgOK'>O Cliente: ".$_SESSION['Cadastrado']." foi adicionado com sucesso!!!</h4>";
        unset($_SESSION['Cadastrado']);
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar vendedores</title>
    <link rel="stylesheet" href="../style/global.css">
    <link rel="stylesheet" href="../style/vendedores.css">

</head>
<body>

    <h2>Cadastrar vendedores</h2>
    <div class="<?=$msgAlert?>"><?=$msg?></div>

    <form action="../php/processa-formularios/vendedores.php" method="post">
    <div class="column">

            <div class="row center">

                <label for="nomeVendedor">Nome:
                    <input type="text" class="input" name="nomeVendedor">
                </label>
                <label for="enderecoVendedor">Endereço:
                    <input type="text" class="input" name="enderecoVendedor">
                </label>

            </div>
            <div class="row center">

                <label for="telVendedor">Telefone:
                    <input class="input" type="tel" class="input" name="telVendedor" placeholder="(XX) XXXX-XXXX">
                </label>
                <label for="rgVendedor">RG:
                    <input class="input" type="text" class="input" name="rgVendedor">
                </label>

            </div>
            <div class="row center">

                <label for="cpfVendedor">CPF:
                    <input class="input" type="number" class="input" name="cpfVendedor" placeholder="max 11 digitos">
                </label>
                <label for="nascVendedor">Data de Nascimento:
                    <input class="input" type="date" class="input" name="nascVendedor">
                </label>
   
            </div>
            <div class="row center">

                    <button id="btnCadastrar" id="button" type="submit">Cadastrar</button>
 
                    <a class="text-center" href="../index.html">
                        <button id="btnVoltar" type="button">Voltar</button>
                    </a>
 
                    <a href="../php/busca-sem-filtro/consultas_vendedores.php">
                        <button id="btnConsultar" id="btnConsultar" type="button">Consultar</button>
                    </a>
            </div>   
    </div>
    </form>       
</body>
</html>
</body>
</html>