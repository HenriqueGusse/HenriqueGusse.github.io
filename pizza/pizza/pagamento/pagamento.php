<?php 
session_start();

if (!isset($_SESSION['cpf'])){
    header('Location: ../home/index.php');
}
?>



<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzaria - Pagamento</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="container">
        <div class="card">
            <img src="../home/images/logo.png" alt="Logo da Pizzaria" class="logo">
            <h1 class="title">Pagamento em Breve</h1>
            <p class="message">
                O cheirinho de pizza já está no ar! 🍕<br>
                Estamos preparando tudo para oferecer a melhor experiência para você.<br>
                Nossa página de pagamento estará disponível em breve.
            </p>
            <div class="progress-bar">
                <div class="progress"></div>
            </div>
            <p class="footer-message">Obrigado por sua paciência! Volte logo. ❤️</p>
            <a href="../home/index.php" class="button">Voltar ao Início</a>
        </div>
    </div>
</body>
</html>