<title>Brookfield Chiropractor, New Berlin, Wauwatosa, WI</title>

  <meta name="description" content="">
  <meta name="keywords" content="">

<?php
include 'includes/header.php';
?>


<body>
    
<h1 id="main-header">Chiropractic is Scientific</h1>
    
    <div id="secondary-content">
        
         <div class="row">
            
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">

                <p>How do you define “scientific?”</p>
                
                <p>If you define it as the systematic pursuit of knowledge involving the recognition of a problem, the collection of data through observation and experiment and then testing the resulting hypotheses, then today’s chiropractic is quite scientific. Because it’s based on the scientific fact that the nervous system controls and regulates virtually every cell, tissue, organ and system of the body.</p>
                
                <p>Don’t be misled by the “low-tech” nature of chiropractic adjustments! There are a growing number of studies that suggest the chiropractic approach to reducing nerve disturbance along the spine, may enhance the ability of the brain and nerve system to control and regulate the body.</p>
                
            </div>
            
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                
               <img src="images/nervous_system.jpg" alt="Nervous System" class="interior-img" />
                <figcaption>It’s a scientific fact that your nervous system controls everything..</figcaption>
            
            </div>
             
        </div>
        
       <p>These include published research documenting the results of chiropractic care on asthma, infantile colic, immune function, dysmenorrhea (menstrual cramps), improving vision and brain function, lower back pain, one’s overall health status and many others.</p>
        
        <p>The “scientific” argument is largely a red herring and the sign of a double standard. Medical economist David Eddy, MD, Ph.D., observes that only 15% of medical procedures have ever been scientifically verified, and the other 85% of common medical procedures have no “scientific basis!”</p>
        
        <p>Ultimately, the proof is in the pudding. Ask our delighted patients whether chiropractic is scientific.</p>
        
        <div class="divider"></div>
        
        <h3 class="subheader">References:</h3>
        
        <p class="reference">Gray’s Anatomy, Henry Gray F.R.S.Smith, R. Where is the wisdom? BMJ 1991; 303(Oct 5): 798-799.</p>
        
        <p class="reference"><em>Paul Shekelle</em>, MD, MPH, Head of a back study of RAND Corporation, Santa Monica, CA, 1992, Medicine, Monopolies and Malice, pp. 49, 199, 208.</p>
        
        <p class="reference">John Carey, <em>Medical Guesswork. Business Week</em>, May 29, 2006, 73-79.</p>
           
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