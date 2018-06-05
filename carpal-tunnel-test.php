<title>Brookfield Chiropractor, New Berlin, Wauwatosa, WI</title>

  <meta name="description" content="">
  <meta name="keywords" content="">

<?php
include 'includes/header.php';
?>

<body>
    
<h1 id="main-header">Carpal Tunnel Test</h1>
    
    <div id="secondary-content">
        
                <p>The Carpal Tunnel pain that many experience in their hand and wrist can actually be a combination of nerve problems in the wrist, elbow and spinal nerves in the lower neck and shoulder.</p>
                
                <h3 class="subheader">Click on the images and complete these 2 simple tests:</h3>
        
        <br>
                
                <div class="row">
                
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    
                        <img src="images/carpal_tunnel_test_1_sm.jpg" alt="Carpal Tunnel Test" class="test-img" onclick="stepOne()"/>
                        <figcaption class="step" onclick="stepOne()">Step 1</figcaption>
                    
                    </div>
                    
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    
                        <img src="images/carpal_tunnel_test_2_sm.jpg" alt="Carpal Tunnel Test" class="test-img" onclick="stepTwo()"/>
                        <figcaption class="step" onclick="stepTwo()">Step 2</figcaption>
                        
                    </div>
        
                </div>
        
        <div id="step1">
            
            <h3 class="subheader">Test 1 – Phalen’s Maneuver</h3>
            
            <br>
        
            <img src="images/carpal_tunnel_test_1.jpg" id="carpal" alt="Carpal Tunnel Test" />
            
            <br>
            
            <p>The most helpful test for Carpal Tunnel Syndrome is Phalen’s Maneuver.</p>
            
            <p>Firmly hold the backs of your hands together with your fingers pointing down, while keeping your arms parallel to the floor. If within a minute, you experience numbness, tingling, pain or a combination, you likely have nerve involvement.</p>
            
            <p><a href="tel:262-754-5500">Call</a> Brookfield Chiropractic to schedule a more thorough examination.</p>
        
        </div>
        
        <div id="step2">
            
            <h3 class="subheader">Step 2</h3>
            
            <br>
        
            <img src="images/carpal_tunnel_test_2.jpg" class="scale" alt="Carpal Tunnel Test" />
            
            <br>
            
            <p>Another test is Tinel’s sign.</p>
            
            <p>Use your finger to repeatedly tap the volar carpal ligament, the ligament just under the skin in the center of your wrist. If the tapping elicits numbness, tingling or pain, then you may well have carpal tunnel syndrome. Often, chiropractic care can be very helpful in resolving this type of problem.</p>
            
            <p><a href="tel:262-754-5500">Call</a> Brookfield Chiropractic to schedule a more thorough examination.</p>
        
        </div>
        
        
        
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