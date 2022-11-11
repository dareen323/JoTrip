<!doctype html>
<html lang="en">

  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title', 'JoTrip')</title>

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">
    <!-- MAIN CSS -->
   <!-- Font Awesome -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
rel="stylesheet"
/>
<!-- Google Fonts -->
<link
href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
rel="stylesheet"
/>
<!-- MDB -->


    <link rel="stylesheet" href="css/style.css">
    @yield('head')
  </head>
  <style>
  @media screen and (max-width: 300px) {
    .heading-39101 .backdrop{
  font-size: 0;
    }
   
  }
</style>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      <header class="site-navbar site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-3 ">
              <div class="site-logo">
                <a href="/" class="font-weight-bold">
                  <img src="images/logo_size3.jpg" alt="Image" class="img-fluid">
                </a>
              </div>
            </div>

            <div class="col-9  text-right">
              

              <span class="d-inline-block d-lg-none"><a href="/" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>

              

              <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto ">
                  <li class="active"><a href="/" class="nav-link">Home</a></li>
                  <li><a href="about" class="nav-link">About</a></li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="trips">OurTrips</a></li>
                      {{-- <li><a class="dropdown-item" href="#">TourGiudeTrips</a></li> --}}
                      <li><a class="dropdown-item" href="#">Our Shop</a></li>
                    
                    </ul>
                  </li>
                  <li><a href="blog" class="nav-link">Blog</a></li>
                  <li><a href="contact" class="nav-link">Contact</a></li>
                  <li><a href="profile" class="nav-link">Profile</a></li>
                  <a href="book" class="link"> <i class="fas fa-cart-plus"></i></a>
                </ul>
              </nav>
            </div>

            
          </div>
        </div>
      </header>
      <main>
        @yield('content')
      </main>

<footer class="site-footer bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <h2 class="footer-heading mb-3">Instagram</h2>
          <div class="row">
            <div class="col-4 gal_col">
              <a href="#"><img src="images/insta_1.jpg" alt="Image" class="img-fluid"></a>
            </div>
            <div class="col-4 gal_col">
              <a href="#"><img src="images/insta_2.jpg" alt="Image" class="img-fluid"></a>
            </div>
            <div class="col-4 gal_col">
              <a href="#"><img src="images/insta_3.jpg" alt="Image" class="img-fluid"></a>
            </div>
            <div class="col-4 gal_col">
              <a href="#"><img src="images/insta_4.jpg" alt="Image" class="img-fluid"></a>
            </div>
            <div class="col-4 gal_col">
              <a href="#"><img src="images/insta_5.jpg" alt="Image" class="img-fluid"></a>
            </div>
            <div class="col-4 gal_col">
              <a href="#"><img src="images/insta_6.jpg" alt="Image" class="img-fluid"></a>
            </div>
          </div>
        </div>
        <div class="col-lg-8 ml-auto">
          <div class="row">
            <div class="col-lg-6 ml-auto">
              <h2 class="footer-heading mb-4">Quick Links</h2>
              <ul class="list-unstyled">
                <li><a href="about">About Us</a></li>
                <li><a href="/">Home</a></li>
                <li><a href="trips">Trips</a></li>
                <li><a href="conact">Contact Us</a></li>
              
              </ul>
            </div>
            <div class="col-lg-6">
              <h2 class="footer-heading mb-4">Newsletter</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt odio iure animi ullam quam, deleniti rem!</p>
              <form action="#" class="d-flex" class="subscribe">
                <input type="text" class="form-control mr-3" placeholder="Email">
                <input type="submit" value="Send" class="btn btn-primary">
              </form>
            </div>
            
          </div>
        </div>
      </div>
      <div class="row pt-5 mt-5 text-center">
        <div class="col-md-12">
          <div class="border-top pt-5">
            <p>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | JoTrip 
          <!-- <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="#" target="_blank" > Dareen</a>  -->
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
          </div>
        </div>

      </div>
    </div>
  </footer>

  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.0.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  @yield('script')
</body>

</html>
