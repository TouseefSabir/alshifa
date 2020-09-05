<!DOCTYPE html>
<html lang="en">
<head>

    <?php include 'includes/meta-tags.php';?>

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


    <?php include 'includes/header.php';?>

    <?php include 'includes/home.php'; ?>


    <?php include 'includes/about.php'; ?>



   <?php include 'includes/treatment.php'; ?>

     <!-- GOOGLE MAP -->
     <section id="google-map">
     <!-- How to change your own map point
            1. Go to Google Maps
            2. Click on your location point
            3. Click "Share" and choose "Embed map" tab
            4. Copy only URL and paste it within the src="" field below
	-->
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2520.380628220712!2d-0.15266568468765224!3d50.824113268251445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48758512c80df259%3A0xafc6d1a535d93294!2s57%20Preston%20St%2C%20Brighton%20BN1%202HE%2C%20UK!5e0!3m2!1sen!2sth!4v1599302293425!5m2!1sen!2sth" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
     </section>       


       <?php include 'includes/footer.php';?>
     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.sticky.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>