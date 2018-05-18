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
    
        <h1 id="main-header">The Truth About Germs</h1>
        
        <div class="row">
            
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        
                <p>Why does it seem that some people go from one cold to the next, getting all the bugs that “go around” and others don’t? In 1895, it was this very question that prompted D. D. Palmer to pursue what we call chiropractic!</p>
                
                <p>Today, many of us are fearful of germs. Since about the time the microscope was invented, there has been an undue focus on them—but germs are a lot like seeds. Have you ever tried to start a lawn or plant a garden? It doesn’t just happen. The conditions have to be just right over a period of days or weeks.</p>'
            
                <p>The same can be said when it comes to germs manifesting into disease.</p>
            
            </div>
            
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                
                <img src="images/germs.jpg" alt="Germs" class="blog-page-image" />
                
            </div>
            
        </div>
        
        <h3 class="subheader">It’s All About Immunity</h3>
        
        <p>Like all tissues, organs and systems of your body, your nervous system affects the function of your immune system. That’s why it’s thought that spinal misalignments can dampen your immune system response. Weakened by a compromised nervous system, your stomach, lungs, nose, ears and throat become the perfect “soil” for viruses, microbes and other bugs. For kids, this often means recurrent ear infections, colic and asthma. For adults, it can mean using up all your sick days – and then some!</p>

        
        <p>Restoring the integrity of the nervous system (and the workings of every cell and tissue) is how chiropractic care works. It’s a simple idea that helps people enjoy better health, naturally.</p>
        
        <p>If it’s been a while since your last visit to our practice, consider giving us a call to make an appointment.</p>
        
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

                         $sql = "SELECT name, comment FROM germs_blog";
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