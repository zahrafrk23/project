@extends('home.master')
@section('title','دسته بندی ها')
@section('content.home')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="keyWord">
                    <span></span>
                </div>
                @foreach($cat as $item)
                    <div class="col-lg-3">
                        <div class="item-product">
                            <div class="image-hover-text-container">
                                <div class="image-hover-image">
                                    <img src="{{$item->thumbnail}}" alt="{{$item->title}}">
                                </div>
                                <div class="image-hover-text">
                                    <div class="image-hover-text-bubble">

                                    </div>
                                </div>
                            </div>
                            <h1><a href="{{$item->path()}}">{{$item->title}}</a></h1>
                            <span class="item-product-price">{{$item->price}} تومان</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection









