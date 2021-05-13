@extends('master')
@section('content')
    <div class="container ">
        <div class="row">
            <div class="col-sm-6">
                    <img class="detail-img" src="{{$product['Gallery']}}" alt="">
            </div>
            <div class="col-sm-6">
                <h2>{{$product['Name']}}</h2>
                <h3>Price : {{$product['Price']}}</h3>
                <h4>Details : {{$product['Description']}}</h4>
                <h4>Category : {{$product['Category']}}</h4>
                <br><br>
                <form action="/add_to_cart" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{$product['id']}}">
                    <button class="btn btn-primary">Add to Cart</button>
                </form>
                <br><br>
              
                <a href="/"><button class="btn btn-danger">Back</button></a>
                <br><br>
            </div>
        </div>
    </div>


@endsection