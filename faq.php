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

        <title>FAQ - Chromatus Consulting</title>
    </head>
    <body>
      <header>
        <?php require_once('include/nav.php'); ?>
      </header>


      <div class="main-content" style="">
        <div class="container " style="min-height: 75vh">
          <h1 class="text-center"><u> FAQ's </u></h1>
        <div class="accordion" id="accordionExample">
  
  
    <?php
            
        $get_faq=$db->fetch_faq_records();
                                
        if(!empty($get_faq))
        {
                                  
            $counter    =   0;
                                  
            foreach($get_faq as $record)
            {
                                      
                $faq_id    =   $get_faq[$counter][0];
                $question  =   $get_faq[$counter][1];   
                $answer    =   $get_faq[$counter][2];
                $status    =   $get_faq[$counter][3];

                ?>
   
                <div class="card mb-1">
                <div class="card-header h-30" id="headingOne">
                    <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <?php echo $counter+1 . ". " . $question; ?>
                    </button>
                    </h2>
                </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                        <?php echo $answer; ?>
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
            <div class="oops-text"> 
            <span class="text-center">Oops!! No FAQ's Available Right Now!!!!! </span> 
            </div>
        <?php
        }
        ?>
 

</div>
</div>
</div>  
   <?php require_once('include/footer.php'); ?>
  </body>
</html>
