@extends('backend.admin_master')
@section('admin_content')
<main class="dashboard-content">
    <div class="container-fluid px-3 px-lg-4 py-4">
        <div class="page-heading">
            <div class="page-heading-copy">
                <span class="page-icon"><i class="bi bi-people" aria-hidden="true"></i></span>
                <div>
                    <p class="eyebrow mb-1">Management</p>
                    <h1 class="h3 mb-1">Users</h1>
                    <p class="text-muted mb-0">Review accounts, roles, account status, and team ownership.</p>
                </div>
            </div>
        </div>

        <section class="row g-3 mt-1" aria-label="User summary">
            <div>
                <div class="alert alert-danger mb-0 text-center" role="alert">
                    <h3><strong>Error:</strong> Only Admin can Access or Manage Users!</h3>
                </div>
            </div>
        </section>
    </div>
</main>

@endsection