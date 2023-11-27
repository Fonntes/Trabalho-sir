<?php

require "db/connection.php";
$pdo = pdo_connection_mysql();

// Coleta os valores do formulário
if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["username"]) && isset($_POST["password"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validar entrada
    if (empty($name) || empty($email) || empty($username) || empty($password)) {
        echo "Por favor, preencha todos os campos.";
        exit();
    }

    // Consulta SQL preparada usando o objeto PDO $pdo
    $sql = "INSERT INTO users (name, email, username, password) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(1, $name);
    $stmt->bindParam(2, $email);
    $stmt->bindParam(3, $username);
    $stmt->bindParam(4, $password);

    if ($stmt->execute()) {
        header("Location: homepage.html");
        exit();
    } else {
        echo "Falha no registro.";
    }
}

// Lembre-se de fechar a conexão quando não for mais necessária
$pdo = null;
?>
