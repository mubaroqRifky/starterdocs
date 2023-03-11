@extends('layouts.auth')

@section('content')
<!-- Section: Design Block -->
<section class="text-center text-lg-start">
    <style>
      .cascading-right {
        margin-right: -50px;
      }
  
      @media (max-width: 991.98px) {
        .cascading-right {
          margin-right: 0;
        }
      }
    </style>
  
    <!-- Jumbotron -->
    <div class="container py-4">
      <div class="row g-0 align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="card cascading-right" style="
              background: hsla(0, 0%, 100%, 0.55);
              backdrop-filter: blur(30px);
              ">
            <div class="card-body p-5 shadow-5">
              <div class="mb-5 d-flex gap-3 align-items-center justify-content-center">
                <i class="bi bi-amd"></i>
                <h2 class="fw-bold fs-4 text-uppercase">Register Your Account</h2>
            </div>
              <form>
                <div class="row">
                    <div class="col-lg-12 mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="name@example.com">
                    </div>

                    <div class="col-lg-6 mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                    </div>

                    <div class="col-lg-6 mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" id="phone" placeholder="Your Phone">
                    </div> 

                    <div class="col-lg-12 mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Your Password">
                    </div>

                    <div class="col-lg-12 mb-3">
                        <label for="retype_password" class="form-label">Retype Password</label>
                        <input type="password" class="form-control" id="retype_password" placeholder="Retype Your Password">
                    </div>
                </div>  
  
                <button type="submit" class="btn btn-primary btn-block mb-4">
                  Register
                </button> 
              </form>
            </div>
          </div>
        </div>

        <div class="col-lg-6 mb-lg-0">
            <img src="https://img.freepik.com/premium-photo/mobile-application-software-web-development-with-3d-shapes-bar-chart-infographic-blue-background-3d-rendering_73903-1054.jpg?w=900" class="w-100 h-100 rounded-4 shadow-4"
              alt="" />
          </div>
      </div>
    </div>
    <!-- Jumbotron -->
  </section>
  <!-- Section: Design Block -->
@endsection
