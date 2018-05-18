<title>Brookfield Chiropractor, New Berlin, Wauwatosa, WI</title>

  <meta name="description" content="">
  <meta name="keywords" content="">

<?php
include 'includes/header.php';
?>

<body>
    
    <div id="secondary-content">
    
        <h1 id="main-header">Brookfield Chiropractic Team</h1>
        
        <h3 class="subheader">Ashley</h3>
        
        <div class="row">
            
            <div class="col-lg-8 col-md-8 col-sm-12">
            
                <p>Hi my name is Ashley and I am the Office Manager and Insurance Coordinator at Brookfield Chiropractic.  My job is to make sure that all our patients are taken good care of and that we provide the best service possible.  I graduated from the University of Wisconsin-Milwaukee in 2011 with a major in Healthcare Administration and a minor in Business Administration.  I started my career here at Brookfield Chiropractic as an office/front desk assistant and fell in love with the Chiropractic profession from day one.  It’s remarkable what our bodies are capable of with the right healing tools.</p>
                
                <p>When I’m not at the office you can usually find me spending time with my wonderful husband, Tony and our amazing families and friends.  I enjoy outdoor activities like hiking, biking, kayaking and hunting.  I also love antiquing!</p>
                
                <p>My greatest passion is making our patient’s feel like a part of our family and seeing how what we do everyday changes theirs lives.  I look forward to meeting you and answer any questions you may have.</p>
                
            </div>
            
            <div class="col-lg-4 col-md-4 col-sm-12">
                
                <img src="images/ashley.jpg" alt="Ashley" class="team" />
                
            </div>
            
        </div>
        
        <h3 class="subheader">Emily</h3>
            
             <div class="row">
            
                <div class="col-lg-8 col-md-8 col-sm-12">
                    
                    <p>Hi my name is Emily and I am one of the Chiropractic Technicians here at Brookfield Chiropractic. I am here to assist patients with their therapies and help create a positive experience for everyone. I have been in the Chiropractic, field in various forms, since 2008. I love how Chiropractic care treats the whole body and makes such an improvement in peoples overall health.</p>
                    
                    <p>When I’m not at work, I’m taking care of my son and helping my husband with his business. I enjoy photography, especially for my husband’s rugby team, as well as cooking and baking.</p>
                    
                    <p>Of all the years I’ve worked in the field, I’ve found the doctors here at Brookfield Chiropractic are some of the best out there. They truly care about patients and their families and it’s an incredibly rewarding job watching the transformations our patients have. Let us know how we can help you and your loved ones!</p>
                    
                 </div>
                 
                 <div class="col-lg-4 col-md-4 col-sm-12">
                
                     <img src="images/Emily-Manske.jpg" alt="Emily" class="team" />
                
                </div>
                
            </div>
        
        <h3 class="subheader">Caitlin</h3>
            
              <div class="row">
            
                <div class="col-lg-8 col-md-8 col-sm-12">
                    
                    <p>Hey, I’m Caitlin, the new Radiographer and Chiropractic Tech here at Brookfield Chiropractic. So far, so good! My coworkers are absolutely incredible, the Doctors are great, and our patients keep me smiling. It’s making the transition from one job to another very easy, and extremely rewarding.</p>


                    <p>I first became interested in the medical field when I was diagnosed with Scoliosis, in 2004. Bouncing in and out of hospitals at just 13 years old was intimidating, but the experience is why I am here today. I graduated from Milwaukee Area Technical College with a degree in Radiography in 2016. With this degree I hope to be able to assist Dr. Herrle and Dr. Matt in the healing process of patients of all ages.</p>

                    <p>When I’m not in the office, you can most likely find me working at Kettle Moraine Golf Club. Yes, I golf, but not nearly as much as I would like! I enjoy spending time outdoors, hanging out with family and friends, cooking, and going to the gym. In-between all that I’m in the midst of the wedding planning process! My fiancé, Spencer, and I, will be getting married in June of 2018. It’s been a long time coming, so we’re excited, to say the least!</p>
                    
                </div>
                  
                <div class="col-lg-4 col-md-4 col-sm-12">
                
                     <img src="images/caitlin-Guiliani.jpg" alt="Caitlin" class="team" />
                
                </div>
                  
            </div>
                  
                  <p>Although I have been here for only a short while, I have already had the privilege of seeing patients’ transformations, first hand. Chiropractic work is truly incredible. It’s a completely drug-free approach to healing the body naturally, and it works! Dr. Herrle and Dr. Matt have a true skill, and they have proved that to me, and their patients, through their adjustments.</p>

                <p>We’d love to meet you and answer your questions. Our Brookfield chiropractic team is happy to help!</p>
            
    
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