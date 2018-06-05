<title>Brookfield Chiropractor, New Berlin, Wauwatosa, WI</title>

  <meta name="description" content="">
  <meta name="keywords" content="">

<?php
include 'includes/header.php';
?>


<body>
    
<h1 id="main-header">Slipped Disc</h1>
    
    <div id="secondary-content">
        
        <p>A disc can’t slip. But it can wedge, bulge, protrude and herniate. Chiropractic care may help.</p>
        
        <h3 class="subheader">Space for Nerves</h3>
        
         <div class="row">
            
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">

                <p>The disc is a special cartilage between the bones of your spinal column. It attaches to the vertebra above and below it. This creates the separation between spinal bones so pairs of nerves can exit the spine.</p>
                
                <h3 class="subheader">Turning and Bending</h3>
                
                <p>Each spinal disc has a jelly-like “ball bearing” core that is contained by bands of fibrous tissue. Healthy discs give you flexibility for normal turning and bending. Improper lifting, slips, falls and car accidents can cause the core to shift:</p>
                
                <ul id="no-bullets">
                    <li><strong>Herniation</strong> - disc wedging narrows nerve openings. Obvious symptoms may not be present.</li>
                    <br>
                    <li><strong>Protrusion</strong> – like a blister, the disc bulges where it is the weakest, causing nerve pressure.</li>
                    <br>
                    <li><strong>Prolapse</strong> – with the cushioning and separating compromised by rupture, movement is painful.</li>
                </ul>
                
            </div>
            
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                
               <img src="images/toothpaste-leak.jpg" alt="Toothpaste Leak" class="interior-img" />
                <figcaption>The most serious disc problem is a prolapsed disc in which the soft center ruptures and leaks.</figcaption>
            
            </div>
            
        </div>
        
        <h3 class="subheader">Chiropractic First</h3>
        
        <p>Chiropractic has been a natural solution helping people with a variety of disc problems.</p>
        
        <h3 class="subheader">Frequently Asked Questions:</h3>
        
        <ul id="questions">
            <button class="accordion question"><li>How does chiropractic help disc problems?</li></button>
                <div class="panel answer">
                    <p>The purpose of chiropractic care is to locate and correct areas of the spine interfering with the proper nervous system control of your body. Because the intervertebral discs are so close to the spinal cord and nerve roots, disc involvement is quite common in chiropractic cases. Chiropractic adjustments help restore proper motion and position of malfunctioning spinal bones, reducing nervous system involvement. If caught before permanent damage, disc tissue often returns to a more normal size and shape by restoring proper motion and position of affected spinal joints.</p>
                </div>
            <button class="accordion question"><li>Aren't disc problems simply the normal aging process?</li></button>
                <div class="panel answer">
                    <p>No. However, many disc problems are the result of years of neglect. Many spinal problems are nonsymptomatic until the advanced stages of degeneration. There are many cases of elderly patients who have maintained their spine throughout their lives who enjoy excellent spinal health and function.</p>
                </div>
            <button class="accordion question"><li>I didn't do anything so how can a disc be involved?</li></button>
                <div class="panel answer">
                    <p>This is a common refrain. Because our bodies are unusually adaptive, we can often accommodate a variety of stresses for years. Finally, like the “straw that broke the camel’s back,” we turn or bend funny and suddenly our spine succumbs to the accumulation of stress.</p>
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