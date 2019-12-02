<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        @yield('title')
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/css/themify-icons.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/css/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/css/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/css/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-rtl.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/css/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/css/slick.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/css/lightbox.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/css/util.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <link rel="stylesheet" href="/css/sweetalert.css">
    <!--===============================================================================================-->
</head>
<body class="animsition">

<!-- Header -->
<header class="header1">
    <!-- Header desktop -->
    <div class="container-menu-header">
        <div class="topbar">
            <div class="topbar-social">
                <a href="#" class="topbar-social-item fa fa-facebook"></a>
                <a href="#" class="topbar-social-item fa fa-instagram"></a>
                <a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
                <a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
                <a href="#" class="topbar-social-item fa fa-youtube-play"></a>
            </div>

            <span class="topbar-child1 search-form" style="width: 35%;">
			<form action="{{route('search')}}" method="get" class="form-search">
                   <input type="text" name="search"
                          placeholder="نام کالا، برند و یا دسته مورد نظر خود را جستجو کنید …">
                    <button><i class="fa fa-search"></i></button>
            </form>
				</span>


            @if(auth()->check())
                <div class="topbar-child2">
					<span class="topbar-email">
                     <a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect logout btn btn-sm btn-danger"
                        href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('خروج') }}
                    </a>
                        <a href="" class="btn btn-sm btn-success" style="margin-left:6px; ">پنل کاربری</a>
                        @if(auth()->user()->level=='admin')
                            <a href="{{route('dashboard')}}" class="btn btn-sm btn-warning" style="margin-left: 6px;">پنل مدیریت</a>
                        @endif
					</span>
                </div>

                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                      style="display: none;">
                    @csrf
                </form>
            @else
                <div class="topbar-child2">
					<span class="topbar-email">
                    <i class="fa fa-2x fa-user"></i>
                        <a href="{{route('login')}}">  ورود</a>
                       
                        <i class="fa fa-2x fa-user-plus"></i>
                        <a href="{{route('register')}}" style="margin-left: 10px;">  ثبت نام</a>
                      
					</span>
                </div>
            @endif


        </div>

        <div class="wrap_header">
            <!-- Logo -->
            <a href="index.html" class="logo">
					<img src="/images/pink.jpg" alt="IMG-LOGO">
				</a>

            <!-- Menu -->
            <div class="wrap_menu">
                <nav class="menu">
                    <ul class="main_menu">
                        <li>
                            <a href="{{route('home')}}">صفحه اصلی</a>
                            <!--<ul class="sub_menu">
                                <li><a href="index.html">Homepage V1</a></li>
                                <li><a href="home-03.html">Homepage V3</a></li>
                            </ul>-->
                        </li>

                        @foreach($categories as $category)
                            <li>
                                <a href="{{$category->path()}}">{{ $category->name }}</a>
                                <ul>
                                    @foreach($subcategories as $subcategory)
                                        @if($subcategory->parent_id == $category->id)
                                            <li><a href="{{$subcategory->path()}}">{{ $subcategory->name }}</a></li>
                                        @endif
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach


                    </ul>
                </nav>
            </div>

            <!-- Header Icon -->
            <div class="header-icons">
                <a href="{{route('user.panel')}}" class="header-wrapicon1 dis-block">
                    <img src="/images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
                </a>

                <span class="linedivide1"></span>

                <div class="header-wrapicon2">
                    <img src="/images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
                    <span class="header-icons-noti">{{$products->count()}}</span>

                    <!-- Header cart noti -->
                    <div class="header-cart header-dropdown">
                        <ul class="header-cart-wrapitem">

                            @foreach($products as $product)
                                <li class="header-cart-item">
                                    <div class="header-cart-item-img">
                                        <img src="{{$product->thumbnail}}" alt="IMG">
                                    </div>

                                    <div class="header-cart-item-txt">
                                        <a href="{{$product->path()}}" class="header-cart-item-name">
                                            {{$product->title}}
                                        </a>

                                        <span class="header-cart-item-info">
										{{number_format($product->price)}}
										</span>
                                    </div>
                                </li>
                            @endforeach

                        </ul>


                        @if(\Illuminate\Support\Facades\Session::get('cart-products'))
                        <div class="header-cart-buttons">
                            <div class="header-cart-wrapbtn">
                                <!-- Button -->
                                <a href="{{route('cart')}}" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                    سبد خرید
                                </a>
                            </div>

                            <div class="header-cart-wrapbtn">
                                <!-- Button -->
                                @if(auth()->check())
                                    <a href="{{route('add.address',['id'=>auth()->user()->id])}}"
                                       class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                        نکمیل خرید
                                    </a>
                                @else
                                    <a href="{{route('login')}}"
                                       class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                        نکمیل خرید
                                    </a>
                                @endif
                            </div>
                        </div>
                        @else
                        <p>سبد خرید شما خالی است</p>
                        @endif



                    </div>
                </div>
            </div>
        </div>
    </div>


</header>