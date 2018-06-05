<title>Brookfield Chiropractor, New Berlin, Wauwatosa, WI</title>

  <meta name="description" content="">
  <meta name="keywords" content="">

<?php
include 'includes/header.php';
?>


<body>
    
<h1 id="main-header">Auto Accidents</h1>
    
    <div id="secondary-content">
        
        <div class="row">
            
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                
                 <p>It started with a routine trip to the store. Suddenly you hear a screeching of tires and the harsh sound of metal hitting metal. In the split second before you can brace yourself, you feel your car moving from some unseen force!</p>
                
                <h3 class="subheader">Hidden Damage</h3>
        
                 <p>It’s tempting to minimize your own injuries because your car has sustained little or no damage. Research shows that occupants can be injured considerably more than what you’d expect from a dented fender or a broken taillight..</p>
                
                <h3 class="subheader">The Medical Solution</h3>
        
                <p>If you visit the emergency room, you may be given a clean bill of health because you don’t have any broken bones. You might get a prescription to reduce the muscle spasms caused by structural changes in your neck or lower back.</p>
                
            </div>
            
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                
               <img src="images/auto_accident.jpg" alt="Auto Accieent" class="interior-img" />
                <figcaption>Don’t be misled by the minimal damage to your car. People react much differently than glass, plastic and metal!</figcaption>
            
            </div>
            
        </div>
        
        <p>After what you’ve been through, you’ll need a health professional that truly understands soft tissue injuries, spinal biomechanics and rehabilitation strategies. Call our practice.</p>
        
        <h3 class="subheader">We Can Help</h3>
                
                <p>Whether it was a little incident in the parking lot, or two cars attempting to occupy the same space in an intersection, you need people who know how to work with lawyers and insurance companies.</p>
                
                <p>If you’ve been in a car accident, give us a call. We’ve been through this many times. Not only can we usually offer drug-free care, we can help put this behind you once and for all.</p>
        
        <h3 class="subheader">Common Questions</h3>
        
        <ul id="questions">
            <button class="accordion question"><li>Why do I have pain in my arms and hands?</li></button>
                <div class="panel answer">
                    <p>Because the nerves to the arms and hands exit the spine through the injured area of the neck, numbness and tingling are common. Even lower back pain can result directly from the trauma, or as a reaction to the loss of proper spinal curves.</p>
                </div>
            <button class="accordion question"><li>Why did my headaches start more than a week after my accident?</li></button>
                <div class="panel answer">
                    <p>Whether you’ve been in an accident, stressed at work, or over-exerted yourself in the garden, your body is constantly adapting to the environment. When your capacity to adapt is exhausted, symptoms can appear. This can take days, weeks, months or years to occur.</p>
                </div>
            <button class="accordion question"><li>Will I ever be normal again?</li></button>
                <div class="panel answer">
                    <p>Many chiropractic practice members report improved spinal function and a reduction of their symptoms. Those who delay seeking appropriate care often discover that scar tissue and long-standing spinal instability increases the recovery period.</p>
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