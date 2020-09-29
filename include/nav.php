<?php
  require_once("Admin-Dashboard/lib/class/functions.php");
  $db = new functions();
  $contact_data = array();
  $contact_data = $db->get_contact_links();

  $result_linkedIn  = "";
  $result_fb      = "";
  $result_twitter   = "";
  $result_mobno     = "";
  $result_email_link  = "";

  if(!empty($contact_data))
  { 
    
    $result_linkedIn  = $contact_data[1];
    $result_fb        = $contact_data[2];
    $result_twitter   = $contact_data[3];
    $result_mobno       = $contact_data[4];
    $result_email_link  = $contact_data[5];
    
  }
?>
<!--Navbar Starts-->
	<section id="header">
		<div class="">
			<div class="nav nav-justified navbar-expand-lg mx-5 mt-1 ">
				<div class="navbar-nav mx-auto">
				    <a class="navbar-brand " href="index.php"><img src="assets/images/logo.png"></a>
			    </div>
   				<div class="collapse navbar-collapse">
		        <div class="nav-item header-item">
		          <a class="nav-link  header-link " href="mailto:<?php echo $result_email_link; ?>"><i class="fa fa-envelope ">&nbsp;&nbsp;<?php echo $result_email_link; ?> </i></a>
		        </div>
		        <div class="nav-item header-item">
		          <a class="nav-link header-link"href="tel:<?php echo $result_mobno; ?>"><i class="fa fa-phone">&nbsp;&nbsp;+91-<?php echo $result_mobno; ?></i></a>
		        </div>

		        <div class="nav-item">
		            <div class="row">
		            	<div class="nav-item header-item">
		            		<a class="header-icon linkedin-icon " href="<?php echo $result_linkedIn;?>" target="_blank"><i class="fa fa-linkedin-square  fa-2x"></i></a>
		        	    	<a class="header-icon fb-icon " href="<?php echo $result_fb; ?>" target="_blank"><i class="fa fa-facebook-official  fa-2x"></i></a>
		         			<a class="header-icon twitter-icon" href="<?php echo $result_twitter; ?>" target="_blank"><i class="fa fa-twitter-square  fa-2x"></i></a>
		        		</div>
		        	</div>
		        </div>
			</div>
				<a href="#" class=" header-btn" id='header-btn'data-target="#elegantModalForm" data-toggle="modal"></a>

		</div>
		</div>
    </section>
  <!--1st Nav Ends-->

  <!--2nd Nav Starts-->
	<section class="navbar-container ">
  <nav class="navbar navbar-expand-lg navbar-light bg-custom-2">
    <button class="navbar-toggler text-white" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarsExample05">
      <div class="container-fluid">
      <ul class="navbar-nav">
        <li class="nav-item mr-4">
          <a class="nav-link link-block " href="why_us.php">Why Us!</a>
        </li>
        <li class="nav-item mr-4">
          <a class="nav-link link-block" href="pressRelease.php">Press Release</a>
        </li>
        <li class="nav-item mr-4">
          <a class="nav-link link-block" href="blogs.php">Blogs</a>
        </li>
        <li class="nav-item mr-4">
          <a class="nav-link link-block"  href="pricing.php">Pricing</a>
        </li>
       <li class="nav-item mr-4">
	       	<a class="nav-link link-block" href="news.php">News</a>
	    </li>
        <li class="nav-item mr-4">
          <a class="nav-link link-block" href="contact.php">Contact Us!</a>
        </li>
      </ul>

      <form class="form-inline">
	     <input class="form-control mr-sm-2 " type="search" placeholder="Search" aria-label="Search">
	    <a href="#" class=" form-control btn header-btn my-2 my-sm-0  " type="submit"><i class="fa fa-search "></i></a>
	  </form>
      </div>
    </div>
  </nav>
</section>
  <!--2nd Nav Ends-->

<!--Navbar Ends-->
<div class="none">
</div>
<!--register Form-->
<?php require_once('register-form.php'); ?>
<!--register Form Ends-->
