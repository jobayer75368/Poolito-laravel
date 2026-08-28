@extends('backend.admin_master')
@section('admin_content')
<main class="dashboard-content">
    <div class="container-fluid px-3 px-lg-4 py-4">
        <div class="page-heading">
            <div class="page-heading-copy">
                <span class="page-icon"><i class="bi bi-person-badge" aria-hidden="true"></i></span>
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
                    <li>Profile</li>/
                    <li>
                        <a class="link-opacity-25-hover" href="{{ route('admin.profile.edit') }}">Edit Profile </a>
                    </li>
                </ul>
            </div>

        </div>

        <section class="row g-3">
            <div class="col-12 col-xl-4">
                <div class="panel h-100 text-center profile-card">
                    <div class="profile-cover">
                        <img src="{{ asset('backend/assets/images/png/dasher-ui-bootstrap-5.jpg') }}" alt="{{$user->name}} dashboard preview">
                    </div>
                    <img class="avatar-img avatar-xl profile-photo"
                        src="{{ $user->user_image ? asset('storage/' . $user->user_image) : asset('backend/assets/images/avatar/avatar.jpg') }}"
                        alt="{{ $user->name }}">
                    <h2 class="h5 mt-3 mb-1">{{ucwords($user->name)}}</h2>
                    <p class="text-muted mb-3">{{ ucwords($user->role) }}</p>
                    <div class="d-flex justify-content-center gap-2"><span class="badge text-bg-{{ $user->role=='admin'?'danger':'primary' }}">{{ ucwords($user->role) }}</span><span class="badge text-bg-{{ $user->status=='active'?'success':(($user->status=='pending')?'warning':'danger') }}">{{ ucwords($user->status) }}</span></div>
                    <div class="info-list mt-4 text-start">
                        <div><span>Email</span><strong>{{ $user->email }}</strong></div>
                        <div><span>Since</span><strong>{{ $user->created_at->format('d M Y h:i A') }}</strong></div>
                        <div>
                            <span>Last Updated</span>
                            <strong>{{ $user->updated_at->format('d M Y h:i A') }}</strong>
                        </div>
                        <div><span>Time Zone</span><strong>Asia/Dhaka</strong></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-8">
                <div class="panel">
                    <div>
                        @if (session('success'))
                        <div class="alert alert-success" role="alert"><strong>Success:</strong>
                            {{ session('success') }}
                        </div>
                        @endif
                    </div>
                    <div class="panel-header">

                        <div>
                            <h2 class="h5 mb-1 section-title"><i class="bi bi-person-gear" aria-hidden="true"></i><span>Profile Settings</span></h2>
                            <p class="text-muted mb-0">Update your account profile and contact details.</p>
                        </div>
                        <a href="{{ route('admin.profile.edit') }}" class="btn btn-outline-primary">
                            <i class="bi bi-pencil-square me-1"></i> Edit
                        </a>
                    </div>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label" for="profileName">Name</label>
                            <div class="mini-card d-flex justify-content-start">{{ $user->name }}</div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="profileEmail">Email</label>
                            <div class="mini-card d-flex justify-content-start">{{ $user->email }}</div>
                        </div>
                        <div class="col-12">
                            <label class="form-label" for="profileBio">Bio</label>
                            <div class="mini-card text-start d-flex justify-content-start align-items-start" style="min-height: 200px;">Focused on clean admin workflows, reusable UI systems, and reliable operations.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

@endsection