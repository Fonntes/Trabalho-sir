<?php
// Incluir aqui o seu código PHP, se necessário
?>

<!DOCTYPE html>
<html>

<head>
    <h1 id="login">Registo</h1>
    <link rel="stylesheet" href="styles.css">
    <script src="index.js"></script>
</head>

<body>
    <form method="POST" action="registerscript.php">
        <h4 id="headers">Nome</h4>
        <div class="container">
            <input type="text" name="name" id="name">
        </div>
        <h4 id="headers">Email</h4>
        <div class="container">
            <input type="email" name="email" id="email">
        </div>
        <h4 id="headers">Username</h4>
        <div class="container">
            <input type="text" name="username" id="username">
        </div>
        <h4 id="headers">Password</h4>
        <div class="container">
            <input type="password" name="password" id="password">
        </div>
        <h5 id="headers" onclick="HaveAccount()">Já tens conta? Faz o Login</h5>
        <div class="container">
            <button id="button" type="submit">Registar</button>
        </div>
    </form>
</body>

</html>