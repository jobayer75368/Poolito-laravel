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
                    <h1 class="h3 mb-1">Portfolio Management</h1>
                </div>
            </div>
            <div>
                <ul class="list-unstyled d-flex gap-1">
                    <li>
                        <a class="link-opacity-25-hover" href="{{ route('admin.dashboard') }}">Dashboard </a>
                    </li>/
                    <li>
                        Portfolio List
                    </li>/
                    <li>
                        <a class="link-opacity-25-hover" href="{{ route('admin.portfolio.create') }}"> Create Portfolio</a>
                    </li>
                </ul>
            </div>

        </div>

        <section class="panel mt-3">
            <div class="panel-header">
                <div>
                    <h2 class="h5 mb-1 section-title"><i class="bi bi-table" aria-hidden="true"></i><span>Portfolio List</span></h2>
                </div>
                <div class="d-flex gap-2 justify-content-right">
                    <a class="d-flex justify-content-center align-items-center btn btn-sm btn-info" href="{{ route('admin.portfolio.create') }}">
                        <i class="bi bi-plus-square-fill fs-4"></i>Create Portfolio
                    </a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table align-middle mb-0" id="usersTable" data-searchable-table>
                    <thead>
                        <tr>
                            <th scope="col">Sl</th>
                            <th scope="col">Title</th>
                            <th scope="col">Portfolio Image</th>
                            <th scope="col">Status</th>
                            <th scope="col">Posted At</th>
                            <th scope="col" class="text-end">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($portfolios as $key=>$portfolio)
                        <tr class="fw-semibold mb-0">
                            <td>{{ $key+1 }}</td>
                            <td>{{ $portfolio->portfolio_title }}</td>
                            <td>
                                <img style="width: 120px;" src="{{$portfolio->portfolio_image && Storage::disk('public')->exists($portfolio->portfolio_image)? asset('storage/'.$portfolio->portfolio_image ): asset('no-image.png') }}" alt="{{ $portfolio->portfolio_title }}">
                            </td>
                            <td>
                                <span class="badge bg-{{ $portfolio->status=='active'?'success':'danger' }}">{{ ucwords($portfolio->status) }}</span>
                            </td>
                            <td>{{ $portfolio->created_at }}</td>
                            <td>
                                <div class="text-end d-flex justify-content-center align-items-center gap-2">

                                    <a class="btn btn-light btn-sm" href="{{ route('admin.portfolio.show',$portfolio->id) }}">
                                        <i class="bi bi-eye"></i>
                                    </a>

                                    <a class="btn btn-sm btn-outline-primary" href="{{ route('admin.portfolio.edit',$portfolio->id) }}">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>

                                    <a class="btn btn-sm btn-outline-danger" data-bs-toggle="modal"
                                        data-bs-target="#portfolioDeleteModal{{ $portfolio->id }}">
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
@foreach ($portfolios as $portfolio )

<div class="modal fade" id="portfolioDeleteModal{{ $portfolio->id }}" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title h5" id="confirmModalLabel">Confirm Action</h2><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">Are you sure you want to Delete this Portfolio?</div>

            <form method="POST" action="{{ route('admin.portfolio.destroy',$portfolio->id) }}" class="modal-footer">
                @csrf
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                <input type="submit" value="Confirm" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>
@endforeach

@endsection