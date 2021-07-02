<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MEG</title>
    <link rel="icon" href="{{ asset('img/MEG22.png')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ asset('css/animate.css')}}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{ asset('css/all.css')}}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css')}}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{ asset('css/slick.css')}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">

    <link rel="stylesheet" href="{{ asset('bootstrap-rtl.css')}}">

</head>

<body>
    <!--::header part start::-->
    <header class="main_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div style="margin-left:20em ;" >
                            <a class="navbar-brand main_logo" href="{{url('/')}}"> <img src="{{ asset('img/MEG22.png')}}"alt="logo"> </a>
                        </div>

                        <div style="margin-left:2em ;" >
                            <a href="{{ route('login') }}"  class="d-none d-sm-block btn_1 home_page_btn" >تسجيل الدخول</a>
                        </div>

                        <div >
                            <a href="{{ route('register') }}"  class="d-none d-sm-block btn_1 home_page_btn" >تسجيل حساب </a>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-1" style="">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">عقاراتى</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">الخدمات</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="#">الاشعارات</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="#">الطلبات</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="#">توثيق العقود</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="#">التمويل العقارى</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!--::Header part end::-->

    <!-- start of content -->
        <main style="">
                @yield('main-body')
        </main>

    <!--::footer_part start::-->
    <footer class="footer_part">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="single_footer_part">
                        <a href="#" class="footer_logo_iner"> <img src="{{ asset('img/MEG22.png')}}" width="20%" class="rounded mx-auto d-block" alt="logo"> </a>
                        <p class="text-center">Gathered. Under is whose you'll to make years is mat lights thing together fish made
                            forth thirds cattle behold won't. Fourth creeping first female
                        </p>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">

                <div class="col-lg-12">
                    <div class="footer_icon social_icon d-flex justify-content-center">
                        <ul class="list-unstyled">
                            <li><a href="#" class="single_social_icon"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" class="single_social_icon"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" class="single_social_icon"><i class="fas fa-globe"></i></a></li>
                            <li><a href="#" class="single_social_icon"><i class="fab fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--::footer_part end::-->

    <!-- jquery plugins here-->
    <script src="{{asset('js/jquery-1.12.1.min.js')}}"></script>
    <!-- popper js -->
    <script src="{{asset('js/popper.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- easing js -->
    <script src="{{asset('js/jquery.magnific-popup.js')}}"></script>
    <!-- swiper js -->
    <script src="{{asset('js/swiper.min.js')}}"></script>
    <!-- swiper js -->
    <script src="{{asset('js/masonry.pkgd.js')}}"></script>
    <!-- particles js -->
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
    <!-- slick js -->
    <script src="{{asset('js/slick.min.js')}}"></script>
    <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('js/waypoints.min.js')}}"></script>
    <script src="{{asset('js/contact.js')}}"></script>
    <script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('js/jquery.form.js')}}"></script>
    <script src="{{asset('js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('js/mail-script.js')}}"></script>
    <!-- custom js -->
    <script src="{{asset('js/custom.js')}}"></script>
</body>

</html>
