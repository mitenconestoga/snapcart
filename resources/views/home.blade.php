@if (session()->has('user'))
@include('header1')
@else
@include('header')
@endif

<div class="bgimg-1 w3-display-container mb-5" id="home" style="height: 500px;">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide">SNAPCART</span>
  </div>
</div>
<div class="container" id="about">
<h3 class="text-center mt-5 mb-2 text-uppercase">Recently Added photos</h3>

<div class="row">

  @foreach ($collection as $item)
        <div class="col-12 col-md-4 mt-5">
          <div class="card mb-50">
            <a href="photodetail/{{$item['photo_id']}}">

            <img src="{{url('storage/'.$item['filepath'])}}" class="card-img-top w-100" height="250px" alt="photos img">
          </a>
            <div class="card-body text-center">
              <h5 class="card-title">{{$item['title']}}</h5>
              <p class="card-text text-dark font-weight-bold">${{$item['price']}}</p>
              @if (session()->has('uid'))
              @if ($item['uid']==session()->get('uid'))
              <a href="cart/{{$item['photo_id']}}"><button type="button" class="btn btn-outline-warning">Added</button></a>
              @else
              <a href="cart/{{$item['photo_id']}}"><button type="button" class="btn btn-outline-warning">Add to cart</button></a>

              @endif
              @else
              <a href="cart/{{$item['photo_id']}}">
              <button type="button" class="btn btn-outline-warning">Add to cart</button>
</a>


              @endif



            </div>
          </div>
        </div>
        @endforeach

</div>
</div>

@include('footer')