<?php

require_once "conexao.php";

$sql = "INSERT INTO cadastro
(nome, nascimento, email, site, dependentes, salario)
VALUES (
    'Huguinho',
    '1988-07-01',
    'huguinho@hotmail.com',
    'www.huguinho.com.br',
    1,
    7.580
)";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if ($resultado) 
{
    echo "Dados inseridos com sucesso!";
}

else 
{
    echo "Error: " . $conexao->error;
}

$conexao->close();