<?php include('../../app/controllers/Pages.php'); ?>

<html>
    <head>
        <!---//TODO-->
         <link rel="stylesheet" href="../../assets/css/scooters.css?v=<?php echo time(); ?>">
    </head>
    <body>
    <header>
    <?php
    include('../pagelets/header.php');
    ?>
 </header>
    <div class="scooter">
        <div class="neben">
            <form action="/action_page.php">
                <div class="sort_by">
                    <div class="choose">
                        <label>SORTIEREN NACH</label><br>
                    </div>
                    <input type="radio" id="top_product" name="price" value="top_product">
                    <label for="top_product">Preis aufsteigend</label><br>
                    <input type="radio" id="css" name="price" value="worst_product">
                    <label for="worst_product">Preis absteigend</label><br>
                </div>
                <div class="availability">
                    <div class="choose">
                        <label>VERFÜGBARKEIT</label><br>
                    </div>
                    <input type="checkbox" id="availability" name="availability" value="availability">
                    <label for="availability">Jetzt Verfügbar</label><br>
                </div>
                <div class="brands">
                    <div class="choose">
                        <label>Marken</label><br>
                    </div>
                    <input type="checkbox" id="Segway" name="Segway" value="Segway_Scooter">
                    <label for="Segway"> Segway</label><br>
                    <input type="checkbox" id="Xiaomi" name="Xiaomi " value="Xiaomi_Scooter">
                    <label for="Xiaomi ">Xiaomi</label><br>
                    <input type="checkbox" id="Grover" name="Grover" value="Grover_Scooter">
                    <label for="Grover">Grover</label><br><br>
                </div>
                <input type="submit" value="filter">
                        
            </form>
        </div>
    

        <div id="container2"> 
            
            <div class="produkt-grid">
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
</html>