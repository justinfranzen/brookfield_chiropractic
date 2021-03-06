<title>Brookfield Chiropractor, New Berlin, Wauwatosa, WI</title>

  <meta name="description" content="">
  <meta name="keywords" content="">

<?php
include 'includes/header.php';
?>

<body>
    
<h1 id="main-header">Dr. Matt Christiansen</h1>
    
    <div id="secondary-content">
        
        <h3 class="subheader">Striving to find the best treatment plan for you</h3>
        
        <div class="row">
            
            <div class="col-lg-8 col-md-8 col-sm-12">
        
                <p>Dr. Matt D. Christiansen received his Bachelor of Science degree from the University of Wisconsin – Whitewater and received his Doctorate of Chiropractic from Northwestern College of Chiropractic in 2002.</p>
                
                <p>Brookfield chiropractor, Dr. Matt Christiansen has a family practice, with patients ranging from newborn children to seniors. His post graduate education includes extensive training in extremity and spinal injuries for acute and chronic conditions, nutrition, sports rehabilitation, automobile and work injuries. He works in cooperation with each of your healthcare providers to find the best treatment plan for you.</p>
                
                   <h3 class="subheader">Chiropractic Techniques</h3>
        
                    <p>Dr. Matt Christiansen utilizes the following techniques:</p>

                    <ul>
                        <li>Motion Palpation</li>
                        <li>Diversified</li>
                        <li>Cox Flexion Distraction</li>
                    </ul>
                
            </div>
            
            <div class="col-lg-4 col-md-4 col-sm-12">
                
                <img src="images/dr-matt-christiansen.jpg" alt="Dr. Matt Christiansen" class="chiropractor" />
                
            </div>
            
        </div>
        
        <p>He holds certification from the Motion Palpation Institute, is a member of the Wisconsin Chiropractic Association, American Chiropractic Association, Waukesha Chamber of Commerce and Brookfield Chamber of Commerce.  He also has two years experience working as the Chiropractor for the Milwaukee Bucks Basketball Team.</p>
        
        <p>Dr. Christiansen resides in Summit, WI with his wife Samantha and their children. He enjoys riding his motorcycle, and he has a purple belt in Brazilian Jiujitsu – a martial art similar to grappling.</p>
        
        <p id="contact"><a href="contact-us.php">Contact</a> Brookfield Chiropractic today!</p>
        
        <div class="divider2"></div>
        
        <h3 class="educating subheader">Educating the residents of Brookfield, New Berlin, Wauwatosa on how to be healthy.</h3>
        
    </div>
    
     <div id="appointment">
    
        <h1 id="schedule">Schedule An Adjustment</h1>
    
        <a href="https://www.mychirotouch.com/SelfScheduler/index.aspx?clientid=BC0078" target="_blank"><div class="book-now">
        
            <span>BOOK NOW</span>
        
        </div></a>
    
    </div>


    <div id="additional-info">
        
        <div class="row">
            
            <div class="col-lg-6 col-md-6 col-sm-12 accordion">
               
                 <?php
                    include 'includes/accordion.html';
                ?>

                   <script>
                        var acc = document.getElementsByClassName("accordion");
                        var i;

                        for (i = 0; i < acc.length; i++) {
                          acc[i].onclick = function() {
                            this.classList.toggle("active");
                            var panel = this.nextElementSibling;
                            if (panel.style.maxHeight){
                              panel.style.maxHeight = null;
                            } else {
                              panel.style.maxHeight = panel.scrollHeight + "px";
                            } 
                          }
                        }
                    </script>

                
            </div>
            
            
            <div class="col-lg-6 col-md-6 col-sm-12">
                
                <table>
                    <h4>Office Hours</h4>
                  <tr>
                    <th>Day</th>
                    <th>Morning</th> 
                    <th>Afternoon</th>
                  </tr>
                  <tr class="lightgray">
                    <td>M</td>
                    <td>-------</td>
                    <td>1:30 - 5:30</td>
                  </tr>
                  <tr>
                    <td>T</td>
                    <td>7:30 - 12:00 </td>
                    <td>-------</td>
                  </tr>
                  <tr class="lightgray">
                    <td>W</td>
                    <td>8:00 - 12:00 </td>
                    <td>2:00 - 6:00 </td>
                  </tr>
                    <tr>
                    <td>T</td>
                    <td>-------</td>
                    <td>1:30 - 5:30 </td>
                  </tr>
                    <tr class="lightgray">
                    <td>F</td>
                    <td>8:00 - 12:00</td>
                    <td>-------</td>
                  </tr>
                </table>
                
                <a href="tel:262-754-5500" class="table-phonenumber"><h4>(262) 754-5500</h4></a>
                
                 <img src="images/wi_milwaukee_chiropractors_2018.png" alt="Best Chiropractors in Milwaukee" id="expertise" />
                
            </div>
        
        </div>
        
    </div>



</body>

<?php
include 'includes/footer.php';
?>