<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <link rel="stylesheet" href="./cadastro.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


</head>
    <body>
        <div class="container">
            <div class="titulo">
                <a href="../home/index.php" class="return"><i class="bi bi-house-fill"></i></a>
                <h1>Cadastro</h1>
            </div>
            <form id="cadastroForm" action="processar_cadastro.php" method="post" >
                <label for="nome">Nome Completo:</label>
                <input type="text" id="nome" name="nome" required>
    
                <label for="cpf">CPF:</label>
                <input type="text" id="cpf" name="cpf" required>
    
                <label for="telefone">Telefone:</label>
                <input type="tel" id="telefone" name="telefone" required>
    
                <label for="endereco">Endereço:</label>
                <input type="text" id="endereco" name="endereco" required>
    
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required>
    
                <button type="submit">Cadastrar</button>
            </form>
            <hr>
            <a href="../login/pagina.php">Já tenho cadastro</a>
        </div>
    </body>
</html>