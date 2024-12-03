<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href=" {{asset('css/login.css')}}">
        <script type="text/javascript">
            function clickedButton()
      {

          window.location = 'login'

      } </script>
    </head>
    <body>

    <div class="wrapper">
        <a href="main1">
        <span class="icon-close"><ion-icon name="close"></ion-icon></span></a>
    <div class="form-box login">
        <h2>Login</h2>
        <form action="#">
            <div class="input-box">
                <span class="icon">
                    <ion-icon name="mail"></ion-icon>
                </span>
                <input type="email" required>
                <label>Email</label>
            </div>
            <div class="input-box">
                <span class="icon">
                    <ion-icon name="lock"></ion-icon>
                </span>
                <input type="password" required>
                <label>Password</label>
            </div>
            <div class="remember-forget">
                <label><input type="checkbox">Remember me</label>
                <a href="#">Forget Password</a>
            </div>
            <button type="submit" class="btn ">Login</button>
            <div class="login-register"><p>Don't have an account? 
                <a href="register" class="register-link">Register</a></p>
                </div>
        </form>
    </div>


    
    </div>


    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    </body>
    
    </html>
    