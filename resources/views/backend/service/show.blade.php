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
                    <h1 class="h3 mb-1">Service Details</h1>
                </div>
            </div>
            <div>
                <ul class="list-unstyled d-flex gap-1 mb-0">
                    <li><a class="link-opacity-25-hover" href="{{ route('admin.dashboard') }}">Dashboard</a> /</li>
                    <li><a class="link-opacity-25-hover" href="{{ route('admin.service.index') }}">Service List</a> /</li>
                    <li>Show</li>
                </ul>
            </div>
        </div>

        <div class="row g-4 mt-1">

            {{-- Left column: image + meta info --}}
            <div class="col-lg-4">
                <section class="panel h-100">
                    <div class="p-3">
                        <img src="{{ '/storage/'.$service->service_image }}"
                            class="rounded-3 w-100 mb-3"
                            style="height: 200px; object-fit: cover;"
                            alt="{{ $service->service_title }}">

                        <div class="d-flex align-items-center gap-2 mb-3">
                            <span class="fs-3 text-primary">
                                <i class="bi {{ $service->service_icon }}"></i>
                            </span>
                            <span class="text-muted small">Service Icon</span>
                        </div>

                        <hr class="text-secondary-subtle">

                        <ul class="list-unstyled mb-0 small">
                            <li class="d-flex justify-content-between py-2 border-bottom border-secondary-subtle">
                                <span class="text-muted">Slug</span>
                                <code class="text-body">{{ $service->service_slug }}</code>
                            </li>
                            <li class="d-flex justify-content-between py-2 border-bottom border-secondary-subtle">
                                <span class="text-muted">Created By</span>
                                <span>{{ $service->creator->name ?? 'N/A' }}</span>
                            </li>
                            <li class="d-flex justify-content-between py-2 border-bottom border-secondary-subtle">
                                <span class="text-muted">Created At</span>
                                <span>{{ $service->created_at->format('d M Y, h:i A') }}</span>
                            </li>
                            <li class="d-flex justify-content-between py-2 border-bottom border-secondary-subtle">
                                <span class="text-muted">Updated By</span>
                                <span>{{ $service->updater->name ?? 'N/A' }}</span>
                            </li>
                            <li class="d-flex justify-content-between py-2">
                                <span class="text-muted">Updated At</span>
                                <span>{{ $service->updated_at->format('d M Y, h:i A') }}</span>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>

            {{-- Right column: title + descriptions --}}
            <div class="col-lg-8">
                <section class="panel h-100">
                    <div class="p-4">
                        <h1 class="h3 mb-3">{{ $service->service_title }}</h1>

                        <div class="mb-4">
                            <h2 class="h6 text-muted text-uppercase mb-2">Short Description</h2>
                            <div class="border border-secondary-subtle rounded-3 p-3 bg-body-tertiary lh-lg text-body text-break"
                                style="white-space: pre-line;">
                                {{ $service->short_description }}
                            </div>
                        </div>

                        <div>
                            <h2 class="h6 text-muted text-uppercase mb-2">Long Description</h2>
                            <div class="border border-secondary-subtle rounded-3 p-3 bg-body-tertiary lh-lg text-body text-break"
                                style="white-space: pre-line;">
                                {{ $service->long_description }}
                            </div>
                        </div>
                    </div>
                </section>
            </div>

        </div>
    </div>
</main>
@endsection