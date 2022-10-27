<?php

// Função para conectar o banco de dados

function novaConexao($banco = 'aula_php')
{
    $servidor = '127.0.0.1:3306';
    $usuario = 'root';
    $senha = 'programadorX';

    $conexao = new mysqli($servidor, $usuario, $senha, $banco);

    if ($conexao->connect_error) 
    {
        echo ("Erro: " . $conexao->connetc_error);
        exit();
    }

    return $conexao;
}