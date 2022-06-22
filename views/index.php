<?php 
session_start();
include('../app/controllers/Pages.php'); ?>

<html>
    <head>
        <!---//TODO-->
         <link rel="stylesheet" href="../assets/css/index.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="../assets/css/slideshow.css">
         <title> Automic Scooters</title>
    </head>
    <body>
    <header>
    <?php
    include('./pagelets/indexheader.php');
    ?>
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
                         
                            
                        </div>
                    </a>
                <?php endforeach; ?>
                
                
                
                
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
                         
                            
                        </div>
                    </a>
                <?php endforeach; ?>
                
                
                
                
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
                         
                            
                        </div>
                    </a>
                <?php endforeach; ?>
               
               
               
               
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
                         
                            
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
            
            
    </body>
    <script src="../assets/JS/slideshow.js"></script>
</html>