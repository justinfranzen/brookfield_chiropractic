<title>Brookfield Chiropractor, New Berlin, Wauwatosa, WI</title>

  <meta name="description" content="">
  <meta name="keywords" content="">

<?php
include 'includes/header.php';
?>

<body>
    
<h1 id="main-header">General Spinal Health Test</h1>
    
    <div id="secondary-content">
        
                <p>Many spinal problems produce uneven weight distribution. Here’s a simple test you can conduct at home with two bathroom scales to reveal this common sign of spinal imbalance:</p>
                
                <h3 class="subheader">Click on each of these 3 simple steps and then click “Assessment”</h3>
        
        <br>
                
                <div class="row">
                
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    
                        <img src="images/general-spinal-test1.jpg" alt="Scale Spinal Test" class="test-img" onclick="stepOne()"/>
                        <figcaption class="step" onclick="stepOne()">Step 1</figcaption>
                    
                    </div>
                    
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    
                        <img src="images/general-spinal-test2.jpg" alt="Spinal Test 1" class="test-img" onclick="stepTwo()"/>
                        <figcaption class="step" onclick="stepTwo()">Step 2</figcaption>
                        
                    </div>
                    
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    
                        <img src="images/general-spinal-test3.jpg" alt="Spinal Test 2" class="test-img" onclick="stepThree()">
                        <figcaption class="step" onclick="stepThree()">Step 3</figcaption>
                        
                    </div>
                    
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    
                        <img src="images/assessment_document.jpg" alt="Spinal Test Assessment" class="test-img" onclick="stepFour()"/>
                        <figcaption class="step" onclick="stepFour()">Step 4</figcaption>
                        
                    </div>
        
                </div>
        
        <div id="step1">
            
            <h3 class="subheader">Step 1</h3>
            
            <br>
        
            <img src="images/general-spinal-test_1.jpg" id="scale" alt="Scale Spinal Test" />
            
            <br>
            
            <p>This test requires two bathroom scales. Make sure both weight-bearing surfaces are level.</p>
        
        </div>
        
        <div id="step2">
            
            <h3 class="subheader">Step 2</h3>
            
            <br>
        
            <img src="images/general-spinal-test2-lg.jpg" class="scale" alt="Scale Spinal Test" />
            
            <br>
            
            <p> With eyes closed, have the test subject tilt their head up and down, and then left and right, settling to a comfortable, neutral position. Record the scale readings for each leg</p>
        
        </div>
        
        <div id="step3">
            
            <h3 class="subheader">Step 3</h3>
            
            <br>
        
            <img src="images/general-spinal-test3-lg.jpg" class="scale" alt="Scale Spinal Test" />
            
            <br>
            
            <p>To eliminate the variance between the scales, reverse their positions and repeat the test.</p>
        
        </div>
        
        <div id="step4">
        
            <h3 class="subheader">Assessment</h3>
            
            <br>
            
            <ol>
                <li>Average the findings of the left leg by adding both left leg readings and dividing by two.</li>
                <li>Average the results for the right leg by adding both readings and dividing by two.</li>
                <li>A difference greater than 5 lb./2 kg. between both legs is significant. Contact Brookfield Chiropractic and make an appointment today.</li>
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