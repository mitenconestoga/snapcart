@if (session()->has('user'))
@include('header1')

@else
@include('header')

@endif

<form>
<div class="container mt-5 mb-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="row">
                    <div class="col-md-6">
                        <div class="images p-3">
                            <div class="text-center p-4"> <img id="main-image" src="{{url('storage/'.$item['filepath'])}}" width="250" alt="photos img" /> </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product p-4">
                            <a class="d-flex justify-content-between align-items-center" href="{{url('/')}}">
                                <div class="d-flex align-items-center"> <i class="fa fa-long-arrow-left"></i> <span class="ml-1">Back</span> </div>
</a>
                            <div class="mt-4 mb-3"> <span class="text-uppercase text-muted brand"></span>
                                <h5 class="text-uppercase">{{$item['title']}}</h5>
                                <div class="price d-flex flex-row align-items-center"> <span class="act-price b">${{$item['price']}}</span>
                                    <div class="ml-2"> <small class="dis-price"></small> <span></span> </div>
                                </div>
                            </div>
                            <p class="about">{{$item['description']}}</p>
<<<<<<< HEAD
                            <div class="cart mt-4 align-items-center"> <a class="btn btn-danger text-uppercase mr-2 px-4"href="{{url('cart')}}/{{$item['photo_id']}}">Add to cart</a><a  class="btn btn-warning text-uppercase mr-2 px-4" href="{{url('/payment')}}"> Buy Now</a> </div>
=======
                            {{session()->put('price',$item['price'])}}
                            <div class="cart mt-4 align-items-center"> <a class="btn btn-danger text-uppercase mr-2 px-4"href="{{url('cart')}}/{{$item['photo_id']}}">Add to cart</a><a  class="btn btn-warning text-uppercase mr-2 px-4" href="{{url('payment')}}"> Buy Now</a> </div>
>>>>>>> 2df345a8a4dfbc584f69046f1ae88411c9c244ca
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>


@include('footer')