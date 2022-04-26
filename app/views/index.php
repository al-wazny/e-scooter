<?php session_start();?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <nav>
        <a href="#">Impressum</a>
        <a href="#">Datenschutz</a>
        <a href="#">Irgendwas</a>
        <?= $_SESSION['username']; ?>
        <form action="index.php" method='post'>
            <input type="submit" value="logout" name='logout'>
        </form>
    </nav>
    <main>
        <div class="scooter-canvas">
            <img
                src="Images\scooter_1.png"
                alt="image of the Scooter to lend"
            />
            <div class="product-text">
                <div>
                    <div class="product-info">
                        <h2>Ein unglaublich cooler Scooter</h2>
                        <p>
                            Eine Beschreibung über den Scooter die ziemlich cool
                            ist, weil sie von Ali geschrieben wurde
                        </p>
                    </div>
                </div>
                <div>
                    <div class="product-price">
                        <h2>,-399€</h2>
                        <p>pro Monat</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <a href="registration.html">registrieren</a>
    <a href="login.html">anmelden</a>
</body>
</html>
