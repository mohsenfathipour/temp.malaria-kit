@extends('layout.app')

@section('header')
    <div class="appHeader bg-primary text-light">
        <div class="left">
            <a href="/dashboard" class="headerButton" data-bs-toggle="offcanvas" data-bs-target="#sidebarPanel">
                <ion-icon name="menu-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">کیت ها</div>
        <div class="right">
        </div>
    </div>
@endsection

@section('page')
    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="listview-title mt-2">لیست کیت های وارد شده</div>
        <ul class="listview image-listview">
            <li>
                <div class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="qr-code-outline"></ion-icon>
                    </div>
                    <div class="in">
                        <div>کیت مالاریا</div>
                        <span class="text-muted">مشاهده</span>
                    </div>
                </div>
            </li>
            <li>
                <div class="item">
                    <div class="icon-box bg-secondary">
                        <ion-icon name="qr-code-outline"></ion-icon>
                    </div>
                    <div class="in">
                        <div>کیت کرونا</div>
                        <span class="text-muted">مشاهده</span>
                    </div>
                </div>
            </li>
            <li>
                <div class="item">
                    <div class="icon-box bg-secondary">
                        <ion-icon name="qr-code-outline"></ion-icon>
                    </div>
                    <div class="in">
                        <div>کیت کرونا</div>
                        <span class="text-muted">مشاهده</span>
                    </div>
                </div>
            </li>
        </ul>

    </div>
    <!-- * App Capsule -->

    <!-- bottom left -->
    <div class="fab-button animate bottom-left dropdown">
        <a href="#" class="fab" data-bs-toggle="dropdown">
            <ion-icon name="add-outline"></ion-icon>
        </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="/">
                <ion-icon name="qr-code-outline"></ion-icon>
                <p>مالاریا</p>
            </a>
            <a class="dropdown-item" href="#">
                <ion-icon name="qr-code-outline"></ion-icon>
                <p>FOB</p>
            </a>
            <a class="dropdown-item" href="#">
                <ion-icon name="qr-code-outline"></ion-icon>
                <p>اعتیاد</p>
            </a>
            <a class="dropdown-item" href="#">
                <ion-icon name="qr-code-outline"></ion-icon>
                <p>کرونا</p>
            </a>
        </div>
    </div>
    <!-- * bottom left -->

@endsection

{{-- Seo --}}
@section('seo.title', 'پروفایل')
