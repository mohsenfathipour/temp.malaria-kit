@extends('layout.app')

@section('page')
    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="header-large-title">
            <h1 class="title">سلامت الکترونیک برکت</h1>
            <h4 class="subtitle">به اپ پشتیبانی کیت های تشخیص سریع خوش آمدید</h4>
        </div>


        <div class="section mt-3 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">کیت</h5>
                    <p class="card-text">
                        کیت هایی که شما ثبت کردید را از اینجا میتوانید ببینید.
                    </p>
                    <a href="/kits" class="btn btn-primary">
                        <ion-icon name="cube-outline"></ion-icon>
                        مشاهده
                    </a>
                </div>
            </div>
        </div>

        <div class="section mt-3 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">پزشکان</h5>
                    <p class="card-text">
                        پزشکان مرتبط با شما و روند درمان خود را از اینجا میتوانید دنبال کنید.
                    </p>
                    <a href="/treatments" class="btn btn-primary">
                        <ion-icon name="layers-outline"></ion-icon>
                        مشاهده
                    </a>
                </div>
            </div>

            <div class="section mt-3 mb-3">
                <div class="card">
                    <div class="card-body d-flex justify-content-between align-items-end">
                        <div>
                            <h5 class="card-title mb-0 d-flex align-items-center justify-content-between">
                                نسخه تاریک
                            </h5>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input dark-mode-switch" type="checkbox" id="darkmodecontent">
                            <label class="form-check-label" for="darkmodecontent"></label>
                        </div>

                    </div>
                </div>
            </div>


        </div>
        <!-- * App Capsule -->
@endsection

{{-- Seo --}}
@section('seo.title', 'داشبورد')

