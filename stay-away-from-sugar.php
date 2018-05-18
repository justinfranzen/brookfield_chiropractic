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
          $sql = "INSERT INTO sugar_blog (name, email, comment)
                VALUES ('$name', '$email', '$comment')";  
        }
    
    //end form validation
  
}   

?>

<body>
    
    <div id="secondary-content">
    
        <h1 id="main-header">5 Reasons to Stay Away from Sugar</h1>
        
        <div class="row">
            
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        
                <p>Sugar, in its many forms, is an increasingly common ingredient in processed foods. In fact, many of us eat the equivalent of 53 heaping teaspoons of white sugar every day! Many experts now agree that reducing sugar intake is an essential ingredient for natural health.</p>
                
                 <p>And in case you needed more convincing, here are five reasons to avoid refined (white) sugar.</p>
        
            <ol>
                <li>Sugar causes the body to release more adrenaline, which has been linked to hyperactivity in young children.</li>
                <li>Ingesting sugar makes the pancreas work harder to produce insulin. Diabetes results when the overworked pancreas can no longereliminate sugar from the bloodstream.</li>
                <li>Sugar increases mood swings, irritability and anxiety. If you’re already an anxious or stressed person, sugar won’t make your life any easier, but a visit to our practice might.</li>
                <li>Sugar has been known to compromise the immune system because it lowers the efficiency of white blood cells for a minimum of five hours.</li>
                <li>Eating sugar can decrease helpful high-density cholesterol (HDLs) and result in an increase in harmful cholesterol (LDLs).</li>
            </ol>
            
            </div>
            
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                
                <img src="images/sugar.jpg" alt="Sugar" class="blog-page-image" />
                
            </div>
            
        </div>
        
        <h3 class="subheader">Healthier Choices</h3>
        
        <p>Need to sweeten your food? Try adding raisins, dates or honey. Alternative sweeteners like Stevia are also a better bet–they’re available in several forms, have no calories and won’t raise blood sugar levels.</p>
        
    </div>
        
        <div id="comment-area">
        
            <h3 class="comment">Add Your Comment</h3>

            <div id="error-location"></div>

             <form id="myForm2" action="truth-abouth-germs.php" method="post" >

                                  <label for="name">Name * &nbsp;</label><input type="text" name="name" size="14" placeholder="Name" value="<?php if(isset($_POST['name'])) echo $_POST['name'];?>">
                                <p class="error"><?php if(isset($errors['name'])) echo $errors['name']; ?></p>
                                <p class="error"><?php if(isset($errors['valid_name'])) echo $errors['valid_name']; ?></p>

                                 <label for="email">Email * &nbsp;</label><input type="email" name="email" placeholder="Email" value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>">
                                 <p class="error"><?php if(isset($errors['email'])) echo $errors['email']; ?></p>

                                <label for="comment">Comment * &nbsp;</label>
                                <textarea rows="5" style="width:100%" name="comment" placeholder="Comment" value="<?php if(isset($_POST['comment'])) echo $_POST['comment'];?>"></textarea>
                                 <p class="error"><?php if(isset($errors['comment'])) echo $errors['comment']; ?></p>

                                <p id="email-post"><strong>Your email will not be posted.</strong></p>

                                <br>

                                 <p align="center"><input type="submit" value="Post Comment" name="Submit" id="post-comment">
                                     <input type="hidden" name="submitted" value="TRUE" /></p>
                            </form> 
            
        </div>

                <div id="comment-section">
                    
                    <h3 class="statement lightblue">Comments</h3>
                    
                    <div id="user-comments">

                    <?php
                        require_once ('sql/mysql_connect.php');
                        mysqli_query($dbc, $sql);

                         $sql = "SELECT name, comment FROM sugar_blog";
                        $result = $dbc->query($sql);

                        while($row = mysqli_fetch_array($result)){
                            echo '<div class="user-comment">' . "<tr><td>" . '<h4 class="name">' . $row['name'] . '</h4>' . " <br> " .  '<p id="comment">' . $row['comment'] . '</p>' . '</div>' . "<br>" . "</tr></td>";
                        }

                    ?>

                    </div>
                </div>



</body>

<?php
include 'includes/footer.php';
?>