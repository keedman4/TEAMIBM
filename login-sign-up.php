
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
     <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="styles/style.css" />
    <link rel="stylesheet" href="styles/responsive.css" />
    <title>HNG | INTERNSHIP</title>

     <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>

</head>

<body>
    <h1 class="hng-head">HNG 6.0 INTERNSHIP LOGIN PAGE</h1>
    <h2 class="hng-team-name">TeamIBM</h2>
    <div class="container" id="container">
        <div class="form-container sign-up-container">

            <form action="registration.php" method="post">
                <h1 class="ca-text">Create Account</h1>
                <div class="social-container">
                    <a href="#" class="social"><img src="img/social-icons/facebook-square.svg" alt="Facebook"></a>
                    <a href="#" class="social"><img src="img/social-icons/twitter-square.svg" alt="Twitter"></a>
                </div>
                <span>or use your email for registration</span>

                


                <input type="text" name="user" value="" placeholder="Name"  />

                
                <input type="password" name="password" placeholder="Password" />

                <input type="password" name="passwordConf" placeholder="Password Confirm" />

                <button class="btn sign-up-btn" type="submit" name="submitreg">Sign Up</button>
            </form>
        </div>
        


        <div class="form-container sign-in-container">
            <form action="validation.php" method="post" >
                <h1 class="si-text">Sign in</h1>
                <div class="social-container">
                    <a href="#" class="social"><img src="img/social-icons/facebook-square.svg" alt="Facebook"></a>
                    <a href="#" class="social"><img src="img/social-icons/twitter-square.svg" alt="Twitter"></a>
                </div>
                <span>or use your account</span>

              <input type="text" name="user" placeholder="Username" />



                <input type="password" placeholder="Password" name="password" />

                
                <button class="btn si-btn" type="button">Sign In</button>
            </form>
        </div>



        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>
                        To keep connected with us please login with your personal info
                    </p>
                    <button class="btn ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start your internship with HNG 6.0 INTERNSHIP</p>
                    <button class="btn ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>


    <script src="js/main.js"></script>
</body>
</html>