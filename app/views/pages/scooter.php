<html>
<?php //var_dump($data) ?>

    <head>
        <link rel="stylesheet" href="../assets/css/styles.css">
        <link rel="stylesheet" href="../assets/css/scooters.css">
        <link rel="stylesheet" href="../assets/css/scooter1.css">
    </head>
    <body>
        <header>
            <?php include('app/views/pagelets/header.php'); ?>
        </header>
        <table border="1">
            <tr>
                <div class="scooter">
                    <td>
                        <div class="scootername">
                            <h2><?= $data->title; ?></h2>
                        </div>
                        <div class="slide">
                            <img src="<?= "data:image/jpeg;base64,".base64_encode($data->images) ?>" alt="scooter image">
                        </div>
                    </td>
                    <td>
                        <div class="information">
                                <h4><?= $data->price; ?>€ pro stunde</h4>
                            <p>lieferbar - in 1-2 Werktagen bei dir</p><br>
                        </div>
                        <div class="duration">
                            <input type="text" name="startdate" id="startdate" placeholder="Startdatum">    <br>             
                            <input type="text" name="enddate" id="endtdate" placeholder="Enddatum">                 
                        </div>
                    </td>
                </div>
            </tr>
        </table>
    </body>
</html>