<!-- App Bottom Menu -->
<div class="appBottomMenu">
    <a href="/dashboard"
       class="item @if(isset($activePage) && $activePage === 'dashboard') active @endif">
        <div class="col">
            <ion-icon name="home-outline"></ion-icon>
            <strong>داشبورد</strong>
        </div>
    </a>
    <a href="/kits"
       class="item @if(isset($activePage) && $activePage === 'budget') active @endif">
        <div class="col">
            <ion-icon name="barcode-outline"></ion-icon>
            <strong>کیت</strong>
        </div>
    </a>
    <a href="/treatments"
       class="item @if(isset($activePage) && $activePage === 'transaction') active @endif">
        <div class="col">
            <ion-icon name="bandage-outline"></ion-icon>
            <strong>درمان</strong>
        </div>
    </a>
    <a href="/profile"
       class="item @if(isset($activePage) && $activePage === 'profile') active @endif">
        <div class="col">
            <ion-icon name="person-outline"></ion-icon>
            <strong>پروفایل</strong>
        </div>
    </a>
</div>
<!-- * App Bottom Menu -->
