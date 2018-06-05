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
          $sql = "INSERT INTO cervical_spine_blog (name, email, comment)
                VALUES ('$name', '$email', '$comment')";  
        }
    
    //end form validation
  
}   

?>

<body>
    
<h1 id="main-header">All About the Cervical Spine</h1>
    
    <div id="secondary-content">
        
        <div class="row">
            
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        
                <p>The cervical spine – that is, the upper seven of our vertebrae – must surely rank among the most under-appreciated and most vital parts of our body. Its 37 separate joints endlessly allow the head and neck to move atop the torso – all the while obeying constant commands from the special senses and reflex mechanisms.</p>
                
                 <p>Look at it this way: the cervical spine faithfully holds up our heavy heads between 14 to 16 hours a day. This is hardly easy. First of all, the head is far from evenly balanced on top of our spine. In fact, it’s tilted heavily forward; without the cervical muscles, it would topple over onto our chest.</p>
            
            </div>
            
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                
                <img src="images/cervical-spine.jpg" alt="Cervical Spine" class="blog-page-image" />
                
            </div>
            
        </div>

        <p>Secondly, the head’s weight can become unbearable over time. (If you’d like to get a clearer picture, try this experiment: hold a bowling ball with your elbow on a table for as long as you can. Few people can keep this up longer than an hour.)</p>
        
        <p>That means the cervical spine is a vital part of nearly all our everyday activities, including speaking, gesturing, sitting, standing, lying down, breathing and many more. Most of what our head does, it does thanks to the cervical spine.</p>
        
        <h3 class="subheader">Protecting Your Spine</h3>
        
        <p>That’s why so many of the injuries to this area are so serious – often resulting in paralysis or death. For example, hitting your head on the bottom of the pool or tackling in sports can compress the cervical spine against the shoulder and cause grave injury. Even everyday headaches often involve the cervical spine.</p>
        
        <p>And that’s why you’ll be glad to know that chiropractors have led the way in recognizing the cervical spine’s uniqueness – even from the rest of the spine – and caring for it accordingly.</p>
        
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

                         $sql = "SELECT name, comment FROM cervical_spine_blog";
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