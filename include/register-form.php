<?php
    //echo "inside php";
    //include 'config.php';
    if(isset($_POST['submit']))
    {
        //echo "inside submit if loop";
        $f_name=$_POST['f_name'];
        $l_name=$_POST['l_name'];
        $company=$_POST['company'];
        $mobile=$_POST['mobile'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $country=$_POST['country'];
        $position=$_POST['position'];
        $con = new mysqli("localhost","root","","db_chromatus");

        $query = "insert into user(`f_name`,`l_name`,`company`,`mobile`,`email`,`password`,`country`,`position`) VALUES('$f_name','$l_name','$company','$mobile','$email','$password','$country','$position')";
        $query_run = mysqli_query($con,$query);
        if($query_run)
        {
            echo '<script> alert("data saved"); </script>';
            header('Location:index.php');
        }
        else
        {
            echo '<script> alert("data not saved"); </script>';

        }    

    }

?>


<!DOCTYPE HTML>
<body>



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

        <div class="modal-body mx-2">
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
        <div class="md-form mb-3">
            <input type="email" name="l-email" class="form-control validate" placeholder="Email">
        </div>

        <div class="md-form pb-3">
          <input type="password" name="i-password" class="form-control validate" placeholder=" Password">
          
          <p class="font-small blue-text d-flex justify-content-end">Forgot <a href="#" class="blue-text ml-1"> Password?</a></p>
        </div>

        <div class="text-center mb-3">
          <button type="button" class="btn  btn-primary blue-gradient btn-block btn-rounded z-depth-1a" name="login_bt">Login </button>
        </div>
        <p class="font-small dark-grey-text text-right d-flex justify-content-center mb-3 pt-2"> or Login
          with:
        </p>

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
              <button type="button" id="close_bt" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
        </div>
      </form>    
  </div>
    


       <!--panel 2-->
        <div class="tab-pane fade" id="panel2" role="tabpanel">
        
        <div class="modal-body mx-2">
       
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="text" name="f_name" class="form-control validate" placeholder="First Name" autocomplete="off">
            </div>
            <div class="form-group col-md-6">
                 <input type="text" name="l_name" class="form-control validate" placeholder="Last Name" autocomplete="off">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="text" name="company" class="form-control validate" placeholder="Company Name" autocomplete="off">
            </div>
            <div class="form-group col-md-6">
                <input type="text" name="mobile" class="form-control validate" placeholder="Contact Number" autocomplete="off">
            </div>
        </div>

        <div class="form-row">      
        <div class="form-group col-md-6">
          <input type="email" name="email" class="form-control validate" placeholder="Email" autocomplete="off">
         </div>
        <div class="form-group col-md-6">
          <input type="password" name="password" class="form-control validate" placeholder="Password" autocomplete="off">
        </div>
      </div>

      <div class="form-row">      
        <div class="form-group col-md-6">
          <select class="form-control" id="country" name="country" required >
            <option value="" selected="selected">-- Select Country --</option>
                             <option value=""></option>
                             <option value="Afghanistan">Afghanistan</option>
                             <option value="Albania">Albania</option>
                             <option value="Algeria">Algeria</option>
                             <option value="Andorra">Andorra</option>
                             <option value="Angola">Angola</option>
                             <option value="Argentina">Argentina</option>
                             <option value="Armenia">Armenia</option>
                             <option value="Ascension">Ascension</option>
                             <option value="Australia">Australia</option>
                             <option value="Austria">Austria</option>
                             <option value="Bahrain">Bahrain</option>
                             <option value="Bangladesh">Bangladesh</option>
                             <option value="Belgium">Belgium</option>
                             <option value="Belize">Belize</option>
                             <option value="Benin">Benin</option>
                             <option value="Bhutan">Bhutan</option>
                             <option value="Bolivia">Bolivia</option>
                             <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                             <option value="Brazil">Brazil</option>
                             <option value="Brunei">Brunei</option>
                             <option value="Bulgaria">Bulgaria</option>
                             <option value="Burkina">Burkina</option>
                             <option value="Burundi">Burundi</option>
                             <option value="Cambodia">Cambodia</option>
                             <option value="Cameroon">Cameroon</option>
                             <option value="Canada">Canada</option>
                             <option value="Cape Verde">Cape Verde</option>
                             <option value="Central African Republic">Central African Republic</option>
                             <option value="Chad">Chad</option>
                             <option value="Chile">Chile</option>
                             <option value="China">China</option>
                             <option value="Coate d'Ivoire">Coate d'Ivoire</option>
                             <option value="Colombia">Colombia</option>
                             <option value="Costa Rica">Costa Rica</option>
                             <option value="Croatia">Croatia</option>
                             <option value="Cuba">Cuba</option>
                             <option value="Cyprus">Cyprus</option>
                             <option value="Czech Republic">Czech Republic</option>
                             <option value="Democratic Republic of the Congo">Democratic Republic of the Congo</option>
                             <option value="Denmark">Denmark</option>
                             <option value="Djibouti">Djibouti</option>
                             <option value="Ecuado">Ecuado</option>
                             <option value="Egypt">Egypt</option>
                             <option value="El Salvador">El Salvador</option>
                             <option value="Equatorial Guinea">Equatorial Guinea</option>
                             <option value="Estonia">Estonia</option>
                             <option value="Ethiopia">Ethiopia</option>
                             <option value="Finland">Finland</option>
                             <option value="France">France</option>
                             <option value="French Guiana">French Guiana</option>
                             <option value="Gabon">Gabon</option>
                             <option value="Gambia">Gambia</option>
                             <option value="Germany">Germany</option>
                             <option value="Ghana">Ghana</option>
                             <option value="Gibraltar">Gibraltar</option>
                             <option value="Great Britain (United Kingdom; England)">Great Britain (United Kingdom; England)</option>
                             <option value="Greece">Greece</option>
                             <option value="Guadeloupe">Guadeloupe</option>
                             <option value="Guatemala">Guatemala</option>
                             <option value="Guinea">Guinea</option>
                             <option value="Guinea-Bissau">Guinea-Bissau</option>
                             <option value="Guyana">Guyana</option>
                             <option value="Haiti">Haiti</option>
                             <option value="Honduras">Honduras</option>
                             <option value="Hong Kong">Hong Kong</option>
                             <option value="Hungary">Hungary</option>
                             <option value="Hungary">Hungary</option>
                             <option value="Iceland">Iceland</option>
                             <option value="India">India</option>
                             <option value="Indonesia">Indonesia</option>
                             <option value="Iran">Iran</option>
                             <option value="Iraq">Iraq</option>
                             <option value="Ireland">Ireland</option>
                             <option value="Israel">Israel</option>
                             <option value="Italy">Italy</option>
                             <option value="Japan">Japan</option>
                             <option value="Jordan">Jordan</option>
                             <option value="Kazakhstan">Kazakhstan</option>
                             <option value="Kenya">Kenya</option>
                             <option value="Kuwait">Kuwait</option>
                             <option value="Laos">Laos</option>
                             <option value="Latvia">Latvia</option>
                             <option value="Lebanon">Lebanon</option>
                             <option value="Liberia">Liberia</option>
                             <option value="Libya">Libya</option>
                             <option value="Liechtenstein">Liechtenstein</option>
                             <option value="Lithuania">Lithuania</option>
                             <option value="Luxembourg">Luxembourg</option>
                             <option value="Macao">Macao</option>
                             <option value="Malaysia">Malaysia</option>
                             <option value="Maldives">Maldives</option>
                             <option value="Mali">Mali</option>
                             <option value="Malta">Malta</option>
                             <option value="Martinique">Martinique</option>
                             <option value="Mauritania">Mauritania</option>
                             <option value="Mauritius">Mauritius</option>
                             <option value="Mexico">Mexico</option>
                             <option value="Moldova">Moldova</option>
                             <option value="Monaco">Monaco</option>
                             <option value="Mongolia">Mongolia</option>
                             <option value="Morocco">Morocco</option>
                             <option value="Mozambique">Mozambique</option>
                             <option value="Myanmar (Burma)">Myanmar (Burma)</option>
                             <option value="Nepal">Nepal</option>
                             <option value="Netherlands">Netherlands</option>
                             <option value="New Zealand">New Zealand</option>
                             <option value="Nicaragua">Nicaragua</option>
                             <option value="Niger">Niger</option>
                             <option value="Nigeria">Nigeria</option>
                             <option value="North Korea">North Korea</option>
                             <option value="Norway">Norway</option>
                             <option value="Oman">Oman</option>
                             <option value="Pakistan">Pakistan</option>
                             <option value="Palestinian territories">Palestinian territories</option>
                             <option value="Panama">Panama</option>
                             <option value="Paraguay">Paraguay</option>
                             <option value="Peru">Peru</option>
                             <option value="Poland">Poland</option>
                             <option value="Portugal">Portugal</option>
                             <option value="Principe">Principe</option>
                             <option value="Qatar">Qatar</option>
                             <option value="Republic of Macedonia (FYROM)">Republic of Macedonia (FYROM)</option>
                             <option value="Romania">Romania</option>
                             <option value="Russian Federation">Russian Federation</option>
                             <option value="Rwanda">Rwanda</option>
                             <option value="Saint-Pierre and Miquelon">Saint-Pierre and Miquelon</option>
                             <option value="San Marino">San Marino</option>
                             <option value="Sao Tome">Sao Tome</option>
                             <option value="Saudi Arabia">Saudi Arabia</option>
                             <option value="Senegal">Senegal</option>
                             <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                             <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                             <option value="Seychelles">Seychelles</option>
                             <option value="Sierra Leone">Sierra Leone</option>
                             <option value="Singapore">Singapore</option>
                             <option value="Slovakia">Slovakia</option>
                             <option value="Slovenia">Slovenia</option>
                             <option value="Somalia">Somalia</option>
                             <option value="South Africa">South Africa</option>
                             <option value="South Korea">South Korea</option>
                             <option value="Spain">Spain</option>
                             <option value="Sri Lanka">Sri Lanka</option>
                             <option value="Sudan">Sudan</option>
                             <option value="Suriname">Suriname</option>
                             <option value="Sweden">Sweden</option>
                             <option value="Switzerland">Switzerland</option>
                             <option value="Syria">Syria</option>
                             <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                             <option value="Tajikistan">Tajikistan</option>
                             <option value="Thailand">Thailand</option>
                             <option value="The Philippines">The Philippines</option>
                             <option value="Timor-Leste (East Timor)">Timor-Leste (East Timor)</option>
                             <option value="Togo">Togo</option>
                             <option value="Tunisia">Tunisia</option>
                             <option value="Turkey">Turkey</option>
                             <option value="Uganda">Uganda</option>
                             <option value="Ukraine">Ukraine</option>
                             <option value="United Arab Emirates">United Arab Emirates</option>
                             <option value="United States of America (USA)">United States of America (USA)</option>
                             <option value="Uruguay">Uruguay</option>
                             <option value="Vatican City (The Holy See)">Vatican City (The Holy See)</option>
                             <option value="Venezuela">Venezuela</option>
                             <option value="Vietnam">Vietnam</option>
                             <option value="Yemen">Yemen</option>
                             <option value="Zaire">Zaire</option>
                          </select>
         </div>
        <div class="form-group col-md-6">
          <input type="text" name="position" class="form-control validate" placeholder="Position" autocomplete="off">
        </div>
        </div>

        <div class="text-center mb-3">
          <button type="submit" name="submit" class="btn  btn-primary blue-gradient btn-block btn-rounded z-depth-1a" >
            Submit</button>
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
        </form>
      </div>
      </div>

      </div>
      </div>
    </div>
    </div>
    <!--/.Content-->
  </div>
</div>
</body>
</HTML>

<!--end modal-form-->
