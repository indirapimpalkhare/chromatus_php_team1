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
        
          <input type="email" id="Form-email2" class="form-control validate">
          <label data-error="wrong" data-success="right" for="Form-email2">Your Email</label>
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