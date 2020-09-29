<?php
  require_once("Admin-Dashboard/lib/class/functions.php");
  $db = new functions();

  $category = 'All';
  if(isset($_GET['pr-category']))
  {
    $category = $_GET['pr-category'];    
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&display=swap" rel="stylesheet"> 


  <title>Press Release - Chromatus Consulting</title>
</head>


  <body>

    <section class="header">
      <?php require_once('include/nav.php'); ?>
    </section>
    <div class="main-content">
	 <br>
        <div class="contactus-wrapper">
			<div class="topbanner">
            <div id="page-heading"><h2 class="text-center text-capitalize topbannerheading">Press Release</h2></div>
            <div class="linear-bottom">
              <div class="title-underline"></div>
            </div>
          </div>
		<div  class="container">
        <div class = "row mb-5">
            <div class="col-md-4">
                <div class="pr-box-wrapper">
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


            <div class="col-md-8">
			 <div class="row">
                 <div class="col">
                  <?php
                 
                              if($category == 'All')
                              {
                                $get_pr=$db->fetch_pr_records();
                                
                              }
                              else
                              {
                                $get_pr = $db->fetch_pr_records_by_name($category);
                                  
                              }
                                
                              if(!empty($get_pr))
                              {
                                  
                                  $counter    =   0;
                                  
                                  foreach($get_pr as $record)
                                  {
                                      
                                      $result_id        =   $get_pr[$counter][0];
                                      $result_title     =   $get_pr[$counter][1];   
                                      $result_author    =   $get_pr[$counter][2];
                                      $result_category  =   $get_pr[$counter][3];
                                      $result_metadesc  =   $get_pr[$counter][4];
                                      $result_desc      =   $get_pr[$counter][5];
                                      $result_image     =   $get_pr[$counter][6];
                                      $result_permalink =   $get_pr[$counter][7];
                                      $result_date_added=   $get_pr[$counter][8];
                                      $result_date_modi =   $get_pr[$counter][9];
                                      $result_status    =   $get_pr[$counter][10];

                ?>
               
                <div class="pr-card" >
                    <div style="font-family: 'Noto Sans', sans-serif;" ><?php echo $result_title; ?></div>
                    <div pr-card-text> &nbsp; <i class="fa fa-user fa-0.5x"> <?php echo $result_author; ?>  </i> &nbsp; &emsp; <i class="fa fa-calendar">  <?php echo $result_date_added; ?></i></div>
					<div class="row pr-card-body">
                        <img class="pr-card-image col-8 col-md-8 col-lg-4" src="Admin-Dashboard/assets/images/pressRelease/<?php echo $result_image; ?>" alt="Press Release Image">
                        <p class="pr-card-text  col-12 col-md-8 col-lg-8"><?php echo $result_metadesc; ?></p>
					</div>
					<div class="row">
                         <div class="ml-auto mr-3"><a href="pr_description.php?pr-id=<?php echo $result_id; ?>" class="pr-card-btn">Read More..</a></div>
                    </div>
                </div>
				<hr>
				<?php
                                    $counter++;
                              }
                              
                          }
                          else
                          {
                        ?>
                        <div class="oops-text"> 
                        <span class="text-center">Oops!! No PR Available Right Now!!!!! </span> 
                        </div>
                        <?php
                          }
                        ?>
              
            
                <div>
                    Page : 
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