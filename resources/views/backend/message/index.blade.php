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
                    <h1 class="h3 mb-1">Message Management</h1>
                </div>
            </div>
            <div>
                <ul class="list-unstyled d-flex gap-1">
                    <li>
                        <a class="link-opacity-25-hover" href="{{ route('admin.dashboard') }}">Dashboard </a>
                    </li>/
                    <li>
                        Message List
                    </li>
                </ul>
            </div>

        </div>

        <section class="panel mt-3">
            <div class="panel-header">
                <div>
                    <h2 class="h5 mb-1 section-title"><i class="bi bi-table" aria-hidden="true"></i><span>Message List</span></h2>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table align-middle mb-0" id="usersTable" data-searchable-table>
                    <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Message</th>
                            <th scope="col">Posted at</th>
                            <th scope="col" class="text-end">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($messages as $key=>$message)

                        <tr class="fw-semibold mb-0">
                            <td>{{ $key+1 }}</td>
                            <td>{{ $message->first_name }} {{ $message->last_name }}</td>
                            <td>{{ $message->email }}</td>
                            <td>{{ $message->message }}</td>
                            <td>{{ $message->created_at->format('M d, Y') }}</td>
                            <td class="text-end d-flex gap-2">

                                <a class="btn btn-light btn-sm" href="{{ route('admin.message.show',$message->id) }}"><i class="bi bi-eye"></i></a>
                                <a type="submit" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal"
                                    data-bs-target="#deleteConfirmModal">
                                    <i class="bi bi-trash me-1"></i>
                                </a>

                            </td>
                        </tr>
                        @endforeach



                    </tbody>
                </table>
            </div>
            <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-between gap-3 mt-3">
                <p class="text-muted small mb-0">Showing 1 to 5 of 124 Portfolios</p>
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
<!-- Delete modal  -->
<div class="modal fade" id="deleteConfirmModal" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title h5" id="confirmModalLabel">Confirm Action</h2><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">Are you sure you want to Delete this message?</div>

            <form method="POST" action="{{ route('admin.message.destroy',$message->id) }}" class="dropdown-item modal-footer">
                @csrf
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                <input type="submit" value="Confirm" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>
@endsection