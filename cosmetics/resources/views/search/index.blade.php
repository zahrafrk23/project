@extends('home.master')
@section('title')
    {{$keyWord}}
@endsection
@section('content.home')
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="filter">
                    <form action="{{route('search')}}" method="get">
                        <div class="filter-item">
                            <h4 style="font: 11px 'IRAN SANS Expanded'">دسته بندی محصولات</h4>

                            @foreach($cats as $item)
                                <label>
                                    <input type="checkbox" name="category[]" value="{{$item->id}}" >
                                    {{$item->name}}
                                </label>
                            @endforeach

                        </div>

                        <div class="filter-item">
                            <h4  style="font: 11px 'IRAN SANS Expanded'">وضعیت محصول</h4>

                            <label>
                                <input type="radio" name="status" value="1"  style="font: 11px 'IRAN SANS Expanded'">
                                موجود
                            </label>
                            <label>
                                <input type="radio" name="status" value="0"  style="font: 11px 'IRAN SANS Expanded'">
                                ناموجود
                            </label>
                        </div>

                        <hr>
                        <button class="btn btn-sm btn-success" style="width: 100%;font: 11px 'IRAN SANS Expanded'">فیلتر اطلاعات</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-10">
                @if(!empty($searchs))
                    <div class="keyWord">
                    </div>
                    @foreach($searchs as $item)
                        <div class="col-lg-3">
                            <div class="item-product">
                                <div cstylass="image-hover-text-container">
                                    <div class="image-hover-image">
                                        <img src="{{$item->thumbnail}}" alt="{{$item->title}}">
                                    </div>
                                    <div class="image-hover-text">
                                        <div class="image-hover-text-bubble">
                                            <a href="{{route('add.cart',['id' => $item->id])}}"
                                               class="add-to-cart">افزودن
                                                به سبد خرید</a>
                                        </div>
                                    </div>
                                </div>
                                <h1><a href="{{$item->path()}}">{{$item->title}}</a></h1>
                                <span class="item-product-price">{{$item->price}} تومان</span>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p class="alert alert-danger">اطلاعاتی با این مشخصات یافت نشد</p>
                @endif
            </div>
        </div>
    </div>
@endsection