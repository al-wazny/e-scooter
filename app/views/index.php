<?php //phpinfo(); ?>

<html>
    <head>
        <link rel="stylesheet" href="assets/css/styles.css" />
        <link rel="stylesheet" href="assets/css/scooters.css" />
    </head>
    <body>
        <header>
            <?php include('app/views/pagelets/header.php') ?>
        </header>

        <table >
            <div class="neben">
                <h1>SORTIEREN NACH</h1>
            </div>
        </table>
        
        <div class="scooterproduct">
            <table>
                <tr>
                    <?php foreach($data as $scooter): ?>
                        <td>
                            <a href="pages/scooter?id=<?= $scooter['id'] ?>">
                                <div class="singlescooter product1">
                                    <div class="singlescooterhead 1">
                                        <h3 style="color: black;"><?= $scooter['title']; ?></h3><br>
                                    </div>
                                    <div class="singlescooterinfo 1">
                                        Versicherung und Nummernschild inklusive,<br>
                                        <?= $scooter['maxSpeed'] ?>km Reichweite, <?= $scooter['scooterWeight'] ?>kg, Bluetooth app
                                    </div>
                                    <div class="scooterbutton 1">
                                        <button type=" button">Jetzt Mieten</button>
                                    </div>
                                    <div class="singlescooterprice 1">
                                        <b style="color: rgb(0, 0, 0); font-style: italic; font-size: small; "> &nbsp;pro stunde &nbsp;<b style="color: red; font-style: italic; font-weight: 600; ">0,22 € </b></b>
                                    </div>
                                        <div class="scooterimg 1">
                                            <img   src="https://res.cloudinary.com/grover/image/upload/e_trim/f_webp,q_auto/b_white,c_pad,h_300,w_300/v1650546624/c2ujbogyzmfgtlxpovzi.png" alt="Segway Ninebot F40D E-Scooter">    
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </td>
                    <?php endforeach; ?>
                </tr>                   
            </table>
        </div>
    </body>
</html>
 