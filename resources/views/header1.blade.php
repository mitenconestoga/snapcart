<!DOCTYPE html>
<html lang="en">

<head>

  <title></title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <meta name="title" content="snapcart">
  <meta name="description" content="This site is used to buy a photos from photographers.">
  <meta name="keywords" content="photos.photographers,snapcart,buy photos">
  <meta name="robots" content="index, follow">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="language" content="English">

  <style>
    .dark {
      background-color: black !important;
      position: absolute;
      bottom: 0;
      width: 100%;
    }

    .bgimg-1 {
      background-image:url("{{ asset('storage/banner-2.jpg') }}");
      background-position: center;
      background-size: cover;

    }

    .navbar {
      line-height: 0 !important;
      background-color: white !important;

      box-shadow: 0 3px 10px rgb(0 0 0 / 0.5);

    }

    footer {
      background-color: white !important;
      box-shadow: 0 3px 30px rgb(0 0 0 / 0.5);

    }

    .bi {
      text-align: center;
      font-size: 26px;
    }

    .dark {
      background-color: black !important;
      position: absolute;
      bottom: 0;
      width: 100%;
    }

    .fa {
      font-size: 1.4em !important;
    }

    .nav-link {
      display: inline !important;
      font-weight: bold;
    }

    .panel-title {
      display: inline;
      font-weight: bold;
    }

    .display-table {
      display: table;
    }

    .display-tr {
      display: table-row;
    }

    .display-td {
      display: table-cell;
      vertical-align: middle;
      width: 61%;
    }
  </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<nav class="navbar navbar-expand-md text-dark scrolling-navbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">
      <i class="fab fa-snapcart fa-3x" alt="snapcarts logo"><img src="{{ asset('storage/logo.png') }}" alt="photos img"></i>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="basicExampleNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{url('cart')}}">
            <i class="fa fa fa-shopping-cart text-dark" aria-hidden="true">
              @if (Session::get('cartcount')>0)
              <span class="badge badge-warning">
                {{session('cartcount')}}
              </span>
              @else
              @endif
            </i>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{url('/')}}" type="button" class="nav-link h-100 text-center text-dark">
            Home
          </a>
        </li>
        <li class="nav-item">
          <a href="{{url('/photos')}}" type="button" class="nav-link h-100 text-center text-dark">
            Photos
          </a>
        </li>
        <li class="nav-item text-center">
          <a href="#!" type="button" class="nav-link text-dark btn-md">
            Contact
          </a>
        </li>
        <li class="nav-item">
          <a href="{{url('/')}}/logout" type="button" class="nav-link text-dark btn-md">
            Logout
          </a>
        </li>

      </ul>

    </div>
  </div>
</nav>

<body>