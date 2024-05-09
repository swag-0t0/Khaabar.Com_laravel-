<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Forms</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="admin-assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="admin-assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
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
      <h1>Manage Foods</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="admin-index.html">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Manage Foods</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">General Form Elements</h5>

              <!-- General Form Elements -->
              <form>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Text</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Number</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" id="formFile">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputDate" class="col-sm-2 col-form-label">Date</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputTime" class="col-sm-2 col-form-label">Time</label>
                  <div class="col-sm-10">
                    <input type="time" class="form-control">
                  </div>
                </div>

                <fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                      <label class="form-check-label" for="gridRadios1">
                        First radio
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                      <label class="form-check-label" for="gridRadios2">
                        Second radio
                      </label>
                    </div>
                   
                  </div>
                </fieldset>

                <div class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Checkboxes</legend>
                  <div class="col-sm-10">

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck1">
                      <label class="form-check-label" for="gridCheck1">
                        Example checkbox
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck2" checked>
                      <label class="form-check-label" for="gridCheck2">
                        Example checkbox 2
                      </label>
                    </div>

                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Select</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example">
                      <option selected>Open this select menu</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Submit Button</label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit Form</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>

        {{-- new card for advertise section --}}
        {{-- Form starts --}}
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Manage advertise Foods</h5>

              <!-- General Form Elements -->
              <form action="{{url('/advertise_form')}}" method="POST" enctype="multipart/form-data" >
                @csrf
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-3 col-form-label">Text1</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="text1" placeholder="first text">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-3 col-form-label">Text2</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="text2" placeholder="second text">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-3 col-form-label">Description</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="description" placeholder="Write description of the food">
                  </div>
                </div>
             
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-3 col-form-label">Upload Image</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" id="formFile" name="image" placeholder="Enter corresponding Image">
                  </div>
                </div>
                <div class="row mb-3"> 
                  <div class="col-sm-12 text-center">
                    <button type="submit" class="btn btn-warning" value="save">Add this Item</button>
                    
                  </div>
                </div>
              </form><!-- End General Form Elements -->

                {{-- All the Items for and delete operation --}}

              <h5 class="card-title">All the added Items</h5>

              <!-- Table with hoverable rows -->
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Text1</th>
                    <th scope="col">Text2</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach($data as $data)
                  <tr>
                    <td><img height="60px" width="80px" src="advertise_image/{{$data->image}}" alt=""></td>
                    <td>{{$data->text1}}</td>
                    <td>{{$data->text2}}</td>                  
                    <td>
                      <div class="button-group" role="group">
                          <a href="{{url('/deleteadvertise',$data->id)}}" class="btn btn-sm "><i class="bi bi-trash "></i></a> <!-- Delete Icon -->
                           <a href="#" class="btn btn-sm "><i class="bi bi-pencil "></i></a> <!-- Update Icon -->
                      </div>
                    </td>                  
                  </tr>
                  @endforeach

                </tbody>
              </table>

                {{-- Ends --}}


            </div>
          </div>

        </div>
        {{-- Form ends for advertise--}}

        {{-- Form for Popular Items --}}
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Manage Popular Foods</h5>

              <!-- General Form Elements -->
              <form>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-3 col-form-label">Upload Image</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" id="formFile">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-3 col-form-label">Food Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-3 col-form-label">Provider</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-3 col-form-label">Price</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control">
                  </div>
                </div>
             
                
                <div class="row mb-3"> 
                  <div class="col-sm-12 text-center">
                    <button type="submit" class="btn btn-warning" value="save">Add this Item</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>

        {{-- End Form for Popualr Items --}}

        {{-- Form for all foods --}}
        <div class="col-lg-6">
          <div class="card">
              <div class="card-body">
                  <h5 class="card-title">Manage All Foods</h5>
                  <!-- General Form Elements -->
                  <form action="{{url('/allfoods')}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="row mb-3">
                          <label for="inputText" class="col-sm-3 col-form-label">Food type</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" name="food_type" placeholder="Food type">
                          </div>
                      </div>
                      <div class="row mb-3">
                          <label for="inputNumber" class="col-sm-3 col-form-label">Upload Image</label>
                          <div class="col-sm-10">
                              <input class="form-control" type="file" id="formFile" name="image">
                          </div>
                      </div>
                      <div class="row mb-3">
                          <label for="inputText" class="col-sm-3 col-form-label">Food Name</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" name="food_name" placeholder="Food Name">
                          </div>
                      </div>
                      <div class="row mb-3">
                          <label for="inputText" class="col-sm-3 col-form-label">Description</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" name="description" placeholder="Description">
                          </div>
                      </div>
                      <div class="row mb-3">
                          <label for="inputText" class="col-sm-3 col-form-label">Price</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" name="price" placeholder="Price">
                          </div>
                      </div>
                      <div class="row mb-3"> 
                          <div class="col-sm-12 text-center">
                              <button type="submit" class="btn btn-warning" value="save">Add this Item</button>
                              
                          </div>
                      </div>
                  </form><!-- End General Form Elements -->
              </div>
          </div>
      </div>
      
        {{-- End Form for all foods--}}


        
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  

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