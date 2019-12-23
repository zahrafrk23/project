<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">آخرین محصولات</h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                        class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                        class="fa fa-times"></i></button>
        </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <ul class="products-list product-list-in-box">
@foreach($products as $product)
                <li class="item">
                    <div class="product-img">
                        <img src="{{$product->thumbnail}}" alt="Product Image">
                    </div>
                    <div class="product-info">
                        <a href="" class="product-title">{{$product->title}}
                            <span class="label label-warning pull-left">{{$product->price}}</span></a>
                    </div>
                </li>
@endforeach
        </ul>
    </div>
    <!-- /.box-body -->
    <div class="box-footer text-center">
        <a href="" class="uppercase">نمایش همه</a>
    </div>
    <!-- /.box-footer -->
</div>