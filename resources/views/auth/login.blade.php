<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="adminHMD authentication page">
    <title>Login | Admin</title>

    <link rel="stylesheet" href="{{ asset('backend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}">
</head>

<body class="auth-body">
    <button class="icon-button theme-toggle auth-theme-toggle" type="button" data-theme-toggle aria-label="Switch color theme" title="Switch color theme">
        <i class="bi bi-moon-stars" data-theme-icon aria-hidden="true"></i>
    </button>
    <main class="auth-page">
        <section class="auth-card">
            <a class="auth-brand" href="index.html"><span class="brand-icon"><i class="bi bi-grid-1x2-fill" aria-hidden="true"></i></span><span><strong>adminHMD</strong><small>Sign in to your admin workspace.</small></span></a>
            <div class="auth-visual"><img src="{{ asset('backend/assets/images/png/dasher-ui-bootstrap-5.jpg') }}" alt="adminHMD dashboard interface"></div>
            <form class="needs-validation" novalidate method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-4">
                    <p class="eyebrow mb-1">Secure Access</p>
                    <h1 class="h3 mb-1">Login</h1>
                    <p class="text-muted mb-0">Sign in to your admin workspace.</p>
                </div>
                <div class="mb-3">

                    <label class="form-label" for="email" :value="__('Email')">
                        Email address
                    </label>
                    <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username">

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <p class="text-danger">{{ $error }}</p>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <!-- <div class="invalid-feedback mt-2" :messages="$errors->get('email')"></div> -->

                </div>
                <div class="mb-3">
                    <div class="d-flex justify-content-between">
                        <label class="form-label" for="password">
                            Password
                        </label>
                        <a class="small fw-semibold" href="/forgot-password">
                            Forgot?
                        </a>
                    </div>
                    <input class="form-control" id="password"
                        type="password"
                        name="password"
                        required autocomplete="current-password">

                    <div class="invalid-feedback mt-2" :messages="$errors->get('password')"></div>
                </div>

                <!-- remember me  -->

                <div class="form-check mb-4">
                    <label class="form-check-label" for="remember_me">{{ __('Remember me') }}</label>
                    <input class="form-check-input" id="remember_me" type="checkbox" name="remember">

                </div>
                <button class="btn btn-primary w-100" type="submit">
                    <i class="bi bi-box-arrow-in-right" aria-hidden="true">

                    </i> {{ __('Log in') }}
                </button>
            </form>

            <div class="auth-footer">New here?
                <a href="/register">Create an account

                </a>
            </div>
        </section>
    </main>

    <script src="{{ asset('backend/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('backend/assets/js/main.js')}}"></script>
</body>

</html>