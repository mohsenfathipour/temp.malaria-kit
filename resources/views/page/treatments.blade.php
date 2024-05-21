@extends('layout.app')

@section('header')
    <div class="appHeader bg-primary text-light">
        <div class="left">
            <a href="/dashboard" class="headerButton" data-bs-toggle="offcanvas" data-bs-target="#sidebarPanel">
                <ion-icon name="menu-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">درمان</div>
        <div class="right">
        </div>
    </div>
@endsection

@section('page')
    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="listview-title mt-2">پزشکان شما</div>
        <ul class="listview image-listview">
            <li>
                <a href="#" class="item">
                    <img src="assets/img/sample/avatar/avatar1.jpg" alt="image" class="image">
                    <div class="in">
                        <div>
                            <header>متخصص بیماری های عفونی</header>
                            دکتر علی اژدری
                            <footer>تهران</footer>
                        </div>
                        <span class="text-muted">مشاهده</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="#" class="item">
                    <img src="assets/img/sample/avatar/avatar7.jpg" alt="image" class="image">
                    <div class="in">
                        <div>
                            <header>متخصص داخلی</header>
                            دکتر ستاره ولی محمدی
                            <footer>تهران</footer>
                        </div>
                        <span class="text-muted">مشاهده</span>
                    </div>
                </a>
            </li>
        </ul>


    </div>
    <!-- * App Capsule -->

@endsection

{{-- Seo --}}
@section('seo.title', 'درمان')
