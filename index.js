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

document.addEventListener('DOMContentLoaded', function () {
    var loginTab = document.getElementById('loginTab');
    var signupTab = document.getElementById('signupTab');
    var loginSection = document.getElementById('login-section');
    var signupSection = document.getElementById('signup-section');

    loginTab.addEventListener('click', function () {
        loginTab.classList.add('active');
        signupTab.classList.remove('active');
        loginSection.style.display = 'block';
        signupSection.style.display = 'none';
    });

    signupTab.addEventListener('click', function () {
        loginTab.classList.remove('active');
        signupTab.classList.add('active');
        loginSection.style.display = 'none';
        signupSection.style.display = 'block';
    });
});


