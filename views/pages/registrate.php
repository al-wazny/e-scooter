<?php session_start();
include('C:\xampp\htdocs\e-scooter\app\controllers\Authentication.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/53a65f1db8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../assets/css/login.css">
    <title>Title</title>
</head>
<body>
<a class="redirect" href="../..">Zurueck zur Startseite</a>
<div class="login">
    <h1>Registration</h1>
    <form action="Authentication/registrationHandler" method="get">
        <label for="username">
            <i class="fas fa-user"></i>
        </label>
        <input type="text" name="username" placeholder="Username" id="username" required pattern="[A-Za-z0-9]{1,20}">
        <label for="password">
            <i class="fas fa-lock"></i>
        </label>
        <input type="password" name="password" placeholder="Password" id="password" required pattern="[A-Za-z0-9]{1,20}">
        <label for="password-repeat">
            <i class="fas fa-lock"></i>
        </label>
        <input type="password" name="passwordRepeat" placeholder="Repeat Password" id="password-repeat" required pattern="[A-Za-z0-9]{1,20}">
        <label for="username">
            <i class="fas fa-user"></i>
        </label>
        <input type="text" name="ZIP" placeholder="ZIP Code" required pattern="[A-Za-z0-9]{1,20}">
        <label for="password">
            <i class="fas fa-lock"></i>
        </label>
        <input type="text" name="adress" placeholder="Street and housenumber" required pattern="[A-Za-z0-9]{1,20}">
        <label for="password-repeat">
            <i class="fas fa-lock"></i>
        </label>
        <input type="text" name="city" placeholder="City" required pattern="[A-Za-z0-9]{1,20}">
        <label for="username">
            <i class="fas fa-user"></i>
        </label>
        <input type="date" name="birthday" placeholder="birthday" required>
        <label for="password">
            <i class="fas fa-lock"></i>
        </label>
        <input type="text" name="firstname" placeholder="firstname" required pattern="[A-Za-z0-9]{1,20}">
        <label for="password-repeat">
            <i class="fas fa-lock"></i>
        </label>
        <input type="text" name="lastname" placeholder="lastname" required pattern="[A-Za-z0-9]{1,20}">
        <label for="password-repeat">
            <i class="fas fa-lock"></i>
        </label>
        <input type="email" name="email" placeholder="email" required>
        
        <p style="color: red;"><?= $_SESSION['registrationError'] // use session instead to rewrite url ?></p> 
        <input type="submit" name="Registrate" value="Registration">
    </form>
</div>
</body>
</html>
