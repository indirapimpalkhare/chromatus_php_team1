<!doctype html>
<html lang="en">
 
    <style type="text/css">
 *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Open Sans",sans-serif;
  text-decoration: none;
  list-style: none;
}

body{
 background-color:#fff;
  min-height: 100vh;
  display: flex;
  align-items: center;
}

.pricing-table{
  display: flex;
  flex-wrap:wrap
  justify-content: space-around;
  width: min(1400px, 80%);
  align-items:center;
  margin:auto;
 
}

.pricing-card{
  flex: 1;
  max-width: 340px;
  height:330px;
  background-color: #e6f9ff;
  margin: 20px 10px;
  text-align: center;
  cursor: pointer;
  overflow: hidden;
  color: #2d2d2d;
  transition: .3s linear;
}

.pricing-card-header{
  background-color: #0fbcf9;
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
  box-shadow: 0 0 0 12em #0fbcf9;
}

.price{
  font-size: 70px;
  color: #0fbcf9;
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
  font-size: 16px;
  padding: 8px 0;
  text-transform: uppercase;
}

.order-btn{
  display: inline-block;
  margin-bottom: 15px;
  margin-top: 26px;
  border: 2px solid #0fbcf9;
  color: #0fbcf9;
  padding: 15px 35px;
  border-radius: 5px;
  text-transform: uppercase;
  font-weight: 500;
  transition: .3s linear;
}

.order-btn:hover{
  background-color: #0fbcf9;
  color: #fff;
}

@media screen and (max-width:1100px){
  .pricing-card{
    flex: 50%;
  }
}

</style>
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
 
</body>
</html>