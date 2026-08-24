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
                        <a class="link-opacity-25-hover" href="{{ route('admin.portfolio.index') }}">Portfolio List</a>
                    </li>/
                    <li>Create Portfolio</li>
                </ul>
            </div>
        </div>

        <section class="row g-3">
            <div class="col-12 col-xl-12">
                <form action="{{ route('admin.portfolio.store') }}" method="POST" class="panel needs-validation" enctype="multipart/form-data" novalidate>
                    @csrf
                    <div class="panel-header">
                        <div>
                            <h2 class="h5 mb-1 section-title">
                                <i class="bi bi-tools"></i>
                                <span>Create Portfolio</span>
                            </h2>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label" for="portfolioTitle">Portfolio Title</label>
                            <input class="form-control" id="portfolioTitle" type="text" name="portfolio_title" required>
                            <div class="invalid-feedback">Title is required.</div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="portfolioSlug">Slug</label>
                            <input class="form-control" id="portfolioSlug" type="text" name="portfolio_slug" required>
                            <div class="invalid-feedback">Slug is required.</div>
                        </div>

                        <div class="col-12">
                            <label class="form-label" for="description">Description</label>
                            <textarea class="form-control summernote" id="description" rows="5" name="description"></textarea>
                        </div>

                        <div class="col-12">

                            <label class="form-label" for="status">Status</label>
                            <select class="form-control" name="status" id="status">
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>

                        </div>

                        <div class="col-12">
                            <label class="form-label" for="portfolioImg">Image</label>
                            <input class="form-control" id="portfolioImg" type="file" name="portfolio_image">
                            <div class="invalid-feedback">Portfolio Image is required.</div>
                            <div class="mt-2">
                                <img id="portfolioImagePreview" src="" alt="" style="height:200px; display:none;">
                            </div>
                        </div>

                    </div>
                    <div class="d-flex justify-start mt-4">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>

        </section>
    </div>
</main>
@endsection