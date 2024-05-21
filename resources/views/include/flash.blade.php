@if( Session::has('primary') )
    <div id="notification-15" class="notification-box show">
        <div class="notification-dialog ios-style bg-primary">
            <div class="notification-header justify-content-start">
                <div class="right">
                    <a href="#" class="close-button">
                        <ion-icon name="close-circle" role="img" class="md hydrated" aria-label="close circle"></ion-icon>
                    </a>
                </div>
                <div class="in">
                    <div class="text">
                        {!! Session::get('primary') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

@if( Session::has('secondary') )
    <div id="notification-15" class="notification-box show">
        <div class="notification-dialog ios-style bg-secondary">
            <div class="notification-header justify-content-start">
                <div class="right">
                    <a href="#" class="close-button">
                        <ion-icon name="close-circle" role="img" class="md hydrated" aria-label="close circle"></ion-icon>
                    </a>
                </div>
                <div class="in">
                    <div class="text">
                        {!! Session::get('secondary') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

@if( Session::has('success') )
    <div id="notification-15" class="notification-box show">
        <div class="notification-dialog ios-style bg-success">
            <div class="notification-header justify-content-start">
                <div class="right">
                    <a href="#" class="close-button">
                        <ion-icon name="close-circle" role="img" class="md hydrated" aria-label="close circle"></ion-icon>
                    </a>
                </div>
                <div class="in">
                    <div class="text">
                        {!! Session::get('success') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

@if( Session::has('danger') )
    <div id="notification-15" class="notification-box show">
        <div class="notification-dialog ios-style bg-danger">
            <div class="notification-header justify-content-start">
                <div class="right">
                    <a href="#" class="close-button">
                        <ion-icon name="close-circle" role="img" class="md hydrated" aria-label="close circle"></ion-icon>
                    </a>
                </div>
                <div class="in">
                    <div class="text">
                        {!! Session::get('danger') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

@if( Session::has('warning') )
    <div id="notification-15" class="notification-box show">
        <div class="notification-dialog ios-style bg-warning">
            <div class="notification-header justify-content-start">
                <div class="right">
                    <a href="#" class="close-button">
                        <ion-icon name="close-circle" role="img" class="md hydrated" aria-label="close circle"></ion-icon>
                    </a>
                </div>
                <div class="in">
                    <div class="text">
                        {!! Session::get('warning') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

@if( Session::has('info') )
    <div id="notification-15" class="notification-box show">
        <div class="notification-dialog ios-style bg-info">
            <div class="notification-header justify-content-start">
                <div class="right">
                    <a href="#" class="close-button">
                        <ion-icon name="close-circle" role="img" class="md hydrated" aria-label="close circle"></ion-icon>
                    </a>
                </div>
                <div class="in">
                    <div class="text">
                        {!! Session::get('info') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

@if( Session::has('light') )
    <div id="notification-15" class="notification-box show">
        <div class="notification-dialog ios-style bg-light">
            <div class="notification-header justify-content-start">
                <div class="right">
                    <a href="#" class="close-button">
                        <ion-icon name="close-circle" role="img" class="md hydrated" aria-label="close circle"></ion-icon>
                    </a>
                </div>
                <div class="in">
                    <div class="text">
                        {!! Session::get('light') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

@if( Session::has('dark') )
    <div id="notification-15" class="notification-box show">
        <div class="notification-dialog ios-style bg-dark">
            <div class="notification-header justify-content-start">
                <div class="right">
                    <a href="#" class="close-button">
                        <ion-icon name="close-circle" role="img" class="md hydrated" aria-label="close circle"></ion-icon>
                    </a>
                </div>
                <div class="in">
                    <div class="text">
                        {!! Session::get('dark') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

@if (isset($errors) && $errors->any())
    <div id="notification-15" class="notification-box show">
        <div class="notification-dialog ios-style bg-danger">
            <div class="notification-header justify-content-start">
                <div class="right">
                    <a href="#" class="close-button">
                        <ion-icon name="close-circle" role="img" class="md hydrated" aria-label="close circle"></ion-icon>
                    </a>
                </div>
                <div class="in">
                    <div class="text">
                        @foreach ($errors->all() as $error)
                            {{ $error }} <br>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
