@extends('layouts.app')

@section('content')

    <a href="/products" class="btn btn-primary btn-left" stlye="padding-top: 50pt">Back to Products</a>
    <br>
    <div class = 'product-display'>
        <div id='wrapper'>
            <div id='left'>
                <div class='img-border'>
                    <img src='{{asset('storage/img/'.$product->imglink)}}' alt="product image" style="width:100%">
                </div>
                @if(!Auth::guest())
                    <a href='/products/{{$product->id}}/edit' class='btn btn-light' style='border-color: #A19694'>Edit Product</a>

                    {!!Form::open(['action' => ['ProductsController@destroy', $product->id], 'method' => 'POST', 'class' => 'form-right'])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                    {!!Form::close()!!}
                @endif
            </div>
            <div id='right'>
                <h2>{{$product->title}}</h2>
                <hr>
                <p>{{$product->descrip}}</p>
                <div class='lead'>Quantity: <b>{{$product->quantity}}</b></div>
                <div class='lead'>Price: <b>RM{{$product->price}}/per unit</b></div>
                <hr>
                <small>Added {{$product->created_at}}</small>
                
            </div>
        </div>
    </div>

@endsection