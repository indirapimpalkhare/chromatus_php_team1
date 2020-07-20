<!doctype html>
<html lang="en">
  <?php require_once('include/header.php'); ?>
    <body>
      <header>
        <?php require_once('include/nav.php'); ?>
      </header>


      <div class="main-content">
          
          <div class = "row pt-4 mt-4">
            <div id="carouselHomePage" class="carousel slide carousel-fade" data-ride="carousel" style="height:200px;">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="assets/images/placeholder1.jpg" class="w-100" style="height:200px;" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="assets/images/placeholder2.jpg" class="w-100" style="height:200px;" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="assets/images/placeholder3.jpg" class="w-100" style="height:200px;" alt="...">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselHomePage" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselHomePage" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
          <div class = "row m-4 pt-4 mt-4">
            <div class = "col-md-8 align-self-start">
              <div class="card">
                <div class="card-header">
                  Latest Report
                </div>
                <div class="card-body">
                  <h5 class="card-title">Placeholder</h5>
                  <p class="card-text">Placeholder</p>
                  <a href="#" class="btn btn-primary">Go</a>
                </div>
              </div>
            </div>
            <div class = "col-md-4 align-self-end">
              <div class="card">
                <div class="card-header">
                  Press Release
                </div>
                <div class="card-body">
                  <h5 class="card-title">Placeholder</h5>
                  <p class="card-text">Placeholder</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
          </div>
        </div>
   





    <?php require_once('include/footer.php'); ?>
  </body>
</html>