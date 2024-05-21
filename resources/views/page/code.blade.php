@extends('layout.app')


@section('header')
    <!-- App Header -->
    <div class="appHeader no-border transparent position-absolute">
        <div class="left">
        </div>
        <div class="pageTitle"></div>
        <div class="right">
        </div>
    </div>
    <!-- * App Header -->
@endsection

@section('page')
    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="login-form">
            <div class="section">
                <img src="/assets/logo_animated.svg" alt="image" class="form-image">
            </div>
            <div class="section">
                <h1>کیت تشخیص مالاریا</h1>
                <h4>کد روی کیت تست شده را وارد کنید:</h4>
            </div>
            <div class="section mt-2 mb-5">
                <form action="/dashboard" method="get">
                    @csrf
                    @method('get')


                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <input type="tel" name="code" class="form-control verify-input" id="smscode" placeholder="•••••" maxlength="5" autofocus autocomplete="one-time-code">
                        </div>
                    </div>


                    <div class="form-group mt-2">
                        <button type="submit" class="btn btn-primary btn-block btn-lg">ثبت</button>
                    </div>

                    <div class="section mt-2">
                        <a href="#" class="btn btn-sm btn-text-secondary btn-block" data-bs-toggle="offcanvas"
                           data-bs-target="#actionSheetReferralCode">
                            <ion-icon name="qr-code-outline"></ion-icon>
                            اسکن کد
                        </a>
                    </div>


                    <!-- referral_code Action Sheet -->
                    <div class="offcanvas offcanvas-bottom action-sheet" tabindex="-1" id="actionSheetReferralCode">

                        <div class="offcanvas-body">
                            <div class="action-sheet-content">
                                <i class="fal fa-exclamation-triangle me-2"></i>
                                دسترسی به دوربین داده نشده!
                            </div>
                        </div>
                    </div>
                    <!-- * referral_code Action Sheet -->

                </form>
            </div>

        </div>


    </div>
    <!-- * App Capsule -->
@endsection



@section('header', '')
@section('searchbar', '')
@section('menu_bottom', '')
@section('sidebar', '')


{{-- Seo --}}
@section('seo.title', 'ثبت نام')

