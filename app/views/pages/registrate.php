<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/53a65f1db8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/css/login.css">
    <title>Title</title>
</head>
<body>
<a class="redirect" href="../../index.php">Zurueck zur Startseite</a>
<div class="login">
    <h1>Registration</h1>
    <form action="../../../index.php/Authentication/registrationHandler" method="get">
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
        <p style="color: red;"><?= $data['error'] ?></p>
        <input type="submit" name="Login" value="Registration">
    </form>
</div>
</body>
</html>
