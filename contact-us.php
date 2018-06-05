<title>Brookfield Chiropractor, New Berlin, Wauwatosa, WI</title>

  <meta name="description" content="">
  <meta name="keywords" content="">

<?php
include 'includes/header.php';
?>

<?php
if (isset($_POST['submitted'])){
    
    require_once('sql/mysql_connect.php');
    
        $firstname = mysqli_real_escape_string($dbc, $_POST['firstname']);
        $lastname = mysqli_real_escape_string($dbc, $_POST['lastname']);
        $email = mysqli_real_escape_string($dbc, $_POST['email']);
        $phonenumber = mysqli_real_escape_string($dbc, $_POST['phone']);
        $message = mysqli_real_escape_string($dbc, $_POST['message']);
    
        // form validation
        $errors = array();
    
        if (empty($firstname)) 
            {
                $errors['firstname'] = "First name required";
            }
        elseif (!preg_match("/^[a-zA-Z]*$/", $firstname))
            {
                $errors['valid_firstname'] = "Valid first name required";
            }
        elseif (empty($lastname))
             {
                $errors['lastname'] = "Last name required";
            }
        elseif (!preg_match("/^[a-zA-Z]*$/", $lastname))
            {
                $errors['valid_lastname'] = "Valid last name required";
            }
        elseif (!filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                $errors['email'] = "Valid email required";
            }
        elseif (empty($message))
            {
                $errors['message'] = "Message required";
            }
        else
            {
          $sql = "INSERT INTO brookfield_chiropractic (firstName, lastName, email, message)
                VALUES ('$firstname', '$lastname', '$email', '$message')";
            
            mysqli_query($dbc, $sql);
            
          $redirect = 'thank-you.php';
  
          echo '<script>window.location = "'.$redirect.'";</script>';
              
         $email_to = "jtfranz90@gmail.com";
         $email_from = "mail.justinfranzen.com";
         $subject = "Client Request";
         $content = $firstname . " " . $lastname . " is interested in chiropractic services" . " \nEmail: " . " " . $email . " " . " \n " . $message;
         mail($email_to, $subject, $content);
            }  
    
    //end form validation
  
}
?>

<body>
    
<h1 id="main-header">Contact Brookfield Chiropractic</h1>
    
    <div id="secondary-content">
        
        <div class="row">
            
            <div class="col-lg-7 col-md-7 col-sm-12">

                <h3 class="subheader">Office Address:</h3>

                <p>Brookfield Chiropractic<br>
                    15010 W Greenfield Ave, Ste 100<br>
                    Brookfield, WI 53005</p>

                <p><strong>Phone:</strong> <a href="tel:262-754-5500" class="contact-phonenumber">(262) 754-5500</a><br>
                    <strong>Fax:</strong> (262) 754-5501</p>

                <p>Your health is our primary concern and, as such, if an emergency should arise while our office is closed, please contact us at <a href="tel:262-754-5500">(262) 754-5500</a> and follow the prompts on our after hours voicemail to reach the doctors.</p>

                <p><strong>Chiropractic Appointments</strong> – INDIVIDUAL DOCTOR’S SCHEDULE MAY VARY </p>
                
            </div>

            <div class="col-lg-5 col-md-5 col-sm-12">
                
                <form id="myForm" action="contact-us.php" method="post" >

                              <label for="firstname">First Name * &nbsp;</label><input type="text" name="firstname" size="14" placeholder="First Name" value="<?php if(isset($_POST['firstname'])) echo $_POST['firstname'];?>">
                            <p class="error"><?php if(isset($errors['firstname'])) echo $errors['firstname']; ?></p>

                            <label for="firstname">Last Name * &nbsp;</label><input type="text" name="lastname" size="14" placeholder="Last Name" value="<?php if(isset($_POST['lastname'])) echo $_POST['lastname'];?>">
                            <p class="error"><?php if(isset($errors['lastname'])) echo $errors['lastname']; ?></p>

                             <label for="email">Email *&nbsp;</label><input type="email" name="email" placeholder="Email" value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>">
                             <p class="error"><?php if(isset($errors['email'])) echo $errors['email']; ?></p>

                            <label for="message">Message * &nbsp;</label>
                            <textarea rows="5" style="width:100%" name="message" placeholder="Message" value="<?php if(isset($_POST['message'])) echo $_POST['message'];?>"></textarea>
                             <p class="error"><?php if(isset($errors['message'])) echo $errors['message']; ?></p>
                            <br />

                             <p align="center"><input type="submit" value="Send" name="Submit" id="submit">
                                 <input type="hidden" name="submitted" value="TRUE" /></p>
                        </form> 
                
            </div>
            
        </div>

        <h3 class="subheader">Map &amp; Directions:</h3>
        
        <p>Take Hwy 94 to Moorland Road South (Brookfield Square exit). On Moorland Road South, head South to Greenfield Avenue (second stoplight). Turn left onto Greenfield Avenue and travel about 1/8 mile to the Brookfield Marketplace (the entrance is on the left). We are located two doors down from Panera Bread, right next to US Cellular.</p>
        
        <p>Please arrive on time for your scheduled appointment and call us if you need any help finding us.</p>
        
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d46674.51234818081!2d-88.099794!3d43.017082!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc3ec1f097f40d8df!2sBrookfield+Chiropractic!5e0!3m2!1sen!2sus!4v1521230764374" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        
    </div>



</body>

<?php
include 'includes/footer.php';
?>