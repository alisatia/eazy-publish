<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <!-- <h2>Weekly Coding Challenge #1: Sign in/up Form</h2> -->
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="control.php" method="post">
                <h1>Buat Akun</h1>
                <div class="social-container">
                </div>

                <!-- pesan error -->
                <?php if (isset($_GET['errorsignup'])) { ?>
                    <script>container.classList.add("right-panel-active")</script>
                    <span style="color: red; font-weight: bold;"><?php echo $_GET['errorsignup']; ?></span>
                <?php } else { ?>
                    <span style="color: white;">Buat Akun</span>
                <?php } ?>
                
                <!-- input pesanan -->
                <?php if (isset($_GET['user'])) { ?>
                    <script>container.classList.add("right-panel-active")</script>
                    <input type="text" placeholder="Name" name="user" value="<?php echo $_GET['user'] ?>"/>
                <?php } else { ?>
                    <input type="text" placeholder="Name" name="user"/>
                <?php } ?>

                <?php if (isset($_GET['email'])) { ?>
                    <script>container.classList.add("right-panel-active")</script>
                    <input type="email" placeholder="Email" name="email" value="<?php echo $_GET['email'] ?>" />
                <?php } else { ?>
                    <input type="email" placeholder="Email" name="email"/>
                <?php } ?>
                
                <input type="password" placeholder="Password" name="password"/>
                <input type="password" placeholder="Confirm assword" name="re_password"/>
                <button type="submit" name="signup">Daftar</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="login.php" method="post">
                <img style="height: 60px;" src="../assets/login.png" alt="Login">
                <div class="social-container">
                </div>
                
                <!-- error sistem -->
                <?php if (isset($_GET['errorsignin'])) { ?>
                    <span style="color: red; font-weight: bold;"><?php echo $_GET['errorsignin']; ?></span>
                <?php } else { ?>
                    <span style="color: white;">Login</span>
                <?php } ?>

                <!-- input data -->
                <?php if (isset($_GET['signinemail'])) { ?>
                    <input type="email" placeholder="Email" name="user" value="<?php echo $_GET['signinemail'] ?>"/>
                <?php } else { ?>
                    <input type="email" name="user" placeholder="Email"/>
                <?php } ?>

                <input type="password" name="pass" placeholder="Password" />
                <div class="social-container">
                </div>
                <span></span>
                <button type="submit">Login</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <!-- <h1>Welcome Back!</h1> -->
                    <img style="margin: 25px; width: 200px;" src="../assets/itbpress.png" alt="ITB Press">
                    <p></p>
                    <button class="ghost" id="signIn">Login</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Selamat Datang!</h1>
                    <img src="../assets/bookysign.png" alt="booky" style="height: 200px; margin: 15px;">
                    <!-- <p>Enter your personal details and start journey with us</p> -->
                    <button class="ghost" id="signUp">Daftar</button>
                </div>
            </div>
        </div>
    </div> 
    <script>
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const container = document.getElementById('container');

        signUpButton.addEventListener('click', () => {
            container.classList.add("right-panel-active");
        });

        signInButton.addEventListener('click', () => {
            container.classList.remove("right-panel-active");
        });
    </script>
</body>
</html>