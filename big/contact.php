<!DOCTYPE html>
<html lang="en">
 <head>
     <title>Jesus Rodriguez Web Developer Examples and Resources.</title>
  <meta charset="utf-8" />
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <link rel="stylesheet" href="css/big.css" />
  <link rel="stylesheet" href="css/nav.css" />
     <!-- jQuery-->
     <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
     <!--MenuMaker plugin -->
     <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
     <!-- Icaon Library -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">  
     <link rel="stylesheet" href="styles.css">
 </head>
 <body>
        <!-- A whapper can be used to contain the web page -->
        <div class="wrapper"></div>
        <header>
            <h1><a href="index.html">Web Developer Examples and Resources by Jesus Rodriguez.</a></h1>
            <nav id="cssmenu">            
                  <ul>
                     <li><a href="../index.html"><i class="fa fa-fw fa-institution"></i> WEB110</a></li>
                     <li><a href="index.html"><i class="fa fa-fw fa-home"></i> Big Website</a></li>
                     <li><a href="gallery.html"><i class="fa fa-fw fa-camera-retro"></i> Lightbox II Gallery</a></li>
                     
                      <!-- drop down menu for researh topics pages-->
                     <li><a href="#">Research Topics</a>                 
                        <ul>
                            <li><a href="smo.html"><i class="fa fa-fw fa-thumbs-o-up"></i> SMO</a></li>
                            <li><a href="accessibility.html"><i class="fa fa-fw fa-globe"></i> Accessibility</a></li>
                            <li><a href="form.html"><i class="form"></i> Form</a></li>
                        </ul>
                     </li>
                            <!-- drop down menu for google tools -->
                  
                     <li><a href="#">Google tools</a> 
                        <ul>
                            <li><a href="seo.html"><i class="fa fa-fw fa-desktop"></i> SEO</a></li>
                            <li><a href="calendar.html"><i class="fa fa-fw fa-calendar"></i> Calendar</a></li>
                            <li><a href="map.html"><i class="fa fa-fw fa-map-o"></i> Map</a></li>            
                        </ul>
                      </li>
                      <li><a href="contact.php"><i class="fa fa-fw fa-server"></i> Contact Me</a></li>
                    </ul>
            </nav>
        </header> 
       <!-- START LEFT COLUMN -->
       <section class="fullwidth">
           <h2 class="subheader">Contact Jesus Rodriguez</h2>
           <p>Watch the supporting instrctional video to create the responsive contents for this page.</p>
       </section>
        <!-- END LEFT COLUMN -->  
     <h2 class="subheader">Contact Jesus</h2>
        <div>
        <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "jesus.rodriguez-ca1@seattlecolleges.edu";  //place your/your client's email address here
        $toName = "Jesus Rodriguez"; //place your client's name here
        $website = "http://web-students.net/site113/web110";  //place NAME of your client's website

        //echo loadContact('simple.php');#demonstrates a simple contact form
        echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
     </div>
       <footer>
         <p><small>&copy; 2019 by <a href="contact.php">Contact Jesus Rodriguez </a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
       </footer> 
      <script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }   
  </script>
     
 </body>
</html>