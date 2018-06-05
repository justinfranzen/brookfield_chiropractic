<title>Brookfield Chiropractor, New Berlin, Wauwatosa, WI</title>

  <meta name="description" content="">
  <meta name="keywords" content="">

<?php
include 'includes/header.php';
?>


<body>
    
<h1 id="main-header">Receive Care as Long as You Like</h1>
    
    <div id="secondary-content">
        
         <div class="row">
            
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">

                <p>We’ve all heard the joke, “How many chiropractors does it take to change a light bulb? Only one but it takes 100 visits.”</p>
                
                <p>The fact is, you don’t have to do anything you don’t want to. Many folks choose to continue their chiropractic care on some type of periodic basis for the rest of their lives.</p>
        
                <p>Others choose to see us from time to time for episodes of neck or back pain. It’s your choice. However, this concern is prompted by two common questions:</p>
                
            </div>
            
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                
               <img src="images/chiropractor_family_doctor.jpg" alt="Chiropractor Family Doctor" class="interior-img" />
                <figcaption>Many see their chiropractor as their family doctor.</figcaption>
            
            </div>
            
        </div>
        
        <p>Others choose to see us from time to time for episodes of neck or back pain. It’s your choice. However, this concern is prompted by two common questions:</p>
        
        <div class="row">
        
            <div class="col-lg-6 col-md-6 col-sm-12">
                
                <div class="question">
            
                    <h3 class="subheader">“Will I get addicted to chiropractic adjustments?”</h3>

                    <p>No. Many people feel a pleasant sense of ease and well-being after their chiropractic adjustments. Some feel as though their power has been “turned on.”</p>

                    <p>Others feel more whole or “connected.” (This is what “normal” feels like!) Once people experience this feeling they often choose to adopt some type of ongoing schedule of care so they continue to feel this way all the time. It’s not an addiction.</p>
                    
                </div>
            
            </div>
        
            <div class="col-lg-6 col-md-6 col-sm-12">
                
                <div class="question">
            
                    <h3 class="subheader">“Why are so many visits necessary?”</h3>

                    <p>By the time many people consult our practice, they’ve had their problem for some time. Retraining muscles and ligaments that support the spine takes time. Each visit builds on the ones before. Remember, you’re doing the healing, not the chiropractor!</p>
                    
                </div>
            
            </div>
            
        </div>
        
        <br>
        
        <p>How long you decide to benefit from chiropractic care is <em>always</em> up to you.</p>
        
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