@extends('product.layout')
@section('content')

<div class="container"style="padding-top:10% "><div class="card" >
    <div class="card-body">
      <p class="card-text"><span> <a href="{{ route('products.index')}}">Back</a></span>Product name {{$product->name}}</p>
    </div>
  </div></div>

 <div class="container" style="padding-top:2% ">

        <div class="form-group">
          <label for="exampleFormControlInput1">{{$product->name}}</label>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">{{$product->price}}</label>
          </div>

        <div class="form-group">
          {!!$product->details!!}"
        </div>

@endsection
