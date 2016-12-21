<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
        
        <title>SilverWave Madrid</title>
        <!-- Loading third party fonts -->
        <link href="http://fonts.googleapis.com/css?family=Passion+One|Permanent+Marker:300,400,600,700,900" rel="stylesheet" type="text/css">
        <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- Loading main css file -->
        <link rel="stylesheet" href="style.css">
        
        <!--[if lt IE 9]>
        <script src="js/ie-support/html5.js"></script>
        <script src="js/ie-support/respond.js"></script>
        <![endif]-->

    </head>

    <body>
        
        <div id="site-content">
            <header class="site-header">
                <div class="container">
                    <a href="index.html" id="branding">
                        <img src="./images/small_logo.png" height="28" width="28" alt="Site Title">
                    </a> <!-- #branding -->
                    
                    <nav class="main-navigation">
                        <button type="button" class="toggle-menu"><i class="fa fa-bars"></i></button>
                        <ul class="menu">
                            <li class="menu-item current-menu-item"><a href="index.html">Home</a></li>
                            <li class="menu-item"><a href="about.html">About</a></li>
                            <li class="menu-item"><a href="gallery.html">Gallery</a></li>
                            <li class="menu-item"><a href="download.html">Download</a></li>
                            <li class="menu-item"><a href="blog.html">Blog</a></li>
                            <li class="menu-item"><a href="contact.html">Contact</a></li>
                        </ul> <!-- .menu -->
                    </nav> <!-- .main-navigation -->
                    <div class="mobile-menu"></div>
                </div>
            </header> <!-- .site-header -->
            
            <main class="main-content">
                <div class="fullwidth-block inner-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="content">
                                <p class='entry-title'>

                                    <?php
                                    $servername = "localhost";
                                    $username = "root";
                                    $password = "root";
                                    $dbname = "silverFans";
                                    $value = htmlspecialchars($_POST['email']);

                                    if ($value ===""){

                                        echo "Please enter a valid email! <br>";

                                    }
                                    else{
                                    // Create connection
                                    $conn = new mysqli($servername, $username, $password, $dbname);
                                    // Check connection
                                    if ($conn->connect_error) {
                                        die("Connection failed: " . $conn->connect_error);
                                    } 
                                    
                                        $sql = "INSERT INTO mails (email)
                                        VALUES ('$value')";

                                        if ($conn->query($sql) === TRUE ) {
                                            echo "Congrats!"
                                            ?></p>
                                            <?php
                                            echo "Thank you for your registration! <br>";
                                            echo "We have registered your mail in our database <br>";

                                        
                                        } else {
                                            echo "This mail is already registered: " . $value;
                                        }
                                    
                                    $conn->close();
                                    }
                                    ?>  

                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- .testimonial-section -->

                
                
            </main> <!-- .main-content -->

            <footer class="site-footer">
                <div class="container">
                    <img src="images/bandlogo.png" height="54" width="356" alt="Site Name">
                    
                    <address>
                        <p><a href="tel:777777777">777777777</a> <br> <a href="mailto:silverwavemadrid@gmail.com">silverwavemadrid@gmail.com</a></p> 
                    </address> 
                    
                    <form id="mailForm" action="./storemail.php" method="post" class="newsletter-form">
                        <input name ="email" type="email" placeholder="Enter your email to join newsletter...">
                        <input type="submit" class="button cut-corner" value="Subscribe">
                    </form> <!-- .newsletter-form -->
                    
                    <div class="social-links">
                        <a href="#"><i class="fa fa-facebook-square"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div> <!-- .social-links -->
                    
                    <p class="copy">Copyright 2016 Silverwave. Designed by JorAlias. All right reserved</p>
                </div>
            </footer> <!-- .site-footer -->

        </div> <!-- #site-content -->

        <script src="js/jquery-1.11.1.min.js"></script>     
        <script src="js/plugins.js"></script>
        <script src="js/app.js"></script>
        
    </body>

</html>