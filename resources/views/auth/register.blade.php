@extends('layouts.app')

@section('content')
<section class="vh-100 bg-image"
  style="background-image: url('https://i.pinimg.com/originals/5e/35/e0/5e35e06d2382b775a6a663e91e6e1038.jpg'); background-size: cover;">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

              <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-outline mb-4">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  <input type="text" id="name" class="form-control form-control-lg" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus/>
                  <label class="form-label" for="name">Your Name</label>
                </div>

                <div class="form-outline mb-4">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  <input type="email" id="email" class="form-control form-control-lg" name="email" value="{{ old('email') }}" required autocomplete="email" />
                  <label class="form-label" for="email">Your Email</label>
                </div>

                <div class="form-outline mb-4">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  <input type="password" id="password" class="form-control form-control-lg" name="password" required autocomplete="new-password" />
                  <label class="form-label" for="form3Example4cg">Password</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="password_confirmation" class="form-control form-control-lg" name="password_confirmation" required autocomplete="new-password" />
                  <label class="form-label" for="password">Repeat your password</label>
                </div>

                <div class="form-check d-flex justify-content-center mb-5">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                  <label class="form-check-label" for="form2Example3g">
                    I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                  </label>
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" onclick="randNumberScript()">Register</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="#!"
                    class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection

