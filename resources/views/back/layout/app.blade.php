<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="robots" content="noindex, nofollow" />
    <title>@yield('title') - Admin Panel | {{ config('app.name') }}</title>
    {{-- favicon --}}
    <link rel="icon" href="{{ asset('assets/back/static/favicon.ico') }}" type="image/x-icon" />
    <!-- CSS files -->
    <link href="{{ asset('assets/back/dist/css/tabler.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/back/dist/css/app.css') }}" rel="stylesheet" />
    @stack('style')
</head>

<body>
    <div class="page">
        <!-- Sidebar -->
        @include('back.layout.components.sidebar')
        <div class="page-wrapper position-relative">
            <!-- Page header -->
            @yield('page-header')
            <!-- Page body -->
            <div class="page-body">
                @if (session('success'))
                    <div class="container-fluid">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    </div>
                @endif
                @if (session('error'))
                    <div class="container-fluid">
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    </div>
                @endif
                @yield('content')
            </div>
            <!-- Page footer -->
            <x-footer company="companyname.com" url="https://companyname.com" version="v1.0.2" />
        </div>
    </div>
    <!-- Libs JS scripts -->
    <script src="{{ asset('assets/back/dist/js/tabler.min.js') }}" defer></script>
    <script src="{{ asset('assets/back/dist/js/app.js') }}" defer></script>
</body>

</html>
