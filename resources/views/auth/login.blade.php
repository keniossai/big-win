@extends('layouts.app')

@section('content')
<section class="vh-100 bg-image"
  style="background-image: url('https://images.squarespace-cdn.com/content/v1/58abe2f715d5dbf18f3a1c25/1519383675878-GIBO6XD7SYFF0DQQHIZL/musical+bingo+background-01.jpg?format=2500w'); background-size: cover;">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Login and Play</h2>

              <form method="POST" action="{{ route('login') }}">
                @csrf

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

                <div class="d-flex justify-content-center">
                  <button type="submit"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" onclick="randNumberScript()">Login</button>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection

