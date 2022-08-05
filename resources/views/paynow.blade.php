@extends('layouts.app')
<script>
  mdb.Alert.getInstance(document.getElementById("alertExample")).update({
  position: "top-right",
  delay: 2000,
  autohide: false,
  width: "600px",
  offset: 20,
  stacking: false,
  appendToBody: false,
});
</script>
@section('content')
<section style="background-image: url('https://t3.ftcdn.net/jpg/02/75/83/50/360_F_275835093_mWmGaL59HEQLSRc2SvgekGddjjMXapIC.jpg'); height: 100vh;">
  <div class="alert-secondary" id="alertExample" role="alert" data-mdb-color="primary">
    @if (session()->has('error'))
      {{session()->get('error')}}
    @endif
  </div>  
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-9 col-lg-7 col-xl-6">
              <div class="card" style="border-radius: 15px;">
                <div class="card-body p-5">
                  <h2 class="text-uppercase text-center mb-5">Make Payment</h2>
                  <form method="POST" action="{{ route('pay') }}">
                    @csrf
                    <div class="form-outline mb-4">
                      <input type="text" id="name" class="form-control form-control-lg" name="name" value={{ Auth::user()->name }} />
                      <label class="form-label" for="name">Name</label>
                    </div>
                    <div class="form-outline mb-4">
                      <input type="text" id="amount" class="form-control form-control-lg" name="amount"   />
                      <label class="form-label" for="amount">Amount</label>
                    </div>
                    <div class="form-outline mb-4">
                      <input type="email" id="email" class="form-control form-control-lg" name="email" value={{ Auth::user()->email }} />
                      <label class="form-label" for="email">Email</label>
                    </div>
                    <div class="d-flex justify-content-center">
                      <button type="submit"
                        class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" onclick="randNumberScript()">Pay Now</button>
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
