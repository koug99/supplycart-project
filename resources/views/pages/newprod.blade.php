@extends('layouts.app')

@section('content')
    <div class="jumbotron text-left">
        <h1>New Product</h1>
    </div>

    <div class='mycontainer' style='justify-content: left'>
        {!! Form::open(['action' => 'ProductsController@store', 'method' => 'POST', 'files' => true, 'enctype'=>'multipart/form-data']) !!}
            <div class='form-group'>
                {{Form::label('title',"Title")}}
                {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
            </div>
            <div class='form-group'>
                {{Form::label('descrip',"Description")}}
                {{Form::textarea('descrip', '', ['class' => 'form-control', 'placeholder' => 'Description'])}}
            </div>
            <div class='form-group'>
                {{Form::label('quantity',"Quantity")}}
                {{Form::number('quantity', '', ['class' => 'form-control', 'placeholder' => 'Quantity'])}}
            </div>
            <div class='form-group'>
                {{Form::label('price',"Price")}}
                {{Form::number('price', '', ['class' => 'form-control', 'step' => '0.01','placeholder' => 'Price'])}}
            </div>
            <div class='form-group'>
                {{Form::label('imglink',"Image")}}
                <br>
                {{Form::file('imglink')}}
            </div>
            <br>
            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>
@endsection