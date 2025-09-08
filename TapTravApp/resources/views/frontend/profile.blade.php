<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

  <title>SummitSync - Profile</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-cyborg-gaming.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

  <!-- Profile Page Styling -->
  <style>
    /* Make header sticky */
.header-area {
    position: sticky;  /* Sticks to top */
    top: 0;            /* Top of the viewport */
    z-index: 9999;     /* Above other content */
    background-color: #1f2122; /* Match your template background */
    box-shadow: 0 2px 5px rgba(0,0,0,0.3); /* Optional shadow */
}

/* Optional: ensure menu-trigger works on sticky header */
.menu-trigger {
    z-index: 10000;
}

    .profile-card {
      margin-top: 40px;
      background: #1f2122;
      padding: 30px;
      border-radius: 20px;
      text-align: center;
      color: #fff;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.5);
    }

    .profile-card img {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 15px;
      border: 3px solid #fff;
    }

    .profile-card h4 {
      margin-bottom: 5px;
    }

    .profile-details {
      margin-top: 30px;
      background: #27292a;
      padding: 20px;
      border-radius: 12px;
    }

    .profile-details h5 {
      margin-bottom: 15px;
      border-bottom: 1px solid #444;
      padding-bottom: 5px;
      color: #B5C7A6;
    }

    .profile-details p {
      margin: 5px 0;
      font-size: 14px;
      color: #ccc;
    }

    .edit-btn {
      margin-top: 20px;
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
                <input type="text" placeholder="Search climbs, trips..." id='searchText' name="searchKeyword" />
                <i class="fa fa-search"></i>
              </form>
            </div>

            <!-- Menu -->
         <ul class="nav">
                            <li><a href="/" >Dashboard</a></li>
                            <li><a href="trip-explorer">Trip Explorer</a></li>
                            <li><a href="trip-planner">Trip Planner</a></li>
                            <li><a href="gearlist">Gear Checklist</a></li>
                            <li><a href="climb-gallery">Climb Gallery</a></li>
                            <li><a href="profile"class="active">Profile </a>
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

          <!-- Profile Card -->
          <div class="profile-card">
            <img src="assets/images/profile-header.jpg" alt="Profile Picture">
            <h4>Juan Dela Cruz</h4>
            <p>Beginner Mountaineer | Manila, PH</p>
            <button class="btn btn-primary edit-btn">Edit Profile</button>
          </div>

          <!-- Profile Details -->
          <div class="profile-details mt-4">
            <h5>Personal Information</h5>
            <p><strong>Fitness Level:</strong> Intermediate</p>
            <p><strong>Gear Owned:</strong> Tent, Backpack, Trekking Poles</p>
            <p><strong>Climbing Goals:</strong> Summit Mt. Apo by 2025</p>
            <p><strong>Emergency Contact:</strong> Maria Dela Cruz (0917-123-4567)</p>
          </div>

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
