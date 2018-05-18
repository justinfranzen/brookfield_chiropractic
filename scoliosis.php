<title>Brookfield Chiropractor, New Berlin, Wauwatosa, WI</title>

  <meta name="description" content="">
  <meta name="keywords" content="">

<?php
include 'includes/header.php';
?>


<body>
    
    <div id="secondary-content">
    
        <h1 id="main-header">Scoliosis</h1>
        
         <div class="row">
            
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">

                <p>Scoliosis is an abnormal sideways curvature of the spine. It begins as a postural distortion and may become a permanent deformity. Allowed to advance, it may interfere with the lungs, heart and many other vital organs.</p>
                
                <h3 class="subheader">Three Causes</h3>
                
                <ol>
                    <li><strong>Congenital</strong> genetic predisposition</li>
                    <li><strong>Habitual</strong> behavioral routines</li>
                    <li><strong>Idiopathic</strong> unknown cause</li>
                </ol>
                
                <p>Regardless of cause, early detection can be helpful.</p>
                
            </div>
            
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                
               <img src="images/scoliosis.jpg" alt="Scoliosis" class="interior-img" />
                <figcaption>Scoliosis seems to mainly affect girls between the ages of 8 to 18.</figcaption>
            
            </div>
            
        </div>
        
        <h3 class="subheader">Obvious Clues</h3>
        
        <p>An alert parent may notice that a high shoulder or low hip make clothing fit poorly. Or uneven shoe wear offers a clue. Back and leg pains may develop but are often dismissed as “growing pains.”</p>
        
        <h3 class="subheader">Wait and See?</h3>
        
        <p>Allowed to run its course, scoliosis may often worsen. Severe cases may involve unsightly bracing or surgery that attaches steel rods, forcing the spine to straighten.</p>
        
         <h3 class="subheader">Natural Approach</h3>
        
         <div class="row">
             
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">

                <p>A schedule of specific chiropractic adjustments may help improve the function and structure of the spine. As muscles are retrained and strengthened, posture may improve.</p>

                <p>Bring your child in so we can discuss your concerns and explore the possibilities.</p>
            
            </div>
            
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                
                <a href="bilateral-scales-test.php"><img src="images/spinal_health_at_home_test.jpg" alt="At home spinal test" class="interior-img" /></a>
                    <figcaption>Click the image to take this simple at-home test that can reveal hidden spinal problems.</figcaption>
                
            </div>
            
        </div>
        
        <h3 class="lightblue">Frequently Asked Questions:</h3>
        
        <ul id="questions">
            <button class="accordion question"><li>Isn't a certain amount of sideways curve normal?</li></button>
                <div class="panel answer">
                    <p>Any type of sideways curvature is abnormal. From the back, the spine should appear straight. When scoliosis is present, there are usually two curves. A primary curve in one direction and a compensatory curve in the opposite direction.</p>
                </div>
            <button class="accordion question"><li>Isn't scoliosis caused by a lack of calcium?</li></button>
                <div class="panel answer">
                    <p>No. However, there are a growing number of people who believe uncorrected spinal damage from the birth process may be involved. Some theorize that “walkers” may prematurely interrupt the crawling stage so essential for proper spinal development.</p>
                </div>
            <button class="accordion question"><li>Do heavy back-packs cause scoliosis?</li></button>
                <div class="panel answer">
                    <p>Not necessarily, however this is a growing concern. Make sure your son or daughter use both shoulder straps on their back-packs so the weight is evenly distributed. Weigh their bag. Make sure it doesn’t exceed 10% -15% of their body weight.</p>
                </div>
        </ul>
        
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