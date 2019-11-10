<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>CoreUI Free Bootstrap Admin Template</title>
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('dist/assets/favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('dist/assets/favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('dist/assets/favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('dist/assets/favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('dist/assets/favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('dist/assets/favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('dist/assets/favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('dist/assets/favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('dist/assets/favicon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('dist/assets/favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('dist/assets/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('dist/assets/favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('dist/assets/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('dist/assets/favicon/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('dist/assets/favicon/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">
    <link href="{{ asset('dist/vendors/@coreui/icons/css/free.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/vendors/flag-icon-css/css/flag-icon.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/vendors/pace-progress/css/pace.min.css') }}" rel="stylesheet">
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <link href="vendors/@coreui/coreui-chartjs/css/coreui-chartjs.css" rel="stylesheet">
  </head>
  <body class="c-app">
    <div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
      <div class="c-sidebar-brand"><img class="c-sidebar-brand-full" src="{{ asset('dist/assets/brand/coreui-base-white.svg') }}" width="118" height="46" alt="CoreUI Logo"><img class="c-sidebar-brand-minimized" src="{{ asset('dist/assets/brand/coreui-signet-white.svg') }}" width="118" height="46" alt="CoreUI Logo"></div>
      <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="index.html">
            <svg class="c-sidebar-nav-icon">
              <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-speedometer"></use>
            </svg> Dashboard<span class="badge badge-info">NEW</span></a></li>
      </ul>
      <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
    </div>
    <div class="c-wrapper">
      <header class="c-header c-header-light c-header-fixed c-header-with-subheader">
        <button class="c-header-toggler c-class-toggler d-lg-none mr-auto" type="button" data-target="#sidebar" data-class="c-sidebar-show"><span class="c-header-toggler-icon"></span></button><a class="c-header-brand d-sm-none" href="#"><img class="c-header-brand" src="assets/brand/coreui-base.svg" width="97" height="46" alt="CoreUI Logo"></a>
        <button class="c-header-toggler c-class-toggler ml-3 d-md-down-none" type="button" data-target="#sidebar" data-class="c-sidebar-lg-show" responsive="true"><span class="c-header-toggler-icon"></span></button>
        <ul class="c-header-nav d-md-down-none">
          <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Dashboard</a></li>
          <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Users</a></li>
          <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Settings</a></li>
        </ul>
        <ul class="c-header-nav ml-auto mr-4">
          <li class="c-header-nav-item d-md-down-none mx-2"><a class="c-header-nav-link" href="#">
              <svg class="c-icon">
                <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-bell"></use>
              </svg></a></li>
          <li class="c-header-nav-item d-md-down-none mx-2"><a class="c-header-nav-link" href="#">
              <svg class="c-icon">
                <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-list-rich"></use>
              </svg></a></li>
          <li class="c-header-nav-item d-md-down-none mx-2"><a class="c-header-nav-link" href="#">
              <svg class="c-icon">
                <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-envelope-open"></use>
              </svg></a></li>
          <li class="c-header-nav-item dropdown"><a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
              <div class="c-avatar"><img class="c-avatar-img" src="{{ asset('dist/assets/img/avatars/7.jpg') }}" alt="user@email.com"></div>
            </a>
            <div class="dropdown-menu dropdown-menu-right pt-0">
              <div class="dropdown-header bg-light py-2"><strong>Account</strong></div><a class="dropdown-item" href="#">
                <svg class="c-icon mr-2">
                  <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-bell"></use>
                </svg> Updates<span class="badge badge-info ml-auto">42</span></a><a class="dropdown-item" href="#">
                <svg class="c-icon mr-2">
                  <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-envelope-open"></use>
                </svg> Messages<span class="badge badge-success ml-auto">42</span></a><a class="dropdown-item" href="#">
                <svg class="c-icon mr-2">
                  <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-task"></use>
                </svg> Tasks<span class="badge badge-danger ml-auto">42</span></a><a class="dropdown-item" href="#">
                <svg class="c-icon mr-2">
                  <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-comment-square"></use>
                </svg> Comments<span class="badge badge-warning ml-auto">42</span></a>
              <div class="dropdown-header bg-light py-2"><strong>Settings</strong></div><a class="dropdown-item" href="#">
                <svg class="c-icon mr-2">
                  <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-user"></use>
                </svg> Profile</a><a class="dropdown-item" href="#">
                <svg class="c-icon mr-2">
                  <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-settings"></use>
                </svg> Settings</a><a class="dropdown-item" href="#">
                <svg class="c-icon mr-2">
                  <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-credit-card"></use>
                </svg> Payments<span class="badge badge-secondary ml-auto">42</span></a><a class="dropdown-item" href="#">
                <svg class="c-icon mr-2">
                  <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-file"></use>
                </svg> Projects<span class="badge badge-primary ml-auto">42</span></a>
              <div class="dropdown-divider"></div><a class="dropdown-item" href="#">
                <svg class="c-icon mr-2">
                  <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-lock-locked"></use>
                </svg> Lock Account</a><a class="dropdown-item" href="#">
                <svg class="c-icon mr-2">
                  <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-account-logout"></use>
                </svg> Logout</a>
            </div>
          </li>
        </ul>
        <div class="c-subheader px-3">
          <ol class="breadcrumb border-0 m-0">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item"><a href="#">Admin</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div>
      </header>
      <div class="c-body">
        <main class="c-main">
          <div class="container-fluid">
            <div class="fade-in">
                @yield('content')
            </div>
          </div>
        </main>
      </div>
      <footer class="c-footer">
        <div><a href="https://coreui.io">CoreUI</a> © 2019 creativeLabs.</div>
        <div class="ml-auto">Powered by&nbsp;<a href="https://coreui.io/">CoreUI</a></div>
      </footer>
    </div>
    <script src="{{ asset('dist/vendors/pace-progress/js/pace.min.js') }}"></script>
    <script src="{{ asset('dist/vendors/@coreui/coreui/js/coreui.bundle.min.js') }}"></script>
    <script src="{{ asset('dist/vendors/chart.js/js/Chart.min.js') }}"></script>
    <script src="{{ asset('dist/vendors/@coreui/coreui-chartjs/js/coreui-chartjs.js') }}"></script>
    <script src="{{ asset('dist/js/main.js') }}"></script>
  </body>
</html>