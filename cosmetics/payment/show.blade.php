@extends('admin.Layout.master')
@section('content')
    <div class="col-lg-12">
        <h3>جزئیات سفارش</h3>
        <hr>
    </div>

    <div class="col-lg-12">
        <label>محصولات خریداری شده :</label>
        @foreach($products as $product)
            <a href="{{$product->path()}}" class="alert alert-success" style="float: right;width: 100%;padding: 3px;
margin-bottom: 20px;">{{$product->title}}</a>
        @endforeach
        <hr>
        <div class="form-group">
            <label>نام گیرنده : </label>
            <span>{{$address->name}}</span>
        </div>
        <div class="form-group">
            <label>شماره تماس : </label>
            <span>{{$address->phone}}</span>
        </div>

        <div class="form-group">
            <label>استان : </label>
            <span>{{$address->ostan}}</span>
        </div>

        <div class="form-group">
            <label>شهر : </label>
            <span>{{$address->city}}</span>
        </div>
        <div class="form-group">
            <label>کد پستی : </label>
            <span>{{$address->codeposty}}</span>
        </div>
        <div class="form-group">
            <label>آدرس : </label>
            <span>{{$address->address}}</span>
        </div>
    </div>

@endsection