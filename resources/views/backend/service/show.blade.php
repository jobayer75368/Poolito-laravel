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
                    <h1 class="h3 mb-1">Service Management</h1>
                </div>
            </div>
            <div>
                <ul class="list-unstyled d-flex gap-1">
                    <li>
                        <a class="link-opacity-25-hover" href="{{ route('admin.dashboard') }}">Dashboard </a>
                    </li>/
                    <li>
                        <a class="link-opacity-25-hover" href="{{ route('admin.service.index') }}">Service List </a>
                    </li>/
                    <li>
                        Show
                    </li>
                </ul>
            </div>

        </div>
        <section class="panel mt-3 d-flex flex-column align-items-center justify-content-center">
            <div class="d-flex justify-content-center">
                <img class="rounded-4" style="height: 400px;" src="{{ '/storage/'.$service->service_image }}" alt="">
            </div>
            <div>
                <h1>{{ $service->service_title }}</h1>
                <p>{{ $service->created_by }}</p>
                <p>{{ $service->created_at }}</p>
                <div class="">
                    <p>
                        {{ $service->short_description }}
                    </p>
                </div>
            </div>
        </section>
    </div>
</main>
@endsection