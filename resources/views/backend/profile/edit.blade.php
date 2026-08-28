@extends('backend.admin_master')
@section('admin_content')
<main class="dashboard-content">
    <div class="container-fluid px-3 px-lg-4 py-4">
        <div class="page-heading">
            <div class="page-heading-copy">
                <span class="page-icon">
                    <i class="bi bi-tools"></i>
                </span>
                <div>
                    <p class="eyebrow mb-1">Account</p>
                    <h1 class="h3 mb-1">Profile</h1>
                    <p class="text-muted mb-0">Manage your name, email, password, and profile image.</p>
                </div>
            </div>
            <div>
                <ul class="list-unstyled d-flex gap-1">
                    <li>
                        <a class="link-opacity-25-hover" href="{{ route('admin.dashboard') }}">Dashboard </a>
                    </li>/
                    <li><a class="link-opacity-25-hover" href="{{ route('admin.profile.show') }}">Profile </a></li>/
                    <li>
                        Edit Profile
                    </li>
                </ul>
            </div>

        </div>

        <section class="row g-3">
            <div class="col-12 col-xl-12">
                <form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="panel-header">
                        <div>
                            <h2 class="h5 mb-1 section-title">
                                <i class="bi bi-tools"></i>
                                <span>Edit User</span>
                            </h2>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-md-12">
                            <label class="form-label" for="name">Name</label>
                            <input
                                class="form-control" id="name" name="name" type="text" value="{{ old('name', $user->name) }}" required>
                            @error('name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-12">
                            <label class="form-label" for="email">Email</label>
                            <input class="form-control" id="email" name="email" type="email" value="{{ old('email', $user->email) }}"
                                required>
                            @error('email')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-12">
                            <label class="form-label" for="current_password">Current Password</label>
                            <input class="form-control" id="current_password" name="current_password" type="password">
                            @error('current_password')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-12">
                            <label class="form-label" for="password">New Password</label>
                            <input class="form-control" id="password" name="password" type="password">
                            @error('password')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <label class="form-label" for="password_confirmation">
                                Confirm New Password
                            </label>
                            <input class="form-control" id="password_confirmation"
                                name="password_confirmation" type="password">
                        </div>

                        <div class="col-12">
                            <label class="form-label" for="profileImg">Profile Image</label>
                            <input class="form-control"
                                id="profileImg" name="user_image" type="file">

                            @error('image')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="mt-2">
                                <img id="prfoileImagePreview" src="{{ $user->user_image ? asset('storage/' . $user->user_image) : '' }}" alt="Profile Image" style="height: 200px; {{ $user->user_image ? '' : 'display:none;' }}">
                            </div>

                        </div>

                    </div>
                    <div class="d-flex justify-content-start mt-4">
                        <button class="btn btn-primary" type="submit">
                            <i class="bi bi-check2-circle" aria-hidden="true"></i> Save Profile
                        </button>
                    </div>
                </form>
            </div>

        </section>
    </div>
</main>

@endsection