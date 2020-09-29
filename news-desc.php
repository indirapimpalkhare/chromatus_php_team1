<?php
  require_once("Admin-Dashboard/lib/class/functions.php");
  $db = new functions();
  
   
  $common_msg ="";
  $common_msg1="";
  
   if(isset($_GET['news-id']))
   {
    $news_id = $_GET['news-id'];    
    $_SESSION['news_id'] = $news_id;
   }
   else if(isset($_SESSION['news_id']))
   {
     $news_id = $_SESSION['news_id'];
   }
   
   
  $news_data    = array();
  $news_data    = $db->fetch_news_full_details_by_id($news_id);
      
  
  $result_title       = "";
  $result_cate        = "";
  $result_metaDesc    = "";
  $result_description = "";
  $result_permalink   = "";
  $result_date        = "";

  
  if(!empty($news_data))
  { 
     
  $result_title       = $news_data[1];
  $result_cate        = $news_data[2];
  $result_metaDesc    = $news_data[3];
  $result_description = $news_data[4];
  $result_permalink   = $news_data[5];
  $result_date        = $news_data[6];
   
      
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

      <title>News - Chromatus Consulting</title>

    </head>
    <body>
      <header>
        <?php require_once('include/nav.php'); ?>

      </header>


      <div class="main-content">
        
        <!-- Blogs -->     
        <br>
        <div class="contactus-wrapper">
          
          
            <div  class="container">
                <div class = "row mb-3 mt-5">
                  <div class="col-md-3 mt-5">
                   <div class="cat-box-wrapper">
                     <ul class="cat-box-list"> 
                        <li class="cat-box-heading">Category</li>
                        <a href="news.php?news-category=All" ><li class="cat-box-item <?php if($category == 'All'){ echo "cat-box-item-active"; } ?>"><i class="fa fa-angle-double-right cat-box-fa"></i> <span class="cat-box-item-text">All</span></li></a>
                        <?php
                              $get_category = $db->fetch_news_category();
                              if(!empty($get_category))
                              {
                                  $counter    =   0;
                                  
                                  foreach($get_category as $record)
                                  {
                                      $result_category  =   $get_category[$counter][1];
                                  

                        ?>  
                        <a href="news.php?news-category=<?php echo $result_category ?>" ><li class="cat-box-item <?php if($category == $result_category){echo "cat-box-item-active"; }?>"><i class="fa fa-angle-double-right cat-box-fa"></i> <span class="cat-box-item-text"><?php echo $result_category ?></span></li></a>   
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
                  <div class="col-md-9" >
                    <h3 class="news-title"><?php echo $result_title; ?></h3>
                    <span class="text-muted"><i class="fa fa-calendar"></i> <?php echo $result_date; ?>&nbsp;&nbsp;&nbsp;  <i class="fa fa-industry"></i> <?php echo $result_cate; ?></span>
                    <hr>
                    <p><?php echo $result_description;?><p>     
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php require_once('include/footer.php'); ?>
  </body>
</html>