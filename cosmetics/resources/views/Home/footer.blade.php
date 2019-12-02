<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45" style="float: right;width: 100%">
    <div class="flex-w p-b-90">
        <div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
            <h4 class="s-text12 p-b-30 add_to_cart">
                ارتباط با ما
            </h4>

            <div>
                <p class="s-text7 w-size27 add_to_cart">
                    هر سوالی دارین از ما بپرسین
                    <br>
                    شما برای انتخاب هر محصول در فروشگاه اینترنتی می‌تونید به راحتی مشاوره اختصاصی بگیرین و بهترین انتخاب
                    رو داشته باشین :)
                    <br>
                    زمان پاسخگویی شنبه تا چهارشنبه (9:00 الی 18:00) ـ پنج شنبه (9:00 الی 17:00)

                </p>


                <div class="flex-m p-t-30">
                    <a href="#" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
                    <a href="#" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
                    <a href="#" class="fs-18 color1 p-r-20 fa fa-pinterest-p"></a>
                    <a href="#" class="fs-18 color1 p-r-20 fa fa-snapchat-ghost"></a>
                    <a href="#" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a>
                </div>
            </div>
        </div>

        <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4 add_to_cart">
            <h4 class="s-text12 p-b-30 add_to_cart">
                دسته بندی ها
            </h4>

            <ul>
                @foreach($all_category as $item)
                    <li class="p-b-9">
                        <a href="{{$item->path()}}" class="s-text7">
                            {{$item->name}}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4 add_to_cart">
            <h4 class="s-text12 p-b-30 add_to_cart">
                دسترسی سریع
            </h4>

            <ul>

                <li class="p-b-9">
                    <a href="{{route('about')}}" class="s-text7">
                        درباره ما
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="{{route('contact')}}" class="s-text7">
                        تماس با ما
                    </a>
                </li>
                <li class="p-b-9">
                    <a href="{{route('article')}}" class="s-text7">
                    مقالات
                    </a>
                </li>
                <li class="p-b-9">
                    <a href="{{route('home')}}" class="s-text7">
                        صفحه اصلی
                    </a>
                </li>
            </ul>
        </div>

        <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4 add_to_cart">
            <h4 class="s-text12 p-b-30 add_to_cart">
                راهنما
            </h4>

            <ul>
                <li class="p-b-9">
                    <a href="{{route('home')}}" class="s-text7">
                        پیگیری سفارش
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="{{route('faq')}}" class="s-text7">
                        سوالات متداول
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="{{route('product')}}" class="s-text7">
                        فروشگاه
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="{{route('rule')}}" class="s-text7">
                        قوانین و مقررات
                    </a>
                </li>
            </ul>
        </div>

        <div class="w-size8 p-t-30 p-l-15 p-r-15 respon3 add_to_cart">
            <h4 class="s-text12 p-b-30 add_to_cart">
                خبرنامه
            </h4>

            <form>
                <div class="effect1 w-size9">
                    <input class="s-text7 bg6 w-full p-b-5" type="text" name="email" placeholder="email@example.com">
                    <span class="effect1-line"></span>
                </div>

                <div class="w-size2 p-t-20">
                    <!-- Button -->
                    <button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4 add_to_cart">
                        عضویت
                    </button>
                </div>

            </form>
        </div>
    </div>

    <div class="t-center p-l-15 p-r-15">


        <div class="t-center s-text8 p-t-20 add_to_cart">
            <a href="http://sabadev.ir" target="_blank" style="font-family: isans">طراحی سایت</a> و
            <a href="http://sabadev.ir" target="_blank" style="font-family: isans">سئو</a>
            توسط : صبا توسعه
        </div>
    </div>
</footer>
<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
</div>
<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script type="text/javascript" src="/js/jquery.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="/js/popper.js"></script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="/js/select2.min.js"></script>
<script type="text/javascript">
    $(".selection-1").select2({
        minimumResultsForSearch: 20,
        dropdownParent: $('#dropDownSelect1')
    });
</script>
<!--===============================================================================================-->
<script type="text/javascript" src="/js/slick.min.js"></script>
<script type="text/javascript" src="/js/slick-custom.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="/js/countdowntime.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="/js/lightbox.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="/js/sweetalert.min.js"></script>


<!--===============================================================================================-->
<script src="/js/main.js"></script>
<script src="/js/sweetalert.min.js"></script>
<script>
    $('#myModal').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget);
        let parentId = button.data('parent');
        let modal = $(this);
        modal.find("[name = 'parent_id']").val(parentId);
    })
</script>
<script>
    $('.tabs ul li').click(function () {
        $('.tabs ul li').removeClass('active');
        $(this).addClass('active');
        $('.tab-child section').fadeOut(0);
        var index = $(this).index();
        $('.tab-child section').eq(index).fadeIn(0);
    });

</script>
<script>
    (function () {

        'use strict';

        // define variables
        var items = document.querySelectorAll(".timeline li");

        // check if an element is in viewport
        // http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
        function isElementInViewport(el) {
            var rect = el.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        }

        function callbackFunc() {
            for (var i = 0; i < items.length; i++) {
                if (isElementInViewport(items[i])) {
                    items[i].classList.add("in-view");
                }
            }
        }

        // listen for events
        window.addEventListener("load", callbackFunc);
        window.addEventListener("resize", callbackFunc);
        window.addEventListener("scroll", callbackFunc);

    })();
</script>
@include('sweet::alert')
</body>
</html>
