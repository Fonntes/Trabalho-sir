<?php

// Informações de conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "unitask";

// Cria uma conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

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
    $sql = "SELECT * FROM users WHERE Username = ? AND Password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password); // 'ss' indica que são duas strings
    $stmt->execute();
    $result = $stmt->get_result();

    var_dump($_POST);

    if ($result->num_rows > 0) {
        // Usuário encontrado, verifique a senha
        $row = $result->fetch_assoc();

        if ($row["Username"] === $username && $row["Password"] === $password) {
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

$conn->close();
?>
