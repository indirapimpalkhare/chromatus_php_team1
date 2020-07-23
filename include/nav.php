
<!--Navbar Starts-->
<div class="fixed-top">

      <ul class="navbar navbar-light bg-light navbar-expand-lg nav nav-fill">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
        </button>
        <li class="nav-item"> <a class="navbar-brand" href="index.php"><img class="w-75" src="assets/images/logo.png"></a></li>


        <div class="collapse navbar-collapse" id="navbarSupportedContent1">
        <li class="nav-item">
          <a class="nav-link text-primary" href="mailto:info@chromatus.com"><i class="fa fa-envelope ">&nbsp;&nbsp;info@chromatus.com </i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-primary" href="tel:7498465144"><i class="fa fa-phone">&nbsp;&nbsp;+91-7498465144</i></a>
        </li>
        <div class="nav justify-content-center">
          <li class="nav-item">
            <a class="nav-link text-primary" href="https://www.linkedin.com/company/chromatusconsulting" target="_blank"><i class="fa fa-linkedin-square  fa-2x"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-primary" href="https://www.facebook.com/Chromatus-Consulting-100467295012830" target="_blank"><i class="fa fa-facebook-official  fa-2x"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-primary" href="https://twitter.com/Chromatus12" target="_blank"><i class="fa fa-twitter-square  fa-2x"></i></a>
          </li>
        </div>
        <li class="nav-item  ">

          <a href="#" data-target="#elegantModalForm" data-toggle="modal" class="nav-link btn btn-primary " >Register/Login</a>
        </li>
      </div>
      </ul>
  <!--1st Nav Ends-->

  <!--2nd Nav Starts-->

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarsExample05">
      <div class="container-fluid ">
      <ul class="navbar-nav ">
        <li class="nav-item mr-4">
          <a class="nav-link text-white" href="#">Why Us!</a>
        </li>
        <li class="nav-item mr-4">
          <a class="nav-link text-white" href="pressRelease.php">Press Release</a>
        </li>
        <li class="nav-item mr-4">
          <a class="nav-link text-white" href="#">Blogs</a>
        </li>
       <li class="nav-item mr-4 dropdown">
	       <a class="nav-link text-white dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Industries</a>
	       <div class="dropdown-menu bg-dark ">
	             <a class="dropdown-item text-white bg-dark small" href="#">Category1</a>
	             <div class="dropdown-divider"></div>
	             <a class="dropdown-item text-white bg-dark small" href="#">Category2</a>
	             <div class="dropdown-divider"></div>
	             <a class="dropdown-item text-white bg-dark small" href="#">Category3</a>
	             <div class="dropdown-divider"></div>
	             <a class="dropdown-item text-white bg-dark small" href="#">Category4</a>
	             <div class="dropdown-divider "></div>
	             <a class="dropdown-item text-white bg-dark small" href="#">Category5</a>
	        </div>
	    </li>
        <li class="nav-item mr-4">
          <a class="nav-link text-white" href="contact.php">Contact Us!</a>
        </li>
      </ul>

      <form class="form-inline">
	     <input class="form-control mr-sm-2 " type="search" placeholder="Search" aria-label="Search">
	    <a href="#" class=" form-control btn btn-outline-primary my-2 my-sm-0  " type="submit"><i class="fa fa-search"></i></a>
	  </form>
      </div>
    </div>
  </nav>

  <!--2nd Nav Ends-->
</div>
<!--Navbar Ends-->
<!--avoid-overflow is to avoid Content going under fixed navbar-->
<div class="avoid-overflow"></div>




<!-- start Model-form-->
<div class="modal fade" id="elegantModalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog cascading-modal" role="document">
    <!--Content-->
    <div class="modal-content">

      <!--modal cascading content-->
      <div class="modal-c-tabs">

        <!--nav tabs-->
        <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#panel1" role="tab">Login</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#panel2" role="tab">Register</a>
          </li>

        </ul>
    
        <!--Tab panels-->
        <div class="tab-content">

          <!--panel 1-->
          <div class="tab-pane fade in show active" id="panel1" role="tabpanel">

      <!--Body-->
      <div class="modal-body mx-2">
        <!--Body-->
        <div class="md-form mb-3">
        
          <input type="email" id="Form-email1" class="form-control validate">
          <label data-error="wrong" data-success="right" for="Form-email1">Your email</label>
        </div>

        <div class="md-form pb-3">
          <input type="password" id="Form-pass1" class="form-control validate">
          <label data-error="wrong" data-success="right" for="Form-pass1">Your password</label>
          <p class="font-small blue-text d-flex justify-content-end">Forgot <a href="#" class="blue-text ml-1"> Password?</a></p>
        </div>

        <div class="text-center mb-3">
          <button type="button" class="btn  btn-primary blue-gradient btn-block btn-rounded z-depth-1a">Login </button>
        </div>
        <p class="font-small dark-grey-text text-right d-flex justify-content-center mb-3 pt-2"> or Login
          with:</p>

        <div class="row my-3 d-flex justify-content-center">
          <!--Facebook-->
          <button type="button" class="btn btn-primary  btn-rounded mr-md-3 z-depth-1a"><i class="fa fa-facebook-official text-center"></i></button>

          <!--Google +-->
          <button type="button" class="btn btn-danger btn-rounded mr-md-3 z-depth-1a"><i class="fa fa-google-plus"></i></button>

          <!--Twitter-->
          <button type="button" class="btn btn-primary btn-rounded mr-md-3 z-depth-1a"><i class="fa fa-twitter"></i></button>
          
        </div>
      </div>
      <!--Footer of login_pg-->
       <div class="modal-footer">
              <div class="options text-center text-md-right mt-1">
                <p>Not a member? <a href="" class="blue-text">Register</a></p>
                
              </div>
              <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
            </div>
        
      </div>
  


       <!--panel 2-->
          <div class="tab-pane fade" id="panel2" role="tabpanel">
      <!--Body-->
      <div class="modal-body mx-2">
        <!--Body-->
        <div class="md-form mb-3">
        
          <input type="text" id="Form-name" class="form-control validate">
          <label data-error="wrong" data-success="right" for="Form-name">Your Name</label>
        </div>

        <div class="md-form mb-3">
        
          <input type="email" id="Form-email1" class="form-control validate">
          <label data-error="wrong" data-success="right" for="Form-email1">Your Email</label>
        </div>

        <div class="md-form pb-3">
          <input type="password" id="Form-pass1" class="form-control validate">
          <label data-error="wrong" data-success="right" for="Form-pass1">Your password</label>
          
        </div>

        <div class="md-form mb-3">
        
          <input type="password" id="Form-pass2" class="form-control validate">
          <label data-error="wrong" data-success="right" for="Form-pass2">Confirm Password</label>
        </div>

        <div class="text-center mb-3">
          <button type="button" class="btn  btn-primary blue-gradient btn-block btn-rounded z-depth-1a">Submit</button>
        </div>

        <p class="font-small dark-grey-text text-right d-flex justify-content-center mb-3 pt-2"> or Sign up
          with:</p>

        <div class="row my-3 d-flex justify-content-center">
          <!--Facebook-->
          <button type="button" class="btn btn-primary  btn-rounded mr-md-3 z-depth-1a"><i class="fa fa-facebook-official text-center"></i></button>

          <!--Google +-->
          <button type="button" class="btn btn-danger btn-rounded mr-md-3 z-depth-1a"><i class="fa fa-google-plus"></i></button>

          <!--Twitter-->
          <button type="button" class="btn btn-primary btn-rounded mr-md-3 z-depth-1a"><i class="fa fa-twitter"></i></button>
          
        </div>

        <!--footter of reg_pg-->
        <div class="modal-footer">
              <div class="options text-center text-md-right mt-1">
                <p>Already have a account? <a href="" class="blue-text">Login</a></p>
                
              </div>
              <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
            </div>
        
      </div>
      </div>
      
      </div>
      </div>
    </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!--end modal-form-->