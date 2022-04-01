@if (session()->has('user'))
  @include('header1')
@else
@include('header')
@endif


            {!!Toastr::message()!!}

<div class="container">
  <div class="text-center mt-5">
    <div class="row">
      <div class="col-md"><a href="/"><button type="button" name="all"href="index" class="btn btn-warning btn-lg w-100">All</button></a></div>
      <div class="col-md"><a href="@php echo base64_encode(1);@endphp"><button type="button" class="btn btn-warning btn-lg w-100">Space</button></a></div>
      <div class="col-md"><a href="@php echo base64_encode(2);@endphp"><button type="button" class="btn btn-warning btn-lg w-100">Birds</button></a></div>
      <div class="col-md"><a href="@php echo base64_encode(3); @endphp"><button type="button" class="btn btn-warning btn-lg w-100">Nature</button></a></div>
      <div class="col-md"><a href="@php  echo base64_encode(4); @endphp"><button type="button" class="btn btn-warning btn-lg w-100">God</button></a></div>

</div>
</div>
      <div class="row">
        @foreach ($collection as $item)
        <div class="col-4 mt-5">
          <div class="card">
            <a href="photodetail/{{$item['photo_id']}}">

            <img src="{{url('storage/'.$item['filepath'])}}" class="card-img-top w-100" height="250px" alt="...">
          </a>
            <div class="card-body text-center">
              <!-- <h5 class="card-title">{{$item['']}}</h5> -->
              <h4 class="card-text text-dark">${{$item['price']}}</h4>
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

