@extends('Home.master')
@section('title','محصولات سایت')
@section('content.home')
    <!-- Title Page -->
    <section class="bg-title-page p-t-50 p-b-40 flex-col-c-m"
             style="background-image: url(images/heading-pages-01.jpg);">
        <h2 class="l-text2 t-center">
            محصولات سایت
        </h2>
    </section>


    <!-- Content page -->
    <section class="bgwhite p-t-55 p-b-65">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                    <div class="leftbar p-r-20 p-r-0-sm">
                        <!--  -->
                        <h4 class="m-text14 p-b-7">
                            دسته بندی ها
                        </h4>

                        <ul class="p-b-54">
                            @foreach($category as $item)
                                <li class="p-t-4">
                                    <a href="{{$item->path()}}" class="s-text13">
                                        {{$item->name}}
                                    </a>
                                </li>
                            @endforeach
                        </ul>

                    </div>
                </div>

                <div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
                    <!--  -->

                    <!-- Product -->
                    <div class="row">

                        @foreach($files as $file)
                            <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
                                <!-- Block2 -->
                                <div class="block2">
                                    <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                                        <img src="{{$file->thumbnail}}" alt="IMG-PRODUCT">

                                        <div class="block2-overlay trans-0-4">


                                            <div class="block2-btn-addcart w-size1 trans-0-4">
                                                <!-- Button -->
                                                <a href="{{route('add.cart',$file)}}" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4 add_to_cart">
                                                    افزودن به سبد خرید
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="block2-txt p-t-20">
                                        <a href="{{$file->path()}}" class="block2-name dis-block s-text3 p-b-5">
                                        {{$file->title}}
                                        </a>

                                        <span class="block2-price m-text6 p-r-5">
										{{number_format($file->price)}} تومان
									</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>

                    <!-- Pagination -->
             {{$files->render()}}
                </div>
            </div>
        </div>
    </section>
@endsection