
<html>
    <head>
        <!---//TODO-->
        <link rel="stylesheet" href="../../assets/css/index.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="../../assets/css/slideshow.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="../../assets/css/sidebar.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="../../assets/css/burger.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="../../assets/css/header.css?v=<?php echo time(); ?>">
        <title> Automic Scooters</title>
    </head>
    <body>
        <div id="container">   
            

            <a class="CompanyLogo" href="../index.php"> 
                   <img class="CompanyLogo" src="../../assets/Images/AtomLogo.png" alt="Company Logo">
                </a>
               <a class="register" href=" " target="_top" >Registrieren</a>
                <a class="login" href=" " target="_top">Einloggen</a> 
               
               
                <div id="mySidebar" class="sidebar">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">x</a>
                    <a href="#">Marken</a>
                    <a href="#">Services</a>
                    <a href="#">Clients</a>
                    <a href="#">Contact</a>
                </div>
                
                <div id="main">
                <div class="bar">
                    <div class="Categoriesbar">
                        <button onclick="openNav() ">
                            <div></div>
                            <div></div>
                            <div></div>
                        </button>
                    </div>
                </div>
               
               <script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "0px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
</div>
             
</body>
 </html>
