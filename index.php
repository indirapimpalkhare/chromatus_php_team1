<!doctype html>
<style>
        * {
            margin: 0;
            padding: 0;
        }
        .imgbox {
            display: grid;
            height: 100%;
        }
        .center-fit {
            max-width: 100%;
            max-height: 245vh;
            margin: auto;
        }
    </style>
<html lang="en">
  <?php require_once('include/header.php'); ?>

    <body>
      <header style="padding-bottom:5px;">
        <?php require_once('include/nav.php'); ?>
      </header>
      <div class="main-content">

        <div class = "row imgbox">
          <div id="carouselHomePage" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="assets/images/placeholder1.jpg" class="center-fit" alt="...">
              </div>
              <div class="carousel-item">
                <img src="assets/images/placeholder2.jpg" class="center-fit" alt="...">
              </div>
              <div class="carousel-item">
                <img src="assets/images/placeholder3.jpg" class="center-fit" alt="...">
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

        <div class="container-fluid text-center">
          <hr>
          <h2>Services</h2>

         <br>
         <div class="container">
          <div class="row">
            <div class="col-sm-4" align="center">
              <img src="assets/images/Widespread_Reach.png" class="img-responsive center" style="width:30% " alt="Widespread Reach">
              <h4>Widespread Reach</h4>
              <p>Leverage our global online press release distribution network to reach readers outside the circle of your regular audiences. Our platform promises a broader global reach with distribution across quality databases and websites.</p>

            </div>
            <div class="col-sm-4" align="center">
               <img src="assets/images/Hefty_ROI.png" class="img-responsive center"  style="width:30% " alt="Hefty ROI">
               <h4>Hefty ROI</h4>
              <p>Besides trust and brand visibility, you can easily build or improve your customer base as your press releases get published over applicable news platforms and receive the right media coverage. We provide you the best returns! </p>

            </div>
            <div class="col-sm-4" align="center">
               <img src="assets/images/Lucrative_Leads.png" class="img-responsive center"  style="width:30% " alt="Lucrative Leads">
               <h4>Lucrative Leads</h4>
              <p>Press release syndication is one of the crucial elements of digital marketing in today’s age of internet. Our result-oriented services increase the effectiveness of your marketing and lead generation strategies.</p>
           </div>
          </div>
        </div>
        </div>
      </div>

    <?php require_once('include/footer.php'); ?>

  </body>
</html>
