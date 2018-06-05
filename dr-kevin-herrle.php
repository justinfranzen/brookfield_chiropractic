<title>Brookfield Chiropractor, New Berlin, Wauwatosa, WI</title>

  <meta name="description" content="">
  <meta name="keywords" content="">

<?php
include 'includes/header.php';
?>

<body>
    
<h1 id="main-header">Dr. Kevin Herrle</h1>
    
    <div id="secondary-content">
        
        <h3 class="subheader">Let me help you reach your health goals</h3>
        
        <div class="row">
            
            <div class="col-lg-8 col-md-8 col-sm-12">   
        
                <p>Dr. Kevin Herrle received his Bachelor of Science degree from the University of Wisconsin-La Crosse and his Doctorate of Chiropractic from Northwestern College of Chiropractic (Bloomington, MN) in 1999.</p>
                
                <h3 class="subheader">Chiropractic Techniques</h3>

                <p>Dr. Kevin Herrle has a family practice and enjoys treating patients of all ages. He utilizes the following techniques:</p>

                <ul>
                    <li>Diversified</li>
                    <li>Flexion-distraction</li>
                    <li>Arthrostim instrument adjusting</li>
                </ul>
                
            </div>
            
            <div class="col-lg-4 col-md-4 col-sm-12">
                
                <img src="images/dr-kevin-herrle.jpg" alt="Dr. Kevin Herrle" class="chiropractor" />
                
            </div>
            
        </div>
        
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