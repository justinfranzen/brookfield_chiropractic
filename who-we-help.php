<title>Brookfield Chiropractor, New Berlin, Wauwatosa, WI</title>

  <meta name="description" content="">
  <meta name="keywords" content="">

<?php
include 'includes/header.php';
?>

<?php
if (isset($_POST['submitted'])){
    
    require_once('sql/mysql_connect.php');
    
        $name = mysqli_real_escape_string($dbc, $_POST['name']);
        $email = mysqli_real_escape_string($dbc, $_POST['email']);
        $comment = mysqli_real_escape_string($dbc, $_POST['comment']);
        $redirect = 'sit-straight.php#error-location';
    
        // form validation
        $errors = array();
    
        if (empty($name)) 
            {
                echo '<script>window.location = "'. $redirect .'";</script>';
                $errors['name'] = "Name required";
            }
        elseif (!preg_match("/^[a-zA-Z]*$/", $name) || (!preg_match("/^[a-zA-Z ]*$/", $name)))
            {
                echo '<script>window.location = "'. $redirect .'";</script>';
                $errors['valid_name'] = "Valid name required";
            }
        elseif (!filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                echo '<script>window.location = "'. $redirect .'";</script>';
                $errors['email'] = "Valid email required";
            }
        elseif (empty($comment))
            {
                echo '<script>window.location = "'. $redirect .'";</script>';
                $errors['message'] = "Comment required";
            }
        else
            {
          $sql = "INSERT INTO germs_blog (name, email, comment)
                VALUES ('$name', '$email', '$comment')";  
        }
    
    //end form validation
  
}   

?>

<body>
    
    <div id="secondary-content">
    
        <h1 id="main-header">Five Reasons People Consult Our Practice:</h1>
        
        <p>Which one will prompt you to take action?</p>
        
        <h3 class="subheader">Obvious Spinal Problem</h3>
        
        <div class="row">
            
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        
                <p>Most people associate chiropractic care with headaches, neck and back problems. Our interest in the spine is because it houses the nervous system that carries vital communications between your brain and your body.</p>
                
                 <h3 class="subheader">Visceral or Organic Complaints</h3>
        
                 <p>Some consult our practice for “non-back” health problems. If the practice member has vertebral subluxations, chiropractic care may be helpful. And while formal research is limited, we’ve had personal experiences with those suffering from bedwetting, asthma, colic and even stomach problems.</p>
            
            </div>
            
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                
                <img src="images/why_patients_see_us.jpg" alt="Why Patients See us" class="interior-img" />
                <figcaption>Everyone, regardless of age or condition, can benefit from a nervous system that is working at its very best.</figcaption>
                
            </div>
            
        </div>

        <h3 class="subheader">Natural Drug Free Health Care</h3>
        
        <p>Those who wish to avoid drugs or surgery will often visit our practice first. Chiropractic care is a safe, natural approach to better health.</p>
        
        <h3 class="subheader">Maintenance and Prevention</h3>
        
        <p>If you’ve had chiropractic care elsewhere, you already know the value of ongoing chiropractic care. We’d be honored to be your Doctor.</p>
        
        <h3 class="subheader">Stay Well</h3>
        
        <p>We experience life through our nervous system. Those who want to optimize their health, be all that they can be and perform at their best, should give us a call at (262) 754-5500.</p>
        
    </div>
        
</body>

<?php
include 'includes/footer.php';
?>