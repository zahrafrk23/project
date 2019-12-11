@extends('admin.Layout.master')
@section('title','نظرات سایت')
@section('content')

    <div class="col-sm-12">
        <h2>مدیریت نظرات</h2>
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
                            <form action="{{route('comment.destroy',$comment)}}" method="post">
                                @method('DELETE')
                                @csrf
                                <div class="btn-group btn-group-sm">
                                    <button class="btn btn-danger">حذف</button>
                                </div>
                            </form>
                        </td>
                    </tr>
                @endforeach

                </tbody>

            </table>
        </div>
    </div>

@endsection