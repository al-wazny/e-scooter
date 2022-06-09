
<?php 
include('../../app/controllers/Pages.php'); ?>
<html>


<head>
    <link rel="stylesheet" href="../../assets/css/styles.css">
    <link rel="stylesheet" href="../../assets/css/scooter1.css">
</head>
<body>
    <header>
        <a class="CompanyLogo" href="../index.html"> 
            <img class="CompanyLogo" src="../../assets/Images/CompanyLogo.png" alt="Company Logo">
        </a>
        <a class="login" href=" " target="_top">Anmelden</a>
       
        <div class="bar">
            <div class="Categoriesbar">
                <h3 class="Categories">Categories</h3>
            </div>   
         </div>
    </header>
    <div class="scooter">
        <div class="scootername">
            <br>
            <img src="<?= "data:image/jpeg;base64,".base64_encode($data->images) ?>" alt="">
        </div>
            <div class="information">
                <h4><?= $data->title ?></h4>
                <b><?= $data->price?><b><br>
                <b><?= $data->description?></b>
                <div class="scooterbutton 1">
                    <button type=" button">Jetzt Mieten</button>
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