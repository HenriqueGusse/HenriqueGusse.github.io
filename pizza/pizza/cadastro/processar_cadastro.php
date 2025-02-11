<?php

require_once 'config.php';
// Conectar ao banco de dados
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Preparar a consulta SQL
$stmt = $conn->prepare("INSERT INTO cadastro (nome, cpf, telefone, endereco, senha) VALUES (?, ?, ?, ?, ?)");

// Verificar se a preparação da consulta foi bem-sucedida
if (!$stmt) {
    die("Erro ao preparar a consulta: " . $conn->error);
}



// Receber dados do formulário
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); // Criptografar a senha

// Preparar a consulta SQL com parâmetros para evitar SQL injection
$stmt = $conn->prepare("INSERT INTO cadastro (nome, cpf, telefone, endereco, senha) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $nome, $cpf, $telefone, $endereco, $senha);

// Executar a consulta
$stmt->execute();

if ($stmt->affected_rows > 0) {
    header("Location: ../login/pagina.php");
}

$stmt->close();
$conn->close();