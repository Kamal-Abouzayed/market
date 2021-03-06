@extends('dashboard.layouts.app')

@section('title') {{ $pageTitle }} @endsection

@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-cogs"></i> {{ $pageTitle }}</h1>
        </div>
    </div>
    @include('dashboard.partials.flash')
    <div class="row user">
        <div class="mb-2 col-md-3">
            <div class="p-0 tile">
                <ul class="nav flex-column nav-tabs user-tabs">
                    <li class="nav-item">
                        <a class="list-group-item list-group-item-action active" href="#general" data-toggle="tab">General</a>
                    </li>
                    <li class="nav-item">
                        <a class="list-group-item list-group-item-action" href="#site-logo" data-toggle="tab">Site Logo</a>
                    </li>
                    <li class="nav-item">
                        <a class="list-group-item list-group-item-action" href="#footer-seo" data-toggle="tab">Footer &amp; SEO</a>
                    </li>
                    <li class="nav-item">
                        <a class="list-group-item list-group-item-action" href="#social-links" data-toggle="tab">Social Links</a>
                    </li>
                    <li class="nav-item">
                        <a class="list-group-item list-group-item-action" href="#analytics" data-toggle="tab">Analytics</a>
                    </li>
                    <li class="nav-item">
                        <a class="list-group-item list-group-item-action" href="#payments" data-toggle="tab">Payments</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-9">
            <div class="tab-content">
                <div class="tab-pane active" id="general">
                    @include('dashboard.settings.includes.general')
                </div>
                <div class="tab-pane fade" id="site-logo">
                    @include('dashboard.settings.includes.logo')
                </div>
                <div class="tab-pane fade" id="footer-seo">
                    @include('dashboard.settings.includes.footer_seo')
                </div>
                <div class="tab-pane fade" id="social-links">
                    @include('dashboard.settings.includes.social_links')
                </div>
                <div class="tab-pane fade" id="analytics">
                    @include('dashboard.settings.includes.analytics')
                </div>
                <div class="tab-pane fade" id="payments">
                    @include('dashboard.settings.includes.payments')
                </div>
            </div>
        </div>
    </div>
@endsection
