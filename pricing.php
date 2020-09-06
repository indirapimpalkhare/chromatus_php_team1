
<!doctype html>
<html lang="en">
  <?php require_once('include/header.php'); ?>
      
      <header>
        <?php require_once('include/nav.php'); ?>

      </header>
<style>
.pricing-table{
 background-color:#fff;
  min-height: 100vh;
  display: flex;
  align-items: center;
}
@media screen and (max-width:1100px){
  .pricing-card{
    flex: 50%;
  }
}
.pricing-table{
  display: flex;
  flex-wrap:wrap
  justify-content: space-around;
  width: min(1400px, 68%);
  align-items:center;
  margin:auto;
 
}

.pricing-card{
  flex: 1;
  max-width: 300px;
  height:380px;
  background-color: #cce6ff;
  margin: 20px 10px;
  text-align: center;
  cursor: pointer;
  overflow: hidden;
  color: #2d2d2d;
  transition: .3s linear;
}

.pricing-card-header{
  background-color: #4da6ff;
  display: inline-block;
  color: #fff;
  padding: 12px 30px;
  border-radius: 0 0 20px 20px;
  font-size: 16px;
  text-transform: uppercase;
  font-weight: 600;
  transition: .4s linear;
}

.pricing-card:hover .pricing-card-header{
  box-shadow: 0 0 0 15em #4da6ff;
}

.price{
  font-size: 70px;
  color: #4da6ff;
  margin: 40px 0;
  transition: .2s linear;
}

.price sup, .price span{
  font-size: 22px;
  font-weight: 700;
}

.pricing-card:hover ,.pricing-card:hover .price{
  color: #fff;
}

.pricing-card li{
  font-size: 18px;
  padding: 8px 0;
  text-transform: uppercase;
}

.order-btn{
  display: inline-block;
  margin-bottom: 18px;
  margin-top: 15px;
  border: 2px solid #4da6ff;
  color: #4da6ff;
  padding: 15px 35px;
  border-radius: 5px;
  text-transform: uppercase;
  font-weight: 500;
  transition: .3s linear;
}

.order-btn:hover{
  background-color: #4da6ff;
  color: #fff;
}
</style>
      
     <div class="main-content " style="">
        
     <section class="Contact-us">
        <div class="contactus-wrapper">
          <div class="topbanner">
            <div id="page-heading"><h2 class="text-center text-capitalize topbannerheading">Pricing</h2></div>
            <div class="linear-bottom">
              <div class="title-underline"></div>
              <br>
              <div style="color:#4da6ff"><h4>All-inclusive Online PR Distribution</h4></div>
            </div>

          </div>
        
		  <div class="pricing-table">
		    <div class="pricing-card">
		      <h3 class="pricing-card-header">Basic</h3>
		      <div class="price"><sup>$</sup>99<span>/MO</span></div>
		      <ul>
		        <li><strong>1</strong> Press Release</li>
		      </ul>
		      <a href="contact.php" class="order-btn">Order Now</a>
		    </div>

		    <div class="pricing-card">
		      <h3 class="pricing-card-header">Standard</h3>
		      <div class="price"><sup>$</sup>199<span>/MO</span></div>
		      <ul>
		        <li><strong>10</strong> Press Release</li>    
		      </ul>
		      <a href="contact.php" class="order-btn">Order Now</a>
		    </div>

		    <div class="pricing-card">
		      <h3 class="pricing-card-header">Premium</h3>
		      <div class="price"><sup>$</sup>999<span>/MO</span></div>
		      <ul>
		        <li><strong>100</strong> Press Release</li>  
		      </ul>
		      <a href="contact.php" class="order-btn">Order Now</a>
		    </div> 
		  </div>
			
 
        <!-- Contact Us -->     
     
        </div>
        
      </section>
</div>
    <?php require_once('include/footer.php'); ?>
  </body>
</html>