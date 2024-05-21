<!doctype html>
<html lang="fa-IR" dir="rtl">
<head>
    @include('include.seo')

    <link rel="stylesheet" href="/assets/css/normalize.css">
    <link rel="stylesheet" href="/assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="/assets/front/css/inc/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/front/css/inc/splide/splide.min.css">
    <link rel="stylesheet" href="/assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="/assets/css/yekan-bakh.css">
    <link rel="stylesheet" href="/assets/front/css/style.css?v=7">
    @yield('style')
</head>
<body>

<!-- loader -->
<div id="loader">
    <div class="spinner-border text-primary" role="status"></div>
</div>
<!-- * loader -->

@section('header')
    <!-- App Header -->
    <div class="appHeader bg-primary scrolled">
        <div class="left">
            <a href="#" class="headerButton" data-bs-toggle="offcanvas" data-bs-target="#sidebarPanel">
                <ion-icon name="menu-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">
            برکت
        </div>
        <div class="right">
           {{-- <a href="#" class="headerButton toggle-searchbox">
                <ion-icon name="search-outline"></ion-icon>
            </a>--}}
        </div>
    </div>
    <!-- * App Header -->
@show

@section('searchbar')
    <!-- Search Component -->
    <div id="search" class="appHeader">
        <form class="search-form">
            <div class="form-group searchbox">
                <input type="text" class="form-control" placeholder="جستجو...">
                <i class="input-icon">
                    <ion-icon name="search-outline"></ion-icon>
                </i>
                <a href="#" class="ms-1 close toggle-searchbox">
                    <ion-icon name="close-circle"></ion-icon>
                </a>
            </div>
        </form>
    </div>
    <!-- * Search Component -->
@show

@include('include.flash')

@yield('page')

@section('menu_bottom')
    @include('include.menu_bottom')
@show

@section('sidebar')
    @include('include.sidebar')
@show


<!-- ============== Js Files ==============  -->
<!-- Bootstrap -->
<script src="/assets/front/js/lib/bootstrap.min.js"></script>
<!-- Ionicons -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<!-- Splide -->
<script src="/assets/front/js/plugins/splide/splide.min.js"></script>
<!-- ProgressBar js -->
<script src="/assets/front/js/plugins/progressbar-js/progressbar.min.js"></script>
<!-- Base Js File -->
<script src="/assets/front/js/base.js?v=1"></script>
@yield('script')

</body>
</html>
