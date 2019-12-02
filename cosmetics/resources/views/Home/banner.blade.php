<section class="banner bgwhite p-t-40 p-b-40">
    <div class="container">
        <div class="row">

@foreach($banner as $item)
            <div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto" style="text-align: center">
                <!-- block1 -->
                <div class="block1 hov-img-zoom pos-relative m-b-30">
                    <img src="{{$item->thumbnail}}" alt="IMG-BENNER" style="width: initial !important;">

                    <div class="block1-wrapbtn w-size2">
                        <!-- Button -->
                        <a href="{{$item->path()}}" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                            {{$item->name}}
                        </a>
                    </div>
                </div>
                <!-- block1 -->
            </div>
@endforeach



        </div>
    </div>
</section>
