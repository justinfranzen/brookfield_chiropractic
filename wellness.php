<title>Brookfield Chiropractor, New Berlin, Wauwatosa, WI</title>

  <meta name="description" content="">
  <meta name="keywords" content="">

<?php
include 'includes/header.php';
?>


<body>
    
<h1 id="main-header">Wellness</h1>
    
    <div id="secondary-content">
        
         <div class="row">
            
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
   
                <p>To visit the doctor when you’re feeling great is something new. Yet, a growing number of people who want to be and do their best are visiting chiropractors on a regular basis.</p>
                
                <h3 class="subheader">The First System</h3>
                
                <p>Remember staying home from school when we were sick and returning when we were feeling better? We learned to think of being sick as having obvious symptoms. But these days, many health problems are the result of lifestyle choices that don’t always have obvious symptoms until the effects are well advanced.</p>
                
                <h3 class="subheader">Healthy Response</h3>
                
                <p>The reverse is true as well. If you eat improperly prepared food and find yourself vomiting to expel it, you probably won’t feel good, but you’re having a healthy response.</p>

                <p>Turns out that true health is how well our bodies work, not how we feel.</p>
                
            </div>
            
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                
               <img src="images/girl-with-fever.jpg" alt="Girl with fever" class="interior-img" />
                <figcaption>Most of us learned to think that having symptoms means you’re sick. But what about pre-symptomatic health problems?</figcaption>
            
            </div>
            
        </div>
        
        <h3 class="subheader">Central Control</h3>
        
        <p>How well our body functions is based upon the integrity of our nervous system. That’s why so many seek our practice for wellness care. They want to make sure that every organ and tissue has an uninterrupted nerve supply. It just makes sense to detect little problems before they become serious concerns.</p>
        
       <div class="row">
           
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                
               <img src="images/wellness_key_to_health.jpg" alt="Key to health" class="interior-img-left" />
                <figcaption>The key to health begins with a properly working nervous system.</figcaption>
            
            </div>
            
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                
                <h3 class="subheader">The Key to Health</h3>
                
                <p>True health is optimum physical, mental and social well-being and not merely the absence of disease or infirmity.</p>
                
                <p>Drinking more water, eating nutritious foods, regular exercise and virtually every other healthy habit produces even bigger dividends when you have a properly working nervous system.</p>

                <p>Although everyone wants to feel good, your care should not be based on whether you have pain or other symptoms. Vertebral Subluxations may exist without obvious symptoms. Just like dental cavities, high blood pressure or heart disease.</p>
                
                <p>Give us call at <a href="tel:262-754-5500">(262) 754-5500</a> so we can help you take your first step towards true health.</p>
                
            </div>
            
        </div>
        
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