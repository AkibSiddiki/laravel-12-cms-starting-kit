<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login to Admin Panel | {{ config('app.name') }} </title>
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
        }

        /* dotted background pattern in body */

        body {
            background-color: #f8fafc;
            background-image:
                radial-gradient(circle at 1px 1px, rgba(0, 0, 0, .05) 1px, transparent 0);
            background-size: 16px 16px;
        }
    </style>
</head>

<body class=" d-flex flex-column">
    <div class="page page-center">
        <div class="container container-tight py-4">
            <div class="text-center mb-4">
                <img src="{{ asset('assets/back/static/logo.png') }}" class="img-fluid w-50">
            </div>
            <div class="card card-md">
                <div class="card-body">
                    <h2 class="h2 text-center mb-4">Login to your account</h2>
                    <form action="{{ route('login.post') }}" method="post" autocomplete="off" novalidate>
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="email">Email address</label>
                            <input type="email" name="email" class="form-control" placeholder="your@email.com"
                                autocomplete="off">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label class="form-label" for="password">
                                Password
                            </label>
                            <input type="password" name="password" class="form-control" placeholder="Your password"
                                autocomplete="off">
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label class="form-check" for="remember">
                                <input type="checkbox" name="remember" class="form-check-input" />
                                <span class="form-check-label">Remember me on this device</span>
                            </label>
                        </div>
                        <div class="form-footer">
                            <button type="submit" class="btn btn-primary w-100">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Libs JS -->
    <script src="{{ asset('assets/back/dist/js/tabler.min.js') }}" defer></script>
    <script src="{{ asset('assets/back/dist/js/app.js') }}" defer></script>
</body>

</html>
