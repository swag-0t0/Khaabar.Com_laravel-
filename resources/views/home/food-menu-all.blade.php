<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="menu-images/favicon.png" type="">

  <title>All Dishes</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="menu-css/bootstrap.css" />
  <!-- Custom styles for this template -->
  <link href="menu-css/style.css" rel="stylesheet" />
  <link href="assets/css/theme.css" rel="stylesheet" />
  <link href="menu-css/style.css" rel="stylesheet" />

</head>

<body>
    
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" data-navbar-on-scroll="data-navbar-on-scroll">
    <div class="container"><a class="navbar-brand d-inline-flex" href="index.html"><img class="d-inline-block"
          src="assets/img/gallery/Logo.png" width="200px" height="60px" alt="logo" /><span
          class="text-1000 fs-3 fw-bold ms-2 text-gradient"></span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
          class="navbar-toggler-icon"> </span></button>
      <div class="collapse navbar-collapse border-top border-lg-0 my-2 mt-lg-0" id="navbarSupportedContent">
        <div class="mx-auto pt-5 pt-lg-0 d-block d-lg-none d-xl-block">
          <p class="mb-0 fw-bold text-lg-center">Deliver to: <i
              class="fas fa-map-marker-alt text-warning mx-2"></i><span class="fw-normal">Current Location
            </span><span>Mirpur 1 Bus Stand, Dhaka</span></p>
        </div>
        <form class="d-flex mt-4 mt-lg-0 ms-lg-auto ms-xl-0 align-items-center"">
          <div class="input-group-icon pe-2 align-items-center">
            <i class="fas fa-search input-box-icon text-primary" style="vertical-align: middle;"></i>
            <input class="form-control border-0 input-box bg-100" type="search" placeholder="Search Food"
              aria-label="Search" />
          </div>
            
        </form>
       
        {{-- 
        ---------there will be created a dropdown for user thus may he/she logout        
        --}}
        <ul class="d-flex align-items-center" style="list-style-type: none;">
           <li class="nav-item dropdown pe-3">
   
              <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
               <!-- <img src="admin-assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">-->
                {{-- <span class="d-none d-md-block dropdown-toggle ps-2">{{$username}}</span> --}}
                <span class="d-none d-md-block dropdown-toggle ps-2">{{$username}}</span>
              </a> 
              
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                <li>
                  <a class="dropdown-item d-flex align-items-center" href="{{ route('cart')}}"">
                    <i class="bi bi-gear"></i>
                    <span>My Cart</span>
                  </a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>   
                <li>
                  <a class="dropdown-item d-flex align-items-center" href="{{ url('/') }}">
                    <i class="bi bi-box-arrow-right"></i>
                    <span>Sign Out</span>
                  </a>
                </li>
   
              </ul>
            </li>
   
        </ul>
                {{-- end of dropdown --}}
      
      </div>
    </div>
  </nav>
  
  <!-- food section -->

  <section class="food_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          In Stock
        </h2>
      </div>

     
      <div class="filters-content">
        <div class="row grid">
            @foreach ($food as $item)
            
                <div class="col-sm-6 col-lg-4 all {{strtolower($item->food_type)}}">
                    
                    <div class="box">
                        <form id="add-to-cart-form" action="{{route('addcart',$item->id)}}" method="POST" >
                          @csrf
                         <div>
                            <div class="img-box">
                                <img src="allfoods_image/{{ $item->image }}" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>{{ $item->food_name }}</h5>
                                <p>{{ $item->description }}</p>
                                <div class="options">
                                    <h6>{{ $item->price }}</h6>                    
                                    <a href="#" class="add-to-cart" data-id="{{ $item->id }}" data-name="{{ $item->food_name }}" data-price="{{ $item->price }}" data-image="allfoods_image/{{ $item->image }}">
                                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                                        <g>
                                        <g>
                                            <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                                        c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                                        </g>
                                        </g>
                                        <g>
                                        <g>
                                            <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                                        C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                                        c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                                        C457.728,97.71,450.56,86.958,439.296,84.91z" />
                                        </g>
                                        </g>
                                        <g>
                                        <g>
                                            <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                                        c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                                        </g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                    </svg>
                                    </a>      
                                                                                             
                                </div>
                            </div>
                          </div>
                        </form> 
                    </div>
                     
                </div>
                                   
            @endforeach
        </div>
    </div>
     


    </div>
  </section>


  <!-- end food section -->


    <section class="py-0 pt-7 bg-1000">

      <div class="container">
        <div class="row justify-content-lg-between">
          <h5 class="lh-lg fw-bold text-white">OUR TOP CITIES</h5>
          <div class="col-6 col-md-4 col-lg-auto mb-3">
            <ul class="list-unstyled mb-md-4 mb-lg-0">
              <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">San Francisco</a></li>
              <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Miami</a></li>
              <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">San Diego</a></li>
      
            </ul>
          </div>
          <div class="col-6 col-md-4 col-lg-auto mb-3">
            <ul class="list-unstyled mb-md-4 mb-lg-0">
              <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Los Angeles</a></li>
              <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Washington DC</a></li>
              <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Seattle</a></li>
              
            </ul>
          </div>
          <div class="col-6 col-md-4 col-lg-auto mb-3">
            <ul class="list-unstyled mb-md-4 mb-lg-0">
              <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">New York City</a></li>
              <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Orange County</a></li>
              <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Atlanta</a></li>
         
            </ul>
          </div>
          <div class="col-6 col-md-4 col-lg-auto mb-3">
            <ul class="list-unstyled mb-md-4 mb-lg-0">
              <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Chicago</a></li>
              <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Phoenix</a></li>
              <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Las Vegas</a></li>
             
            </ul>
          </div>
          <div class="col-6 col-md-4 col-lg-auto mb-3">
            <ul class="list-unstyled mb-md-4 mb-lg-0">
              <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Columbus</a></li>
              <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">New Mexico</a></li>
              <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Albuquerque</a></li>
             
            </ul>
          </div>
        </div>
        <hr class="text-900" />
        <div class="row">
          <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-3">
            <h5 class="lh-lg fw-bold text-white">COMPANY</h5>
            <ul class="list-unstyled mb-md-4 mb-lg-0">
              <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">About Us</a></li>
              <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Team</a></li>
            
              <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">blog</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-4 col-lg-3 col-xxl-2 col-lg-3 mb-3">
            <h5 class="lh-lg fw-bold text-white">CONTACT</h5>
            <ul class="list-unstyled mb-md-4 mb-lg-0">
              <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Help &amp; Support</a></li>
              <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Partner with us </a></li>
              
            </ul>
          </div>
          <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-3">
            <h5 class="lh-lg fw-bold text-white">LEGAL</h5>
            <ul class="list-unstyled mb-md-4 mb-lg-0">
              <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Terms &amp; Conditions</a></li>
              <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Refund &amp; Cancellation</a></li>
              <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Privacy Policy</a></li>
              <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Cookie Policy</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-4 col-lg-3 col-xxl-2 mb-3">
            <h5 class="lh-lg fw-bold text-white">LEGAL</h5>
            <ul class="list-unstyled mb-md-4 mb-lg-0">
              <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Terms &amp; Conditions</a></li>
              <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">Refund &amp; Cancellation</a></li>
             
            </ul>
          </div>
          
        <hr class="border border-800" />
        <div class="row flex-center pb-3">
          <div class="col-md-6 order-0">
            <p class="text-200 text-center text-md-start">&copy; swagoto_das_brinto</p>
          </div>
          <div class="col-md-6 order-1">

          </div>
        </div>
      </div><!-- end of .container-->

    </section>

   
  
  <!-- jQery -->
  <script src="menu-js/jquery-3.4.1.min.js"></script>
  </script>
  <!-- isotope js -->
  <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script> 

<!-- // isotope js -->

<script>
   $(window).on('load', function () {

    var $grid = $(".grid").isotope({
        itemSelector: ".all",
        percentPosition: false,
        masonry: {
            columnWidth: ".all"
        }
    })
 });

</script>
<script>
  document.addEventListener('DOMContentLoaded', () => {
      const cartButtons = document.querySelectorAll('.add-to-cart');
      cartButtons.forEach(button => {
          button.addEventListener('click', (e) => {
              e.preventDefault();
              const productId = button.getAttribute('data-id');
              const productName = button.getAttribute('data-name');
              const productPrice = button.getAttribute('data-price');
              const productImage = button.getAttribute('data-image');

              let cart = JSON.parse(sessionStorage.getItem('cart')) || [];
              let product = cart.find(item => item.id === productId);

              if (product) {
                  product.quantity += 1;
              } else {
                  product = { id: productId, name: productName, price: productPrice, image: productImage, quantity: 1 };
                  cart.push(product);
              }

              sessionStorage.setItem('cart', JSON.stringify(cart));
              alert('Product added to cart');
          });
      });
  });
</script>

</body>

</html>