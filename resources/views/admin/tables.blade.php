<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>All Users </title>
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
      <h1>All Users</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="admin-index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Users</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">All the registered users</h5>

              <!-- Table with hoverable rows -->
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Role</th>
                    <th scope="col">Registered</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>

                  @php
                      $counter=1;
                  @endphp

                  @foreach($data as $data)
                  <tr>
                    <th scope="row">{{ $counter++ }}</th>
                    <td>{{$data->name}}</td>
                    @if($data->role=="1")
                    <td>Admin</td>
                    @else
                    <td>Customer</td>
                    @endif
                    <td>{{$data->created_at}}</td>
                    @if($data->role=="0")
                    <td>
                      <div class="button-group" role="group">
                          <a href="{{url('/deleteuser',$data->id)}}" class="btn btn-sm "><i class="bi bi-trash "></i></a> <!-- Delete Icon -->
                           <a href="#" class="btn btn-sm "><i class="bi bi-pencil "></i></a> <!-- Update Icon -->
                      </div>
                    </td>
                    @endif
                    
                  </tr>
                  @endforeach

                </tbody>
              </table>
              <!-- End Table with hoverable rows -->

            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->

  <script src="admin-assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="admin-assets/vendor/quill/quill.min.js"></script>
  <script src="admin-assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="admin-assets/vendor/tinymce/tinymce.min.js"></script>


  <!-- Template Main JS File -->
  <script src="admin-assets/js/main.js"></script>

</body>

</body>

</html>