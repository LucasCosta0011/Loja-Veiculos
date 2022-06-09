<?php
require('../conexao.php');
$menorValor = $_POST['menor-valor'];
$maiorValor = $_POST['maior-valor'];

// No sql só funciona igual se for com 1 operador, exemplo =
$query = "SELECT * FROM veiculos WHERE valor_veiculo BETWEEN '$menorValor' AND '$maiorValor'";
$result = mysqli_query($conex, $query);


?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscas de veiculos</title>
    <link rel="stylesheet" href="../../style/global_consulta.css">
</head>
<body>
    <h2>Veiculos encontrados:</h2>
    <div class="btn">
        <a href="../consultas/consultas_veiculos.php">
        <button id="btnVoltar" type="button">Voltar</button>
        </a>
    </div>
    <table>
        <thead>
            <tr>
                <th>Fabricante</th>
                <th>Modelo</th>
                <th>Ano de fabricação</th>
                <th>Ano do modelo do veiculo</th> 
                <th>cor</th>
                <th>Placa</th>
                <th>Cidade</th>
                <th>Renavam</th>
                <th>Valor total</th>
                <th>Opcionais</th>
            </tr>
        </thead>
        <tbody>
        <?php while($dados = mysqli_fetch_array($result)): ?>
            <tr>
            
                <td><?= $dados['fabricante'] ?></td>
                <td><?= $dados['modelo'] ?></td>
                <td><?= $dados['ano_fab_veiculo'] ?></td>
                <td><?= $dados['ano_mod_veiculo'] ?></td>
                <td><?= $dados['cor_veiculo'] ?></td>
                <td><?= $dados['placa_veiculo'] ?></td>
                <td><?= $dados['cidade_veiculo'] ?></td>
                <td><?= $dados['renavam_veiculo'] ?></td>
                <td><?= $dados['valor_veiculo'] ?></td>
                <td><?= $dados['opcionais_veiculo'] ?></td>
            
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>