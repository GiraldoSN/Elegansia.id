<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0%;
            font-family: 'Raleway', sans-serif;
            color: #F2F2F2;
        }
        
        #container-login {
            background-color: 	#8B4513;
            position: relative;
            top: 500%;
            width: 340px;
            height: 550px;
            border-radius: 0.35em;
            box-shadow: 0 5px 50px 0 #F2F2F2(0, 0, 0, 0.2);
            text-align: center;
            margin-top: 20px;
            margin-inline: auto;
           
        }
        
        #container-register {
            background-color: #8B4513;
            position: relative;
            top: 20%;
            margin: auto;
            width: 340px;
            height: 500px;
            border-radius: 0.35em;
            box-shadow: 0 3px 10px 0 #F2F2F2(0, 0, 0, 0.2);
            text-align: center;
        }
        
        #title {
            position: relative;
            background-color: #8B4513;
            width: 100%;
            padding: 20px 0px;
            border-radius: 0.35em;
            font-size: 22px;
            border-bottom: 1px solid #F2F2F2(255, 255, 255, 0.05);
        }
        
        .lock {
            position: relative;
            top: 2px;
        }
        
        .input {
            margin: auto;
            width: 240px;
            border-radius: 4px;
            background-color: #F2F2F2;
            padding: 8px 0px;
            margin-top: 15px;
        }
        
        .input-addon {
            float: left;
            background-color: #F2F2F2;
            border: 1px solid #F2F2F2;
            padding: 4px 8px;
            border-right: 1px solid rgba(255, 255, 255, 0.05);
        }
        
        input[type=checkbox] {
            cursor: pointer;
        }
        
        input[type=text] {
            color: #949494;
            margin: 0;
            background-color: #373b3d;
            border: 1px solid #373b3d;
            padding: 6px 0px;
            border-radius: 3px;
        }
        
        input[type=text]:focus {
            border: 1px solid #373b3d;
        }
        
        input[type=password] {
            color: #949494;
            margin: 0;
            background-color: #F2F2F2;
            border: 1px solid #F2F2F2;
            padding: 6px 0px;
            border-radius: 3px;
        }
        
        input[type=password]:focus {
            border: 1px solid #F2F2F2;
        }
        
        input[type=email] {
            color: #949494;
            margin: 10;
            background-color: #F2F2F2;
            border: 1px solid #F2F2F2;
            padding: 6px 0px;
            border-radius: 3px;
        }
        
        input[type=email]:focus {
            border: 1px solid #F2F2F2;
        }
        
        .forgot-password {
            position: relative;
            bottom: 0%;
        }
        
        .forgot-password a:link {
            color: #C1C3C6;
            text-decoration: none;
        }
        
        .forgot-password a:visited {
            color: #C1C3C6;
            text-decoration: none;
        }
        
        .forgot-password a:hover {
            color: #FFF;
            transition: color 1s;
        }
        
        .privacy {
            margin-top: 5px;
            position: relative;
            font-size: 12px;
            bottom: 0%;
        }
        
        .privacy a:link {
            color: #949494;
            text-decoration: none;
        }
        
        .privacy a:visited {
            color: #949494;
            text-decoration: none;
        }
        
        .privacy a:hover {
            color: #C1C3C6;
            transition: color 1s;
        }
        
        *:focus {
            outline: none;
        }
        
        .remember-me {
            margin: 10px 0;
        }
        
        input[type=submit] {
            padding: 6px 25px;
            background:#f6f8f9;
            color:#0a0a0a;
            font-weight: bold;
            border: 0 none;
            cursor: pointer;
            border-radius: 3px;
        }
        
        .register {
            margin: auto;
            padding: 16px 0;
            text-align: center;
            margin-top: 40px;
            width: 85%;
            border-top: 1px solid #C1C3C6;
        }
        
        .clearfix {
            clear: both;
        }
        
        #register-link {
            margin-top: 10px;
            padding: 6px 25px;
            background:#eff1f5;
            color:#020202;
            font-weight: bold;
            border: 0 none;
            cursor: pointer;
            border-radius: 3px;
        }
    </style>
</head>

<body>
    <div id="container-login">
        <div id="title">
            <h1>Elegansia.id</h1>
            Login
        </div>
        <div class="input">
            <div class="input-addon"><i class="fa fa-envelope"></i></div>
            <b><input type="email" placeholder="Email" />
        </div>
        <div class="input">
            <div class="input-addon"><i class="fa fa-key"></i></div>
            <b> <input type="password" placeholder="Password" />
        </div>
        <div class="remember-me">
            <input type="checkbox" /> Remember me
        </div>
        <form action="login.php" method="post"><input type="submit" value="Login"></form>

        <div class="forgot-password">
            <a href="register.php">Forgot password?</a>
        </div>
        <div class="privacy">
            By logging in, you agree to our <a href="https://policies.google.com/privacy?hl=en-US">Privacy Policy</a>
        </div>
        <div class="register">
            Don't have an account? 
            <br> <br> <a href="#" id="register-link">Register here</a>
        </div>
    </div>
</body>

</html>
