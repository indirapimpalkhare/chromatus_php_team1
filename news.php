<?php
    require_once("Admin-Dashboard/lib/class/functions.php");
    $db = new functions();

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
                  <div class="col-md-4 ">
                   <div class="cat-box-wrapper">
                     <ul class="cat-box-list"> 
                        <li class="cat-box-heading">Category</li>
                        <?php
                              $get_category = $db->fetch_news_category();
                              if(!empty($get_category))
                              {
                                  $counter    =   0;
                                  
                                  foreach($get_category as $record)
                                  {
                                      $result_category  =   $get_category[$counter][1];
                                  

                        ?>  
                        <li class="cat-box-item"><i class="fa fa-angle-double-right cat-box-fa"></i> <span class="cat-box-item-text"><?php echo $result_category ?></span></li>   
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
                  <div class="col-md-8" >
                      <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6" id="Blogs-cards" style="padding :0px;">
                        <div class="card cd2">
                          <div class="card-body">
                            <p class="card-text"><small><i class="fa fa-calendar" aria-hidden="true"></i>01-01-2020</small></p>
                            <h5 class="card-title">News title</h5>
                            <p class="card-text"><small>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </small></p>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-6 col-sm-6" id="Blogs-cards" style="padding:0px;">
                        <div class="card cd2">
                          <div class="card-body">
                            <p class="card-text"><small><i class="fa fa-calendar" aria-hidden="true"></i>01-01-2020</small></p>
                            <h5 class="card-title">News title</h5>
                            <p class="card-text"><small>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</small></p>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-6 col-sm-6" id="Blogs-cards" style="padding:0px;">
                        <div class="card cd2">
                          <div class="card-body">
                            <p class="card-text"><small><i class="fa fa-calendar" aria-hidden="true"></i>01-01-2020</small></p>
                            <h5 class="card-title">News title</h5>
                            <p class="card-text"><small>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</small></p>
                          </div>
                        </div>
                      </div>
                        <div class="col-lg-4 col-md-6 col-sm-6" id="Blogs-cards" style="padding:0px;">
                        <div class="card cd2">
                          <div class="card-body">
                            <p class="card-text"><small><i class="fa fa-calendar" aria-hidden="true"></i>01-01-2020</small></p>
                            <h5 class="card-title">News title</h5>
                            <p class="card-text"><small>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</small></p>
                          </div>
                        </div>
                      </div> 
                        <div class="col-lg-4 col-md-6 col-sm-6" id="Blogs-cards" style="padding:0px;">
                        <div class="card cd2">
                          <div class="card-body">
                            <p class="card-text"><small><i class="fa fa-calendar" aria-hidden="true"></i>01-01-2020</small></p>
                            <h5 class="card-title">News title</h5>
                            <p class="card-text"><small>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</small></p>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-6 col-sm-6" id="Blogs-cards" style="padding:0px;">
                        <div class="card cd2">
                          <div class="card-body">
                            <p class="card-text"><small><i class="fa fa-calendar" aria-hidden="true"></i>01-01-2020</small></p>
                            <h5 class="card-title">News title</h5>
                            <p class="card-text"><small>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</small></p>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-6 col-sm-6" id="Blogs-cards" style="padding:0px;">
                        <div class="card cd2">
                          <div class="card-body">
                            <p class="card-text"><small><i class="fa fa-calendar" aria-hidden="true"></i>01-01-2020</small></p>
                            <h5 class="card-title">News title</h5>
                            <p class="card-text"><small>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</small></p>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-6 col-sm-6" id="Blogs-cards" style="padding:0px;">
                        <div class="card cd2">
                          <div class="card-body">
                            <p class="card-text"><small><i class="fa fa-calendar" aria-hidden="true"></i>01-01-2020</small></p>
                            <h5 class="card-title">News title</h5>
                            <p class="card-text"><small>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</small></p>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-6 col-sm-6" id="Blogs-cards" style="padding:0px;">
                        <div class="card cd2">
                          <div class="card-body">
                            <p class="card-text"><small><i class="fa fa-calendar" aria-hidden="true"></i>01-01-2020</small></p>
                            <h5 class="card-title">News title</h5>
                            <p class="card-text"><small>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</small></p>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-6 col-sm-6" id="Blogs-cards" style="padding:0px;">
                        <div class="card cd2">
                          <div class="card-body">
                            <p class="card-text"><small><i class="fa fa-calendar" aria-hidden="true"></i>01-01-2020</small></p>
                            <h5 class="card-title">News title</h5>
                            <p class="card-text"><small>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</small></p>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-6 col-sm-6" id="Blogs-cards" style="padding:0px;">
                        <div class="card cd2">
                          <div class="card-body">
                            <p class="card-text"><small><i class="fa fa-calendar" aria-hidden="true"></i>01-01-2020</small></p>
                            <h5 class="card-title">News title</h5>
                            <p class="card-text"><small>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</small></p>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-6 col-sm-6" id="Blogs-cards" style="padding:0px;">
                        <div class="card cd2">
                          <div class="card-body">
                            <p class="card-text"><small><i class="fa fa-calendar" aria-hidden="true"></i>01-01-2020</small></p>
                            <h5 class="card-title">News title</h5>
                            <p class="card-text"><small>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</small></p>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-6 col-sm-6" id="Blogs-cards" style="padding:0px;">
                        <div class="card cd2">
                          <div class="card-body">
                            <p class="card-text"><small><i class="fa fa-calendar" aria-hidden="true"></i>01-01-2020</small></p>
                            <h5 class="card-title">News title</h5>
                            <p class="card-text"><small>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</small></p>
                          </div>
                        </div>
                      </div>                           
                    </div>    
                    </div>
                  </div>
                </div>
              </div>
            </div>
        <?php require_once('include/footer.php'); ?>
  </body>
</html>