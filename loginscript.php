<?php

// Informações de conexão com o banco de dados
require "db/connection.php";
$pdo = pdo_connection_mysql();

// Coleta os valores do formulário
if (isset($_POST["username"]) && isset($_POST["password"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validar entrada
    if (empty($username) || empty($password)) {
        echo "Por favor, preencha todos os campos.";
        exit();
    }

    // Consulta SQL preparada
    $sql = "SELECT * FROM users WHERE username = ? AND Password = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(1, $username);
    $stmt->bindParam(2, $password);
    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    var_dump($_POST);

    if ($row) {
        // Usuário encontrado, verifique a senha
        if ($row["username"] === $username && $row["password"] === $password) {
            header("Location: homepage.html");
            exit(); 
            
        } else {
            echo "Nome de usuário ou senha incorretos.";
        }
    } else {
        echo "Nome de usuário não encontrado.";
    }
} else {
    echo "Por favor, preencha todos os campos.";
}

// Lembre-se de fechar a conexão quando não for mais necessária
$pdo = null;
?>

