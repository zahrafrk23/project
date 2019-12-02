@extends('Home.master')
@section('title','افزودن آدرس جدید')
@section('content.home')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal"
                        style="float: right;margin: 20px 0">افزودن آدرس جدید
                </button>
                @include('Home.error')
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-bordered" style="text-align: right">
                    <thead>
                    <tr>
                        <th>نام گیرنده</th>
                        <th>شماره تماس</th>
                        <th>استان</th>
                        <th>شهر</th>
                        <th>کدپستی</th>
                        <th>آدرس</th>
                        <th>انتخاب آدرس</th>
                    </tr>
                    </thead>
                    <form action="{{route('payment')}}" method="post">
                      @csrf
                            <input type="hidden" name="products" value="{{implode('-',$ids)}}">
                        <tbody>
                        @foreach($address as $item)
                            <tr>
                                <td>{{$item->name}}</td>
                                <td>{{$item->phone}}</td>
                                <td>
                                    <span>{{$item->ostan}}</span>
                                </td>
                                <td>{{$item->city}}</td>
                                <td>{{$item->codeposty}}</td>
                                <td>{{$item->address}}</td>
                                <td><input type="radio" name="select" value="{{$item->id}}"></td>
                            </tr>
                        @endforeach
                        </tbody>
                        <button class="btn btn-sm btn-dark">ادامه و پرداخت</button>
                    </form>
                </table>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title" style="font: 11px isans;">ویراش آدرس تحویل گیرنده</h4>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('address')}}" method="post">
                                    {{csrf_field()}}
                                    <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                                    <div class="form-group">
                                        <div class="col-sm-6">
                                            <label for="name">نام و نام خانوادگی : </label>
                                            <input type="text" id="name" name="name"
                                                   placeholder="نام و نام خانوادگی تحویل گیرنده">
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="phone">شماره تماس : </label>
                                            <input type="text" id="phone" name="phone" placeholder="0921">
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="ostan">انتخاب استان : </label>
                                        <input type="text" name="state" id="ostan" placeholder="استان">
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="city">انتخاب شهر : </label>
                                         <input type="text" name="city" id="city" placeholder="شهر">
                                        </div>
                                        <div class="col-sm-12">
                                            <label for="adress">آدرس پستی : </label>
                                            <textarea id="adress" name="address"
                                                      placeholder="آدرس تحویل گیرنده را بنویسید"></textarea>
                                        </div>
                                        <div class="col-sm-12">
                                            <label for="code">کد پستی : </label>
                                            <input type="text" id="code" name="code"
                                                   placeholder="کد پستی را بدون خط تیره بنویسید">
                                        </div>
                                        <div class="col-sm-12">
                                            <button>ثبت و ارسال به این آدرس</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection