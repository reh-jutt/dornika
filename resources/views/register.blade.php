<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register</title>
        <link rel="stylesheet" href=" {{asset('css/register.css')}}">

    </head>
    <body>

    <div class="wrapper">
        <a href="main1">
        <span class="icon-close"><ion-icon name="close"></ion-icon></span></a>


    <div class="form-box register">
        <h2>Register</h2>
        <form action="#" method="post">
            @csrf 
            <div class="input-box">
                <span class="icon" >
                    <ion-icon name="person"></ion-icon>
                </span>
                <input type="text" name="uname" required>
                <label>User name</label>
            </div>
            <div class="input-box">
                <span class="icon">
                    <ion-icon name="mail"></ion-icon>
                </span>
                <input type="email" name="email" required>
                <label>Email</label>
            </div>
            <div class="input-box">
                <span class="icon">
                    <ion-icon name="lock"></ion-icon>
                </span>
                <input type="password" name="password" required>
                <label>Password</label>
            </div>
            <div class="input-box">
                <span class="icon">
                    <ion-icon name="lock"></ion-icon>
                </span>
                <input type="text" name="address" required>
                <label>Address</label>
            </div>
            <div class="input-box">
                <span class="icon">
                    <ion-icon name="lock"></ion-icon>
                </span>
                <input type="number" name="contact" step="1" required>
                <label>Contact</label>
            </div>
            <div class="remember-forget">
                <label><input type="checkbox">I agree to the term & conditions</label>
                
            </div>
            <button type="submit" class="btn ">Register</button>
            <div class="login-register"><p>Already have an account? 
                <a href="login" class="login-link">Login</a></p>
                </div>
        </form>
    </div>
    </div>


    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    </body>
    
    </html>
    