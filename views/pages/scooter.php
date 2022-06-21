
<?php 
include('../../app/controllers/Pages.php'); ?>
<html>


<head>
     <link rel="stylesheet" href="../../assets/css/scooter1.css?v=<?php echo time(); ?>">
     <link rel="stylesheet" href="../../assets/css/styles.css?v=<?php echo time(); ?>">
</head>
<body>
<header>
    <?php
    include('../pagelets/header.php');
    ?>
 </header>
 <form action="confirm.php">
     <div class="scooter">
         <div class="scootername">
             <br>
             <img src="<?= "data:image/jpeg;base64,".base64_encode($data->images) ?>" alt="">
            </div>
            <div class="information">
                <div class="title">
                    <h4><?= $data->title ?></h4>
                </div>
                <div class="description">
                    <span><?= $data->description?></span>
                </div>
                <div calss="duration">
                    <table>
                        <tr>
                            <td>Startdatum</td>
                            <td><input type="date" placeholder="Startdatum"></td>
                        </tr>
                        <tr>
                            <td>Enddatum</td>
                            <td><input type="date" placeholder="Enddatum"></td>
                        </tr>
                    </table>
                </div>
                <div class="price">
                    <b><span><?= $data->price?></span> Pro Tag<b><br>
                    </div>
                    <div class="scooterbutton 1">
                        <button type="submit">Jetzt Mieten</button>
                    </div>
                </div>
            </div>
        </form>
<div class="scooterinformation">
    <div class="scooterInformnationText">
        <h2>Information</h2>
        <div class="scooterinformation1">
            <b>AKKUTYP</b><br>
            <label for="AKKUTYP">551 Wh</label><br><br>
            <b>RADGRÖSSE</b><br>
            <label for="RADGRÖSSE">10 Zoll</label><br><br>
            <b>MAXIMALE LEISTUNG</b><br>
            <label for="MAXIMALE LEISTUNG">350 Watt</label><br><br>
            <b>GEWICHT</b><br>
            <label for="GEWICHT"><?= $data->title ?></label><br><br>
            <b>MAX. GESCHWINDIGKEIT</b><br>
            <label for="MAX. GESCHWINDIGKEIT"><?= $data->maxSpeed ?></label><br><br>
        </div>
    </div>
</div>
</body>
</html>