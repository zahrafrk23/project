<section class="blog bgwhite p-t-94 p-b-65">
    <div class="container">
        <div class="sec-title p-b-52">
            <h3 class="m-text5 t-center">
                مقالات
            </h3>
        </div>

        <div class="row">


            @foreach($article as $item)
            <div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
                <!-- Block3 -->
                <div class="block3">
                    <a href="{{$item->path()}}" class="block3-img dis-block hov-img-zoom">
                        <img src="{{$item->images}}" alt="IMG-BLOG">
                    </a>

                    <div class="block3-txt p-t-14">
                        <h4 class="p-b-7">
                            <a href="{{$item->path()}}" class="m-text11 add_to_cart">
                              {{$item->title}}
                            </a>
                        </h4>

                        <div class="more-det">
                            <span class="s-text6">نوشته شده توسط : </span> <span class="s-text7">مدیر سایت</span>
                            <span class="s-text6">تاریخ : </span> <span class="s-text7">{{verta($item->created_at)->format('Y/n/j')}}</span>
                        </div>
                        <p class="s-text8 p-t-16 add_to_cart">
                            {!! str_limit($item->body,170) !!}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach









        </div>
    </div>
</section>
