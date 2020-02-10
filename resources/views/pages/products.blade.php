@extends('layouts.app')

@section('content')
    <div class = 'jumbotron text-left'>
        @if(!Auth::guest())
            <a href="/products/create" class="btn btn-secondary float-right">Add New Product</a>
        @endif
        <h1>Products</h1>
    </div>

    
    <div class ='container'>
        {{$products->links()}}
        <div class ='row mt-2'>
            @if(count($products)>0)
                @foreach ($products as $product)
                <div class='col-sm-4'>
                    <div class="card" >
                        <div class ='card-block'>
                            <a href = "/products/{{$product->id}}"><img class="card-img-top" src='{{asset('storage/img/'.$product->imglink)}}' alt="product image" style="width:100%, border: 2pt solid black"></a>
                            <div class="card-body">
                            <h4 class="card-title" style='text-align: center'><a href = "/products/{{$product->id}}">{{$product->title}}</a></h4>
                            <p class="card-text" style='text-align: center'>{{$product->descrip}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                
            @else
                <p>No items currently on sale.</p>
            @endif
        </div>
    </div>
@endsection

