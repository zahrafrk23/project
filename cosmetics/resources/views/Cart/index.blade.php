@extends('Home.master')
@section('title','سبد خرید')
@section('content.home')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cart">
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">مشخصات محصول</th>
                            <th scope="col">قیمت واحد</th>
                            <th scope="col">حذف</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(\Illuminate\Support\Facades\Session::get('cart-products'))
                            @foreach($products as $product)
                                <tr>
                                    <th>
                                        <a href="{{$product->path()}}"><img src="{{$product->thumbnail}}"></a>
                                        <ul>
                                            <li>
                                                <span>کد محصول : </span>
                                                <span>{{$product->id}}</span>
                                            </li>
                                            <li>
                                                <span>نام محصول : </span>
                                                <span>{{$product->title}}</span>
                                            </li>
                                        </ul>
                                    </th>
                                    <td><span class="price">{{number_format($product->price)}}</span> تومان</td>
                                    <td style="text-align: center"><a href="{{route('delete.cart',$product)}}"
                                                                      class="btn btn-sm btn-warning">حذف</a>
                                    </td>
                                </tr>
                            @endforeach

                        @endif
                        </tbody>
                    </table>
                </div>
            </div>

            @if(\Illuminate\Support\Facades\Session::get('cart-products'))
            <div class="col-lg-12">
                <div class="col-lg-4">
                    <div class="clear-cart">
                        <a href="">پاک کردن سبد خرید</a>
                    </div>
                </div>
                <div class="col-lg-4">
                </div>
                @if(auth()->check())
                    <div class="col-lg-4">
                        <div class="cart-more">
                            <a href="{{route('add.address',['id'=>auth()->user()->id])}}">ادامه خرید</a>
                        </div>
                    </div>
                @else
                    <div class="col-lg-4">
                        <div class="cart-more">
                            <a href="{{route('login')}}">ادامه خرید</a>
                        </div>
                    </div>
                @endif
            </div>
            @else
            <p>سبد خرید شما خالی است</p>
            @endif


        </div>
    </div>
@endsection