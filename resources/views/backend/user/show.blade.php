@extends('backend.admin_master')
@section('admin_content')
<main class="dashboard-content">
    <div class="container-fluid px-3 px-lg-4 py-4">
        <div class="page-heading">
            <div class="page-heading-copy">
                <span class="page-icon"><i class="bi bi-person-lines-fill" aria-hidden="true"></i></span>
                <div>
                    <p class="eyebrow mb-1">Management</p>
                    <h1 class="h3 mb-1">User Details</h1>
                    <p class="text-muted mb-0">Inspect account status, profile data, permissions.</p>
                </div>
            </div>
            <div class="heading-actions">
                <a class="btn btn-outline-secondary btn-sm" href="{{ route('admin.user.index') }}">
                    <i class="bi bi-arrow-left" aria-hidden="true"></i> Back to Users</a>
            </div>
        </div>

        <section class="row g-3">
            <div class="col-12 col-xl-4">
                <div class="panel h-100 text-center profile-card">
                    <div class="profile-cover"><img src="{{ asset('backend/assets/images/png/dasher-ui-bootstrap-5.jpg') }}" alt="User workspace preview"></div>
                    <div class="profile-hero">
                        <img class="avatar-img avatar-xl profile-photo" src="{{ $user->user_image && Storage::disk('public')->exists($user->user_image)?asset('storage/'.$user->user_image):asset('no-user.jpg') }}" alt="{{ $user->name }}">
                        <h2 class="h5 mb-1">{{$user->name}}</h2>
                        <p class="text-muted mb-3">{{ ucwords($user->role) }}</p>
                        <span class="badge text-bg-success">Active Account</span>
                    </div>
                    <div class="info-list mt-4 text-start">
                        <div><span>Email</span><strong>{{$user->email}}</strong></div>
                        <div><span>Since</span><strong>{{$user->created_at->format('d M Y')}}</strong></div>
                        <div><span>Location</span><strong></strong></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-8">
                <div class="panel mb-3">
                    <div class="panel-header">
                        <div>
                            <h2 class="h5 mb-1 section-title"><i class="bi bi-person-lines-fill" aria-hidden="true"></i><span>Account Overview</span></h2>
                            <p class="text-muted mb-0">Permissions, plan, and current access details.</p>
                        </div>
                        <div class="d-flex gap-2">
                            <a href="{{ route('admin.user.edit', $user->id) }}" class="btn btn-outline-primary btn-sm">
                                <i class="bi bi-pencil-square me-1"></i> Edit
                            </a>

                            <a class="btn btn-sm btn-outline-danger" data-bs-toggle="modal"
                                data-bs-target="#userDeleteModal">
                                <i class="bi bi-trash me-1"></i> Delete
                            </a>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-md-4">
                            <div class="mini-card"><span>Role</span><strong>{{ucwords($user->role)}}</strong></div>
                        </div>
                        <div class="col-md-4">
                            <div class="mini-card"><span>Last Login</span><strong>Today</strong></div>
                        </div>
                    </div>
                </div>
                <div class="panel">
                    <div class="panel-header">
                        <div>
                            <h2 class="h5 mb-1 section-title"><i class="bi bi-clock-history" aria-hidden="true"></i><span>Recent Activity</span></h2>
                            <p class="text-muted mb-0">Latest security and workflow events.</p>
                        </div>
                    </div>
                    <div class="activity-list">
                        <!-- <div class="activity-item"><span class="activity-dot bg-primary"></span>
                            <div>
                                <p class="mb-1 fw-semibold">Updated billing permissions</p>
                                <p class="text-muted small mb-0">2 hours ago</p>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>


<!-- Delete modal  -->
<div class="modal fade" id="userDeleteModal" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title h5" id="confirmModalLabel">Confirm Action</h2><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">Are you sure you want to Delete this User?</div>

            <form method="POST" action="{{ route('admin.user.destroy',$user->id) }}" class=" modal-footer">
                @csrf
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                <input type="submit" value="Confirm" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>

@endsection