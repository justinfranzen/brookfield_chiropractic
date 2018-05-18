<title>Brookfield Chiropractor, New Berlin, Wauwatosa, WI</title>

  <meta name="description" content="">
  <meta name="keywords" content="">

<?php
include 'includes/header.php';
?>

<body>
    
    <div id="secondary-content">
    
        <h1 id="main-header">Meet The Doctors</h1>
        
        <h3 class="subheader">Dr. Matt Christiansen</h3>
        
        <p>For months, I suffered with headaches. During my first snowboarding trip I developed headaches that hurt so bad, I could hardly keep my eyes open. I tried everything my doctor gave me, but nothing was helping. Finally, I visited the local chiropractor. One month later I was headache free! This was the first step to my chiropractic career. I became inspired and intrigued about chiropractic from then on. I shadowed chiropractors every time I was home from college and wanted to learn exactly how chiropractic could cure the exact problems that medical doctors treated. I had always been interested in how the body works and chiropractic school allowed me to develop the knowledge I was seeking.  <a href="dr-matt-christiansen.php" class="link">Read more &raquo;</a></p>

    
        <h3 class="subheader">Dr. Kevin Herrle</h3>
        
        <p>I just wish I had known then what I know now… I was suffering from headaches for years and the doctors told me they were normal! I knew that I was going to choose a career that would allow me to help and serve people, and I was frustrated by my own experience with traditional medicine. I talked with the counselor at the career services office and we came up with a list of careers that fit me based on a questionnaire that I had completed. My list included osteopath, podiatrist, chiropractor, and bus driver. <a href="dr-kevin-herrle.php" class="link">Read more &raquo;</a></p>
    
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