<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

  <title>SummitSync - Climb Gallery</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-cyborg-gaming.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

  <!-- Custom Fix for Gallery -->
  <style>
    .climb-gallery {
      margin-top: 40px;
    }

    .climb-gallery h4 {
      color: #fff;
    }

    .climb-gallery .gallery-item {
      margin-bottom: 20px;
      border-radius: 12px;
      overflow: hidden;
      position: relative;
      cursor: pointer;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.4);
      transition: transform 0.3s ease;
    }

    .climb-gallery .gallery-item:hover {
      transform: scale(1.05);
    }

    .climb-gallery .gallery-item img {
      width: 100%;
      display: block;
      border-radius: 12px;
    }

    .climb-gallery .caption {
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      padding: 10px;
      background: rgba(0, 0, 0, 0.6);
      color: #fff;
      font-size: 14px;
      text-align: center;
    }
  </style>
</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">

            <!-- Search -->
            <div class="search-input">
              <form id="search" action="#">
                <input type="text" placeholder="Search climbs, trips..." id="searchText" name="searchKeyword" />
                <i class="fa fa-search"></i>
              </form>
            </div>

            <!-- Menu -->
         <ul class="nav">
                            <li><a href="index" >Dashboard</a></li>
                            <li><a href="trip-explorer">Trip Explorer</a></li>
                            <li><a href="trip-planner">Trip Planner</a></li>
                            <li><a href="gearlist">Gear Checklist</a></li>
                            <li><a href="climb-gallery" class="active">Climb Gallery</a></li>
                            <li><a href="profile">Profile </a>
                            </li>
                            <li><a href="logout">Logout</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
            </a>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">

          <!-- ***** Climb Gallery Start ***** -->
          <div class="row climb-gallery">
            <div class="col-lg-12">
              <div class="heading-section">
                <h4><em>My</em> Climb Gallery</h4>
              </div>
            </div>

            <div class="col-lg-4 col-sm-6">
              <div class="gallery-item">
                <img src="assets/images/climb-01.jpg" alt="Mount Apo Summit">
                <div class="caption">Mount Apo – Summit View</div>
              </div>
            </div>

            <div class="col-lg-4 col-sm-6">
              <div class="gallery-item">
                <img src="assets/images/climb-02.jpg" alt="Mount Pulag Sunrise">
                <div class="caption">Mount Pulag – Sea of Clouds</div>
              </div>
            </div>

            <div class="col-lg-4 col-sm-6">
              <div class="gallery-item">
                <img src="assets/images/climb-03.jpg" alt="Mount Kanlaon Crater">
                <div class="caption">Mount Kanlaon – Crater Rim</div>
              </div>
            </div>

            <div class="col-lg-4 col-sm-6">
              <div class="gallery-item">
                <img src="assets/images/climb-04.jpg" alt="Mount Pinatubo Lake">
                <div class="caption">Mount Pinatubo – Crater Lake</div>
              </div>
            </div>
          </div>
          <!-- ***** Climb Gallery End ***** -->

        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2025 <a href="#">SummitSync</a> Company. All rights reserved.
            <br>Design: <a href="https://templatemo.com" target="_blank"
              title="free CSS templates">TemplateMo</a> Distributed By <a href="https://themewagon.com"
              target="_blank">ThemeWagon</a></p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>

</body>

</html>
