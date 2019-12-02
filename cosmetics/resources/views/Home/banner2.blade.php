<section class="banner2 bg5 p-t-55 p-b-55">
    <div class="container">
        <div class="row">

            @foreach($special as $item)
                <div class="col-sm-10 col-md-8 col-lg-6 m-l-r-auto p-t-15 p-b-15">
                    <div class="bgwhite hov-img-zoom pos-relative p-b-20per-ssm" style="text-align: center">
                        <img src="{{$item->thumbnail}}" alt="IMG-BANNER" style="margin-bottom: 190px;height: 300px;width: 50% !important;">

                        <div class="ab-t-l sizefull flex-col-c-b p-l-15 p-r-15 p-b-20">
                            <div class="t-center">
                                <a href="{{$item->path()}}" class="dis-block s-text3 p-b-5 add_to_cart">
                                 {{$item->title}}
                                </a>

                                <span class="block2-newprice m-text8 add_to_cart">
								{{number_format($item->price)}} تومان
								</span>
                            </div>

                            <div class="flex-c-m p-t-44 p-t-30-xl">
                                {{--            <div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
                                                    <span class="m-text10 p-b-1 days">
                                                        69
                                                    </span>
                                                <span class="s-text5 add_to_cart">
                                                        روز
                                                    </span>
                                            </div>--}}




                                <div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
									<span class="m-text10 p-b-1 seconds">
										59
									</span>

                                    <span class="s-text5 add_to_cart">
										ثانیه
									</span>
                                </div>
                                <div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
									<span class="m-text10 p-b-1 minutes">
										59
									</span>

                                    <span class="s-text5 add_to_cart">
										دقیقه
									</span>
                                </div>
                                <div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
									<span class="m-text10 p-b-1 hours">
										23
									</span>

                                    <span class="s-text5 add_to_cart">
										ساعت
									</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
