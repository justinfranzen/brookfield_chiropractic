<title>Brookfield Chiropractor, New Berlin, Wauwatosa, WI</title>

  <meta name="description" content="">
  <meta name="keywords" content="">

<?php
include 'includes/header.php';
?>

<body>
    
    <div id="secondary-content">
    
        <h1 id="main-header">Contracted Leg Length Test</h1>
        
                <p>Click on each image for a larger view and step-by-step directions.</p>
               
        <br>
                
                <div class="row">
                
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    
                        <img src="images/lumbar_test_1_sm.jpg" alt="Lumbar Test" class="spinal-test-img" onclick="stepOne()"/>
                        <figcaption class="step" onclick="stepOne()">Step 1</figcaption>
                    
                    </div>
                    
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    
                        <img src="images/lumbar_test_2_sm.jpg" alt="Lumbar Test 1" class="spinal-test-img" onclick="stepTwo()"/>
                        <figcaption class="step" onclick="stepTwo()">Step 2</figcaption>
                        
                    </div>
                    
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    
                        <img src="images/lumbar_test_3_sm.jpg" alt="Lumbar Test 2" class="spinal-test-img" onclick="stepThree()">
                        <figcaption class="step" onclick="stepThree()">Step 3</figcaption>
                        
                    </div>
                    
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    
                        <img src="images/assessment_document.jpg" alt="Lumbar Test Assessment" class="spinal-test-img" onclick="stepFour()"/>
                        <figcaption class="step" onclick="stepFour()">Step 4</figcaption>
                        
                    </div>
        
                </div>
        
        <div id="step1">
            
            <h3 class="subheader">Step 1</h3>
            
            <br>
        
            <img src="images/lumbar_test_1.jpg" class="lumbar" alt="Lumbar Test" />
            
            <br>
            
            <p>Have the test subject wear a pair of hard soled shoes and lie across a bed, face down, with arms relaxed at each side. (The head must remain straight down throughout the test.)</p>
        
        </div>
        
        <div id="step2">
            
            <h3 class="subheader">Step 2</h3>
            
            <br>
        
            <img src="images/lumbar_test_2.jpg" class="lumbar" alt="Lumbar Test" />
            
            <br>
            
            <p>Apply equal pressure with both thumbs to the arches of each shoe. Are both legs of equal length when the bottoms of the shoes are parallel?</p>
        
        </div>
        
        <div id="step3">
            
            <h3 class="subheader">Step 3</h3>
            
            <br>
        
            <img src="images/lumbar_test_3.jpg" class="lumbar" alt="Lumbar Test" />
            
            <br>
            
            <p>Bend both legs to a 90° angle so the bottoms of the shoes are parallel with the floor. Does one leg appear shorter?</p>
        
        </div>
        
        <div id="step4">
        
            <h3 class="subheader">Assessment</h3>
            
            <br>
            
            <p>A difference of greater than 1/4” in any of the positions is clinically significant. Uneven leg length is a common sign of spinal problems that often respond to chiropractic care. Find out if we can help. Call Brookfield Chiropractic now to arrange a more thorough examination!</p>
        
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