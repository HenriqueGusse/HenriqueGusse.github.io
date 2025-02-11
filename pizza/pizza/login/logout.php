<?php
session_start();
session_unset();  // Desfaz todas as variáveis de sessão
session_destroy(); // Destrói a sessão

// Redireciona para a página de login após o logout
header("Location: ../home/index.php");
exit();
?>
