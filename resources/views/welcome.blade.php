<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Welcome | {{ config('app.name') }} </title>
    <meta name="robots" content="noindex, nofollow" />
    <meta name="description" content="Admin panel login page for {{ config('app.name') }}" />
    <link rel="icon" href="{{ asset('assets/back/static/favicon.ico') }}" type="image/x-icon" />
    <!-- CSS files -->
    <link href="{{ asset('assets/back/dist/css/tabler.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/back/dist/css/app.css') }}" rel="stylesheet" />
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
            background-color: #f8fafc;
            background-image:
                radial-gradient(circle at 1px 1px, rgba(0, 0, 0, 0.05) 1px, transparent 0);
            background-size: 16px 16px;
        }
    </style>
</head>

<body class=" d-flex flex-column">
    <div class="page page-center">
        <div class="container container-tight py-4">
            <div class="text-center mb-4">
                <img src="{{ asset('assets/back/static/logo.png') }}" class="img-fluid w-100"
                    alt="{{ config('app.name') }} Logo">
            </div>
            <div class="text-center mt-4">
                @if (Route::has('login'))
                    <nav class="flex items-center justify-end gap-4">
                        @auth
                            <a href="{{ url('/admin') }}"
                                class="btn  inline-block px-5 py-1.5 text-dark rounded-sm text-sm">
                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}"
                                class="btn  inline-block px-5 py-1.5 text-dark rounded-sm text-sm">
                                Log in
                            </a>
                        @endauth
                    </nav>
                @endif
            </div>
        </div>
    </div>
    <!-- Libs JS -->
    <script src="{{ asset('assets/back/dist/js/tabler.min.js') }}" defer></script>
    <script src="{{ asset('assets/back/dist/js/app.js') }}" defer></script>
</body>

</html>
