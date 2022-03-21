<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sign UP</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <style>.dark {
    background-color: black !important;
    position:absolute;
   bottom:0;
   width:100%;
}
</style>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<nav class="navbar navbar-expand-md text-dark scrolling-navbar">
      <div class="container-fluid">
        <a class="navbar-brand" href="./images/logo.png">
          <i class="fab fa-snapcart fa-3x" alt="snapcarts logo"><img src="./images/logo.png"></i>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
          aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="basicExampleNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="#!" class="nav-link navbar-link-2">
                <i class="fas fa-shopping-cart"></i>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link text-dark">
                Home
              </a>
            </li>
            <li class="nav-item">
              <a href="#!" class="nav-link text-dark">
                Contact
              </a>
            </li>
            <li class="nav-item">
              <a href="#!" class="nav-link text-dark">
                Sign in
              </a>
            </li>
            <li class="nav-item pl-2 mb-2 mb-md-0">
              <a href="#!" type="button"
                class="btn btn-outline-warning btn-md text-dark btn-rounded btn-navbar waves-effect waves-light bg-warning">Sign
                up</a>
            </li>
          </ul>

        </div>
      </div>
    </nav>
<body>
  <main>
    <div class="container">
      <h3 class="text-center mt-10">Sign Up</h3>
      <div class="row d-flex justify-content-center">
        <div class="col-md-6">
          <section class="mt-4 mb-5">
            <form action="#!">
              <div class="form-row">
                <div class="col">
                  <div class="md-form md-outline mt-0">
                    <input type="text" id="materialRegisterFormFirstName" class="form-control">
                    <label for="materialRegisterFormFirstName">First name</label>
                  </div>
                </div>
                <div class="col">
                  <div class="md-form md-outline mt-0">
                    <input type="email" id="materialRegisterFormLastName" class="form-control">
                    <label for="materialRegisterFormLastName">Last name</label>
                  </div>
                </div>
              </div>

              <div class="md-form md-outline mt-0">
                <input type="email" id="defaultForm-email2" class="form-control">
                <label data-error="wrong" data-success="right" for="defaultForm-email2">Your email</label>
              </div>
              <div class="md-form md-outline mt-0">
                <input type="password" id="defaultForm-pass2" class="form-control">
                <label data-error="wrong" data-success="right" for="defaultForm-pass2">Your password</label>
                <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                  At least 8 characters and 1 digit
                </small>
              </div>

              <div class="md-form md-outline">
                <input type="number" id="materialRegisterFormPhone" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock">
                <label for="materialRegisterFormPhone">Phone number</label>
              </div>
              <div class="text-center mb-2">

              <button type="submit" class="btn btn-warning mb-4">Sign Up</button>
            </form>

          </section>
        </div>
      </div>
    </div>
  </main>

<footer class="page-footer font-small dark mt-100">

  <div class="footer-copyright text-center text-white py-3">© 2022 Copyright: Snapcart.com
  </div>

</footer>
</body>

</html>