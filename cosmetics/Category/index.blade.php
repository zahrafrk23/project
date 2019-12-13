@extends('admin.Layout.master')
@section('content')
    <div class="col-lg-12">
        <h3>همه دسته ها</h3>
    </div>

    <div class="col-lg-12">
        <table class="table table-striped product-table">
            <thead>
            <tr>
                <th scope="col">نام</th>
                <th scope="col">تنظمیات</th>
            </tr>
            </thead>
            <tbody>
            @foreach($category as $item)
                <tr>
                    <td>{{$item->name}}</td>
                    <td>
                        <form action="{{route('category.destroy', $item->id)}}" method="post">
                            @method('DELETE')
                            @csrf
                            <div class="btn-group btn-group-sm">
                                <a href="{{route('category.edit',$item)}}"
                                   class="btn btn-primary">ویرایش</a>
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