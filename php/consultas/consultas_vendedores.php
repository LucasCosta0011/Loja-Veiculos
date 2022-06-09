<?php 
  require('../conexao.php');
  $query = "SELECT * FROM vendedores";
  $result = mysqli_query($conex, $query);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Consultas Vendedores</title>
  <link rel="stylesheet" href="../../style/global_consulta.css">
</head>
<body>

      <form action="../buscas/busca_vendedores.php" method="post">

        <label for="">Vendedores acima de:</label>
        <input id="inputDate" type="date" name="ano">

        <div class="btn">
          <a href="../../vendedores.php">
              <button id="btnVoltar" type="button">Voltar</button>
          </a>
          <button type="submit" id="btnConsultar">Consultar</button>
        </div>

      </form>

    <table>
      <h2 >Vendedores encontrados:</h2>
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
      <?php $query = "SELECT * FROM vendedores";
        $result = mysqli_query($conex, $query);
        while($dados = mysqli_fetch_array($result)): ?>
      <tr>
          <td><?=$dados['nome_vendedor'];?></td>
          <td><?=$dados['endereco_vendedor'];?></td>
          <td><?=$dados['tel_vendedor'];?></td>
          <td><?=$dados['rg_vendedor'];?></td>
          <td><?=$dados['cpf_vendedor'];?></td>
          <td><?=$dados['nasc_vendedor'];?></td>
      </tr>
      <?php endwhile;?>
    </table>
</body>
</html>