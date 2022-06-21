<?php include('../../app/controllers/Checkout.php'); ?>

<html>
    <head>
        <link rel="stylesheet" href="../../assets/css/confirm.css?v=<?php echo time(); ?>">
    </head>
    <body>
    <header>
    <?php
    include('../pagelets/header.php');
    ?>
 </header>
        <div class="confirm">
            <div class="thanksText">
            <center>
                <br>
                    <h2><i>Ihre miete wurde erfolgreich abgeschlossen !</i></h2>
                    <h2>Vielen Dank.</h2>
                </center>
                <div class="thanksinformation">
                    <big>
                        <h4> Deine Reservierung wird bearbeitet und du erh&auml;ltst in K&uuml;rze eine Best&auml;tigung Inklusive die Rechnung per E-Mail. <br><br>
                        Ihre Automic Team</h4>  
                    </big> 
                </div>
            </div>
            <hr>
            <div class="information">
                <table>
                    <tr>
                        <td colspan="3"><b>Date den Mieter</b></td>
                    </tr>
                    <tr>
                        <td>Vorname: <?= $user->firstname ?></td>
                        <td>Nachname: <?= $user->lastname ?></td>
                        <td>Addresse: <?= $user->street_housenumber ?></td>
                    </tr>
                    <tr>
                        <td>Postleitzahl: <?= $user->zip_code ?></td>
                        <td>Stadt: <?= $user->city ?></td>
                        <td>E-Mail: <?= $user->email ?></td>
                    </tr>
                    <tr>
                        <td colspan="3"><b>Produkt:</b></td>
                    </tr>
                    <tr>
                         <td colspan="3">Datum der Mietung: <?=date("m.d.y");?></td>
                    </tr>
                    <tr>
                        <td>Name: <?= $scooter->title ?></td>
                        <td colspan="2"><img height="150" src="<?= "data:image/jpeg;base64,".base64_encode($scooter->images) ?>" alt=""></td>
                    </tr>
                    <tr>
                        <td>Dauer: <?= $dateDiff ?></td>
                        <td>Preis pro Tag <?= $scooter->price ?></td>
                        <td>Summe: <?= $priceSum ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </body>
</html>