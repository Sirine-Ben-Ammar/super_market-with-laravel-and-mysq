@extends('product.layout')

@section('content')


<div class="jumbotron container">

    <p> Online Super Market<br>
        Click here to add a new product
       </p>
    <a class="btn btn-info" href="{{ route('products.create')}}" role="button">Create</a>
    <a class="btn btn-info" href="{{ route('product.trash')}}" role="button">Trash</a>
  </div>
<div class="container">
    @if ($message= Session:: get('success') )
    <div class="alert alert-primary" role="alert">
        {{$message}}
        @endif
      </div>
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
                            <a href="{{ route('products.edit',$item->id)}}"class="btn btn-success" >edit</a>
                          </div>
                          <div class="col-sm">
                            <a href="{{ route('products.show', $item->id)}}"class="btn btn-primary">show</a>
                          </div>
                          <div class="row">
                            <div class="col-sm">
                              <a href="{{ route('soft.delete',$item->id)}}"class="btn btn-warning" >Soft Delete</a>
                            </div>
                          {{--
                          <div class="col-sm">
                            <form action="{{ route('products.destroy', $item->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                             </form>
                          </div>
                        </div>
                    --}}
                </td>
              </tr>
            @endforeach
        </tbody>
      </table>
      {!! $products->links() !!}
</div>

@endsection
