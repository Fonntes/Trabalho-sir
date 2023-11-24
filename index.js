function Login(event) {
    event.preventDefault(); // Impede o envio do formulário

    console.log("Login function called.");
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    console.log(username + password);

    fetch('conexao.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: 'username=' + encodeURIComponent(username) + '&password=' + encodeURIComponent(password),
    })
    .then(response => response.text())
    .then(data => {
        if (data.trim() === "success") {
            document.location = "homepage.html";
        } else {
            alert("Nome de usuário ou senha incorretos.");
        }
    })
    .catch(error => {
        console.error('Erro:', error);
    });

    return false; // Impede o envio do formulário
}





function Logout(){
    document.location="login.php";
}

function Register(){
    document.location="login.php";
}

function NoAccount(){
    document.location="register.php";
}

function HaveAccount(){
    document.location="login.php";
}

