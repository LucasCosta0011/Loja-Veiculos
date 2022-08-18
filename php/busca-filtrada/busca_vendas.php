<?php 
  require('../db/conexao.php');
  $anoInicio = $_POST['anoInicio'];
  $anoFinal = $_POST['anoFinal'];
  $query = "SELECT vendedores.nome_vendedor, clientes.nome_cliente, veiculos.modelo, veiculos.valor_veiculo, vendas.data_compra
  from vendas
  INNER JOIN vendedores
  ON vendas.id_vendedor = vendedores.id_vendedor
  INNER JOIN clientes
  ON vendas.id_cliente = clientes.id_cliente
  INNER JOIN veiculos
  ON vendas.id_veiculo = veiculos.id_veiculo
  WHERE vendas.data_compra >= '$anoInicio' AND vendas.data_compra <= '$anoFinal'";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buscas de Vendas</title>
  <link rel="stylesheet" href="../../style/global_consulta.css">
</head>
<body>
  <h2>Vendas encontradas:</h2>
  <div class="btn">
    <a href="../busca-sem-filtro/consultas_vendas.php">
      <button id="btnVoltar" type="button">Voltar</button>
    </a>
  </div>
  <table>
    <thead>
        <tr>
            <th>Nome Vendedor</th>
            <th>Nome Cliente</th>
            <th>Modelo</th>
            <th>Data</th> 
        </tr>
    </thead>
    <?php $result = mysqli_query($conex, $query);
      while($dados = mysqli_fetch_array($result)): ?>
    <tr>
        <td><?=$dados['nome_vendedor'];?></td>
        <td><?=$dados['nome_cliente'];?></td>
        <td><?=$dados['modelo'];?></td>
        <td><?=$dados['data_compra'];?></td>
    </tr>
    <?php endwhile;?>
  </table>
</body>
</html>