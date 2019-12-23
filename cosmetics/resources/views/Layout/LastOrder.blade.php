<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">آخرین سفارشات</h3>

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
        <div class="table-responsive">
            <table class="table no-margin">
                <thead>
                <tr>
                    <th>نام</th>
                    <th>قیمت</th>
                    <th>وضعیت</th>
                </tr>
                </thead>
                <tbody>


                @foreach($orders as $order)
                    <tr>
                        <td>
                            <a href="{{route('admin.payment.show',['id'=>$order->id])}}">{{\App\User::find($order->user_id)->name}}</a>
                        </td>
                        <td>{{$order->price}}</td>
                        <td><a href="{{route('admin.payment.show',['id'=>$order->id])}}" class="btn btn-success">مشاهده
                                جزئیات</a></td>
                    </tr>
                @endforeach


                </tbody>
            </table>
        </div>
        <!-- /.table-responsive -->
    </div>
    <!-- /.box-body -->
    <div class="box-footer clearfix">
        <a href="" class="btn btn-sm btn-default btn-flat pull-right">نمایش
            همه</a>
    </div>
    <!-- /.box-footer -->
</div>