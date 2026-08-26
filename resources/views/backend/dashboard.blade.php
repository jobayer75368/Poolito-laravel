@extends('backend.admin_master')

@section('admin_content')
<main class="dashboard-content">
    <div class="container-fluid px-3 px-lg-4 py-4">
        <div class="page-heading">
            <div class="page-heading-copy">
                <span class="page-icon"><i class="bi bi-speedometer2" aria-hidden="true"></i></span>
                <div>
                    <p class="eyebrow mb-1">Overview</p>
                    <h1 class="h3 mb-1">Dashboard</h1>
                    <p class="text-muted mb-0">Monitor performance, sales, users, and support from one clean workspace.</p>
                </div>
            </div>
        </div>

        <section class="row g-3 mt-1" aria-label="Dashboard metrics">
            <div class="col-12 col-sm-6 col-xl-3">
                <article class="metric-card metric-primary">
                    <div class="metric-top">
                        <span class="metric-label">Services</span>
                        <span class="metric-icon"><i class="bi bi-currency-dollar" aria-hidden="true"></i></span>
                    </div>
                    <div class="metric-value"></div>
                </article>
            </div>

            <div class="col-12 col-sm-6 col-xl-3">
                <article class="metric-card metric-success">
                    <div class="metric-top">
                        <span class="metric-label">Users</span>
                        <span class="metric-icon"><i class="bi bi-bag-check" aria-hidden="true"></i></span>
                    </div>
                    <div class="metric-value"></div>
                </article>
            </div>

            <div class="col-12 col-sm-6 col-xl-3">
                <article class="metric-card metric-warning">
                    <div class="metric-top">
                        <span class="metric-label">Members</span>
                        <span class="metric-icon"><i class="bi bi-people" aria-hidden="true"></i></span>
                    </div>
                    <div class="metric-value"></div>
                </article>
            </div>

        </section>

        <section class="row g-3 mt-1">


            <div class="col-12 col-xl-4">

            </div>
        </section>

        <section class="panel mt-3">
            <div class="panel-header">
                <div>
                    <h2 class="h5 mb-1 section-title"><i class="bi bi-people" aria-hidden="true"></i><span>Recent Users</span></h2>
                    <p class="text-muted mb-0">Latest account activity across the workspace.</p>
                </div>
                <a class="btn btn-outline-secondary btn-sm" href="{{ route('admin.user.index') }}">Manage Users</a>
            </div>
            <div class="table-responsive">
                <table class="table align-middle mb-0" id="usersTable" data-searchable-table>
                    <thead>
                        <tr>
                            <th scope="col">Sl</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Status</th>
                            <th scope="col">Joined</th>
                            <th scope="col" class="text-end">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $key=> $user )
                        <tr class="fw-semibold mb-0">
                            <td>{{ $key+1 }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <span class="badge bg-{{ ($user->status=='pending')?'warning': (($user->status=='active')?'success':'danger') }}">{{ucwords($user->status)}}</span>
                            </td>
                            <td>{{ $user->created_at->format('d M Y') }}</td>
                            <td class="text-end"><a class="btn btn-light btn-sm" href="{{ route('admin.user_details') }}">View</a></td>
                        </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </section>
    </div>
</main>
@endsection