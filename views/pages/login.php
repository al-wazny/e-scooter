<?php 
include('../../app/controllers/Authentication.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="../../assets/css/login.css">
    <script src="https://kit.fontawesome.com/53a65f1db8.js" crossorigin="anonymous"></script>
</head>
<body>
    <div>
        <p><a class="redirect" href="../../">Zurueck zur Startseite</a></p>

        <div class="login">
            <h1>Login</h1>
            <form action="" method="post">
                <label for="username">
                    <i class="fas fa-user"></i>
                </label>
                <input type="text" name="username" placeholder="Username" id="username" required pattern="[A-Za-z0-9]{1,20}">
                <label for="password">
                    <i class="fas fa-lock"></i>
                </label>
                <input type="password" name="password" placeholder="Password" id="password" required pattern="[A-Za-z0-9]{1,20}">
                <p style="color: red;"><?=  array_key_exists('error', $_SESSION) ? $_SESSION['error'] : '';  ?></p>
                <input type="submit" name="Login" value="Login">
            </form>
            <form class="registration-form" action="registrate.php">
                <input type="submit" value="registration">
            </form>
        </div>
    </div>
</body>
</html>
<?php $_SESSION['error'] = '';?>