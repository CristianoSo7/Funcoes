<?php

require_once "conexao.php";

$sql = "SELECT id, nome, nascimento, email, site, dependentes, salario FROM cadastro";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

$registros = [];

if ($resultado->num_rows > 0) 
{
    while ($row = $resultado->fetch_assoc()) 
    {
        $registros[] = $row;
    }
}

elseif ($conexao->error) 
{
    echo "Erro: " . $conexao->error;
}


$conexao->close();

?>

<table class="table" border="1">
    <thead>
        <th>Código</th>
        <th>Nome</th>
        <th>Nascimento</th>
        <th>Email</th>
        <th>Site</th>
        <th>Dependentes</th>
        <th>Salário</th>
    </thead>
    <tbody>
        <?php foreach($registros as $registros): ?>
            <tr>
                <td><?= $registros['id'] ?></td>
                <td><?= $registros['nome'] ?></td>
                <td><?= date('d/m/Y', strtotime($registros['nascimento'])) ?></td>
                <td><?= $registros['email'] ?></td>
                <td><?= $registros['site'] ?></td>
                <td><?= $registros['dependentes'] ?></td>
                <td><?= $registros['salario'] ?></td>
            </tr>
            <?php endforeach ?>
    </tbody>
</table>
