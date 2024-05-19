<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="admin-assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="admin-assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="admin-assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="admin-assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="admin-assets/vendor/quill/quill.bubble.css" rel="stylesheet">
 
  <link href="admin-assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="admin-assets/css/adminstyle.css" rel="stylesheet">

</head>

<body>

  @include('admin.head-nav')

    
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('admin.adminhome')}}">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        
            <!-- Top Selling -->
           <!-- End Top Selling -->

       <!-- End Left side columns -->

        <!-- Right side columns -->
        <!-- End Recent Activity -->
      </div>
    </section>
      
         
  <!-- ======= Footer ======= -->
  

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->


  <script src="admin-assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="admin-assets/vendor/quill/quill.min.js"></script>
  <script src="admin-assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="admin-assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="admin-assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="admin-assets/js/main.js"></script>

</body>

</html>