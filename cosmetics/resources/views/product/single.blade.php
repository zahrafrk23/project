@extends('Home.master')
@section('title',$product->title)
@section('content.home')
    <!-- breadcrumb -->
    <div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
        <a href="index.html" class="s-text16">
            صفحه اصلی
            <i class="fa fa-angle-left m-l-8 m-r-9" aria-hidden="true"></i>
        </a>

        <a href="{{route('product')}}" class="s-text16">
            فروشگاه
            <i class="fa fa-angle-left m-l-8 m-r-9" aria-hidden="true"></i>
        </a>

        <span class="s-text17">
			{{$product->title}}
		</span>
    </div>

    <!-- Product Detail -->
    <div class="container bgwhite p-t-35 p-b-80">
        <div class="flex-w flex-sb">
            <div class="w-size13 p-t-30 respon5">
                <div class="wrap-slick3 flex-sb flex-w">
                    <div class="wrap-slick3-dots"></div>

                    <div class="slick3">

                            <div class="wrap-pic-w">
                                <img src="{{$product->thumbnail}}" alt="IMG-PRODUCT">
                            </div>


                    </div>
                </div>
            </div>

            <div class="w-size14 p-t-30 respon5">
                <h4 class="product-detail-name m-text16 p-b-13" style="font: 14px 'IRAN SANS Expanded'">
                    {{$product->title}}
                </h4>

                <span class="m-text17" style="font: 11px 'IRAN SANS Expanded'">

                    {{number_format($product->price)}}
                    تومان
				</span>

                <p class="s-text8 p-t-10" style="font: 11px 'IRAN SANS Expanded'">
                    {!! str_limit($product->description,170) !!}
                </p>

                <!--  -->
                <div class="p-t-33 p-b-60">

                    <div class="flex-r-m flex-w p-t-10">
                        <div class="w-size16 flex-m flex-w">
                            <div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
                                <!-- Button -->
                                <a href="{{route('add.cart',$product)}}" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4"
                                   style="font: 11px 'IRAN SANS Expanded'">
                                    افزودن به سبد خرید
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="p-b-45">
                    <span class="s-text8" style="font: 11px 'IRAN SANS Expanded'">
                        دسته ها :
                        @foreach($product->category()->get() as $item)
                            {{$item->name}}
                        @endforeach
                    </span>
                </div>

                <!--  -->


            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="product-description2">
                    <h2>توضیحات محصول</h2>
                    <hr>
                    {!! $product->description !!}
                </div>
            </div>
        </div>
    </div>

    <!-- Relate Product -->
    <section class="relateproduct bgwhite p-t-45 p-b-138">
        <div class="container">
            <div class="sec-title p-b-60">
                <h3 class="m-text5 t-center">
                    محصولات ویژه
                </h3>
            </div>

            <!-- Slide2 -->
            <div class="wrap-slick2">
                <div class="slick2">

                    @foreach($special as $item)
                        <div class="item-slick2 p-l-15 p-r-15">
                            <!-- Block2 -->
                            <div class="block2">
                                <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                                    <img src="{{$item->thumbnail}}" alt="IMG-PRODUCT">

                                    <div class="block2-overlay trans-0-4">

                                        <div class="block2-btn-addcart w-size1 trans-0-4">
                                            <!-- Button -->
                                            <a href="{{route('add.cart',$product)}}" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4 add_to_cart">
                                                افزودن به سبد خرید
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="block2-txt p-t-20">
                                    <a href="{{$item->path()}}" class="block2-name dis-block s-text3 p-b-5">
                                        {{$item->title}}
                                    </a>

                                    <span class="block2-price m-text6 p-r-5">
									{{number_format($item->price)}} تومان
								</span>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>


            <div class="send-comment" style="float: right;width: 100%;">
                <form action="{{route('comment')}}" class="leave-comment" method="post">
                    {{csrf_field()}}
                    <input type="hidden" name="parent_id" value="0">
                    <input type="hidden" name="commentable_id" value="{{$product->id}}">
                    <input type="hidden" name="commentable_type"
                           value="{{get_class($product)}}">
                    <h4 class="m-text25 p-b-14">
                        ارسال نظر
                    </h4>

                    <p class="s-text8 p-b-40">
                        آدرس ایمیل شما منتشر نخواهد شد. قسمت های مورد نیاز علامت گذاری شده است *
                    </p>

                    <textarea class="dis-block s-text7 size18 bo12 p-l-18 p-r-18 p-t-13 m-b-20" name="comment"
                              placeholder="نظر خود را بنویسید"></textarea>

                    <div class="bo12 of-hidden size19 m-b-20">
                        <input class="sizefull s-text7 p-l-18 p-r-18" type="text" name="name" placeholder="نام  *">
                    </div>

                    <div class="bo12 of-hidden size19 m-b-20">
                        <input class="sizefull s-text7 p-l-18 p-r-18" type="text" name="email" placeholder="ایمیل *">
                    </div>


                    <div class="w-size24">
                        <!-- Button -->
                        <button class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4" style="width: 30%;border-radius: 0 !important;float: right;margin: 0 !important;padding: 24px;
line-height: 0;">
                            ثبت نظر
                        </button>
                    </div>
                </form>

            </div>

            <div class="comments-product">
                <span style="margin-bottom:20px;display: block ">مشاهده نظرات</span>
                @foreach($comments as $comment)
                    <div class="item-comment">
                        <i class="fa fa-2x fa-users"
                           style="float: right"></i>
                        <span style="font-size: 15px;">{{$comment->name}}</span>
                        <span>{{verta($comment->created_at)->format('Y/n/j')}}</span>
                        <p>{{$comment->comment}}</p>
                        <button type="button"
                                class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"
                                data-toggle="modal" data-parent="{{$comment->id}}"
                                data-target="#myModal">پاسخ
                        </button>
                    </div>

                    @foreach($comment->comments as $cildComment)
                        <div class="cild_comment">
                            <i class="fa fa-2x fa-users"
                               style="float: right"></i>
                            <span style="font-size: 15px;">{{$cildComment->name}}</span>
                            <span>{{verta($cildComment->created_at)->format('Y/n/j')}}</span>
                            <p>{{$cildComment->comment}}</p>
                        </div>
                    @endforeach

                @endforeach


            </div>

            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">

                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title" style="font: 10px isans">ارسال پاسخ</h4>
                        </div>

                        <div class="modal-body">
                            <form action="{{route('comment')}}" method="post">
                                {{csrf_field()}}
                                <input type="hidden" name="parent_id" value="0">
                                <input type="hidden" name="commentable_id" value="{{$product->id}}">
                                <input type="hidden" name="commentable_type"
                                       value="{{get_class($product)}}">
                                <input type="text" name="name" placeholder="نام شما"
                                       style="float: right;width: 100%;text-align: right;font: 12px 'IRAN SANS Expanded';border: 1px solid #ccc !important;margin-bottom: 5px;padding: 5px;">
                                <input type="text" name="email" placeholder="ایمیل شما"
                                       style="float: right;width: 100%;text-align: right;font: 12px 'IRAN SANS Expanded';border: 1px solid #ccc !important;margin-bottom: 5px;padding: 5px;">
                                <textarea name="comment" id="replay" placeholder="متن پاسخ"
                                          style="padding: 5px;width: 100%;text-align: right;font: 11px 'IRAN SANS Expanded'"></textarea>
                                <button class="btn btn-sm btn-success"
                                        style="font: 13px 'IRAN SANS Expanded';width: 30%;float: right">ثبت
                                </button>
                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection