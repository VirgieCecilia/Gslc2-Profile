@extends('welcome')

@section('content')
<section class="vh-50" alt="aurel">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-6 mb-4 mb-lg-0">
        <div class="card mb-3" style="border-radius: .5rem;">
          <div class="row g-0">
            <div class="col-md-4 gradient-custom text-center text-white"
              style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
              <img src="{{ asset('images/1.jpg') }}"
                alt="Avatar" class="img-fluid my-5" style="width: 110px;" />
              <h5>Aurellia Vieryn</h5>
              <p>2440066626</p>
              <i class="far fa-edit mb-5"></i>
            </div>
            <div class="col-md-8">
              <div class="card-body p-4">
                <h6>Information</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Date of Birth</h6>
                    <p class="text-muted">24 October 2002</p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Favorite Course</h6>
                    <p class="text-muted">Web Programming</p>
                  </div>
                </div>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-10 mb-3">
                    <h6>Skill or Hobbies</h6>
                    <p class="text-muted">Watching Entertainment Shows</p>
                  </div>
                </div>
                <div class="logo-container">
                    <a href="https://www.instagram.com/aurelleryn" class='logo-ig'><img src="{{asset('images/ig.png')}}" alt=""></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection