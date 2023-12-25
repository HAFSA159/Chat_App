<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>
<body>
    <?php 
    $dataAccess = User::displayUser(20);    
    ?>
    
    <section class="container">
        <div class="login-container">
            <div class="circle circle-one"></div>
            <div class="form-container">
                <img src="https://raw.githubusercontent.com/hicodersofficial/glassmorphism-login-form/master/assets/illustration.png" alt="illustration" class="illustration" />
                <h1 class="opacity">Signup</h1>
                <form action="index.php?page=signup" method="post">
                    <input type="text" name="username" placeholder="USERNAME" required />
                    <input type="email" name="email" placeholder="EMAIL" required/>
                    <input type="password" name="password" placeholder="PASSWORD" required/>
                    <button class="opacity" name="submit">SUBMIT</button>
                </form>
                <div class="register-forget opacity">
                    <a href="index.php?page=login">I HAVE AN ACCOUNT</a>
                    <a href="">FORGOT PASSWORD</a>
                </div>
            </div>
            <div class="circle circle-two"></div>
        </div>
        <div class="theme-btn-container"></div>

    </section>
</body>
</body>
</html>