@extends('Home.master')
@section('title','ارتباط با ما')
@section('content.home')
    <!-- Title Page -->
    <section class="bg-title-page p-t-40 p-b-50 flex-col-c-m"
             style="background-image: url(/images/heading-pages-05.jpg);">
        <h2 class="l-text2 t-center">
            ارتباط با ما
        </h2>
    </section>
    <div class="col-lg-14" style="width: 100% !important;">
        @include('Home.error')
    </div>
    <!-- content page -->
    <section class="bgwhite p-t-66 p-b-60">
        <div class="container">
            <div class="row">
                <div class="col-md-6 p-b-30">
                    <div class="p-r-20 p-r-0-lg" style="margin-top: 87px;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61646.780606634486!2d51.390135467662276!3d35.703837180805756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f8e00491ff3dcd9%3A0xf0b3697c567024bc!2z2KrZh9ix2KfZhtiMINin2LPYqtin2YYg2KrZh9ix2KfZhtiMINin24zYsdin2YY!5e0!3m2!1sfa!2s!4v1568620140395!5m2!1sfa!2s"
                                width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>

                <div class="col-md-6 p-b-30">
                    <form action="{{route('contact.create.index')}}" class="leave-comment" method="post">
                        @csrf
                        <h4 class="m-text26 p-b-36 p-t-15" style="font: 18px 'IRAN SANS Expanded'">
                            جهت ارتباط با ما فرم زیر را پر کنید
                        </h4>

                        <div class="bo4 of-hidden size15 m-b-20" style="width: 100% !important;;margin-right: 35px;">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="name" placeholder="نام شما">
                        </div>

                        <div class="bo4 of-hidden size15 m-b-20"  style="width: 100% !important;;margin-right: 35px;">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="subject"
                                   placeholder="موضوع">
                        </div>

                        <div class="bo4 of-hidden size15 m-b-20"  style="width: 100% !important;;margin-right: 35px;">
                            <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="email" placeholder="ایمیل">
                        </div>

                        <textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-20" name="message"
                                  placeholder="متن پیام"  style="width: 100% !important;;margin-right: 35px;"></textarea>

                        <div class="w-size25" style="float: right">
                            <!-- Button -->
                            <button class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4" style="margin-right: 50px;">
                                ارسال
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection