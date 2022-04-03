@if (session()->has('user'))
@include('header1')
@else
@include('header')
@endif
<div class="container" id="about">
  <h3 class="w3-center text-uppercase">Latest photos</h3>
  <div class="w3-row">
    <div class="w3-row-padding">
      <div class="w3-col l3 m6 w3-margin-bottom">
        <a href="#">
          <img src="{{ asset('storage/pic-1.jpg') }}" alt="Best selling pic-1" style="width:100%">
        </a>
        <h3>Best selling pic-1</h3>
        <p>This bar graph gives you the information of IPL winning data. You can sort them by winning ratio.</p>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <a href="#">
          <img src="{{ asset('storage/nature6.jpg') }}" alt="Best selling pic-2" style="width:100%">
        </a>
        <h3>Best selling pic-2</h3>
        <p>This line graph gives you the information of Netflix subscribers from 2001 to now onwards.</p>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <a href="#">
          <img src="{{ asset('storage/nature7.jpg') }}" alt="Best selling pic-3" style="width:100%">
        </a>
        <h3>Best selling pic-3</h3>
        <p>This pie graph gives you the information of IPL wins and losses information of particular teams.</p>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <a href="#">
          <img src="{{ asset('storage/nature8.jpg') }}" alt="Best selling pic-4" style="width:100%;">
        </a>
        <h3>Best selling pic-4</h3>
        <p>This world map gives you the information of capital of each countries with zoom-in zoom-out effect.</p>
      </div>
    </div>
  </div>
  <h3 class="w3-center text-uppercase">Best Photographer</h3><br>
  <div class="w3-row">
    <div class="w3-row-padding">
      <div class="w3-col l3 m6 w3-margin-bottom">
        <!-- <img src="/data/dp.png" alt="John" style="width:100%"> -->
        <a href="#">
          <img src="{{ asset('storage/pic-1.jpg') }}" alt="Best photographer-1" style="width:100%">
        </a>
        <h3>Best photographer-1</h3>
        <p>This bar graph gives you the information of IPL winning data. You can sort them by winning ratio.</p>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <a href="#">
          <img src="{{ asset('storage/nature6.jpg') }}" alt="Best photographer-2" style="width:100%">
        </a>
        <h3>Best photographer-2</h3>
        <p>This line graph gives you the information of Netflix subscribers from 2001 to now onwards.</p>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <a href="#">
          <img src="{{ asset('storage/nature7.jpg') }}" alt="Best photographer-3" style="width:100%">
        </a>
        <h3>Best photographer-3</h3>
        <p>This pie graph gives you the information of IPL wins and losses information of particular teams.</p>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <a href="#">
          <img src="{{ asset('storage/nature8.jpg') }}" alt="Best photographer-4" style="width:100%;">
        </a>
        <h3>Best photographer-4</h3>
        <p>This world map gives you the information of capital of each countries with zoom-in zoom-out effect.</p>
      </div>
    </div>
  </div>

</div>

@include('footer')