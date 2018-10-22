@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="title">{{$product->product}}</h1>
            <h5>
                @foreach($product->categories as $category)
                <span class="badge badge-dark">{{$category->category}}</span>
                @endforeach
            </h5>
        </div>
        <div class="col-md-6">

        </div>
        <div class="col-md-6">
            <h2 class="title">$ {{number_format($product->price, 2)}} MXN</h2>
            <p>{{$product->description}}</p>
        </div>
        
    </div>
</div>
@endsection