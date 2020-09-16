<!DOCTYPE html>
<html lang="en">
 
<head>
    <title> Chromatus Consulting | Add</title>

 

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="files/bower_components/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="files/assets/icon/themify-icons/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="files/assets/icon/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="files/assets/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="files/assets/pages/chart/radial/css/radial.css" type="text/css" media="all">
    <link rel="stylesheet" type="text/css" href="files/assets/css/style.css">
	
   <style >
    .card{
        width: 100%;
        padding: 20px;
        margin:auto;
    
    }
     
     
   </style> 
    }
    

</head>

<body>

    <div class="theme-loader">
        <div class="loader-track">
            <div class="loader-bar"></div>
        </div>
    </div>

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
				<?php require_once('include/navigation.php'); ?>	
					
				<div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    
					<?php require_once('include/dashboard-left-part.php'); ?>
				
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">

                            <div class="main-body">
                                <div class="page-wrapper">    
                                 <div class="card"> 
                                <form>
                                <div class="form-row">
                                     <div class="form-group col-md-4 offset-md-4 form-div">
                                        <div class="form-group">
                                         <input type="text" id="title" class="form-control validate" placeholder="Enter Title" autocomplete="off">
                                        </div>
                                
                                        <div class="form-group">
                                         <input type="text" id="category" class="form-control validate" placeholder="Enter Category" autocomplete="off">
                                           </div> 
                                
                                         <div class="form-group">
                                         <input type="text" id="author" class="form-control validate" placeholder="Enter Author" autocomplete="off">
                                           </div> 

                                            <div class="form-group">
                                         <textarea class="form-control" id="metadata" class="form-control validate" placeholder="Enter Metadata Description" autocomplete="off" rows="4"></textarea>
                                        </div> 
                                
                                        
                                        <div class="form-group">
                                         <textarea class="form-control" id="Description" class="form-control validate" placeholder="Enter  Description" autocomplete="off" rows="4"></textarea>
                                        </div>
                            
                                    
                                        <div class="form-group">
                                         <label for="img">Upload Image:</label>
                                            <input type="file" id="img" name="img" multiple><br><br>  
                                            </div>      
                               
                                    <div class="row">
                                    <div class="form-group col-md-6">
                                    <button type="button" class="btn  btn-primary blue-gradient btn-block btn-rounded z-depth-1a" href="#">Submit</button>
                                    </div>
                                    
                                    <div class="form-group col-md-6">
                                    <button type="button" class="btn  btn-Basic blue-gradient btn-block btn-rounded z-depth-1a" href=#"">Reset</button>
                                    </div>
                                   </div>

                            </div>
                            </div>
                                            
                            </form>
                        </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="files/bower_components/jquery/js/jquery.min.js"></script>
    <script src="files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
    <script src="files/bower_components/popper.js/js/popper.min.js"></script>
    <script src="files/bower_components/bootstrap/js/bootstrap.min.js"></script> 
    <script src="files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
    <script src="files/assets/js/SmoothScroll.js"></script>
    <script src="files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="files/assets/js/pcoded.min.js"></script>
    <script src="files/assets/js/navbar-image/vertical-layout.min.js"></script>
    <script src="files/assets/pages/dashboard/custom-dashboard.js"></script>
    <script src="files/assets/js/script.js"></script>
    
</body>
</html>