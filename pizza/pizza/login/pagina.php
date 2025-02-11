<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>
<body>
    <div class="container">
        <div class="titulo">
            <a href="../home/index.php" class="return"><i class="bi bi-house-fill"></i></a>
            <h1>Login</h1>
        </div>
    <form id="cadastroForm" action="../login/processar_login.php" method="post" >
            <label for="cpf">CPF:</label>
            <input type="text" id="cpf" name="cpf" required>

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>

            <button type="submit">Login</button>
        </form>
        <hr>
        <a href="../cadastro/pagina.php">Cadastrar</a>
    </div>
</body>
</html>