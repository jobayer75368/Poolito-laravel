<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="admin authentication page">
  <title>Register | Admin</title>

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
      <a class="auth-brand" href="index.html">
        <span class="brand-icon">
          <i class="bi bi-grid-1x2-fill" aria-hidden="true"></i>
        </span>
        <span><strong>Admin</strong><small>Create Your Editor Account</small></span>
      </a>
      <div class="auth-visual">
        <img src="{{ asset('backend/assets/images/png/dasher-ui-bootstrap-5.jpg') }}" alt="adminHMD dashboard interface">
      </div>

      <form class="needs-validation" method="POST" action="{{ route('admin.register.store') }}" novalidate>
        @csrf
        <div class="mb-4">
          <p class="eyebrow mb-1">Secure Access</p>
          <h1 class="h3 mb-1">Register</h1>
        </div>

        <!-- Name  -->
        <div class="mb-3">
          <label class="form-label" for="name">Full Name</label>
          <input class="form-control" id="name" type="text" name="name" value="{{ old('name') }}" required>
          <!-- <div class="invalid-feedback">Name is required.</div> -->
          <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email  -->
        <div class="mb-3">
          <label class="form-label" for="email">Email address</label>
          <input class="form-control" id="email" type="email" name="email" value="{{ old('email') }}" required>
          <!-- <div class="invalid-feedback">Enter a valid email.</div> -->
          <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Create Password  -->
        <div class="mb-3">
          <label class="form-label" for="password">Create Password</label>
          <input class="form-control" id="password" type="password" minlength="6" name="password" value="{{ old('password') }}" required>
          <!-- <div class="invalid-feedback">Password must be at least 6 characters.</div> -->
          <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password  -->
        <div class="mb-3">
          <label class="form-label" for="confirmPassword">Confirm Password</label>
          <input class="form-control" id="confirmPassword" type="password" minlength="6" name="password_confirmation" required>
          <!-- <div class="invalid-feedback">Password must be at least 6 characters.</div> -->
          <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <button class="btn btn-primary w-100" type="submit">
          <i class="bi bi-person-plus" aria-hidden="true"></i> Create Account
        </button>

      </form>

      <div class="auth-footer">Already have an account? <a href="{{route('admin.login')}}">Sign in</a></div>
    </section>
  </main>

  <script src="{{ asset('backend/assets/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('backend/assets/js/main.js')}}"></script>
</body>

</html>