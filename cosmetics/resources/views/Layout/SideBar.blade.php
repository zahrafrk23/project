<section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-right image">
            <img src="/images/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-right info">
            <p>مدیر سایت</p>
            <a href="#"><i class="fa fa-circle text-success"></i> آنلاین</a>
        </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="جستجو">
            <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">منو</li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-folder"></i> <span>داشبورد</span>
                <span class="pull-left-container">
              <i class="fa fa-angle-left pull-left"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{route('dashboard')}}"><i class="fa fa-circle-o"></i>داشبورد</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-folder"></i> <span>مدیریت دسته بندی</span>
                <span class="pull-left-container">
              <i class="fa fa-angle-left pull-left"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{route('category.index')}}"><i class="fa fa-circle-o"></i> مشاهده همه دسته ها</a></li>
                <li><a href="{{route('category.create')}}"><i class="fa fa-circle-o"></i> ایجاد دسته جدید</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-folder"></i> <span>مدیریت محصولات</span>
                <span class="pull-left-container">
              <i class="fa fa-angle-left pull-left"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{route('product.index')}}"><i class="fa fa-circle-o"></i> مشاهده همه محصولات</a></li>
                <li><a href="{{route('product.create')}}"><i class="fa fa-circle-o"></i> ایجاد محصول جدید</a></li>
            </ul>
        </li>


        <li class="treeview">
            <a href="#">
                <i class="fa fa-folder"></i> <span>مدیریت مقاله ها</span>
                <span class="pull-left-container">
              <i class="fa fa-angle-left pull-left"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{route('article.index')}}"><i class="fa fa-circle-o"></i> مشاهده همه مقالات</a></li>
                <li><a href="{{route('article.create')}}"><i class="fa fa-circle-o"></i> ایجاد مقاله جدید</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="fa fa-folder"></i> <span>مدیریت سفارشات</span>
                <span class="pull-left-container">
              <i class="fa fa-angle-left pull-left"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{route('admin.payment')}}"><i class="fa fa-circle-o"></i>مشاهده سفارشات</a></li>
            </ul>
        </li>


        <li class="treeview">
            <a href="#">
                <i class="fa fa-folder"></i> <span>مدیریت کاربران</span>
                <span class="pull-left-container">
              <i class="fa fa-angle-left pull-left"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{route('user.index')}}"><i class="fa fa-circle-o"></i>مشاهده کاربران</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-folder"></i> <span>مدیریت نظرات</span>
                <span class="pull-left-container">
              <i class="fa fa-angle-left pull-left"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="{{route('comment.index')}}"><i class="fa fa-circle-o"></i>مشاهده همه نظرات
                    </a>
                </li>
                <li>
                    <a href="{{route('unsuccess')}}"><i class="fa fa-circle-o"></i>نظرات تایید نشده
                        <span class="badge"></span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-folder"></i> <span>مدیریت تماس ها</span>
                <span class="pull-left-container">
              <i class="fa fa-angle-left pull-left"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="{{route('contact.index')}}"><i class="fa fa-circle-o"></i>مشاهده همه پیام ها
                    </a>
                </li>
            </ul>
        </li>


    </ul>
</section>