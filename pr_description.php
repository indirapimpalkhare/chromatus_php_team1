<?php
  require_once("Admin-Dashboard/lib/class/functions.php");
  $db = new functions();
  /*if(!isset($_SESSION['current_admin']))
  {
    header("Location:index.php");
  }
if(!isset($_SESSION)){
  session_start();
}*/

  $common_msg ="";
  $common_msg1="";

   if(isset($_GET['pr-id']))
   {
    $pr_id = $_GET['pr-id'];
    $_SESSION['pr_id'] = $pr_id;
   }
   else if(isset($_SESSION['pr_id']))
   {
     $pr_id = $_SESSION['pr_id'];
   }


   $pr_data		=	array();
   $pr_data		=	$db->fetch_pr_full_details_by_id($pr_id);


    $pr_title       = "";
    $pr_author      = "";
    $pr_category    = "";
    $pr_metaDesc    = "";
    $pr_description = "";
    $pr_permalink   = "";
    $pr_date        = "";
    $pr_permalink =  "";



   if(!empty($pr_data))
   {
  $pr_title       = $pr_data[1];
  $pr_author      = $pr_data[2];
  $pr_category    = $pr_data[3];
  $pr_metaDesc    = $pr_data[4];
  $pr_description = $pr_data[5];
  $pr_image    = $pr_data[6];
  $pr_permalink   = $pr_data[7];
  $pr_date        = $pr_data[9];
 
   }



?>

<!doctype html>
<html lang="en">
  <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" type="text/css" href="assets/css/style.css">
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">

      <title>Press Release - Chromatus Consulting</title>

    </head>
    <body>
      <header>
        <?php require_once('include/nav.php'); ?>

      </header>


      <div class="main-content">


        <div class="contactus-wrapper">


            <div  class="container">
                <div class = "row mb-3 mt-5">
                  
                  <div class="col-md-9" >
                    <h3 class="pr-title"><?php echo $pr_title; ?></h3>
                    <span class="text-muted"><i class="fa fa-user fa-0.5x">  By - <?php echo $pr_author; ?></i> &emsp; <i class="fa fa-calendar"></i> <?php echo $pr_date; ?>&emsp; &nbsp; <i class="fa fa-industry"></i> <?php echo $pr_category; ?></span>
                    <hr>
                    <img style="display:block;margin:auto;" class="rounded img-fluid" src="Admin-Dashboard/assets/images/pressRelease/<?php echo $pr_image; ?>" >
                    <p><?php echo $pr_description;?><p>
                  </div>
                  
        
                  
                  <div class="vl col-md-3 mt-5">
                   <div class="cat-box-wrapper">
                    <ul > 
                        <li style="list-style-type:none;" class="pr-box-heading">Latest Releases</li>  
                         <?php
                            $get_pr		=	array();
                            $get_pr		=	$db->get_latest_pr();
                            if(!empty($get_pr))
                            {
                              $counter	=	0;
                              foreach($get_pr as $record)
                              {
                                if($counter<3)
                                {

                                $got_id				=   $get_pr[$counter][0];
                                $got_pr_title	    =	$get_pr[$counter][1];
                                $got_pr_author	    =	$get_pr[$counter][2];
                                $got_pr_permalink 	= 	$get_pr[$counter][7];
                                $date_added 		= 	$get_pr[$counter][8];
                                $date_modified		= 	$get_pr[$counter][9];

                           ?>


                              <div class="card-body">
                                <a href="pr_description.php?pr-id=<?php echo $got_id ?>"  class="card-title"><?php echo $got_pr_title ?> </a>
                                <p class="card-text"><small>  <i class="fa fa-calendar">  <?php echo $date_modified; ?></i> &nbsp;  By- <?php echo $got_pr_author; ?> </small></p>

                                <hr>
                              </div>
                                <?php
                                  $counter++;
                                }
                                }
                              }?>
                       
                        
                    </ul>
                    <br>
                     <ul class="pr-box-list"> 
                        <li class="pr-box-heading">Category</li>  
                        
                        <a href="pressRelease.php?pr-category=All"><li class="pr-box-item <?php if($category == 'All'){ echo "pr-box-item-active"; } ?>"><i class="fa fa-angle-double-right cat-box-fa"></i> <span class="pr-box-item-text">All</span></li></a>
                        <?php
                            $get_category = $db->fetch_pr_category();
                            if(!empty($get_category))
                            {
                                $counter    =   0;
                                  
                                foreach($get_category as $record)
                                {
                                    $result_category  =   $get_category[$counter][1];
                                    $fa  =   $get_category[$counter][3];
                                  

                        ?>  
                                    <a href="pressRelease.php?pr-category=<?php echo $result_category ?>"  ><li class="pr-box-item <?php if($category == $result_category){echo "pr-box-item-active"; }?>"><i class="<?php echo $fa ?>"></i> <span class="pr-box-item-text"><?php echo $result_category ?></span></li></a>   
                        <?php
                                    $counter++;
                                }
                              
                            }
                            else
                            {
                        ?>  
                                <option value="">Empty Cateogry</option>
                        <?php
                            }               
                        ?>
                        
                    </ul>
                    </div>
                            
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php require_once('include/footer.php'); ?>
  </body>
</html>


