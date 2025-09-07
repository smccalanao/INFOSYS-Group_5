<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

  <title>SummitSync - Trip Planner</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-cyborg-gaming.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/animate.css">

  <!-- Sticky Navbar Fix -->
  <style>
    .header-area {
      position: sticky;
      top: 0;
      z-index: 9999;
      background-color: #1f2122;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
    }

    .menu-trigger {
      z-index: 10000;
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

            <!-- ***** Search Start ***** -->
            <div class="search-input">
              <form id="search" action="#">
                <input type="text" placeholder="Search climbs, trips..." id='searchText' name="searchKeyword" />
                <i class="fa fa-search"></i>
              </form>
            </div>
            <!-- ***** Search End ***** -->

            <!-- ***** Menu Start ***** -->
          <ul class="nav">
                            <li><a href="/" >Dashboard</a></li>
                            <li><a href="trip-explorer">Trip Explorer</a></li>
                            <li><a href="trip-planner"class="active">Trip Planner</a></li>
                            <li><a href="gearlist">Gear Checklist</a></li>
                            <li><a href="climb-gallery">Climb Gallery</a></li>
                            <li><a href="profile">Profile </a>
                            </li>
                            <li><a href="logout">Logout</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->

          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <!-- ***** Trip Planner Content Start ***** -->
  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">

          <div class="heading-section">
            <h4><em>Plan</em> Your Trip</h4>
          </div>

          <form action="#" method="POST" class="p-4 bg-dark text-light rounded">
            <div class="row">
              <!-- Destination -->
              <div class="col-md-6 mb-3">
                <label class="form-label">Select Destination</label>
                <select class="form-control">
                  <option>Mount Apo</option>
                  <option>Mount Pulag</option>
                  <option>Mount Kanlaon</option>
                  <option>Other...</option>
                </select>
              </div>

              <!-- Start Date -->
              <div class="col-md-3 mb-3">
                <label class="form-label">Start Date</label>
                <input type="date" class="form-control">
              </div>

              <!-- End Date -->
              <div class="col-md-3 mb-3">
                <label class="form-label">End Date</label>
                <input type="date" class="form-control">
              </div>

              <!-- Companions -->
              <div class="col-md-6 mb-3">
                <label class="form-label">Companions</label>
                <input type="text" class="form-control" placeholder="Enter companion names">
              </div>

              <!-- Gear -->
              <div class="col-md-6 mb-3">
                <label class="form-label">Assign Gear Responsibilities</label>
                <input type="text" class="form-control" placeholder="e.g. John - Tent, Anna - Food">
              </div>

              <!-- Notes -->
              <div class="col-12 mb-3">
                <label class="form-label">Notes / Reminders</label>
                <textarea class="form-control" rows="4" placeholder="Any important details..."></textarea>
              </div>
            </div>

            <button type="submit" class="btn btn-primary">Save Trip</button>
            <button type="reset" class="btn btn-secondary">Clear</button>
          </form>

        </div>
      </div>
    </div>
  </div>
  <!-- ***** Trip Planner Content End ***** -->

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
