<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Update allfoods </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('admin-assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('admin-assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('admin-assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('admin-assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{asset('admin-assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet"> 
  <link href="{{asset('admin-assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('admin-assets/css/adminstyle.css')}}" rel="stylesheet">

  <base id="base-url" href="/public">
</head>

<body>

  @include('admin.head-nav')

  
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Update Foods</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('admin.adminhome')}}">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
          <li class="breadcrumb-item active">Upadte</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

  

            {{-- updating and showing all the foods --}}
          <div class="card">

              @if (@isset($item))
                  <div class="card-body">
                  <h5 class="card-title">Update All Foods</h5>
                  <!-- General Form Elements -->
                  <form action="{{url('/allfoodsupdate',$item->id)}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="row mb-3">
                          <label for="inputText" class="col-sm-3 col-form-label">Food type</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" name="food_type" value="{{$item->food_type}}" >
                          </div>
                      </div>
                      <div class="row mb-3">
                          <label for="inputText" class="col-sm-3 col-form-label">Old image</label>
                          <div class="col-sm-10">
                            <img height="90px" width="100px" src="allfoods_image/{{$item->image}}" alt="">
                          </div>
                      </div>

                      <div class="row mb-3">
                          <label for="inputNumber" class="col-sm-3 col-form-label">Upload Image</label>
                          <div class="col-sm-10">
                              <input class="form-control" type="file" id="formFile" name="image" value="allfoods_image/{{$item->image}}">
                          </div>
                      </div>
                      
                      <div class="row mb-3">
                          <label for="inputText" class="col-sm-3 col-form-label">Food Name</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" name="food_name" value="{{$item->food_name}}" >
                          </div>
                      </div>
                      <div class="row mb-3">
                          <label for="inputText" class="col-sm-3 col-form-label">Description</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" name="description" value="{{$item->description}}">
                          </div>
                      </div>
                      <div class="row mb-3">
                          <label for="inputText" class="col-sm-3 col-form-label">Price</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" name="price" value="{{$item->price}}">
                          </div>
                      </div>
                      <div class="row mb-3"> 
                          <div class="col-sm-12 text-center">
                              <button type="submit" class="btn btn-warning" value="save">Update this Item</button>
                              
                          </div>
                      </div>
                  </form><!-- End General Form Elements -->
              </div>
            

              @endif
                
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