@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="title">@lang('text.categories')</h1>
        </div>
        @foreach($categories as $category)
        <div class="col-md-3 py-3">
            <div class="card">
                <a href="{{route('categories.show', $category)}}">
                    <img src="{{$category->image}}" alt="" class="card-img-top">
                    <div class="card-body">
                        <h5 class="title card-title my-0">{{$category->category}}</h5>
                        <p>{{$category->description}}</p>
                    </div>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection