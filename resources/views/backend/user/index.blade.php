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
            <div class="heading-actions">
                <a class="btn btn-primary btn-sm" href="add-user.html">
                    <i class="bi bi-person-plus" aria-hidden="true"></i> Add User</a>
            </div>
        </div>

        <section class="row g-3 mt-1" aria-label="User summary">
            <div class="col-12 col-sm-6 col-xl-3">
                <article class="metric-card metric-primary">
                    <div class="metric-top">
                        <span class="metric-label">Total Users</span>
                        <span class="metric-icon"><i class="bi bi-people" aria-hidden="true"></i></span>
                    </div>
                    <div class="metric-value">{{ $totalUsers }}</div>
                    <div class="metric-meta">
                        <span class="text-success">+5.1%</span>
                        <span>this month</span>
                    </div>
                </article>
            </div>

            <div class="col-12 col-sm-6 col-xl-3">
                <article class="metric-card metric-success">
                    <div class="metric-top">
                        <span class="metric-label">Active</span>
                        <span class="metric-icon"><i class="bi bi-check2-circle" aria-hidden="true"></i></span>
                    </div>
                    <div class="metric-value"></div>
                </article>
            </div>

            <div class="col-12 col-sm-6 col-xl-3">
                <article class="metric-card metric-warning">
                    <div class="metric-top">
                        <span class="metric-label">Pending</span>
                        <span class="metric-icon"><i class="bi bi-hourglass-split" aria-hidden="true"></i></span>
                    </div>
                    <div class="metric-value"></div>
                </article>
            </div>

            <div class="col-12 col-sm-6 col-xl-3">
                <article class="metric-card metric-danger">
                    <div class="metric-top">
                        <span class="metric-label">Suspended</span>
                        <span class="metric-icon"><i class="bi bi-slash-circle" aria-hidden="true"></i></span>
                    </div>
                    <div class="metric-value"></div>
                </article>
            </div>
        </section>

        <section class="panel mt-3">
            <div class="panel-header">
                <div>
                    <h2 class="h5 mb-1 section-title"><i class="bi bi-table" aria-hidden="true"></i><span>User List</span></h2>
                    <p class="text-muted mb-0">Search, review, and manage user accounts.</p>
                </div>
                <div class="d-flex flex-wrap gap-2">
                    <input class="form-control form-control-sm table-search" type="search" placeholder="Search users" data-table-search="usersTable" aria-label="Search users">
                    <a class="btn btn-primary btn-sm" href="add-user.html"><i class="bi bi-person-plus" aria-hidden="true"></i> Add User</a>
                </div>
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
                        @foreach ($users as $key=>$user )
                        <tr class="fw-semibold mb-0">
                            <!-- <td >
                <div class="d-flex align-items-center gap-2">
                  <img class="avatar-img avatar-sm" src="../assets/images/avatar/avatar-1.jpg" alt="Sarah Ahmed">
                  <div>
                    <p >{{ $user->id }}</p>
                    <p class="fw-semibold mb-0">{{ $user->name }}</p>
                    <p class="text-muted small mb-0">sarah@example.com</p>
                  </div>
                </div>
              </td> -->
                            <td>{{ $key+1 }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <span class="badge bg-{{ ($user->status=='pending')?'warning': (($user->status=='active')?'success':'danger') }}">{{ucwords($user->status)}}</span>
                            </td>
                            <td>{{ $user->created_at->format('d M Y') }}</td>
                            <td class="text-end">
                                @if ($user->status=='pending')

                                <div>

                                    <a class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                                        data-bs-target="#userApproveModal{{ $user->id }}">Approve</a>
                                    <a class="btn btn-sm btn-outline-danger" data-bs-toggle="modal"
                                        data-bs-target="#userDeleteModal{{ $user->id }}">Reject</a>

                                </div>

                                @else
                                <div class="text-end d-flex justify-content-center align-items-center gap-2">

                                    <a class="btn btn-light btn-sm" href="">
                                        <i class="bi bi-eye"></i>
                                    </a>

                                    <a class="btn btn-sm btn-outline-primary" href="">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>

                                    <a class="btn btn-sm btn-outline-danger" data-bs-toggle="modal"
                                        data-bs-target="#userDeleteModal">
                                        <i class="bi bi-trash me-1"></i>
                                    </a>
                                </div>

                                @endif


                                <!-- <a class="btn btn-light btn-sm" href="{{ route('admin.user_details') }}">View</a> -->
                            </td>
                        </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
            <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-between gap-3 mt-3">
                <p class="text-muted small mb-0">Showing 1 to 5 of 124 users</p>
                <nav aria-label="Users pagination">
                    <ul class="pagination pagination-sm mb-0">
                        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
        </section>
    </div>
</main>

@foreach ($users as $user )

<!-- Approve modal  -->

<div class="modal fade" id="userApproveModal{{ $user->id }}" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title h5" id="confirmModalLabel">Confirm Action</h2><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">Are you sure you want to Approve this User?</div>

            <form method="POST" action="{{ route('admin.user.approve',$user->id) }}" class="modal-footer">
                @csrf
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                <input type="submit" value="Confirm" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>

<!-- Delete modal  -->

<div class="modal fade" id="userDeleteModal{{ $user->id }}" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title h5" id="confirmModalLabel">Confirm Action</h2><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">Are you sure you want to Delete this User?</div>

            <form method="POST" action="{{ route('admin.user.destroy',$user->id) }}" class="modal-footer">
                @csrf
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                <input type="submit" value="Confirm" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>
@endforeach

@endsection