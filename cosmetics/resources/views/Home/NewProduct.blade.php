<section class="newproduct bgwhite p-t-45 p-b-105">
    <div class="container">
        <div class="sec-title p-b-60">
            <h3 class="m-text5 t-center">
                محصولات پر بازدید
            </h3>
        </div>

        <!-- Slide2 -->
        <div class="wrap-slick2">
            <div class="slick2">


                @foreach($view_product as $item)
                    <div class="item-slick2 p-l-15 p-r-15">
                        <!-- Block2 -->
                        <div class="block2">
                            <div class="block2-img wrap-pic-w of-hidden pos-relative">
                                <img src="{{$item->thumbnail}}" alt="IMG-PRODUCT">

                                <div class="block2-overlay trans-0-4">

                                    <div class="block2-btn-addcart w-size1 trans-0-4">
                                        <!-- Button -->
                                        <a href="{{route('add.cart',$item)}}" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4 add_to_cart">
                                            افزودن به سبد خرید
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="block2-txt p-t-20">
                                <a href="{{$item->path()}}" class="block2-name dis-block s-text3 p-b-5 add_to_cart">
                                  {{$item->title}}
                                </a>

                                <span class="block2-price m-text6 p-r-5 add_to_cart">
								{{number_format($item->price)}} تومان
								</span>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>

    </div>
</section>
