<title>Brookfield Chiropractor, New Berlin, Wauwatosa, WI</title>

  <meta name="description" content="">
  <meta name="keywords" content="">

<?php
include 'includes/header.php';
?>

<?php
if (isset($_POST['submitted'])){
    
    require_once('sql/mysql_connect.php');
    
        $patient = $_POST['patient'];
        $name = mysqli_real_escape_string($dbc, $_POST['fullname']);
        $email = mysqli_real_escape_string($dbc, $_POST['email']);
        $phone = mysqli_real_escape_string($dbc, $_POST['phone']);
        $responseType = $_POST['responseType'];
        $day = $_POST['day'];
        $hour = $_POST['hour'];
        $minute = $_POST['minute'];
        $message = mysqli_real_escape_string($dbc, $_POST['message']);
        $redirect = 'appointment-request.php';
    
        // form validation
        $errors = array();
    
        if (empty($patient)) 
            {
                $errors['patient'] = "Type of patient required";
            }
        elseif (empty($name)) 
            {
                $errors['fullname'] = "Full name required";
            }
        elseif (!preg_match("/^[a-zA-Z ]*$/", $name)) 
            {
                $errors['valid_fullname'] = "Valid full name required";
            }
        elseif (empty($email)) 
            {
                $errors['email'] = "Email required";
            }
        elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
            {
                $errors['valid_email'] = "Valid email required";
            }
        elseif (empty($phone)) 
            {
                $errors['phone'] = "Phone number required";
            }
        elseif (empty($responseType)) 
            {
                $errors['responseType'] = "Response method required";
            }
        elseif (empty($day))
            {
                $errors['day'] = "Day required";
            }
        elseif (empty($hour))
            {
                $errors['hour'] = "Hour of day required";
            }
         elseif (empty($minute))
            {
                $errors['minute'] = "Minute of day required";
            }
        elseif (empty($message))
            {
                $errors['part'] = "Message/Comment required";
            }
        else
            {
          $sql = "INSERT INTO patient (name, email, message)
                VALUES ('$name', '$email', '$message')";  
            
         echo '<script>window.location = "'. $redirect .'";</script>';
            
         $email_from = "mail.justinfranzen.com";
         $email_to = "jtfranz90@gmail.com";
         $subject = "Appointment Request";
         $content = $name . " has requested an appointment on " .  $day . " at " . $hour . ":" . $minute . " \nEmail: " . $email . "\nRespond to me via " . $responseType . "\n\n" . $message;
         mail($email_to, $subject, $content);
            
        }
    
    //end form validation
  
}   

?>

<body>
    
<h1 id="main-header">Become A Practice Member</h1>
    
    <div id="secondary-content">
        
        <p>If chiropractic sounds promising, we encourage you to have a firsthand experience in our Brookfield practice. It’s easy to get started.</p>
        
        <h3 class="subheader">Email Us</h3>
        
        <div class="row">
            
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        
                <p>MIf you’re the cautious type, email us with your questions or concerns. We appreciate the opportunity to field questions, clear up concerns and put prospective practice members at ease before their first visit..</p>
                
                 <h3 class="subheader">Call Us</h3>
        
                 <p>You don’t need a referral to begin chiropractic care. Our knowledgeable staff can field most questions over the telephone. If you want to explore a concern more privately, just ask. Contact Brookfield Chiropractic today.</p>
                
                <h3 class="subheader">No-Obligation Consultation</h3>
        
                <p>Arrange a private consultation. Use this time to describe your health issue and share your goals. This is often helpful in determining if you’re likely to be a good candidate for chiropractic care.</p>
                
                 <p>The sooner you take action, the sooner we may be able to help you. Contact us and get started today!</p>

            
            </div>
            
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                
                <img src="images/become_a_patient.jpg" alt="Become A Patient" class="interior-img" />
                <figcaption>With new practice member openings throughout the day, we can arrange a consultation that works into your busy schedule.</figcaption>
                
            </div>
            
        </div>
        
            <form id="patientForm" action="become-a-patient.php" method="post" >
                
                <h3 class="statement subheader center">Request an Appointment</h3>
                
                <br>
                
                <label for="patient">Type of Patient * &nbsp;</label>
                        <select name="patient">
                                <option selected disabled hidden style='display: none' value=""></option> 
                                <option value="New Patient" <?php if ($_POST['patient'] == 'New Patient') echo 'selected="selected"';?>>New Patient</option>
                                <option value="Current Patient" <?php if ($_POST['patient'] == 'Current Patient') echo 'selected="selected"';?>>Current Patient</option>
                                <option value="Returning Patient" <?php if ($_POST['patient'] == 'Returning Patient') echo 'selected="selected"';?>>Returning Patient</option>
                        </select>    
                 <p class="error"><?php if(isset($errors['patient'])) echo $errors['patient']; ?></p>

                              <label for="fullname">Name * &nbsp;</label><input type="text" name="fullname" size="30" placeholder="Full Name" value="<?php if(isset($_POST['fullname'])) echo $_POST['fullname'];?>">
                            <p class="error"><?php if(isset($errors['fullname'])) echo $errors['fullname']; ?></p>
                            <p class="error"><?php if(isset($errors['valid_fullname'])) echo $errors['valid_fullname']; ?></p>

                             <label for="email">Email *&nbsp;</label><input type="email" name="email" placeholder="Email" value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>">
                             <p class="error"><?php if(isset($errors['email'])) echo $errors['email']; ?></p>
                            <p class="error"><?php if(isset($errors['valid_email'])) echo $errors['valid_email']; ?></p>
                
                            <label for="phone">Phone Number *&nbsp;</label><input type="phone" name="phone" placeholder="Phone Number" value="<?php if(isset($_POST['phone'])) echo $_POST['phone'];?>">
                             <p class="error"><?php if(isset($errors['phone'])) echo $errors['phone']; ?></p>
                
                             <label for="response">Respond to me via * &nbsp;</label>
                                    <select name="responseType">
                                    <option selected disabled hidden style='display: none' value=""></option> 
                                    <option value="Email" <?php if ($_POST['responseType'] == 'Email') echo 'selected="selected"';?>>Email</option>
                                    <option value="Phone" <?php if ($_POST['responseType'] == 'Phone') echo 'selected="selected"';?>>Phone</option>
                                    </select>
                                    <p class="error"><?php if(isset($errors['responseType'])) echo $errors['responseType']; ?></p>
                
                <div class="row">
                    
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        
                            <label for="day">Day *&nbsp;</label><input type="date" name="day" id="day" value="<?php if (isset($_POST['day'])) echo $_POST['day'];?>"> 
                            <p class="error"><?php if(isset($errors['day'])) echo $errors['day']; ?></p>
                        
                    </div>
                
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        
                            <label for="hour">Hour * &nbsp;</label><select name="hour" id="hour">
                                <option selected disabled hidden style='display: none' value=""></option> 
                                <option value="1" <?php if ($_POST['hour'] == '1') echo 'selected="selected"';?>>1</option>
                                <option value="2" <?php if ($_POST['hour'] == '2') echo 'selected="selected"';?>>2</option>
                                <option value="3" <?php if ($_POST['hour'] == '3') echo 'selected="selected"';?>>3</option>
                                <option value="4" <?php if ($_POST['hour'] == '4') echo 'selected="selected"';?>>4</option>
                                <option value="5" <?php if ($_POST['hour'] == '5') echo 'selected="selected"';?>>5</option>
                                <option value="6" <?php if ($_POST['hour'] == '6') echo 'selected="selected"';?>>6</option>
                                <option value="7" <?php if ($_POST['hour'] == '7') echo 'selected="selected"';?>>7</option>
                                <option value="8" <?php if ($_POST['hour'] == '8') echo 'selected="selected"';?>>8</option>
                                <option value="9" <?php if ($_POST['hour'] == '9') echo 'selected="selected"';?>>9</option>
                                <option value="10" <?php if ($_POST['hour'] == '10') echo 'selected="selected"';?>>10</option>
                                <option value="11" <?php if ($_POST['hour'] == '11') echo 'selected="selected"';?>>11</option>
                                <option value="12" <?php if ($_POST['hour'] == '12') echo 'selected="selected"';?>>12</option>
                             </select>
                            <p class="error"><?php if(isset($errors['hour'])) echo $errors['hour']; ?></p>
                        
                    </div>
                    
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                
                            <label for="minute">Minute * &nbsp;</label><select name="minute" id="minute">
                                <option selected disabled hidden style='display: none' value=""></option> 
                                <option value="00" <?php if ($_POST['minute'] == '00') echo 'selected="selected"';?>>00</option>
                                <option value="15" <?php if ($_POST['minute'] == '15') echo 'selected="selected"';?>>15</option>
                                <option value="30" <?php if ($_POST['minute'] == '30') echo 'selected="selected"';?>>30</option>
                                <option value="45" <?php if ($_POST['minute'] == '45') echo 'selected="selected"';?>>45</option>
                            </select>  
                            <p class="error"><?php if(isset($errors['minute'])) echo $errors['minute']; ?></p>
                        
                    </div>
                    
                </div>
                
                            <label for="message">Message * &nbsp;</label>
                            <textarea rows="5" style="width:100%" name="message" placeholder="Comments or Questions" value="<?php if(isset($_POST['message'])) echo $_POST['message'];?>"></textarea>
                             <p class="error"><?php if(isset($errors['message'])) echo $errors['message']; ?></p>
                            <br />

                             <p align="center"><input type="submit" value="Send" name="Submit" id="submit">
                                 <input type="hidden" name="submitted" value="TRUE" /></p>
                        </form> 
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