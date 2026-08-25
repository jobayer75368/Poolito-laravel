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
        <div>
          @if (session('success'))
          <h1 class="badge bg-success">
            {{ session('success') }}
          </h1>

          @endif
        </div>
        <table class="table align-middle mb-0" id="usersTable" data-searchable-table>
          <thead>
            <tr>
              <th scope="col">Sl</th>
              <th scope="col">Title</th>
              <th scope="col">Image</th>
              <th scope="col">Status</th>
              <th scope="col">Created At</th>
              <th scope="col" class="text-end">Action</th>
            </tr>
          </thead>
          <tbody>

            @foreach ($services as $key=>$service)
            <tr class="fw-semibold mb-0">
              <td>{{ $key+1 }}</td>
              <td>{{ $service->service_title }}</td>

              <td>
                <img style="width: 120px;" src="{{$service->service_image && Storage::disk('public')->exists($service->service_image)? asset('storage/'.$service->service_image ): asset('no-image.png') }}" alt="{{ $service->service_title }}">
              </td>

              <td>
                <span class="badge bg-{{ $service->status=='active'?'success':'danger' }}">{{ ucwords($service->status) }}</span>
              </td>

              <td class="small">
                {{ $service->created_at->format('d M Y') }}
              </td>

              <td>
                <div class="text-end d-flex justify-content-center align-items-center gap-2">

                  <a class="btn btn-light btn-sm" href="{{ route('admin.service.show',$service->id) }}">
                    <i class="bi bi-eye"></i>
                  </a>

                  <a class="btn btn-sm btn-outline-primary" href="{{ route('admin.service.edit',$service->id) }}">
                    <i class="bi bi-pencil-square"></i>
                  </a>

                  <a class="btn btn-sm btn-outline-danger" data-bs-toggle="modal"
                    data-bs-target="#serviceDeleteModal{{ $service->id }}">
                    <i class="bi bi-trash me-1"></i>
                  </a>
                </div>
              </td>
            </tr>
            @endforeach


          </tbody>
        </table>

      </div>
    </section>

  </div>
</main>

<!-- Delete modal  -->
@foreach ($services as $service )

<div class="modal fade" id="serviceDeleteModal{{ $service->id }}" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title h5" id="confirmModalLabel">Confirm Action</h2><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">Are you sure you want to Delete this service?</div>

      <form method="POST" action="{{ route('admin.service.destroy',$service->id) }}" class="modal-footer">
        @csrf
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
        <input type="submit" value="Confirm" class="btn btn-primary">
      </form>
    </div>
  </div>
</div>
@endforeach

@endsection