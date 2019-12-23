<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> کنترل پنل مدیریت</title>
    <link rel="stylesheet" href="/css/admin.css">
    <link rel="stylesheet" href="/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="/css/sweetalert.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  @include('admin.Layout.Header')
    <aside class="main-sidebar">
        @include('admin.Layout.SideBar')
    </aside>

    <div class="content-wrapper">
        @yield('content')
    </div>



    <footer class="main-footer text-left">
        <strong>تمام حقوق برای این وبسایت محفوظ است</strong>
    </footer>
    <div class="control-sidebar-bg"></div>
</div>
<script src="/js/admin.js"></script>
<script src="/js/bootstrap-select.min.js"></script>
<script src="/js/sweetalert.min.js"></script>
@include('sweet::alert')
</body>
</html>
