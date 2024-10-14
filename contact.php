<?php
include_once('./connection.php');

// contact form
if (isset($_REQUEST['submit'])) {
   $cName = $_REQUEST['name'];
   $cEmail = $_REQUEST['email'];
   $cSubject = $_REQUEST['subject'];
   $cMessage = $_REQUEST['message'];

   $insert = "INSERT INTO contact_us (cName, cEmail, cSubject, cMessage) VALUES ('$cName', '$cEmail', '$cSubject', '$cMessage')";
   $insert_query = mysqli_query($conn, $insert);
   if ($insert_query) {
      header('Location: ./contact.php');
   } else {
      echo "error";
   }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Khusboo Ghar</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <!-- fonts -->
   <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Open+Sans:400,700&display=swap&subset=latin-ext" rel="stylesheet">
   <!-- owl stylesheets -->
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <link rel="stylesheet" href="css/owl.theme.default.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="header_section">
         <div class="container-fluid">
            <nav class="navbar navbar-light bg-light justify-content-between">
               <div id="mySidenav" class="sidenav">
                  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                  <a href="index.php">Home</a>
                  <a href="products.php">Products</a>
                  <a href="about.php">About</a>
                  <a href="client.php">Client</a>
                  <a href="contact.php">Contact</a>
               </div>
               <span class="toggle_icon" onclick="openNav()"><img src="images/toggle-icon.png"></span>
            </nav>
         </div>
      </div>
      <!-- header section end -->
   <!-- contact section start -->
   <div class="contact-page">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               
                  <div class="line"></div>
                  <h1 class="heading">Contact Us</h1>
               
            </div>
            <div class="col-md-6">
               <div id="map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13623.647658630196!2d73.05721718854623!3d31.388992255886148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39225d49afde6e87%3A0x59de94db4a123a7b!2sSamanabad%2C%20Faisalabad%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1727615593737!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
               </div>
            </div>
            <div class="col-md-6">
               <div class="right-content">
                  <div class="container">
                     <form action="" id="contact">
                        <div class="row">
                           <div class="col-md-6 mt-4 mt-md-0 mt-lg-0">
                              <fieldset>
                                 <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name...">
                              </fieldset>
                           </div>
                           <div class="col-md-6 mt-4 mt-md-0 mt-lg-0">
                              <fieldset>
                                 <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email...">
                              </fieldset>
                           </div>
                           <div class="col-md-12 mt-4">
                              <fieldset>
                                 <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject...">
                              </fieldset>
                           </div>
                           <div class="col-md-12 mt-4">
                              <fieldset>
                                 <textarea name="message" id="message" rows="6" class="form-control" placeholder="Enter your message here..."></textarea>
                              </fieldset>
                           </div>
                           <div class="col-md-5 mt-4">
                              <fieldset>
                                 <button type="submit" id="form-submit" class="btn contact_button mt-2 mt-md-0 mt-lg-0" name="submit">
                                    Submit!
                                 </button>
                              </fieldset>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- contact section end -->
   <!-- footer section start -->
   <div class="footer_section layout_padding">
      <div class="container">
         <div class="footer_logo"><a href="index.php"><img src="images/footer-logo.png"></a></div>
         <div class="contact_section_2">
            <div class="row">
               <div class="col-sm-4">
                  <h3 class="address_text">Contact Us</h3>
                  <div class="address_bt">
                     <ul>
                        <li>
                           <a href="#">
                              <i class="fa fa-map-marker" aria-hidden="true"></i><span class="padding_left10">Address : Samanabad Faisalabad</span>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left10">Call : 03230070599</span>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left10">Email : saadrajpoot1st@gmail.com</span>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="col-sm-4">
                  <!-- <div class="footer_logo_1"><a href="index.php"><img src="images/footer-logo.png"></a></div> -->
                  <p class="dummy_text"> It captures the essence of fleeting moments, turning them into timeless stories told through the language of scent.</p>
               </div>
               <div class="col-sm-4">
                  <div class="main">
                     <h3 class="address_text">About Products</h3>
                     <p class="ipsum_text">Perfume is the art that whispers to the soul, leaving a trace of elegance and memory with every breath.</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="social_icon">
            <ul>
               <li>
                  <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
               </li>
               <li>
                  <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
               </li>
               <li>
                  <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
               </li>
               <li>
                  <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
               </li>
            </ul>
         </div>
      </div>
   </div>
   <!-- footer section end -->
   <!-- Javascript files-->
   <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.0.0.min.js"></script>
   <script src="js/plugin.js"></script>
   <!-- sidebar -->
   <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="js/custom.js"></script>
   <!-- javascript -->
   <script src="js/owl.carousel.js"></script>
   <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
   <script>
      function openNav() {
         document.getElementById("mySidenav").style.width = "100%";
      }

      function closeNav() {
         document.getElementById("mySidenav").style.width = "0";
      }
   </script>
</body>

</html>