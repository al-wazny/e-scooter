<?php 
require('registrationHandler.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles/form.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>    
        <input type="text" placeholder="username" name="username">
        <input type="text" placeholder="password" name="password">
        <input type="text" placeholder="repeat password" name="passwordRepeat">
        <button type="submit">submit</button>
    </form>
</body>
</html>