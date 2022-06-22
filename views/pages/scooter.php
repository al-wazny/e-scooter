
<?php 
include('../../app/controllers/Pages.php'); ?>
<html>


<head>
     <link rel="stylesheet" href="../../assets/css/scooter1.css?v=<?php echo time(); ?>">
</head>
<body>
<header>
    <?php
    include('../pagelets/header.php');
    ?>
 </header>
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
                <div class="price">
                    <b><span><?= $data->price?></span> Pro Tag<b><br>
                </div>
                <div class="scooterbutton 1">
                  <a href="miete.php"><button type=" button">Jetzt Mieten</button></a>
                </div>
            </div>
    </div>
<div class="scooterinformation">
    <div class="scooterInformnationText">
        <h2>Information</h2>
        <div class="scooterinformation1">
            <b>AKKUTYP</b><br>
            <label for="AKKUTYP">551 Wh</label><br><br>
            <b>RADGRÖSSE</b><br>
            <label for="RADGRÖSSE">10 Zoll</label><br><br>
            <b>MAXIMALE LEISTUNG</b><br>
            <label for="MAXIMALE LEISTUNG"><?= $data->maxOutput ?> Watt</label><br><br>
            <b>GEWICHT</b><br>
            <label for="GEWICHT"><?= $data->scooterWeight ?> kg</label><br><br>
            <b>MAX. GESCHWINDIGKEIT</b><br>
            <label for="MAX. GESCHWINDIGKEIT"><?= $data->maxSpeed ?> km/h</label><br><br>
        </div>
    </div>
</div>
</body>
</html>