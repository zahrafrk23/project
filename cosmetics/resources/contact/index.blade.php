@extends('admin.Layout.master')
@section('content')

    <div class="col-sm-12">
        <h2>مدیریت تماس ها</h2>
        <div class="page-header">
        </div>

        <div class="table-responsive">
            <table class="table table-striped" border="1">
                <thead style="background: #0f8ae2;color: white">
                <tr>
                    <td>نام کاربر</td>
                    <td>ایمیل</td>
                    <td>موضوع</td>
                    <td>متن پیام</td>
                    <td>تنظیمات</td>
                </tr>
                </thead>
                <tbody>
                @foreach($contacts as $contact)
                    <tr>
                        <td>{{$contact->name}}</td>
                        <td>{{$contact->email}}</td>
                        <td>{{$contact->subject}}</td>
                        <td>{{$contact->message}}</td>
                        <td>
                            <form action="{{route('contact.destroy',['id'=>$contact->id])}}" method="post">
                                {{method_field('delete')}}
                                {{csrf_field()}}
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