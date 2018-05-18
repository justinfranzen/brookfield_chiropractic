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
          $sql = "INSERT INTO health_blog (name, email, comment)
                VALUES ('$name', '$email', '$comment')";  
        }
    
    //end form validation
  
}   

?>

<body>
    
    <div id="secondary-content">
    
        <h1 id="main-header">The Key to Health</h1>
        
        <div class="row">
            
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        
                <p>Visiting the doctor when you’re feeling great is something new. Yet, a growing number of people who want to be and do their best are visiting chiropractors on a regular basis – to stay well, not just to take care of their back pain!</p>
                
                 <h3 class="subheader">The First Symptom</h3>
        
                 <p>Remember staying home from school when we were sick and returning when we were feeling better? We learned to think of being sick as having obvious symptoms. But these days, many health problems are the result of lifestyle choices that don’t always have obvious symptoms until the effects are well advanced.</p>

            </div>
            
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                
                <img src="images/health.jpg" alt="Cervical Spine" class="blog-page-image" />
                
            </div>
            
        </div>
        
        <h3 class="subheader">Healthy Response</h3>
        
        <p>The reverse is true as well. If you eat improperly prepared food and find yourself vomiting to expel it, you probably won’t feel good, but you’re having a healthy response.</p>
        
        <p>Turns out that true health is how well our bodies work, not how we feel.</p>
        
        <h3 class="subheader">Central Control</h3>
        
        <p>How well our body functions is based upon the integrity of our nervous system. That’s why so many seek our practice for wellness care. They want to make sure that every organ and tissue has an uninterrupted nerve supply. It just makes sense to detect little problems before they become serious concerns.</p>
        
        <h3 class="subheader">Achieving True Health</h3>
        
        <p>True health is optimum physical, mental and social well-being and not merely the absence of disease or infirmity. Drinking more water, eating nutritious foods, regular exercise and virtually every other healthy habit produce even bigger dividends when you have a properly working nervous system.</p>
        
        <p>Although everyone wants to feel good, your care should not be based on whether you have pain or other symptoms. Problems may exist without obvious symptoms…just like dental cavities, high blood pressure or heart disease. </p>
        
        <p>What do you do to maintain health? Share your thoughts in the comments below.</p>
        
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
                    
                    <h3 class="subheader">Comments</h3>
                    
                    <div id="user-comments">

                    <?php
                        require_once ('sql/mysql_connect.php');
                        mysqli_query($dbc, $sql);

                         $sql = "SELECT name, comment FROM health_blog";
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