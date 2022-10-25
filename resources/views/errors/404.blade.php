@extends('layout.default', [
    'bodyClass' => 'pace-top',
    'appHeaderHide' => true,
    'appSidebarHide' => true,
    'appContentHide' => true,
    'appClass' => 'app-full-height app-without-header'
])

@section('title', '404 Error')

@section('content')
    <!-- BEGIN error -->
    <div class="error-page">
        <!-- BEGIN error-page-content -->
        <div class="error-page-content">
            <div class="card mb-5 mx-auto" style="max-width: 320px;">
                <div class="card-body">
                    <div class="card">
                        <div class="error-code">404</div>
                        <div class="card-arrow">
                            <div class="card-arrow-top-left"></div>
                            <div class="card-arrow-top-right"></div>
                            <div class="card-arrow-bottom-left"></div>
                            <div class="card-arrow-bottom-right"></div>
                        </div>
                    </div>
                </div>
                <div class="card-arrow">
                    <div class="card-arrow-top-left"></div>
                    <div class="card-arrow-top-right"></div>
                    <div class="card-arrow-bottom-left"></div>
                    <div class="card-arrow-bottom-right"></div>
                </div>
            </div>
            <h1>Oops!</h1>
            <h3>We can't seem to find the page you're looking for</h3>
            <hr />
            <p class="mb-1">
                Here are some helpful links instead:
            </p>
            <p class="mb-5">
                <a href="/" class="text-decoration-none">Home</a>
                <span class="link-divider"></span>
                <a href="/page/search-results" class="text-decoration-none">Search</a>
                <span class="link-divider"></span>
                <a href="/email/inbox" class="text-decoration-none">Email</a>
                <span class="link-divider"></span>
                <a href="/calendar" class="text-decoration-none">Calendar</a>
                <span class="link-divider"></span>
                <a href="/settings" class="text-decoration-none">Settings</a>
                <span class="link-divider"></span>
                <a href="/helper" class="text-decoration-none">Helper</a>
            </p>
            <a href="javascript:window.history.back();" class="btn btn-outline-theme px-3 rounded-pill"><i class="fa fa-arrow-left me-1 ms-n1"></i> Go Back</a>
        </div>
        <!-- END error-page-content -->
    </div>
    <!-- END error -->
@endsection
