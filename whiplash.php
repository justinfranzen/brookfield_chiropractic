<title>Brookfield Chiropractor, New Berlin, Wauwatosa, WI</title>

  <meta name="description" content="">
  <meta name="keywords" content="">

<?php
include 'includes/header.php';
?>


<body>
    
<h1 id="main-header">Whiplash</h1>
    
    <div id="secondary-content">
        
         <div class="row">
            
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
   
                <p>You’re waiting at a stoplight. The sound of screeching tires is followed by the harsh sound of metal hitting metal. Your car is suddenly being pushed forward!</p>
                
                <p>You’re being rear-ended!</p>
                
                <p>In a split second, your body is pushed against your seat. Your head, isolated by your neck, delays its reaction.</p>
                
                <p>Then, your body changes directions, moving forward to the limits of your seatbelt. Then your head is snapped backwards! You can’t stop it.</p>
                
            </div>
            
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                
               <img src="images/whiplash.jpg" alt="Whiplash" class="interior-img" />
                <figcaption>Even a minor fender bender can produce a whiplash injury.</figcaption>
            
            </div>
            
        </div>
        
        <p>Even a minor fender bender can produce a whiplash injury. It may take a day or two, or sometimes months for symptoms to appear. Now what?</p>
        
        <p>Get to our practice for an examination!</p>
        
        <p>Specific chiropractic spinal adjustments, because they can help restore proper motion and position of individual spinal bones, can help promote proper healing.</p>
        
        <p>The longer you wait the more unseen damage there is and the longer it seems to take to recover.</p>
            
        <h3 class="subheader">Frequently Asked Questions:</h3>
        
        <ul id="questions">
            <button class="accordion question"><li>Why do I have pain in my arms and hands?</li></button>
                <div class="panel answer">
                    <p>Because the nerves to the arms and hands exit the spine through the injured area of the neck, numbness and tingling are common. Even lower back pain can result directly from the trauma, or as a reaction to the loss of proper spinal curves.</p>
                </div>
            <button class="accordion question"><li>Why did my headaches start more than a week after my accident?</li></button>
                <div class="panel answer">
                    <p>Whether you’ve been in an accident, stressed at work, or over-exerted yourself in the garden, your body is constantly adapting to the environment. When your capacity to adapt is exhausted, symptoms can appear. This can take days, weeks, months or years to occur.</p>
                </div>
            <button class="accordion question"><li>Why do minor collisions cause so much trauma to the spine?</li></button>
                <div class="panel answer">
                    <p>Without getting into the laws of physics, the simple explanation is that in a more forceful automobile accident, the car itself absorbs much of the energy. In the more common parking lot “fender benders”, the energy is more directly transferred to the driver and passengers.</p>
                </div>
           <button class="accordion question"><li>Can I prevent a whiplash injury?</li></button>
                <div class="panel answer">
                    <p>Since car accidents are the major cause of whiplash injuries, defensive driving skills can help. Be sure your taillights and turn signals are properly working. Allow enough stopping distance in front of you. When you slow down or stop, always check your rear view mirror to see if the driver behind you is paying attention.</p>
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