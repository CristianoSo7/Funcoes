<?php

require_once "conexao.php";

$sql = "CREATE TABLE IF NOT EXISTS cadastro (

    id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,

    nome VARCHAR(50) NOT NULL,

    nascimento DATE,

    email VARCHAR(20) NOT NULL,

    site VARCHAR(20),

    dependentes INT,

    salario FLOAT
)";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if ($resultado) 
{
    echo "Tabela criada com sucesso!";
}

else 
{
    echo "Error: " . $conexao->error;
}

$conexao->close();
