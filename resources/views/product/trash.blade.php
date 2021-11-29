@extends('product.layout')

@section('content')


<div class="jumbotron container">

    <p> Online Super Market<br>
        Trash products
       </p>
    <a class="btn btn-info" href="{{ route('products.index')}}" role="button">Home</a>
  </div>

<div class='container'>
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Procduct name</th>
            <th scope="col">Product price</th>
            <th scope="col" style="width:400px">Actions</th>
          </tr>
        </thead>
        <tbody>
            @php
                $i = 0 ;
            @endphp
            @foreach ( $products as $item )
            <tr>
                <th scope="row">{{++$i}}</th>
                <td>{{ $item->name}}</td>
                <td>{{ $item->price}} DT</td>
                <td>

                        <div class="row">
                          <div class="col-sm">
                            <a href="{{ route('product.back.from.trash', $item->id)}}"class="btn btn-primary">back</a>
                          </div>
                          <div class="col-sm">
                            <a href="{{ route('product.delete.from.database', $item->id)}}"class="btn btn-danger">Delete</a>
                          </div>
                        </div>

                </td>
              </tr>
            @endforeach
        </tbody>
      </table>
      {!! $products->links() !!}
</div>

@endsection
