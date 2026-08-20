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
                    <h1 class="h3 mb-1">Portfolio Details</h1>
                </div>
            </div>

            <div class="d-flex align-items-end flex-column gap-3">
                <ul class="list-unstyled d-flex gap-1 mb-0">
                    <li><a class="link-opacity-25-hover" href="{{ route('admin.dashboard') }}">Dashboard</a> /</li>
                    <li><a class="link-opacity-25-hover" href="{{ route('admin.portfolio.index') }}">Portfolio List</a> /</li>
                    <li>Show</li>
                </ul>

                <div class="d-flex gap-2">
                    <a href="{{ route('admin.portfolio.edit', $portfolio->id) }}" class="btn btn-outline-primary btn-sm">
                        <i class="bi bi-pencil-square me-1"></i> Edit
                    </a>

                    <a class="btn btn-sm btn-outline-danger" data-bs-toggle="modal"
                        data-bs-target="#portfolioDeleteModal">
                        <i class="bi bi-trash me-1"></i> Delete
                    </a>
                </div>
            </div>
        </div>

        <div class="row g-3">

            {{-- Left column: image + meta info --}}
            <div class="col-lg-4">
                <section class="panel h-100">
                    <div class="p-3">
                        <img src="{{$portfolio->portfolio_image && Storage::disk('public')->exists($portfolio->portfolio_image)? asset('storage/'.$portfolio->portfolio_image ): asset('no-image.png') }}" alt="{{ $portfolio->portfolio_title }}"
                            class="rounded-3 w-100 mb-3"
                            style="height: 200px; object-fit: cover;">


                        <hr class="text-secondary-subtle">

                        <ul class="list-unstyled mb-0 small">
                            <li class="d-flex justify-content-between py-2 border-bottom border-secondary-subtle">
                                <span class="text-muted">Slug</span>
                                <code class="text-body">{{ $portfolio->portfolio_slug }}</code>
                            </li>

                            <li class="d-flex justify-content-between py-2 border-bottom border-secondary-subtle">
                                <span class="text-muted">Created At</span>
                                <span>{{ $portfolio->created_at->format('d M Y, h:i A') }}</span>
                            </li>

                            <li class="d-flex justify-content-between py-2">
                                <span class="text-muted">Updated At</span>
                                <span>{{ $portfolio->updated_at->format('d M Y, h:i A') }}</span>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>

            {{-- Right column: title + description --}}
            <div class="col-lg-8">
                <section class="panel h-100">
                    <div class="p-4">
                        <h1 class="h3 mb-3">{{ $portfolio->portfolio_title }}</h1>

                        <div class="mb-4">
                            <h2 class="h6 text-muted text-uppercase mb-2">Description</h2>
                            <div class="border border-secondary-subtle rounded-3 p-3 bg-body-tertiary lh-lg text-body text-break"
                                style="white-space: pre-line;">
                                {!! $portfolio->description!!}
                            </div>
                        </div>
                    </div>
                </section>
            </div>

        </div>
    </div>
</main>


<!-- Delete modal  -->
<div class="modal fade" id="portfolioDeleteModal" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title h5" id="confirmModalLabel">Confirm Action</h2><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">Are you sure you want to Delete this Portfolio?</div>

            <form method="POST" action="{{ route('admin.portfolio.destroy',$portfolio->id) }}" class=" modal-footer">
                @csrf
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                <input type="submit" value="Confirm" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>
@endsection