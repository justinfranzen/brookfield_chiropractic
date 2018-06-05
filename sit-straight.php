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
        $userComment = 'sit-straight.php#comment-section';
    
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
            echo '<script>window.location = "'. $userComment .'";</script>';
          $sql = "INSERT INTO sit_straight_blog (name, email, comment)
                VALUES ('$name', '$email', '$comment')";  
        }
    
    //end form validation
  
}   

?>

<body>
    
<h1 id="main-header">Why You Should Sit Up Straight</h1>
    
    <div id="secondary-content">
        
        <div class="row">
            
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        
                <p>Remember when your mother used to say things like, “Eat all your vegetables.” And, “Look both ways before you cross the street.” Let’s not forget her mantra, “Sit up straight!” So many people today work in sedentary jobs that require them to sit for most of the workday. However, whether sitting at a desk, a football game, or in front of a television set, good posture is imperative to your spinal health. And poor postural habits are a leading contributor to back pain.</p>
            
            </div>
            
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                
                <img src="images/sit-straight.jpg" alt="Sit Straight" class="blog-page-image" />
                
            </div>
            
        </div>
        
        <h3 class="subheader">Checking Your Posture</h3>
        
        <p>Let’s take a look at how you’re sitting right at this moment.</p>
        
        <ul>
            <li>Are your feet flat on the floor, with your knees at a 90-degree angle?</li>
            <li>Are your buttocks, back and shoulders up against the backrest of your chair?</li>
            <li>Does the chair you’re sitting in provide enough lumbar support? Does the backrest fit into the natural curve of your spine?</li>
            <li>Are your shoulders relaxed and even, not hunched in a forward position?</li>
            <li>Is your body weight equally distributed across both hips?</li>
            <li>Are your knees level with or slightly higher than your hips?</li>
        </ul>
        
        <p>If you answered “No” to any of these questions, you are probably exerting undue stress on your spine; this will eventually cause back pain.</p>
        
         <h3 class="subheader">Change How You Sit</h3>
        
        <p>Keep in mind that it is not a good idea to sit in the same position for more than 40 minutes. Chronic slouching affects the discs between the vertebrae and may cause them to bulge or become herniated. Take the time to stand up and stretch your back and legs or take a short walk periodically.</p>
        
        <p>If you’re already finding that back pain is creeping into your life, give us a call.</p>
        
    </div>
        
        <div id="comment-area">
        
            <h3 class="comment">Add Your Comment</h3>

            <div id="error-location"></div>

             <form id="myForm2" action="sit-straight.php" method="post" >

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
                    
                    <h3 class="subheader">Comments</h3>
                    
                    <div id="user-comments">

                    <?php
                        require_once ('sql/mysql_connect.php');
                        mysqli_query($dbc, $sql);

                         $sql = "SELECT name, comment FROM sit_straight_blog";
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