<!doctype html>
<html lang="en">
  <?php require_once('include/header.php'); ?>
      
      <header>
        <?php require_once('include/nav.php'); ?>

      </header>
<style>

  

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body{
  background: #fff;
  
}

.wrapper{
  margin-top: 50px;
  text-align: center;
  line-height: 20px;
}

.wrapper h1{
  
  font-size: 52px;
  margin-bottom: 25px;
  letter-spacing: 10px;
}

.wrapper h1+p{
  width: 60%;
  margin: 0 auto 50px;
  color: #fff;
}

.wrapper .pricing_wrapper{
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}

.wrapper .pricing_wrapper .pricing_item{
  background: #fff;
  margin: 5px 10px;
  margin-bottom: 50px;
  width: 320px;
  padding: 30px 20px;
  box-shadow: 0 0 2px rgba(0,0,0,0.25);
}

.wrapper .pricing_wrapper .pricing_item h3{
  font-size: 26px;
}

.wrapper .pricing_wrapper .pricing_item p.money{
  margin: 50px 0 20px;
  font-size: 52px;
  color: #248f8f;
}

.wrapper .pricing_wrapper .pricing_item p.money span{
  font-size: 14px;
  color: #000000;
}

.wrapper .pricing_wrapper .pricing_item p{
  color: #000000;
  font-size: 20px;
}

.wrapper .pricing_wrapper .pricing_item a.btn{
  display: block;
  margin-top: 20px;
  text-decoration: none;
  color: #fff;
  background: #248f8f;
  padding: 12px;
  border-radius: 15px;
  
}

 .wrapper .pricing_wrapper .pricing_item:hover {
  box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2)
}

</style>
      
       <div class="main-content " style="">
        <br>   
       <section class="Contact-us">
          <div class="contactus-wrapper">
            <div class="topbanner">
              <div id="page-heading"><h2 class="text-center text-capitalize topbannerheading">Pricing</h2></div>
              <div class="linear-bottom">
                <div class="title-underline"></div>
                <br>
                <div style="color:#000000"><h4>All-inclusive Online PR Distribution</h4></div>
              </div>

            </div>
          
        
        <div class="wrapper">
      
     <div class="pricing_wrapper">
       <div class="pricing_item">
         <h2><b>Basic</b></h2>
         <p class="money">
           $99<br><span>per month</span>
         </p>
         <p> 
              <h5>1 Press Release</h5>   
            
         </p>
         <br>
          <a href="contact.php" class="btn">Contact Us</a>
       </div>

       <div class="pricing_item">
         <h2><b>Standard</b></h2>
         <p class="money">
           $199<br><span>per month</span>
         </p>
         <p>
          
              <h5>10 Press Release</h5>   
            
         </p>
         <br>
         <a href="contact.php" class="btn">Contact Us</a>
       </div>
       
       <div class="pricing_item">
         <h2><b>Premium</b></h2>
         <p class="money">
           $999<br><span>per month</span>
         </p>
         
           <p>
          
              <h5>100 Press Release</h5>   
            
         </p>
         <br>
         <a href="contact.php" class="btn">Contact Us</a>
       </div>
    </div>
    
  </div>
  </div>
  </section>
   </div>
      <?php require_once('include/footer.php'); ?>
  </body>
  </html>