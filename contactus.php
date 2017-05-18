<!DOCTYPE html>
<html>
 <head>
    <title>Contact Us Megan's Diner</title>
    <meta charset="utf-8" />
    <meta name="robots" content="noindex,nofollow" />
    <link href='http://fonts.googleapis.com/css?family=Condiment' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Cherry+Cream+Soda' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="css/dinerstyles.css" />
    <!--[if ltIE9]>
	 <script src="http://css3-mediaqueries-js.googlecode.com/files/css3-mediaqueries.js"></script>
	 <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
 </head>

<body>
     <!-- START Header-->
     <header>
      <h1>Megan's Diner</h1>
	     <!-- START Main Navigation -->
	     <nav class="main">
	       <ul>
		     <li><a href="index.html">Welcome</a></li>
		     <li><a href="menu.html">Menu</a></li>
		     <li class="current"><a href="contactus.php">Contact Us</a></li>
		     <li><a href="location.html">Our Location</a></li>
		   </ul>
         </nav>
	     <!-- END Main Navigation -->
     </header>
     <!-- END Header -->
     
   <section class="col-left"> 
  <!-- START Left Column -->
  <div class="contact-form">
    <?php
		include 'includes/contact-simple.php';
		?>
  </div>
  <!-- END Left Column --> 
</section>

<!-- START Right Column -->
<aside>
  <h3>Contact Information</h3>
  <h4><a href="tel:+2069343800">206 934-3800</a></h4>
  <h4>206.934.4395 TTY</h4>
  <address>
  1701 Broadway Seattle, WA 98122
  </address>
</aside>
<!-- END Right Column --> 


     <!-- START Footer -->
     <footer>
     <small>&copy; 2013, All Rights Reserved ~ Megan's Diner</small>
     </footer>
     <!-- END Footer -->
</body>
</html>