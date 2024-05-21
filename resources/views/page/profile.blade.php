@extends('layout.app')

@section('header')
    <div class="appHeader bg-primary text-light">
        <div class="left">
            <a href="/dashboard" class="headerButton" data-bs-toggle="offcanvas" data-bs-target="#sidebarPanel">
                <ion-icon name="menu-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">پروفایل</div>
        <div class="right">
        </div>
    </div>
@endsection

@section('page')
    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="section mt-2">
            <div class="profile-head">
                <div class="avatar">
                    <img src="/assets/img/sample/avatar/avatar5.jpg" alt="avatar" class="imaged w64 rounded">
                </div>
                <div class="in">
                    <h3 class="name">محسن فتحی پور</h3>
                    <h5 class="subtext">کاربر</h5>
                </div>
            </div>
        </div>

        {{--<div class="section mt-1 mb-2">
            <div class="profile-info">
                <div class=" bio">
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                </div>
                <div class="link">
                    <a href="#">پاریس</a>,
                    <a href="#">فرانسه</a>
                </div>
            </div>
        </div>--}}

        <ul class="listview image-listview flush transparent mt-3 mb-2">

            <li>
                <a href="" class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="document-text-outline"></ion-icon>
                    </div>
                    <div class="in">
                        ویرایش پروفایل
                    </div>
                </a>
            </li>

            <li>
                <a href="" class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="finger-print-outline"></ion-icon>
                    </div>
                    <div class="in">
                        رمزعبور
                    </div>
                </a>
            </li>

                <li>
                    <a href="" class="item">
                        <div class="icon-box bg-primary">
                            <ion-icon name="call-outline"></ion-icon>
                        </div>
                        <div class="in">
                            ثبت شماره موبایل
                        </div>
                    </a>
                </li>


            <li>
                <a href="" class="item">
                    <div class="icon-box bg-danger">
                        <ion-icon name="log-out-outline"></ion-icon>
                    </div>
                    <div class="in">
                        خروج
                    </div>
                </a>
            </li>
        </ul>

    </div>
    <!-- * App Capsule -->

@endsection

{{-- Seo --}}
@section('seo.title', 'پروفایل')
