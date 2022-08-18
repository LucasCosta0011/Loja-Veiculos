<?php 
  require('../db/conexao.php');
  $ano = $_POST['ano'];
  $query = "SELECT * FROM vendedores WHERE nasc_vendedor>='$ano'";
  $result = mysqli_query($conex, $query);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Busca de Vendedores</title>
  <link rel="stylesheet" href="../../style/global_consulta.css">
</head>
<body>
  <h2>Vendedores encontrados:</h2>
  <div class="btn">
    <a href="../busca-sem-filtro/consultas_vendedores.php">
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
    <?php while($dados = mysqli_fetch_array($result)): ?>
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