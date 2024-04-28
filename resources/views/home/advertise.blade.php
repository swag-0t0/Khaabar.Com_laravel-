@foreach ($data as $data)
<section class="py-3 section-space">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card card-span mb-3 shadow-lg">
          <div class="card-body py-0">
            <div class="row justify-content-center">
              @php
                $imageOrder = $data->id % 2 == 0 ? 'order-md-1' : 'order-md-0';
              @endphp
              <div class="col-md-7 col-xl-5 col-xxl-4 p-4 p-lg-5 {{$imageOrder}}">
                <h1 class="card-title mt-xl-5 mb-4">{{$data->text1}} <span class="text-primary">{{$data->text2}}</span></h1>
                <p class="fs-1">{{$data->description}}</p>
                <div class="d-grid bottom-0"><a class="btn btn-lg btn-primary mt-xl-6" href="#!">PROCEED TO ORDER<i
                      class="fas fa-chevron-right ms-2"></i></a></div>
              </div>
              <div class="col-md-5 col-xl-7 col-xxl-8 g-0 {{ $imageOrder == 'order-md-1' ? 'order-md-0' : 'order-md-1' }}">
                <img class="img-fluid w-100 fit-cover h-100 rounded-top rounded-md-end rounded-md-top-0"
                  src="advertise_image/{{$data->image}}" alt="..." />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!-- end of .container-->
</section>
@endforeach
