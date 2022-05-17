<?php //phpinfo(); ?>

<html>
    <head>
        <link rel="stylesheet" href="assets/css/styles.css" />
        <link rel="stylesheet" href="assets/css/scooters.css" />
    </head>
    <body>
         
           <bgcolor="#131b23"></bgcolor>
                <img class="CompanyLogo" src="Images/CompanyLogo.png" alt="Company Logo">
            <a>
            <a class="login" href=" " target="_top">Anmelden</a>
           
            <div class="bar">
                <div class="Categoriesbar">
                    <h3 class="Categories">Categories</h3>
                </div>
                   <div class="searchbar">
                       <form action="/action_page.php">
                           <input type="text" placeholder="Search f&uuml;r Scooter.." name="search" value="">
                          <!-- <svg height="24px" width="50px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                               <path fill="rgba(51, 51, 51, 1)" fill-rule="evenodd" clip-rule="evenodd" d="M6.29289 6.29289C6.68342 5.90237 7.31658 5.90237 7.70711 6.29289L12 10.5858L16.2929 6.29289C16.6834 5.90237 17.3166 5.90237 17.7071 6.29289C18.0976 6.68342 18.0976 7.31658 17.7071 7.70711L13.4142 12L17.7071 16.2929C18.0976 16.6834 18.0976 17.3166 17.7071 17.7071C17.3166 18.0976 16.6834 18.0976 16.2929 17.7071L12 13.4142L7.70711 17.7071C7.31658 18.0976 6.68342 18.0976 6.29289 17.7071C5.90237 17.3166 5.90237 16.6834 6.29289 16.2929L10.5858 12L6.29289 7.70711C5.90237 7.31658 5.90237 6.68342 6.29289 6.29289Z">
                               </path>
                            </svg>-->
                        </form>
                    </div>       
             </div>
          
        <table>
             
        </table>

        <table>
<script>let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
    showSlides((slideIndex += n));
}

// Thumbnail image controls
function currentSlide(n) {
    showSlides((slideIndex = n));
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("demo");
    let captionText = document.getElementById("caption");
    if (n > slides.length) {
        slideIndex = 1;
    }
    if (n < 1) {
        slideIndex = slides.length;
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
    captionText.innerHTML = dots[slideIndex - 1].alt;
}
</script>
<div class="slideshow-container">
 
  <div class="mySlides fade">
    
    <img src="assets/images/img1.jpg" style="width:100%;height:100%">
    
  </div>

  <div class="mySlides fade">
    
    <img src="assets/images/img2.jpg" style="width:100%;height:100%">
    
  </div>

  <div class="mySlides fade">
    
    <img src="assets/images/img3.jpg" style="width:100%;height:100%">
  
  </div>
    
  <div class="mySlides fade">

    <img src="assets/images/img4.jpg" style="width:100%;height:100%">
    
  </div>


 
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>


<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
</script>
  </div> </table>
             <div class="scooterproduct">
                 <table>
                    <tr>
                        <td>
                            <div class="singlescooter product-3">
                                <a href="scooter.html">
                                         <img width="300" height="300" src="https://res.cloudinary.com/grover/image/upload/e_trim/f_webp,q_auto/b_white,c_pad,h_300,w_300/v1650546624/c2ujbogyzmfgtlxpovzi.png" alt="Segway Ninebot F40D E-Scooter">    
                                        
                                        <h3 style="color: black; padding-right:50px ;">Segway Ninebot F30D E-Scooter</h3>
                                        <b style="color: red; font-style: italic; font-weight: 600;">0,22 €</b> <b style="color: rgb(0, 0, 0); padding-left: 4px;font-style: italic; font-size: small; "> pro stunde</b>
                                 </a>
                            </div>
                        </td>
                        <td>
                            <div class="singlescooter product-3">
                                <a href="">
                                         <img width="300" height="300" src="https://res.cloudinary.com/grover/image/upload/e_trim/f_webp,q_auto/b_white,c_pad,h_300,w_300/v1650546624/c2ujbogyzmfgtlxpovzi.png" alt="Segway Ninebot F40D E-Scooter">    
                                        <h3 style="color: black; padding-right:50px ;">Segway Ninebot F30D E-Scooter</h3>
                                        <b style="color: red; font-style: italic; font-weight: 600;">0,22 €</b> <b style="color: rgb(0, 0, 0); padding-left: 4px;font-style: italic; font-size: small; "> pro stunde</b>
                                 </a>
                            </div>
                        </td>
                        <td>
                            <div class="singlescooter product-3">
                                <a href="">
                                         <img width="300" height="300" src="https://res.cloudinary.com/grover/image/upload/e_trim/f_webp,q_auto/b_white,c_pad,h_300,w_300/v1650546624/c2ujbogyzmfgtlxpovzi.png" alt="Segway Ninebot F40D E-Scooter">    
                                        
                                        <h3 style="color: black; padding-right:50px ;">Segway Ninebot F30D E-Scooter</h3>
                                        <b style="color: red; font-style: italic; font-weight: 600;">0,22 €</b> <b style="color: rgb(0, 0, 0); padding-left: 4px;font-style: italic; font-size: small; "> pro stunde</b>
                                 </a>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
      </body>
</html>


