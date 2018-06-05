<title>Brookfield Chiropractor, New Berlin, Wauwatosa, WI</title>

  <meta name="description" content="">
  <meta name="keywords" content="">

<?php
include 'includes/header.php';
?>


<body>
    
<h1 id="main-header">Pregnancy</h1>
    
    <div id="secondary-content">
        
        <p>At first glance, most people don’t see the connection between chiropractic and pregnancy. However, there are four stages in which having an optimally working nervous system can help both mother and child.</p>
        
        <h3 class="subheader">Pre-Conception</h3>
        
         <div class="row">
            
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">

                <p>Chiropractic care prepares the body to be as strong, supple and balanced as possible to carry the pregnancy.</p>
                
                <h3 class="subheader">Pregnancy</h3>
                
                <p>Regular chiropractic care during pregnancy appeals to mothers who seek a natural approach to better health.</p>
        
                <h3 class="subheader">Labor and Birth</h3>
                
                <p>Many rely on chiropractic care to help assure optimum biomechanics of the hips and spine in the hopes of reducing the need for interventions during the birth process.</p>
                
            </div>
            
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                
               <img src="images/pregnancy.jpg" alt="Pregnancy" class="interior-img" />
                <figcaption>It’s not all in your head! If there’s evidence of nerve compromise to your reproductive organs, chiropractic care may help.</figcaption>
            
            </div>
            
        </div>
        
        <h3 class="subheader">After Birth</h3>
        
        <p>Even natural births can stress a baby’s spine. Breastfeeding problems can arise if the baby has a subluxation and is unable to comfortably turn its head to one side.</p>
        
        <p>Relax. We use special approaches to make our adjustments safe and comfortable for you and your child.</p>
    
        <h3 class="subheader">Frequently Asked Questions:</h3>    
        
        <ul id="questions">
            <button class="accordion question"><li>Will adjustments hurt my baby?</li></button>
                <div class="panel answer">
                    <p>Of course not. This is a common concern among parents who mistakenly think their child will receive adjustments like the ones they receive. Not only are adjusting techniques modified for each person’s size and unique spinal problem, an infant’s spine rarely has the long-standing muscle tightness seen in adults. This makes the energy needed to adjust a child’s spine considerably less than an adult’s does.</p>
                </div>
            <button class="accordion question"><li>Will adjustments make my spine too lose?</li></button>
                <div class="panel answer">
                    <p>No. Only the spinal joints that are “locked up” receive adjustments. This allows weakened muscles and ligaments to stabilize and heal. </p>
                </div>
            <button class="accordion question"><li>Pregnancy is natural. Why would I need chiropractic?</li></button>
                <div class="panel answer">
                    <p>Being born is a natural phenomenon. It’s what we’ve done to the birth process that has become increasingly suspect. In hospitals, birth is often treated like a disease. A newborn’s introduction to the world is often accompanied by a severe drop in temperature, loud noises and other insensitivities. The administration of drugs and anesthesia can have a profound effect on a newborn. </p>
                </div>
           <button class="accordion question"><li>Will my medical doctor approve?</li></button>
                <div class="panel answer">
                    <p>First, you don’t need anyone’s approval to seek a chiropractic opinion about health issues affecting your child! The judgment of another health care expert is always helpful in the decision-making process. Medical practitioners keeping up with the latest pediatric chiropractic research are starting to understand the value of this natural, drug-free approach to better health. </p>
                </div>
            <button class="accordion question"><li>What does my spine have to do with my baby?</li></button>
                <div class="panel answer">
                    <p>Pregnancy may be one of the best times to receive chiropractic care! While it’s always good to have an optimally functioning nervous system, it’s especially helpful now. Both mother and baby can benefit. Adjusting methods are adapted to a mother’s size, weight and condition. During this period of weight gain and hormonal changes, many mothers seek chiropractic care. Some report shorter and easier births.</p>
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