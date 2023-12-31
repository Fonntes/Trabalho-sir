<?php

?>

<!doctype html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="Styles/login.css">
  <script src="index.js"></script>
</head>
<body>
  <div id="stars"></div>
  <div id="stars2"></div>
  <div id="stars3"></div>
  <div class="section">
    <div class="container">
      <div class="row full-height justify-content-center">
        <div class="col-12 text-center align-self-center py-5">
          <div class="section pb-5 pt-5 pt-sm-2 text-center">
            <h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>
            <input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
            <label for="reg-log"></label>
            <div class="card-3d-wrap mx-auto">
              <div class="card-3d-wrapper">
                <div class="card-front">
                  <div class="center-wrap">
                    <div class="section text-center">
                      <h4 class="mb-4 pb-3">Log In</h4>
                      <form method="POST" action="loginscript.php">
                        <div class="form-group">
                          <input type="text" class="form-style" name="username" id="username" placeholder="Username">
                          <i class="input-icon uil uil-at"></i>
                        </div>	
                        <div class="form-group mt-2">
                          <input type="password" name="password" id="password" class="form-style" placeholder="Password">
                          <i class="input-icon uil uil-lock-alt"></i>
                        </div>
                        <button id="login-button" type="submit">Login</button>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="card-back">
                  <div class="center-wrap">
                    <div class="section text-center">
                      <h4 class="mb-3 pb-3">Sign Up</h4>
                      <form method="POST" action="registerscript.php">
                        <div class="form-group">
                          <input type="text" name="name" id="name" class="form-style" placeholder="Nome">
                          <i class="input-icon uil uil-user"></i>
                        </div>	
                        <div class="form-group mt-2">
                          <input type="email" name="email" id="email" class="form-style" placeholder="Email">
                          <i class="input-icon uil uil-at"></i>
                        </div>	
                        <div class="form-group mt-2">
                          <input type="text" name="username" id="signup-username" class="form-style" placeholder="Username">
                          <i class="input-icon uil uil-at"></i>
                        </div>
                        <div class="form-group mt-2">
                          <input type="password" name="password" id="signup-password" class="form-style" placeholder="Password">
                          <i class="input-icon uil uil-lock-alt"></i>
                        </div>
                        <button id="signup-button" type="submit">Register</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
