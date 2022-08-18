<?php 
  require('../db/conexao.php');
  $query = "SELECT vendedores.nome_vendedor, clientes.nome_cliente, veiculos.modelo, veiculos.valor_veiculo, vendas.data_compra
  from vendas
  INNER JOIN vendedores
  ON vendas.id_vendedor = vendedores.id_vendedor
  INNER JOIN clientes
  ON vendas.id_cliente = clientes.id_cliente
  INNER JOIN veiculos
  ON vendas.id_veiculo = veiculos.id_veiculo";
  $result = mysqli_query($conex, $query);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vendas encontradas:</title>
  <link rel="stylesheet" href="../../style/global_consulta.css">
</head>
<body>
  <form action="../busca-filtrada/busca_vendas.php" method="post">
    
    <label class="margin-top-consultas" for="">Vendas de:
      <input id="inputDate" type="date" name="anoInicio">
      
    </label>
    <label for="">até:
        <input id="inputDate" type="date" name="anoFinal">
    </label>
    <div class="btn">
      <a href="../../formularios/vendas.php">
        <button id="btnVoltar" type="button">Voltar</button>
      </a>
      <button id="btnConsultar" type="submit">Consultar</button>
    </div>
  </form>
  <h2>Vendas encontradas:</h2>
  <table>
    <thead>
        <tr>
            <th>Nome Vendedor</th>
            <th>Nome Cliente</th>
            <th>Modelo</th>
            <th>Valor</th> 
            <th>Data</th> 
        </tr>
    </thead>
    <?php $result = mysqli_query($conex, $query);
      while($dados = mysqli_fetch_array($result)): ?>
    <tr>
        <td><?=$dados['nome_vendedor'];?></td>
        <td><?=$dados['nome_cliente'];?></td>
        <td><?=$dados['modelo'];?></td>
        <td><?=$dados['valor_veiculo'];?></td>
        <td><?=$dados['data_compra'];?></td>
    </tr>
    <?php endwhile;?>
  </table>
</body>
</html>