@include('header')
<main>
    <div class="container">
      <h3 class="text-center mt-10">Sign Up</h3>
      <div class="row d-flex justify-content-center">
        <div class="col-md-6">
          <section class="mt-4 mb-5">
            <form action="{{url('/')}}/signup" method="post">
            @csrf
              <div class="form-row">

              <div class="col">
              <div class="md-form md-outline mt-0">
                <input type="email" name="email" id="defaultForm-email2" class="form-control" value="{{old('email')}}">
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
                <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                  At least 8 characters and 1 digit
                </small>
                <span class="text-danger">
                      @error('password')
                          {{$message}}
                      @enderror
                    </span>
              </div>
              <div class="md-form md-outline mt-0">
                <input type="password" name="password_confirmation" id="defaultForm-pass2" class="form-control">
                <label data-error="wrong" data-success="right" for="defaultForm-pass2">Confirm password</label>
                <span class="text-danger">
                      @error('cpassword')
                          {{$message}}
                      @enderror
                    </span>
              </div>

              <div class="md-form md-outline">
                <input type="number" name="contact" id="materialRegisterFormPhone" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock" value="{{old('contact')}}">
                <label for="materialRegisterFormPhone">Phone number</label>
                <span class="text-danger">
                      @error('contact')
                          {{$message}}
                      @enderror
                    </span>
              </div>
              <div class="text-center mb-2">

              <button type="submit" class="btn btn-warning mb-4">Sign Up</button>
            </form>

          </section>
        </div>
      </div>
    </div>
  </main>
@include('footer');