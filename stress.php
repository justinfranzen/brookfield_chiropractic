<title>Brookfield Chiropractor, New Berlin, Wauwatosa, WI</title>

  <meta name="description" content="">
  <meta name="keywords" content="">

<?php
include 'includes/header.php';
?>


<body>
    
    <div id="secondary-content">
    
        <h1 id="main-header">Stress</h1>
        
        <p>Not all stress is bad. A 20-minute workout at the gym for a fit 25-year old is good stress. The same workout for your 75-year old grandmother would likely be bad stress!</p>
        
        <h3 class="subheader">Physical Stress</h3>
        
         <div class="row">
            
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">

                <p>Repetitive motions (painting the ceiling), postural distortions (falling asleep with your neck twisted) and <a href="whiplash.php" class="inner-link">whiplash</a> injuries from a car accident are physical stresses. So are slips and falls. Even being born!</p>
                
                <h3 class="subheader">Mental Stress</h3>
                
                <p>Ever faced an impossible deadline at work? Or grieved the loss of a loved one? Notice the posture of someone who is depressed. Frustration, or a sense of powerlessness at work are common forms of emotional stress.</p>

                
            </div>
            
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                
               <img src="images/stress.jpg" alt="Stress" class="interior-img" />
                <figcaption>Instead of fainting or going unconscious, think of a vertebral subluxation as your body’s attempt at managing stress.</figcaption>
            
            </div>
            
        </div>
        
        <h3 class="subheader">Chemical Stress</h3>
        
        <p>Today’s environment constantly assaults us with chemicals. Drugs, preservatives, tobacco, alcohol, pollen and a host of other substances can affect our nervous system and muscle tone.</p>
        
        <p>When your body reacts by “tripping a circuit breaker” and causing <a href="">vertebral subluxation</a>, chiropractic care may help.</p>
        
        <p>Stress can’t be eliminated, but regular chiropractic care may help you better accommodate and adapt to it. Give us a call at <a href="tel:262-754-5500">(262) 754-5500</a>.</p>
        
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
                s
            </div>
        
        </div>
        
    </div>
        
</body>

<?php
include 'includes/footer.php';
?>