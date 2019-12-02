@extends('Home.master')
@section('title','وبلاگ')
@section('content.home')
    <!-- Title Page -->
    <section class="bg-title-page p-t-40 p-b-50 flex-col-c-m"
             style="background-image: url(images/heading-pages-05.jpg);">
        <h2 class="l-text2 t-center" style="font: 18px 'IRAN SANS Expanded'">
            مقالات سایت
        </h2>
    </section>

    <!-- content page -->
    <section class="bgwhite p-t-60">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-9 p-b-75">
                    <div class="p-r-50 p-r-0-lg">
                        <!-- item blog -->

                        @foreach($articles as $article)
                            <div class="item-blog p-b-80">
                                <a href="{{$article->path()}}" class="item-blog-img pos-relative dis-block hov-img-zoom">
                                    <img src="{{$article->images}}" alt="IMG-BLOG">

                                    <span class="item-blog-date dis-block flex-c-m pos1 size17 bg4 s-text1">
									{{verta($article->created_at)->format('Y/n/j')}}
								</span>
                                </a>

                                <div class="item-blog-txt p-t-33">
                                    <h4 class="p-b-11">
                                        <a href="{{$article->path()}}" class="m-text24">
                                            {{$article->title}}
                                        </a>
                                    </h4>

                                    <div class="s-text8 flex-w flex-m p-b-21">
									<span>
                                        مدیر سایت
										<span class="m-l-3 m-r-6">|</span>
									</span>

                                    </div>

                                    <p class="p-b-12">
                                        {!! str_limit($article->body,170) !!}
                                    </p>

                                    <a href="{{$article->path()}}" class="s-text20">
                                     ادامه مطلب
                                        <i class="fa fa-long-arrow-right m-l-8" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        @endforeach


                    </div>

                    <!-- Pagination -->
              {{$articles->render()}}
                </div>


            </div>
        </div>
    </section>
@endsection