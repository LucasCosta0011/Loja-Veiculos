<?php

    require('../conexao.php');
    $query = "SELECT * FROM clientes";
    $result = mysqli_query($conex, $query);

/*$result = mysqli_query($conex, $query);
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    printf("ID: %s  Name: %s</br>", $row['id_cliente'], $row['nome_cliente']);
}
mysqli_free_result($result);
*/

// $dados = mysqli_fetch_array($result);
// echo $dados['id_cliente'];
// echo '<br/>';
// echo $dados['nome_cliente'];
// echo '<br/>';
// echo $dados['endereco_cliente'];



// while($dados = mysqli_fetch_array($result)){

// echo $dados['nome_cliente'];
// echo '<br/>';
// echo $dados['endereco_cliente'];
// }

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultas Clientes</title>
    <link rel="stylesheet" href="../../style/global_consulta.css">
</head>
<body>
    <form action="../buscas/busca_cliente.php" method="post">
        <label for="">Clientes baixo de:
        <input id="inputDate" type="date" name="ano">
        </label>

        <div class="btn">
            <a href="../../clientes.php">
                <button id="btnVoltar" type="button">Voltar</button>
            </a>
            <button id="btnConsultar" type="submit">Consultar</button>
        </div>
    </form>
    <table>
        <h2>Clientes encontrados:</h2>
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
            <td><?=$dados['nome_cliente'];?></td>
            <td><?=$dados['endereco_cliente'];?></td>
            <td><?=$dados['telefone_cliente'];?></td>
            <td><?=$dados['rg_cliente'];?></td>
            <td><?=$dados['cpf_cliente'];?></td>
            <td><?=$dados['nasc_cliente'];?></td>
        </tr>
        <?php endwhile;?>
    </table>      
</body>
</html>
