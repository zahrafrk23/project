<div class="box box-danger">
    <div class="box-header with-border">
        <h3 class="box-title">آخرین کاربران</h3>

        <div class="box-tools pull-right">
            <span class="label label-danger">۸ کاربر جدید</span>
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                        class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                        class="fa fa-times"></i>
            </button>
        </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body no-padding">
        <ul class="users-list clearfix">
@foreach($user as $item)
                <li>
                    <img src="/images/user1-128x128.jpg" alt="User Image">
                    <a class="users-list-name">{{$item->name}}</a>
                    <span class="users-list-date"></span>
                </li>
@endforeach
        </ul>
        <!-- /.users-list -->
    </div>
    <!-- /.box-body -->
    <div class="box-footer text-center">
        <a href="javascript:void(0)" class="uppercase">نمایش همه کاربران</a>
    </div>
    <!-- /.box-footer -->
</div>