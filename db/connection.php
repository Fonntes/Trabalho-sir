<?php

function connect_mysql(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "unitask";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }
}

?>