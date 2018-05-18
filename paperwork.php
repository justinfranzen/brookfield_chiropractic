<title>Brookfield Chiropractor, New Berlin, Wauwatosa, WI</title>

  <meta name="description" content="">
  <meta name="keywords" content="">

<?php
include 'includes/header.php';
?>

<body>
    
    <div id="secondary-content">
    
        <h1 id="main-header">Online Paperwork</h1>
        
        <p>We offer our paperwork on line so you can complete it in the convenience of your own home. Here are the essential forms we use and why we need them.</p>
        
        <h3 class="subheader">Chiropractic Patient History Form</h3>
        
        <p>This lets us know what’s happened in your past, but more importantly, where do you want to be with your health into the future?</p>
        
        <a href="" class="link">Download &amp; Print Form</a>
        
        <div class="divider" class="link"></div>
        
        <h3 class="subheader">Children’s Patient History</h3>
        
        <p>Same as above, but for kids 10 and under. </p>
        
        <a href="" class="link">Download &amp; Print Form</a>
        
        <div class="divider" class="link"></div>
        
        <h3 class="subheader">Work Injury</h3>
        
        <p>If your health issue is the effect of an injury at work, this information will help us help you.</p>
        
        <a href="" class="link">Download &amp; Print Form</a>
        
        <div class="divider" class="link"></div>
        
        <h3 class="subheader">Auto Accident</h3>
        
        <p>If your health issue is the effect of an auto accident injury, we need some additional information.</p>
        
        <a href="" class="link">Download &amp; Print Form</a>
        
        <div class="divider" class="link"></div>
        
        <h3 class="subheader">Nutrition or Weightloss Consultation Form</h3>
        
        <a href="" class="link">Download &amp; Print Form</a>
        
        <div class="divider" class="link"></div>
        
        <h3 class="subheader">Notice of Privacy Practices</h3>
        
        <a href="" class="link">Download &amp; Print Form</a>
        
        <p class="staff">Our knowledgeable staff can field most questions over the telephone. <a href="contact-us.php">Contact</a> Brookfield Chiropractic today.</p>
        
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