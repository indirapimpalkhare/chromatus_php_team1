<!doctype html>
<html lang="en">
  <?php require_once('include/header.php'); ?>

    <body>
      <header>
        <?php require_once('include/nav.php'); ?>

      </header>


      <div class="main-content">
        
      
        <!-- Contact Us -->     
      
        <div class="contactus-wrapper">
          <div class="topbanner">
            <div id="page-heading"><h2 class="text-center text-capitalize topbannerheading">Contact Us</h2></div>
            <div class="linear-bottom">
              <div class="title-underline"></div>
            </div>
          </div>
          <br><br>
          
          <div class="container ">
            <div class="row">
              <div class="col-md-7 col-12 align-self-start">
                <form method="post">
                  <div class="form-row">
                      <div class="form-group col-md-6">
                        <input type="text" class="form-control" required id="name" name="name" placeholder="Name*" autocomplete="off">
                      </div>
                      <div class="form-group col-md-6">
                        <input type="text" class="form-control" required id="email" name="email" placeholder="Email*" autocomplete="off">
                      </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                          <input type="text" class="form-control" required id="mobno" name="mobno" placeholder="Mobile No*" autocomplete="off">
                        </div>
                        <div class="form-group col-md-6">
                          <input type="text" class="form-control" required id="companyname" name="companyname" placeholder="Company Name*" autocomplete="off">
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
                          <input type="text" class="form-control" id="position" name="position" placeholder="Position*" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group">
                      <textarea class="form-control" id="message" name="message" placeholder="Comments *" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck" required>
                        <label class="form-check-label" for="gridCheck">
                          You must accept our <a href="#">privacy policies</a> before submit your requirement
                        </label>
                      </div>
                    </div>
                    <button type="submit" class="btn form-btn">Submit</button>
                </form>
              </div>
              <div class="col-sm-1"></div>
              <div class="col-md-4 col-12 ">
                <h4>Contact Us!</h4>
                     <p>Contact us and we'll get back to you within 24 hours.</p>
      
                     <div class="footercno" style="color:#0076D9;"><a href="mailto:info@chromatus.com " target="_top"><i class="fa fa-envelope" aria-hidden="true" style="color: #000;"></i>&nbsp;&nbsp;info@chromatus.com  </a></div>
                     
                     <div class="footercno" style="margin-top: 15px;color:#0076D9;"><a href="tel:++917498465144"><i class="fa fa-phone" aria-hidden="true" style="color: #000;"></i>&nbsp;&nbsp;+91 7498465144&nbsp;&nbsp;</a></div>
                     <hr>
                     <h4>Follow us on social media</h4><h6>&nbsp;</h6>
                    <a href="https://www.facebook.com/QYResearchOfficial/" class="fa fa-facebook-official fa-2x fa-icon con_icon"></a> &nbsp;&nbsp;
                    <a href="https://twitter.com/QYResearch_" class="fa fa-twitter-square fa-2x fa-icon con_icon"></a> &nbsp;&nbsp;
                    <a href="https://www.linkedin.com/company/qyresearch/" class="fa fa-linkedin-square fa-2x fa-icon con_icon"></a> &nbsp;&nbsp;
                   
                   </div>
              </div>
            </div>
          </div>      
          <br>

          <!--Contact Us Ends-->
           
          <!-- Location Start -->

          <div class="container-fluid text-center location-container mt-3">
            <h2 class="text-center text-capitalize topbannerheading">Our Locations</h2>
            <div class="linear-bottom">
                <div class="title-underline"></div>
            </div><br>
            <div class="location-div">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d472.99137604245936!2d73.80630025699554!3d18.48678401682259!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bfbcbc7df805%3A0x9d69dd4f8eec8d18!2sSAI+SHILPA+APARTMENT!5e0!3m2!1sen!2sin!4v1556619517810!5m2!1sen!2sin"></iframe>
            </div>
          </div>
          <br>
         
          <!--Location Ends-->
      
      
      
        </div>
      
    <?php require_once('include/footer.php'); ?>
  </body>
</html>