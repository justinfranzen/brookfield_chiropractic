<title>Brookfield Chiropractor, New Berlin, Wauwatosa, WI</title>

  <meta name="description" content="">
  <meta name="keywords" content="">

<?php
include 'includes/header.php';
?>

<body>
    
<h1 id="main-header">Cervical Range of Motion Test</h1>
    
    <div id="secondary-content">
        
                <p>Many headaches, neck problems and shoulder pain result from restricted neck motion – something we help people with every day. Here’s a simple test you conduct at home to see if you’re a good candidate for chiropractic care:</p>
                
                <h3 class="subheader">Click on each of these 3 simple steps and then click “Assessment”</h3>
        
        <br>
                
                <div class="row">
                
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    
                        <img src="images/cervical_test_1_sm.jpg" alt="Cervical Test" class="test-img" onclick="stepOne()"/>
                        <figcaption class="step" onclick="stepOne()">Step 1</figcaption>
                    
                    </div>
                    
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    
                        <img src="images/cervical_test_2_sm.jpg" alt="Lumbar Test 1" class="test-img" onclick="stepTwo()"/>
                        <figcaption class="step" onclick="stepTwo()">Step 2</figcaption>
                        
                    </div>
                    
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    
                        <img src="images/cervical_test_3_sm.jpg" alt="Lumbar Test 2" class="test-img" onclick="stepThree()">
                        <figcaption class="step" onclick="stepThree()">Step 3</figcaption>
                        
                    </div>
                    
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    
                        <img src="images/assessment_document.jpg" alt="Lumbar Test Assessment" class="test-img" onclick="stepFour()"/>
                        <figcaption class="step" onclick="stepFour()">Step 4</figcaption>
                        
                    </div>
        
                </div>
        
        <div id="step1">
            
            <h3 class="subheader">Test 1 – Phalen’s Maneuver</h3>
            
            <br>
        
            <img src="images/cervical_test_1.jpg" class="cervical" alt="Cervical Test" />
            
            <br>
            
            <p>The most helpful test for Carpal Tunnel Syndrome is Phalen’s Maneuver.</p>
            
            <p>Firmly hold the backs of your hands together with your fingers pointing down, while keeping your arms parallel to the floor. If within a minute, you experience numbness, tingling, pain or a combination, you likely have nerve involvement.</p>
            
            <p> With the test subject comfortably seated and their eyes closed, have them tilt their head up and down several times, coming to a neutral resting position.</p>
        
        </div>
        
        <div id="step2">
            
            <h3 class="subheader">Step 2</h3>
            
            <br>
        
            <img src="images/cervical_test_2.jpg" class="cervical" alt="Cervical Test" />
            
            <br>
            
            <p> With their eyes still closed and without moving their shoulders, have them rotate their head fully to the left and hold for a few seconds.</p>
        
        </div>
        
        <div id="step3">
            
            <h3 class="subheader">Step 3</h3>
            
            <br>
        
            <img src="images/cervical_test_3.jpg" class="cervical" alt="Cervical Test" />
            
            <br>
            
            <p>With their eyes still closed and without moving their shoulders, have them rotate their head fully to the right and hold for a few seconds.</p>
        
        </div>
        
        <div id="step4">
        
            <h3 class="subheader">Assessment</h3>
            
            <br>
            
            <ol>
                <li>Was the subject able to rotate their head less in one direction?</li>
                <li>Was motion restricted or was pain associated with turning in either direction?</li>
                <li>Did the subject hear any “popping” or grinding sounds?</li>
            </ol>      
            
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