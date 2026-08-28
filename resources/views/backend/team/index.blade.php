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
          <h1 class="h3 mb-1">Team Management</h1>
        </div>
      </div>
      <div>
        <ul class="list-unstyled d-flex gap-1">
          <li>
            <a class="link-opacity-25-hover" href="{{ route('admin.dashboard') }}">Dashboard </a>
          </li>/
          <li>
            Members List
          </li>/
          <li><a class="link-opacity-25-hover" href="{{ route('admin.team.create') }}"> Add Member</a></li>
        </ul>
      </div>

    </div>

    <section class="panel mt-3">
      <div class="panel-header">
        <div>
          <h2 class="h5 mb-1 section-title"><i class="bi bi-table" aria-hidden="true"></i><span>Members List</span></h2>
        </div>
        <div class="d-flex gap-2 justify-content-right">
          <a class="d-flex justify-content-center align-items-center btn btn-sm btn-info" href="{{ route('admin.team.create') }}">
            <i class="bi bi-plus-square-fill fs-4"></i>Add Member
          </a>
        </div>
      </div>
      <div class="table-responsive">
        <div>
          @if (session('success'))
          <div class="alert alert-success" role="alert"><strong>Success:</strong>
            {{ session('success') }}
          </div>
          @endif
        </div>
        <table class="table align-middle mb-0" id="usersTable" data-searchable-table>
          <thead>
            <tr>
              <th scope="col">Sl</th>
              <th scope="col">Name</th>
              <th scope="col">Designation</th>
              <th scope="col">Email</th>
              <th scope="col">Image</th>
              <th scope="col">Status</th>
              <th scope="col" class="text-end">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ( $members as $key=>$member )


            <tr class="fw-semibold mb-0">
              <td>{{ $key+1 }}</td>
              <td>{{ $member->name }}</td>
              <td>{{ $member->designation }}</td>
              <td>{{ $member->email }}</td>
              <td>
                <img style="width: 120px;" src="{{$member->member_image && Storage::disk('public')->exists($member->member_image)? asset('storage/'.$member->member_image ): asset('no-image.png') }}" alt="{{ $member->name }}">
              </td>
              <td>
                <span class="badge bg-{{ $member->status=='active'?'success':'danger' }}">{{ ucwords($member->status) }}</span>
              </td>
              <td>
                <div class="text-end d-flex justify-content-center align-items-center gap-2">

                  <a class="btn btn-light btn-sm" href="{{ route('admin.team.show',$member->id) }}">
                    <i class="bi bi-eye"></i>
                  </a>

                  <a class="btn btn-sm btn-outline-primary" href="{{ route('admin.team.edit',$member->id) }}">
                    <i class="bi bi-pencil-square"></i>
                  </a>

                  <a class="btn btn-sm btn-outline-danger" data-bs-toggle="modal"
                    data-bs-target="#memberDeleteModal{{ $member->id }}">
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
@foreach ($members as $member )

<div class="modal fade" id="memberDeleteModal{{ $member->id }}" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title h5" id="confirmModalLabel">Confirm Action</h2><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">Are you sure you want to Delete this Member?</div>

      <form method="POST" action="{{ route('admin.team.destroy',$member->id) }}" class="modal-footer">
        @csrf
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
        <input type="submit" value="Confirm" class="btn btn-primary">
      </form>
    </div>
  </div>
</div>
@endforeach
@endsection