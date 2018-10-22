@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="title">@lang('text.products')</h1>
        </div>
        @foreach($products as $product)
        <div class="col-md-4">
            <div class="card">
                <a href="{{route('products.show', $product)}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$product->product}}</h5>
                        <h5 class="title card-title">${{number_format($product->price, 2)}} MXN</h5>
                    </div>
                </a>
            </div>
        </div>
        @endforeach
        <div class="col-md-12">
            {{$products->appends(request()->query())->links()}}
        </div>
    </div>
</div>
@endsection