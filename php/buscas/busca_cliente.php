<?php
require('../conexao.php');
$ano = $_POST['ano'];
// Colocar aspas simples nas variaveis
$query = "SELECT * FROM clientes WHERE nasc_cliente <= '$ano'";
$result = mysqli_query($conex, $query);


?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscas de clientes</title>
    <link rel="stylesheet" href="../../style/global_consulta.css">
</head>
<body>
<h2>Clientes encontrados:</h2>
    <div class="btn">
        <a href="../consultas/consultas_clientes.php">
        <button id="btnVoltar" type="button">Voltar</button>
        </a>
    </div>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Endereço</th>
                <th>Telefone</th>
                <th>RG</th> 
                <th>CPF</th>
                <th>Data de Nascimento</th>
            </tr>
        </thead>
        <tbody>
        <?php while($dados = mysqli_fetch_array($result)): ?>
            <tr>
            
                <td><?=$dados['nome_cliente'];?></td>
                <td><?=$dados['endereco_cliente'];?></td>
                <td><?=$dados['telefone_cliente'];?></td>
                <td><?=$dados['rg_cliente'];?></td>
                <td><?=$dados['cpf_cliente'];?></td>
                <td><?=$dados['nasc_cliente'];?></td>
            
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>