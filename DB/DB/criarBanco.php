<?php

require_once "conexao.php";

$conexao = novaConexao(null);
$sql = 'CREATE DATABASE IF NOT EXISTS aula_php';

$conexao->query($sql);

$resultado = $conexao->query($sql);

if ($resultado) 
{
    echo "Banco criado com sucesso!";
}

else 
{
    echo "Error: " . $conexao->error;
}

$conexao->close();