@extends('master')
@section('content')
<div class="custom-product">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>Result for Products</h4>
            @foreach ($products as $item)
            <div class="row searched-item cart-list-devider">
                <div class="col-sm-3">
                    <a href="detail/{{$item->id}}">
                        <img class="trending-image" src="{{$item->Gallery}}" >
                        </a>
                </div>
                <div class="col-sm-4">
                    <div class="">
                        <h2>{{$item->Name}}</h2>
                        <h5>{{$item->Description}}</h5>
                    </div>
                         </div>
                <div class="col-sm-3">
                  <a href="/removecart/{{$item->cart_id}}"><button class="btn-3 btn-warning"> Remove to Cart</button></a>
                </div>
            </div>
                @endforeach
        </div>
        <a class="btn btn-success" href="/ordernow">Order Now</a><br> <br>
    </div>
</div>
    
@endsection