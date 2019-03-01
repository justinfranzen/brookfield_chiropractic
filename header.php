<!DOCTYPE html>
<html lang="us">
    
<meta charset="UTF-8">

    
<!------MOBILE RESPONSIVENESS----------->
    
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!----------CSS STYLES--------->
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    
    <!------------GOOGLE FONTS----------->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 
    
    <!-------Social Media Icons-------->
    <script src="https://use.fontawesome.com/dcc4d2ce3c.js"></script>


<!---JavaScript-->
    <script type="text/javascript" src="javascript/jquery-3.2.1.mis.js"></script>
     <script type="text/javascript" src="script.js"></script>
    
    <!--JQuery-->
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
      <!-- Bootstrap -->
    <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!---[if lt IE 9]---->
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <!----[endif]---->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
     <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="script.js"></script>


<!-------Social Media Icons-------->

    <script src="https://use.fontawesome.com/dcc4d2ce3c.js"></script>

     <script src="bootstrap-3.3.7-dist/css/bootstrap-social-gh-pages/bootstrap-social.css"></script>
    

<!----------FAVICON--------------->
    
<link rel="icon" type="image/png" href="./images/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="./images/favicon-16x16.png" sizes="16x16" />

    
    
<script>
    
    
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 1000);
}     
    
</script>
    
<script>

     function openNav() {
            document.getElementById("myNav").style.width = "100%";
        }

        /* Close */
        function closeNav() {
            document.getElementById("myNav").style.width = "0%";
        } 
    
    $(document).ready(function(){
        $("#about-overlay-dropdown").click(function(){
            $("#about-overlay-dropdown-sub-menu").slideToggle("medium");
        });
     });
    
     $(document).ready(function(){
        $("#doctors-overlay-dropdown").click(function(){
            $("#doctors-overlay-dropdown-sub-menu").slideToggle("medium");
        });
     });
    
     $(document).ready(function(){
        $("#expectations-overlay-dropdown").click(function(){
            $("#expectations-overlay-dropdown-sub-menu").slideToggle("medium");
        });
     });
    
</script>
    
    <script>
    
        function stepOne() {
            document.getElementById("step1").style.display = "block";
            document.getElementById("step2").style.display = "none";
            document.getElementById("step3").style.display = "none";
            document.getElementById("step4").style.display = "none";
        }
    
        function stepTwo() {
            document.getElementById("step1").style.display = "none";
            document.getElementById("step2").style.display = "block";
            document.getElementById("step3").style.display = "none";
            document.getElementById("step4").style.display = "none";
        }
        
        function stepThree() {
            document.getElementById("step1").style.display = "none";
            document.getElementById("step2").style.display = "none";
            document.getElementById("step3").style.display = "block";
            document.getElementById("step4").style.display = "none";
        }
        
        function stepFour() {
            document.getElementById("step1").style.display = "none";
            document.getElementById("step2").style.display = "none";
            document.getElementById("step3").style.display = "none";
            document.getElementById("step4").style.display = "block";
        }
    
    </script>
    
<style>
    
  .parallax-about {
    /* The image used */
    background-image: url("images/chiropractic2.png");

    /* Set a specific height */
    min-height: 670px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size: cover;
    /****background-color: #fcf5e8;****/
    padding: 70px 100px 30px 100px;
    text-align: center;
}    
    
</style>
    
    
<header>
    
    <div id="header-content">
    
        <div id="logo">

            <a href="index.php"><img src="images/logo.png" alt="Brookfield Chiropractic logo" id="logo" /></a>

        </div>

        <div id="header-number">
            
            <a href="tel:262-754-5500" id="header-phonenumber">262-754-5500</a>
            <br>
            <a href="https://www.mychirotouch.com/SelfScheduler/index.aspx?clientid=BC0078" target="_blank" id="header-appointment">BOOK APPOINTMENT</a>
        
        </div>
    
    </div>

    <div id="main-nav">
    
        <ul>
            <li><a href="index.php">Home</a></li>
            
            <div id="about-dropdown">
                <li><a href="about-us.php">About Us</a></li>
                    <ul id="about-sub-menu">
                        <!--<li><a href="newsletters.php">Newsletters</a></li>-->
                        <li><a href="blog.php">Blog</a></li>
                    </ul>
            </div>
            
            <div id="doctors-dropdown">
                <li><a href="meet-the-doctors.php">Meet The Doctors</a></li>
                    <ul id="doctors-sub-menu">
                        <li><a href="dr-matt-christiansen.php">Dr. Matt Christiansen</a></li>
                        <li><a href="dr-kevin-herrle.php">Dr. Kevin Herrle</a></li>
                        </ul>
            </div>
            
            <div id="expect-dropdown">
                <li><a href="what-to-expect.php">What to Expect</a></li>
                    <ul id="expect-sub-menu">
                        <li><a href="paperwork.php">Paperwork</a></li>
                        <li><a href="faq.php">FAQ</a></li>
                        </ul>
            </div>
            
            <li><a href="our-team.php">Our Team</a></li>
           <!----- <li><a href="events.php">Events</a></li>---->
            <li><a href="contact-us.php">Contact Us</a></li>
        </ul>
    
    </div>
    
<span class="menu" onclick="openNav()" id="mobile-nav"><img src="images/menu-button.png" alt="menu" id="menu-btn" /></span>
    
        
             <!-- The overlay -->
<div id="myNav" class="overlay">

  <!-- Button to close the overlay navigation -->
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

  <!-- Overlay content -->
  <div class="overlay-content">
      
      <a href="index.php" class="overlay-link main-link">Home</a>

            <div id="about-overlay-dropdown"><a href="#" class="overlay-link">Who We Are<img src="images/arrow.png" id="arrow" width="20" /></a>
              <ul id="about-overlay-dropdown-sub-menu">
                  <li><a href="about-us.php">About Us</a></li>
                 <!---<li><a href="newsletters.php">Newsletters</a></li>---->
                  <li><a href="blog.php">Blog</a></li>
              </ul>
            </div>    

        <div id="doctors-overlay-dropdown"><a href="#" class="overlay-link">Doctors<img src="images/arrow.png" id="arrow" width="20" /></a>
              <ul id="doctors-overlay-dropdown-sub-menu">
                  <li><a href="meet-the-doctors.php">Meet The Doctors</a></li>
                  <li><a href="dr-matt-christiansen.php">Dr. Matt Christiansen</a></li>
                  <li><a href="dr-kevin-herrle.php">Dr. Kevin Herrle</a></li>
              </ul>
        </div>

        <div id="expectations-overlay-dropdown"><a href="#" class="overlay-link">Expectations<img src="images/arrow.png" id="arrow" width="20" /></a>
              <ul id="expectations-overlay-dropdown-sub-menu">
                    <li><a href="what-to-expect.php">What To Expect</a></li>
                    <li><a href="paperwork.php">Paperwork</a></li>
                    <li><a href="faq.php">FAQ</a></li>
              </ul>
        </div>
      
      <a href="our-team.php" class="overlay-link main-link">Our Team</a>
      <!----<a href="#" class="overlay-link main-link">Events</a>------>
      <a href="contact-us.php" class="overlay-link main-link">Contact Us</a>
      
    </div>
    
 </div>

    
</header>


</html>