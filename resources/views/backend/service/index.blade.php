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
            Service List
          </li>/
          <li><a class="link-opacity-25-hover" href="{{ route('admin.service.create') }}"> Add Service</a></li>
        </ul>
      </div>

    </div>

    <section class="panel mt-3">
      <div class="panel-header">
        <div>
          <h2 class="h5 mb-1 section-title"><i class="bi bi-table" aria-hidden="true"></i><span>Service List</span></h2>
        </div>
        <div class="d-flex gap-2 justify-content-right">
          <a class="d-flex justify-content-center align-items-center btn btn-sm btn-info" href="{{ route('admin.service.create') }}">
            <i class="bi bi-plus-square-fill fs-4"></i>Add Service
          </a>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table align-middle mb-0" id="usersTable" data-searchable-table>
          <thead>
            <tr>
              <th scope="col">Sl</th>
              <th scope="col">Title</th>
              <th scope="col">Slug</th>
              <th scope="col">Image</th>
              <th scope="col">Status</th>
              <th scope="col">Created</th>
              <th scope="col" class="text-end">Action</th>
            </tr>
          </thead>
          <tbody>

            @foreach ($services as $key=>$service)
            <tr class="fw-semibold mb-0">
              <td>{{ $key+1 }}</td>
              <td>{{ $service->service_title }}</td>
              <td>{{ $service->service_slug }}</td>
              <td>{{ $service->service_image }}</td>
              <td><span class="badge text-bg-success">Active</span></td>
              <td>{{ $service->created_at }}</td>
              <td class="text-end"><a class="btn btn-light btn-sm" href="{{ route('admin.user_details') }}">View</a></td>
            </tr>
            @endforeach



          </tbody>
        </table>
      </div>
      <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-between gap-3 mt-3">
        <p class="text-muted small mb-0">Showing 1 to 5 of 124 services</p>
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
@endsection