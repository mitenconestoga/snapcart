@include('header')

<main>
    <div class="container">
      <h3 class="text-center mt-10">Login</h3>
      <div class="row d-flex justify-content-center">
        <div class="col-md-6">
          <section class="mt-4 mb-5">
          {!!Toastr::message()!!}
            <form class="justify-content-center"action="{{url('/')}}/login" method="post">
              @csrf
             <div class="md-form md-outline mt-0">
                <input type="email" name="email" id="defaultForm-email2" class="form-control">
                <label data-error="wrong" data-success="right" for="defaultForm-email2">Your email</label>
                <span class="text-danger">
                      @error('email')
                          {{$message}}
                      @enderror
                    </span>
              </div>
              <div class="md-form md-outline mt-0">
                <input type="password" name="password" id="defaultForm-pass2" class="form-control">
                <label data-error="wrong" data-success="right" for="defaultForm-pass2">Your password</label>
                <span class="text-danger">
                      @error('password')
                          {{$message}}
                      @enderror
                    </span>

              </div>

              <div class="text-center mb-2">

              <button type="submit" class="btn btn-warning mb-4">Login</button>
            </form>

          </section>
        </div>
      </div>
    </div>
  </main>


  @include('footer')