<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
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
        <a class="navbar-brand" href="{{ asset('logo.png') }}">
          <i class="fab fa-snapcart fa-3x" alt="snapcarts logo"><img src="{{ asset('storage/logo.png') }}"></i>
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
            <a href="#!" type="button"
                class="btn btn-outline-warning btn-md text-dark btn-rounded btn-navbar waves-effect waves-light bg-warning">
                Sign in
              </a>
            </li>
            <li class="nav-item pl-2 mb-2 mb-md-0">
              <a href="#!" type="button"
                class="nav-link text-dark">Sign
                up</a>
            </li>
          </ul>

        </div>
      </div>
    </nav>
<body>