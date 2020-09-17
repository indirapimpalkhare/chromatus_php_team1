<?php
  require_once("Admin-Dashboard/lib/class/functions.php");
  $db = new functions();

  $category = 'All';
  if(isset($_GET['news-category']))
  {
    $category = $_GET['news-category'];    
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
          <div class="topbanner">
            <div id="page-heading"><h2 class="text-center text-capitalize topbannerheading">News</h2></div>
            <div class="linear-bottom">
              <div class="title-underline"></div>
            </div>
          </div>
          
            <div  class="container">
                <div class = "row mb-3">
                  <div class="col-md-3 ">
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
                        <a href="news.php?news-category=<?php echo $result_category ?>"  ><li class="cat-box-item <?php if($category == $result_category){echo "cat-box-item-active"; }?>"><i class="fa fa-angle-double-right cat-box-fa"></i> <span class="cat-box-item-text"><?php echo $result_category ?></span></li></a>   
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
                      <div class="row">
                        <?php
                              if($category == 'All')
                              {
                                $get_news=$db->fetch_news_records();
                              }
                              else
                              {
                              $get_news = $db->fetch_news_records_by_name($category);
                              }
                              if(!empty($get_news))
                              {
                                  $counter    =   0;
                                  
                                  foreach($get_news as $record)
                                  {
                                      $result_id        =   $get_news[$counter][0];
                                      $result_title     =   $get_news[$counter][1];
                                      $result_category  =   $get_news[$counter][2];
                                      $result_metadesc  =   $get_news[$counter][3];
                                      $result_desc      =   $get_news[$counter][4];
                                      $result_date      =   $get_news[$counter][6];
                                  

                        ?>  
                        <div class="col-lg-4 col-md-6 col-sm-6 news-card" id="Blogs-cards" style="padding :5px;">
                        <div class="card cd2">
                          <div class="card-body">
                            <p class="card-text"><small><i class="fa fa-calendar" aria-hidden="true"></i><?php echo $result_date; ?></small></p>
                            <a href="news-desc.php?news-id=<?php echo $result_id; ?>"><h5 class="card-title"><?php echo $result_title; ?></h5></a>
                            <p class="card-text"><small><?php echo $result_metadesc; ?> </small></p>
                          </div>
                        </div>
                      </div>
                      <?php
                              $counter++;
                              }
                              
                          }
                          else
                          {
                        ?> 
                        <h3 class="text-center">No News Available</h3> 
                        <?php
                          }
                        ?>

                                                   
                    </div>    
                    </div>
                  </div>
                </div>
              </div>
            </div>
        <?php require_once('include/footer.php'); ?>
  </body>
</html>