<title>Brookfield Chiropractor, New Berlin, Wauwatosa, WI</title>

  <meta name="description" content="">
  <meta name="keywords" content="">

<?php
include 'includes/header.php';
?>


<body>
    
    <div id="secondary-content">
    
        <h1 id="main-header">Chiropractors Are Well Educated</h1>
        
         <div class="row">
            
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">

                <p>The fact is, educational requirements for today’s chiropractor are among the most stringent of any of the health care professions.</p>
                
                <p>Several decades ago the education that chiropractors received was purposely narrow. Without the interest in prescribing medicines or performing surgery, chiropractic education focused on anatomy, the philosophy of natural healing, the wisdom of the body and adjusting techniques.</p>
        
                <p>Today’s chiropractor receives a much broader education. In fact, it’s quite comparable to that received by medical practitioners.</p>
                
                <p>Before acceptance to a five-year chiropractic college, prospective chiropractors must complete a minimum of three years of undergraduate work with a heavy emphasis on the basic sciences.</p>
                
            </div>
            
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                
               <img src="images/education_chiropractor.jpg" alt="Chiropractic Education" class="interior-img" />
                <figcaption>Today’s chiropractic education has an emphasis on science.</figcaption>
            
            </div>
            
        </div>
        
        <p>This focus on science continues during the first two years of study, emphasizing classroom and laboratory work in anatomy, physiology, public health, microbiology, pathology and biochemistry. Later, the focus is on specialized subjects, including chiropractic philosophy and practice, along with chiropractic diagnosis and adjusting methods. Since chiropractors don’t prescribe drugs, instead of studying pharmacology and surgery, they receive an even deeper training in anatomy, physiology, rehabilitation, nutrition, diagnosis, X-ray and a variety of adjusting techniques that aren’t taught in any other health care field.</p>

        <p>Disparaging the educational achievements of today’s chiropractor is an outdated belief from another era.</p>
        
        <div class="divider"></div>
        
        <h3 class="subheader">References</h3>
        
        <p><a href="http://www.yourmedicaldetective.com/drgrisanti/mddc.htm" target="_blank">http://www.yourmedicaldetective.com/drgrisanti/mddc.htm</a></p>
        
        <p><a href="http://www.chiro.org/LINKS/ABSTRACTS/Comparison.shtml" target="_blank">http://www.chiro.org/LINKS/ABSTRACTS/Comparison.shtml</a></p>
        
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