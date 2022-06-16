<?php include('../app/controllers/Pages.php'); ?>

<?php
include('../app/controllers/Pages.php');
session_start();
//phpinfo(); ?>
<html>
    <head>
        <link rel="stylesheet" href="../assets/css/styles.css" />
        <link rel="stylesheet" href="../assets/css/scooters.css" />
        <title>Automic Scooter</title>
     </head>
    <body>
<header>
    <?php
    include('../views/pagelets/header.php');
    ?>
 </header>
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
    <img src="../assets/Images/img1.jpg" style="width:100%;height:100%">
  </div>
  <div class="mySlides fade">
    <img src="../assets/Images/img2.jpg" style="width:100%;height:100%">
  </div>
  <div class="mySlides fade">
    <img src="../assets/Images/img3.jpg" style="width:100%;height:100%">
  </div>
  <div class="mySlides fade">
    <img src="../assets/Images/img4.jpg" style="width:100%;height:100%">
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
    </div>
        <div class="scooterproduct">
            <table>
                <tr>
                    <?php foreach($data as $scooter): ?>
                        <td>
                            <div class="singlescooter product-3">
                                <a href="pages/scooter.php?id=<?= $scooter['id'] ?>">
                                    <img width="300" height="300" src="https://res.cloudinary.com/grover/image/upload/e_trim/f_webp,q_auto/b_white,c_pad,h_300,w_300/v1650546624/c2ujbogyzmfgtlxpovzi.png" alt="Segway Ninebot F40D E-Scooter">
                                        <h3 style="color: black; padding-right:50px ;"><?= $scooter['title'] ?></h3>
                                        <b style="color: red; font-style: italic; font-weight: 600;">0,22 €</b> <b style="color: rgb(0, 0, 0); padding-left: 4px;font-style: italic; font-size: small; "> pro stunde</b>
                                </a>
                            </div>
                        </td>
                    <?php endforeach; ?>
                </tr>
            </table>
        </div>
    </body>
</html>