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
                        <a class="link-opacity-25-hover" href="{{ route('admin.portfolios') }}">Portfolio List</a>
                    </li>/
                    <li>Create Portfolio</li>
                </ul>
            </div>
        </div>

        <section class="row g-3">
            <div class="col-12 col-xl-12">
                <form class="panel needs-validation" novalidate>
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
                            <input class="form-control" id="portfolioSlug" type="text" required>
                            <div class="invalid-feedback">Slug is required.</div>
                        </div>

                        <div class="col-12">
                            <label class="form-label" for="description">Description</label>
                            <textarea class="form-control summernote" id="description" rows="5"></textarea>
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
                            <input class="form-control" id="portfolioImg" type="file">
                            <div class="invalid-feedback">Portfolio Image is required.</div>
                        </div>

                    </div>
                    <div class="d-flex justify-start mt-4">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>

            <!-- <div class="col-12 col-xl-5">
        <div class="panel h-100">
          <h2 class="h5 mb-3 section-title"><i class="bi bi-input-cursor-text" aria-hidden="true"></i><span>Input States</span></h2><input class="form-control mb-3" value="Default input"><input class="form-control is-valid mb-3" value="Valid input"><input class="form-control is-invalid mb-3" value="Invalid input">
          <div class="form-check"><input class="form-check-input" type="checkbox" id="sampleCheck" checked><label class="form-check-label" for="sampleCheck">Sample checkbox</label></div>
        </div>
      </div> -->

        </section>
    </div>
</main>
@endsection