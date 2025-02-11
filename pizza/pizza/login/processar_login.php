<?php
session_start();

$host = 'localhost';
$db = 'cadastro';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitizando os dados
    $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
    $senha = $_POST['senha'];

    $stmt = $conn->prepare("SELECT * FROM cadastro WHERE cpf = ?");
    $stmt->bind_param("s", $cpf);
    $stmt->execute();
    $result = $stmt->get_result();
   
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        // Corrigido para password_verify
        if (password_verify($senha, $user['senha'])) {
            $_SESSION['cpf'] = $user['cpf'];
            $_SESSION['nome'] = $user['nome'];

            session_regenerate_id(true);
            header('Location: ../home/index.php'); // Adicionado ponto e vírgula
            
            exit(); // É uma boa prática usar exit após header
        } else {
            echo "<script type='text/javascript'>
                alert('Senha Incorreta.');
                window.location.href = 'pagina.php'; // Redireciona para a página de login
              </script>";
        }
    } else {
        echo "<script type='text/javascript'>
                alert('Usuário não encontrado.');
                window.location.href = 'pagina.php'; // Redireciona para a página de login
              </script>";
    }

    $stmt->close();
}

$conn->close();
?>
