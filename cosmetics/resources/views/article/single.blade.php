@extends('Home.master')
@section('title',$article->title)
@section('content.home')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="article-title">
                    <h3 style="font-family: isans;">{{$article->title}}</h3>
                    <div class="more-article">
                        <div class="author">
                            <i class="fa fa-user"></i>
                            <span>نویسنده : </span>
                            <span><a href="">مدیر سایت</a></span>
                        </div>
                        <div class="date-create">
                            <i class="fa fa-calendar"></i>
                            <span>تاریخ انتشار : </span>
                            <span>{{verta($article->created_at)->format('Y/n/j')}}</span>
                        </div>
                        <div class="category">
                            <i class="fa fa-list-ul"></i>
                            <span>تعداد بازدید : </span>
                            <span>{{$article->viewCount}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12">
                <div class="article-content">


                    <div class="description">
                        <p>
                            {!! $article->body !!}

                        </p>


                    </div>


                </div>


                <form action="{{route('comment')}}" class="leave-comment" method="post">
                    {{csrf_field()}}
                    <input type="hidden" name="parent_id" value="0">
                    <input type="hidden" name="commentable_id" value="{{$article->id}}">
                    <input type="hidden" name="commentable_type"
                           value="{{get_class($article)}}">
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
            </div>
        </div>
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
                        <input type="hidden" name="commentable_id" value="{{$article->id}}">
                        <input type="hidden" name="commentable_type"
                               value="{{get_class($article)}}">
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
@endsection