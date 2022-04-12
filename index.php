<?php session_start(); 
if (isset($_POST['logout'])) {
    $_SESSION['username'] = '';
    $_SESSION['userID'] = '';
}
?>

<head>
    <link rel="stylesheet" href="styles/styles.css" />
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
