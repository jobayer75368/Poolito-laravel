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
                        <a href="{{ route('admin.message.index') }}">Message List</a>
                    </li>/
                    <li>
                        {{ $message->first_name }} {{ $message->last_name }}
                    </li>
                </ul>
            </div>

        </div>

        <section class="panel mt-3">
            <div class="p-3 p-lg-4">

                <!-- Header row: sender + status + actions -->
                <div class="d-flex flex-wrap align-items-start justify-content-between gap-3 pb-4 mb-4 border-bottom border-secondary-subtle">

                    <div class="d-flex align-items-center">
                        <div class="rounded-circle bg-primary-subtle text-primary-emphasis d-flex align-items-center justify-content-center fw-semibold flex-shrink-0"
                            style="width: 52px; height: 52px; font-size: 1.05rem;">
                            {{ strtoupper(substr($message->first_name, 0,1) . substr($message->last_name, 0, 1)) }}
                        </div>
                        <div class="ms-3">
                            <h5 class="mb-1 fw-semibold">{{ $message->first_name }} {{ $message->last_name }}</h5>
                            <div class="text-body-secondary small">
                                <i class="bi bi-clock me-1"></i>
                                {{ $message->created_at->format('M d, Y \a\t g:i A') }}
                            </div>
                        </div>
                    </div>

                    <div class="d-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#deleteConfirmModal">
                        <a type="submit" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal"
                            data-bs-target="#deleteConfirmModal">
                            <i class="bi bi-trash me-1"></i> Delete
                        </a>
                    </div>
                </div>

                <!-- Contact info -->
                <div class="row g-3 mb-4">
                    <div class="col-md-6">
                        <div class="border border-secondary-subtle rounded-3 p-3 h-100 bg-body-tertiary">
                            <div class="text-body-secondary small mb-1">
                                <i class="bi bi-telephone me-1"></i> Phone
                            </div>
                            <a href="tel:{{ $message->phone }}" class="fw-medium text-body text-decoration-none">
                                {{ $message->phone }}
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="border border-secondary-subtle rounded-3 p-3 h-100 bg-body-tertiary">
                            <div class="text-body-secondary small mb-1">
                                <i class="bi bi-envelope me-1"></i> Email
                            </div>
                            <a href="mailto:{{ $message->email }}" class="fw-medium text-body text-decoration-none text-break">
                                {{ $message->email }}
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Message body -->
                <div>
                    <div class="text-body-secondary small mb-2">
                        <i class="bi bi-chat-left-text me-1"></i> Message
                    </div>
                    <div class="border border-secondary-subtle rounded-3 p-4 bg-body-tertiary">
                        <div class="lh-lg text-body" style="white-space: pre-line;">{{ $message->message }}</div>
                    </div>
                </div>
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