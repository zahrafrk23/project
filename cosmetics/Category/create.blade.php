@extends('admin.Layout.master')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            افزودن محصول جدید
        </h1>
        <hr>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Info boxes -->
        <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
            {{csrf_field()}}
            <div class="row">
                <div class="clearfix visible-sm-block"></div>
                @include('admin.Layout.error')


                <div class="col-md-4 col-sm-6 col-xs-12">
                    <label for="name" class="control-label">عنوان دسته : </label>
                    <input class="form-control" id="name" name="name" placeholder="عنوان دسته">
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <label for="name" class="control-label">دسته والد : </label>
                    <select name="parent_id">
                        <option value="0">دسته اصلی</option>
                        @foreach($category as $cat)
                            <option value="{{$cat->id}}">{{$cat->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <label for="name" class="control-label"> تصویر  : </label>
                   <input type="file" name="thumbnail">
                </div>

                <div class="col-md-12 col-sm-6 col-xs-12">
                    <button class="btn btn-sm btn-success" style="margin: 15px 0;">ثبت دسته</button>
                </div>

            </div>
        </form>

    </section>

@endsection