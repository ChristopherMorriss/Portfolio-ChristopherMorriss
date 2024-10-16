<!DOCTYPE html>
<?php include "function.php" ?>
<?php $title="I'm a web developer" ?>
<html>
    <head>  
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/normalize.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
        <!-- Links below are used for the custom font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
        <title>Portfolio - Christopher Morriss</title>
        <?php include "phpenv.php" ?>
    </head>

    <body>
        <?php include "php/sticky-menu.php" ?>
        <main> 
            <?php include "php/banner.php" ?>    
        <!-- Code for the banner. The banner contains the code for the navigation for the smaller viewports  -->    
        <!-- <div class="banner intro">
            <div class="menu-parts">
                <span class="icon-menu alt-menu">
                    <nav id="sticky-3">
                        <a href="about-me.php">About Me</a>
                        <a href="#code-examples">My Portfolio</a>
                        <a href="coding-examples.php">Coding Examples</a>
                        <a href="scs-scheme.php">SCS Scheme</a>
                    </nav>
                </span>
            </div>
            <h1 class="chris-name">Christopher Morriss</h1>
            <h2 class="nav-page">I'm a web developer</h2>
            <h2><a href="#bottom">Scroll Down &ShortDownArrow;</a></h2>
        </div> -->

        <!-- Grid of Projects -->
        <div class="grid" id="code-examples">
            <a href="https://netmatters.christopher-morriss.netmatters-scs.co.uk/">
                <div class="grid-object">
                    <img src="img/placeholder-code.png" alt="placeholder image">
                    <h1>Netmatters Home</h1>
                    <h2>View Project &ShortRightArrow;</h2>
                </div>
            </a>
            <a href="christopher-morriss.netmatters-scs.co.uk/">
                <div class="grid-object">
                    <img src="img/porftolio-homepage.png" alt="Portfolio Homepage Image">
                    <h1>My Portfolio</h1>
                    <h2>View Project &ShortRightArrow;</h2>
                </div>
            </a>
            <a href="https://js-array.christopher-morriss.netmatters-scs.co.uk/">
                <div class="grid-object">
                    <img src="img/javascript-array-project.png" alt="Javascript Array Project Image">
                    <h1>Coming Soon</h1>
                    <h2>View Project &ShortRightArrow;</h2>
                </div>
            </a>
            <a href="https://laravel.christopher-morriss.netmatters-scs.co.uk/">
                <div class="grid-object">
                    <img src="img/admin_panel_laravel_assessment.png" alt="Admin Panel Project Image">
                    <h1>Admin Panel</h1>
                    <h2>View Project &ShortRightArrow;</h2>
                </div>
            </a>
            <a href="coming-soon.php">
                <div class="grid-object">
                    <img src="img/placeholder-code.png" alt="placeholder image">
                    <h1>Coming Soon</h1>
                    <h2>View Project &ShortRightArrow;</h2>
                </div>
            </a>
            <a href="coming-soon.php">
                <div class="grid-object">
                    <img src="img/placeholder-code.png" alt="placeholder image">
                    <h1>Coming Soon</h1>
                    <h2>View Project &ShortRightArrow;</h2>
                </div>
            </a>
        </div>
        
        <!-- Contact Info and Submission Form -->
        <div class="contact-info" id="contact-link">
            <div class="contact-msg">
                <h1>Get In Touch</h1>
                <p>If you are interested in talking, feel free to contact me through phone or email:</p>
                <h3>00000 00000</h3>
                <h3>Me@MyEmail.com</h3>
                <p>Contact me during the hours 9:00am-11:30am or 1:00pm-4:00pm for the quickest response</p>
            </div>
            <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST'){ 
                    $valid_submission = 1;
                    $email_regex = "";
                    //Filters the contents of the input fields with the name 'user-name', 'message' etc to prevent SQL injection 
                    $first_name = trim(filter_input(INPUT_POST,'first-name',FILTER_SANITIZE_STRING));  
                    $last_name = trim(filter_input(INPUT_POST,'last-name',FILTER_SANITIZE_STRING));
                    $email = trim(filter_input(INPUT_POST,'email-address',FILTER_SANITIZE_STRING));
                    $subject = trim(filter_input(INPUT_POST,'subject',FILTER_SANITIZE_STRING));
                    $message =trim(filter_input(INPUT_POST,'textarea',FILTER_SANITIZE_STRING));
                    if (empty($first_name) || empty($last_name) || empty($email) || empty($message)){
                        //If one of these input fields is empty, the error message is assigned 
                        //and is ready to be output in the relevant part of the HTML
                        $error_message = 'Please fill in the required fields: first_name, last_name, email and message';
                    }
                    else{ 
                        // echo " fname = $first_name<br>";
                        // echo " lname = $last_name<br>";
                        // echo " email = $email<br>";
                        // echo " message = $message<br>";
                        $email_regex = "/^([_\-\.0-9a-zA-Z]+)@([_\-\.0-9a-zA-Z]+)\.([a-zA-Z]){2,7}$/";
                        $match = preg_match($email_regex,$email);
                        // echo "<p>match=$match</p>";
                        if ($match != 0){
                            add_enquiry($first_name,$last_name,$email,$subject,$message);
                        }  
                    }
                    
                }
                ?>
            <form method="post" action="index.php" target="frame">
            <!-- onclick="return false" -->
                <?php if (isset($error_message)){
                        echo "<p class='message'>$error_message</p>";
                    }
                    ?>
                <div class="success-box success-sent">
                    <small id="success-msg">Your message has been successfully sent!<button class="close" onclick="deleteSuccessMessage()">×</button></small>
                </div>
                <div class="name-label">
                    <label for="f-name" id="f-label">First Name:<span class="asterix">*</span></label>
                    <label for="l-name">Last Name:<span class="asterix">*</span></label>
                </div>
                <div class="name">
                    <input type="text" id="f-name" class="form-object" placeholder="First Name" name="first-name">
                    <input type="text" id="l-name" class="form-object" placeholder="Last Name" name="last-name">
                </div>
                <!-- The class below was intented to add error messages but it ruins the layout so I have removed it for now -->
                <div class="name-warning error-box">
                    <!-- This is small to prevent the size from breaking the layout of the page  -->
                    <small id="required-name">Please enter your full name<button class="close" onclick="deleteNameError()">×</button></small>
                </div>
                <label>Email:<span class="asterix">*</span></label> 
                <input type="text" id="email" class="form-object" placeholder="Email Address" name="email-address">
                <div class="error-box email-warning">
                    <small id="required-email">Please enter a valid email</small>
                    <button class="close" onclick="deleteEmailError()">×</button>
                </div>
                <label>Subject:</label>
                <input type="text" id="subject" class="form-object" placeholder="Subject" name="subject">
                <label>Message:<span class="asterix">*</span></label> 
                <textarea id="message-textarea" placeholder="Message" class="form-object" name="textarea"></textarea>
                <div class="error-box message-warning">
                    <small id="required-message">Please enter a message<button class="close" onclick="deleteMessageError()">×</button></small>
                </div>
                <button class="btn" class="form-object" id="submit" onclick="validateForm()">Submit</button>
            </form>
        </div>
        </main> 
    <footer>
        <h2 id="bottom"><a href="#top">Back to Top &ShortUpArrow;</a></h2> 
        
    </footer>
    <!-- JavaScript Links -->
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/main.js"></script>
    <iframe name="frame"></iframe>
    </body>
    
</html>