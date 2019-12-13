@extends('admin.Layout.master')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            ویرایش محصول
        </h1>
        <hr>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Info boxes -->
        <form action="{{route('category.update',$category)}}" method="post" enctype="multipart/form-data" class="form-horizontal">
            {{csrf_field()}}
            {{method_field('PATCH')}}
            <div class="row">
                <div class="clearfix visible-sm-block"></div>
                @include('admin.Layout.error')


                <div class="col-md-4 col-sm-6 col-xs-12">
                    <label for="title" class="control-label">عنوان دسته : </label>
                    <input class="form-control" id="title" name="name" value="{{$category->name}}">
                </div>


                <div class="col-md-12 col-sm-6 col-xs-12">
                    <button class="btn btn-sm btn-success">ویرایش</button>
                </div>

            </div>
        </form>

    </section>

@endsection