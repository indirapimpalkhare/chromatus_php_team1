<!doctype html>
<style>

        .imgbox {
            display: grid;
            height: auto;
        }
        .center-fit {
            max-width: 100%;
            min-width: 100%;
            height: auto;
            max-height: 80vh;
        }
        .our_services{
          margin: 0;
          padding: 0;
          font-family: "montserrat",sans-serif;
        }
        .services{
          background: #f1f1f1;
          text-align: center;
        }
        .services h1{
          display: inline-block;
          text-transform: uppercase;
          border-bottom: 4px solid #1c5e80;
          font-size: 30px;
          padding-bottom: 10px;
          margin-top: 40px;
        }
        .cen{
          max-width: 1200px;
          margin: auto;
          overflow: hidden;
          padding: 10px;
        }
        .service{
          display: inline-block;
          width: calc(100% / 3);
          margin: 0 -5px;
          padding: 30px;
          box-sizing: border-box;
          cursor: pointer;
          transition: 0.4s;
        }
        .service:hover{
          background: #ddd;
        }
        .service i{
          color: #1c5e80;
          font-size: 34px;
          margin-bottom: 30px;
        }
        .service h2{
          font-size: 18px;
          text-transform: uppercase;
          font-weight: 500;
          margin: 0;
        }
        .service p{
          color: gray;
          font-size: 15px;
          font-weight: 500;
        }
        @media screen and (max-width: 800px) {
          .service{
            width: 50%;
          }
        }
        @media screen and (max-width: 500px) {
          .service{
            width: 100%;
          }
        }
    </style>
<html lang="en">
  <?php require_once('include/header.php'); ?>

    <body>
        <!--Header Start-->
        <?php require_once('include/nav.php'); ?>
        <!--Header Ends-->

        <div class = "imgbox">
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

        <div class="our_services">
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
         <br>
         <div class="services">
            <h1>Our Services</h1>
            <div class="cen">
              <div class="service">
                <i class="fa fa-newspaper-o" aria-hidden = "true"></i>
                <h2>Annual Subscription</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
              </div>

              <div class="service">
                <i class=""></i>
                <h2>Competitive Benchmarking</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
              </div>

              <div class="service">
                <i class="fa fa-user-circle-o"></i>
                <h2>CSR Consulting</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
              </div>

              <div class="service">
                <i class="fas fa-apple-alt"></i>
                <h2>Customer Satisfaction Surveys</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
              </div>

              <div class="service">
                <i class="fa fa-globe"></i>
                <h2>Customized Consulting</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
              </div>

              <div class="service">
                <i class="fa fa-line-chart"></i>
                <h2>Data Mining &amp; Analytics</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
              </div>

              <div class="service">
                <i class="far fa-angry"></i>
                <h2>Field Survey</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
              </div>

              <div class="service">
                <i class="fa fa-book"></i>
                <h2>Knowledge Warehouse</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
              </div>

              <div class="service">
                <i class="fa fa-file-text-o"></i>
                <h2>Lead Generation</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php require_once('include/footer.php'); ?>

  </body>
</html>
