<title>Brookfield Chiropractor, New Berlin, Wauwatosa, WI</title>

  <meta name="description" content="">
  <meta name="keywords" content="">

<?php
include 'includes/header.php';
?>


<body>
    
  <h1 id="main-header">Carpal Tunnel Syndrome</h1>
    
    <div id="secondary-content">
        
        <div class="row">
            
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                
                 <p>Chiropractic techniques that work so well with the spine can be applied to other joints of the body. Virtually every joint is susceptible to fixations and malfunctions that impair function and range of motion. Trauma, micro-traumas, vibrations and repetitive motions are often culprits.</p>
                
                <h3 class="subheader">The Tunnel</h3>
                
                 <p>The carpal tunnel is a band of ligaments and small bones in your wrist. Painful symptoms can result when nerves are compressed by a collapse of this nerve “tunnel.”</p>
                
            </div>
            
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                
               <img src="images/carpal_tunnel.jpg" alt="Carpal Tunnel Syndrome" class="interior-img" />
                <figcaption>Your wrist problem may be a misalignment of one or more joints in your neck, shoulder, elbow or wrist.</figcaption>
            
            </div>
            
        </div>
        
        <h3 class="subheader">The Spine</h3>
                
                <p>Many are surprised to learn that the cause of their wrist problem may be due to functional changes to one or more joints of the neck, shoulder, elbow or wrist. Vertebral Subluxations in the upper spine may compromise the workings of any structure between it and the tip of your littlest finger. This is often called the double crush syndrome.</p>
        
        <div class="row">
            
             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                
                <img src="images/carpal_tunnel_at_home_test.jpg" alt="Carpal Tunnel Syndrome" class="interior-img-left" />
                <figcaption>Click here to try this at-home carpal tunnel test.</figcaption>
                
            </div>
        
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                
                <h3 class="subheader">Other Extremities</h3>

                <p>Shoulders, hip problems, knees, ankles and even jaw problems have been shown to respond to chiropractic care. Find out before resorting to more drastic treatments such as surgery!</p>
                
                 <h3 class="subheader">Chiropractic First</h3>

                <p>It just makes sense to take the more conservative approach first: chiropractic first, drugs second and surgery last! Schedule a no-obligation consultation and find out what safe and natural chiropractic may do for you.</p>
                
            </div>
            
        </div>
        
        <h3 class="subheader">Frequently Asked Questions:</h3>
        
        <ul id="questions">
            <button class="accordion question"><li>Can chiropractic repair bone spurs?</li></button>
                <div class="panel answer">
                    <p>Bone spurs and other arthritic change to joints throughout the body is a common response to long-standing malfunction. While no research exists, restoring proper joint function is hoped to at least slow this degenerative process.</p>
                </div>
            <button class="accordion question"><li>Does cracking your knuckles cause damange?</li></button>
                <div class="panel answer">
                    <p>Limited studies suggest that knuckle cracking does not damage the metacarpal joints of the hand. While there may be danger of overextending already loose knuckle joints, adding motion to these or other joints of the body is best left to an experienced chiropractor.</p>
                </div>
            <button class="accordion question"><li>Is it okay to wear a wrist brace?</li></button>
                <div class="panel answer">
                    <p>A brace is often prescribed to help protect the wrist and reduce mobility. While it may alleviate certain symptoms, it virtually ignores the malfunctioning joints causing the problem. The chiropractic approach is to help restore proper motion to affected joints and strengthen supporting muscles and soft tissues. While this may require some type of ongoing supportive care, many practice members are able to resume their activities without bracing.</p>
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