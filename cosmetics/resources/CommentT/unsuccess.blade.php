@extends('admin.Layout.master')
@section('title','نظرات تایید نشده')
@section('content')

    <div class="col-sm-12">
        <h2>نظرات تایید نشده</h2>
        <div class="page-header">
        </div>

        <div class="table-responsive">
            <table class="table table-striped" border="1">
                <thead style="background: #0f8ae2;color: white">
                <tr>
                    <td>نام کاربر</td>
                    <td>ایمیل</td>
                    <td>متن پیام</td>
                    <td>پست مربوطه</td>
                    <td>تنظیمات</td>
                </tr>
                </thead>
                <tbody>
                @foreach($comments as $comment)
                    <tr>
                        <td>{{$comment->name}}</td>
                        <td>{{$comment->email}}</td>
                        <td>{{$comment->comment}}</td>
                        <td><a href="{{$comment->commentable->path()}}">{{$comment->commentable->title}}</a></td>
                        <td>
                           <div style="display: flex">
                               <form action="{{route('comment.destroy',['id'=>$comment->id])}}" method="post">
                                   {{method_field('delete')}}
                                   {{csrf_field()}}
                                   <div class="btn-group btn-group-sm">
                                       <button class="btn btn-danger">حذف</button>
                                   </div>
                               </form>
                               <form action="{{route('comment.update',['id'=>$comment->id])}}" method="post" style="margin-right: 5px;">
                                   {{method_field('patch')}}
                                   {{csrf_field()}}
                                   <div class="btn-group btn-group-sm">
                                       <button class="btn btn-success">تائید</button>
                                   </div>
                               </form>
                           </div>
                        </td>
                    </tr>
                @endforeach

                </tbody>

            </table>
            <div class="col-lg-12">
                {{$comments->render()}}
            </div>
        </div>
    </div>

@endsection