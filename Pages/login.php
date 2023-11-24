<?php
// Incluir aqui o seu código PHP, se necessário
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
    <script src="index.js"></script>
</head>

<body>
    <h1 id="login">Login</h1>
    <form method="POST" action="loginscript.php">
        <h4 id="headers">Username</h4>
        <div class="container">
            <input type="text" name="username" id="username">
        </div>
        <h4 id="headers">Password</h4>
        <div class="container">
            <input type="password" name="password" id="password">
        </div>
        <h5 id="headers" onclick="NoAccount()">Não tens conta? Regista-te</h5>
        <div class="container">
            <button id="button" type="submit">Login</button>
        </div>
    </form>
</body>

</html>


