<?php include('../app/controllers/Pages.php'); ?>

<html>
    <head>
        <!---//TODO-->
        <link rel="stylesheet" href="../assets/css/index.css">
        <link rel="stylesheet" href="../assets/css/slideshow.css">
        <link rel="stylesheet" href="../assets/css/burger.css">
        <title> Automic Scooters</title>
    </head>
    <body>
        <div id="container">   
            <header>
            

            <a class="CompanyLogo" href="../../views/index.php"> 
                   <img class="CompanyLogo" src="../assets/Images/AtomLogo.png" alt="Company Logo">
                </a>
               <a class="register" href=" " target="_top" >Registrieren</a>
                <a class="login" href=" " target="_top">Einloggen</a> 
                <div class="bar">
                    <div class="Categoriesbar">
                        <button>
                            <div></div>
                            <div></div>
                            <div></div>
                        </button>
                    </div>
                </div>
             
            </header>
               
               <!--------------------------------------------------Slider js script----------------------------------------------> 
               
            <div class="slideshow-container">

                <div class="mySlides fade">
                    <img class="sliderimg" src="../assets/Images/img1.jpg" style="width:100%"; height="auto">
                </div>
                
                <div class="mySlides fade">
                    <img class="sliderimg" src="../assets/Images/img2.jpg" style="width:100%"; height="auto">
                </div>
                
                <div class="mySlides fade">
                    <img class="sliderimg" src="../assets/Images/img3.jpg" style="width:100%"; height="auto">
                </div>

                <div class="mySlides fade">
                    <img class="sliderimg" src="../assets/Images/img4.jpg" style="width:100%"; height="auto">
                </div>
                
                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>
                    
                <br>
                
                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span> 
                    <span class="dot" onclick="currentSlide(2)"></span> 
                    <span class="dot" onclick="currentSlide(3)"></span> 
                    <span class="dot" onclick="currentSlide(4)"></span> 
                </div>
            </div>
            
        </div>
              <!--------------------------------------------------Slider---------------------------------------------->     
        <div id="container2"> 
            
            <div class="beispielprodukte">
                <?php foreach($data as $scooter): ?>
                    <a href="">
                        
                    <div class="singlescooter product1">
                    <div class="scooterimg 1">
                                <img   src="https://res.cloudinary.com/grover/image/upload/e_trim/f_webp,q_auto/b_white,c_pad,h_300,w_300/v1650546624/c2ujbogyzmfgtlxpovzi.png" alt="Segway Ninebot F40D E-Scooter">    
                            </div>
                            <div class="singlescooterhead 1">
                                <h3 style="color: black;"><?= $scooter['title'] ?></h3><br>
                            </div>
                            <div class="singlescooterinfo 1">
                                Versicherung und Nummernschild inklusive,<br>
                                40km Reichweite, 17.1kg, Bluetooth app
                            </div>
                            <div class="scooterbutton 1">
                                <button type=" button">Jetzt Mieten</button>
                            </div>
                            <div class="singlescooterprice 1">
                                <b style="color: rgb(0, 0, 0); font-style: italic; font-size: small; "> &nbsp;pro stunde &nbsp;<b style="color: red; font-style: italic; font-weight: 600; ">0,22 € </b></b>
                            </div>
                            
                        </div>
                    </a>
                <?php endforeach; ?>
                
                
                
                
                <?php foreach($data as $scooter): ?>
                    <a href="">
                        <div class="singlescooter product1">
                            <div class="singlescooterhead 1">
                                <h3 style="color: black;"><?= $scooter['title'] ?></h3><br>
                            </div>
                            <div class="singlescooterinfo 1">
                                Versicherung und Nummernschild inklusive,<br>
                                40km Reichweite, 17.1kg, Bluetooth app
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
                    </a>
                <?php endforeach; ?>
                
                
                
                
                <?php foreach($data as $scooter): ?>
                    <a href="">
                        <div class="singlescooter product1">
                            <div class="singlescooterhead 1">
                                <h3 style="color: black;"><?= $scooter['title'] ?></h3><br>
                            </div>
                            <div class="singlescooterinfo 1">
                                Versicherung und Nummernschild inklusive,<br>
                                40km Reichweite, 17.1kg, Bluetooth app
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
                    </a>
                <?php endforeach; ?>
               
               
               
               
                <?php foreach($data as $scooter): ?>
                    <a href="">
                        <div class="singlescooter product1">
                            <div class="singlescooterhead 1">
                                <h3 style="color: black;"><?= $scooter['title'] ?></h3><br>
                            </div>
                            <div class="singlescooterinfo 1">
                                Versicherung und Nummernschild inklusive,<br>
                                40km Reichweite, 17.1kg, Bluetooth app
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
                    </a>
                <?php endforeach; ?>
            </div>
            






        </div>
        <div class="footer">
         <a class="agb" href="../views/agb.php" target="_bottom">AGB</a>
         <a class="impressum" href="../views/datenschutzerklaerung.php" target="_bottom">datenschutzerklaerung</a>
         <a class="impressum" href="../views/impressum.php" target="_bottom">Impressum</a>
        



        </div>
    </body>
    <script src="../assets/JS/slideshow.js"></script>
</html>