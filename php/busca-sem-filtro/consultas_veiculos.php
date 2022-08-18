<?php

  require('../db/conexao.php');
  $query = "SELECT * FROM veiculos";
  $result = mysqli_query($conex, $query);

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Consultas Veiculos</title>
  <link rel="stylesheet" href="../../style/global_consulta.css">
</head>
<body>

  <form action="../busca-filtrada/busca_veiculos.php" method="post">
    <h3 style="margin: auto;">Escolha um veiculo dentro do seu orçamento:</h3><br>
      <span style="margin: auto;">De:<input id="inputValoresVeiculos" class="inputs" type="text" name="menor-valor"> R$</span><br>
      <span style="margin: auto;">ATÉ:<input class="inputs" type="text" name="maior-valor"> R$</span><br>

        <div class="btn">
        <a href="../../formularios/veiculos.php">
          <button id="btnVoltar" type="button">Voltar</button>
        </a>
          <button id="btnConsultar" type="submit">Consultar</button>
        </div>
  </form>

<table>
  <caption>Veiculos encontrados:</caption>
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
        <td><?=$dados['fabricante'];?></td>
        <td><?=$dados['modelo'];?></td>
        <td><?=$dados['ano_fab_veiculo'];?></td>
        <td><?=$dados['ano_mod_veiculo'];?></td>
        <td><?=$dados['cor_veiculo'];?></td>
        <td><?=$dados['placa_veiculo'];?></td>
        <td><?=$dados['cidade_veiculo'];?></td>
        <td><?=$dados['renavam_veiculo'];?></td>
        <td><?=$dados['valor_veiculo'];?></td>
        <td><?=$dados['opcionais_veiculo'];?></td>
    </tr>
    <?php endwhile;?>
  </tbody>
</table>
</body>
</html>
      