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
                    <h1 class="h3 mb-1">Blog Management</h1>
                </div>
            </div>
            <div>
                <ul class="list-unstyled d-flex gap-1">
                    <li>
                        <a class="link-opacity-25-hover" href="{{ route('admin.dashboard') }}">Dashboard </a>
                    </li>/
                    <li>
                        <a class="link-opacity-25-hover" href="{{ route('admin.blog.index') }}">Blog List</a>
                    </li>/
                    <li>Edit Blog</li>
                </ul>
            </div>
        </div>

        <section class="row g-3">
            <div class="col-12 col-xl-12">
                <form action="{{ route('admin.blog.update', $blog->id) }}" class="panel needs-validation" method="POST" enctype="multipart/form-data" novalidate>
                    @csrf
                    <div class="panel-header">
                        <div>
                            <h2 class="h5 mb-1 section-title">
                                <i class="bi bi-tools"></i>
                                <span>Edit blog</span>
                            </h2>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label" for="blogTitle">Title</label>
                            <input class="form-control" id="blogTitle" type="text" name="blog_title" value="{{ $blog->blog_title }}" required>
                            <div class="invalid-feedback">Title is required.</div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="blogSlug">Slug</label>
                            <input class="form-control" id="blogSlug" type="text" name="blog_slug" value="{{ $blog->blog_slug }}" required>
                            <div class="invalid-feedback">Blog Slug is required.</div>
                        </div>

                        <div class="col-12">

                            <label class="form-label" for="shortDescription">Short Description</label>

                            <textarea class="form-control summernote" id="shortDescription" rows="5" name="short_description">{{ $blog->short_description }}</textarea>

                        </div>

                        <div class="col-12">
                            <label class="form-label" for="longDescription">Long Description</label>
                            <textarea class="form-control summernote" id="longDescription" rows="5" name="long_description">{{ $blog->long_description }}</textarea>
                        </div>


                        <div class="col-12">

                            <label class="form-label" for="status">Status</label>

                            <select class="form-control" name="status" id="status">
                                <option value="draft" @selected($blog->status=='draft')>Draft</option>

                                <option value="pending" @selected($blog->status=='pending')>Pending</option>
                                <option value="published" @selected($blog->status=='published')>Published</option>
                            </select>

                        </div>

                        <div class="col-12">
                            <label class="form-label" for="blogImg">Image</label>
                            <input class="form-control" id="blogImg" type="file" name="blog_image" value="{{ $blog->blog_image }}">
                            <div class="invalid-feedback">Blog Image is required.</div>
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