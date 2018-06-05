<title>Brookfield Chiropractor, New Berlin, Wauwatosa, WI</title>

  <meta name="description" content="">
  <meta name="keywords" content="">

<?php
include 'includes/header.php';
?>


<body>
    
<h1 id="main-header">Chiropractic For Children</h1>
    
    <div id="secondary-content">
        
         <div class="row">
            
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">

                <p>Why would a child have a spine and nervous system problem? Traumatic births. Learning to walk. Slips. Falls. The list is endless. Yet, because children have such an adaptive capacity, these problems are often brushed off as “growing pains” or just a “phase they’re going through.”</p>
                    
                <p>“As the twig is bent, so grows the tree.”</p>
                
                <p>Many patients report that chiropractic care has been helpful for colic, ear infections, erratic sleeping habits, bedwetting, scoliosis, “growing pains” and many other common childhood health complaints.</p>
        
                <p>The concern that many parents have is that chiropractic adjustments will be too forceful. They mistakenly think that their child will receive adjustments like ones they receive. Not only are adjusting techniques modified for each person’s size and unique spinal problem, an infant’s spine rarely has the long-standing muscle tightness seen in adults. This makes a child’s chiropractic adjustments gentle.</p>
                
            </div>
            
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                
               <img src="images/children_and_chiropractic.jpg" alt="Children Chiropractic" class="interior-img" />
                <figcaption>Parents report that many childhood health problems resolve with chiropractic care.</figcaption>
            
            </div>
            
        </div>
        
        <p>Knowing exactly where to adjust, newborns and infants are adjusted with no more pressure than you’d use to test the ripeness of a tomato. Many parents have commented that they see almost instant improvements in the well-being of their child.</p>
        
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