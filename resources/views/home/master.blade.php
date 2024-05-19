<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- ===============================================-->
  <!--    Document Title-->
  <!-- ===============================================-->
  <title>Khabaar.Com</title>


  <!-- ===============================================-->
  <!--    Favicons-->
  <!-- ===============================================-->
  <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
  <link rel="manifest" href="assets/img/favicons/manifest.json">
  <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
  <meta name="theme-color" content="#ffffff">


  <!-- ===============================================-->
  <!--    Stylesheets-->
  <!-- ===============================================-->
  <link href="assets/css/theme.css" rel="stylesheet" />

  <!--==================================================-->
      {{-- food menu things --}}
  {{-- <link rel="stylesheet" type="text/css" href="menu-css/bootstrap.css" /> --}}
  <!-- Custom styles for this template -->
  <link href="menu-css/style.css" rel="stylesheet" />
  <!-- ==================================================-->

</head>


<body>

  <!-- ===============================================-->
  <!--Main Content-->
  <!-- ===============================================-->
  <main class="main" id="top">

    {{-- ========================================== --}}
            @yield('nav')
    {{-- ========================================== --}}

    <section class="py-5 overflow-hidden bg-primary" id="home">
      <div class="container">
        <div class="row flex-center">
          <div class="col-md-5 col-lg-6 order-0 order-md-1 mt-8 mt-md-0"><a class="img-landing-banner" href="#!"><img
                class="img-fluid" src="assets/img/gallery/hero-header.png" alt="hero-header" /></a></div>
          <div class="col-md-7 col-lg-6 py-8 text-md-start text-center">
            <h1 class="display-1 fs-md-5 fs-lg-6 fs-xl-8 text-light">Are you starving?</h1>
            <h1 class="text-800 mb-5 fs-4">Within a few clicks, find meals that<br class="d-none d-xxl-block" />are
              accessible near you</h1>
            <div class="card w-xxl-75">
              <div class="card-body">
                <nav>
                  <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active mb-3" id="nav-home-tab" data-bs-toggle="tab"
                      data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                      aria-selected="true"><i class="fas fa-motorcycle me-2"></i>Delivery</button>
                    <button class="nav-link mb-3" id="nav-profile-tab" data-bs-toggle="tab"
                      data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                      aria-selected="false"><i class="fas fa-shopping-bag me-2"></i>Pickup</button>
                  </div>
                </nav>
                <div class="tab-content mt-3" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <form class="row gx-2 gy-2 align-items-center">
                      <div class="col">
                        <div class="input-group-icon"><i class="fas fa-map-marker-alt text-danger input-box-icon"></i>
                          <label class="visually-hidden" for="inputDelivery">Address</label>
                          <input class="form-control input-box form-foodwagon-control" id="inputDelivery" type="text"
                            placeholder="Enter Your Address" />
                        </div>
                      </div>
                      <div class="d-grid gap-3 col-sm-auto">
                        <button class="btn btn-danger" type="submit">Find Food</button>
                      </div>
                    </form>
                  </div>
                  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <form class="row gx-4 gy-2 align-items-center">
                      <div class="col">
                        <div class="input-group-icon"><i class="fas fa-map-marker-alt text-danger input-box-icon"></i>
                          <label class="visually-hidden" for="inputPickup">Address</label>
                          <input class="form-control input-box form-foodwagon-control" id="inputPickup" type="text"
                            placeholder="Enter Your Address" />
                        </div>
                      </div>
                      <div class="d-grid gap-3 col-sm-auto">
                        <button class="btn btn-danger" type="submit">Find Food</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- ============================================-->
    <!-- <section> begin ============================-->
        {{-- @include('home.offers') --}}
    <!-- <section> close ============================-->
    <!-- ============================================-->

    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="py-0 bg-primary-gradient">

      <div class="container">
        <div class="row justify-content-center g-0">
          <div class="col-xl-9">
            <div class="col-lg-6 text-center mx-auto mb-3 mb-md-5 mt-4">
              <h5 class="fw-bold text-danger fs-3 fs-lg-5 lh-sm my-6">How does it work</h5>
            </div>
            <div class="row">
              <div class="col-sm-6 col-md-3 mb-6">
                <div class="text-center"><img class="shadow-icon" src="assets/img/gallery/location.png" height="112"
                    alt="..." />
                  <h5 class="mt-4 fw-bold">Select location</h5>
                  <p class="mb-md-0">Choose the location where your food will be delivered.</p>
                </div>
              </div>

              <div class="col-sm-6 col-md-3 mb-6">
                <div class="text-center"><img class="shadow-icon" src="assets/img/gallery/order.png" height="112"
                    alt="..." />
                  <h5 class="mt-4 fw-bold">Choose order</h5>
                  <p class="mb-md-0">Check over hundreds of menus to pick your favorite food</p>
                </div>
              </div>

              <div class="col-sm-6 col-md-3 mb-6">
                <div class="text-center"><img class="shadow-icon" src="assets/img/gallery/pay.png" height="112"
                    alt="..." />
                  <h5 class="mt-4 fw-bold">Pay advanced</h5>
                  <p class="mb-md-0">It's quick, safe, and simple. Select several methods of payment</p>
                </div>
              </div>

              <div class="col-sm-6 col-md-3 mb-6">
                <div class="text-center"><img class="shadow-icon" src="assets/img/gallery/meals.png" height="112"
                    alt="..." />
                  <h5 class="mt-4 fw-bold">Enjoy meals</h5>
                  <p class="mb-md-0">Food is made and delivered directly to your home.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->




    <!-- ============================================-->
    <!-- <section> begin ============================-->
      @include('home.popular')
    <!-- <section> close ============================-->
    <!-- ============================================-->

      @include('home.testimonial')
    

    <!-- ============================================-->
    <!-- <section> begin ============================-->
       @include('home.food-menu')
    <!-- <section> close ============================-->
    <!-- ============================================-->


    <section>
      <div class="bg-holder"
        style="background-image:url(assets/img/gallery/cta-one-bg.png);background-position:center;background-size:cover;">
      </div>
      <!--/.bg-holder-->

      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xxl-10">
            <div class="card card-span shadow-warning" style="border-radius: 35px;">
              <div class="card-body py-5">
                <div class="row justify-content-evenly">
                  <div class="col-md-3">
                    <div class="d-flex d-md-block d-xl-flex justify-content-evenly justify-content-lg-between"><img
                        src="assets/img/icons/discounts.png" width="100" alt="..." />
                      <div class="d-flex d-lg-block d-xl-flex flex-center">
                        <h2 class="fw-bolder text-1000 mb-0 text-gradient">Daily<br
                            class="d-none d-md-block" />Discounts </h2>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 hr-vertical">
                    <div class="d-flex d-md-block d-xl-flex justify-content-evenly justify-content-lg-between"><img
                        src="assets/img/icons/live-tracking.png" width="100" alt="..." />
                      <div class="d-flex d-lg-block d-xl-flex flex-center">
                        <h2 class="fw-bolder text-1000 mb-0 text-gradient">Live Tracking</h2>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 hr-vertical">
                    <div class="d-flex d-md-block d-xl-flex justify-content-evenly justify-content-lg-between"><img
                        src="assets/img/icons/quick-delivery.png" width="100" alt="..." />
                      <div class="d-flex d-lg-block d-xl-flex flex-center">
                        <h2 class="fw-bolder text-1000 mb-0 text-gradient">Quick Delivery </h2>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row flex-center mt-md-8">
          <div class="col-lg-5 d-none d-lg-block" style="margin-bottom: -122px;"> <img class="w-100"
              src="assets/img/gallery/phone-cta-one.png" alt="..." /></div>
          <div class="col-lg-5 mt-7 mt-md-0">
            <h1 class="text-primary">Install the app</h1>
            <p>It's never been easier to order food. Look for the finest <br class="d-none d-xl-block" />discounts and
              you'll be lost in a world of delectable food.</p><a class="pe-2" href="https://www.apple.com/app-store/"
              target="_blank"><img src="assets/img/gallery/app-store.svg" width="160" alt="" /></a><a
              href="https://play.google.com/store/apps" target="_blank"><img src="assets/img/gallery/google-play.svg"
                width="160" alt="" /></a>
          </div>
        </div>
      </div>
    </section>


    <!-- ============================================-->
    <!-- <section> begin ============================-->
    @include('home.advertise')
    <!-- <section> close ============================-->
    <!-- ============================================-->


    <section class="py-0">
      <div class="bg-holder"
        style="background-image:url(assets/img/gallery/cta-two-bg.png);background-position:center;background-size:cover;">
      </div>
      <!--/.bg-holder-->

      <div class="container">
        <div class="row flex-center">
          <div class="col-xxl-9 py-7 text-center">
            <h1 class="fw-bold mb-4 text-white fs-6">Are you ready to order <br />with the best deals? </h1><a
              class="btn btn-danger" href="#"> PROCEED TO ORDER<i class="fas fa-chevron-right ms-2"></i></a>
          </div>
        </div>
      </div>
    </section>


    <!-- ============================================-->
    <!-- <section> begin ============================-->
        @yield('footer')
    <!-- <section> close ============================-->
    <!-- ============================================-->


  </main>
  <!-- ===============================================-->
  <!--    End of Main Content-->
  <!-- ===============================================-->




  <!-- ===============================================-->
  <!--    JavaScripts-->
  <!-- ===============================================-->
  <script src="vendors/@popperjs/popper.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.min.js"></script>
  <script src="vendors/is/is.min.js"></script>
  <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
  <script src="vendors/fontawesome/all.min.js"></script>
  <script src="assets/js/theme.js"></script>

  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400;600;700;900&amp;display=swap"
    rel="stylesheet">
  <!-- ===============================================-->
  <!--for food menu-->
  <!-- ===============================================-->
  <!-- jQery -->
  <script src="menu-js/jquery-3.4.1.min.js"></script>
  </script>
  <!-- isotope js -->
  <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script> 

<!-- // isotope js -->
  <script>
   var $grid = $(".grid").isotope({
        itemSelector: ".all",
        percentPosition: false,
        masonry: {
            columnWidth: ".all"
        }
    })
  $(window).on('load', function () {
    $('.filters_menu li').click(function () {
        $('.filters_menu li').removeClass('active');
        $(this).addClass('active');

        var data = $(this).attr('data-filter');
        $grid.isotope({
            filter: data
        })
    });

    $('.filters_menu li:first-child').trigger('click');
});
  </script>


</body>

</html>