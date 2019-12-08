@extends('admin.Layout.master')
@section('content')
    <div class="col-lg-12">
        <h3>همه کاربران</h3>
    </div>

    <div class="col-lg-12">
        <table class="table table-striped product-table">
            <thead>
            <tr>
                <th scope="col">آیدی</th>
                <th scope="col">نام</th>
                <th scope="col">سطح دسترسی</th>
                <th scope="col">شماره تماس</th>
                <th scope="col">تنظمیات</th>
            </tr>
            </thead>
            <tbody>
            @foreach($user as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>
                        @if($item->level == 'user')
                            <span>کاربر معمولی</span>
                        @endif
                        @if($item->level == 'admin')
                            <span>مدیر سایت</span>
                        @endif
                    </td>
                    <td>{{$item->phone}}</td>
                    <td>
                        <form action="{{route('user.destroy',['id'=>$item->id])}}" method="post">
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

@endsection