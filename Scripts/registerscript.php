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

    // Consulta SQL preparada
    $sql = "INSERT INTO users VALUES (?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $name, $email, $username, $password);
    $result = $stmt->get_result();

    var_dump($_POST);

    if ($stmt->execute()) {
        header("Location: homepage.html");
        exit();
    } else {
        echo "Falha no registro.";
    }
    
} 
    

$conn->close();
?>
